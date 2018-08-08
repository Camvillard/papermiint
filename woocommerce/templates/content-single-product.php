<?php
/**
 *
 * @package understrap
 */



 // remove tabs
 remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

 // relocate title
 remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
 add_action('woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 9);

 // relocate category
 remove_action('woocommerce_single_product_summary','woocommerce_template_single_meta', 8);
 add_action('woocommerce_before_single_product_summary','woocommerce_template_single_meta', 8);
