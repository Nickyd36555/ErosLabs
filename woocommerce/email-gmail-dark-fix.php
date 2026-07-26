<?php
/**
 * Eros Peptides — WooCommerce Email Style Filter (Light Theme)
 * Add to your theme's functions.php
 *
 * Light theme works in Gmail dark mode — dark text on white is always readable.
 * No dark mode overrides needed.
 */

add_filter( 'woocommerce_email_styles', function( $css ) {
	$css .= '
#wrapper, body { background-color: #f4f4f4 !important; }
#template_container { background-color: #ffffff !important; border: 1px solid #e0e0e0 !important; border-radius: 0 !important; }
#template_header { background-color: #ffffff !important; border-bottom: 2px solid #5c7cfa !important; }
#header_wrapper { background-color: #ffffff !important; }
#body_content, #body_content table td, #body_content_inner_cell { background-color: #ffffff !important; color: #333333 !important; }
#template_footer, #template_footer td { background-color: #f4f4f4 !important; border-top-color: #e0e0e0 !important; }
p, td, th, div, address { color: #333333 !important; }
h1, h2 { color: #0a0a0a !important; font-family: "Courier New", Courier, monospace !important; font-weight: normal !important; }
h3 { color: #5c7cfa !important; }
a { color: #5c7cfa !important; }
.button a { border-color: #5c7cfa !important; color: #5c7cfa !important; background-color: transparent !important; }
';
	return $css;
}, 10, 1 );
