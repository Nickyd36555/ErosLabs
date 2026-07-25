<?php
/**
 * Email Footer — Eros Peptides
 * Override: wp-content/themes/astra/woocommerce/emails/email-footer.php
 */
defined( 'ABSPATH' ) || exit;
?>
													</div>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>

					<!-- Footer accent bar -->
					<tr>
						<td>
							<div style="height:2px;background:linear-gradient(90deg,transparent,#5c7cfa,transparent);font-size:0;line-height:0;">&nbsp;</div>
						</td>
					</tr>

					<!-- Footer -->
					<tr>
						<td align="center" valign="top" id="template_footer" style="background-color:#141414;border-top:1px solid #2a2a2a;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td align="center" style="padding:28px 48px;">
										<p style="font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#666;line-height:1.8;margin:0 0 12px;">
											Questions? Contact us at <a href="mailto:support@erospeptides.com" style="color:#5c7cfa;text-decoration:none;">support@erospeptides.com</a><br>
											<a href="https://erospeptides.com" style="color:#666;text-decoration:none;">erospeptides.com</a> &nbsp;&middot;&nbsp; Portland, OR
										</p>
										<p style="margin:0;">
											<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" style="font-family:Arial,Helvetica,sans-serif;font-size:10px;letter-spacing:0.1em;text-transform:uppercase;color:#555;text-decoration:none;margin:0 10px;">Account</a>
											&nbsp;&middot;&nbsp;
											<a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" style="font-family:Arial,Helvetica,sans-serif;font-size:10px;letter-spacing:0.1em;text-transform:uppercase;color:#555;text-decoration:none;margin:0 10px;">Shop</a>
											&nbsp;&middot;&nbsp;
											<?php echo wp_kses_post( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ); ?>
										</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>

				</table>
			</td>
		</tr>
	</table>
</div>

</body>
</html>
