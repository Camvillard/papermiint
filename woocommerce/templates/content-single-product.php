<?php
/**
 *
 * @package understrap
 */


// remove flash sale indicator
remove_action('woocommerce_before_single_product_summary','woocommerce_show_product_sale_flash', 10);


// relocate title
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
add_action('woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 9);


// relocate category
remove_action('woocommerce_single_product_summary','woocommerce_template_single_meta', 40);
add_action('woocommerce_before_single_product_summary','woocommerce_template_single_meta', 8);

// change summary stuff
remove_action('woocommerce_single_product_summary','woocommerce_template_single_price', 10);
add_action('woocommerce_single_product_summary','woocommerce_template_single_price', 22);


// remove tabs
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

// change number of related products
add_filter( 'woocommerce_output_related_products_args', 'wc_change_number_related_products' );
  function wc_change_number_related_products( $args ) {
     $args['posts_per_page'] = 4;
     $args['columns'] = 4; //change number of upsells here
     return $args;
  }

add_filter('woocommerce_sale_flash', 'hide_sale_label');
  function hide_sale_label() {
    return false;
  }
