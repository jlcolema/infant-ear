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
//do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<section class="has_eae_slider elementor-section elementor-top-section elementor-element elementor-element-24aab386 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="24aab386" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-13aa4253" data-id="13aa4253" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-2239b363 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2239b363" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6747218f" data-id="6747218f" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-a18f322 elementor-widget elementor-widget-image" data-id="a18f322" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img width="1024" height="710" src="/wp-content/uploads/2023/08/baby-exam-image@2x-1024x710.png" class="attachment-large size-large wp-image-1082" alt="" loading="lazy" srcset="/wp-content/uploads/2023/08/baby-exam-image@2x-1024x710.png 1024w, /wp-content/uploads/2023/08/baby-exam-image@2x-600x416.png 600w, /wp-content/uploads/2023/08/baby-exam-image@2x-300x208.png 300w, /wp-content/uploads/2023/08/baby-exam-image@2x-768x532.png 768w, /wp-content/uploads/2023/08/baby-exam-image@2x.png 1270w" sizes="(max-width: 1024px) 100vw, 1024px">															</div>
				</div>
					</div>
		</div>
				<div class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2ac9a669" data-id="2ac9a669" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-6ab4c68b elementor-widget elementor-widget-heading" data-id="6ab4c68b" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h5 class="elementor-heading-title elementor-size-default">InfantEar Details</h5>		</div>
				</div>
				<div class="elementor-element elementor-element-15c8dfb6 elementor-widget elementor-widget-heading" data-id="15c8dfb6" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Adding InfantEar to your practice is easy and cost effective.</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-6a89b6cf elementor-widget elementor-widget-text-editor" data-id="6a89b6cf" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>Our unique system allows clinicians to both recognize and treat ear deformities in the first few weeks of life without the need for external consultations or referrals, resulting in greater access to treatment, improved patient outcomes and substantial cost savings.</p><p>&nbsp;</p><p>Our goal was to create an inexpensive and simple to use system that replaces the need for a costly, labor intensive, surgical ear procedure with a simplified outpatient device. Soft, biocompatible ear mold materials are packaged in a single-use, disposable kit for each individual child – preventing cross contamination.</p>						</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-34a3b350 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="34a3b350" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-209a5404" data-id="209a5404" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-5bb9478e elementor-widget elementor-widget-heading" data-id="5bb9478e" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h5 class="elementor-heading-title elementor-size-default">Training Made Easy</h5>		</div>
				</div>
				<div class="elementor-element elementor-element-243e25ef elementor-widget elementor-widget-heading" data-id="243e25ef" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Learn How to Use Our InfantEar Correction System</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-2d03d7e4 elementor-widget elementor-widget-text-editor" data-id="2d03d7e4" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>At TalexMedical, we are committed to assisting you and and your staff with the training necessary to offer this easy to use newborn ear molding system to your patients.</p>						</div>
				</div>
				<div class="elementor-element elementor-element-25b58de8 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="25b58de8" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
										<span class="elementor-icon-list-text">On-location training available based on location. Please call.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
										<span class="elementor-icon-list-text">Easily performed with video instructions available</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
										<span class="elementor-icon-list-text">New and improved solution for ear deformity correction</span>
									</li>
						</ul>
				</div>
				</div>
				<div class="elementor-element elementor-element-4823ca88 elementor-widget elementor-widget-button" data-id="4823ca88" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-sm" href="/watch-learn/">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Watch All Videos</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-739f14e9" data-id="739f14e9" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-7271241f elementor-widget elementor-widget-video" data-id="7271241f" data-element_type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/kUyrg8XjmUU&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.16.0 - 09-10-2023 */
.elementor-widget-video .elementor-widget-container{overflow:hidden;transform:translateZ(0)}.elementor-widget-video .elementor-wrapper{aspect-ratio:var(--video-aspect-ratio)}.elementor-widget-video .elementor-wrapper iframe,.elementor-widget-video .elementor-wrapper video{height:100%;width:100%;display:flex;border:none;background-color:#000}@supports not (aspect-ratio:1/1){.elementor-widget-video .elementor-wrapper{position:relative;overflow:hidden;height:0;padding-bottom:calc(100% / var(--video-aspect-ratio))}.elementor-widget-video .elementor-wrapper iframe,.elementor-widget-video .elementor-wrapper video{position:absolute;top:0;right:0;bottom:0;left:0}}.elementor-widget-video .elementor-open-inline .elementor-custom-embed-image-overlay{position:absolute;top:0;right:0;bottom:0;left:0;background-size:cover;background-position:50%}.elementor-widget-video .elementor-custom-embed-image-overlay{cursor:pointer;text-align:center}.elementor-widget-video .elementor-custom-embed-image-overlay:hover .elementor-custom-embed-play i{opacity:1}.elementor-widget-video .elementor-custom-embed-image-overlay img{display:block;width:100%;aspect-ratio:var(--video-aspect-ratio);-o-object-fit:cover;object-fit:cover;-o-object-position:center center;object-position:center center}@supports not (aspect-ratio:1/1){.elementor-widget-video .elementor-custom-embed-image-overlay{position:relative;overflow:hidden;height:0;padding-bottom:calc(100% / var(--video-aspect-ratio))}.elementor-widget-video .elementor-custom-embed-image-overlay img{position:absolute;top:0;right:0;bottom:0;left:0}}.elementor-widget-video .e-hosted-video .elementor-video{-o-object-fit:cover;object-fit:cover}.e-con-inner>.elementor-widget-video,.e-con>.elementor-widget-video{width:var(--container-widget-width);--flex-grow:var(--container-widget-flex-grow)}</style>		<div class="elementor-wrapper elementor-open-inline">
			<iframe class="elementor-video" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="How To Use The InfantEar Molding System" width="640" height="360" src="https://www.youtube.com/embed/kUyrg8XjmUU?controls=1&amp;rel=0&amp;playsinline=0&amp;modestbranding=0&amp;autoplay=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Finfanteardev.wpengine.com&amp;widgetid=1" id="widget2"></iframe>		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-25baa288 elementor-widget elementor-widget-text-editor" data-id="25baa288" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
													</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>