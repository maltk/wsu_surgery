/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	wp.customize( 'hd_t_dept_title', function( value ) {
		value.bind( function( to ) {
			$( '.dept-top-title span' ).text( to );
		} );
	} );
	wp.customize( 'hd_t_dept_title', function( value ) {
		value.bind( function( to ) {
			$( 'footer .copyright' ).text( to );
		} );
	} );
	wp.customize( 'ft_dept_title', function( value ) {
		value.bind( function( to ) {
			$( 'footer .dept-title-desc h2' ).text( to );
		} );
	} );
	wp.customize( 'ft_dept_desc', function( value ) {
		value.bind( function( to ) {
			$( 'footer .dept-title-desc p' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
} )( jQuery );
