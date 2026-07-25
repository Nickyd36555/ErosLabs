<?php
/**
 * Customer new account email — Eros Peptides
 */
defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<p style="font-size:15px;line-height:1.8;color:#d4d4d4;margin:0 0 20px;">
	<?php printf( esc_html__( 'Welcome to Eros Peptides, %s.', 'woocommerce' ), esc_html( $user_login ) ); ?>
</p>
<p style="font-size:15px;line-height:1.8;color:#d4d4d4;margin:0 0 28px;">
	<?php esc_html_e( 'Your account has been created. You can manage your orders, track shipments, and update your details from your account dashboard.', 'woocommerce' ); ?>
</p>

<?php if ( 'yes' === get_option( 'woocommerce_registration_generate_password' ) && $password_generated ) : ?>
<p style="font-size:14px;line-height:1.8;color:#d4d4d4;margin:0 0 28px;">
	<?php printf( esc_html__( 'Your password has been automatically generated: %s', 'woocommerce' ), '<strong style="color:#f0ece4;font-family:\'Courier New\',Courier,monospace;">' . esc_html( $user_pass ) . '</strong>' ); ?>
</p>
<?php endif; ?>

<p style="text-align:center;margin:32px 0;">
	<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" style="display:inline-block;border:1px solid #5c7cfa;color:#5c7cfa;font-family:Arial,Helvetica,sans-serif;font-size:10px;letter-spacing:0.2em;text-transform:uppercase;padding:14px 40px;text-decoration:none;">
		<?php esc_html_e( 'Go to My Account', 'woocommerce' ); ?>
	</a>
</p>

<?php do_action( 'woocommerce_email_footer', $email ); ?>
