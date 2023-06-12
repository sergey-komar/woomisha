<?php


defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_mini_cart' ); ?>

<!-- widget_shopping_cart_content НЕОБХОДИМ ДЛЯ ТОГО ЧТОБЫ КОРЗИНА ОБНОВЛЯЛАСЬ ЧЕРЕЗ AJAX -->
<div class="widget_shopping_cart_content">
	<?php if ( ! WC()->cart->is_empty() ) : ?>

		<ul class="woocommerce-mini-cart cart_list product_list_widget minicart-product-list<?php echo esc_attr( $args['list_class'] ); ?>">
			<?php
			do_action( 'woocommerce_before_mini_cart_contents' );

			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
					$thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
					$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<li class="woocommerce-mini-cart-item single-product-item d-flex<?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); ?>">

					<!-- ИЗОБРАЖЕНИЕ ТОВАРА -->
					<figure class="product-thumb">
                    <!-- <a href="single-product.html"><img src="assets/img/products/prod-1-1.jpg" alt="Product"></a> -->
					<?php if ( empty( $product_permalink ) ) : ?>
							<?php echo $thumbnail; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					<?php else : ?>
						<a href="<?php echo esc_url( $product_permalink ); ?>">
							<?php echo $thumbnail; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</a>
					<?php endif; ?>
					</figure>
					<!-- ИЗОБРАЖЕНИЕ ТОВАРА -->


					<!-- НАЗВАНИЕ ТОВАРА -->
					<div class="product-details">
						<h2 class="product-title">
						<?php if ( empty( $product_permalink ) ) : ?>
							<?php echo wp_kses_post( $product_name ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						<?php else : ?>
							<a href="<?php echo esc_url( $product_permalink ); ?>">
								<?php echo  wp_kses_post( $product_name ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</a>
						<?php endif; ?>
						</h2>
					<!-- НАЗВАНИЕ ТОВАРА -->


						<div class="prod-cal d-flex align-items-center">
							<span class="quantity">
								<?php echo $cart_item['quantity'];?>
							</span>
							<span class="multiplication">&#215;</span>
							<span class="price">
								<?php echo $product_price;?>
							</span>
						</div>
					</div>

					<!-- КНОПКА УДАЛЕНИЯ ТОВАРА -->
					<!-- <a href="#" class="remove-icon">&#215;</a> -->
						<?php
						echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
							'woocommerce_cart_item_remove_link',
							sprintf(
								'<a href="%s" class="remove remove_from_cart_button remove-icon" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s">&times;</a>',
								esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
								esc_attr__( 'Remove this item', 'woocommerce' ),
								esc_attr( $product_id ),
								esc_attr( $cart_item_key ),
								esc_attr( $_product->get_sku() )
							),
							$cart_item_key
						);
						?>
						<!-- КНОПКА УДАЛЕНИЯ ТОВАРА -->
					</li>
					<?php
				}
			}

			do_action( 'woocommerce_mini_cart_contents' );
			?>
		</ul>
			<!-- ДОБАВИЛИ СВОИ КЛАССЫ -->
		<p class="woocommerce-mini-cart__total total minicart-calculation-wrap d-flex justify-content-between align-items-center">
			<?php
			/**
			 * Hook: woocommerce_widget_shopping_cart_total.
			 *
			 * @hooked woocommerce_widget_shopping_cart_subtotal - 10
			 */
			do_action( 'woocommerce_widget_shopping_cart_total' );
			?>
	
		<div class="minicart-btn-group mt-38">
            <a href="<?php echo wc_get_cart_url()?>" class="btn btn-black ">Просмотр корзины</a>
            <a href="<?php echo wc_get_checkout_url()?>" class="btn btn-black mt-10">Оформление заказа</a>
        </div>
	<?php else : ?>

		<p class="woocommerce-mini-cart__empty-message"><?php esc_html_e( 'No products in the cart.', 'woocommerce' ); ?></p>

	<?php endif; ?>
</div>
<?php do_action( 'woocommerce_after_mini_cart' ); ?>
