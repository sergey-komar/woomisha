<?php
//КУПОН НА СТРАНИЦЕ ОФОРМЛЕНИЯ ЗАКАЗА

defined( 'ABSPATH' ) || exit;

if ( ! wc_coupons_enabled() ) { // @codingStandardsIgnoreLine.
	return;
}

?>

<div class="row">
	<div class="col-lg-12">
		<div class="checkout-page-coupon-area">
			<!-- Checkout Coupon Accordion Start -->
			<div class="checkoutAccordion" id="checkOutAccordion">
				<div class="card">
					<!-- ДОБАВИЛИ КЛАСС ССЫЛКЕ showcoupon-->
					<h3>Имеете купон? 
						<a class="showcoupon" href="№">Нажмите тут</a>
					</h3>
					<!-- <div id="couponaccordion" class="collapse" data-parent="#checkOutAccordion"> -->
					<form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">
						<div class="card-body">
							<div class="apply-coupon-wrapper">
								<p>Если у вас есть купон, пожалуйста примените его ниже.</p>
								
								<!-- ДОБАВИЛИ name="coupon_code" id="coupon_code" type="submit" name="apply_coupon"-->
									<input name="coupon_code" id="coupon_code" type="text" placeholder="Ваш код купона" required/>
									<button type="submit" name="apply_coupon" class="btn btn-black">Применить купон</button>
								
							</div>
						</div>
					</form>
					<!-- </div> -->
				</div>
			</div>
			<!-- Checkout Coupon Accordion End -->
		</div>
	</div>
</div>
