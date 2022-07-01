<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_content_page_loop(); ?>
<!--        <section class="elementor-section elementor-top-section elementor-element elementor-element-f61bed2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f61bed2" data-element_type="section">-->
<!--            <div class="elementor-container elementor-column-gap-default">-->
<!--                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ae0f2e4" data-id="ae0f2e4" data-element_type="column" >-->
<!--                    <div class="elementor-widget-wrap elementor-element-populated Download" style="margin-top: 8rem;">-->
<!--                        <div class="elementor-element elementor-element-06ed399 elementor-widget elementor-widget-heading" data-id="06ed399" data-element_type="widget" data-widget_type="heading.default">-->
<!--                            <div class="elementor-widget-container">-->
<!--                                <h3 class="elementor-heading-title elementor-size-default">Download App</h3></div>-->
<!--                        </div>-->
<!--                        <div class="elementor-element elementor-element-6a4c3b7 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="6a4c3b7" data-element_type="widget" data-widget_type="divider.default">-->
<!--                            <div class="elementor-widget-container">-->
<!--                                <div class="elementor-divider">-->
<!--			<span class="elementor-divider-separator">-->
<!--						</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="elementor-element elementor-element-263f9a7 elementor-widget elementor-widget-text-editor" data-id="263f9a7" data-element_type="widget" data-widget_type="text-editor.default">-->
<!--                            <div class="elementor-widget-container">-->
<!--                                <p>Download the VastraApp now to create jobslips, check status of orders quickly, eliminate deadstock, get access to designs and karigar reports &amp; many more.</p>						</div>-->
<!--                        </div>-->
<!--                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-072000c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="072000c" data-element_type="section">-->
<!--                            <div class="elementor-container elementor-column-gap-default">-->
<!--                                <div class="elementor-column  elementor-inner-column elementor-element elementor-element-b3906fe" data-id="b3906fe" data-element_type="column">-->
<!--                                    <div class="elementor-widget-wrap elementor-element-populated">-->
<!--                                        <div class="elementor-element elementor-element-01a0393 elementor-widget elementor-widget-button" data-id="01a0393" data-element_type="widget" data-widget_type="button.default">-->
<!--                                            <div class="elementor-widget-container">-->
<!--                                                <div class="elementor-button-wrapper">-->
<!--                                                    <a href="#" class="elementor-button-link elementor-button elementor-size-md btn" role="button">-->
<!--                                                        <span class="elementor-button-content-wrapper">-->
<!--                                                            <span class="elementor-button-icon elementor-align-icon-left"><i aria-hidden="true" class="fab fa-google-play"></i></span>-->
<!--                                                            <span class="elementor-button-text">Get android app</span>-->
<!--                                                        </span>-->
<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="elementor-column  elementor-inner-column elementor-element elementor-element-90a34a4" data-id="90a34a4" data-element_type="column">-->
<!--                                    <div class="elementor-widget-wrap elementor-element-populated">-->
<!--                                        <div class="elementor-element elementor-element-626a6d0 elementor-widget elementor-widget-button" data-id="626a6d0" data-element_type="widget" data-widget_type="button.default">-->
<!--                                            <div class="elementor-widget-container">-->
<!--                                                <div class="elementor-button-wrapper">-->
<!--                                                    <a href="#" class="elementor-button-link elementor-button elementor-size-md btnIphone" role="button">-->
<!--                                                        <span class="elementor-button-content-wrapper">-->
<!--							                                <span class="elementor-button-icon elementor-align-icon-left"><i aria-hidden="true" class="fab fa-apple"></i></span>-->
<!--						                                    <span class="elementor-button-text">Get iphone app</span>-->
<!--		                                                </span>-->
<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </section>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a91a53e" data-id="a91a53e" data-element_type="column">-->
<!--                    <div class="elementor-widget-wrap elementor-element-populated marquee" style="margin-left: 4rem;">-->
<!--                        <div class="elementor-element elementor-element-8fef1c3 elementor-widget elementor-widget-image" data-id="8fef1c3" data-element_type="widget" data-widget_type="image.default">-->
<!--                            <div class="elementor-widget-container">-->
<!--                                <marquee class="imageMarquee" direction="up" height="500" behavior="alternate">-->
<!--                                    <img width="465" height="821" src="http://localhost/mywebsite/wp-content/uploads/2022/06/merchants.9edaff14-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="http://localhost/mywebsite/wp-content/uploads/2022/06/merchants.9edaff14-1.png 465w, http://localhost/mywebsite/wp-content/uploads/2022/06/merchants.9edaff14-1-114x300.png 170w" sizes="(max-width: 465px) 100vw, 465px">-->
<!--                                </marquee>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
		<?php    astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
