<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>
<style>
    @media only screen and (max-width: 600px){
        .marquee{
            margin-left: 0!important;
        }
        .imageMarquee{
            height: 300px!important;
        }
        .btn{
            text-transform: uppercase;
            border-radius: 8px 8px 8px 8px!important;
            padding: 12px 12px 12px 12px!important;
            margin-left: 20%;
        }
        .btnIphone{
            text-transform: uppercase;
            border-radius: 8px 8px 8px 8px!important;
            padding: 12px 20px 12px 20px!important;
            margin-left: 20%;
        }
        .Download{
            margin-top: 0!important;
        }
        .phone img{
            width: 420px!important;
        }
        .elementor-384 .elementor-element.elementor-element-9c25cf4 {
            left: -14px!important;
        }
        .elementor-384 .elementor-element.elementor-element-9c25cf4 {
            width: 380px!important;
            max-width: 380px!important;
            top: 4px;
        }
        .elementor-384 .elementor-element.elementor-element-9c25cf4 > .elementor-widget-container {
            margin: 0px 0px 0px 0px;
            --e-transform-translateX: 7px;
        }
        .elementor-384 .elementor-element.elementor-element-bac836e > .elementor-widget-container {
            --e-transform-translateX: 5px;
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
        }
        .elementor-384 .elementor-element.elementor-element-3308bf9 > .elementor-widget-container {
            --e-transform-translateY: -12px;
            --e-transform-translateX: 5px;
            --e-transform-scale: 0.77;
        }
        .elementor-384 .elementor-element.elementor-element-327cc75 > .elementor-widget-container {
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
            --e-transform-translateX: 5px;
        }
        .elementor-384 .elementor-element.elementor-element-d0858de > .elementor-widget-container{
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
            --e-transform-translateX: 5px;
        }
        .elementor-384 .elementor-element.elementor-element-8f0728e > .elementor-widget-container{
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
            --e-transform-translateX: 5px;
        }
        .elementor-384 .elementor-element.elementor-element-699105a > .elementor-widget-container{
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
            --e-transform-translateX: 5px;
        }
        .elementor-384 .elementor-element.elementor-element-e0ebc79 > .elementor-widget-container{
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
            --e-transform-translateX: 5px;
        }
        .elementor-384 .elementor-element.elementor-element-96650df > .elementor-widget-container{
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
            --e-transform-translateX: 5px;
        }
        .elementor-384 .elementor-element.elementor-element-cb00259 > .elementor-widget-container{
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
            --e-transform-translateX: 5px;
        }
        .elementor-384 .elementor-element.elementor-element-9a84c3c > .elementor-widget-container{
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
            --e-transform-translateX: 5px;
        }
        .elementor-384 .elementor-element.elementor-element-b56df60 > .elementor-widget-container{
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
            --e-transform-translateX: 5px;
        }
        .elementor-384 .elementor-element.elementor-element-aa999c7 > .elementor-widget-container{
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
            --e-transform-translateX: 5px;
        }
    }
    @media only screen and (max-width: 768px) and (min-width: 600px) {
        .imageMarquee{
            height: 400px!important;
        }
        .Download{
            margin-top: 0!important;
        }
        .btn{
            text-transform: uppercase;
        }
        .btnIphone{
            padding-left: 40px!important;
            padding-right: 55px!important;
            text-transform: uppercase;
        }
        .elementor-384 .elementor-element.elementor-element-bac836e > .elementor-widget-container {
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }
        .elementor-384 .elementor-element.elementor-element-3308bf9 > .elementor-widget-container {
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }
        .elementor-384 .elementor-element.elementor-element-327cc75 > .elementor-widget-container{
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }
        .elementor-384 .elementor-element.elementor-element-d0858de > .elementor-widget-container{
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }
        .elementor-384 .elementor-element.elementor-element-8f0728e > .elementor-widget-container{
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }
        .elementor-384 .elementor-element.elementor-element-699105a > .elementor-widget-container{
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }
        .elementor-384 .elementor-element.elementor-element-e0ebc79 > .elementor-widget-container{
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }
        .elementor-384 .elementor-element.elementor-element-96650df > .elementor-widget-container{
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }
        .elementor-384 .elementor-element.elementor-element-cb00259 > .elementor-widget-container{
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }
        .elementor-384 .elementor-element.elementor-element-9a84c3c > .elementor-widget-container{
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }
        .elementor-384 .elementor-element.elementor-element-b56df60 > .elementor-widget-container{
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }
        .elementor-384 .elementor-element.elementor-element-aa999c7 > .elementor-widget-container{
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }
    }
</style>
<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>

<a
	class="skip-link screen-reader-text"
	href="#content"
	role="link"
	title="<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
		<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
</a>

<div
<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<?php
	astra_header_before();

	astra_header();

	astra_header_after();

	astra_content_before();
	?>
	<div id="content" class="site-content">
		<div class="ast-container">
		<?php astra_content_top(); ?>
