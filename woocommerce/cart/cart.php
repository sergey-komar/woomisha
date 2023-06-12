<?php
//КОРЗИНА

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>

<div class="page-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="page-header-content">
                    <h2><?php the_title();?></h2>
                    <nav class="page-breadcrumb">
					<?php woocommerce_breadcrumb();?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="cart-page-wrapper" class="pt-86 pt-md-56 pt-sm-46 pb-50 pb-md-20 pb-sm-10">
<div class="container">
<div class="row">
	<div class="col-lg-8">
		<div class="shopping-cart-list-area">

		<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
			<div class="shopping-cart-table table-responsive">
				<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents table table-bordered text-center">
					<thead>
						<tr>
							<th>Товары</th>
							<th>Цена</th>
							<th>Количество</th>
							<th>Итого</th>
						</tr>
					</thead>

					<tbody>

					<?php
					foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
						$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
						$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

						if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
							$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
							?>
						<tr class="woocommerce-cart-form__cart-item<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
							<td class="product-list">
								<div class="cart-product-item d-flex align-items-center">

									<!--КНОПКА УДАЛЕНИЯ -->
									<div class="remove-icon product-remove">
										<!-- <button><i class="fa fa-trash-o"></i></button> -->
										<?php
											echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
												'woocommerce_cart_item_remove_link',
												sprintf(
													'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="fa fa-trash-o"></i></a>',
													esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
													esc_html__( 'Remove this item', 'woocommerce' ),
													esc_attr( $product_id ),
													esc_attr( $_product->get_sku() )
												),
												$cart_item_key
											);
										?>
									</div>
									<!--КНОПКА УДАЛЕНИЯ -->


										<!-- КАРТИНКА -->
									<!-- <a href="single-product-sticky.html" class="product-thumb">
									<img src="assets/img/products/prod-1-1.jpg" alt="Product"/>
									</a> -->
									<?php
									$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

									if ( ! $product_permalink ) {
										echo $thumbnail; // PHPCS: XSS ok.
									} else {
										printf( '<a  class="product-thumb" href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
									}
									?>
									<!-- КАРТИНКА -->
								
									<!-- НАЗВАНИЕ ТОВАРА -->
									<!-- <a href="single-product-tab-left.html" class="product-name">Какой-то товар</a> -->
									<?php
									if ( ! $product_permalink ) {
										echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
									} else {
										echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a class="product-name" href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
									}

									do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

									// Meta data.
									echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

									// Backorder notification.
									if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
										echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
									}
									?>
									<!-- НАЗВАНИЕ ТОВАРА -->
								</div>
							</td>


							<!--ЦЕНА ТОВАРА  -->
							<td>
								 <span class="price product-price">
								 <?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
								?>
								 </span> 
						
							</td>
							<!--ЦЕНА ТОВАРА  -->


							<!-- СЧЁТЧИК ДОБАВЛЕНИЯ В КОРЗИНУ -->
							<td>
								<div class="pro-qty product-quantity">
									<!-- <input type="text" class="quantity" value="1"/> -->
									<?php
									if ( $_product->is_sold_individually() ) {
										$min_quantity = 1;
										$max_quantity = 1;
									} else {
										$min_quantity = 0;
										$max_quantity = $_product->get_max_purchase_quantity();
									}

									$product_quantity = woocommerce_quantity_input(
										array(
											'input_name'   => "cart[{$cart_item_key}][qty]",
											'input_value'  => $cart_item['quantity'],
											'max_value'    => $max_quantity,
											'min_value'    => $min_quantity,
											'product_name' => $_product->get_name(),
										),
										$_product,
										false
									);

									echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
									?>
								</div>
							</td>
							<!-- СЧЁТЧИК ДОБАВЛЕНИЯ В КОРЗИНУ -->


							<!-- ОБЩАЯ ЦЕНА -->
							<td>
								<span class="price product-subtotal">	
								<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
								?>
								</span>
							</td>
							<!-- ОБЩАЯ ЦЕНА -->

						</tr>

						<?php }}?>
					

					</tbody>
				</table>
			</div>
		


			<div class="cart-coupon-update-area d-sm-flex justify-content-between align-items-center">
				<div class="coupon-form-wrap">
				
						<input name="coupon_code" id="coupon_code" type="text" placeholder="Код купона"/>
						<button type="submit" name="apply_coupon" class="btn-apply">Применить купон</button>
					
				</div>

				<div class="cart-update-buttons mt-xs-14">
					<button type="submit" name="update_cart" class="btn-update-cart">Обновить корзину</button>
					<?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce');?>
				</div>
			</div>

		</form>
		</div>
	</div>

	<div class="col-lg-4">
		<?php
		woocommerce_cart_totals();
		?>
		
	</div>
</div>
</div>
</div>





