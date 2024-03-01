<?php
/**
* Footer widget area
*
* @package Salient WordPress Theme
* @subpackage Partials
* @version 10.5
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$nectar_options = get_nectar_theme_options();

$using_footer_widget_area = ( ! empty( $nectar_options['enable-main-footer-area'] ) && $nectar_options['enable-main-footer-area'] === '1' ) ? 'true' : 'false';
$footer_columns           = ( ! empty( $nectar_options['footer_columns'] ) ) ? $nectar_options['footer_columns'] : '4';
$footer_has_widgets       = ( is_active_sidebar( 'Footer Area 1' ) || is_active_sidebar( 'Footer Area 2' ) || is_active_sidebar( 'Footer Area 3' ) || is_active_sidebar( 'Footer Area 4' ) ) ? 'true' : 'false';

if ( $using_footer_widget_area === 'true' ) { ?>

<div id="footer-widgets" data-has-widgets="<?php echo esc_attr( $footer_has_widgets ); ?>" data-cols="<?php echo esc_attr( $footer_columns ); ?>">
	<div class="container">
		<?php nectar_hook_before_footer_widget_area(); ?>

		<div class="row">
			<div class="col span_4">
				<div class="footer-logo">
					<a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('url');?>/wp-content/uploads/2023/05/vms-logo.png" /></a>
				</div>
			</div>
			<div class="col span_5"></div>
			<div class="col span_3">
				<div class="social-share">
					<ul>
						<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col span_3">
				<div class="footer-widget">
					<h3>Useful Links</h3>
					<ul>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Our Specialities</a></li>
						<li><a href="#">Centre of Excellence</a></li>
						<li><a href="#">Vinayaka Pharmacy</a></li>
						<li><a href="#">Departments</a></li>
					</ul>
				</div>
			</div>

			<div class="col span_3">
				<div class="footer-widget">
					<h3>&nbsp;</h3>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Telemedicine</a></li>
						<li><a href="#">Book an Appointment</a></li>
						<li><a href="#">Events</a></li>
					</ul>
				</div>
			</div>

			<div class="col span_6">
				<div class="footer-widget contact-widget">
					<h3>Contact Us</h3>
					<p class="address"><i class="fa fa-map-marker"></i>  NH 47, Sankari Main Road, Veerapandi (PO), Salem - 636 308, <br/>Tamil Nadu, India</p>
					<p class="phone"><i class="fa fa-phone"></i>  800 890 9000, 0427-3509000, 2200000, +91 63844 99023</p>
					<p class="email"><i class="fa fa-envelope"></i>  enquiry@vimshospitals.com, info@vinayakahospital.com</p>
					<p class="website"><i class="fa fa-globe"></i>  vimshospitalslm@gmail.com</p>
				</div>

				
			</div>

			<?php } ?>
		</div>
	</div>
</div>
