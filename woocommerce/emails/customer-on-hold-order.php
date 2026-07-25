<?php
/**
 * Customer on-hold order email — Eros Peptides
 */
defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<p style="font-size:15px;line-height:1.8;color:#d4d4d4;margin:0 0 28px;">
	<?php printf( esc_html__( 'Hi %s,', 'woocommerce' ), esc_html( $order->get_billing_first_name() ) ); ?>
	<?php esc_html_e( ' Your order has been received and is currently on hold pending payment confirmation. We\'ll notify you as soon as it is confirmed.', 'woocommerce' ); ?>
</p>

<?php do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email ); ?>
<?php do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email ); ?>
<?php do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email ); ?>

<p style="text-align:center;margin:32px 0;">
	<a href="<?php echo esc_url( $order->get_view_order_url() ); ?>" style="display:inline-block;border:1px solid #5c7cfa;color:#5c7cfa;font-family:Arial,Helvetica,sans-serif;font-size:10px;letter-spacing:0.2em;text-transform:uppercase;padding:14px 40px;text-decoration:none;">
		<?php esc_html_e( 'View Your Order', 'woocommerce' ); ?>
	</a>
</p>

<?php do_action( 'woocommerce_email_footer', $email ); ?>
