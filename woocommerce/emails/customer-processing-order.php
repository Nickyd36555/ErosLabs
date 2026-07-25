<?php
/**
 * Customer processing order email — Eros Peptides
 * Override: wp-content/themes/astra/woocommerce/emails/customer-processing-order.php
 * @version 10.4.0 compatible
 */

use Automattic\WooCommerce\Utilities\FeaturesUtil;

defined( 'ABSPATH' ) || exit;

$email_improvements_enabled = class_exists( 'Automattic\WooCommerce\Utilities\FeaturesUtil' )
	? FeaturesUtil::feature_is_enabled( 'email_improvements' )
	: false;

do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<?php echo $email_improvements_enabled ? '<div class="email-introduction">' : ''; ?>
<p style="font-size:15px;line-height:1.8;color:#d4d4d4;margin:0 0 12px;">
	<?php
	if ( ! empty( $order->get_billing_first_name() ) ) {
		printf( esc_html__( 'Hi %s,', 'woocommerce' ), esc_html( $order->get_billing_first_name() ) );
	} else {
		esc_html_e( 'Hi,', 'woocommerce' );
	}
	?>
</p>
<p style="font-size:15px;line-height:1.8;color:#d4d4d4;margin:0 0 28px;">
	<?php esc_html_e( 'Your order has been received and is now being processed. We appreciate your trust in Eros Peptides — we\'ll have it on its way to you shortly.', 'woocommerce' ); ?>
</p>
<?php echo $email_improvements_enabled ? '</div>' : ''; ?>

<?php do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email ); ?>
<?php do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email ); ?>
<?php do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email ); ?>

<?php if ( $additional_content ) : ?>
	<?php echo $email_improvements_enabled ? '<table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation"><tr><td class="email-additional-content">' : ''; ?>
	<?php echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) ); ?>
	<?php echo $email_improvements_enabled ? '</td></tr></table>' : ''; ?>
<?php endif; ?>

<p style="text-align:center;margin:32px 0;">
	<a href="<?php echo esc_url( $order->get_view_order_url() ); ?>" style="display:inline-block;border:1px solid #5c7cfa;color:#5c7cfa;font-family:Arial,Helvetica,sans-serif;font-size:10px;letter-spacing:0.2em;text-transform:uppercase;padding:14px 40px;text-decoration:none;">
		<?php esc_html_e( 'View Your Order', 'woocommerce' ); ?>
	</a>
</p>

<?php do_action( 'woocommerce_email_footer', $email ); ?>
