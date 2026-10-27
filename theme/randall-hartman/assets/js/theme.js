/* Randall Hartman: three small touches. Everything works without this file. */
( function () {
	var reduce = window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
	document.documentElement.classList.add( 'rh-js' );

	function set( btn, struck ) {
		btn.setAttribute( 'aria-pressed', String( struck ) );
		btn.parentNode.classList.toggle( 'is-clear', ! struck );
	}

	// "What I was taught": each line is written out clean, then crossed out as it
	// reaches the middle of the screen. Each line becomes a button so a tap toggles it.
	document.querySelectorAll( '.is-style-struck' ).forEach( function ( list ) {
		var items = Array.prototype.slice.call( list.querySelectorAll( 'li' ) ).map( function ( li ) {
			var btn = document.createElement( 'button' );
			btn.type = 'button';
			while ( li.firstChild ) {
				btn.appendChild( li.firstChild );
			}
			li.appendChild( btn );
			btn.addEventListener( 'click', function () {
				btn.dataset.touched = '1';
				set( btn, btn.getAttribute( 'aria-pressed' ) !== 'true' );
			} );
			set( btn, true );
			return btn;
		} );
		if ( reduce || ! ( 'IntersectionObserver' in window ) ) {
			return;
		}
		items.forEach( function ( btn ) {
			if ( btn.getBoundingClientRect().top > window.innerHeight * 0.55 ) {
				set( btn, false );
			}
		} );
		var io = new IntersectionObserver( function ( entries ) {
			entries.forEach( function ( e ) {
				if ( e.target.dataset.touched ) {
					return;
				}
				if ( e.isIntersecting || e.boundingClientRect.top < 0 ) {
					set( e.target, true );
				}
			} );
		}, { rootMargin: '0px 0px -45% 0px' } );
		items.forEach( function ( btn ) {
			io.observe( btn );
		} );
	} );

	// The "cover coming soon" card tilts toward the pointer.
	if ( ! reduce ) {
		document.querySelectorAll( '.rh-tilt' ).forEach( function ( card ) {
			card.addEventListener( 'pointermove', function ( e ) {
				var r = card.getBoundingClientRect();
				card.style.setProperty( '--ry', ( ( e.clientX - r.left ) / r.width - 0.5 ) * 28 + 'deg' );
				card.style.setProperty( '--rx', -( ( e.clientY - r.top ) / r.height - 0.5 ) * 20 + 'deg' );
			} );
			card.addEventListener( 'pointerleave', function () {
				card.style.setProperty( '--ry', '-12deg' );
				card.style.setProperty( '--rx', '0deg' );
			} );
		} );
	}

	// The footer name fills the width exactly.
	var name = document.querySelector( '.rh-foot-name' );
	function fit() {
		if ( ! name ) {
			return;
		}
		name.style.fontSize = '';
		var w = name.parentElement.clientWidth;
		var s = name.scrollWidth;
		if ( s > w ) {
			name.style.setProperty( 'font-size', ( parseFloat( getComputedStyle( name ).fontSize ) * w / s * 0.99 ) + 'px', 'important' );
		}
	}
	window.addEventListener( 'resize', fit );
	if ( document.fonts ) {
		document.fonts.ready.then( fit );
	}
	fit();
}() );
