<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
$redux_wish = wish_redux();


/**
 * woocommerce_before_single_product hook
 *
 * @hooked woocommerce_show_messages - 10
 */
do_action( 'woocommerce_before_single_product' );
?>
<div itemscope itemtype="http://schema.org/Product" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row product-details-wrapper">
        <div class="single-product-details col-lg-9 col-md-9 col-sm-9 col-lg-push-3">
          

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

	
        </div>
        
        
        
        <div class="col-lg-3 col-md-3 col-sm-3 col-lg-pull-9 widget-area">
            <?php dynamic_sidebar( 'shop-sidebar' ); ?>
        </div>
    </div>
</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>