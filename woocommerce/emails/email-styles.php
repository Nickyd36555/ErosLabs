<?php
/**
 * Email Styles — Eros Peptides
 * Override: wp-content/themes/astra/woocommerce/emails/email-styles.php
 */
defined( 'ABSPATH' ) || exit;
?>
body {
	margin: 0;
	padding: 0;
	background-color: #0c0c0c;
	font-family: Georgia, 'Times New Roman', serif;
	color: #d4d4d4;
	-webkit-font-smoothing: antialiased;
}

#wrapper {
	background-color: #0c0c0c;
	padding: 40px 0;
}

#template_container {
	background-color: #141414;
	border: 1px solid #2a2a2a;
	border-radius: 0;
}

#template_header {
	background-color: #141414;
	border-bottom: 1px solid #2a2a2a;
	border-radius: 0;
}

#template_header h1,
#template_header h1 a {
	font-family: 'Courier New', Courier, monospace;
	font-size: 26px;
	font-weight: normal;
	color: #f0ece4 !important;
	letter-spacing: 0.04em;
	text-decoration: none;
	margin: 0;
	padding: 28px 48px;
	display: block;
	text-align: center;
}

#header_wrapper {
	padding: 0;
}

#template_body {
	background-color: #141414;
}

#body_content {
	background-color: #141414;
}

#body_content table td {
	padding: 36px 48px;
}

#body_content p {
	font-size: 15px;
	line-height: 1.8;
	color: #d4d4d4;
	margin: 0 0 20px;
}

#body_content_inner p {
	font-size: 15px;
	line-height: 1.8;
	color: #d4d4d4;
}

h2 {
	font-family: 'Courier New', Courier, monospace;
	font-size: 20px;
	font-weight: normal;
	color: #f0ece4;
	margin: 0 0 24px;
}

h3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: normal;
	letter-spacing: 0.22em;
	text-transform: uppercase;
	color: #5c7cfa;
	margin: 32px 0 14px;
	padding-bottom: 10px;
	border-bottom: 1px solid #2a2a2a;
}

a {
	color: #5c7cfa;
	text-decoration: none;
}

img {
	max-width: 100%;
	height: auto;
}

/* Order table */
.td {
	color: #d4d4d4;
	border: 1px solid #2a2a2a;
	vertical-align: middle;
	font-family: Georgia, serif;
	font-size: 14px;
}

.text {
	color: #d4d4d4;
	font-family: Georgia, serif;
	font-size: 14px;
}

.woocommerce-order-items__product-name,
.product-name {
	color: #f0ece4 !important;
	font-size: 14px;
}

#body_content table.td td {
	padding: 12px 16px;
	border-color: #2a2a2a;
}

/* Totals */
#body_content table.td tfoot td {
	color: #d4d4d4;
	border-top: 1px solid #2a2a2a;
	font-size: 14px;
}

#body_content table.td tfoot tr:last-child td {
	color: #5c7cfa;
	font-family: 'Courier New', Courier, monospace;
	font-size: 18px;
	font-weight: normal;
}

/* Address */
address {
	font-style: normal;
	font-size: 13px;
	line-height: 1.7;
	color: #d4d4d4;
	font-family: Arial, Helvetica, sans-serif;
}

/* Footer */
#template_footer {
	background-color: #141414;
	border-top: 1px solid #2a2a2a;
}

#template_footer td {
	padding: 28px 48px;
	text-align: center;
}

#template_footer p,
#template_footer a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #666;
	line-height: 1.8;
	text-decoration: none;
}

#template_footer a:hover {
	color: #5c7cfa;
}

/* CTA button */
.button a,
.button-blue a {
	display: inline-block;
	background-color: transparent !important;
	border: 1px solid #5c7cfa !important;
	color: #5c7cfa !important;
	font-family: Arial, Helvetica, sans-serif !important;
	font-size: 10px !important;
	letter-spacing: 0.2em !important;
	text-transform: uppercase !important;
	padding: 14px 40px !important;
	text-decoration: none !important;
	border-radius: 0 !important;
}

/* Order info blocks */
.order-info-block {
	background-color: #1c1c1c;
	border: 1px solid #2a2a2a;
	padding: 18px 20px;
}

.order-info-label {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	letter-spacing: 0.2em;
	text-transform: uppercase;
	color: #5c7cfa;
	margin-bottom: 6px;
}

.order-info-value {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #d4d4d4;
	line-height: 1.6;
}
