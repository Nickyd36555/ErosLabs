<?php
/**
 * Customer invoice / payment reminder email — Eros Peptides
 */
defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<p style="font-size:15px;line-height:1.8;color:#d4d4d4;margin:0 0 28px;">
	<?php printf( esc_html__( 'Hi %s,', 'woocommerce' ), esc_html( $order->get_billing_first_name() ) ); ?>
	<?php
	if ( $order->has_status( 'pending' ) ) {
		esc_html_e( ' An invoice has been created for your order. Please use the button below to complete your payment.', 'woocommerce' );
	} else {
		esc_html_e( ' Here is your invoice for the order below.', 'woocommerce' );
	}
	?>
</p>

<?php do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email ); ?>
<?php do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email ); ?>
<?php do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email ); ?>

<?php if ( $order->needs_payment() ) : ?>
<p style="text-align:center;margin:32px 0;">
	<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" style="display:inline-block;border:1px solid #5c7cfa;color:#5c7cfa;font-family:Arial,Helvetica,sans-serif;font-size:10px;letter-spacing:0.2em;text-transform:uppercase;padding:14px 40px;text-decoration:none;">
		<?php esc_html_e( 'Pay for This Order', 'woocommerce' ); ?>
	</a>
</p>
<?php endif; ?>

<?php do_action( 'woocommerce_email_footer', $email ); ?>
