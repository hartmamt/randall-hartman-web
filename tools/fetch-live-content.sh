#!/usr/bin/env bash
# Save Randall's public posts, pages, categories and tags from the live site's REST API.
# Only the fields the test import needs are kept.
# Usage: tools/fetch-live-content.sh <output-dir>   (playground/content is the committed snapshot)
set -euo pipefail
out="${1:?output dir}"
mkdir -p "$out"
api="https://www.randallhartman.com/wp-json/wp/v2"
ua="Mozilla/5.0 (randall-hartman theme test import)"

fetch_all() { # endpoint file
	local endpoint="$1" file="$2" page=1 pages=1
	echo "[]" > "$out/$file"
	while [ "$page" -le "$pages" ]; do
		local hdr; hdr="$(mktemp)"
		curl -sSf -A "$ua" -D "$hdr" "$api/$endpoint?per_page=100&page=$page" -o "$out/.page.json"
		pages="$(grep -i '^x-wp-totalpages:' "$hdr" | tr -dc '0-9')"; pages="${pages:-1}"
		python3 -c "
import json, sys
keep = ('id', 'date', 'date_gmt', 'slug', 'title', 'content', 'parent', 'menu_order', 'categories', 'tags', 'name')
a = json.load(open(sys.argv[1]))
a += [{k: v for k, v in x.items() if k in keep} for x in json.load(open(sys.argv[2]))]
json.dump(a, open(sys.argv[1], 'w'))" "$out/$file" "$out/.page.json"
		rm -f "$hdr"; page=$((page + 1))
	done
	rm -f "$out/.page.json"
	echo "$file: $(python3 -c "import json,sys; print(len(json.load(open(sys.argv[1]))))" "$out/$file")"
}

fetch_all posts posts.json
fetch_all pages pages.json
fetch_all categories categories.json
fetch_all tags tags.json
