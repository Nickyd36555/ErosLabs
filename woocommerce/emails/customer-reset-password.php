<?php
/**
 * Customer reset password email — Eros Peptides
 */
defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<p style="font-size:15px;line-height:1.8;color:#d4d4d4;margin:0 0 20px;">
	<?php printf( esc_html__( 'Hi %s,', 'woocommerce' ), esc_html( $user_login ) ); ?>
</p>
<p style="font-size:15px;line-height:1.8;color:#d4d4d4;margin:0 0 28px;">
	<?php esc_html_e( 'A password reset request was made for your account. Click the button below to reset your password. If you did not request this, you can safely ignore this email.', 'woocommerce' ); ?>
</p>

<p style="text-align:center;margin:32px 0;">
	<a href="<?php echo esc_url( add_query_arg( array( 'key' => $reset_key, 'login' => rawurlencode( $user_login ) ), wc_get_endpoint_url( 'lost-password', '', wc_get_page_permalink( 'myaccount' ) ) ) ); ?>" style="display:inline-block;border:1px solid #5c7cfa;color:#5c7cfa;font-family:Arial,Helvetica,sans-serif;font-size:10px;letter-spacing:0.2em;text-transform:uppercase;padding:14px 40px;text-decoration:none;">
		<?php esc_html_e( 'Reset Your Password', 'woocommerce' ); ?>
	</a>
</p>

<?php do_action( 'woocommerce_email_footer', $email ); ?>
