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

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
    <?php astra_head_top(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <?php astra_head_bottom(); ?>
</head>
<style>
    @media only screen and (max-width: 600px) {
        .marquee {
            margin-left: 0 !important;
        }

        .imageMarquee {
            height: 300px !important;
        }

        .btn {
            text-transform: uppercase;
            border-radius: 8px 8px 8px 8px !important;
            padding: 12px 12px 12px 12px !important;
            margin-left: 20%;
        }

        .btnIphone {
            text-transform: uppercase;
            border-radius: 8px 8px 8px 8px !important;
            padding: 12px 20px 12px 20px !important;
            margin-left: 20%;
        }

        .Download {
            margin-top: 0 !important;
        }

        .phone img {
            width: 420px !important;
        }

        .elementor-384 .elementor-element.elementor-element-9c25cf4 {
            left: -14px !important;
        }

        .elementor-384 .elementor-element.elementor-element-9c25cf4 {
            width: 380px !important;
            max-width: 380px !important;
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

        .elementor-384 .elementor-element.elementor-element-d0858de > .elementor-widget-container {
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
            --e-transform-translateX: 5px;
        }

        .elementor-384 .elementor-element.elementor-element-8f0728e > .elementor-widget-container {
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
            --e-transform-translateX: 5px;
        }

        .elementor-384 .elementor-element.elementor-element-699105a > .elementor-widget-container {
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
            --e-transform-translateX: 5px;
        }

        .elementor-384 .elementor-element.elementor-element-e0ebc79 > .elementor-widget-container {
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
            --e-transform-translateX: 5px;
        }

        .elementor-384 .elementor-element.elementor-element-96650df > .elementor-widget-container {
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
            --e-transform-translateX: 5px;
        }

        .elementor-384 .elementor-element.elementor-element-cb00259 > .elementor-widget-container {
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
            --e-transform-translateX: 5px;
        }

        .elementor-384 .elementor-element.elementor-element-9a84c3c > .elementor-widget-container {
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
            --e-transform-translateX: 5px;
        }

        .elementor-384 .elementor-element.elementor-element-b56df60 > .elementor-widget-container {
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
            --e-transform-translateX: 5px;
        }

        .elementor-384 .elementor-element.elementor-element-aa999c7 > .elementor-widget-container {
            --e-transform-translateY: -12px;
            --e-transform-scale: 0.77;
            --e-transform-translateX: 5px;
        }
    }

    @media only screen and (max-width: 768px) and (min-width: 600px) {
        .imageMarquee {
            height: 400px !important;
        }

        .Download {
            margin-top: 0 !important;
        }

        .btn {
            text-transform: uppercase;
        }

        .btnIphone {
            padding-left: 40px !important;
            padding-right: 55px !important;
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

        .elementor-384 .elementor-element.elementor-element-327cc75 > .elementor-widget-container {
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }

        .elementor-384 .elementor-element.elementor-element-d0858de > .elementor-widget-container {
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }

        .elementor-384 .elementor-element.elementor-element-8f0728e > .elementor-widget-container {
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }

        .elementor-384 .elementor-element.elementor-element-699105a > .elementor-widget-container {
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }

        .elementor-384 .elementor-element.elementor-element-e0ebc79 > .elementor-widget-container {
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }

        .elementor-384 .elementor-element.elementor-element-96650df > .elementor-widget-container {
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }

        .elementor-384 .elementor-element.elementor-element-cb00259 > .elementor-widget-container {
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }

        .elementor-384 .elementor-element.elementor-element-9a84c3c > .elementor-widget-container {
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }

        .elementor-384 .elementor-element.elementor-element-b56df60 > .elementor-widget-container {
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }

        .elementor-384 .elementor-element.elementor-element-aa999c7 > .elementor-widget-container {
            --e-transform-translateY: 28px;
            --e-transform-scale: 0.93;
        }
    }

    h1, h2, h3, h4, h5, h6 {
        margin-top: 0;
        margin-bottom: .5rem
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem
    }

    dt {
        font-weight: 500
    }

    b, strong {
        font-weight: bolder
    }

    small {
        font-size: 80%
    }

    a {
        color: #0191d0;
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects
    }

    a:hover {
        color: #015c84;
        text-decoration: underline
    }

    caption {
        padding-top: .75rem;
        padding-bottom: .75rem;
        color: rgba(25, 40, 102, .54);
        text-align: left;
        caption-side: bottom
    }

    label {
        display: inline-block;
        margin-bottom: .5rem
    }

    a {
        color: #0191d0;
        text-decoration: none;
        outline: 0
    }

    a:focus, a:hover {
        text-decoration: underline;
        outline: 0;
        color: #015c84;
        outline-offset: -2px
    }

    .lead, p.lead {
        font-size: 1.25rem;
        font-weight: 300
    }

    .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
        margin-bottom: .5rem;
        font-family: Hind, sans-serif;
        font-weight: 500;
        line-height: 1.3;
        color: inherit
    }

    .h1, h1 {
        font-size: 2.25rem
    }

    .h2, h2 {
        font-size: 2.5rem
    }

    .h3, h3 {
        font-size: 2rem
    }

    .h4, h4 {
        font-size: 1.25rem
    }

    .h5, h5 {
        font-size: 1.125rem
    }

    .h6, h6 {
        font-size: 1.11rem
    }

    .display-1 {
        font-size: 6rem;
        line-height: 7rem;
        font-weight: 300;
        letter-spacing: -.04em
    }

    .display-2 {
        font-size: 3.5rem;
        line-height: 3.5rem;
        font-weight: 400;
        letter-spacing: -.02em
    }

    .display-3 {
        font-size: 2.8125rem;
        line-height: 3rem;
        font-weight: 400
    }

    .display-4 {
        font-size: 1.5rem;
        line-height: 2rem;
        font-weight: 400
    }

    .pmd-display1 {
        font-size: 6rem;
        line-height: 7rem;
        font-weight: 300;
        letter-spacing: -.04em
    }

    .pmd-display2 {
        font-size: 3.5rem;
        line-height: 3.5rem;
        font-weight: 400;
        letter-spacing: -.02em
    }

    .pmd-display3 {
        font-size: 2.8125rem;
        line-height: 3rem;
        font-weight: 400
    }

    .pmd-display4 {
        font-size: 1.5rem;
        line-height: 2.5rem;
        font-weight: 400
    }

    .pmd-headline {
        font-size: 1.5rem;
        line-height: inherit;
        font-weight: 400
    }

    .pmd-title {
        font-size: 1.25rem;
        line-height: inherit;
        font-weight: 400
    }

    .pmd-subheading2 {
        font-size: 1rem;
        line-height: inherit;
        font-weight: 400
    }

    .pmd-subheading1 {
        font-size: .85rem;
        line-height: inherit;
        font-weight: 500
    }

    .pmd-body2 {
        font-size: .875rem;
        line-height: 1.5rem;
        font-weight: 500
    }

    .pmd-body1 {
        font-size: .875rem;
        line-height: 1.25rem;
        font-weight: 400
    }

    .pmd-caption {
        font-size: .75rem;
        line-height: 1.25rem;
        font-weight: 400;
        letter-spacing: .08em
    }

    .pmd-z-depth-1 {
        -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12)
    }

    .pmd-z-depth-2 {
        -moz-box-shadow: 0 3px 5px -1px rgba(25, 40, 102, .2), 0 6px 10px 0 rgba(25, 40, 102, .14), 0 1px 18px 0 rgba(25, 40, 102, .12);
        -webkit-box-shadow: 0 3px 5px -1px rgba(25, 40, 102, .2), 0 6px 10px 0 rgba(25, 40, 102, .14), 0 1px 18px 0 rgba(25, 40, 102, .12);
        box-shadow: 0 3px 5px -1px rgba(25, 40, 102, .2), 0 6px 10px 0 rgba(25, 40, 102, .14), 0 1px 18px 0 rgba(25, 40, 102, .12)
    }

    .pmd-z-depth-3 {
        -moz-box-shadow: 0 5px 5px -3px rgba(25, 40, 102, .2), 0 8px 10px 1px rgba(25, 40, 102, .14), 0 3px 14px 2px rgba(25, 40, 102, .12);
        -webkit-box-shadow: 0 5px 5px -3px rgba(25, 40, 102, .2), 0 8px 10px 1px rgba(25, 40, 102, .14), 0 3px 14px 2px rgba(25, 40, 102, .12);
        box-shadow: 0 5px 5px -3px rgba(25, 40, 102, .2), 0 8px 10px 1px rgba(25, 40, 102, .14), 0 3px 14px 2px rgba(25, 40, 102, .12)
    }

    .pmd-z-depth-4 {
        -moz-box-shadow: 0 8px 32px -4px rgba(25, 40, 102, .2);
        -webkit-box-shadow: 0 8px 32px -4px rgba(25, 40, 102, .2);
        box-shadow: 0 8px 32px -4px rgba(25, 40, 102, .2)
    }

    .pmd-z-depth-5 {
        -moz-box-shadow: 0 16px 28px -4px rgba(25, 40, 102, .2), 0 12px 36px 1px rgba(25, 40, 102, .14), 0 8px 20px 0 rgba(25, 40, 102, .12);
        -webkit-box-shadow: 0 16px 28px -4px rgba(25, 40, 102, .2), 0 12px 36px 1px rgba(25, 40, 102, .14), 0 8px 20px 0 rgba(25, 40, 102, .12);
        box-shadow: 0 16px 28px -4px rgba(25, 40, 102, .2), 0 12px 36px 1px rgba(25, 40, 102, .14), 0 8px 20px 0 rgba(25, 40, 102, .12)
    }

    .pmd-z-depth-light-1 {
        -moz-box-shadow: 0 3px 1px -2px rgba(25, 40, 102, .12), 0 2px 2px 0 rgba(25, 40, 102, .07), 0 1px 5px 0 rgba(25, 40, 102, .06);
        -webkit-box-shadow: 0 3px 1px -2px rgba(25, 40, 102, .12), 0 2px 2px 0 rgba(25, 40, 102, .07), 0 1px 5px 0 rgba(25, 40, 102, .06);
        box-shadow: 0 3px 1px -2px rgba(25, 40, 102, .12), 0 2px 2px 0 rgba(25, 40, 102, .07), 0 1px 5px 0 rgba(25, 40, 102, .06)
    }

    .pmd-z-depth-light-2 {
        -moz-box-shadow: 0 8px 40px rgba(25, 40, 102, .08);
        -webkit-box-shadow: 0 8px 40px rgba(25, 40, 102, .08);
        box-shadow: 0 8px 40px rgba(25, 40, 102, .08)
    }

    .pmd-z-depth-light-3 {
        -moz-box-shadow: 0 4px 20px -3px rgba(25, 40, 102, .24);
        -webkit-box-shadow: 0 4px 20px -3px rgba(25, 40, 102, .24);
        box-shadow: 0 4px 20px -3px rgba(25, 40, 102, .24)
    }

    .pmd-z-depth-light-4 {
        -moz-box-shadow: 0 24px 60px rgba(25, 40, 102, .16);
        -webkit-box-shadow: 0 24px 60px rgba(25, 40, 102, .16);
        box-shadow: 0 24px 60px rgba(25, 40, 102, .16)
    }

    .pmd-z-depth-light-5 {
        -moz-box-shadow: 0 16px 28px -4px rgba(25, 40, 102, .12), 0 12px 36px 1px rgba(25, 40, 102, .08);
        -webkit-box-shadow: 0 16px 28px -4px rgba(25, 40, 102, .12), 0 12px 36px 1px rgba(25, 40, 102, .08);
        box-shadow: 0 16px 28px -4px rgba(25, 40, 102, .12), 0 12px 36px 1px rgba(25, 40, 102, .08)
    }

    .material-icons.md-18, .material-icons.pmd-xs {
        font-size: 18px
    }

    .material-icons.md-24, .material-icons.pmd-sm {
        font-size: 24px
    }

    .material-icons.md-36, .material-icons.pmd-md {
        font-size: 36px
    }

    .material-icons.md-48, .material-icons.pmd-lg {
        font-size: 48px
    }

    .md-dark {
        color: rgba(25, 40, 102, .38)
    }

    .md-dark svg {
        fill: rgba(25, 40, 102, .38)
    }

    .md-dark.md-inactive {
        color: rgba(25, 40, 102, .38)
    }

    .md-dark.md-inactive svg {
        fill: rgba(25, 40, 102, .38)
    }

    .md-light {
        color: rgba(255, 255, 255, .5)
    }

    .md-light svg {
        fill: rgba(255, 255, 255, .5)
    }

    .md-light.md-inactive {
        color: rgba(255, 255, 255, .5)
    }

    .md-light.md-inactive svg {
        fill: rgba(255, 255, 255, .5)
    }

    .pmd-icon-xs {
        display: inline-flex;
        font-size: 18px
    }

    .pmd-icon-xs img, .pmd-icon-xs svg {
        height: 18px
    }

    .pmd-icon-sm {
        display: inline-flex;
        font-size: 24px
    }

    .pmd-icon-sm img, .pmd-icon-sm svg {
        height: 24px
    }

    .pmd-icon-md {
        display: inline-flex;
        font-size: 36px
    }

    .pmd-icon-md img, .pmd-icon-md svg {
        height: 36px
    }

    .pmd-icon-lg {
        display: inline-flex;
        font-size: 48px
    }

    .pmd-icon-lg img, .pmd-icon-lg svg {
        height: 48px
    }

    .pmd-icon-xl {
        display: inline-flex;
        font-size: 72px
    }

    .pmd-icon-xl img, .pmd-icon-xl svg {
        height: 72px
    }

    .pmd-icon-circle {
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        height: 56px;
        width: 56px
    }

    .pmd-icon-circle img, .pmd-icon-circle svg {
        height: 70%
    }

    .pmd-icon-circle.pmd-icon-xl {
        height: 72px;
        width: 72px
    }

    .pmd-icon-circle.pmd-icon-lg {
        height: 64px;
        width: 64px
    }

    .pmd-icon-circle.pmd-icon-md {
        height: 64px;
        width: 64px
    }

    .pmd-icon-circle.pmd-icon-sm {
        height: 40px;
        width: 40px
    }

    .pmd-icon-circle.pmd-icon-xs {
        height: 32px;
        width: 32px
    }

    .pmd-icon-circle-lg {
        width: 72px;
        height: 72px
    }

    .pmd-card {
        display: block;
        padding: 1px 0;
        margin-bottom: 30px;
        background-color: #fff;
        border: none;
        border-radius: 4px;
        -moz-box-shadow: 0 8px 40px rgba(25, 40, 102, .08);
        -webkit-box-shadow: 0 8px 40px rgba(25, 40, 102, .08);
        box-shadow: 0 8px 40px rgba(25, 40, 102, .08)
    }

    .pmd-card .card-img-top {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px
    }

    .pmd-card .form-horizontal .form-group {
        margin-right: inherit;
        margin-left: inherit
    }

    .pmd-card .card-body {
        padding: 0 1.4rem;
        margin-top: 1.4rem;
        margin-bottom: 1.4rem
    }

    .pmd-card .card-body .pmd-list .list-group-item {
        padding-left: 0;
        padding-right: 0
    }

    .pmd-card .card-body .pmd-list .list-group-item.list-group-item-action {
        padding-left: 1rem;
        padding-right: 1rem
    }

    .pmd-card .card-header {
        padding: 1.4rem 1.4rem 0 1.4rem;
        margin-bottom: 1.4rem;
        border-bottom: 1px solid transparent;
        background-color: transparent;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px
    }

    .pmd-card .card-header .dropdown .dropdown-toggle {
        color: inherit
    }

    .pmd-card .card-header.pmd-card-border {
        border-bottom: 1px solid #ebebeb;
        padding-bottom: 1.4rem;
        margin-bottom: 0
    }

    .pmd-card .card-title {
        margin-bottom: .5rem
    }

    .pmd-card .card-title:last-child {
        margin-bottom: 0
    }

    .pmd-card .card-subtitle {
        font-size: .875rem;
        line-height: 1.6;
        color: rgba(25, 40, 102, .54)
    }

    .pmd-card .card-subtitle:first-child {
        margin-bottom: 0;
        margin-top: 0
    }

    .pmd-card .card-subtitle + .card-subtitle {
        margin-top: 0
    }

    .pmd-card.bg-dark .card-subtitle {
        color: rgba(255, 255, 255, .7)
    }

    .pmd-card .card-footer {
        background-color: transparent;
        border-color: transparent;
        padding: 0 1.4rem 1.4rem 1.4rem;
        margin-top: 1.4rem
    }

    .pmd-card .card-footer.pmd-card-border {
        border-top: 1px solid #ebebeb;
        padding-top: 1.4rem;
        margin-top: 0
    }

    .pmd-card .card-footer .btn {
        margin-right: .25rem;
        margin-left: .25rem;
        min-width: inherit
    }

    .pmd-card .card-footer .btn:first-child {
        margin-left: 0
    }

    .pmd-card .card-footer .btn:last-child {
        margin-right: 0
    }

    .pmd-card .card-footer .btn.pmd-btn-flat {
        margin-top: -.5rem;
        margin-bottom: -.5rem
    }

    .pmd-card .card-footer .btn.pmd-btn-flat:first-child {
        margin-left: -.5rem
    }

    .pmd-card .card-footer .btn.pmd-btn-fab {
        padding: 0
    }

    .pmd-card .pmd-list {
        margin-bottom: .5rem;
        margin-top: .5rem
    }

    .pmd-card .pmd-list.pmd-list-border .list-group-item {
        border-right: 0;
        border-left: 0;
        border-radius: 0
    }

    .pmd-card .pmd-list.pmd-list-border:first-child .list-group-item:first-child {
        border-top: 0
    }

    .pmd-card .pmd-list.pmd-list-border:last-child .list-group-item:last-child {
        border-bottom: 0
    }

    .card-deck .pmd-card {
        display: flow-root
    }

    .pmd-card-icon {
        margin-bottom: 1.4rem
    }

    .pmd-icon-top {
        margin-top: -50%
    }

    .pmd-fab-bottom-center {
        position: relative
    }

    .pmd-fab-bottom-center .pmd-btn-fab, .pmd-fab-bottom-center .pmd-icon-circle {
        position: absolute;
        transform: translateY(50%);
        left: 0;
        right: 0;
        margin: auto;
        bottom: 0
    }

    .pmd-fab-bottom-center.card-header {
        margin-top: 0;
        padding-bottom: 2rem
    }

    .pmd-fab-top-center {
        position: relative
    }

    .pmd-fab-top-center.card-body {
        margin-top: 0;
        padding-top: 3rem
    }

    .pmd-fab-top-center .pmd-icon-circle {
        position: absolute;
        transform: translateY(-50%);
        left: 0;
        right: 0;
        margin: auto;
        top: 0
    }

    .pmd-fab-bottom-right {
        position: relative
    }

    .pmd-fab-bottom-right .pmd-btn-fab, .pmd-fab-bottom-right .pmd-icon-circle {
        position: absolute;
        transform: translateY(50%);
        right: 1rem;
        margin: auto;
        bottom: 0
    }

    .pmd-fab-bottom-right.card-header {
        margin-top: 0;
        padding-bottom: 2rem
    }

    .pmd-social-icon {
        margin-top: 8px
    }

    .pmd-social-icon a {
        margin: 0 4px;
        display: inline-flex;
        justify-content: center
    }

    .pmd-social-icon a svg {
        fill: #848484;
        width: 50%
    }

    .pmd-social-icon a:hover svg {
        fill: #fff
    }

    .pmd-card-info {
        font-size: .875rem;
        color: rgba(0, 0, 0, .54);
        padding: 8px 0;
        border-top: 1px solid #dee2e6;
        border-bottom: 1px solid #dee2e6
    }

    .pmd-list-progress .list-group-item {
        padding-left: 50px;
        width: 100%;
        background-color: transparent
    }

    .pmd-list-progress .list-group-item:before {
        content: "";
        width: 2px;
        height: 100%;
        background: #fff;
        left: 0;
        position: absolute;
        left: 30px;
        top: 0;
        z-index: 9
    }

    .pmd-list-progress .list-group-item:after {
        content: "";
        position: absolute;
        left: 25px;
        top: 0;
        bottom: 0;
        margin: auto;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #fff
    }

    .pmd-list-progress .list-group-item.list-group-item-success:after, .pmd-list-progress .list-group-item.list-group-item-success:before {
        background-color: #67b951
    }

    .pmd-list-progress .list-group-item.list-group-item-danger:after, .pmd-list-progress .list-group-item.list-group-item-danger:before {
        background-color: #df6c6c
    }

    .with-border:after {
        content: "";
        display: block;
        width: 60px;
        margin: 20px auto;
        height: 3px;
        border-radius: 3px;
        background-color: #018af0
    }

    .with-left-border:after {
        content: "";
        display: block;
        width: 60px;
        margin: 20px 0;
        height: 3px;
        border-radius: 3px;
        background-color: #018af0
    }

    .pmd-card-overlay {
        background-color: #041a34;
        overflow: hidden
    }

    .pmd-card-overlay .card-title {
        position: absolute;
        color: #fff;
        top: 0;
        left: 0;
        right: 0;
        transform: translateY(47%);
        -webkit-transform: translateY(47%);
        -moz-transform: translateY(47%);
        bottom: 0;
        text-align: center;
        z-index: 2;
        transition: all ease-in-out .3s;
        -ms-transition: all ease-in-out .3s;
        -webkit-transition: all ease-in-out .3s;
        font-size: 24px
    }

    .pmd-card-overlay img {
        opacity: .64;
        height: 350px;
        display: block;
        transition: all ease-in-out .3s;
        -ms-transition: all ease-in-out .3s;
        -webkit-transition: all ease-in-out .3s;
        min-width: 100%
    }

    .pmd-view-details {
        padding: 0 32px;
        text-align: center;
        color: #fff;
        opacity: 0;
        font-size: 14px;
        position: absolute;
        bottom: 0;
        z-index: 100;
        left: 0;
        right: 0;
        -webkit-transform: translate(0, 50px);
        transform: translate(0, 50px);
        -webkit-transition: all ease-in-out .3s;
        transition: all ease-in-out .3s;
        overflow: visible;
        margin: 0 auto;
        top: 50%
    }

    .pmd-view-details:before {
        content: attr(data-title);
        position: absolute;
        bottom: -28px;
        -webkit-transform: translate(-17px, 0);
        transform: translate(-17px, 0);
        color: #fff
    }

    .pmd-card-overlay:hover .card-title {
        transform: translateY(20%);
        -webkit-transform: translateY(20%);
        -moz-transform: translateY(20%)
    }

    .pmd-card-overlay .card-title:hover + .pmd-view-details, .pmd-card-overlay:hover .pmd-view-details {
        -webkit-transform: translate(0, -40%);
        -moz-transform: translate(0, -40%);
        transform: translate(0, -40%);
        opacity: 1
    }

    .pmd-card-overlay:hover img {
        opacity: .16;
        transform: scale(1.1)
    }

    .icon-wrap {
        height: 100px;
        width: 100px;
        background: #fff;
        border-radius: 50%;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .12);
        margin: auto;
        line-height: 100px
    }

    .icon-wrap svg {
        display: inline-block;
        vertical-align: middle;
        height: 60px
    }

    .pmd-accordion .card {
        position: relative;
        margin: 1rem 0;
        border: none;
        border-radius: 0;
        -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        transition: all .2s ease-in-out
    }

    .pmd-accordion .card .card-header {
        padding: 0;
        background-color: transparent;
        border-color: transparent
    }

    .pmd-accordion .card .card-header .btn {
        display: flex;
        padding: .75rem 1rem;
        line-height: 1.5rem;
        font-size: 16px;
        color: inherit;
        text-decoration: none;
        font-weight: 500;
        width: 100%;
        text-align: left;
        white-space: inherit
    }

    .pmd-accordion .card .card-header .btn:focus, .pmd-accordion .card .card-header .btn:hover {
        color: inherit
    }

    .pmd-accordion .card.active .material-icons.pmd-accordion-arrow {
        -ms-transform: rotate(180deg);
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg)
    }

    .pmd-accordion-nospace .card {
        margin: 0
    }

    .pmd-accordion-arrow {
        display: flex;
        margin-left: auto
    }

    .pmd-accordion-inbox .card.active {
        margin: .5rem -.5rem
    }

    @media (max-width: 767.98px) {
        .pmd-accordion-inbox .card.active {
            margin: 1rem -10px
        }
    }

    .pmd-accordion-icon-left {
        float: left;
        padding-right: 32px
    }

    .pmd-accordion-icon-right {
        float: right;
        padding-left: 32px
    }

    .alert-primary {
        color: #0d5f9d;
        border-color: #b8e0f2;
        background-color: #cce9f6
    }

    .alert-primary hr {
        border-top-color: #a2d7ee
    }

    .alert-primary .alert-link {
        color: #09436e
    }

    .alert-secondary {
        color: #0c487d;
        border-color: #b8d4e0;
        background-color: #cce0e9
    }

    .alert-secondary hr {
        border-top-color: #a6c9d8
    }

    .alert-secondary .alert-link {
        color: #082d4e
    }

    .alert-success {
        color: #1f6444;
        border-color: #c2e3c2;
        background-color: #d3ebd3
    }

    .alert-success hr {
        border-top-color: #b1dbb1
    }

    .alert-success .alert-link {
        color: #133d2a
    }

    .alert-info {
        color: #0e6bb0;
        border-color: #b8e7fc;
        background-color: #cdeefd
    }

    .alert-info hr {
        border-top-color: #a0dffb
    }

    .alert-info .alert-link {
        color: #0a4e81
    }

    .alert-warning {
        color: #917835;
        border-color: #ffeeba;
        background-color: #fff3cd
    }

    .alert-warning hr {
        border-top-color: #ffe8a1
    }

    .alert-warning .alert-link {
        color: #6c5927
    }

    .alert-danger {
        color: #7e2f55;
        border-color: #f5c6cb;
        background-color: #f8d7da
    }

    .alert-danger hr {
        border-top-color: #f1b0b7
    }

    .alert-danger .alert-link {
        color: #59213c
    }

    .alert-light {
        color: #9198b6;
        border-color: #fff;
        background-color: #fff
    }

    .alert-light hr {
        border-top-color: #f2f2f2
    }

    .alert-light .alert-link {
        color: #727ba2
    }

    .alert-dark {
        color: #313e76;
        border-color: #cbcfdd;
        background-color: #dadde7
    }

    .alert-dark hr {
        border-top-color: #bcc1d3
    }

    .alert-dark .alert-link {
        color: #222b52
    }

    .alert-lightblack {
        color: #15244c;
        border-color: #bcc1c6;
        background-color: #cfd3d6
    }

    .alert-lightblack hr {
        border-top-color: #aeb4ba
    }

    .alert-lightblack .alert-link {
        color: #0a1124
    }

    .pmd-alert-container {
        position: fixed;
        z-index: 100000000
    }

    .pmd-alert-container.top {
        top: 20px
    }

    .pmd-alert-container.bottom {
        bottom: 20px
    }

    .pmd-alert-container.left {
        left: 20px
    }

    .pmd-alert-container.right {
        right: 20px
    }

    .pmd-alert-container.center {
        left: 50%
    }

    @media (max-width: 767.98px) {
        .pmd-alert-container.left {
            left: 50%
        }

        .pmd-alert-container.right {
            right: 50%
        }
    }

    .pmd-alert-container .pmd-alert {
        position: relative;
        z-index: 1000;
        margin-bottom: 5px;
        clear: both;
        text-align: left;
        vertical-align: middle;
        width: 300px;
        padding: .5rem 1.5rem;
        color: #fff;
        background: #192866;
        border-radius: 4px;
        animation-duration: 1s;
        animation-fill-mode: both;
        font-size: 1rem
    }

    .pmd-alert-container .pmd-alert a {
        position: absolute;
        right: 18px;
        float: right;
        color: #0191d0
    }

    .pmd-alert-container .pmd-alert a:before {
        position: absolute;
        top: 0;
        right: -10px;
        bottom: 0;
        left: -10px;
        margin: auto;
        content: ""
    }

    .pmd-alert-container .pmd-alert.primary {
        color: #fff;
        background-color: #0191d0
    }

    .pmd-alert-container .pmd-alert.secondary {
        color: #fff;
        background-color: #006592
    }

    .pmd-alert-container .pmd-alert.success {
        color: #fff;
        background-color: #259b24
    }

    .pmd-alert-container .pmd-alert.info {
        color: #fff;
        background-color: #03a9f4
    }

    .pmd-alert-container .pmd-alert.warning {
        color: #37447a;
        background-color: #ffc107
    }

    .pmd-alert-container .pmd-alert.danger {
        color: #fff;
        background-color: #dc3545
    }

    .pmd-alert-container .pmd-alert.light {
        color: #37447a;
        background-color: #fff
    }

    .pmd-alert-container .pmd-alert.dark {
        color: #fff;
        background-color: #475385
    }

    .pmd-alert-container .pmd-alert.lightblack {
        color: #fff;
        background-color: #112134
    }

    .pmd-alert-container .pmd-alert.pmd-alert-hide {
        height: 0;
        padding: 0;
        overflow: hidden;
        opacity: 0
    }

    .notification a {
        position: absolute;
        right: 18px;
        float: right;
        color: #0191d0
    }

    @keyframes fadeIn {
        from {
            opacity: 0
        }
        to {
            opacity: 1
        }
    }

    .fadeIn {
        animation-name: fadeIn
    }

    @keyframes fadeOut {
        from {
            opacity: 1
        }
        to {
            opacity: 0
        }
    }

    .fadeOut {
        animation-name: fadeOut
    }

    @keyframes fadeOutDown {
        from {
            opacity: 1
        }
        to {
            opacity: 0;
            transform: translate3d(0, 100%, 0)
        }
    }

    .fadeOutDown {
        animation-name: fadeOutDown
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translate3d(0, -100%, 0)
        }
        to {
            opacity: 1;
            transform: none
        }
    }

    .fadeInDown {
        animation-name: fadeInDown
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translate3d(0, 100%, 0)
        }
        to {
            opacity: 1;
            transform: none
        }
    }

    .fadeInUp {
        animation-name: fadeInUp
    }

    .badge {
        display: inline-block;
        vertical-align: baseline
    }

    .badge:hover {
        text-decoration: none;
        cursor: pointer
    }

    .pmd-badge {
        display: inline-block;
        position: relative;
        font-size: 32px;
        background-color: transparent
    }

    .pmd-badge[data-badge]::after {
        background: #0191d0;
        color: #fff;
        font-family: Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-size: .75rem;
        font-weight: 700;
        height: 22px;
        width: 22px;
        line-height: 22px;
        border-radius: 50%;
        right: -24px;
        top: -10px;
        content: attr(data-badge);
        position: absolute;
        text-align: center
    }

    .pmd-badge.pmd-badge-overlap::after {
        right: -10px
    }

    .badge-primary {
        color: #fff;
        background-color: #0191d0
    }

    .badge-primary:focus, .badge-primary:hover {
        color: #fff;
        background-color: #016e9d
    }

    .pmd-badge-primary[data-badge]::after {
        color: #fff;
        background-color: #0191d0
    }

    .badge-secondary {
        color: #fff;
        background-color: #006592
    }

    .badge-secondary:focus, .badge-secondary:hover {
        color: #fff;
        background-color: #00425f
    }

    .pmd-badge-secondary[data-badge]::after {
        color: #fff;
        background-color: #006592
    }

    .badge-success {
        color: #fff;
        background-color: #259b24
    }

    .badge-success:focus, .badge-success:hover {
        color: #fff;
        background-color: #1b721a
    }

    .pmd-badge-success[data-badge]::after {
        color: #fff;
        background-color: #259b24
    }

    .badge-info {
        color: #fff;
        background-color: #03a9f4
    }

    .badge-info:focus, .badge-info:hover {
        color: #fff;
        background-color: #0286c2
    }

    .pmd-badge-info[data-badge]::after {
        color: #fff;
        background-color: #03a9f4
    }

    .badge-warning {
        color: #37447a;
        background-color: #ffc107
    }

    .badge-warning:focus, .badge-warning:hover {
        color: #37447a;
        background-color: #d39e00
    }

    .pmd-badge-warning[data-badge]::after {
        color: #37447a;
        background-color: #ffc107
    }

    .badge-danger {
        color: #fff;
        background-color: #dc3545
    }

    .badge-danger:focus, .badge-danger:hover {
        color: #fff;
        background-color: #bd2130
    }

    .pmd-badge-danger[data-badge]::after {
        color: #fff;
        background-color: #dc3545
    }

    .badge-light {
        color: #37447a;
        background-color: #fff
    }

    .badge-light:focus, .badge-light:hover {
        color: #37447a;
        background-color: #e6e5e5
    }

    .pmd-badge-light[data-badge]::after {
        color: #37447a;
        background-color: #fff
    }

    .badge-dark {
        color: #fff;
        background-color: #475385
    }

    .badge-dark:focus, .badge-dark:hover {
        color: #fff;
        background-color: #353e64
    }

    .pmd-badge-dark[data-badge]::after {
        color: #fff;
        background-color: #475385
    }

    .badge-lightblack {
        color: #fff;
        background-color: #112134
    }

    .badge-lightblack:focus, .badge-lightblack:hover {
        color: #fff;
        background-color: #04090e
    }

    .pmd-badge-lightblack[data-badge]::after {
        color: #fff;
        background-color: #112134
    }

    .pmd-chip {
        border-radius: 1rem;
        box-sizing: border-box;
        line-height: 34px;
        padding: 0 .5rem 0 .75rem;
        text-transform: capitalize;
        background: #E0E0E0;
        color: #192866;
        display: inline-flex;
        align-items: center;
        cursor: default;
        vertical-align: middle
    }

    .pmd-chip:focus, .pmd-chip:hover {
        background-color: #c7c6c6
    }

    .pmd-chip .material-icons {
        margin-right: 4px
    }

    .pmd-chip-action i {
        font-size: .875rem;
        color: #fff;
        background-color: rgba(25, 40, 102, .38);
        border-radius: 50%;
        padding: 2px;
        margin-left: 5px
    }

    .pmd-chip-action .material-icons:hover {
        background-color: rgba(15, 24, 61, .38)
    }

    .pmd-chip-contact {
        margin-right: 5px;
        width: 2.25rem;
        border-radius: 50%;
        margin-left: -.75rem
    }

    .pmd-chip-primary {
        color: #fff;
        background-color: #0191d0
    }

    .pmd-chip-primary:focus, .pmd-chip-primary:hover {
        color: #fff;
        background-color: #016e9d
    }

    .pmd-chip-secondary {
        color: #fff;
        background-color: #006592
    }

    .pmd-chip-secondary:focus, .pmd-chip-secondary:hover {
        color: #fff;
        background-color: #00425f
    }

    .pmd-chip-success {
        color: #fff;
        background-color: #259b24
    }

    .pmd-chip-success:focus, .pmd-chip-success:hover {
        color: #fff;
        background-color: #1b721a
    }

    .pmd-chip-info {
        color: #fff;
        background-color: #03a9f4
    }

    .pmd-chip-info:focus, .pmd-chip-info:hover {
        color: #fff;
        background-color: #0286c2
    }

    .pmd-chip-warning {
        color: #37447a;
        background-color: #ffc107
    }

    .pmd-chip-warning:focus, .pmd-chip-warning:hover {
        color: #37447a;
        background-color: #d39e00
    }

    .pmd-chip-danger {
        color: #fff;
        background-color: #dc3545
    }

    .pmd-chip-danger:focus, .pmd-chip-danger:hover {
        color: #fff;
        background-color: #bd2130
    }

    .pmd-chip-light {
        color: #37447a;
        background-color: #fff
    }

    .pmd-chip-light:focus, .pmd-chip-light:hover {
        color: #37447a;
        background-color: #e6e5e5
    }

    .pmd-chip-dark {
        color: #fff;
        background-color: #475385
    }

    .pmd-chip-dark:focus, .pmd-chip-dark:hover {
        color: #fff;
        background-color: #353e64
    }

    .pmd-chip-lightblack {
        color: #fff;
        background-color: #112134
    }

    .pmd-chip-lightblack:focus, .pmd-chip-lightblack:hover {
        color: #fff;
        background-color: #04090e
    }

    .btn {
        font-weight: 700;
        border-width: 2px;
        text-transform: uppercase;
        padding: .5rem 1.25rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 4px;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    .btn.pmd-ripple-effect.focus, .btn.pmd-ripple-effect:focus {
        box-shadow: none
    }

    .btn.pmd-ripple-effect:not(:disabled):not(.disabled).active:focus, .btn.pmd-ripple-effect:not(:disabled):not(.disabled):active:focus {
        box-shadow: none
    }

    .btn.pmd-btn-raised {
        -moz-box-shadow: 0 4px 20px -3px rgba(25, 40, 102, .24);
        -webkit-box-shadow: 0 4px 20px -3px rgba(25, 40, 102, .24);
        box-shadow: 0 4px 20px -3px rgba(25, 40, 102, .24)
    }

    .btn.pmd-btn-raised.focus, .btn.pmd-btn-raised:focus {
        -moz-box-shadow: 0 8px 32px -4px rgba(25, 40, 102, .2);
        -webkit-box-shadow: 0 8px 32px -4px rgba(25, 40, 102, .2);
        box-shadow: 0 8px 32px -4px rgba(25, 40, 102, .2)
    }

    .btn.pmd-btn-raised:not(:disabled):not(.disabled).active:focus, .btn.pmd-btn-raised:not(:disabled):not(.disabled):active:focus {
        -moz-box-shadow: 0 8px 32px -4px rgba(25, 40, 102, .2);
        -webkit-box-shadow: 0 8px 32px -4px rgba(25, 40, 102, .2);
        box-shadow: 0 8px 32px -4px rgba(25, 40, 102, .2)
    }

    .btn.pmd-btn-fab {
        padding: 0;
        border-radius: 50%;
        width: 56px;
        height: 56px;
        min-width: 56px
    }

    .btn.pmd-btn-fab i, .btn.pmd-btn-fab span {
        line-height: 52px
    }

    .btn.pmd-btn-fab.btn-lg {
        width: 78px;
        height: 78px;
        min-width: 78px
    }

    .btn.pmd-btn-fab.btn-lg i, .btn.pmd-btn-fab.btn-lg span {
        line-height: 74px
    }

    .btn.pmd-btn-fab.btn-sm {
        width: 40px;
        height: 40px;
        min-width: 40px
    }

    .btn.pmd-btn-fab.btn-sm i, .btn.pmd-btn-fab.btn-sm span {
        line-height: 36px
    }

    .btn.pmd-btn-fab.btn-xs {
        width: 30px;
        height: 30px;
        min-width: 30px
    }

    .btn.pmd-btn-fab.btn-xs i, .btn.pmd-btn-fab.btn-xs span {
        line-height: 26px
    }

    .btn-primary {
        color: #fff;
        background-color: #0191d0;
        border-color: #0191d0
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #0176aa;
        border-color: #016e9d
    }

    .btn-primary.focus, .btn-primary:focus {
        box-shadow: 0 0 0 .2rem rgba(1, 145, 208, .5)
    }

    .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show > .btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #016e9d;
        border-color: #016591
    }

    .btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus, .show > .btn-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(1, 145, 208, .5)
    }

    .btn-primary .ink {
        background-color: #016e9d
    }

    .btn-primary.pmd-btn-flat {
        color: #0191d0;
        background-color: transparent;
        border-color: transparent
    }

    .btn-primary.pmd-btn-flat:hover {
        color: #0191d0;
        background-color: #e5e5e5
    }

    .btn-primary.pmd-btn-flat.focus, .btn-primary.pmd-btn-flat:focus {
        background-color: #ccc
    }

    .btn-primary.pmd-btn-flat .ink {
        background-color: grey
    }

    .btn-primary.pmd-btn-flat:not(:disabled):not(.disabled).active, .btn-primary.pmd-btn-flat:not(:disabled):not(.disabled):active {
        color: #0191d0;
        background-color: #e5e5e5;
        border-color: transparent
    }

    .btn-secondary {
        color: #fff;
        background-color: #006592;
        border-color: #006592
    }

    .btn-secondary:hover {
        color: #fff;
        background-color: #004b6c;
        border-color: #00425f
    }

    .btn-secondary.focus, .btn-secondary:focus {
        box-shadow: 0 0 0 .2rem rgba(0, 101, 146, .5)
    }

    .btn-secondary:not(:disabled):not(.disabled).active, .btn-secondary:not(:disabled):not(.disabled):active, .show > .btn-secondary.dropdown-toggle {
        color: #fff;
        background-color: #00425f;
        border-color: #003952
    }

    .btn-secondary:not(:disabled):not(.disabled).active:focus, .btn-secondary:not(:disabled):not(.disabled):active:focus, .show > .btn-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(0, 101, 146, .5)
    }

    .btn-secondary .ink {
        background-color: #00425f
    }

    .btn-secondary.pmd-btn-flat {
        color: #006592;
        background-color: transparent;
        border-color: transparent
    }

    .btn-secondary.pmd-btn-flat:hover {
        color: #006592;
        background-color: #e5e5e5
    }

    .btn-secondary.pmd-btn-flat.focus, .btn-secondary.pmd-btn-flat:focus {
        background-color: #ccc
    }

    .btn-secondary.pmd-btn-flat .ink {
        background-color: grey
    }

    .btn-secondary.pmd-btn-flat:not(:disabled):not(.disabled).active, .btn-secondary.pmd-btn-flat:not(:disabled):not(.disabled):active {
        color: #006592;
        background-color: #e5e5e5;
        border-color: transparent
    }

    .btn-success {
        color: #fff;
        background-color: #259b24;
        border-color: #259b24
    }

    .btn-success:hover {
        color: #fff;
        background-color: #1e7c1d;
        border-color: #1b721a
    }

    .btn-success.focus, .btn-success:focus {
        box-shadow: 0 0 0 .2rem rgba(37, 155, 36, .5)
    }

    .btn-success:not(:disabled):not(.disabled).active, .btn-success:not(:disabled):not(.disabled):active, .show > .btn-success.dropdown-toggle {
        color: #fff;
        background-color: #1b721a;
        border-color: #196718
    }

    .btn-success:not(:disabled):not(.disabled).active:focus, .btn-success:not(:disabled):not(.disabled):active:focus, .show > .btn-success.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(37, 155, 36, .5)
    }

    .btn-success .ink {
        background-color: #1b721a
    }

    .btn-success.pmd-btn-flat {
        color: #259b24;
        background-color: transparent;
        border-color: transparent
    }

    .btn-success.pmd-btn-flat:hover {
        color: #259b24;
        background-color: #e5e5e5
    }

    .btn-success.pmd-btn-flat.focus, .btn-success.pmd-btn-flat:focus {
        background-color: #ccc
    }

    .btn-success.pmd-btn-flat .ink {
        background-color: grey
    }

    .btn-success.pmd-btn-flat:not(:disabled):not(.disabled).active, .btn-success.pmd-btn-flat:not(:disabled):not(.disabled):active {
        color: #259b24;
        background-color: #e5e5e5;
        border-color: transparent
    }

    .btn-info {
        color: #fff;
        background-color: #03a9f4;
        border-color: #03a9f4
    }

    .btn-info:hover {
        color: #fff;
        background-color: #038fce;
        border-color: #0286c2
    }

    .btn-info.focus, .btn-info:focus {
        box-shadow: 0 0 0 .2rem rgba(3, 169, 244, .5)
    }

    .btn-info:not(:disabled):not(.disabled).active, .btn-info:not(:disabled):not(.disabled):active, .show > .btn-info.dropdown-toggle {
        color: #fff;
        background-color: #0286c2;
        border-color: #027db5
    }

    .btn-info:not(:disabled):not(.disabled).active:focus, .btn-info:not(:disabled):not(.disabled):active:focus, .show > .btn-info.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(3, 169, 244, .5)
    }

    .btn-info .ink {
        background-color: #0286c2
    }

    .btn-info.pmd-btn-flat {
        color: #03a9f4;
        background-color: transparent;
        border-color: transparent
    }

    .btn-info.pmd-btn-flat:hover {
        color: #03a9f4;
        background-color: #e5e5e5
    }

    .btn-info.pmd-btn-flat.focus, .btn-info.pmd-btn-flat:focus {
        background-color: #ccc
    }

    .btn-info.pmd-btn-flat .ink {
        background-color: grey
    }

    .btn-info.pmd-btn-flat:not(:disabled):not(.disabled).active, .btn-info.pmd-btn-flat:not(:disabled):not(.disabled):active {
        color: #03a9f4;
        background-color: #e5e5e5;
        border-color: transparent
    }

    .btn-warning {
        color: #37447a;
        background-color: #ffc107;
        border-color: #ffc107
    }

    .btn-warning:hover {
        color: #37447a;
        background-color: #e0a800;
        border-color: #d39e00
    }

    .btn-warning.focus, .btn-warning:focus {
        box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
    }

    .btn-warning:not(:disabled):not(.disabled).active, .btn-warning:not(:disabled):not(.disabled):active, .show > .btn-warning.dropdown-toggle {
        color: #37447a;
        background-color: #d39e00;
        border-color: #c69500
    }

    .btn-warning:not(:disabled):not(.disabled).active:focus, .btn-warning:not(:disabled):not(.disabled):active:focus, .show > .btn-warning.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
    }

    .btn-warning .ink {
        background-color: #d39e00
    }

    .btn-warning.pmd-btn-flat {
        color: #ffc107;
        background-color: transparent;
        border-color: transparent
    }

    .btn-warning.pmd-btn-flat:hover {
        color: #ffc107;
        background-color: #e5e5e5
    }

    .btn-warning.pmd-btn-flat.focus, .btn-warning.pmd-btn-flat:focus {
        background-color: #ccc
    }

    .btn-warning.pmd-btn-flat .ink {
        background-color: grey
    }

    .btn-warning.pmd-btn-flat:not(:disabled):not(.disabled).active, .btn-warning.pmd-btn-flat:not(:disabled):not(.disabled):active {
        color: #ffc107;
        background-color: #e5e5e5;
        border-color: transparent
    }

    .btn-danger {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545
    }

    .btn-danger:hover {
        color: #fff;
        background-color: #c82333;
        border-color: #bd2130
    }

    .btn-danger.focus, .btn-danger:focus {
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
    }

    .btn-danger:not(:disabled):not(.disabled).active, .btn-danger:not(:disabled):not(.disabled):active, .show > .btn-danger.dropdown-toggle {
        color: #fff;
        background-color: #bd2130;
        border-color: #b21f2d
    }

    .btn-danger:not(:disabled):not(.disabled).active:focus, .btn-danger:not(:disabled):not(.disabled):active:focus, .show > .btn-danger.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
    }

    .btn-danger .ink {
        background-color: #bd2130
    }

    .btn-danger.pmd-btn-flat {
        color: #dc3545;
        background-color: transparent;
        border-color: transparent
    }

    .btn-danger.pmd-btn-flat:hover {
        color: #dc3545;
        background-color: #e5e5e5
    }

    .btn-danger.pmd-btn-flat.focus, .btn-danger.pmd-btn-flat:focus {
        background-color: #ccc
    }

    .btn-danger.pmd-btn-flat .ink {
        background-color: grey
    }

    .btn-danger.pmd-btn-flat:not(:disabled):not(.disabled).active, .btn-danger.pmd-btn-flat:not(:disabled):not(.disabled):active {
        color: #dc3545;
        background-color: #e5e5e5;
        border-color: transparent
    }

    .btn-light {
        color: #37447a;
        background-color: #fff;
        border-color: #fff
    }

    .btn-light:hover {
        color: #37447a;
        background-color: #ececec;
        border-color: #e6e5e5
    }

    .btn-light.focus, .btn-light:focus {
        box-shadow: 0 0 0 .2rem rgba(255, 255, 255, .5)
    }

    .btn-light:not(:disabled):not(.disabled).active, .btn-light:not(:disabled):not(.disabled):active, .show > .btn-light.dropdown-toggle {
        color: #37447a;
        background-color: #e6e5e5;
        border-color: #dfdfdf
    }

    .btn-light:not(:disabled):not(.disabled).active:focus, .btn-light:not(:disabled):not(.disabled):active:focus, .show > .btn-light.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(255, 255, 255, .5)
    }

    .btn-light .ink {
        background-color: #e6e5e5
    }

    .btn-light.pmd-btn-flat {
        color: #fff;
        background-color: transparent;
        border-color: transparent
    }

    .btn-light.pmd-btn-flat:hover {
        color: #fff;
        background-color: #e5e5e5
    }

    .btn-light.pmd-btn-flat.focus, .btn-light.pmd-btn-flat:focus {
        background-color: #ccc
    }

    .btn-light.pmd-btn-flat .ink {
        background-color: grey
    }

    .btn-light.pmd-btn-flat:not(:disabled):not(.disabled).active, .btn-light.pmd-btn-flat:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #e5e5e5;
        border-color: transparent
    }

    .btn-dark {
        color: #fff;
        background-color: #475385;
        border-color: #475385
    }

    .btn-dark:hover {
        color: #fff;
        background-color: #3a436c;
        border-color: #353e64
    }

    .btn-dark.focus, .btn-dark:focus {
        box-shadow: 0 0 0 .2rem rgba(71, 83, 133, .5)
    }

    .btn-dark:not(:disabled):not(.disabled).active, .btn-dark:not(:disabled):not(.disabled):active, .show > .btn-dark.dropdown-toggle {
        color: #fff;
        background-color: #353e64;
        border-color: #31395b
    }

    .btn-dark:not(:disabled):not(.disabled).active:focus, .btn-dark:not(:disabled):not(.disabled):active:focus, .show > .btn-dark.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(71, 83, 133, .5)
    }

    .btn-dark .ink {
        background-color: #353e64
    }

    .btn-dark.pmd-btn-flat {
        color: #475385;
        background-color: transparent;
        border-color: transparent
    }

    .btn-dark.pmd-btn-flat:hover {
        color: #475385;
        background-color: #e5e5e5
    }

    .btn-dark.pmd-btn-flat.focus, .btn-dark.pmd-btn-flat:focus {
        background-color: #ccc
    }

    .btn-dark.pmd-btn-flat .ink {
        background-color: grey
    }

    .btn-dark.pmd-btn-flat:not(:disabled):not(.disabled).active, .btn-dark.pmd-btn-flat:not(:disabled):not(.disabled):active {
        color: #475385;
        background-color: #e5e5e5;
        border-color: transparent
    }

    .btn-lightblack {
        color: #fff;
        background-color: #112134;
        border-color: #112134
    }

    .btn-lightblack:hover {
        color: #fff;
        background-color: #080f17;
        border-color: #04090e
    }

    .btn-lightblack.focus, .btn-lightblack:focus {
        box-shadow: 0 0 0 .2rem rgba(17, 33, 52, .5)
    }

    .btn-lightblack:not(:disabled):not(.disabled).active, .btn-lightblack:not(:disabled):not(.disabled):active, .show > .btn-lightblack.dropdown-toggle {
        color: #fff;
        background-color: #04090e;
        border-color: #010304
    }

    .btn-lightblack:not(:disabled):not(.disabled).active:focus, .btn-lightblack:not(:disabled):not(.disabled):active:focus, .show > .btn-lightblack.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(17, 33, 52, .5)
    }

    .btn-lightblack .ink {
        background-color: #04090e
    }

    .btn-lightblack.pmd-btn-flat {
        color: #112134;
        background-color: transparent;
        border-color: transparent
    }

    .btn-lightblack.pmd-btn-flat:hover {
        color: #112134;
        background-color: #e5e5e5
    }

    .btn-lightblack.pmd-btn-flat.focus, .btn-lightblack.pmd-btn-flat:focus {
        background-color: #ccc
    }

    .btn-lightblack.pmd-btn-flat .ink {
        background-color: grey
    }

    .btn-lightblack.pmd-btn-flat:not(:disabled):not(.disabled).active, .btn-lightblack.pmd-btn-flat:not(:disabled):not(.disabled):active {
        color: #112134;
        background-color: #e5e5e5;
        border-color: transparent
    }

    .btn-outline-primary {
        color: #0191d0;
        border-color: #0191d0
    }

    .btn-outline-primary:hover {
        color: #fff;
        background-color: #0191d0;
        border-color: #0191d0
    }

    .btn-outline-primary .ink {
        background-color: #0191d0
    }

    .btn-outline-primary.disabled, .btn-outline-primary:disabled {
        color: #0191d0
    }

    .btn-outline-primary:not(:disabled):not(.disabled).active, .btn-outline-primary:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #0191d0;
        border-color: #0191d0
    }

    .btn-outline-secondary {
        color: #006592;
        border-color: #006592
    }

    .btn-outline-secondary:hover {
        color: #fff;
        background-color: #006592;
        border-color: #006592
    }

    .btn-outline-secondary .ink {
        background-color: #006592
    }

    .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
        color: #006592
    }

    .btn-outline-secondary:not(:disabled):not(.disabled).active, .btn-outline-secondary:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #006592;
        border-color: #006592
    }

    .btn-outline-success {
        color: #259b24;
        border-color: #259b24
    }

    .btn-outline-success:hover {
        color: #fff;
        background-color: #259b24;
        border-color: #259b24
    }

    .btn-outline-success .ink {
        background-color: #259b24
    }

    .btn-outline-success.disabled, .btn-outline-success:disabled {
        color: #259b24
    }

    .btn-outline-success:not(:disabled):not(.disabled).active, .btn-outline-success:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #259b24;
        border-color: #259b24
    }

    .btn-outline-info {
        color: #03a9f4;
        border-color: #03a9f4
    }

    .btn-outline-info:hover {
        color: #fff;
        background-color: #03a9f4;
        border-color: #03a9f4
    }

    .btn-outline-info .ink {
        background-color: #03a9f4
    }

    .btn-outline-info.disabled, .btn-outline-info:disabled {
        color: #03a9f4
    }

    .btn-outline-info:not(:disabled):not(.disabled).active, .btn-outline-info:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #03a9f4;
        border-color: #03a9f4
    }

    .btn-outline-warning {
        color: #ffc107;
        border-color: #ffc107
    }

    .btn-outline-warning:hover {
        color: #37447a;
        background-color: #ffc107;
        border-color: #ffc107
    }

    .btn-outline-warning .ink {
        background-color: #ffc107
    }

    .btn-outline-warning.disabled, .btn-outline-warning:disabled {
        color: #ffc107
    }

    .btn-outline-warning:not(:disabled):not(.disabled).active, .btn-outline-warning:not(:disabled):not(.disabled):active {
        color: #37447a;
        background-color: #ffc107;
        border-color: #ffc107
    }

    .btn-outline-danger {
        color: #dc3545;
        border-color: #dc3545
    }

    .btn-outline-danger:hover {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545
    }

    .btn-outline-danger .ink {
        background-color: #dc3545
    }

    .btn-outline-danger.disabled, .btn-outline-danger:disabled {
        color: #dc3545
    }

    .btn-outline-danger:not(:disabled):not(.disabled).active, .btn-outline-danger:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545
    }

    .btn-outline-light {
        color: #fff;
        border-color: #fff
    }

    .btn-outline-light:hover {
        color: #37447a;
        background-color: #fff;
        border-color: #fff
    }

    .btn-outline-light .ink {
        background-color: #fff
    }

    .btn-outline-light.disabled, .btn-outline-light:disabled {
        color: #fff
    }

    .btn-outline-light:not(:disabled):not(.disabled).active, .btn-outline-light:not(:disabled):not(.disabled):active {
        color: #37447a;
        background-color: #fff;
        border-color: #fff
    }

    .btn-outline-dark {
        color: #475385;
        border-color: #475385
    }

    .btn-outline-dark:hover {
        color: #fff;
        background-color: #475385;
        border-color: #475385
    }

    .btn-outline-dark .ink {
        background-color: #475385
    }

    .btn-outline-dark.disabled, .btn-outline-dark:disabled {
        color: #475385
    }

    .btn-outline-dark:not(:disabled):not(.disabled).active, .btn-outline-dark:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #475385;
        border-color: #475385
    }

    .btn-outline-lightblack {
        color: #112134;
        border-color: #112134
    }

    .btn-outline-lightblack:hover {
        color: #fff;
        background-color: #112134;
        border-color: #112134
    }

    .btn-outline-lightblack .ink {
        background-color: #112134
    }

    .btn-outline-lightblack.disabled, .btn-outline-lightblack:disabled {
        color: #112134
    }

    .btn-outline-lightblack:not(:disabled):not(.disabled).active, .btn-outline-lightblack:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #112134;
        border-color: #112134
    }

    .btn-default.pmd-btn-flat {
        color: #37447a
    }

    .btn-default.pmd-btn-outline {
        color: #37447a;
        border-color: #37447a
    }

    .btn-default.pmd-btn-outline:focus, .btn-default.pmd-btn-outline:hover {
        border-color: #37447a
    }

    .btn-lg {
        padding: .98rem 1.5rem;
        font-size: 1.25rem;
        line-height: 1;
        border-radius: 4px
    }

    .btn-sm {
        padding: .25rem .75rem;
        font-size: .75rem;
        line-height: 1.5;
        border-radius: 4px
    }

    .pmd-ripple-effect {
        position: relative;
        overflow: hidden;
        -webkit-transform: translate3d(0, 0, 0)
    }

    .ink {
        display: block;
        position: absolute;
        pointer-events: none;
        border-radius: 50%;
        -ms-transform: scale(0);
        transform: scale(0);
        background: #fff;
        opacity: 1
    }

    .ink.animate {
        animation: ripple .5s linear
    }

    @keyframes ripple {
        100% {
            opacity: 0;
            transform: scale(2.5)
        }
    }

    .btn-group .btn {
        border-radius: 2px
    }

    .btn-group.open .dropdown-toggle {
        outline: 0;
        outline-offset: 0;
        box-shadow: none
    }

    .btn-group-vertical > .btn:hover, .btn-group > .btn:hover {
        z-index: 0
    }

    .btn-group-vertical > .btn.active:hover, .btn-group-vertical > .btn:active:hover, .btn-group-vertical > .btn:focus:hover, .btn-group > .btn.active:hover, .btn-group > .btn:active:hover, .btn-group > .btn:focus:hover {
        z-index: 2
    }

    .pmd-content {
        margin-bottom: 200px
    }

    .pmd-btn-pill {
        border-radius: 25px
    }

    .pmd-btn-tooltip {
        display: inline-flex;
        align-items: center
    }

    .pmd-btn-tooltip span {
        padding: .5rem 1.25rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 4px;
        position: relative;
        background: rgba(25, 40, 102, .38);
        margin-left: 10px;
        color: #fff
    }

    .pmd-btn-tooltip span:after {
        content: "";
        position: absolute;
        width: 0;
        height: 0;
        border-top: 4px solid transparent;
        border-right: 8px solid rgba(25, 40, 102, .38);
        border-bottom: 4px solid transparent;
        right: 100%;
        top: 50%;
        -ms-transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%)
    }

    .pmd-btn-tooltip.pmd-btn-tooltip-left span {
        margin-left: 0;
        margin-right: 10px
    }

    .pmd-btn-tooltip.pmd-btn-tooltip-left span:after {
        border-top: 4px solid transparent;
        border-left: 8px solid rgba(25, 40, 102, .38);
        border-bottom: 4px solid transparent;
        right: auto;
        left: 100%;
        border-right: 0
    }

    .pmd-btn-icon {
        display: inline-flex;
        align-items: center
    }

    .pmd-btn-icon .material-icons, .pmd-btn-icon i {
        margin-right: .5rem
    }

    .pmd-btn-icon.pmd-btn-check .material-icons, .pmd-btn-icon.pmd-btn-check i {
        opacity: 0;
        width: 0;
        margin-right: 0;
        transition: all .2s ease-in-out;
        -ms-transform: scale(0) rotate(120deg);
        -webkit-transform: scale(0) rotate(120deg);
        transform: scale(0) rotate(120deg)
    }

    .pmd-btn-icon.pmd-btn-check.active .material-icons, .pmd-btn-icon.pmd-btn-check.active i {
        opacity: 1;
        width: auto;
        margin-right: 8px;
        -ms-transform: scale(1) rotate(360deg);
        -webkit-transform: scale(1) rotate(360deg);
        transform: scale(1) rotate(360deg)
    }

    .pmd-btn-gradient {
        border: none;
        color: #fff;
        background: #0191d0;
        background: -moz-linear-gradient(left, #0191d0 0, #006592 100%);
        background: -webkit-linear-gradient(left, #0191d0 0, #006592 100%);
        background: linear-gradient(to right, #0191d0 0, #006592 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='$primary', endColorstr='$secondary', GradientType=1)
    }

    .pmd-btn-gradient-vertical {
        border: none;
        color: #fff;
        background: #0191d0;
        background: -moz-linear-gradient(top, #0191d0 0, #006592 100%);
        background: -webkit-linear-gradient(top, #0191d0 0, #006592 100%);
        background: linear-gradient(to bottom, #0191d0 0, #006592 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='$primary', endColorstr='$secondary', GradientType=0)
    }

    .pmd-btn-gradient-diagonal {
        border: none;
        color: #fff;
        background: #0191d0;
        background: -moz-linear-gradient(45deg, #0191d0 0, #006592 100%);
        background: -webkit-linear-gradient(45deg, #0191d0 0, #006592 100%);
        background: linear-gradient(45deg, #0191d0 0, #006592 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='$primary', endColorstr='$secondary', GradientType=1)
    }

    .pmd-btn-gradient-diagonal-reverse {
        border: none;
        color: #fff;
        background: #0191d0;
        background: -moz-linear-gradient(-45deg, #0191d0 0, #006592 100%);
        background: -webkit-linear-gradient(-45deg, #0191d0 0, #006592 100%);
        background: linear-gradient(135deg, #0191d0 0, #006592 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='$primary', endColorstr='$secondary', GradientType=1)
    }

    .pmd-btn-gradient-radial {
        border: none;
        color: #fff;
        background: #0191d0;
        background: -moz-radial-gradient(center, ellipse cover, #0191d0 0, #006592 100%);
        background: -webkit-radial-gradient(center, ellipse cover, #0191d0 0, #006592 100%);
        background: radial-gradient(ellipse at center, #0191d0 0, #006592 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='$primary', endColorstr='$secondary', GradientType=1)
    }

    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0)
        }
        100% {
            -webkit-transform: rotate(360deg)
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0)
        }
        100% {
            transform: rotate(360deg)
        }
    }

    @-webkit-keyframes scale {
        0% {
            -webkit-transform: scale(0)
        }
        100% {
            -webkit-transform: scale(1)
        }
    }

    @keyframes scale {
        0% {
            transform: scale(0)
        }
        100% {
            transform: scale(1)
        }
    }

    .pmd-btn-loader {
        position: relative
    }

    .pmd-btn-loader.active {
        background-color: transparent !important;
        border: 0;
        color: transparent !important;
        box-shadow: none !important
    }

    .pmd-loader-text-visible {
        display: none
    }

    .pmd-btn-loader .loader {
        opacity: 0;
        position: absolute;
        width: 100%;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        border: 4px solid #20c997 !important;
        border-radius: 50%;
        border-top: 4px solid rgba(32, 201, 151, .5) !important;
        min-width: 50px;
        background-color: transparent !important;
        box-shadow: none !important;
        color: transparent !important;
        min-width: 100px;
        margin: 0
    }

    .pmd-btn-loader.active .loader {
        width: 50px;
        min-width: 50px;
        height: 50px;
        left: 50%;
        margin-left: -25px;
        opacity: 1;
        -webkit-animation: spin 1.2s linear infinite;
        animation: spin 1.2s linear infinite;
        animation-iteration-count: 3;
        animation-delay: .35s
    }

    .pmd-btn-loader.active.completed .loader {
        opacity: 0
    }

    .pmd-btn-loader.completed .pmd-loader-text-default {
        display: none
    }

    .pmd-btn-loader.completed .pmd-loader-text-visible {
        display: inline-flex
    }

    .pmd-btn-loader.completed .pmd-loader-text-visible .material-icons {
        -webkit-animation: scale .3s linear;
        animation: scale .3s linear
    }

    .pmd-btn-loader, .pmd-btn-loader .loader {
        -webkit-transition: all .4s;
        -moz-transition: all .4s;
        -o-transition: all .4s;
        transition: all .4s
    }

    .pmd-modal .modal-content {
        border-radius: 4px;
        display: block
    }

    .pmd-modal .modal-header {
        border-bottom: 1px solid rgba(0, 0, 0, 0);
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        margin-bottom: 1.4rem;
        padding: 1.4rem 1.4rem 0
    }

    .pmd-modal .modal-header.pmd-modal-border {
        border-bottom: 1px solid #ebebeb;
        padding-bottom: 1.4rem;
        margin-bottom: 0
    }

    .pmd-modal .modal-header .close {
        outline: 0
    }

    .pmd-modal .modal-footer {
        padding: .5rem .25rem;
        border: none
    }

    .pmd-modal .modal-footer.pmd-modal-border {
        border-top: 1px solid #ebebeb
    }

    .pmd-modal .modal-footer.pmd-modal-border .btn {
        margin: .5rem .25rem
    }

    .pmd-modal .modal-footer.pmd-modal-border .btn.pmd-btn-flat {
        margin: 0
    }

    .pmd-modal .modal-footer .btn {
        margin: 0 .25rem .5rem
    }

    .pmd-modal .modal-footer .btn:first-child {
        margin-left: .5rem
    }

    .pmd-modal .modal-footer .btn:last-child {
        margin-right: .5rem
    }

    .pmd-modal .modal-footer .btn.pmd-btn-flat:first-child {
        margin-left: 0
    }

    .pmd-modal .modal-footer .btn.pmd-btn-flat:last-child {
        margin-right: 0
    }

    .pmd-modal .modal-footer .pmd-btn-flat {
        margin: 0 .25rem 0 0
    }

    .pmd-modal .modal-body {
        margin-bottom: 1.4rem;
        margin-top: 1.4rem;
        padding: 0 1.4rem
    }

    .pmd-modal .modal-body > p:last-child {
        margin-bottom: 0
    }

    .pmd-modal .modal-body .custom-control {
        padding: .75rem 1.4rem;
        margin-left: -1.4rem;
        margin-right: -1.4rem
    }

    .pmd-modal .pmd-modal-list {
        margin-bottom: 1.4rem;
        margin-top: 1.4rem
    }

    .pmd-modal .modal .checkbox, .pmd-modal .modal .radio {
        margin: 1rem 0
    }

    .pmd-modal .modal .radio-options > label {
        padding-left: 32px
    }

    .pmd-modal .modal .list-group.pmd-list-avatar {
        margin-bottom: 1.4rem;
        padding: 0
    }

    .pmd-modal .modal.list-group:last-child {
        margin-bottom: 0
    }

    .pmd-modal .form-horizontal .form-group {
        margin-left: 0;
        margin-right: 0
    }

    .pmd-dropdown .dropdown-menu {
        border: none;
        border-radius: 0;
        box-shadow: none;
        clip: rect(0 0 0 0);
        background-color: transparent;
        padding: .5rem 0;
        opacity: 0;
        margin: 0;
        -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        transition: all .2s ease-in-out
    }

    .pmd-dropdown .dropdown-menu .dropdown-item {
        padding: .75rem 1rem;
        color: #192866;
        line-height: 1.42857143
    }

    .pmd-dropdown .dropdown-menu .dropdown-item:focus, .pmd-dropdown .dropdown-menu .dropdown-item:hover {
        color: #142052;
        background-color: rgba(25, 40, 102, .075)
    }

    .pmd-dropdown .dropdown-menu .dropdown-item.disabled, .pmd-dropdown .dropdown-menu .dropdown-item:disabled {
        color: rgba(25, 40, 102, .38);
        background-color: transparent
    }

    .pmd-dropdown .dropdown-menu .dropdown-item.active, .pmd-dropdown .dropdown-menu .dropdown-item:active {
        background-color: rgba(25, 40, 102, .075)
    }

    .pmd-dropdown .dropdown-menu::before {
        border-radius: 0;
        background-color: #fff;
        border: none;
        -moz-transform: scale(0);
        -webkit-transform: scale(0);
        transform: scale(0);
        -moz-transform-origin: left top;
        -webkit-transform-origin: left top;
        transform-origin: left top;
        will-change: transform;
        transition: transform .3s cubic-bezier(.4, 0, .2, 1) 0s;
        position: absolute;
        content: "";
        height: 100%;
        width: 100%;
        z-index: -1;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0
    }

    .pmd-dropdown .dropdown-menu[x-placement=top-start]::before {
        -moz-transform-origin: left bottom;
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        will-change: transform
    }

    .pmd-dropdown .dropdown-menu[x-placement=top-end]::before {
        -moz-transform-origin: right bottom;
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        will-change: transform
    }

    .pmd-dropdown .dropdown-menu[x-placement=bottom-end]::before {
        -moz-transform-origin: right top;
        -webkit-transform-origin: right top;
        transform-origin: right top;
        will-change: transform
    }

    .pmd-dropdown.show > .dropdown-menu {
        opacity: 1
    }

    .pmd-dropdown.show > .dropdown-menu::before {
        -moz-transform: scale(1);
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    .pmd-dropdown.dropup .dropdown-menu {
        top: 0;
        transform: translate3d(0, -100%, 0)
    }

    .pmd-dropdown.dropup .caret {
        border-bottom: 4px solid
    }

    .pmd-dropdown.dropleft .dropdown-menu {
        top: 0;
        transform: translate3d(-100%, 0, 0)
    }

    .pmd-dropdown .dropdown-menu-right {
        clip: rect(0 0 0 0)
    }

    .dropdown-header {
        padding: .25rem 1rem;
        margin-top: 8px;
        color: rgba(25, 40, 102, .54)
    }

    .pmd-checkbox-ripple-effect {
        -ms-transform: translateZ(0);
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }

    .checkbox .pmd-checkbox-ripple-effect {
        padding-left: 0
    }

    .checkbox .pmd-checkbox {
        padding-left: 0
    }

    .pmd-checkbox.custom-control, .pmd-radio.custom-control {
        padding-left: 0
    }

    .pmd-checkbox .custom-control-label, .pmd-radio .custom-control-label {
        position: relative;
        padding-left: 2rem
    }

    .pmd-checkbox .custom-control-label::after, .pmd-radio .custom-control-label::after {
        width: 18px;
        height: 18px;
        border: .125rem solid rgba(25, 40, 102, .54);
        top: 0;
        bottom: 0;
        margin: auto;
        left: 0
    }

    .pmd-checkbox .custom-control-input:checked ~ .custom-control-label::after, .pmd-radio .custom-control-input:checked ~ .custom-control-label::after {
        border-color: #0191d0
    }

    .pmd-checkbox .custom-control-input:focus ~ .custom-control-label::before, .pmd-radio .custom-control-input:focus ~ .custom-control-label::before {
        box-shadow: none
    }

    .pmd-checkbox .custom-control-input:disabled ~ .custom-control-label, .pmd-radio .custom-control-input:disabled ~ .custom-control-label {
        color: rgba(25, 40, 102, .38)
    }

    .pmd-checkbox .custom-control-input:disabled ~ .custom-control-label::after, .pmd-radio .custom-control-input:disabled ~ .custom-control-label::after {
        border-color: rgba(25, 40, 102, .38)
    }

    .pmd-checkbox .ink, .pmd-radio .ink {
        background-color: rgba(25, 40, 102, .38)
    }

    .pmd-radio .custom-control-label::after {
        border-radius: 18px
    }

    .pmd-radio .custom-control-label::before {
        top: 0;
        background: #0191d0;
        border-radius: 4px;
        transition: .2s ease-in-out;
        height: 8px;
        width: 8px;
        left: 5px;
        -ms-transform: scale(0);
        -webkit-transform: scale(0);
        transform: scale(0);
        bottom: 0;
        margin: auto
    }

    .pmd-radio .custom-control-input:checked ~ .custom-control-label::after {
        background-color: transparent;
        background-image: none
    }

    .pmd-radio .custom-control-input:checked ~ .custom-control-label::before {
        -ms-transform: scale(1);
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    .pmd-checkbox .custom-control-label::after {
        border-radius: .125rem
    }

    .pmd-checkbox .custom-control-label::before {
        height: 12px;
        top: -2px;
        bottom: 0;
        margin: auto;
        left: 6px;
        width: 6px;
        transition: all .2s;
        opacity: 0;
        -ms-transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        border-radius: 0;
        z-index: 1;
        background-color: transparent
    }

    .pmd-checkbox .custom-control-input:checked ~ .custom-control-label::after {
        background-color: #0191d0;
        background-image: none
    }

    .pmd-checkbox .custom-control-input:checked ~ .custom-control-label::before {
        color: #fff;
        background-image: none;
        border-image: none;
        border-style: none solid solid none;
        border-width: 0 .125rem .125rem 0;
        opacity: 1;
        background-color: transparent
    }

    .pmd-checkbox.pmd-checkbox-ripple-effect {
        position: relative
    }

    .pmd-checkbox .pmd-checkboxwrap {
        position: absolute;
        z-index: -1;
        height: 40px;
        width: 40px;
        border-radius: 50%;
        overflow: hidden;
        top: -8px;
        left: -11px
    }

    .checkbox-inline.pmd-checkbox {
        padding-left: 0
    }

    .pmd-checkbox-ripple-effect .ink {
        background-color: rgba(0, 0, 0, .2)
    }

    .text-white .pmd-checkbox .custom-control-label::after, .text-white .pmd-radio .custom-control-label::after {
        width: 18px;
        height: 18px;
        border: .125rem solid rgba(255, 255, 255, .7)
    }

    .text-white .pmd-checkbox .custom-control-input:checked ~ .custom-control-label::after, .text-white .pmd-radio .custom-control-input:checked ~ .custom-control-label::after {
        border-color: #0191d0
    }

    .text-white .pmd-checkbox .custom-control-input:focus ~ .custom-control-label::before, .text-white .pmd-radio .custom-control-input:focus ~ .custom-control-label::before {
        box-shadow: none
    }

    .text-white .pmd-checkbox .custom-control-input:disabled ~ .custom-control-label, .text-white .pmd-radio .custom-control-input:disabled ~ .custom-control-label {
        color: rgba(255, 255, 255, .5)
    }

    .text-white .pmd-checkbox .custom-control-input:disabled ~ .custom-control-label::after, .text-white .pmd-radio .custom-control-input:disabled ~ .custom-control-label::after {
        border-color: rgba(255, 255, 255, .5)
    }

    .text-white .pmd-checkbox .ink, .text-white .pmd-radio .ink {
        background-color: rgba(255, 255, 255, .5)
    }

    .pmd-textfield-focused {
        transition: transform .2s cubic-bezier(.4, 0, .2, 1) 0s;
        width: 100%;
        height: 2px;
        display: block;
        top: -1px;
        background-color: #0191d0;
        -ms-transform: scaleX(0);
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        position: relative;
        z-index: 2
    }

    .pmd-textfield.pmd-textfield-floating-label-active .pmd-textfield-focused {
        -ms-transform: scaleX(1);
        -webkit-transform: scaleX(1);
        transform: scaleX(1)
    }

    .pmd-textfield .custom-select, .pmd-textfield .form-control {
        background-color: transparent;
        border: none;
        border-bottom: solid 1px #ebebeb;
        outline: 0;
        box-shadow: none;
        padding: 0;
        border-radius: 0;
        font-size: 1rem;
        padding: .25rem 0 .5rem;
        color: #192866
    }

    .pmd-textfield label {
        font-weight: 400;
        line-height: 1;
        font-size: .875rem;
        color: rgba(25, 40, 102, .54);
        margin-bottom: 0
    }

    .pmd-textfield label.col-form-label-lg, .pmd-textfield label.col-form-label-sm {
        padding-top: 0;
        padding-bottom: 0
    }

    .pmd-textfield textarea.form-control {
        height: 80px
    }

    .pmd-textfield select.form-control:not([size]):not([multiple]) {
        height: calc(2.25rem + 1px)
    }

    .pmd-textfield .form-control-lg {
        font-size: 1.25rem
    }

    .pmd-textfield .form-control-sm {
        font-size: .875rem
    }

    .pmd-textfield .col-form-label-lg {
        font-size: 1rem
    }

    .pmd-textfield .col-form-label-sm {
        font-size: .625rem
    }

    .pmd-textfield .custom-select::after {
        font-family: "Material icons";
        content: "\E5C5"
    }

    .pmd-textfield-floating-label {
        position: relative
    }

    .pmd-textfield-floating-label label {
        -ms-transform: translateY(26px);
        -webkit-transform: translateY(26px);
        transform: translateY(26px);
        font-size: 1rem;
        transition-duration: .2s;
        transition-timing-function: cubic-bezier(.4, 0, .2, 1)
    }

    .pmd-textfield-floating-label label.col-form-label-lg {
        font-size: 1.25rem;
        -ms-transform: translateY(30px);
        -webkit-transform: translateY(30px);
        transform: translateY(30px)
    }

    .pmd-textfield-floating-label label.col-form-label-sm {
        font-size: .875rem;
        -ms-transform: translateY(26px);
        -webkit-transform: translateY(26px);
        transform: translateY(26px)
    }

    .pmd-textfield-floating-label .form-control {
        position: relative
    }

    .pmd-textfield-floating-label.pmd-textfield-floating-label-completed label {
        -ms-transform: translateY(0);
        -webkit-transform: translateY(0);
        transform: translateY(0);
        font-size: .875rem;
        color: rgba(25, 40, 102, .54)
    }

    .pmd-textfield-floating-label.pmd-textfield-floating-label-completed label.col-form-label-lg {
        font-size: 1rem;
        -ms-transform: translateY(0);
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }

    .pmd-textfield-floating-label.pmd-textfield-floating-label-completed label.col-form-label-sm {
        font-size: .625rem;
        -ms-transform: translateY(0);
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }

    .pmd-custom-file .custom-file-label {
        background-color: transparent;
        border: none;
        border-bottom: solid 1px #ebebeb;
        outline: 0;
        box-shadow: none;
        border-radius: 0;
        font-size: 1rem;
        padding: .375rem;
        padding-left: 0;
        color: #192866
    }

    .pmd-custom-file .custom-file-label::after {
        border-left: none;
        border-radius: 4
    }

    .valid-feedback {
        color: #259b24
    }

    .valid-tooltip {
        color: #fff;
        background-color: rgba(37, 155, 36, .8)
    }

    .pmd-textfield .custom-select.is-valid, .pmd-textfield .form-control.is-valid, .was-validated .pmd-textfield .custom-select:valid, .was-validated .pmd-textfield .form-control:valid {
        border-color: #259b24
    }

    .pmd-textfield .custom-select.is-valid:focus, .pmd-textfield .form-control.is-valid:focus, .was-validated .pmd-textfield .custom-select:valid:focus, .was-validated .pmd-textfield .form-control:valid:focus {
        border-color: #259b24;
        box-shadow: none
    }

    .pmd-textfield .custom-select.is-valid ~ .pmd-textfield-focused, .pmd-textfield .form-control.is-valid ~ .pmd-textfield-focused, .was-validated .pmd-textfield .custom-select:valid ~ .pmd-textfield-focused, .was-validated .pmd-textfield .form-control:valid ~ .pmd-textfield-focused {
        background-color: #259b24
    }

    .pmd-textfield label.is-valid {
        color: #259b24
    }

    .form-check-input.is-valid ~ .form-check-label, .was-validated .form-check-input:valid ~ .form-check-label {
        color: #259b24
    }

    .pmd-checkbox .custom-control-input.is-valid ~ .custom-control-label, .pmd-radio .custom-control-input.is-valid ~ .custom-control-label, .was-validated .pmd-checkbox .custom-control-input:valid ~ .custom-control-label, .was-validated .pmd-radio .custom-control-input:valid ~ .custom-control-label {
        color: #259b24
    }

    .pmd-checkbox .custom-control-input.is-valid ~ .custom-control-label::after, .pmd-radio .custom-control-input.is-valid ~ .custom-control-label::after, .was-validated .pmd-checkbox .custom-control-input:valid ~ .custom-control-label::after, .was-validated .pmd-radio .custom-control-input:valid ~ .custom-control-label::after {
        border-color: #259b24
    }

    .pmd-radio .custom-control-input.is-valid ~ .custom-control-label::before, .was-validated .pmd-radio .custom-control-input:valid ~ .custom-control-label::before {
        background: #259b24
    }

    .pmd-checkbox .custom-control-input.is-valid ~ .custom-control-label::before, .was-validated .pmd-checkbox .custom-control-input:valid ~ .custom-control-label::before {
        background-color: transparent;
        box-shadow: none
    }

    .pmd-checkbox .custom-control-input.is-valid ~ .custom-control-label::after, .was-validated .pmd-checkbox .custom-control-input:valid ~ .custom-control-label::after {
        background-color: #259b24
    }

    .custom-file-input.is-valid ~ .custom-file-label, .was-validated .custom-file-input:valid ~ .custom-file-label {
        border-color: #259b24
    }

    .custom-file-input.is-valid ~ .custom-file-label::before, .was-validated .custom-file-input:valid ~ .custom-file-label::before {
        border-color: inherit
    }

    .custom-file-input.is-valid:focus ~ .custom-file-label, .was-validated .custom-file-input:valid:focus ~ .custom-file-label {
        box-shadow: none
    }

    .invalid-feedback {
        color: #dc3545
    }

    .invalid-tooltip {
        color: #fff;
        background-color: rgba(220, 53, 69, .8)
    }

    .pmd-textfield .custom-select.is-invalid, .pmd-textfield .form-control.is-invalid, .was-validated .pmd-textfield .custom-select:invalid, .was-validated .pmd-textfield .form-control:invalid {
        border-color: #dc3545
    }

    .pmd-textfield .custom-select.is-invalid:focus, .pmd-textfield .form-control.is-invalid:focus, .was-validated .pmd-textfield .custom-select:invalid:focus, .was-validated .pmd-textfield .form-control:invalid:focus {
        border-color: #dc3545;
        box-shadow: none
    }

    .pmd-textfield .custom-select.is-invalid ~ .pmd-textfield-focused, .pmd-textfield .form-control.is-invalid ~ .pmd-textfield-focused, .was-validated .pmd-textfield .custom-select:invalid ~ .pmd-textfield-focused, .was-validated .pmd-textfield .form-control:invalid ~ .pmd-textfield-focused {
        background-color: #dc3545
    }

    .pmd-textfield label.is-invalid {
        color: #dc3545
    }

    .form-check-input.is-invalid ~ .form-check-label, .was-validated .form-check-input:invalid ~ .form-check-label {
        color: #dc3545
    }

    .pmd-checkbox .custom-control-input.is-invalid ~ .custom-control-label, .pmd-radio .custom-control-input.is-invalid ~ .custom-control-label, .was-validated .pmd-checkbox .custom-control-input:invalid ~ .custom-control-label, .was-validated .pmd-radio .custom-control-input:invalid ~ .custom-control-label {
        color: #dc3545
    }

    .pmd-checkbox .custom-control-input.is-invalid ~ .custom-control-label::after, .pmd-radio .custom-control-input.is-invalid ~ .custom-control-label::after, .was-validated .pmd-checkbox .custom-control-input:invalid ~ .custom-control-label::after, .was-validated .pmd-radio .custom-control-input:invalid ~ .custom-control-label::after {
        border-color: #dc3545
    }

    .pmd-radio .custom-control-input.is-invalid ~ .custom-control-label::before, .was-validated .pmd-radio .custom-control-input:invalid ~ .custom-control-label::before {
        background: #dc3545
    }

    .pmd-checkbox .custom-control-input.is-invalid ~ .custom-control-label::before, .was-validated .pmd-checkbox .custom-control-input:invalid ~ .custom-control-label::before {
        background-color: transparent;
        box-shadow: none
    }

    .pmd-checkbox .custom-control-input.is-invalid ~ .custom-control-label::after, .was-validated .pmd-checkbox .custom-control-input:invalid ~ .custom-control-label::after {
        background-color: #dc3545
    }

    .custom-file-input.is-invalid ~ .custom-file-label, .was-validated .custom-file-input:invalid ~ .custom-file-label {
        border-color: #dc3545
    }

    .custom-file-input.is-invalid ~ .custom-file-label::before, .was-validated .custom-file-input:invalid ~ .custom-file-label::before {
        border-color: inherit
    }

    .custom-file-input.is-invalid:focus ~ .custom-file-label, .was-validated .custom-file-input:invalid:focus ~ .custom-file-label {
        box-shadow: none
    }

    .pmd-checkbox .custom-control-input.is-invalid ~ .custom-control-label::before, .was-validated .pmd-checkbox .custom-control-input:invalid ~ .custom-control-label::before {
        background-color: transparent;
        box-shadow: none
    }

    .pmd-checkbox .custom-control-input.is-invalid ~ .custom-control-label::after, .was-validated .pmd-checkbox .custom-control-input:invalid ~ .custom-control-label::after {
        background-color: transparent
    }

    .help-block {
        font-size: 14px;
        margin-top: 0
    }

    .has-error-text {
        display: none
    }

    .text-white .pmd-textfield label {
        color: rgba(255, 255, 255, .7)
    }

    .text-white .pmd-textfield .custom-select, .text-white .pmd-textfield .form-control {
        color: #fff;
        border-bottom-color: rgba(255, 255, 255, .12)
    }

    .text-white .pmd-textfield select option {
        color: #192866
    }

    .text-white .pmd-textfield .form-control-plaintext {
        color: #fff
    }

    .text-white .pmd-custom-file .custom-file-label {
        color: #fff;
        border-bottom-color: rgba(255, 255, 255, .12)
    }

    .pmd-input-group {
        padding-top: 22px
    }

    .pmd-input-group .input-group-text {
        padding: .375rem .5rem
    }

    .pmd-input-group .input-group-prepend ~ .pmd-custom-file .custom-file-label {
        padding-left: .375rem
    }

    .pmd-input-group .input-group-prepend ~ .pmd-textfield .custom-select {
        padding-left: .375rem;
        padding-top: .375rem
    }

    .pmd-input-group .input-group-prepend ~ .pmd-textfield label {
        padding-left: .375rem
    }

    .pmd-input-group .input-group-prepend ~ .pmd-textfield .form-control {
        padding-left: .375rem
    }

    .pmd-input-group .input-group-append, .pmd-input-group .input-group-prepend {
        -ms-flex-align: start !important;
        align-items: flex-start !important
    }

    .pmd-input-group .pmd-textfield {
        align-items: flex-end;
        flex: 1 1 auto
    }

    .pmd-input-group .pmd-textfield .custom-select {
        display: block
    }

    .pmd-input-group .pmd-textfield .form-control {
        padding: .375rem;
        padding-left: 0;
        margin-top: 1px
    }

    .pmd-input-group .pmd-textfield.pmd-textfield-floating-label label {
        -ms-transform: translateY(6px);
        -webkit-transform: translateY(6px);
        transform: translateY(6px)
    }

    .pmd-input-group .pmd-textfield.pmd-textfield-floating-label .custom-select, .pmd-input-group .pmd-textfield.pmd-textfield-floating-label .form-control {
        margin-top: -21px
    }

    .pmd-input-group .pmd-textfield.pmd-textfield-floating-label.pmd-textfield-floating-label-completed label {
        -ms-transform: translateY(-20px);
        -webkit-transform: translateY(-20px);
        transform: translateY(-20px)
    }

    .pmd-input-group .pmd-checkbox .custom-control-label, .pmd-input-group .pmd-radio .custom-control-label {
        position: static;
        padding-left: 1.2rem
    }

    .pmd-input-group.pmd-input-group-icon .input-group-text {
        padding: .375rem 0;
        background-color: transparent;
        border-color: transparent
    }

    .pmd-input-group.pmd-input-group-icon .input-group-text .material-icons {
        vertical-align: middle
    }

    .pmd-input-group.pmd-input-group-icon .input-group-prepend {
        padding-right: 1rem
    }

    .pmd-input-group.pmd-input-group-icon .input-group-prepend ~ .pmd-textfield label {
        padding-left: 0
    }

    .pmd-input-group.pmd-input-group-icon .input-group-prepend ~ .pmd-textfield .form-control {
        padding-left: 0
    }

    .pmd-input-group.pmd-input-group-icon .input-group-append {
        position: absolute;
        right: 0
    }

    .pmd-input-group.input-group-lg .form-control, .pmd-input-group.input-group-lg .input-group-append > .btn, .pmd-input-group.input-group-lg .input-group-append > .input-group-text, .pmd-input-group.input-group-lg .input-group-prepend > .btn, .pmd-input-group.input-group-lg .input-group-prepend > .input-group-text {
        font-size: 1.25rem;
        padding: .375rem .5rem
    }

    .pmd-input-group.input-group-sm .form-control, .pmd-input-group.input-group-sm .input-group-append > .btn, .pmd-input-group.input-group-sm .input-group-append > .input-group-text, .pmd-input-group.input-group-sm .input-group-prepend > .btn, .pmd-input-group.input-group-sm .input-group-prepend > .input-group-text {
        font-size: .875rem;
        padding: .375rem .5rem
    }

    .pmd-switch {
        vertical-align: middle;
        -moz-user-select: none
    }

    .pmd-switch .pmd-switch-label, .pmd-switch input, .pmd-switch label {
        -moz-user-select: none
    }

    .pmd-switch label {
        cursor: pointer;
        font-weight: 400
    }

    .pmd-switch label input[type=checkbox] {
        height: 0;
        opacity: 0;
        width: 0;
        position: absolute
    }

    .pmd-switch label .pmd-switch-label, .pmd-switch label input[type="checkbox][disabled"] + .pmd-switch-label {
        background-color: rgba(25, 40, 102, .54);
        border-radius: 15px;
        content: "";
        display: block;
        height: 15px;
        transition: all .2s ease-in-out;
        vertical-align: middle;
        width: 30px;
        position: relative
    }

    .pmd-switch label .pmd-switch-label::after {
        background-color: #fff;
        border-radius: 20px;
        -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        content: "";
        display: inline-block;
        height: 20px;
        left: -6px;
        position: absolute;
        top: -2px;
        transition: all .2s ease-in-out;
        width: 20px
    }

    .pmd-switch label input[type="checkbox][disabled"] + .pmd-switch-label::after, .pmd-switch label input[type="checkbox][disabled"]:checked + .pmd-switch-label::after {
        background-color: rgba(25, 40, 102, .38)
    }

    .pmd-switch label input[type=checkbox] + .pmd-switch-label:active::after, .pmd-switch label input[type="checkbox][disabled"] + .pmd-switch-label:active::after {
        -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12)
    }

    .pmd-switch label input[type=checkbox]:checked + .pmd-switch-label::after {
        left: 15px;
        background-color: #0191d0
    }

    .pmd-switch label input[type=checkbox]:checked + .pmd-switch-label {
        background-color: rgba(25, 40, 102, .54)
    }

    .pmd-switch label input[type=checkbox]:checked + .pmd-switch-label:active::after {
        -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12)
    }

    .pmd-card-list {
        padding-bottom: .5rem;
        padding-top: .5rem;
        margin-bottom: 0;
        background-color: #fff;
        -moz-box-shadow: 0 8px 40px rgba(25, 40, 102, .08);
        -webkit-box-shadow: 0 8px 40px rgba(25, 40, 102, .08);
        box-shadow: 0 8px 40px rgba(25, 40, 102, .08)
    }

    .pmd-list .list-group-item {
        padding: .75rem 1rem
    }

    .pmd-list .list-group-item {
        margin-bottom: -1px;
        border: inherit;
        line-height: 1.4
    }

    .pmd-list .list-group-item:first-child {
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .pmd-list .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }

    .pmd-list.pmd-list-border .list-group-item {
        border: 1px solid #d1d4e0
    }

    .pmd-list.pmd-list-sm .list-group-item {
        padding-top: .5rem;
        padding-bottom: .5rem
    }

    .pmd-list.pmd-list-sm.pmd-list-bullet .list-group-item:before {
        top: .5rem
    }

    .pmd-list.pmd-list-bullet .list-group-item {
        padding-left: 1.5rem;
        position: relative
    }

    .pmd-list.pmd-list-bullet .list-group-item:before {
        content: "\E315";
        font-family: 'Material Icons';
        position: absolute;
        left: 0;
        top: .625rem;
        opacity: .54
    }

    .pmd-list-title {
        color: #192866;
        font-size: 1rem
    }

    .pmd-list-subtitle {
        color: rgba(25, 40, 102, .54);
        font-size: .875rem;
        margin-top: -.25rem
    }

    .pmd-list-text {
        color: rgba(25, 40, 102, .54);
        font-size: 1rem
    }

    .pmd-list-subtitle:last-child, .pmd-list-text:last-child {
        margin-bottom: 0
    }

    .list-group-item.active .pmd-list-title {
        color: #fff
    }

    .list-group-item.active .pmd-list-subtitle {
        color: rgba(255, 255, 255, .7)
    }

    .list-group-item.active .pmd-list-text {
        color: rgba(255, 255, 255, .7)
    }

    .pmd-list-avatar {
        padding: .5rem 0
    }

    .pmd-list-avatar .list-group-item {
        padding-top: .5rem;
        padding-bottom: .5rem
    }

    .pmd-list-icon {
        width: 40px;
        margin-right: 1rem
    }

    .pmd-avatar-list-img {
        border-radius: 50%;
        width: 40px;
        height: 40px;
        margin-right: 1rem;
        overflow: hidden;
        display: inline-block
    }

    .pmd-list .material-icons.media-left {
        padding-right: 32px;
        vertical-align: top;
        display: table-cell
    }

    .pmd-list .material-icons.media-right {
        padding-left: 32px;
        vertical-align: top;
        display: table-cell
    }

    .pmd-list .material-icons.media-middle {
        vertical-align: middle;
        display: table-cell
    }

    .media-body.pmd-word-break {
        word-break: break-all;
        word-wrap: break-word
    }

    .pmd-list-icon {
        width: 40px;
        margin-right: 1rem
    }

    .pmd-list-subtitle:first-child {
        margin-bottom: 0;
        margin-top: 0
    }

    .pmd-list-title:last-child {
        margin-bottom: 0
    }

    .pmd-list-title:first-child {
        margin-bottom: .5rem
    }

    .pmd-list-subtitle + .pmd-list-subtitle {
        margin-top: 0
    }

    .pmd-list-inline {
        margin: 0 -.375rem
    }

    .pmd-list-inline .list-inline-item {
        padding: 0 .375rem;
        margin: 0
    }

    .pmd-list-inline.pmd-list-inline-border {
        margin-left: -1rem;
        margin-right: -1rem
    }

    .pmd-list-inline.pmd-list-inline-border .list-inline-item {
        padding-left: 1rem;
        padding-right: 1rem;
        border-right: 1px solid #ebebeb
    }

    .pmd-list-inline.pmd-list-inline-border .list-inline-item:last-child {
        border-right: 0
    }

    .pmd-navbar.navbar {
        justify-content: inherit;
        padding-top: 0;
        padding-bottom: 0
    }

    .pmd-navbar .navbar-brand {
        margin-right: 1.5rem;
        font-size: 1.5rem;
        line-height: 48px
    }

    .pmd-navbar .navbar-toggler-icon {
        background-image: none;
        display: inline-block;
        height: 1.5rem;
        width: 1.5rem
    }

    .pmd-navbar .navbar-toggler-icon::after {
        font-family: "Material icons";
        content: "\E5D2";
        font-size: 24px
    }

    .pmd-navbar .navbar-nav .nav-link {
        line-height: 24px;
        font-weight: 400;
        text-transform: uppercase
    }

    .pmd-navbar .navbar-toggler {
        outline: 0;
        float: left;
        border-radius: 50%;
        border: none;
        padding: .625rem;
        margin-right: .5rem;
        margin-left: -.5rem
    }

    .pmd-navbar .navbar-toggler .icon-bar {
        width: 20px
    }

    .pmd-navbar .navbar-toggler:focus, .pmd-navbar .navbar-toggler:hover {
        background-color: rgba(0, 0, 0, .2)
    }

    .pmd-navbar .pmd-navbar-right-icon {
        margin-left: 1rem
    }

    .pmd-navbar .pmd-navbar-right-icon a {
        display: inline-block
    }

    @media (max-width: 767.98px) {
        .pmd-navbar .pmd-navbar-right-icon {
            flex-direction: row;
            margin-left: auto
        }
    }

    .pmd-navbar .btn.pmd-btn-fab {
        margin-top: .75rem;
        margin-bottom: .75rem;
        margin-right: .5rem;
        padding: 0
    }

    @media (max-width: 767.98px) {
        .pmd-navbar .btn.pmd-btn-fab {
            margin-top: .5rem;
            margin-bottom: .5rem;
            margin-right: .5rem;
            margin-left: -.5rem
        }
    }

    .pmd-navbar .navbar-form {
        padding-top: 7px;
        padding-bottom: 6px
    }

    .pmd-navbar .navbar-form .btn {
        padding: 9px 14px
    }

    .pmd-navbar.navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, .7)
    }

    .pmd-navbar.navbar-dark .navbar-nav .nav-link:focus, .pmd-navbar.navbar-dark .navbar-nav .nav-link:hover {
        color: #fff
    }

    .pmd-navbar.navbar-dark .navbar-nav .nav-link.disabled {
        color: rgba(255, 255, 255, .5)
    }

    .pmd-navbar.navbar-dark .navbar-nav .active > .nav-link, .pmd-navbar.navbar-dark .navbar-nav .nav-link.active, .pmd-navbar.navbar-dark .navbar-nav .nav-link.show, .pmd-navbar.navbar-dark .navbar-nav .show > .nav-link {
        color: #fff
    }

    .pmd-navbar.navbar-dark .navbar-toggler {
        color: rgba(255, 255, 255, .7)
    }

    .pmd-navbar.navbar-dark .navbar-text {
        color: rgba(255, 255, 255, .7)
    }

    .pmd-navbar.navbar-dark .navbar-text a {
        color: #fff
    }

    .pmd-navbar.navbar-dark .navbar-text a:focus, .pmd-navbar.navbar-dark .navbar-text a:hover {
        color: #fff
    }

    .pmd-navbar.navbar-dark .pmd-user-info > a {
        color: rgba(255, 255, 255, .7)
    }

    .pmd-navbar.navbar-dark .pmd-user-info > a:focus, .pmd-navbar.navbar-dark .pmd-user-info > a:hover {
        color: #fff
    }

    .pmd-navbar.navbar-light .navbar-nav .nav-link {
        color: rgba(25, 40, 102, .54)
    }

    .pmd-navbar.navbar-light .navbar-nav .nav-link:focus, .pmd-navbar.navbar-light .navbar-nav .nav-link:hover {
        color: #192866
    }

    .pmd-navbar.navbar-light .navbar-nav .nav-link.disabled {
        color: rgba(25, 40, 102, .38)
    }

    .pmd-navbar.navbar-light .navbar-nav .active > .nav-link, .pmd-navbar.navbar-light .navbar-nav .nav-link.active, .pmd-navbar.navbar-light .navbar-nav .nav-link.show, .pmd-navbar.navbar-light .navbar-nav .show > .nav-link {
        color: #192866
    }

    .pmd-navbar.navbar-light .navbar-toggler {
        color: rgba(25, 40, 102, .54)
    }

    .pmd-navbar.navbar-light .navbar-text {
        color: rgba(25, 40, 102, .54)
    }

    .pmd-navbar.navbar-light .navbar-text a {
        color: #192866
    }

    .pmd-navbar.navbar-light .navbar-text a:focus, .pmd-navbar.navbar-light .navbar-text a:hover {
        color: #192866
    }

    .pmd-navbar.navbar-light .pmd-user-info > a {
        color: rgba(25, 40, 102, .54)
    }

    .pmd-navbar.navbar-light .pmd-user-info > a:focus, .pmd-navbar.navbar-light .pmd-user-info > a:hover {
        color: #192866
    }

    .pmd-navbar .pmd-dropdown.dropup .dropdown-menu {
        top: inherit;
        transform: inherit
    }

    .pmd-sidebar-overlay {
        visibility: hidden;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0;
        background: #192866;
        z-index: 1030;
        transition: visibility 0 linear .4s, opacity .4s cubic-bezier(.4, 0, .2, 1);
        -ms-transform: translateZ(0);
        transform: translateZ(0)
    }

    .pmd-sidebar-overlay.active, .pmd-sidebar-overlay.pmd-sidebar-overlay-active {
        opacity: .5;
        visibility: visible;
        transition-delay: 0
    }

    @media (max-width: 767.98px) {
        .pmd-navbar .navbar-header {
            padding: 0 .5rem
        }

        .pmd-navbar.navbar-fixed-bottom, .pmd-navbar.navbar-fixed-top {
            z-index: 998
        }
    }

    .pmd-user-info {
        display: flex;
        flex-direction: column
    }

    .pmd-user-info .dropdown-menu {
        min-width: 100%
    }

    .pmd-user-info .dropdown-toggle::after {
        display: none
    }

    .pmd-user-info > a {
        padding: .5rem .5rem;
        text-decoration: none
    }

    .pmd-navbar-sidebar {
        display: block;
        min-height: 100%;
        overflow-y: auto;
        overflow-x: hidden;
        border: none;
        transition: all .5s cubic-bezier(.55, 0, .1, 1);
        min-width: 85%;
        width: 85%;
        transform: translate3d(-100%, 0, 0);
        position: fixed;
        top: 0;
        bottom: 0;
        z-index: 1031;
        left: 0;
        background: #fff
    }

    .pmd-navbar-sidebar:after {
        clear: both
    }

    .pmd-navbar-sidebar::-webkit-scrollbar-track {
        border-radius: 2px
    }

    .pmd-navbar-sidebar::-webkit-scrollbar {
        width: 5px;
        background-color: #F7F7F7
    }

    .pmd-navbar-sidebar::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #BFBFBF
    }

    .pmd-navbar-sidebar.pmd-sidebar-open {
        transform: translate3d(0, 0, 0);
        box-shadow: 2px 0 15px rgba(0, 0, 0, .35)
    }

    .pmd-navbar-sidebar .dropdown-menu {
        opacity: 1;
        position: relative;
        box-shadow: none;
        transition: inherit
    }

    .pmd-navbar-sidebar .dropdown-menu::before {
        background-color: transparent
    }

    .pmd-navbar-sidebar .dropdown-menu .dropdown-header, .pmd-navbar-sidebar .dropdown-menu .dropdown-item {
        padding: .25rem 1rem .25rem 2rem;
        line-height: 24px
    }

    .pmd-navbar-sidebar .nav-link {
        padding: .75rem 1rem
    }

    .pmd-navbar-sidebar .pmd-user-info > a {
        padding: .5rem 1rem;
        background-color: #5968a6
    }

    .pmd-navbar-sidebar .pmd-user-info > a:focus, .pmd-navbar-sidebar .pmd-user-info > a:hover {
        background-color: #5968a6
    }

    .pmd-navbar-sidebar.collapse:not(.show) {
        display: block
    }

    .container-fluid > .navbar-collapse.pmd-navbar-sidebar, .container > .navbar-collapse.pmd-navbar-sidebar {
        margin-left: 0;
        margin-right: 0;
        padding: 0
    }

    .navbar-dark .pmd-navbar-sidebar {
        background-color: #475385
    }

    .navbar-dark .pmd-navbar-sidebar .dropdown-menu a {
        color: rgba(255, 255, 255, .75)
    }

    .navbar-dark .pmd-navbar-sidebar .dropdown-menu a :focus, .navbar-dark .pmd-navbar-sidebar .dropdown-menu a:hover {
        background-color: transparent;
        color: #fff
    }

    .navbar-dark .pmd-navbar-sidebar .dropdown-divider {
        border-color: #5968a6
    }

    @media (min-width: 576px) {
        .pmd-navbar.navbar-expand-sm .navbar-nav .nav-link {
            padding-top: 1.25rem;
            padding-bottom: 1.25rem
        }

        .pmd-navbar.navbar-expand-sm .pmd-navbar-sidebar {
            overflow: inherit;
            transition: inherit;
            transform: inherit;
            position: relative;
            background-color: inherit;
            min-width: inherit;
            width: inherit
        }

        .pmd-navbar.navbar-expand-sm .pmd-navbar-sidebar .dropdown-menu {
            position: absolute;
            -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
            -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
            box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
            transition: all .2s ease-in-out
        }

        .pmd-navbar.navbar-expand-sm .pmd-navbar-sidebar .dropdown-menu::before {
            background-color: #fff
        }

        .pmd-navbar.navbar-expand-sm .pmd-navbar-sidebar .dropdown-menu a {
            color: #192866
        }

        .pmd-navbar.navbar-expand-sm .pmd-navbar-sidebar .dropdown-menu a :focus, .pmd-navbar.navbar-expand-sm .pmd-navbar-sidebar .dropdown-menu a:hover {
            background-color: rgba(25, 40, 102, .075);
            color: #142052
        }

        .pmd-navbar.navbar-expand-sm .pmd-navbar-sidebar .dropdown-menu .dropdown-divider {
            border-color: #e9ecef
        }

        .pmd-navbar.navbar-expand-sm .pmd-navbar-sidebar .dropdown-menu .dropdown-item {
            padding: .75rem 1rem
        }

        .pmd-navbar.navbar-expand-sm .pmd-navbar-sidebar .dropdown-menu .dropdown-header {
            padding: .25rem 1rem
        }

        .pmd-navbar.navbar-expand-sm .pmd-navbar-sidebar .pmd-user-info {
            flex-direction: row;
            margin-right: -15px;
            margin-left: 1rem;
            order: 1
        }

        .pmd-navbar.navbar-expand-sm .pmd-navbar-sidebar .pmd-user-info .dropdown-menu {
            border-bottom: transparent solid 1px;
            border-color: transparent
        }

        .pmd-navbar.navbar-expand-sm .pmd-navbar-sidebar .pmd-user-info .media-body {
            width: auto
        }

        .pmd-navbar.navbar-expand-sm .pmd-navbar-sidebar .pmd-user-info a {
            padding: .5rem .5rem;
            background-color: inherit
        }
    }

    @media (min-width: 768px) {
        .pmd-navbar.navbar-expand-md .navbar-nav .nav-link {
            padding-top: 1.25rem;
            padding-bottom: 1.25rem
        }

        .pmd-navbar.navbar-expand-md .pmd-navbar-sidebar {
            overflow: inherit;
            transition: inherit;
            transform: inherit;
            position: relative;
            background-color: inherit;
            min-width: inherit;
            width: inherit
        }

        .pmd-navbar.navbar-expand-md .pmd-navbar-sidebar .dropdown-menu {
            position: absolute;
            -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
            -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
            box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
            transition: all .2s ease-in-out
        }

        .pmd-navbar.navbar-expand-md .pmd-navbar-sidebar .dropdown-menu::before {
            background-color: #fff
        }

        .pmd-navbar.navbar-expand-md .pmd-navbar-sidebar .dropdown-menu a {
            color: #192866
        }

        .pmd-navbar.navbar-expand-md .pmd-navbar-sidebar .dropdown-menu a :focus, .pmd-navbar.navbar-expand-md .pmd-navbar-sidebar .dropdown-menu a:hover {
            background-color: rgba(25, 40, 102, .075);
            color: #142052
        }

        .pmd-navbar.navbar-expand-md .pmd-navbar-sidebar .dropdown-menu .dropdown-divider {
            border-color: #e9ecef
        }

        .pmd-navbar.navbar-expand-md .pmd-navbar-sidebar .dropdown-menu .dropdown-item {
            padding: .75rem 1rem
        }

        .pmd-navbar.navbar-expand-md .pmd-navbar-sidebar .dropdown-menu .dropdown-header {
            padding: .25rem 1rem
        }

        .pmd-navbar.navbar-expand-md .pmd-navbar-sidebar .pmd-user-info {
            flex-direction: row;
            margin-right: -15px;
            margin-left: 1rem;
            order: 1
        }

        .pmd-navbar.navbar-expand-md .pmd-navbar-sidebar .pmd-user-info .dropdown-menu {
            border-bottom: transparent solid 1px;
            border-color: transparent
        }

        .pmd-navbar.navbar-expand-md .pmd-navbar-sidebar .pmd-user-info .media-body {
            width: auto
        }

        .pmd-navbar.navbar-expand-md .pmd-navbar-sidebar .pmd-user-info a {
            padding: .5rem .5rem;
            background-color: inherit
        }
    }

    @media (min-width: 992px) {
        .pmd-navbar.navbar-expand-lg .navbar-nav .nav-link {
            padding-top: 1.25rem;
            padding-bottom: 1.25rem
        }

        .pmd-navbar.navbar-expand-lg .pmd-navbar-sidebar {
            overflow: inherit;
            transition: inherit;
            transform: inherit;
            position: relative;
            background-color: inherit;
            min-width: inherit;
            width: inherit
        }

        .pmd-navbar.navbar-expand-lg .pmd-navbar-sidebar .dropdown-menu {
            position: absolute;
            -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
            -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
            box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
            transition: all .2s ease-in-out
        }

        .pmd-navbar.navbar-expand-lg .pmd-navbar-sidebar .dropdown-menu::before {
            background-color: #fff
        }

        .pmd-navbar.navbar-expand-lg .pmd-navbar-sidebar .dropdown-menu a {
            color: #192866
        }

        .pmd-navbar.navbar-expand-lg .pmd-navbar-sidebar .dropdown-menu a :focus, .pmd-navbar.navbar-expand-lg .pmd-navbar-sidebar .dropdown-menu a:hover {
            background-color: rgba(25, 40, 102, .075);
            color: #142052
        }

        .pmd-navbar.navbar-expand-lg .pmd-navbar-sidebar .dropdown-menu .dropdown-divider {
            border-color: #e9ecef
        }

        .pmd-navbar.navbar-expand-lg .pmd-navbar-sidebar .dropdown-menu .dropdown-item {
            padding: .75rem 1rem
        }

        .pmd-navbar.navbar-expand-lg .pmd-navbar-sidebar .dropdown-menu .dropdown-header {
            padding: .25rem 1rem
        }

        .pmd-navbar.navbar-expand-lg .pmd-navbar-sidebar .pmd-user-info {
            flex-direction: row;
            margin-right: -15px;
            margin-left: 1rem;
            order: 1
        }

        .pmd-navbar.navbar-expand-lg .pmd-navbar-sidebar .pmd-user-info .dropdown-menu {
            border-bottom: transparent solid 1px;
            border-color: transparent
        }

        .pmd-navbar.navbar-expand-lg .pmd-navbar-sidebar .pmd-user-info .media-body {
            width: auto
        }

        .pmd-navbar.navbar-expand-lg .pmd-navbar-sidebar .pmd-user-info a {
            padding: .5rem .5rem;
            background-color: inherit
        }
    }

    @media (min-width: 1200px) {
        .pmd-navbar.navbar-expand-xl .navbar-nav .nav-link {
            padding-top: 1.25rem;
            padding-bottom: 1.25rem
        }

        .pmd-navbar.navbar-expand-xl .pmd-navbar-sidebar {
            overflow: inherit;
            transition: inherit;
            transform: inherit;
            position: relative;
            background-color: inherit;
            min-width: inherit;
            width: inherit
        }

        .pmd-navbar.navbar-expand-xl .pmd-navbar-sidebar .dropdown-menu {
            position: absolute;
            -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
            -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
            box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
            transition: all .2s ease-in-out
        }

        .pmd-navbar.navbar-expand-xl .pmd-navbar-sidebar .dropdown-menu::before {
            background-color: #fff
        }

        .pmd-navbar.navbar-expand-xl .pmd-navbar-sidebar .dropdown-menu a {
            color: #192866
        }

        .pmd-navbar.navbar-expand-xl .pmd-navbar-sidebar .dropdown-menu a :focus, .pmd-navbar.navbar-expand-xl .pmd-navbar-sidebar .dropdown-menu a:hover {
            background-color: rgba(25, 40, 102, .075);
            color: #142052
        }

        .pmd-navbar.navbar-expand-xl .pmd-navbar-sidebar .dropdown-menu .dropdown-divider {
            border-color: #e9ecef
        }

        .pmd-navbar.navbar-expand-xl .pmd-navbar-sidebar .dropdown-menu .dropdown-item {
            padding: .75rem 1rem
        }

        .pmd-navbar.navbar-expand-xl .pmd-navbar-sidebar .dropdown-menu .dropdown-header {
            padding: .25rem 1rem
        }

        .pmd-navbar.navbar-expand-xl .pmd-navbar-sidebar .pmd-user-info {
            flex-direction: row;
            margin-right: -15px;
            margin-left: 1rem;
            order: 1
        }

        .pmd-navbar.navbar-expand-xl .pmd-navbar-sidebar .pmd-user-info .dropdown-menu {
            border-bottom: transparent solid 1px;
            border-color: transparent
        }

        .pmd-navbar.navbar-expand-xl .pmd-navbar-sidebar .pmd-user-info .media-body {
            width: auto
        }

        .pmd-navbar.navbar-expand-xl .pmd-navbar-sidebar .pmd-user-info a {
            padding: .5rem .5rem;
            background-color: inherit
        }
    }

    .pmd-navbar.navbar-expand .navbar-nav .nav-link {
        padding-top: 1.25rem;
        padding-bottom: 1.25rem
    }

    .pmd-navbar.navbar-expand .pmd-navbar-sidebar {
        overflow: inherit;
        transition: inherit;
        transform: inherit;
        position: relative;
        background-color: inherit;
        min-width: inherit;
        width: inherit
    }

    .pmd-navbar.navbar-expand .pmd-navbar-sidebar .dropdown-menu {
        position: absolute;
        -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        transition: all .2s ease-in-out
    }

    .pmd-navbar.navbar-expand .pmd-navbar-sidebar .dropdown-menu::before {
        background-color: #fff
    }

    .pmd-navbar.navbar-expand .pmd-navbar-sidebar .dropdown-menu a {
        color: #192866
    }

    .pmd-navbar.navbar-expand .pmd-navbar-sidebar .dropdown-menu a :focus, .pmd-navbar.navbar-expand .pmd-navbar-sidebar .dropdown-menu a:hover {
        background-color: rgba(25, 40, 102, .075);
        color: #142052
    }

    .pmd-navbar.navbar-expand .pmd-navbar-sidebar .dropdown-menu .dropdown-divider {
        border-color: #e9ecef
    }

    .pmd-navbar.navbar-expand .pmd-navbar-sidebar .dropdown-menu .dropdown-item {
        padding: .75rem 1rem
    }

    .pmd-navbar.navbar-expand .pmd-navbar-sidebar .dropdown-menu .dropdown-header {
        padding: .25rem 1rem
    }

    .pmd-navbar.navbar-expand .pmd-navbar-sidebar .pmd-user-info {
        flex-direction: row;
        margin-right: -15px;
        margin-left: 1rem;
        order: 1
    }

    .pmd-navbar.navbar-expand .pmd-navbar-sidebar .pmd-user-info .dropdown-menu {
        border-bottom: transparent solid 1px;
        border-color: transparent
    }

    .pmd-navbar.navbar-expand .pmd-navbar-sidebar .pmd-user-info .media-body {
        width: auto
    }

    .pmd-navbar.navbar-expand .pmd-navbar-sidebar .pmd-user-info a {
        padding: .5rem .5rem;
        background-color: inherit
    }

    .popover.primary {
        background-color: #0191d0;
        border-color: #b8e0f2
    }

    .popover.primary .popover-body {
        color: #fff
    }

    .popover.primary.bs-popover-top .arrow::before {
        border-top-color: #b8e0f2
    }

    .popover.primary.bs-popover-top .arrow::after {
        border-top-color: #0191d0
    }

    .popover.primary.bs-popover-right .arrow::before {
        border-right-color: #b8e0f2
    }

    .popover.primary.bs-popover-right .arrow::after {
        border-right-color: #0191d0
    }

    .popover.primary.bs-popover-bottom .arrow::before {
        border-bottom-color: #b8e0f2
    }

    .popover.primary.bs-popover-bottom .arrow::after {
        border-bottom-color: #0191d0
    }

    .popover.primary.bs-popover-left .arrow::before {
        border-left-color: #b8e0f2
    }

    .popover.primary.bs-popover-left .arrow::after {
        border-left-color: #0191d0
    }

    .popover.secondary {
        background-color: #006592;
        border-color: #b8d4e0
    }

    .popover.secondary .popover-body {
        color: #fff
    }

    .popover.secondary.bs-popover-top .arrow::before {
        border-top-color: #b8d4e0
    }

    .popover.secondary.bs-popover-top .arrow::after {
        border-top-color: #006592
    }

    .popover.secondary.bs-popover-right .arrow::before {
        border-right-color: #b8d4e0
    }

    .popover.secondary.bs-popover-right .arrow::after {
        border-right-color: #006592
    }

    .popover.secondary.bs-popover-bottom .arrow::before {
        border-bottom-color: #b8d4e0
    }

    .popover.secondary.bs-popover-bottom .arrow::after {
        border-bottom-color: #006592
    }

    .popover.secondary.bs-popover-left .arrow::before {
        border-left-color: #b8d4e0
    }

    .popover.secondary.bs-popover-left .arrow::after {
        border-left-color: #006592
    }

    .popover.success {
        background-color: #259b24;
        border-color: #c2e3c2
    }

    .popover.success .popover-body {
        color: #fff
    }

    .popover.success.bs-popover-top .arrow::before {
        border-top-color: #c2e3c2
    }

    .popover.success.bs-popover-top .arrow::after {
        border-top-color: #259b24
    }

    .popover.success.bs-popover-right .arrow::before {
        border-right-color: #c2e3c2
    }

    .popover.success.bs-popover-right .arrow::after {
        border-right-color: #259b24
    }

    .popover.success.bs-popover-bottom .arrow::before {
        border-bottom-color: #c2e3c2
    }

    .popover.success.bs-popover-bottom .arrow::after {
        border-bottom-color: #259b24
    }

    .popover.success.bs-popover-left .arrow::before {
        border-left-color: #c2e3c2
    }

    .popover.success.bs-popover-left .arrow::after {
        border-left-color: #259b24
    }

    .popover.info {
        background-color: #03a9f4;
        border-color: #b8e7fc
    }

    .popover.info .popover-body {
        color: #fff
    }

    .popover.info.bs-popover-top .arrow::before {
        border-top-color: #b8e7fc
    }

    .popover.info.bs-popover-top .arrow::after {
        border-top-color: #03a9f4
    }

    .popover.info.bs-popover-right .arrow::before {
        border-right-color: #b8e7fc
    }

    .popover.info.bs-popover-right .arrow::after {
        border-right-color: #03a9f4
    }

    .popover.info.bs-popover-bottom .arrow::before {
        border-bottom-color: #b8e7fc
    }

    .popover.info.bs-popover-bottom .arrow::after {
        border-bottom-color: #03a9f4
    }

    .popover.info.bs-popover-left .arrow::before {
        border-left-color: #b8e7fc
    }

    .popover.info.bs-popover-left .arrow::after {
        border-left-color: #03a9f4
    }

    .popover.warning {
        background-color: #ffc107;
        border-color: #ffeeba
    }

    .popover.warning .popover-body {
        color: #37447a
    }

    .popover.warning.bs-popover-top .arrow::before {
        border-top-color: #ffeeba
    }

    .popover.warning.bs-popover-top .arrow::after {
        border-top-color: #ffc107
    }

    .popover.warning.bs-popover-right .arrow::before {
        border-right-color: #ffeeba
    }

    .popover.warning.bs-popover-right .arrow::after {
        border-right-color: #ffc107
    }

    .popover.warning.bs-popover-bottom .arrow::before {
        border-bottom-color: #ffeeba
    }

    .popover.warning.bs-popover-bottom .arrow::after {
        border-bottom-color: #ffc107
    }

    .popover.warning.bs-popover-left .arrow::before {
        border-left-color: #ffeeba
    }

    .popover.warning.bs-popover-left .arrow::after {
        border-left-color: #ffc107
    }

    .popover.danger {
        background-color: #dc3545;
        border-color: #f5c6cb
    }

    .popover.danger .popover-body {
        color: #fff
    }

    .popover.danger.bs-popover-top .arrow::before {
        border-top-color: #f5c6cb
    }

    .popover.danger.bs-popover-top .arrow::after {
        border-top-color: #dc3545
    }

    .popover.danger.bs-popover-right .arrow::before {
        border-right-color: #f5c6cb
    }

    .popover.danger.bs-popover-right .arrow::after {
        border-right-color: #dc3545
    }

    .popover.danger.bs-popover-bottom .arrow::before {
        border-bottom-color: #f5c6cb
    }

    .popover.danger.bs-popover-bottom .arrow::after {
        border-bottom-color: #dc3545
    }

    .popover.danger.bs-popover-left .arrow::before {
        border-left-color: #f5c6cb
    }

    .popover.danger.bs-popover-left .arrow::after {
        border-left-color: #dc3545
    }

    .popover.light {
        background-color: #fff;
        border-color: #fff
    }

    .popover.light .popover-body {
        color: #37447a
    }

    .popover.light.bs-popover-top .arrow::before {
        border-top-color: #fff
    }

    .popover.light.bs-popover-top .arrow::after {
        border-top-color: #fff
    }

    .popover.light.bs-popover-right .arrow::before {
        border-right-color: #fff
    }

    .popover.light.bs-popover-right .arrow::after {
        border-right-color: #fff
    }

    .popover.light.bs-popover-bottom .arrow::before {
        border-bottom-color: #fff
    }

    .popover.light.bs-popover-bottom .arrow::after {
        border-bottom-color: #fff
    }

    .popover.light.bs-popover-left .arrow::before {
        border-left-color: #fff
    }

    .popover.light.bs-popover-left .arrow::after {
        border-left-color: #fff
    }

    .popover.dark {
        background-color: #475385;
        border-color: #cbcfdd
    }

    .popover.dark .popover-body {
        color: #fff
    }

    .popover.dark.bs-popover-top .arrow::before {
        border-top-color: #cbcfdd
    }

    .popover.dark.bs-popover-top .arrow::after {
        border-top-color: #475385
    }

    .popover.dark.bs-popover-right .arrow::before {
        border-right-color: #cbcfdd
    }

    .popover.dark.bs-popover-right .arrow::after {
        border-right-color: #475385
    }

    .popover.dark.bs-popover-bottom .arrow::before {
        border-bottom-color: #cbcfdd
    }

    .popover.dark.bs-popover-bottom .arrow::after {
        border-bottom-color: #475385
    }

    .popover.dark.bs-popover-left .arrow::before {
        border-left-color: #cbcfdd
    }

    .popover.dark.bs-popover-left .arrow::after {
        border-left-color: #475385
    }

    .popover.lightblack {
        background-color: #112134;
        border-color: #bcc1c6
    }

    .popover.lightblack .popover-body {
        color: #fff
    }

    .popover.lightblack.bs-popover-top .arrow::before {
        border-top-color: #bcc1c6
    }

    .popover.lightblack.bs-popover-top .arrow::after {
        border-top-color: #112134
    }

    .popover.lightblack.bs-popover-right .arrow::before {
        border-right-color: #bcc1c6
    }

    .popover.lightblack.bs-popover-right .arrow::after {
        border-right-color: #112134
    }

    .popover.lightblack.bs-popover-bottom .arrow::before {
        border-bottom-color: #bcc1c6
    }

    .popover.lightblack.bs-popover-bottom .arrow::after {
        border-bottom-color: #112134
    }

    .popover.lightblack.bs-popover-left .arrow::before {
        border-left-color: #bcc1c6
    }

    .popover.lightblack.bs-popover-left .arrow::after {
        border-left-color: #112134
    }

    .pmd-progress {
        background: none repeat scroll 0 0 rgba(25, 40, 102, .54);
        border-radius: 0;
        box-shadow: none;
        height: 4px
    }

    .progress-bar {
        box-shadow: none
    }

    .constructor, .pmd-content {
        position: relative;
        margin: 0;
        padding-top: 4.625rem;
        padding-left: 1.875rem;
        padding-right: 1.875rem;
        transition: all .3s cubic-bezier(.55, 0, .1, 1)
    }

    @media (max-width: 767.98px) {
        .constructor, .pmd-content {
            padding-left: 1rem;
            padding-right: 1rem;
            transition: none
        }
    }

    @media (max-width: 767.98px) {
        body.pmd-body-open {
            overflow: hidden
        }
    }

    .pmd-content, .pmd-sidebar, .wrapper {
        vertical-align: top
    }

    .pmd-sidebar {
        position: relative;
        display: block;
        min-height: 100%;
        overflow-y: auto;
        overflow-x: hidden;
        border: none;
        transition: all .3s cubic-bezier(.55, 0, .1, 1);
        padding-top: 4rem;
        width: 280px
    }

    @media (max-width: 767.98px) {
        .pmd-sidebar {
            padding-top: 0;
            transform: translate3d(-280px, 0, 0)
        }
    }

    .pmd-sidebar:after, .pmd-sidebar:before {
        content: " ";
        display: table
    }

    .pmd-sidebar:after {
        clear: both
    }

    .pmd-sidebar::-webkit-scrollbar-track {
        border-radius: 2px
    }

    .pmd-sidebar::-webkit-scrollbar-track {
        border-radius: 2px
    }

    .pmd-sidebar::-webkit-scrollbar {
        width: 5px;
        background-color: #F7F7F7
    }

    .pmd-sidebar::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #BFBFBF
    }

    .pmd-sidebar .pmd-user-info {
        margin-bottom: .5rem
    }

    .pmd-sidebar .pmd-user-info > a {
        background-color: rgba(25, 40, 102, .05);
        background-size: cover
    }

    .pmd-sidebar .pmd-user-info > a:focus, .pmd-sidebar .pmd-user-info > a:hover {
        background-color: rgba(25, 40, 102, .05)
    }

    @media (max-width: 767.98px) {
        .pmd-sidebar .pmd-user-info > a {
            padding-top: .5rem;
            padding-bottom: .5rem
        }
    }

    .pmd-sidebar.pmd-sidebar-open {
        min-width: 280px;
        width: 280px;
        -ms-transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12)
    }

    @media (max-width: 767.98px) {
        .pmd-sidebar.pmd-sidebar-open {
            min-width: 280px;
            width: 280px
        }
    }

    .pmd-sidebar-slide-push {
        left: 0;
        -ms-transform: translate3d(-280px, 0, 0);
        -webkit-transform: translate3d(-280px, 0, 0);
        transform: translate3d(-280px, 0, 0)
    }

    @media (max-width: 767.98px) {
        .pmd-sidebar-slide-push {
            left: 0
        }
    }

    .pmd-sidebar-slide-push.pmd-sidebar-open ~ .pmd-content, .pmd-sidebar-slide-push.pmd-sidebar-open ~ .wrapper .constructor {
        margin-left: 280px
    }

    @media (max-width: 767.98px) {
        .pmd-sidebar-slide-push.pmd-sidebar-open ~ .pmd-content, .pmd-sidebar-slide-push.pmd-sidebar-open ~ .wrapper .constructor {
            margin-left: 0
        }
    }

    .pmd-sidebar-left-fixed, .pmd-sidebar-right-fixed, .pmd-sidebar-slide-push {
        position: fixed;
        top: 0;
        bottom: 0
    }

    .pmd-sidebar-left-fixed, .pmd-sidebar-right-fixed {
        z-index: 1031;
        padding-top: 0
    }

    .pmd-sidebar-left-fixed {
        left: 0;
        -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        -ms-transform: translate3d(-280px, 0, 0);
        -webkit-transform: translate3d(-280px, 0, 0);
        transform: translate3d(-280px, 0, 0)
    }

    .pmd-sidebar-right-fixed {
        right: 0;
        -ms-transform: translate3d(280px, 0, 0);
        -webkit-transform: translate3d(280px, 0, 0);
        transform: translate3d(280px, 0, 0)
    }

    .pmd-sidebar-right-fixed.pmd-sidebar-open {
        -ms-transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    .topbar-fixed {
        -ms-transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        transition: all .3s cubic-bezier(.55, 0, .1, 1);
        position: fixed;
        z-index: 1030;
        overflow: hidden;
        width: 100%;
        height: 0;
        right: 0;
        top: 0
    }

    .topbar-fixed.pmd-sidebar-open {
        -ms-transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        width: 100%;
        height: 200%
    }

    .topbar-fixed.pmd-sidebar-open::before {
        border-radius: 50%;
        display: block;
        height: 3000px;
        width: 3000px;
        -ms-transform: scale(1);
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
        left: 50%;
        bottom: 50%;
        margin-left: -1500px;
        margin-bottom: -1500px
    }

    .topbar-fixed.pmd-sidebar-open .topbar-container {
        opacity: 1;
        transition-delay: 1s
    }

    .topbar-fixed::before {
        background: #fff none repeat scroll 0 0;
        border-radius: 50%;
        bottom: 100%;
        color: #fff;
        content: "";
        left: 100%;
        position: absolute;
        -moz-transform-origin: top right;
        -webkit-transform-origin: top right;
        transform-origin: top right;
        will-change: transform;
        -ms-transform: scale(0);
        -webkit-transform: scale(0);
        transform: scale(0);
        transition: all .3s cubic-bezier(.55, 0, .1, 1);
        opacity: 0;
        height: 3000px;
        width: 3000px
    }

    .topbar-fixed .topbar-container {
        opacity: 0;
        transition: all .3s cubic-bezier(.55, 0, .1, 1);
        transition-delay: 0s
    }

    .topbar-close {
        margin-top: 12px
    }

    .pmd-sidebar-nav .nav-link {
        padding: .75rem 1rem;
        color: #192866;
        font-weight: 500;
        display: flex;
        flex-direction: row;
        -ms-flex-direction: row
    }

    .pmd-sidebar-nav .nav-link .material-icons {
        color: rgba(25, 40, 102, .38)
    }

    .pmd-sidebar-nav .nav-link:focus, .pmd-sidebar-nav .nav-link:hover {
        background-color: rgba(25, 40, 102, .075)
    }

    .pmd-sidebar-nav .nav-link.active {
        background-color: rgba(25, 40, 102, .075)
    }

    .pmd-sidebar-nav .nav-item ul {
        list-style: none;
        padding-left: 0;
        border-bottom: solid 1px #ebebeb
    }

    .pmd-sidebar-nav .nav-item ul .nav-item:last-child {
        margin-bottom: .5rem
    }

    .pmd-sidebar-nav .nav-item ul .nav-item .nav-link {
        font-weight: 400;
        padding: .5rem 1rem .5rem 72px
    }

    .pmd-sidebar-nav .nav-item ul .nav-item .nav-link i {
        margin-left: -56px
    }

    .pmd-sidebar-nav .nav-item ul .nav-item ul {
        border-bottom: none
    }

    .pmd-sidebar-nav .nav-item .show {
        background-color: rgba(25, 40, 102, .075)
    }

    .pmd-nav-item-divider {
        height: 0;
        margin: .5rem 0;
        overflow: hidden;
        border-top: 1px solid #ebebeb
    }

    .pmd-sidebar-dark .nav-link {
        color: #fff
    }

    .pmd-sidebar-dark .nav-link .material-icons {
        color: rgba(255, 255, 255, .5)
    }

    .pmd-sidebar-overlay {
        visibility: hidden;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0;
        background: #192866;
        z-index: 1030;
        transition: all .3s cubic-bezier(.55, 0, .1, 1);
        -ms-transform: translateZ(0);
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }

    .pmd-sidebar-overlay.pmd-sidebar-overlay-active {
        opacity: .5;
        visibility: visible;
        transition-delay: 0
    }

    .pmd-sidebar-toggle {
        margin-left: -.5rem
    }

    .pmd-tabs {
        position: relative
    }

    @media (max-width: 767.98px) {
        .pmd-tabs {
            overflow-x: auto;
            overflow-y: hidden
        }
    }

    .pmd-tabs .nav-tabs {
        border-bottom: none
    }

    .pmd-tabs .nav-tabs .nav-item.show .nav-link {
        color: #192866;
        background-color: transparent
    }

    .pmd-tabs .nav-tabs .nav-link {
        padding: 1.125rem 1.5rem 1.0625rem;
        border: none;
        border-radius: 0;
        color: rgba(25, 40, 102, .54);
        font-size: .875rem;
        font-weight: 500;
        margin-right: 0;
        line-height: 1;
        text-transform: uppercase
    }

    .pmd-tabs .nav-tabs .nav-link.active {
        color: #192866;
        cursor: default;
        background-color: transparent;
        border: none;
        border-bottom-color: transparent;
        opacity: 1
    }

    .pmd-tabs .pmd-tab-active-bar {
        position: absolute;
        bottom: 0;
        width: 25%;
        height: 3px;
        background: #006592;
        transition: all .2s ease-in-out
    }

    .pmd-tabs-dark {
        background-color: #0191d0
    }

    .pmd-tabs-dark .nav-tabs .nav-link {
        color: rgba(255, 255, 255, .7)
    }

    .pmd-tabs-dark .nav-tabs .nav-link.active {
        color: #fff;
        background-color: transparent
    }

    .pmd-tabs-dark .nav-tabs .nav-link .dropdown-menu a {
        color: #192866
    }

    .pmd-tabs-dark .pmd-tabs-scroll-left, .pmd-tabs-dark .pmd-tabs-scroll-right {
        background-color: #0191d0;
        color: rgba(255, 255, 255, .7)
    }

    .pmd-tabs-scroll-container {
        display: block;
        width: 100%;
        position: relative;
        overflow: hidden
    }

    .pmd-tabs-scroll-right {
        float: right;
        right: 0;
        top: 0
    }

    .pmd-tabs-scroll-left {
        float: left;
        left: 0
    }

    .pmd-tabs-scroll-left, .pmd-tabs-scroll-right {
        position: absolute;
        z-index: 1;
        text-align: center;
        cursor: pointer;
        display: none;
        white-space: no-wrap;
        vertical-align: middle;
        padding: .75rem 1.5rem .375rem;
        background-color: #fff;
        color: rgba(25, 40, 102, .54);
        line-height: 1
    }

    .pmd-table.table {
        margin-bottom: 0;
        background-color: transparent
    }

    .pmd-table.table td, .pmd-table.table th {
        padding: .75rem;
        line-height: 1.5;
        vertical-align: middle;
        border-top: 1px solid #ebebeb;
        text-align: left;
        transition: all .2s ease-in-out
    }

    .pmd-table.table thead th {
        font-weight: 400;
        color: rgba(25, 40, 102, .54);
        border-top: none;
        font-size: .875rem;
        border-bottom: 1px solid #ebebeb
    }

    .pmd-table.table tbody + tbody {
        border-top: 2px solid #ebebeb
    }

    .pmd-table.table .table {
        margin-bottom: 0
    }

    .pmd-table.table.table-reflow {
        display: block;
        overflow-x: scroll
    }

    .pmd-table.table.table-reflow thead {
        position: absolute
    }

    .pmd-table.table.table-reflow tbody {
        margin-left: 130px
    }

    .pmd-table.table.table-reflow tr {
        display: table-cell;
        vertical-align: top;
        float: none;
        width: 130px;
        background-color: #fff
    }

    .pmd-table.table.table-reflow th {
        font-size: 1rem;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        width: 131px
    }

    .pmd-table.table.table-reflow tbody {
        display: block;
        white-space: nowrap
    }

    .pmd-table.table.table-reflow td, .pmd-table.table.table-reflow th {
        border-right: 1px solid #ebebeb;
        display: block !important
    }

    .pmd-table.table.table-reflow td:last-child, .pmd-table.table.table-reflow th:last-child {
        border-right: 1px solid #ebebeb
    }

    .pmd-table.table.table-reflow td {
        border: none;
        border-left: 1px solid #ebebeb;
        border-bottom: 1px solid #ebebeb
    }

    .pmd-table.table .thead-dark th {
        color: rgba(255, 255, 255, .7);
        background-color: #475385
    }

    .pmd-table.table .thead-light th {
        color: rgba(25, 40, 102, .54);
        background-color: #fff
    }

    .pmd-table.table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(25, 40, 102, .05)
    }

    .pmd-table.table-sm td, .pmd-table.table-sm th {
        padding: .25rem
    }

    .pmd-table.table-bordered {
        border: 1px solid #ebebeb
    }

    .pmd-table.table-bordered td, .pmd-table.table-bordered th {
        border: 1px solid #ebebeb
    }

    .pmd-table.table-bordered thead td, .pmd-table.table-bordered thead th {
        border-bottom-width: 1px
    }

    .pmd-table.table-hover tbody tr:hover {
        background-color: rgba(25, 40, 102, .075)
    }

    .pmd-table.table-borderless td, .pmd-table.table-borderless th {
        border: 0
    }

    .pmd-table.table-borderless thead th {
        border: 0
    }

    .pmd-table.table-dark {
        color: #fff;
        background-color: #475385
    }

    .pmd-table.table-dark td, .pmd-table.table-dark th, .pmd-table.table-dark thead th {
        border-color: rgba(255, 255, 255, .12)
    }

    .pmd-table.table-dark thead th {
        color: rgba(255, 255, 255, .7)
    }

    .pmd-table.table-dark.table-bordered {
        border: 0
    }

    .pmd-table.table-dark.table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, .02)
    }

    .pmd-table.table-dark.table-hover tbody tr:hover {
        background-color: rgba(255, 255, 255, .38)
    }

    .pmd-table .child-table {
        background-color: #fff
    }

    .pmd-table .child-table > td {
        padding: 0 !important;
        border-top: none
    }

    .pmd-table .child-table > td .table > thead > tr {
        background-color: #fff
    }

    .pmd-table .child-table .table-sm td, .pmd-table .child-table .table-sm th {
        padding: .25rem .75rem
    }

    @media (max-width: 767.98px) {
        .pmd-table .child-table {
            margin-top: -20px
        }
    }

    .table-primary, .table-primary > td, .table-primary > th {
        background-color: #cce9f6
    }

    .table-hover .table-primary:hover {
        background-color: #b6e0f2
    }

    .table-hover .table-primary:hover > td, .table-hover .table-primary:hover > th {
        background-color: #b6e0f2
    }

    .table-secondary, .table-secondary > td, .table-secondary > th {
        background-color: #cce0e9
    }

    .table-hover .table-secondary:hover {
        background-color: #bad5e1
    }

    .table-hover .table-secondary:hover > td, .table-hover .table-secondary:hover > th {
        background-color: #bad5e1
    }

    .table-success, .table-success > td, .table-success > th {
        background-color: #d3ebd3
    }

    .table-hover .table-success:hover {
        background-color: #c1e3c1
    }

    .table-hover .table-success:hover > td, .table-hover .table-success:hover > th {
        background-color: #c1e3c1
    }

    .table-info, .table-info > td, .table-info > th {
        background-color: #cdeefd
    }

    .table-hover .table-info:hover {
        background-color: #b4e6fc
    }

    .table-hover .table-info:hover > td, .table-hover .table-info:hover > th {
        background-color: #b4e6fc
    }

    .table-warning, .table-warning > td, .table-warning > th {
        background-color: #fff3cd
    }

    .table-hover .table-warning:hover {
        background-color: #ffedb4
    }

    .table-hover .table-warning:hover > td, .table-hover .table-warning:hover > th {
        background-color: #ffedb4
    }

    .table-danger, .table-danger > td, .table-danger > th {
        background-color: #f8d7da
    }

    .table-hover .table-danger:hover {
        background-color: #f4c1c6
    }

    .table-hover .table-danger:hover > td, .table-hover .table-danger:hover > th {
        background-color: #f4c1c6
    }

    .table-light, .table-light > td, .table-light > th {
        background-color: #fff
    }

    .table-hover .table-light:hover {
        background-color: #f2f2f2
    }

    .table-hover .table-light:hover > td, .table-hover .table-light:hover > th {
        background-color: #f2f2f2
    }

    .table-dark, .table-dark > td, .table-dark > th {
        background-color: #dadde7
    }

    .table-hover .table-dark:hover {
        background-color: #cbcfdd
    }

    .table-hover .table-dark:hover > td, .table-hover .table-dark:hover > th {
        background-color: #cbcfdd
    }

    .table-lightblack, .table-lightblack > td, .table-lightblack > th {
        background-color: #cfd3d6
    }

    .table-hover .table-lightblack:hover {
        background-color: #c1c6ca
    }

    .table-hover .table-lightblack:hover > td, .table-hover .table-lightblack:hover > th {
        background-color: #c1c6ca
    }

    .table-active, .table-active > td, .table-active > th {
        background-color: rgba(25, 40, 102, .075)
    }

    .table-hover .table-active:hover {
        background-color: rgba(20, 32, 82, .075)
    }

    .table-hover .table-active:hover > td, .table-hover .table-active:hover > th {
        background-color: rgba(20, 32, 82, .075)
    }

    .table-heading {
        min-height: 64px;
        border-bottom: 1px solid #ddd;
        padding: 4px 24px 4px 24px
    }

    .table-footer {
        padding: 8px 24px 8px 24px;
        border-top: 1px solid #ddd;
        display: inline-block;
        width: 100%
    }

    .shoarting {
        margin-left: 6px
    }

    .pmd-table.pmd-table-card {
        border-radius: 4px;
        -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        background-color: #fff
    }

    @media (max-width: 767.98px) {
        .pmd-table-card.pmd-table {
            background-color: transparent;
            box-shadow: none
        }

        .pmd-table-card.pmd-table .table {
            margin-bottom: 0
        }

        .pmd-table-card.pmd-card-main {
            background-color: transparent;
            box-shadow: none
        }

        .pmd-table-card.table.pmd-table tfoot, .pmd-table-card.table.pmd-table thead {
            display: none
        }

        .pmd-table-card.table.pmd-table tbody {
            display: block
        }

        .pmd-table-card.table.pmd-table tr {
            display: block;
            margin-bottom: 1.25rem;
            border-radius: 4px;
            -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
            -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
            box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
            background-color: #fff
        }

        .pmd-table-card.table.pmd-table td {
            display: block;
            vertical-align: middle;
            text-align: right
        }

        .pmd-table-card.table.pmd-table td[data-title]:before {
            content: attr(data-title);
            float: left;
            font-size: inherit;
            font-weight: 400;
            color: rgba(25, 40, 102, .54)
        }

        .pmd-table-card.pmd-table.table-striped td, .pmd-table-card.pmd-table.table-striped tr:nth-child(odd) {
            background-color: #fff
        }

        .pmd-table-card.pmd-table.table-striped td:nth-child(odd) {
            background-color: rgba(25, 40, 102, .05)
        }

        .pmd-table-card.pmd-table.table-dark {
            background-color: transparent
        }

        .pmd-table-card.pmd-table.table-dark tr {
            background-color: #475385
        }

        .pmd-table-card.pmd-table.table-dark td[data-title]:before {
            color: rgba(255, 255, 255, .7)
        }

        .pmd-table-card.pmd-table.table-hover tr:hover {
            background-color: #fff
        }

        .pmd-table-card.pmd-table.table-hover td:hover {
            background-color: rgba(25, 40, 102, .075)
        }

        .pmd-table-card.pmd-table.table-hover.table-dark tr:hover {
            background-color: #475385
        }

        .pmd-table-card.pmd-table.table-hover.table-dark td:hover {
            background-color: rgba(255, 255, 255, .38)
        }

        .pmd-table-card.pmd-table.table-striped.table-dark td, .pmd-table-card.pmd-table.table-striped.table-dark tr:nth-child(odd) {
            background-color: #475385
        }

        .pmd-table-card.pmd-table.table-striped.table-dark td:nth-child(odd) {
            background-color: rgba(255, 255, 255, .02)
        }

        .pmd-table-card.pmd-z-depth {
            background-color: transparent;
            box-shadow: none
        }
    }

    .pmd-card .pmd-table caption {
        padding: .75rem
    }

    .pmd-tooltip.tooltip {
        padding: .25rem .5rem;
        color: #fff;
        text-align: center;
        text-decoration: none;
        font-size: 74%;
        font-weight: 500;
        line-height: 1.2;
        transition: opacity .3s ease-in-out, margin ease-in-out .3s;
        border-radius: 2px
    }

    .pmd-tooltip.tooltip:before {
        background-color: #4c4c4c;
        width: 0;
        height: 0;
        opacity: 1;
        position: absolute;
        z-index: -1;
        content: "";
        left: 50%;
        -ms-transform: scale(0);
        -webkit-transform: scale(0);
        transform: scale(0);
        transition: all .2s ease-in-out
    }

    .pmd-tooltip.tooltip .arrow {
        display: none
    }

    .pmd-tooltip.tooltip .tooltip-arrow {
        display: none
    }

    .pmd-tooltip.tooltip .tooltip-inner {
        background-color: transparent;
        padding: 0
    }

    .pmd-tooltip.tooltip.show {
        filter: alpha(opacity=100);
        opacity: 100
    }

    .pmd-tooltip.tooltip.show:before {
        width: 100%;
        height: 100%;
        left: 0;
        opacity: 1;
        -ms-transform: scale(1);
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    .pmd-tooltip.tooltip.bs-tooltip-top:before {
        top: 100%
    }

    .pmd-tooltip.tooltip.show.bs-tooltip-top {
        margin-top: -10px
    }

    .pmd-tooltip.tooltip.show.bs-tooltip-top:before {
        top: 0;
        -moz-transform-origin: 50% 100% 0;
        -webkit-transform-origin: 50% 100% 0;
        transform-origin: 50% 100% 0;
        will-change: transform
    }

    .pmd-tooltip.tooltip.bs-tooltip-bottom:before {
        top: 0
    }

    .pmd-tooltip.tooltip.show.bs-tooltip-bottom {
        margin-top: 10px
    }

    .pmd-tooltip.tooltip.show.bs-tooltip-bottom:before {
        -moz-transform-origin: 50% 0 0;
        -webkit-transform-origin: 50% 0 0;
        transform-origin: 50% 0 0;
        will-change: transform
    }

    .pmd-tooltip.tooltip.bs-tooltip-right:before {
        top: 50%;
        left: 0
    }

    .pmd-tooltip.tooltip.bs-tooltip-right .arrow {
        left: 0
    }

    .pmd-tooltip.tooltip.show.bs-tooltip-right {
        margin-left: 10px
    }

    .pmd-tooltip.tooltip.show.bs-tooltip-right:before {
        top: 0;
        -moz-transform-origin: 0 50% 0;
        -webkit-transform-origin: 0 50% 0;
        transform-origin: 0 50% 0;
        will-change: transform
    }

    .pmd-tooltip.tooltip.bs-tooltip-left:before {
        top: 50%;
        left: 100%;
        border-radius: 100% 0 0 100%/50% 0 0 50%
    }

    .pmd-tooltip.tooltip.bs-tooltip-left .arrow {
        right: 0
    }

    .pmd-tooltip.tooltip.show.bs-tooltip-left {
        margin-left: -10px
    }

    .pmd-tooltip.tooltip.show.bs-tooltip-left .arrow {
        right: 0
    }

    .pmd-tooltip.tooltip.show.bs-tooltip-left:before {
        left: 0;
        top: 0;
        -moz-transform-origin: 100% 50% 0;
        -webkit-transform-origin: 100% 50% 0;
        transform-origin: 100% 50% 0;
        will-change: transform;
        border-radius: 2px
    }

    .pmd-floating-action {
        bottom: 1rem;
        position: fixed;
        right: 1rem;
        z-index: 1000
    }

    .menu--floating--open .pmd-floating-action-btn, .pmd-floating-action:hover .pmd-floating-action-btn {
        opacity: 1;
        -ms-transform: none;
        transform: none;
        position: relative;
        bottom: auto;
        overflow: hidden
    }

    .menu--floating--open .pmd-floating-action-btn:before, .pmd-floating-action:hover .pmd-floating-action-btn:before {
        opacity: 1
    }

    .pmd-floating-action-btn {
        display: block;
        position: relative;
        transition: all .2s ease-in-out;
        transition: all .3s cubic-bezier(.55, 0, .1, 1)
    }

    .pmd-floating-action-btn:before {
        bottom: 10%;
        content: attr(data-title);
        opacity: 0;
        position: absolute;
        right: 100%;
        transition: all .2s ease-in-out;
        white-space: nowrap;
        background-color: #fff;
        padding: .375rem .75rem;
        border-radius: 4px;
        color: #192866;
        font-size: .75rem;
        margin-right: .3125rem;
        display: inline-block;
        -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12);
        box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12)
    }

    .pmd-floating-action-btn:last-child:before {
        font-size: 14px;
        bottom: 25%
    }

    .pmd-floating-action-btn:active, .pmd-floating-action-btn:focus, .pmd-floating-action-btn:hover {
        -moz-box-shadow: 0 3px 5px -1px rgba(25, 40, 102, .2), 0 6px 10px 0 rgba(25, 40, 102, .14), 0 1px 18px 0 rgba(25, 40, 102, .12);
        -webkit-box-shadow: 0 3px 5px -1px rgba(25, 40, 102, .2), 0 6px 10px 0 rgba(25, 40, 102, .14), 0 1px 18px 0 rgba(25, 40, 102, .12);
        box-shadow: 0 3px 5px -1px rgba(25, 40, 102, .2), 0 6px 10px 0 rgba(25, 40, 102, .14), 0 1px 18px 0 rgba(25, 40, 102, .12)
    }

    .pmd-floating-action-btn:not(:last-child) {
        opacity: 0;
        transform: translateY(20px) scale(.3);
        -ms-transform: translateY(20px) scale(.3);
        margin-bottom: .9375rem;
        margin-left: .5rem;
        position: absolute;
        bottom: 0
    }

    .pmd-floating-action-btn:not(:last-child):nth-last-child(1) {
        transition-delay: 50ms
    }

    .pmd-floating-action-btn:not(:last-child):nth-last-child(2) {
        transition-delay: .1s
    }

    .pmd-floating-action-btn:not(:last-child):nth-last-child(3) {
        transition-delay: 150ms
    }

    .pmd-floating-action-btn:not(:last-child):nth-last-child(4) {
        transition-delay: .2s
    }

    .pmd-floating-action-btn:not(:last-child):nth-last-child(5) {
        transition-delay: 250ms
    }

    .pmd-floating-action-btn:not(:last-child):nth-last-child(6) {
        transition-delay: .3s
    }

    .pmd-floating-action-btn.btn:hover {
        overflow: visible
    }

    .pmd-floating-action-btn .ink {
        width: 50px;
        height: 50px
    }

    .pmd-floating-hidden {
        display: none
    }

    .pmd-social-icon {
        margin-top: 8px
    }

    .pmd-social-icon a {
        margin: 0 4px;
        display: inline-flex;
        justify-content: center
    }

    .pmd-social-icon a svg {
        fill: #848484;
        width: 50%
    }

    .pmd-social-icon a:hover svg {
        fill: #fff
    }

    .pmd-card-info {
        font-size: .875rem;
        color: rgba(0, 0, 0, .54);
        padding: 8px 0;
        border-top: 1px solid #dee2e6;
        border-bottom: 1px solid #dee2e6
    }

    .pmd-list-progress .list-group-item {
        padding-left: 50px;
        width: 100%;
        background-color: transparent
    }

    .pmd-list-progress .list-group-item:before {
        content: "";
        width: 2px;
        height: 100%;
        background: #fff;
        left: 0;
        position: absolute;
        left: 30px;
        top: 0;
        z-index: 9
    }

    .pmd-list-progress .list-group-item:after {
        content: "";
        position: absolute;
        left: 25px;
        top: 0;
        bottom: 0;
        margin: auto;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #fff
    }

    .pmd-list-progress .list-group-item.list-group-item-success:after, .pmd-list-progress .list-group-item.list-group-item-success:before {
        background-color: #67b951
    }

    .pmd-list-progress .list-group-item.list-group-item-danger:after, .pmd-list-progress .list-group-item.list-group-item-danger:before {
        background-color: #df6c6c
    }

    .pmd-card-overlay {
        background-color: #041a34;
        overflow: hidden
    }

    .pmd-card-overlay .card-title {
        position: absolute;
        color: #fff;
        top: 0;
        left: 0;
        right: 0;
        transform: translateY(47%);
        -webkit-transform: translateY(47%);
        -moz-transform: translateY(47%);
        bottom: 0;
        text-align: center;
        z-index: 2;
        transition: all ease-in-out .3s;
        -ms-transition: all ease-in-out .3s;
        -webkit-transition: all ease-in-out .3s;
        font-size: 24px
    }

    .pmd-card-overlay img {
        opacity: .64;
        height: 350px;
        display: block;
        transition: all ease-in-out .3s;
        -ms-transition: all ease-in-out .3s;
        -webkit-transition: all ease-in-out .3s;
        min-width: 100%
    }

    .pmd-card-overlay:hover .card-title {
        transform: translateY(20%);
        -webkit-transform: translateY(20%);
        -moz-transform: translateY(20%)
    }

    .pmd-card-overlay:hover img {
        opacity: .16;
        transform: scale(1.1)
    }

    .pmd-view-details {
        padding: 0 32px;
        text-align: center;
        color: #fff;
        opacity: 0;
        font-size: 14px;
        position: absolute;
        bottom: 0;
        z-index: 100;
        left: 0;
        right: 0;
        -webkit-transform: translate(0, 50px);
        transform: translate(0, 50px);
        -webkit-transition: all ease-in-out .3s;
        transition: all ease-in-out .3s;
        overflow: visible;
        margin: 0 auto;
        top: 50%
    }

    .pmd-view-details:before {
        content: attr(data-title);
        position: absolute;
        bottom: -28px;
        -webkit-transform: translate(-17px, 0);
        transform: translate(-17px, 0);
        color: #fff
    }

    .pmd-card-overlay .card-title:hover + .pmd-view-details, .pmd-card-overlay:hover .pmd-view-details {
        -webkit-transform: translate(0, -40%);
        -moz-transform: translate(0, -40%);
        transform: translate(0, -40%);
        opacity: 1
    }

    .icon-wrap {
        height: 100px;
        width: 100px;
        background: #fff;
        border-radius: 50%;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .12);
        margin: auto;
        line-height: 100px
    }

    .icon-wrap svg {
        display: inline-block;
        vertical-align: middle;
        height: 60px
    }

    .pmd-card div[class^="card-header bg-"] {
        padding-bottom: 1rem
    }

    .pmd-card div[class^="card-footer bg-"] {
        padding-top: 1rem
    }

    .pmd-card .list-group-item {
        background-color: transparent
    }

    .pmd-card-dark {
        color: #fff
    }

    .pmd-card-dark .card-title, .pmd-card-dark .material-icons, .pmd-card-dark .pmd-list-title, .pmd-card-dark a {
        color: #fff
    }

    .pmd-card-dark .card-subtitle, .pmd-card-dark .pmd-list-subtitle {
        color: rgba(255, 255, 255, .7)
    }

    .pmd-card-dark svg circle, .pmd-card-dark svg path, .pmd-card-dark svg polygon, .pmd-card-dark svg rect {
        fill: #fff
    }

    .pmd-card-dark .pmd-btn-flat:hover {
        background-color: rgba(229, 229, 229, .2)
    }

    .pmd-card-dark .pmd-inline-list-divider li {
        border-color: rgba(255, 255, 255, .5)
    }

    .pmd-card-dark hr {
        border-color: rgba(255, 255, 255, .5)
    }

    .fill-primary svg circle, .fill-primary svg path, .fill-primary svg polygon, .fill-primary svg rect {
        fill: #0191d0
    }

    .fill-secondary svg circle, .fill-secondary svg path, .fill-secondary svg polygon, .fill-secondary svg rect {
        fill: #006592
    }

    .fill-secondary svg circle, .fill-secondary svg path, .fill-secondary svg polygon, .fill-secondary svg rect {
        fill: #fff
    }

    .pmd-title-border-center:after, .pmd-title-border-right:after, .pmd-title-border:after {
        content: "";
        display: block;
        width: 60px;
        height: 3px;
        border-radius: 3px;
        background-color: #0191d0;
        margin: 1rem 0 1.5rem
    }

    .pmd-title-border-center:after {
        margin-left: auto;
        margin-right: auto
    }

    .pmd-title-border-right:after {
        margin-left: auto
    }

    .pmd-card-media {
        position: relative
    }

    .pmd-btn-fill {
        display: flex
    }

    .pmd-btn-fill .btn {
        flex: 1
    }

    .pmd-btn-fill.pmd-item-justify-border .btn {
        border-bottom: 0;
        margin-left: -1px
    }

    .pmd-btn-fill.pmd-item-justify-border .btn:first-child {
        border-left: 0;
        margin-left: 0
    }

    .pmd-btn-fill.pmd-item-justify-border .btn:last-child {
        border-right: 0
    }

    .pmd-list-fill {
        display: flex
    }

    .pmd-list-fill.list-inline {
        margin-left: 0;
        margin-right: 0
    }

    .pmd-list-fill.list-inline .list-inline-item {
        text-align: center;
        padding: .5rem
    }

    .pmd-list-fill .list-inline-item {
        flex: 1
    }

    .pmd-floating-icon-wrapper {
        position: relative;
        display: inline-block
    }

    .pmd-floating-icon-wrapper .pmd-floating-icon-bl, .pmd-floating-icon-wrapper .pmd-floating-icon-br, .pmd-floating-icon-wrapper .pmd-floating-icon-tl, .pmd-floating-icon-wrapper .pmd-floating-icon-tr {
        background-color: #0191d0;
        border-radius: 100%;
        color: #fff;
        height: 24px;
        width: 24px;
        padding: 2px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-style: normal;
        font-size: 14px;
        position: absolute
    }

    .pmd-floating-icon-wrapper .pmd-floating-icon-bl.material-icons, .pmd-floating-icon-wrapper .pmd-floating-icon-br.material-icons, .pmd-floating-icon-wrapper .pmd-floating-icon-tl.material-icons, .pmd-floating-icon-wrapper .pmd-floating-icon-tr.material-icons {
        font-size: 18px
    }

    .pmd-floating-icon-wrapper .pmd-floating-icon-br {
        bottom: 2px;
        right: 2px
    }

    .pmd-floating-icon-wrapper .pmd-floating-icon-bl {
        bottom: 2px;
        left: 2px
    }

    .pmd-floating-icon-wrapper .pmd-floating-icon-tl {
        top: 2px;
        left: 2px
    }

    .pmd-floating-icon-wrapper .pmd-floating-icon-tr {
        right: 2px;
        top: 2px
    }

    .pmd-fab-wrapper {
        position: relative
    }

    .pmd-fab-wrapper .pmd-fab-bc, .pmd-fab-wrapper .pmd-fab-bl, .pmd-fab-wrapper .pmd-fab-br {
        position: absolute;
        bottom: 0;
        transform: translateY(50%)
    }

    .pmd-fab-wrapper .pmd-fab-bl {
        left: 1rem
    }

    .pmd-fab-wrapper .pmd-fab-br {
        right: 1rem
    }

    .pmd-fab-wrapper .pmd-fab-bc {
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto
    }

    .pmd-fab-wrapper .pmd-fab-tc, .pmd-fab-wrapper .pmd-fab-tl, .pmd-fab-wrapper .pmd-fab-tr {
        position: absolute;
        top: 0;
        transform: translateY(-50%)
    }

    .pmd-fab-wrapper .pmd-fab-tl {
        left: 1.4rem
    }

    .pmd-fab-wrapper .pmd-fab-tr {
        right: 1.4rem
    }

    .pmd-fab-wrapper .pmd-fab-tc {
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto
    }

    .pmd-fab-wrapper.card-body .pmd-fab-bc, .pmd-fab-wrapper.card-body .pmd-fab-bl, .pmd-fab-wrapper.card-body .pmd-fab-br {
        bottom: -1.4rem
    }

    .pmd-fab-wrapper.card-body .pmd-fab-tc, .pmd-fab-wrapper.card-body .pmd-fab-tl, .pmd-fab-wrapper.card-body .pmd-fab-tr {
        top: -1.4rem
    }

    .pmd-col-listing {
        position: relative
    }

    .pmd-col-listing:after, .pmd-col-listing:before {
        content: "";
        position: absolute;
        background-color: #fff;
        z-index: 1;
        bottom: 0;
        right: 0
    }

    .pmd-col-listing:before {
        height: 2px;
        left: 0
    }

    .pmd-col-listing:after {
        width: 2px;
        top: 0
    }

    .pmd-col-listing .pmd-col-listing-item {
        border-bottom: 1px solid #ebebeb;
        border-right: 1px solid #ebebeb;
        padding: 1.25rem;
        display: block;
        height: 100%;
        color: #192866;
        position: relative;
        transition: all .2s ease-in-out
    }

    .pmd-col-listing .pmd-col-listing-item .material-icons {
        color: #006592
    }

    .pmd-col-listing .pmd-col-listing-item .card-title {
        margin-top: .5rem
    }

    .pmd-col-listing.pmd-col-listing-hover .pmd-col-listing-item:hover {
        background-color: #006592;
        color: #fff;
        -moz-box-shadow: box-shadow(2);
        -webkit-box-shadow: box-shadow(2);
        box-shadow: box-shadow(2);
        z-index: 2;
        text-decoration: none
    }

    .pmd-col-listing.pmd-col-listing-hover .pmd-col-listing-item:hover .material-icons {
        color: #fff
    }

    .pmd-rate-inner {
        min-width: 60px;
        padding: 32px 0;
        font-weight: 500;
        font-style: normal
    }

    .rating {
        margin: 4px 0 8px
    }

    .rating img {
        height: auto;
        width: 30px;
        display: inline-block
    }

    .cancelOff, .cancelOn, .starHalf, .starOff, .starOn {
        position: relative;
        display: inline-block;
        width: 30px;
        height: 30px
    }

    .cancelOff:after, .cancelOn:after, .starHalf:after, .starOff:after, .starOn:after {
        position: absolute;
        font-size: 30px
    }

    .starOn:after {
        content: "\E838";
        color: #ecbd01
    }

    .starOff:after {
        content: "\E83A";
        color: #e2dfdf
    }

    .starHalf:after {
        content: "\E839";
        color: #ecbd01
    }

    .cancelOff:after {
        content: "\E888";
        color: #e2dfdf
    }

    .cancelOn:after {
        content: "\E888";
        color: #ff5722
    }

    @media (max-width: 767px) {
        .rating img {
            width: 20px;
            height: 20px
        }
    }

    .pmd-subtitle {
        font-size: .875rem;
        line-height: 1.6;
        margin-top: -.375rem
    }

    .pmd-intro-bg-img {
        position: relative;
        width: 100%;
        background-position: center center;
        background-color: #000;
        background-size: cover
    }

    .pmd-intro-img-overlay:before {
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 11;
        bottom: 0;
        margin: auto;
        position: absolute;
        content: "";
        opacity: .87;
        background: transparent linear-gradient(to bottom, rgba(0, 0, 0, .8) 0, rgba(0, 0, 0, .6) 0, rgba(0, 0, 0, .6) 100%) repeat scroll 0 0
    }

    .pmd-intro-img-overlay:before {
        background: #000;
        opacity: .8;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 10
    }

    .pmd-intro-gradient {
        position: relative
    }

    .pmd-intro-gradient:before {
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 11;
        bottom: 0;
        margin: auto;
        position: absolute;
        content: "";
        background: #000;
        background: -webkit-gradient(linear, left top, left bottom, from(#e1112e), to(#0971b2));
        background: linear-gradient(45deg, #e1112e 0, #0971b2 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e1112e', endColorstr='#0971b2', GradientType=0);
        opacity: .87
    }

    .pmd-intro-gradient:after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        opacity: .2;
        z-index: 10
    }

    .pmd-intro-container {
        min-height: 600px;
        padding: 30px 0;
        z-index: 89;
        position: relative
    }

    .pmd-intro-container.text-light hr {
        border-top: 1px solid rgba(255, 255, 255, .16)
    }

    .pmd-text-before-line, .pmd-text-before-line-dark {
        position: relative;
        padding-left: 40px
    }

    .pmd-text-before-line:after {
        content: "";
        position: absolute;
        width: 30px;
        height: 2px;
        background-color: rgba(255, 255, 255, .7);
        top: 50%;
        left: 0;
        transform: translateY(-50%)
    }

    .pmd-text-before-line-dark:after {
        content: "";
        position: absolute;
        width: 30px;
        height: 2px;
        background-color: rgba(0, 0, 0, .7);
        top: 50%;
        left: 0;
        transform: translateY(-50%)
    }

    .pmd-intro-img {
        z-index: 11
    }

    .pmd-intro-img img {
        max-width: 100%
    }

    .pmd-intro-img-wrapper {
        position: relative
    }

    .pmd-intro-img-wrapper .pmd-intro-img {
        position: relative;
        z-index: 1
    }

    @media (max-width: 767px) {
        .pmd-intro-img-wrapper.order-3 {
            order: 1
        }
    }

    .pmd-intro-img-wrapper .pmd-animate-circle-wrapper {
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%)
    }

    .pmd-animate-circle-wrapper {
        position: absolute;
        overflow: hidden;
        z-index: 0;
        width: 600px;
        height: 600px
    }

    .pmd-animate-circle {
        border: 1px solid #4acc8e;
        border-radius: 50%;
        position: absolute
    }

    .pmd-animate-circle span {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #4acc8e;
        position: absolute;
        left: 50%
    }

    .pmd-animate-circle-lg {
        width: 100%;
        height: 100%;
        -webkit-transform: rotate(23deg);
        -ms-transform: rotate(23deg);
        transform: rotate(23deg);
        -webkit-animation: circle-lg 35s linear infinite;
        animation: circle-lg 35s linear infinite;
        opacity: .5
    }

    .pmd-animate-circle-md {
        width: 500px;
        top: 50px;
        height: 500px;
        left: 50px;
        -webkit-transform: rotate(-41deg);
        -ms-transform: rotate(-41deg);
        transform: rotate(-41deg);
        -webkit-animation: circle-md 25s linear infinite;
        animation: circle-md 25s linear infinite;
        opacity: .3
    }

    .pmd-animate-circle-sm {
        width: 400px;
        top: 100px;
        height: 400px;
        left: 100px;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        -webkit-animation: circle-sm 15s linear infinite;
        animation: circle-sm 15s linear infinite;
        opacity: .2
    }

    .pmd-animate-circle-lg span.pmd-animate-circle-dot:nth-child(1n) {
        top: -5px;
        margin-left: -5px
    }

    .pmd-animate-circle-lg span.pmd-animate-circle-dot:nth-child(2n) {
        margin-left: -224px;
        top: 90px
    }

    .pmd-animate-circle-lg span.pmd-animate-circle-dot:nth-child(3n) {
        margin-left: -202px;
        top: 520px
    }

    .pmd-animate-circle-lg span.pmd-animate-circle-dot:nth-child(4n) {
        margin-left: 273px;
        top: 405px
    }

    .pmd-animate-circle-md span.pmd-animate-circle-dot:nth-child(1n) {
        top: -5px;
        margin-left: -5px
    }

    .pmd-animate-circle-md span.pmd-animate-circle-dot:nth-child(2n) {
        margin-left: -201px;
        top: 90px
    }

    .pmd-animate-circle-md span.pmd-animate-circle-dot:nth-child(3n) {
        margin-left: -202px;
        top: 398px
    }

    .pmd-animate-circle-md span.pmd-animate-circle-dot:nth-child(4n) {
        margin-left: 235px;
        top: 315px
    }

    .pmd-animate-circle-sm span.pmd-animate-circle-dot:nth-child(1n) {
        top: -5px;
        margin-left: -5px
    }

    .pmd-animate-circle-sm span.pmd-animate-circle-dot:nth-child(2n) {
        margin-left: -175px;
        top: 90px
    }

    .pmd-animate-circle-sm span.pmd-animate-circle-dot:nth-child(3n) {
        margin-left: -141px;
        top: 340px
    }

    .pmd-animate-circle-sm span.pmd-animate-circle-dot:nth-child(4n) {
        margin-left: 172px;
        top: 285px
    }

    @-webkit-keyframes circle-lg {
        0% {
            transform: rotate(0)
        }
        100% {
            transform: rotate(360deg)
        }
    }

    @keyframes circle-lg {
        0% {
            transform: rotate(0)
        }
        100% {
            transform: rotate(360deg)
        }
    }

    @-webkit-keyframes circle-md {
        0% {
            transform: rotate(0)
        }
        100% {
            transform: rotate(360deg)
        }
    }

    @keyframes circle-md {
        0% {
            transform: rotate(0)
        }
        100% {
            transform: rotate(360deg)
        }
    }

    @-webkit-keyframes circle-sm {
        0% {
            transform: rotate(0)
        }
        100% {
            transform: rotate(360deg)
        }
    }

    @keyframes circle-sm {
        0% {
            transform: rotate(0)
        }
        100% {
            transform: rotate(360deg)
        }
    }

    @media (max-width: 767px) {
        .m-text-block {
            text-align: left !important;
            margin-top: 40px
        }
    }

    .pmd-img-sm {
        max-width: 150px;
        height: 150px
    }

    .pmd-img-md {
        max-width: 250px;
        height: 250px
    }

    .pmd-img-lg {
        max-width: 300px;
        height: 300px
    }

    .pmd-intro-fab-btn-center {
        position: absolute;
        left: 0;
        right: 0;
        margin: 20px auto 0
    }

    .pmd-intro-bg-img video {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: auto
    }

    .social-links a:after {
        -webkit-transition: all .3s;
        -moz-transition: all .3s;
        -o-transition: all .3s;
        transition: all .3s
    }

    .pmd-footer {
        padding: 20px 0;
        display: flex;
        flex-wrap: nowrap;
        align-items: center;
        flex-direction: column
    }

    .pmd-site-info {
        font-size: 14px;
        margin: 0;
        color: rgba(0, 0, 0, .38)
    }

    .pmd-site-info a {
        font-weight: 400;
        color: rgba(0, 0, 0, .8)
    }

    .pmd-site-info strong {
        color: #000;
        font-weight: 500
    }

    .pmd-site-info p {
        display: inline-block;
        margin: 0
    }

    .pmd-footer-nav {
        padding: 0;
        margin: 0 -10px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        list-style: none
    }

    .pmd-footer-nav li {
        padding: 0 10px
    }

    .pmd-footer-nav li a {
        font-size: 13px;
        text-transform: uppercase;
        font-weight: 700;
        color: rgba(0, 0, 0, .7)
    }

    .pmd-footer-nav li a:hover {
        color: rgba(0, 0, 0, .9)
    }

    .pmd-footer-nav-divider li {
        border-right: 1px solid rgba(0, 0, 0, .2)
    }

    .pmd-footer-nav-divider li:last-child {
        border-right: 0
    }

    .btn .pmd-svg-icons {
        display: inline-flex;
        justify-content: center;
        align-items: center
    }

    .btn .pmd-svg-icons svg {
        padding: 2px
    }

    .btn.btn-sm .pmd-svg-icons.pmd-sm {
        height: 38px
    }

    .btn.btn-sm .pmd-svg-icons.pmd-sm svg {
        width: 24px;
        height: 24px
    }

    .btn.btn-md .pmd-svg-icons.pmd-md svg {
        width: 30px;
        height: 30px
    }

    .btn.btn-lg .pmd-svg-icons.pmd-lg svg {
        width: 45px;
        height: 45px
    }

    .pmd-social-icons .btn {
        margin: 0 2px
    }

    .pmd-social-icons .btn img {
        width: 25px;
        height: 25px
    }

    .pmd-footer-sub-title {
        font-size: 18px;
        font-weight: 300;
        display: inline-block;
        vertical-align: middle
    }

    .pmd-social-icons .pmd-footer-sub-title {
        padding-right: 20px
    }

    .pmd-visit-us {
        padding-top: 20px
    }

    .pmd-visit-us .pmd-social-icons .btn {
        margin-bottom: -28px
    }

    .pmd-visit-us .pmd-social-icons .btn-sm {
        margin-bottom: -20px
    }

    .pmd-visit-us .pmd-social-icons .btn-md {
        margin-bottom: -28px
    }

    .pmd-visit-us .pmd-social-icons .btn-lg {
        margin-bottom: -39px
    }

    @media (max-width: 991px) {
        .pmd-visit-us {
            margin-bottom: 10px
        }
    }

    @media (max-width: 767px) {
        .pmd-visit-us {
            margin-bottom: 20px
        }
    }

    .pmd-social-inline {
        margin: 8px 0;
        text-align: center
    }

    .pmd-social-inline .pmd-social-icons {
        margin: 0 auto
    }

    @media (max-width: 991px) {
        .pmd-social-inline {
            width: 100%;
            display: block;
            margin: 8px 0
        }
    }

    .pmd-footer-nav-hover li a {
        position: relative
    }

    .pmd-footer-nav-hover li a:after {
        content: "";
        position: absolute;
        height: 2px;
        bottom: 0;
        left: 51%;
        right: 51%;
        background-color: rgba(0, 0, 0, .9);
        -webkit-transition: all .3s;
        -moz-transition: all .3s;
        -o-transition: all .3s;
        transition: all .3s
    }

    .pmd-footer-nav-hover li a:hover:after {
        right: 0;
        left: 0
    }

    .pmd-footer-nav-hover.effect-right li a:after {
        right: 0;
        left: 100%
    }

    .pmd-footer-nav-hover.effect-right li a:hover:after {
        left: 0
    }

    .pmd-footer-nav-hover.effect-left li a :after {
        right: 100%;
        left: 0
    }

    .pmd-footer-nav-hover.effect-left li a:hover:after {
        right: 0
    }

    .pmd-footer-dark {
        color: rgba(255, 255, 255, .85)
    }

    .pmd-footer-dark .primary {
        color: rgba(255, 255, 255, .9)
    }

    .pmd-footer-dark .secondary {
        color: rgba(255, 255, 255, .7)
    }

    .pmd-footer-dark .disabled, .pmd-footer-dark .hint, .pmd-footer-dark .icon, .pmd-footer-dark .text-muted {
        color: rgba(255, 255, 255, .4)
    }

    .pmd-footer-dark .hover {
        color: rgba(255, 255, 255, .38)
    }

    .pmd-footer-dark .divider {
        color: rgba(255, 255, 255, .12)
    }

    .pmd-footer-dark .pmd-site-info {
        color: rgba(255, 255, 255, .38)
    }

    .pmd-footer-dark .pmd-site-info a {
        color: rgba(255, 255, 255, .8)
    }

    .pmd-footer-dark .pmd-site-info strong {
        color: #fff
    }

    .pmd-footer-dark .pmd-footer-nav li a {
        color: rgba(255, 255, 255, .7)
    }

    .pmd-footer-dark .pmd-footer-nav li a:hover {
        color: rgba(255, 255, 255, .9)
    }

    .pmd-footer-dark .pmd-footer-nav-hover li a:after {
        background-color: rgba(255, 255, 255, .9)
    }

    .pmd-footer-dark .pmd-footer-nav-divider li {
        border-color: rgba(255, 255, 255, .2)
    }

    .pmd-footer-dark .pmd-social-icons .btn .material-icons svg {
        fill: rgba(255, 255, 255, .5)
    }

    .pmd-footer-dark .pmd-social-icons .btn:hover .material-icons svg {
        fill: rgba(255, 255, 255, .9)
    }

    .pmd-footer-dark hr {
        border-color: rgba(255, 255, 255, .1)
    }

    .pmd-footer-dark .border-right {
        border-color: rgba(255, 255, 255, .3) !important
    }

    .pmd-footer-dark label {
        color: rgba(255, 255, 255, .7)
    }

    .pmd-footer-dark .pmd-textfield-floating-label.pmd-textfield-floating-label-completed label {
        color: rgba(255, 255, 255, .7)
    }

    .pmd-footer-dark .form-control {
        color: rgba(255, 255, 255, .8)
    }

    .pmd-footer-dark .pmd-textfield .form-control {
        border-bottom: solid 1px rgba(255, 255, 255, .12)
    }

    .pmd-footer-dark .pmd-list-subtitle {
        color: rgba(255, 255, 255, .7)
    }

    .pmd-footer-dark .pmd-list-title {
        color: #fff
    }

    .pmd-list-transparent .list-group-item {
        background-color: transparent
    }

    .table-fixed-head {
        position: relative;
        overflow: hidden;
        border: 1px solid #eceeef
    }

    .table-fixed-head .table, .table-fixed-head.table-responsive {
        border: 0;
        margin-bottom: 0
    }

    .table-fixed-head .table thead tr {
        position: initial;
        height: 0 !important
    }

    .table-fixed-head .table thead tr th .top-fixed {
        position: absolute;
        top: 0;
        padding: .5rem 0;
        opacity: 1
    }

    .table-fixed-head .table thead tr th .top-fixed * {
        opacity: 1
    }

    .table-fixed-head .table .header-fixed {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 100;
        background-color: #fff;
        border-bottom: 1px solid #eceeef
    }

    .table-fixed-head .table.table-dark .header-fixed {
        background-color: #212529
    }

    .table-fixed-head .table thead tr th {
        border: 0
    }

    .table-fixed-head .table tbody tr td {
        vertical-align: middle
    }

    .section-inverse {
        color: rgba(255, 255, 255, .78)
    }

    .pmd-contact-us h4 {
        margin-top: 16px;
        border-bottom: 2px solid rgba(255, 255, 255, .34);
        display: inline-block;
        padding-bottom: 2px
    }

    .pmd-contact-us textarea {
        resize: none
    }

    .section-inverse {
        color: rgba(255, 255, 255, .85)
    }

    .section-inverse .primary {
        color: rgba(255, 255, 255, .9)
    }

    .section-inverse .secondary {
        color: rgba(255, 255, 255, .7)
    }

    .section-inverse .disabled, .section-inverse .hint, .section-inverse .icon, .section-inverse .text-muted {
        color: rgba(255, 255, 255, .4)
    }

    .section-inverse .hover {
        color: rgba(255, 255, 255, .38)
    }

    .section-inverse .divider {
        color: rgba(255, 255, 255, .12)
    }

    .section-inverse .site-info {
        color: rgba(255, 255, 255, .38)
    }

    .section-inverse .site-info a {
        color: rgba(255, 255, 255, .8)
    }

    .section-inverse .site-info strong {
        color: #fff
    }

    .section-inverse .footer-menu li a {
        color: rgba(255, 255, 255, .7)
    }

    .section-inverse .footer-menu li a:hover {
        color: rgba(255, 255, 255, .9)
    }

    .section-inverse .content-hover-effect li a:after {
        background-color: rgba(255, 255, 255, .9)
    }

    .section-inverse .side-line-effect li {
        border-color: rgba(255, 255, 255, .2)
    }

    .section-inverse .border-right {
        border-color: rgba(255, 255, 255, .3) !important
    }

    .section-inverse label {
        color: rgba(255, 255, 255, .7)
    }

    .section-inverse .pmd-textfield-floating-label.pmd-textfield-floating-label-completed label {
        color: rgba(255, 255, 255, .7)
    }

    .section-inverse .form-control {
        color: rgba(255, 255, 255, .8)
    }

    .section-inverse .pmd-textfield .form-control {
        border-bottom: solid 1px rgba(255, 255, 255, .12)
    }

    .section-inverse .border-bottom, .section-inverse hr, .section-inverse.section.border-bottom {
        border-color: rgba(255, 255, 255, .1) !important
    }

    .section-inverse .pmd-list-subtitle {
        color: rgba(255, 255, 255, .5)
    }

    .section-inverse .media a, .section-inverse .pmd-list-title, .section-inverse p a {
        color: rgba(255, 255, 255, .8)
    }

    .section-inverse .social-icons .btn .material-icons svg {
        fill: rgba(255, 255, 255, .5)
    }

    .section-inverse .social-icons .btn:hover .material-icons svg {
        fill: rgba(255, 255, 255, .9)
    }

    .section-inverse .social-icons .btn-light.btn .material-icons svg {
        fill: rgba(0, 0, 0, .5)
    }

    .section-inverse .social-icons .btn-light.btn:hover .material-icons svg {
        fill: rgba(0, 0, 0, .9)
    }

    .pmd-word-break {
        word-break: break-word
    }

    @media (max-width: 767px) {
        .pmd-contact-us h4 {
            margin-top: 8px
        }

        .sm-mb-4 {
            margin-bottom: 40px
        }
    }

    .border-primary {
        border-color: #0191d0 !important
    }

    .border-secondary {
        border-color: #006592 !important
    }

    .border-success {
        border-color: #259b24 !important
    }

    .border-info {
        border-color: #03a9f4 !important
    }

    .border-warning {
        border-color: #ffc107 !important
    }

    .border-danger {
        border-color: #dc3545 !important
    }

    .border-light {
        border-color: #fff !important
    }

    .border-dark {
        border-color: #475385 !important
    }

    .border-lightblack {
        border-color: #112134 !important
    }

    .bg-primary {
        background-color: #0191d0 !important
    }

    a.bg-primary:focus, a.bg-primary:hover, button.bg-primary:focus, button.bg-primary:hover {
        background-color: #016e9d !important
    }

    .bg-secondary {
        background-color: #006592 !important
    }

    a.bg-secondary:focus, a.bg-secondary:hover, button.bg-secondary:focus, button.bg-secondary:hover {
        background-color: #00425f !important
    }

    .bg-success {
        background-color: #259b24 !important
    }

    a.bg-success:focus, a.bg-success:hover, button.bg-success:focus, button.bg-success:hover {
        background-color: #1b721a !important
    }

    .bg-info {
        background-color: #03a9f4 !important
    }

    a.bg-info:focus, a.bg-info:hover, button.bg-info:focus, button.bg-info:hover {
        background-color: #0286c2 !important
    }

    .bg-warning {
        background-color: #ffc107 !important
    }

    a.bg-warning:focus, a.bg-warning:hover, button.bg-warning:focus, button.bg-warning:hover {
        background-color: #d39e00 !important
    }

    .bg-danger {
        background-color: #dc3545 !important
    }

    a.bg-danger:focus, a.bg-danger:hover, button.bg-danger:focus, button.bg-danger:hover {
        background-color: #bd2130 !important
    }

    .bg-light {
        background-color: #fff !important
    }

    a.bg-light:focus, a.bg-light:hover, button.bg-light:focus, button.bg-light:hover {
        background-color: #e6e5e5 !important
    }

    .bg-dark {
        background-color: #475385 !important
    }

    a.bg-dark:focus, a.bg-dark:hover, button.bg-dark:focus, button.bg-dark:hover {
        background-color: #353e64 !important
    }

    .bg-lightblack {
        background-color: #112134 !important
    }

    a.bg-lightblack:focus, a.bg-lightblack:hover, button.bg-lightblack:focus, button.bg-lightblack:hover {
        background-color: #04090e !important
    }

    .text-primary {
        color: #0191d0 !important
    }

    a.text-primary:focus, a.text-primary:hover {
        color: #016e9d !important
    }

    .text-secondary {
        color: #006592 !important
    }

    a.text-secondary:focus, a.text-secondary:hover {
        color: #00425f !important
    }

    .text-success {
        color: #259b24 !important
    }

    a.text-success:focus, a.text-success:hover {
        color: #1b721a !important
    }

    .text-info {
        color: #03a9f4 !important
    }

    a.text-info:focus, a.text-info:hover {
        color: #0286c2 !important
    }

    .text-warning {
        color: #ffc107 !important
    }

    a.text-warning:focus, a.text-warning:hover {
        color: #d39e00 !important
    }

    .text-danger {
        color: #dc3545 !important
    }

    a.text-danger:focus, a.text-danger:hover {
        color: #bd2130 !important
    }

    .text-light {
        color: #fff !important
    }

    a.text-light:focus, a.text-light:hover {
        color: #e6e5e5 !important
    }

    .text-dark {
        color: #475385 !important
    }

    a.text-dark:focus, a.text-dark:hover {
        color: #353e64 !important
    }

    .text-lightblack {
        color: #112134 !important
    }

    a.text-lightblack:focus, a.text-lightblack:hover {
        color: #04090e !important
    }

    .margin-r8 {
        margin-right: 8px !important
    }

    strong {
        font-weight: 600
    }

    a {
        color: #0191d0
    }

    a:active, a:focus, a:hover {
        text-decoration: none
    }

    .btn {
        border-radius: 4px;
        font-weight: 600;
        padding: .6rem 1.25rem .4rem
    }

    .btn-primary:active, .btn-primary:focus {
        color: #fff
    }

    .btn.pmd-btn-icon {
        padding: .5rem 1.25rem .5rem
    }

    .btn-outline-light:active, .btn-outline-light:focus, .btn-outline-light:hover, .btn-outline-light:not(:disabled):not(.disabled):active {
        background-color: #0191d0;
        color: #fff;
        border-color: #0191d0
    }

    .pmd-btn-icon svg {
        height: 24px;
        width: 24px;
        fill: #fff;
        margin-right: 14px
    }

    .btn-light {
        color: #0191d0
    }

    .btn-light:focus, .btn-light:hover {
        color: #0191d0
    }

    .btn-outline-primary:active, .btn-outline-primary:focus, .btn-outline-primary:hover, .btn-outline-primary:not(:disabled):not(.disabled):active {
        color: #fff;
        background: #0191d0
    }

    .btn.pmd-btn-fab.btn-lg i {
        line-height: 78px
    }

    @media (max-width: 991.98px) {
        .btn.pmd-btn-fab.btn-lg {
            width: 56px;
            height: 56px;
            min-width: 56px
        }

        .btn.pmd-btn-fab.btn-lg i {
            line-height: 58px;
            font-size: 2.25rem
        }
    }

    .pmd-card {
        border-radius: 2px
    }

    .pmd-card .card-body {
        font-size: 1rem;
        padding: 0 .75rem
    }

    .card-bg-transparent {
        background-color: transparent
    }

    .pmd-z-depth-0 {
        box-shadow: none
    }

    .border {
        border: 1px solid #ebebeb !important
    }

    .pmd-navbar.navbar-expand-md {
        border-bottom: 1px solid rgba(255, 255, 255, .15)
    }

    .pmd-navbar.navbar-expand-md .navbar-brand {
        padding-top: .75rem;
        padding-bottom: .75rem
    }

    .pmd-navbar.navbar-expand-md .navbar-brand img {
        width: 80px
    }

    @media (max-width: 575.98px) {
        .pmd-navbar.navbar-expand-md .navbar-brand {
            margin-right: auto
        }

        .pmd-navbar.navbar-expand-md .navbar-brand img {
            width: 65px
        }
    }

    .pmd-navbar.navbar-expand-md .navbar-nav {
        position: relative
    }

    @media (max-width: 575.98px) {
        .pmd-navbar.navbar-expand-md .navbar-nav .nav-active {
            display: none
        }
    }

    .pmd-navbar.navbar-expand-md .navbar-nav .nav-link {
        padding: 1.75rem .9375rem;
        color: #fff;
        font-size: 1rem
    }

    @media (max-width: 991.98px) {
        .pmd-navbar.navbar-expand-md .navbar-nav .nav-link {
            padding: 1.78rem .4rem;
            font-size: .8125rem
        }
    }

    @media (max-width: 575.98px) {
        .pmd-navbar.navbar-expand-md .navbar-nav .nav-link {
            padding: 1rem .9375rem
        }
    }

    .pmd-navbar.navbar-expand-md .navbar-nav .nav-active {
        bottom: -1px;
        left: 7px;
        width: 76px;
        height: 3px;
        position: absolute;
        -ms-transition: all ease-in-out .3s;
        -webkit-transition: all ease-in-out .3s;
        transition: all ease-in-out .3s;
        background: #fff
    }

    .pmd-navbar.navbar-expand-md .btn.pmd-btn-fab {
        height: 48px;
        width: 48px;
        min-width: 48px
    }

    .pmd-navbar.navbar-expand-md svg {
        fill: #0191d0;
        width: 22px;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto
    }

    .pmd-navbar.navbar-expand-md .pmd-sidebar-overlay {
        background: #0191d0
    }

    @media (max-width: 991.98px) {
        .pmd-navbar.navbar-expand-md .container {
            max-width: 740px
        }
    }

    @media (max-width: 1199.98px) {
        .pmd-navbar.navbar-expand-md {
            z-index: 99999
        }

        .pmd-navbar.navbar-expand-md .navbar-nav .nav-link {
            padding: 1.75rem .5rem
        }
    }

    @media (max-width: 575.98px) {
        .pmd-navbar.navbar-expand-md .navbar-toggler-icon:after {
            color: #fff
        }

        .pmd-navbar.navbar-expand-md .navbar-nav .nav-link {
            color: #112134;
            padding: 1rem .9375rem;
            font-size: 1rem
        }

        .pmd-navbar.navbar-expand-md .navbar-nav .nav-link.active {
            color: #0191d0
        }
    }

    @media (min-width: 576px) and (max-width: 767px) {
        .pmd-navbar.navbar-expand-md .navbar-brand {
            margin-right: auto
        }

        .pmd-navbar.navbar-expand-md .navbar-toggler-icon:after {
            color: #fff
        }

        .pmd-navbar.navbar-expand-md .navbar-nav .nav-link {
            color: #112134;
            padding: 1rem .9375rem;
            font-size: 1rem
        }
    }

    @media (max-width: 575.98px) {
        .pmd-navbar.navbar-expand-md.bg-white .navbar-toggler-icon:after {
            color: #0191d0
        }
    }

    .apps-page-body .pmd-navbar.navbar-expand-md {
        border-bottom: none
    }

    @media (max-width: 767px) {
        .pmd-navbar.navbar-expand-md.bg-white .navbar-toggler-icon:after {
            color: #0191d0
        }
    }

    .pmd-accordion .card {
        font-size: 1rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .16), 0 1px 3px rgba(0, 0, 0, .12)
    }

    .pmd-accordion .card .card-header .btn {
        text-transform: inherit;
        font-size: 1.125rem
    }

    body {
        font-family: Hind, sans-serif;
        font-size: 1.25rem;
        font-weight: 300
    }

    @media (max-width: 1199.98px) {
        body {
            font-size: 1.125rem
        }
    }

    @media (max-width: 575.98px) {
        h2 {
            font-size: 1.75rem
        }
    }

    .section {
        padding: 90px 0;
        position: relative
    }

    @media (max-width: 1199.98px) {
        .section {
            padding: 60px 0
        }
    }

    @media (max-width: 575.98px) {
        .section {
            padding: 40px 0
        }
    }

    h2.section-title {
        font-size: 2.5rem;
        font-weight: 600;
        position: relative;
        margin-bottom: 3.5rem
    }

    h2.section-title:after {
        content: "";
        position: absolute;
        bottom: -18px;
        height: 4px;
        background: #0191d0;
        width: 40px;
        left: 0;
        right: 0;
        margin: auto;
        z-index: 9
    }

    @media (max-width: 991.98px) {
        h2.section-title {
            font-size: 2.125rem;
            margin-bottom: 3rem
        }
    }

    @media (max-width: 575.98px) {
        h2.section-title {
            font-size: 1.75rem;
            margin-bottom: 2.5rem
        }
    }

    h2.section-title.text-white:after {
        background: #fff
    }

    .vertical-divider:after {
        content: '';
        position: absolute;
        margin: auto;
        background-color: #000;
        opacity: .1;
        width: 1px;
        height: 100px;
        left: 0;
        right: 0;
        bottom: -40px
    }

    @media (max-width: 991.98px) {
        .vertical-divider:after {
            bottom: -30px;
            height: 60px
        }
    }

    .vertical-divider-top:before {
        content: '';
        position: absolute;
        margin: auto;
        background-color: #000;
        opacity: .1;
        width: 1px;
        height: 100px;
        left: 0;
        right: 0;
        top: 65px
    }

    @media (max-width: 1199.98px) {
        .vertical-divider-top:before {
            top: -25px
        }
    }

    @media (max-width: 991.98px) {
        .vertical-divider-top:before {
            top: -15px;
            height: 60px
        }
    }

    .space-top {
        padding-top: 7rem
    }

    @media (max-width: 1199.98px) {
        .space-top {
            padding-top: 3rem
        }
    }

    @media (max-width: 991.98px) {
        .space-top {
            padding-top: 1rem
        }
    }

    .dark-curve-bg:before {
        content: "";
        position: absolute;
        left: 0;
        top: 60px;
        background: url(../images/section-darkshape-top.svg);
        width: 100%;
        height: 150px
    }

    .dark-curve-bg .inner-container {
        margin-top: 7.375rem
    }

    .dark-curve-bg:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -68px;
        top: inherit;
        opacity: 1;
        background: url(../images/section-darkshape-bottom.svg);
        width: 100%;
        height: 160px
    }

    @media (max-width: 1199.98px) {
        .dark-curve-bg:after, .dark-curve-bg:before {
            display: none
        }

        .dark-curve-bg .inner-container {
            padding-top: 60px;
            padding-bottom: 60px;
            margin-top: 15px
        }
    }

    .curve-bg:before {
        content: "";
        position: absolute;
        left: 0;
        top: 60px;
        background: url(../images/section-shape-top.svg);
        width: 100%;
        height: 150px
    }

    .curve-bg .inner-container {
        margin-top: 7.375rem
    }

    .curve-bg:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -68px;
        top: inherit;
        background: url(../images/section-shape-bottom.svg);
        width: 100%;
        height: 160px
    }

    @media (max-width: 1199.98px) {
        .curve-bg:after, .curve-bg:before {
            display: none
        }

        .curve-bg .inner-container {
            padding-top: 60px;
            padding-bottom: 60px;
            margin-top: 15px
        }
    }

    .horizontal-divider {
        position: relative;
        margin-bottom: 2rem;
        display: block;
        font-size: 1.5rem
    }

    .horizontal-divider:after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: -8px;
        margin: auto;
        background-color: #0191d0;
        opacity: .5;
        width: 40px;
        height: 1px
    }

    .card.text-white .horizontal-divider:after {
        background-color: #fff
    }

    .small-title {
        font-size: .875rem
    }

    .social-icons svg {
        height: 38px;
        width: 38px;
        fill: rgba(255, 255, 255, .3);
        transition: all .5s ease-in-out 0s
    }

    .social-icons svg:hover {
        fill: #fff
    }

    .inner-page {
        padding-top: 80px
    }

    .inner-page .intro-container {
        padding: 3rem 0 2.375rem
    }

    .inner-content {
        font-size: 1rem
    }

    .inner-content p {
        margin-bottom: 1.5rem
    }

    .inner-content h3 {
        font-size: 1.5rem;
        font-weight: 600
    }

    .outerContainer {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        overflow: hidden;
        z-index: 999999;
        background-color: #0191d0
    }

    .outerContainer #container {
        width: 300px;
        height: 300px;
        position: absolute;
        left: 0;
        right: 0;
        overflow: hidden;
        margin: auto;
        vertical-align: middle;
        text-align: center;
        top: 0;
        bottom: 0
    }

    .outerContainer #container .item {
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
        top: 0;
        bottom: 0;
        vertical-align: middle;
        z-index: 100
    }

    .outerContainer #container .item img {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto
    }

    .outerContainer #container .circle {
        border-radius: 50%;
        background-color: #fff;
        width: 150px;
        height: 150px;
        position: absolute;
        opacity: 0;
        animation: scaleIn 2s infinite cubic-bezier(.36, .11, .89, .32);
        left: 0;
        right: 0;
        margin: auto;
        top: 0;
        bottom: 0
    }

    @keyframes scaleIn {
        from {
            transform: scale(.5, .5);
            opacity: .5
        }
        to {
            transform: scale(1.5, 1.5);
            opacity: 0
        }
    }

    .cf:before {
        content: " ";
        display: table
    }

    .cf:after {
        content: " ";
        display: table;
        clear: both
    }

    .animated.infinite {
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite
    }

    .animated {
        animation-timing-function: ease-in-out;
        -webkit-animation-timing-function: ease-in-out;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        -moz-transition: all .7s ease-out;
        -webkit-transition: all .7s ease-out;
        -o-transition: all .7s ease-out;
        transition: all .7s ease-out;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden
    }

    .in-view {
        animation-timing-function: ease-in-out;
        -webkit-animation-timing-function: ease-in-out;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        -moz-transition: all .7s ease-out;
        -webkit-transition: all .7s ease-out;
        -o-transition: all .7s ease-out;
        transition: all .7s ease-out;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden
    }

    .animation-element {
        animation-timing-function: ease-in-out;
        -webkit-animation-timing-function: ease-in-out;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        -moz-transition: all .7s ease-out;
        -webkit-transition: all .7s ease-out;
        -o-transition: all .7s ease-out;
        transition: all .7s ease-out;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden
    }

    .fadein {
        opacity: 0
    }

    .fadein.in-view {
        opacity: 1
    }

    .fadeinup {
        -moz-transform: translate3d(0, 50px, 0);
        -webkit-transform: translate3d(0, 50px, 0);
        -o-transform: translate(0, 50px);
        -ms-transform: translate(0, 50px);
        transform: translate3d(0, 50px, 0);
        opacity: 0
    }

    .fadeinup.in-view {
        -moz-transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0);
        -o-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        transform: translate3d(0, 0, 0);
        opacity: 1
    }

    .fadeindown {
        -moz-transform: translate3d(0, -50px, 0);
        -webkit-transform: translate3d(0, -50px, 0);
        -o-transform: translate(0, -50px);
        -ms-transform: translate(0, -50px);
        transform: translate3d(0, -50px, 0);
        opacity: 0
    }

    .fadeindown.in-view {
        -moz-transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0);
        -o-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        transform: translate3d(0, 0, 0);
        opacity: 1
    }

    .fadeinleft {
        -moz-transform: translate3d(-50px, 0, 0);
        -webkit-transform: translate3d(-50px, 0, 0);
        -o-transform: translate(-50px, 0, 0);
        -ms-transform: translate(-50px, 0, 0);
        transform: translate3d(-50px, 0, 0);
        opacity: 0
    }

    .fadeinleft.in-view {
        -moz-transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0);
        -o-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        transform: translate3d(0, 0, 0);
        opacity: 1
    }

    .fadeinright {
        -moz-transform: translate3d(50px, 0, 0);
        -webkit-transform: translate3d(50px, 0, 0);
        -o-transform: translate(50px, 0, 0);
        -ms-transform: translate(50px, 0, 0);
        transform: translate3d(50px, 0, 0);
        opacity: 0
    }

    .fadeinright.in-view {
        -moz-transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0);
        -o-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        transform: translate3d(0, 0, 0);
        opacity: 1
    }

    .banner-wrap {
        background-image: url(../../assets/images/banner-bg.png);
        background-position: top center;
        background-repeat: no-repeat;
        background-color: #fff;
        height: 855px
    }

    .banner-wrap .banner-caption {
        width: 703px
    }

    .banner-wrap .banner-caption h1 {
        font-size: 2.25rem;
        color: #fff;
        font-weight: 300;
        margin-bottom: 2.5rem
    }

    .banner-wrap .banner-caption h1 span {
        font-size: 3.4375rem;
        font-weight: 600;
        position: relative
    }

    .banner-wrap .banner-caption h1 span:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 14px;
        background: #fff;
        height: 4px;
        width: 100%
    }

    .banner-wrap .pmd-intro-img {
        margin-top: 11rem
    }

    @media (max-width: 1199.98px) {
        .banner-wrap {
            background-position: left center
        }
    }

    @media (max-width: 991.98px) {
        .banner-wrap .banner-caption {
            margin-top: 4rem
        }

        .banner-wrap .banner-caption h1 {
            font-size: 1.75rem
        }

        .banner-wrap .banner-caption h1 span {
            font-size: 2.1rem
        }

        .banner-wrap .banner-caption h1 span:after {
            bottom: 7px
        }

        .banner-wrap .banner-caption a {
            margin-bottom: 1rem;
            min-width: 215px
        }

        .banner-wrap .pmd-intro-img {
            margin: 1rem 0;
            max-width: 80%
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .banner-wrap .pmd-intro-img {
            margin-top: 11rem
        }
    }

    @media (max-width: 575.98px) {
        .banner-wrap {
            background-image: url(../../assets/images/banner-bg-2.jpg);
            height: 980px;
            background-position: top center;
            overflow: hidden;
            background-size: cover
        }

        .banner-wrap .banner-caption {
            margin-top: 7rem;
            text-align: center;
            width: 100%
        }

        .banner-wrap .banner-caption h1 {
            font-size: 1.375rem;
            padding: 0 15px
        }

        .banner-wrap .banner-caption h1 span {
            font-size: 1.5rem
        }

        .banner-wrap .banner-caption h1 span:after {
            bottom: 2px
        }

        .banner-wrap .banner-caption a {
            margin: 0 15px 15px !important
        }

        .banner-wrap .pmd-intro-img {
            max-width: 70%
        }
    }

    @media (min-width: 576px) and (max-width: 767px) {
        .banner-wrap {
            background-image: url(../../assets/images/banner-bg-2.jpg);
            height: 600px;
            background-position: top center;
            background-size: cover
        }

        .banner-wrap .banner-caption {
            width: auto
        }

        .banner-wrap .banner-caption h1 {
            font-size: 1.375rem
        }

        .banner-wrap .banner-caption h1 span {
            font-size: 1.5rem
        }

        .banner-wrap .banner-caption h1 span:after {
            bottom: 2px
        }

        .banner-wrap .pmd-intro-img {
            max-width: 50%;
            margin-top: 8rem
        }
    }

    @media (min-width: 320px) and (max-width: 360px) {
        .banner-wrap {
            height: 840px
        }
    }

    @media (min-width: 360px) and (max-width: 375px) {
        .banner-wrap {
            height: 900px
        }
    }

    .section-benefits .benefits-card li {
        width: 18.5%;
        display: inline-block;
        vertical-align: top;
        margin: 0 5px
    }

    .section-benefits .benefits-card li .card {
        min-height: 200px
    }

    @media (max-width: 991.98px) {
        .section-benefits {
            padding-bottom: 40px
        }

        .section-benefits .benefits-card li {
            width: 31%
        }
    }

    @media (max-width: 575.98px) {
        .section-benefits {
            padding-bottom: 25px;
            padding-top: 40px
        }

        .section-benefits .benefits-card li {
            width: 94%
        }

        .section-benefits .benefits-card li .card {
            min-height: auto
        }

        .section-benefits .benefits-card li h4 br {
            display: none
        }
    }

    @media (min-width: 576px) and (max-width: 767px) {
        .section-benefits .benefits-card li {
            width: 47%
        }
    }


    .section-app-features .inner-container {
        position: relative
    }

    .section-app-features .inner-container:before {
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0
    }

    .feature-slider {
        position: relative
    }

    .feature-slider .mobile {
        width: 100%
    }

    .feature-slider .mobile .display-mobile {
        background: url(http://localhost/mywebsite/wp-content/uploads/2022/06/blank-mobile-screen.png) no-repeat center center;
        height: 733px;
        width: 363px;
        margin-top: 0;
        position: relative;
        z-index: 110;
        margin: auto;
        display: block;
        text-align: center;
        overflow: hidden
    }

    .feature-slider .mobile .display-mobile img {
        width: 325px;
        height: 579px;
        margin: auto;
        position: relative;
        top: 74px;
        left: -1px
    }

    .feature-slider .mobile .display-mobile .owl-wrapper-outer {
        width: 100%;
        overflow: hidden;
        height: 733px !important;
        max-width: 325px;
        margin: auto;
        text-align: center
    }

    .feature-slider h4 {
        font-size: 1.375rem;
        color: #cce9f6
    }

    .feature-slider p {
        font-weight: 300;
        color: #cce9f6;
        font-size: 1rem;
        line-height: 1.5rem;
        margin-bottom: 0
    }

    .feature-slider .feature-box.synced h4, .feature-slider .feature-box.synced p {
        color: #fff!important;
        transition: all .3s ease-in-out 0s;
        -webkit-transition: all .3s ease-in-out 0s;
        -moz-transition: all .3s ease-in-out 0s
    }

    @media screen and (max-width: 767px) {
        .section-app-features .bg-secondary.inner-container {
            padding: 30px 0 40px
        }

        .section-app-features .bg-secondary.inner-container .feature-slider .feature-list.owl-carousel {
            overflow: hidden
        }

        .section-app-features .bg-secondary.inner-container .feature-slider .feature-list.owl-carousel .owl-wrapper-outer {
            overflow: hidden
        }

        .section-app-features .bg-secondary.inner-container .feature-slider .feature-list.owl-carousel .owl-wrapper-outer .feature-box {
            max-width: 450px;
            margin: auto;
            text-align: left !important;
            padding: 20px 34px 0
        }

        .section-app-features .bg-secondary.inner-container .feature-slider .feature-list.owl-carousel .owl-wrapper-outer .feature-box span {
            font-size: 5rem;
            font-weight: 600;
            color: #fff;
            line-height: 1.1;
            float: left;
            margin-right: 20px;
            opacity: .2
        }

        .section-app-features .bg-secondary.inner-container .feature-slider .feature-list.owl-carousel .owl-wrapper-outer .feature-box h4 {
            font-size: 1.25rem;
            color: #cce9f6
        }

        .section-app-features .bg-secondary.inner-container .feature-slider .feature-list.owl-carousel .owl-wrapper-outer .feature-box p {
            color: #cce9f6
        }

        .section-app-features .inner-container .feature-slider .display-mobile {
            background-size: 300px auto !important;
            margin: auto;
            max-height: 360px;
            background-position: center top !important;
            overflow: hidden;
            border-bottom: 1px solid #e7e8ea;
            margin-bottom: 20px;
            max-width: 300px;
            padding: 0 16px
        }

        .section-app-features .inner-container .feature-slider .display-mobile img {
            width: auto;
            min-width: 100%;
            max-width: 100%;
            top: 61px !important;
            height: auto !important
        }
    }

    @media (min-width: 767px) and (max-width: 1023px) {
        .feature-slider .feature-list .owl-wrapper-outer {
            overflow: hidden
        }

        .feature-slider .feature-list .owl-wrapper-outer .feature-box {
            max-width: 380px;
            margin: auto;
            text-align: left !important;
            padding-top: 20px
        }

        .feature-slider .feature-list .owl-wrapper-outer .feature-box span {
            font-size: 5rem;
            font-weight: 600;
            color: #fff;
            line-height: 1;
            float: left;
            margin-right: 20px;
            opacity: .2
        }

        .feature-slider .display-mobile {
            background-size: 360px auto !important;
            margin: auto;
            max-height: 500px;
            background-position: center top !important;
            overflow: hidden;
            border-bottom: 1px solid #e7e8ea;
            margin-bottom: 20px;
            max-width: 360px;
            padding: 0 16px
        }

        .feature-slider .display-mobile img {
            top: 50px;
            max-width: 100%
        }
    }

    @media (min-width: 1023px) and (max-width: 1100px) {
        .feature-list .item:before {
            right: 65px !important
        }

        .feature-list .item span {
            right: 50px !important
        }

        .feature-list .item:nth-child(1), .feature-list .item:nth-child(2), .feature-list .item:nth-child(3), .feature-list .item:nth-child(4), .feature-list .item:nth-child(5), .feature-list .item:nth-child(6) {
            padding-right: 95px !important
        }

        .feature-list .item:nth-child(10), .feature-list .item:nth-child(11), .feature-list .item:nth-child(12), .feature-list .item:nth-child(7), .feature-list .item:nth-child(8), .feature-list .item:nth-child(9) {
            padding-left: 95px !important
        }

        .feature-list .item:nth-child(10):before, .feature-list .item:nth-child(11):before, .feature-list .item:nth-child(12):before, .feature-list .item:nth-child(7):before, .feature-list .item:nth-child(8):before, .feature-list .item:nth-child(9):before {
            left: 65px !important
        }

        .feature-list .item:nth-child(10) span, .feature-list .item:nth-child(11) span, .feature-list .item:nth-child(12) span, .feature-list .item:nth-child(7) span, .feature-list .item:nth-child(8) span, .feature-list .item:nth-child(9) span {
            left: 50px !important
        }
    }

    @media screen and (min-width: 1023px) {
        .feature-slider .owl-item {
            width: 325px !important;
            margin: 0 19px
        }

        .feature-slider .owl-item .item {
            max-width: 325px;
            text-align: center;
            display: block;
            margin: 0 -20px
        }

        .feature-slider .feature-list {
            display: block;
            position: absolute;
            margin-top: -10px;
            top: 0
        }

        .feature-slider .feature-list .item {
            width: 35.2% !important;
            position: absolute;
            padding-top: 16px;
            padding-right: 15px;
            cursor: pointer;
            padding-bottom: 2.5rem;
            min-height: 124px;
            cursor: pointer
        }

        .feature-slider .feature-list .item:before {
            content: "";
            position: absolute;
            width: 1px;
            background-color: #cce9f6;
            height: 100%;
            right: 50px;
            opacity: .5
        }

        .feature-slider .feature-list .item span {
            position: absolute;
            right: 35px;
            background: #cce9f6;
            height: 30px;
            width: 30px;
            color: #0191d0;
            font-size: 1.25rem;
            font-weight: 600;
            border-radius: 30px;
            text-align: center;
            line-height: 32px
        }

        .feature-slider .feature-list .item h4 {
            font-size: 1.375rem;
            color: #cce9f6
        }

        .feature-slider .feature-list .item p {
            font-weight: 300;
            color: #cce9f6;
            font-size: 1rem;
            line-height: 1.5rem;
            margin-bottom: 0
        }

        .feature-slider .feature-list .item.synced h4, .feature-slider .feature-list .item.synced p {
            color: #fff!important;
            transition: all .3s ease-in-out 0s;
            -webkit-transition: all .3s ease-in-out 0s;
            -moz-transition: all .3s ease-in-out 0s
        }

        .feature-slider .feature-list .item.synced span {
            background: #fff!important;
        }

        .feature-slider .feature-list .item:last-child:before, .feature-slider .feature-list .item:nth-child(6):before {
            display: none
        }

        .feature-list .item:nth-child(1), .feature-list .item:nth-child(2), .feature-list .item:nth-child(3), .feature-list .item:nth-child(4), .feature-list .item:nth-child(5), .feature-list .item:nth-child(6) {
            text-align: right;
            left: 0;
            top: 0;
            padding-right: 85px;
            width: 100%;
            padding-bottom: 2.5rem;
            cursor: pointer
        }

        .feature-list .item:nth-child(10), .feature-list .item:nth-child(11), .feature-list .item:nth-child(12), .feature-list .item:nth-child(7), .feature-list .item:nth-child(8), .feature-list .item:nth-child(9) {
            right: 0;
            top: 0;
            padding-left: 85px;
            width: 100%;
            padding-bottom: 2.5rem;
            cursor: pointer
        }

        .feature-list .item:nth-child(10):before, .feature-list .item:nth-child(11):before, .feature-list .item:nth-child(12):before, .feature-list .item:nth-child(7):before, .feature-list .item:nth-child(8):before, .feature-list .item:nth-child(9):before {
            left: 50px
        }

        .feature-list .item:nth-child(10) span, .feature-list .item:nth-child(11) span, .feature-list .item:nth-child(12) span, .feature-list .item:nth-child(7) span, .feature-list .item:nth-child(8) span, .feature-list .item:nth-child(9) span {
            left: 35px
        }

        .feature-list .item:nth-child(2), .feature-list .item:nth-child(8) {
            top: 120px
        }

        .feature-list .item:nth-child(3), .feature-list .item:nth-child(9) {
            top: 235px
        }

        .feature-list .item:nth-child(10), .feature-list .item:nth-child(4) {
            top: 360px
        }

        .feature-list .item:nth-child(11), .feature-list .item:nth-child(5) {
            top: 485px
        }

        .feature-list .item:nth-child(12), .feature-list .item:nth-child(6) {
            top: 620px
        }
    }

    .section.section-apparel-manufacturers {
        padding-bottom: 1.25rem
    }

    .section.section-apparel-manufacturers .card-manufacturers-list li {
        width: 19.5%;
        display: inline-block;
        vertical-align: top
    }

    .section.section-apparel-manufacturers .card-manufacturers-list li .pmd-card-icon.pmd-icon-bg {
        height: 54px;
        width: 100px;
        margin-left: auto;
        margin-right: auto
    }

    @media (max-width: 991.98px) {
        .section.section-apparel-manufacturers .card-manufacturers-list li {
            width: 31%
        }

        .section.section-apparel-manufacturers .card-manufacturers-list li .card-body {
            margin-bottom: 0
        }
    }

    @media (max-width: 767px) {
        .section.section-apparel-manufacturers {
            padding-top: 70px
        }

        .section.section-apparel-manufacturers .card-manufacturers-list li {
            width: 49%
        }

        .section.section-apparel-manufacturers .card-manufacturers-list li .card-body {
            margin-bottom: 0
        }
    }

    .section-faq .faq-bg {
        position: relative;
        height: 440px
    }

    .section-faq .faq-bg:before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        background-image: url(../../assets/images/faq-bg.jpg);
        width: 100%;
        height: 434px;
        background-repeat: no-repeat
    }

    .section-faq .faq-bg .faq-img-wrap {
        position: absolute;
        right: 10%;
        top: 0;
        bottom: 0;
        margin: auto;
        background-image: url(../../assets/images/faq-image.jpg);
        height: 300px;
        width: 380px
    }

    .section-faq .faq-bg .faq-img-wrap:before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
        background-color: #0191d0;
        opacity: .6;
        width: 100%;
        height: 100%
    }

    .section-faq .faq-points {
        width: 545px
    }

    @media (max-width: 1199.98px) {
        .section-faq {
            padding-bottom: 100px
        }

        .section-faq .faq-bg:before {
            left: -50%
        }

        .section-faq .faq-bg img {
            right: 10px
        }

        .section-faq .faq-points {
            width: 100%
        }
    }

    @media (max-width: 991.98px) {
        .section-app-features-faq .faq-points {
            width: 100%
        }
    }

    @media (max-width: 575.98px) {
        .section-faq {
            padding: 24px 0 40px
        }
    }

    @media (min-width: 576px) and (max-width: 767px) {
        .section-faq .faq-points {
            width: 524px;
            margin: auto
        }
    }

    .section-numbers .pmd-card {
        margin-bottom: 0
    }

    .section-numbers .pmd-card img {
        max-height: 44px
    }

    .section-numbers .pmd-card .circleplus {
        font-weight: 600;
        font-size: 2.5rem
    }

    .section-numbers .pmd-card .circleplus h2 {
        font-weight: 600
    }

    .section-numbers .pmd-card .circleplus canvas {
        display: none
    }

    @media (max-width: 767px) {
        .section.section-numbers {
            padding-top: 65px
        }

        .section.section-numbers .circleplus {
            font-size: 1.75rem
        }
    }

    .section-testimonials .inner-container {
        position: relative;
        background-color: #f4fafe
    }

    .section-testimonials .inner-container:before {
        content: "";
        background-image: url(../../assets/images/testimonials-doodles.png);
        background-repeat: no-repeat;
        width: 100%;
        height: 500px;
        position: absolute;
        left: 0;
        top: 0
    }

    .section-testimonials .inner-container .author-img {
        border: 2px solid #ebebeb;
        border-radius: 50%;
        height: 92px;
        width: 92px;
        padding: 4px;
        margin: auto;
        overflow: hidden
    }

    .section-testimonials .inner-container .testimonials-slider .owl-wrapper-outer {
        max-width: 715px;
        overflow: hidden;
        margin: auto
    }

    .section-testimonials .inner-container .testimonials-slider.owl-carousel .owl-item img {
        width: auto
    }

    .section-testimonials .inner-container .testimonials-list li.list-inline-item {
        vertical-align: top;
        margin-right: 1rem
    }

    .section-testimonials .inner-container .testimonials-list li.list-inline-item:last-child {
        margin-right: 0
    }

    .section-testimonials .inner-container .testimonials-list li.list-inline-item p {
        font-size: 1rem;
        font-weight: 400
    }

    .section-testimonials .inner-container .testimonials-list li.list-inline-item img {
        height: 30px
    }

    .section-testimonials .inner-container .testimonials-slider .owl-buttons {
        z-index: 9999
    }

    @media (max-width: 1199.98px) {
        .testimonials-slider .testimonials-list li.list-inline-item {
            width: 23%;
            margin-bottom: 0
        }

        .testimonials-slider .testimonials-list li.list-inline-item div {
            display: inherit !important;
            text-align: center;
            padding-bottom: 0 !important;
            margin-left: 0 !important
        }

        .testimonials-slider .testimonials-list li.list-inline-item img {
            margin-bottom: .875rem !important;
            vertical-align: top
        }
    }

    @media (max-width: 991.98px) {
        .section.section-testimonials {
            padding-top: 55px
        }

        .section.section-testimonials .inner-container {
            padding-bottom: 100px
        }

        .section.section-testimonials .owl-dots {
            bottom: -40px
        }
    }

    @media (max-width: 767px) {
        .section.section-testimonials {
            padding: 55px 0;
            overflow: hidden
        }

        .section.section-testimonials .inner-container {
            padding-top: 40px;
            padding-bottom: 80px
        }

        .section.section-testimonials .inner-container:before {
            display: none
        }

        .section.section-testimonials .testimonials-slider .author-details {
            display: block;
            width: 100%;
            text-align: center;
            margin-top: -1.4rem
        }

        .section.section-testimonials .testimonials-slider .card-body {
            display: inherit !important;
            text-align: center;
            padding-bottom: 0 !important;
            margin-left: 0 !important
        }

        .section.section-testimonials .testimonials-slider .testimonials-list li.list-inline-item {
            width: 50%;
            margin-right: 0;
            margin-bottom: .875rem
        }

        .section.section-testimonials .testimonials-slider .testimonials-list li.list-inline-item div {
            display: inherit !important;
            text-align: center;
            padding-bottom: 0 !important;
            margin-left: 0 !important
        }

        .section.section-testimonials .testimonials-slider .testimonials-list li.list-inline-item img {
            margin-bottom: .875rem !important
        }
    }

    .section.section-downloadapp {
        padding-top: 10rem
    }

    .section.section-downloadapp h2.section-title:after {
        right: inherit
    }

    @media (max-width: 1199.98px) {
        .section.section-downloadapp {
            padding-top: 4rem;
            padding-bottom: 1.25rem
        }
    }

    @media (max-width: 991.98px) {
        .section.section-downloadapp {
            padding-top: 2rem;
            padding-bottom: 1.125rem
        }

        .section.section-downloadapp a {
            margin-bottom: 1rem;
            width: 215px;
            margin-right: 0 !important
        }
    }

    @media (max-width: 767px) {
        .section.section-downloadapp {
            padding: 5rem 0 3.375rem;
            text-align: center
        }

        .section.section-downloadapp h2.section-title:after {
            right: 0
        }
    }

    .pricing-plan h2 {
        padding-top: 5rem
    }

    .pricing-plan .pmd-card.pricing-card {
        min-height: 310px;
        position: relative
    }

    .pricing-plan .pmd-card.pricing-card .card-footer {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0
    }

    @media (max-width: 1199.98px) {
        .pricing-plan {
            margin-top: 40px;
            margin-bottom: 30px
        }

        .pricing-plan h2 {
            padding-top: 4rem
        }

        .pricing-plan .pmd-card.pricing-card {
            min-height: 330px
        }
    }

    @media (max-width: 991.98px) {
        .pricing-plan h2 {
            padding-top: 3rem
        }
    }

    @media (max-width: 767px) {
        .pricing-plan {
            margin-bottom: 0;
            margin-top: 30px
        }

        .pricing-plan h2 {
            padding-top: 2rem
        }

        .pricing-plan .pmd-card.pricing-card {
            min-height: auto
        }

        .pricing-plan .pmd-card.pricing-card .card-footer {
            position: relative
        }
    }

    @media (min-width: 576px) and (max-width: 767px) {
        .pricing-plan .pmd-card.pricing-card {
            min-height: 340px
        }

        .pricing-plan .pmd-card.pricing-card .card-footer {
            position: absolute
        }
    }

    @media (max-width: 1199.98px) {
        .section-contact h2 {
            font-size: 2rem
        }
    }

    @media (max-width: 991.98px) {
        .section-contact h2 {
            font-size: 2rem;
            text-align: center !important
        }

        .section-contact li.list-inline-item {
            margin: 0 0 1.5rem !important
        }

        .section-contact li.list-inline-item:last-child {
            margin-bottom: 0 !important
        }
    }

    @media (max-width: 767px) {
        .section.section-contact {
            padding-top: 65px
        }

        .section.section-contact .row {
            text-align: center;
            margin: auto
        }

        .section.section-contact ul {
            margin-top: 1rem;
            text-align: center
        }

        .section.section-contact ul li.list-inline-item {
            margin: 0 0 1.5rem !important
        }

        .section.section-contact ul li.list-inline-item:first-child {
            margin-top: 1rem
        }

        .section.section-contact ul li.list-inline-item:last-child {
            margin-bottom: 0 !important
        }
    }

    @media (max-width: 767px) and (min-width: 576px) and (max-width: 767px) {
        .section.section-contact ul {
            margin-top: 0
        }
    }

    @media (min-width: 576px) {
        .section.section-contact li.list-inline-item {
            margin-right: 1.5rem;
            margin-bottom: 1.5rem
        }

        .section.section-contact li.list-inline-item:last-child {
            margin-bottom: 0 !important
        }
    }

    .section.section-footer {
        padding: 2.5rem 0;
        font-size: 1rem;
        line-height: 1.4
    }

    .section.section-footer a {
        color: #fff;
        transition: all .3s ease-in-out .2s
    }

    .section.section-footer a.active, .section.section-footer a:hover {
        opacity: .8
    }

    .section.section-footer .contact-info span {
        font-weight: 500
    }

    @media (max-width: 991.98px) {
        .section.section-footer {
            padding: 1.875rem 0
        }

        .section.section-footer .footer-menu {
            margin-bottom: 0
        }
    }

    @media (max-width: 767px) {
        .section.section-footer {
            padding: 2.5rem 0
        }

        .section.section-footer h4 {
            margin-bottom: .75rem !important
        }

        .section.section-footer .contact-info:last-child, .section.section-footer .copyrights {
            margin-bottom: 1.5rem
        }

        .section.section-footer .footer-menu {
            margin-bottom: 0
        }
    }

    .section.section-footer .contact-info .small-title {
        opacity: .5
    }

    .section.section-footer .footer-menu li {
        line-height: 1.7
    }

    .section.section-footer .footer-menu li:before {
        font-family: "Material icons";
        content: "\E315";
        display: inline-block;
        vertical-align: middle;
        color: #fff;
        margin-right: 4px
    }

    #toTop {
        position: fixed;
        bottom: 15px;
        right: 15px;
        z-index: 999
    }

    .apps-page-body {
        background: url(../../assets/images/apps-bg.jpg);
        background-size: cover;
        height: 100%;
        width: 100%
    }

    .apps-page-body .pmd-navbar.navbar-expand-md .navbar-brand img {
        width: 120px
    }

    .apps-page-body h1 {
        font-weight: 400
    }

    @media (max-width: 991.98px) {
        .apps-page-body {
            background-size: inherit;
            height: auto;
            text-align: left
        }

        .apps-page-body .pmd-navbar.navbar-expand-md.fixed-top {
            position: relative;
            margin-right: auto
        }

        .apps-page-body .app-section {
            position: absolute;
            max-width: 100%;
            height: 100%
        }

        .apps-page-body .app-section h1 {
            font-size: 1.75rem;
            margin-top: 0
        }
    }

    @media (min-width: 1100px) and (max-width: 1400px) {
        .app-section {
            padding-top: 80px
        }

        .app-section .app-screen img {
            max-width: 90%
        }
    }

    @media (min-width: 812px) and (max-width: 823px) {
        .apps-page-body .app-section {
            margin: 150px 0 50px
        }
    }

    @media (max-width: 767px) {
        .apps-page-body {
            background-size: inherit;
            height: auto;
            text-align: center
        }

        .apps-page-body .pmd-navbar.navbar-expand-md .navbar-brand img {
            width: 100px
        }

        .apps-page-body .app-section {
            text-align: center;
            position: absolute;
            max-width: 100%;
            height: 100%;
            padding: 40px 0;
            display: table
        }

        .apps-page-body .app-section .row {
            display: table-cell;
            vertical-align: middle
        }

        .apps-page-body .app-section .col-sm-6 {
            max-width: 100%
        }

        .apps-page-body .app-section .app-screen img {
            display: none
        }

        .apps-page-body .app-section h1 {
            font-size: 1.75rem;
            margin-top: 5rem;
            margin-bottom: 1.75rem !important
        }

        .apps-page-body .app-section .mobile-btn {
            text-align: center
        }

        .apps-page-body .app-section .mobile-btn .d-sm-none {
            display: inline-block
        }

        .apps-page-body .app-section .mobile-btn .d-sm-none img {
            height: 60px;
            margin-bottom: 1rem
        }
    }


    /**
 * Owl Carousel v2.3.4
 * Copyright 2013-2018 David Deutsch
 * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
 */
    .owl-carousel, .owl-carousel .owl-item {
        -webkit-tap-highlight-color: transparent;
        position: relative
    }

    .owl-carousel {
        display: none;
        width: 100%;
        z-index: 1
    }

    .owl-carousel .owl-stage {
        position: relative;
        -ms-touch-action: pan-Y;
        touch-action: manipulation;
        -moz-backface-visibility: hidden
    }

    .owl-carousel .owl-stage:after {
        content: ".";
        display: block;
        clear: both;
        visibility: hidden;
        line-height: 0;
        height: 0
    }

    .owl-carousel .owl-stage-outer {
        position: relative;
        overflow: hidden;
        -webkit-transform: translate3d(0, 0, 0)
    }

    .owl-carousel .owl-item, .owl-carousel .owl-wrapper {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0)
    }

    .owl-carousel .owl-item {
        min-height: 1px;
        float: left;
        -webkit-backface-visibility: hidden;
        -webkit-touch-callout: none
    }

    .owl-carousel .owl-item img {
        display: block;
        width: 100%
    }

    .owl-carousel .owl-dots.disabled, .owl-carousel .owl-nav.disabled {
        display: none
    }

    .no-js .owl-carousel, .owl-carousel.owl-loaded {
        display: block
    }

    .owl-carousel .owl-dot, .owl-carousel .owl-nav .owl-next, .owl-carousel .owl-nav .owl-prev {
        cursor: pointer;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev, .owl-carousel button.owl-dot {
        background: 0 0;
        color: inherit;
        border: none;
        padding: 0 !important;
        font: inherit
    }

    .owl-carousel.owl-loading {
        opacity: 0;
        display: block
    }

    .owl-carousel.owl-hidden {
        opacity: 0
    }

    .owl-carousel.owl-refresh .owl-item {
        visibility: hidden
    }

    .owl-carousel.owl-drag .owl-item {
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .owl-carousel.owl-grab {
        cursor: move;
        cursor: grab
    }

    .owl-carousel.owl-rtl {
        direction: rtl
    }

    .owl-carousel.owl-rtl .owl-item {
        float: right
    }

    .owl-carousel .animated {
        animation-duration: 1s;
        animation-fill-mode: both
    }

    .owl-carousel .owl-animated-in {
        z-index: 0
    }

    .owl-carousel .owl-animated-out {
        z-index: 1
    }

    .owl-carousel .fadeOut {
        animation-name: fadeOut
    }

    @keyframes fadeOut {
        0% {
            opacity: 1
        }
        100% {
            opacity: 0
        }
    }

    .owl-height {
        transition: height .5s ease-in-out
    }

    .owl-carousel .owl-item .owl-lazy {
        opacity: 0;
        transition: opacity .4s ease
    }

    .owl-carousel .owl-item .owl-lazy:not([src]), .owl-carousel .owl-item .owl-lazy[src^=""] {
        max-height: 0
    }

    .owl-carousel .owl-item img.owl-lazy {
        transform-style: preserve-3d
    }

    .owl-carousel .owl-video-wrapper {
        position: relative;
        height: 100%;
        background: #000
    }

    .owl-carousel .owl-video-play-icon {
        position: absolute;
        height: 80px;
        width: 80px;
        left: 50%;
        top: 50%;
        margin-left: -40px;
        margin-top: -40px;
        background: url(owl.video.play.png) no-repeat;
        cursor: pointer;
        z-index: 1;
        -webkit-backface-visibility: hidden;
        transition: transform .1s ease
    }

    .owl-carousel .owl-video-play-icon:hover {
        -ms-transform: scale(1.3, 1.3);
        transform: scale(1.3, 1.3)
    }

    .owl-carousel .owl-video-playing .owl-video-play-icon, .owl-carousel .owl-video-playing .owl-video-tn {
        display: none
    }

    .owl-carousel .owl-video-tn {
        opacity: 0;
        height: 100%;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: contain;
        transition: opacity .4s ease
    }

    .owl-carousel .owl-video-frame {
        position: relative;
        z-index: 1;
        height: 100%;
        width: 100%
    }
</style>
<style>
    /*!
 * Propeller Pro v1.1.0 (https://pro.propeller.in/): pmd-carousel.css
 * Copyright 2016-2018 Digicorp Information Systems Pvt. Ltd.
 * License: GNU General Public License v2.0 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
    .owl-dots, .owl-pagination {
        text-align: center;
        outline: 0
    }

    .owl-pagination {
        position: absolute;
        bottom: -50px;
        left: 0;
        right: 0
    }

    .owl-pagination .owl-page {
        background-color: #fff;
        height: 13px;
        width: 13px;
        border-radius: 50%;
        margin: 0 4px;
        display: inline-block;
        opacity: .7;
        -webkit-box-shadow: 0 2px 8px rgba(0, 0, 0, .54);
        box-shadow: 0 2px 8px rgba(0, 0, 0, .54)
    }

    .owl-page.active {
        opacity: 1;
        -webkit-transform: scale(1.4);
        transform: scale(1.4);
        -webkit-transition: all ease-in-out .3s;
        transition: all ease-in-out .3s;
        background-color: #0191d0;
        outline: 0
    }

    .owl-buttons {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%
    }

    .owl-next, .owl-prev {
        cursor: pointer;
        top: 50%;
        bottom: 0;
        margin: -12px auto auto;
        position: absolute
    }

    .owl-next {
        right: -50px
    }

    .owl-prev {
        left: -50px
    }

    .owl-height {
        -webkit-transition: height .5s ease-in-out 0s;
        transition: height .5s ease-in-out 0s
    }

    .owl-dots {
        position: absolute;
        bottom: -20px;
        left: 0;
        right: 0
    }

    .owl-carousel button.owl-dot, .owl-dot {
        background-color: #fff;
        height: 13px;
        width: 13px;
        border-radius: 50%;
        margin: 0 4px;
        display: inline-block;
        opacity: .7;
        -webkit-box-shadow: 0 2px 8px rgba(0, 0, 0, .54);
        box-shadow: 0 2px 8px rgba(0, 0, 0, .54)
    }

    .owl-carousel button.owl-dot.active, .owl-dot.active {
        opacity: 1;
        -webkit-transform: scale(1.4);
        transform: scale(1.4);
        -webkit-transition: all ease-in-out .3s;
        transition: all ease-in-out .3s;
        background-color: #0191d0;
        outline: 0
    }

    .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev {
        position: absolute;
        top: 46%;
        direction: ltr;
        display: inline-block;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        border: 2px solid rgba(255, 255, 255, .65);
        outline: 0
    }

    .owl-carousel .owl-nav button.owl-next {
        right: 0
    }

    .owl-carousel .owl-nav button.owl-prev {
        left: 0
    }

    .owl-carousel .owl-nav button.owl-next:after, .owl-carousel .owl-nav button.owl-prev:after {
        left: 6px;
        right: 6px;
        top: 6px;
        position: absolute;
        font-size: 34px
    }

    .owl-carousel .owl-nav button span {
        color: #fff;
        font-size: 38px;
        line-height: 48px
    }

    .owl-carousel .owl-next.disabled, .owl-carousel .owl-prev.disabled {
        opacity: .5
    }

    .owl-carousel.dark-nav .owl-nav button.owl-next, .owl-carousel.dark-nav .owl-owl-buttons.owl-prev {
        border-color: rgba(1, 145, 208, .4)
    }

    .owl-carousel.dark-nav .owl-nav button span {
        color: #0191d0
    }

    .owl-carousel.dark-nav .owl-nav {
        position: absolute;
        left: 0;
        right: 0;
        top: -24px;
        bottom: 0;
        margin: auto;
        z-index: -1
    }

    .owl-carousel.dark-nav .owl-nav button.owl-next {
        right: -28%
    }

    .owl-carousel.dark-nav .owl-nav button.owl-prev {
        left: -28%
    }

    .pmd-card-carousel .pmd-card {
        margin: 0 15px 20px
    }

    .pmd-card-carousel.owl-carousel .owl-nav button.owl-next, .pmd-card-carousel.owl-carousel .owl-nav button.owl-prev {
        top: 50%;
        margin-top: -44px;
        border: 2px solid #000;
        opacity: .3
    }

    .pmd-card-carousel.owl-carousel .owl-nav button.owl-next {
        right: -65px
    }

    .pmd-card-carousel.owl-carousel .owl-nav button.owl-prev {
        left: -65px
    }

    .pmd-card-carousel.owl-carousel .owl-nav button.owl-next:focus, .pmd-card-carousel.owl-carousel .owl-nav button.owl-next:hover, .pmd-card-carousel.owl-carousel .owl-nav button.owl-prev:focus, .pmd-card-carousel.owl-carousel .owl-nav button.owl-prev:hover {
        border-color: #0191d0;
        color: #044471;
        opacity: 1
    }

    .pmd-card-carousel.owl-carousel .owl-nav button.owl-next:after, .pmd-card-carousel.owl-carousel .owl-nav button.owl-prev:after {
        color: #000
    }

    .pmd-card-carousel.owl-carousel .owl-nav button.owl-next:hover::after, .pmd-card-carousel.owl-carousel .owl-nav button.owl-prev:hover::after {
        color: #0191d0
    }

    .outside-dots .owl-dots {
        bottom: 20px
    }

    @media screen and (max-width: 1300px) {
        .pmd-card-carousel.owl-carousel .owl-nav button.owl-next {
            right: -38px
        }

        .pmd-card-carousel.owl-carousel .owl-nav button.owl-prev {
            left: -38px
        }
    }

    .video-carousel.owl-carousel .item-video {
        height: 300px
    }

    @media (max-width: 767px) {
        .owl-buttons {
            display: none
        }
    }

    @media (min-width: 767px) and (max-width: 1023px) {
        .owl-buttons {
            display: none
        }
    }

    @media (min-width: 991px) and (max-width: 1024px) {
        .owl-pagination {
            display: none
        }
    }

    @media (min-width: 1023px) {
        .owl-pagination {
            display: none
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
        title="<?php echo esc_html(astra_default_strings('string-header-skip-link', false)); ?>">
    <?php echo esc_html(astra_default_strings('string-header-skip-link', false)); ?>
</a>

<div
    <?php
    echo astra_attr(
        'site',
        array(
            'id' => 'page',
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
