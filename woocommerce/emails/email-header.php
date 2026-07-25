<?php
/**
 * Email Header — Eros Peptides
 * Override: wp-content/themes/astra/woocommerce/emails/email-header.php
 */
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<title><?php echo esc_html( get_bloginfo( 'name', 'display' ) ); ?></title>
</head>
<body <?php echo is_rtl() ? 'rightmargin' : 'leftmargin'; ?>="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">

<div id="wrapper" dir="<?php echo is_rtl() ? 'rtl' : 'ltr'; ?>" style="background-color:#0c0c0c;padding:40px 0;">
	<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
		<tr>
			<td align="center" valign="top">
				<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_container" style="background-color:#141414;border:1px solid #2a2a2a;">

					<!-- Logo Header -->
					<tr>
						<td align="center" valign="top">
							<table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_header" style="background-color:#141414;border-bottom:1px solid #2a2a2a;">
								<tr>
									<td id="header_wrapper" align="center" style="padding:32px 48px 24px;">
										<h1 style="font-family:'Courier New',Courier,monospace;font-size:26px;font-weight:normal;color:#f0ece4;letter-spacing:0.04em;margin:0 0 20px;">Eros Peptides</h1>
										<!-- Midnight Blue accent bar -->
										<div style="height:2px;background:linear-gradient(90deg,transparent,#5c7cfa,transparent);font-size:0;line-height:0;">&nbsp;</div>
									</td>
								</tr>
							</table>
						</td>
					</tr>

					<!-- Status Banner -->
					<tr>
						<td align="center" valign="top">
							<table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color:#1c1c1c;border-bottom:1px solid #2a2a2a;">
								<tr>
									<td align="center" style="padding:32px 48px;">
										<p style="font-family:Arial,Helvetica,sans-serif;font-size:10px;letter-spacing:0.22em;text-transform:uppercase;color:#5c7cfa;margin:0 0 10px;"><?php echo esc_html( $email_heading ); ?></p>
									</td>
								</tr>
							</table>
						</td>
					</tr>

					<!-- Body -->
					<tr>
						<td align="center" valign="top">
							<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_body">
								<tr>
									<td valign="top" id="body_content" style="background-color:#141414;">
										<table border="0" cellpadding="20" cellspacing="0" width="100%">
											<tr>
												<td valign="top" style="padding:36px 48px;">
													<div id="body_content_inner">
