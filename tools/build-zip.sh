#!/usr/bin/env bash
# Build the installable theme zip: Appearance > Themes > Add New > Upload Theme.
# Usage: tools/build-zip.sh [output-dir]   (default: dist/)
# Run `tools/build-zip.sh playground` after theme changes: the Playground preview installs that copy.
set -euo pipefail
root="$(cd "$(dirname "$0")/.." && pwd)"
out="$(mkdir -p "${1:-$root/dist}" && cd "${1:-$root/dist}" && pwd)"
mkdir -p "$out"
version="$(sed -n 's/^Version: *//p' "$root/theme/randall-hartman/style.css")"
rm -f "$out/randall-hartman.zip"
(cd "$root/theme" && zip -qr -X "$out/randall-hartman.zip" randall-hartman -x '*.DS_Store')
echo "$out/randall-hartman.zip (version $version)"
