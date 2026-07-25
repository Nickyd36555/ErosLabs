<?php
/**
 * Customer cancelled order email — Eros Peptides
 */
defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<p style="font-size:15px;line-height:1.8;color:#d4d4d4;margin:0 0 28px;">
	<?php printf( esc_html__( 'Hi %s,', 'woocommerce' ), esc_html( $order->get_billing_first_name() ) ); ?>
	<?php esc_html_e( ' Your order has been cancelled. If you believe this is an error or have any questions, please contact us at support@erospeptides.com.', 'woocommerce' ); ?>
</p>

<?php do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email ); ?>
<?php do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email ); ?>
<?php do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email ); ?>

<?php do_action( 'woocommerce_email_footer', $email ); ?>
