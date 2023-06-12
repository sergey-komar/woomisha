<?php
//СТРАНИЦА ОФОРМЛЕНИЯ ЗАКАЗА

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="page-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="page-header-content">
                    <h2><?php the_title()?></h2>
                    <nav class="page-breadcrumb">
						<?php woocommerce_breadcrumb();?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="checkout-page-wrapper" class="pt-90 pt-md-60 pt-sm-50 pb-50 pb-md-20 pb-sm-10">
    <div class="container">
<?php
do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

<div class="row">
	<div class="col-lg-6">
		<!-- Checkout Form Area Start -->
		<div class="checkout-billing-details-wrap">
			
			<div class="billing-form-wrap">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
				
					<div class="checkout-box-wrap">
						<?php do_action( 'woocommerce_checkout_shipping' ); ?>
					</div>
			</div>
		</div>
	</div>

	<div class="col-lg-6 col-xl-5 ml-auto">
	<div  class=" order-details-area-wrap">
		<h2>Ваш заказ</h2>
		<div id="order_review" class="woocommerce-checkout-review-order order-details-table table-responsive">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
		</div>
	</div>
	</div>
</div>		
		
	<?php endif; ?>
	

</form>


	</div>
</div>