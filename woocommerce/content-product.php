<?php
//КАРТОЧКА ОДНОГО ТОВАРА НА СТРАНИЦЕ МАГАЗИНА

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<!-- Start Single Product -->
<!-- ЕСЛИ НАХОДИМСЯ НА СТРАНИЦЕ ТОВАРА ТО ВЫВОДИТ ТОВАРЫ В 4 КОЛОНКИ В ПРОТИВНОМ СЛУЧАИ В 3 КОЛОНКИ -->
<div <?php $class = is_product() ? 'col-lg-3 col-sm-6' : 'col-lg-4 col-sm-6'; wc_product_class( $class, $product ); ?>>
	<div class="single-product-wrap">
		<!-- Product Thumbnail -->
		<figure class="product-thumbnail">
			<a href="<?php echo $product->get_permalink();?>" class="d-block">
				<!-- <img class="primary-thumb" src="assets/img/products/prod-2-1.jpg"
						alt="Product"/> -->
				<?php echo $product->get_image();?>
			</a>
			<figcaption class="product-hvr-content">
				<!-- <a href="#" class="btn btn-black btn-addToCart">Добавить в корзину</a> -->
				<a href="<?php echo $product->add_to_cart_url()?>" class="btn btn-black btn-addToCart"><?php echo $product->add_to_cart_text()?></a>

				<!-- <span class="product-badge hot">Хит продаж</span> -->
				<?php
					$product_published = $product->get_date_created();//дата публикации товара
				?>
				<?php if($product->is_on_sale()) :?>
					<span class="product-badge sale">Распродажа</span>

					<?php elseif($product->is_featured()) :?>
					<span class="product-badge hot">Хит продаж</span>

					<!--strtotime функция приводит время  к формату кол-во секунд . если дата публикации товара меньше чем текущая дата минус 86400(секунды одного дня ) * на 5 дней  -->
				<?php elseif(strtotime($product_published->date) < (time() -86400 * 5)) :?>
					<span class="product-badge">Новинка</span>

				
				<?php endif;?>
			</figcaption>
		</figure>

		<!-- Product Details -->
		<div class="product-details">
			<h2 class="product-name">
				 <a href="<?php echo $product->get_permalink();?>">
				<?php echo $product->get_title();?></a> 
			</h2>
			<div class="product-prices">
				<!-- <del class="oldPrice">5000 р</del>
				<span class="price">4000 р</span> -->
				 <?php echo $product->get_price_html();?> 
			</div>
			<div class="list-view-content">
				<p class="product-desc">
					<!-- КОРОТКОЕ ОПИСАНИЕ ТОВАРА -->
				 <?php echo $product->get_short_description();?> 
				</p>

				<div class="list-btn-group mt-30 mt-sm-14">
					<!-- ДОБАВЛЕНИЕ ТОВАРОВ В КОРЗИНУ ЧЕРЕЗ AJAX НА ВТОРОЙ ВКЛАДКЕ ПЕРЕКЛЮЧЕНИЯ ТОВАРОВ -->
				<?php
				echo sprintf(
					'<a href="%s" data-product_id="%s" class="%s">%s</a>',
					$product->add_to_cart_url(),
					$product->get_id(),
					'btn btn-black product_type_' . $product->get_type() . ' ' . ( $product->supports( 'ajax_add_to_cart' ) ? 'add_to_cart_button ajax_add_to_cart' : '' ),
					$product->add_to_cart_text()
				);
				// loading
				// added

				?>
					 <!-- <a href="<?php echo $product->add_to_cart_url()?>" class="btn btn-black"><?php echo $product->add_to_cart_text()?></a>  -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Single Product -->

