<?php
/**
 * Eros Peptides — WooCommerce Email Styles
 * Add this code to your theme's functions.php
 */

// Midnight Blue email styles
add_filter( 'woocommerce_email_styles', function( $css, $email ) {
    $custom = '
#wrapper, body { background-color: #0c0c0c !important; font-family: Georgia, serif !important; }
#template_container { background-color: #141414 !important; border: 1px solid #2a2a2a !important; border-radius: 0 !important; box-shadow: none !important; }
#template_header { background-color: #141414 !important; border-radius: 0 !important; }
#template_header h1, #template_header h1 a { font-family: "Courier New", Courier, monospace !important; font-size: 26px !important; font-weight: normal !important; color: #f0ece4 !important; letter-spacing: 0.04em !important; }
#header_wrapper { background-color: #141414 !important; border-bottom: 2px solid #5c7cfa !important; }
#body_content, #body_content table td { background-color: #141414 !important; color: #d4d4d4 !important; }
#body_content p { color: #d4d4d4 !important; font-size: 15px !important; line-height: 1.8 !important; }
h2 { color: #f0ece4 !important; font-family: "Courier New", Courier, monospace !important; font-weight: normal !important; }
h3 { color: #5c7cfa !important; font-family: Arial, sans-serif !important; font-size: 10px !important; letter-spacing: 0.2em !important; text-transform: uppercase !important; border-bottom: 1px solid #2a2a2a !important; padding-bottom: 8px !important; }
a { color: #5c7cfa !important; }
.td { color: #d4d4d4 !important; border-color: #2a2a2a !important; background-color: #141414 !important; font-family: Georgia, serif !important; font-size: 14px !important; }
table.td { background-color: #141414 !important; }
table.td td { background-color: #141414 !important; border-color: #2a2a2a !important; color: #d4d4d4 !important; padding: 12px 16px !important; }
table.td th { background-color: #1c1c1c !important; border-color: #2a2a2a !important; color: #888 !important; font-family: Arial, sans-serif !important; font-size: 10px !important; letter-spacing: 0.12em !important; text-transform: uppercase !important; }
table.td tfoot td { border-top: 1px solid #2a2a2a !important; color: #d4d4d4 !important; }
table.td tfoot tr:last-child td { color: #5c7cfa !important; font-family: "Courier New", Courier, monospace !important; font-size: 18px !important; font-weight: normal !important; }
#template_footer td { background-color: #141414 !important; border-top: 1px solid #2a2a2a !important; }
#template_footer p, #template_footer a { color: #555 !important; font-size: 11px !important; }
.button a { background-color: transparent !important; border: 1px solid #5c7cfa !important; color: #5c7cfa !important; border-radius: 0 !important; font-size: 10px !important; letter-spacing: 0.2em !important; text-transform: uppercase !important; }
';
    return $css . $custom;
}, 10, 2 );
