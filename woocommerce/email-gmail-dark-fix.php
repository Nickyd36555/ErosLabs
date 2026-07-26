<?php
/**
 * Eros Peptides — Gmail Dark Mode Fix
 * Add both snippets to your theme's functions.php
 *
 * 1. Adds @media (prefers-color-scheme: dark) to the email <style> block
 *    Gmail mobile app supports this media query, unlike Gmail web.
 *
 * 2. Injects color-scheme meta tags into the email <head> via wp_mail filter
 *    Tells Gmail "this email already has a dark theme, leave it alone."
 */

// 1. Dark mode media query + Gmail [data-ogsc] force-dark override
add_filter( 'woocommerce_email_styles', function( $css ) {
	$css .= '
@media (prefers-color-scheme: dark) {
	body, #outer_wrapper { background-color: #0c0c0c !important; }
	#inner_wrapper, #template_container, #template_header, #body_content, #body_content table td, #body_content_inner_cell { background-color: #141414 !important; }
	#template_footer, #template_footer td { background-color: #141414 !important; border-top-color: #2a2a2a !important; }
	p, td, th, div, span, address { color: #d4d4d4 !important; }
	h1, h2 { color: #f0ece4 !important; }
	h3, a { color: #5c7cfa !important; }
}
[data-ogsc] body, [data-ogsc] #outer_wrapper { background-color: #0c0c0c !important; }
[data-ogsc] #inner_wrapper, [data-ogsc] #template_container, [data-ogsc] #template_header,
[data-ogsc] #body_content, [data-ogsc] #body_content table td, [data-ogsc] #body_content_inner_cell { background-color: #141414 !important; }
[data-ogsc] #template_footer, [data-ogsc] #template_footer td { background-color: #141414 !important; }
[data-ogsc] p, [data-ogsc] td, [data-ogsc] th, [data-ogsc] div, [data-ogsc] span, [data-ogsc] address { color: #d4d4d4 !important; }
[data-ogsc] h1, [data-ogsc] h2 { color: #f0ece4 !important; }
[data-ogsc] h3, [data-ogsc] a { color: #5c7cfa !important; }
';
	return $css;
}, 10, 1 );

// 2. Inject color-scheme meta tags so Gmail does not recolor the email
add_filter( 'wp_mail', function( $args ) {
	if ( ! empty( $args['message'] ) && false !== strpos( $args['message'], '</head>' ) ) {
		$meta  = "\t\t<meta name=\"color-scheme\" content=\"dark light\">\n";
		$meta .= "\t\t<meta name=\"supported-color-schemes\" content=\"dark light\">\n";
		$args['message'] = str_replace( '</head>', $meta . "\t</head>", $args['message'] );
	}
	return $args;
} );
