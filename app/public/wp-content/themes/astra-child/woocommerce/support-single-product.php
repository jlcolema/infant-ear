<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<section class="has_eae_slider elementor-section elementor-top-section elementor-element elementor-element-4860674d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4860674d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
	<div class="elementor-container elementor-column-gap-default">
		<div class="has_eae_slider elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1b9ffb0e" data-id="1b9ffb0e" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-1505b73a elementor-widget elementor-widget-image" data-id="1505b73a" data-element_type="widget" data-widget_type="image.default">
					<div class="elementor-widget-container">
						<img width="100" height="100" src="/wp-content/uploads/2023/08/headset-solid@2x.png" class="attachment-large size-large wp-image-1084" alt="" loading="lazy">
					</div>
				</div>
				<div class="elementor-element elementor-element-2750e6d8 elementor-widget elementor-widget-heading" data-id="2750e6d8" data-element_type="widget" data-widget_type="heading.default">
					<div class="elementor-widget-container">
						<h5 class="elementor-heading-title elementor-size-default">How Can We Help?</h5>
					</div>
				</div>
				<div class="elementor-element elementor-element-1536fd74 elementor-widget elementor-widget-text-editor" data-id="1536fd74" data-element_type="widget" data-widget_type="text-editor.default">
					<div class="elementor-widget-container"></div>
				</div>
				<div class="elementor-element elementor-element-2a5436f elementor-align-center elementor-widget elementor-widget-button" data-id="2a5436f" data-element_type="widget" data-widget_type="button.default">
					<div class="elementor-widget-container">
						<div class="elementor-button-wrapper">
							<a class="elementor-button elementor-button-link elementor-size-sm" href="/contact-us/">
								<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Customer Support</span>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="has_eae_slider elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-123f20e8" data-id="123f20e8" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-4ccde262 elementor-widget elementor-widget-image" data-id="4ccde262" data-element_type="widget" data-widget_type="image.default">
					<div class="elementor-widget-container">
						<img width="93" height="101" src="/wp-content/uploads/2023/08/stethoscope@2x.png" class="attachment-large size-large wp-image-1085" alt="" loading="lazy">
					</div>
				</div>
				<div class="elementor-element elementor-element-6368c46a elementor-widget elementor-widget-heading" data-id="6368c46a" data-element_type="widget" data-widget_type="heading.default">
					<div class="elementor-widget-container">
						<h5 class="elementor-heading-title elementor-size-default">Our Doctor Network</h5>
					</div>
				</div>
				<div class="elementor-element elementor-element-34178ee5 elementor-widget elementor-widget-text-editor" data-id="34178ee5" data-element_type="widget" data-widget_type="text-editor.default">
					<div class="elementor-widget-container"></div>
				</div>
				<div class="elementor-element elementor-element-6c578d13 elementor-align-center elementor-widget elementor-widget-button" data-id="6c578d13" data-element_type="widget" data-widget_type="button.default">
					<div class="elementor-widget-container">
						<div class="elementor-button-wrapper">
							<a class="elementor-button elementor-button-link elementor-size-sm" href="/find-a-doctor/">
								<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">View / Join Network</span>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="has_eae_slider elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2427e1fc" data-id="2427e1fc" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-62fd4b6c elementor-widget elementor-widget-image" data-id="62fd4b6c" data-element_type="widget" data-widget_type="image.default">
					<div class="elementor-widget-container">
						<img width="75" height="100" src="/wp-content/uploads/2023/08/file-lines-regular@2x.png" class="attachment-large size-large wp-image-1086" alt="" loading="lazy">
					</div>
				</div>
				<div class="elementor-element elementor-element-407a86f5 elementor-widget elementor-widget-heading" data-id="407a86f5" data-element_type="widget" data-widget_type="heading.default">
					<div class="elementor-widget-container">
						<h5 class="elementor-heading-title elementor-size-default">Related Articles</h5>
					</div>
				</div>
				<div class="elementor-element elementor-element-55585133 elementor-widget elementor-widget-text-editor" data-id="55585133" data-element_type="widget" data-widget_type="text-editor.default">
					<div class="elementor-widget-container"></div>
				</div>
				<div class="elementor-element elementor-element-72d24fa elementor-align-center elementor-widget elementor-widget-button" data-id="72d24fa" data-element_type="widget" data-widget_type="button.default">
					<div class="elementor-widget-container">
						<div class="elementor-button-wrapper">
							<a class="elementor-button elementor-button-link elementor-size-sm" href="/blog/">
								<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">View Articles</span>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
