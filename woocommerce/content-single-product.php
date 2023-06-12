<?php
//Страница одного товара

defined( 'ABSPATH' ) || exit;
global $product;
?>
<!-- Start Page Header Wrapper -->
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
<!-- End Page Header Wrapper -->

<!--== Start Single Product Page Wrapper ==-->
<div id="single-product-page" class="<?php wc_product_class( 'pt-90 pt-md-60 pt-sm-50 pb-92 pb-md-58 pb-sm-50', $product ); ?>">
		<?php
		/**
		 * Hook: woocommerce_before_single_product.
		 *
		 * @hooked woocommerce_output_all_notices - 10
		 */
		do_action( 'woocommerce_before_single_product' );

		?>
    <div class="container-fluid">
        <div class="row">
            <!-- Start Single Product Thumbnail -->
            <div class="col-xl-7 col-lg-6">
				<!-- ВЫВОДИМ ГАЛЕРЕЮ -->
			<?php
				$product_image_id = $product->get_image_id();
				$product_gallery_ids = $product->get_gallery_image_ids();
			?>

                <div class="single-product-thumb-wrap tab-style-left p-0 pb-sm-30 pb-md-30">
                    <!-- Product Thumbnail Large View -->
                    <div class="product-thumb-large-view">
                        <div class="product-thumb-carousel vertical-tab">
                            <figure class="product-thumb-item">
								<!-- ВЫВОДИМ ГАЛЕРЕЮ -->
								<?php echo wp_get_attachment_image($product_image_id, 'full')?>
                                <!-- <img src="assets/img/single-product/prod-1-1.jpg" alt="Single Product"/> -->
                            </figure>
								<!-- ВЫВОДИМ ГАЛЕРЕЮ -->
                         <?php foreach($product_gallery_ids as $product_gallery_id):?>
                            <figure class="product-thumb-item">
                                <!-- <img src="assets/img/single-product/prod-1-3.jpg" alt="Single Product"/> -->
								<?php echo wp_get_attachment_image($product_gallery_id, 'full')?>
                            </figure>
						<?php endforeach;?>
                        </div>


                    </div>

                    <!-- Product Thumbnail Nav -->
                    <div class="vertical-tab-nav">
						<!-- ВЫВОДИМ ГАЛЕРЕЮ -->
                        <figure class="product-thumb-item">
                            <!-- <img src="assets/img/single-product/prod-1-1.jpg" alt="Single Product"/> -->
						<?php echo wp_get_attachment_image($product_image_id, 'full')?>
						</figure>
						<?php foreach($product_gallery_ids as $product_gallery_id):?>
                        <figure class="product-thumb-item">
                            <!-- <img src="assets/img/single-product/prod-1-3.jpg" alt="Single Product"/> -->
							<?php echo wp_get_attachment_image($product_gallery_id, 'full')?>
                        </figure>
						<?php endforeach;?>
                    </div>
                </div>
            </div>
            <!-- End Single Product Thumbnail -->

            <!-- Start Single Product Content -->
            <div class="col-xl-5 col-lg-6">
                <div class="single-product-content-wrapper">
                    <div class="single-product-details">
                        <h2 class="product-name"><?php the_title();?></h2>
                        <div class="prices-stock-status d-flex align-items-center justify-content-between">
                            <div class="prices-group">
                                <!-- <del class="old-price">5000 р</del>
                                <span class="price">4000 р</span> -->
								<?php echo $product->get_price_html();?> 
                            </div>
							<?php if($product->is_in_stock()):?>
                            <span class="stock-status"><i class="dl-icon-check-circle1"></i> В наличии</span>
							<?php else :?>
							<span class="stock-status">Нет в наличии</span>
							<?php endif;?>
                        </div>
                        <p class="product-desc">
								<!-- КОРОТКОЕ ОПИСАНИЕ ТОВАРА -->
				 			<?php echo $product->get_short_description();?> 
						</p>


						<!-- QUANTITY -->
						<?php woocommerce_template_single_add_to_cart()?>
                        <!-- <div class="quantity-btn-group d-flex">
                            <div class="pro-qty">
                                <input type="text" id="quantity" value="1"/>
                            </div>
                            <div class="list-btn-group">
                                <a href="cart.html" class="btn btn-black">Добавить в корзину</a>
                            </div>
                        </div> -->
                    </div>

                    <div class="product-description-review">
                        <!-- Product Description Tab Menu -->
                        <ul class="nav nav-tabs desc-review-tab-menu" id="desc-review-tab" role="tablist">
                            <li>
                                <a class="active" id="desc-tab" data-toggle="tab" href="#descriptionContent" role="tab">Описание</a>
                            </li>
                            <li>
                                <a id="profile-tab" data-toggle="tab" href="#reviewContent">Отзывы</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="descriptionContent">
                                <div class="description-content">
                                    <p class="m-0">
										<!-- ПОЛНОЕ ОПИСАНИЕ ТОВАРА -->
									<?php echo $product->get_description();?> 
									</p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="reviewContent">
                                <div class="product-ratting-wrap">
                                    <div class="pro-avg-ratting">
                                        <!-- <h4>4.5 <span>(всего)</span></h4>
                                        <span>На основани 9 отзывов</span> -->
                                        <h4>
                                        <?php echo $product->get_average_rating()?>
                                            <span>(всего)</span>
                                        </h4>
                                        <span>
                                            На основании
                                        <?php  echo $product->get_review_count()?>
                                        </span>
                                    </div>

                                <?php if($reviews = get_comments([
                                    'status' => 'approve',
                                    'type' => 'review',
                                    'post_id' => $product->get_id()

                                ])) : ?>
                                    <div class="rattings-wrapper">
                                    <?php foreach($reviews as $comment) : ?>
                                        <div class="sin-rattings">
                                            <div class="ratting-author">
                                                <h3>
                                                <?php echo $comment->comment_author;?>
                                                </h3>
                                                <?php if($rating = get_comment_meta($comment->comment_ID, 'rating', true)) :?>
                                                <div class="ratting-star">
                                                    <?php
                                                    $stars =0;
                                                    while($stars < $rating){
                                                        echo ' <i class="fa fa-star"></i>';
                                                        $stars++;
                                                    }
                                                    ?>
                                                    <span>(<?php echo $rating;?>)</span>
                                                </div>
                                                <?php endif;?>
                                            </div>
                                            <p>
                                            <?php echo get_comment_text($comment->comment_ID);?>
                                            </p>
                                        </div>
                                    <?php endforeach;?>
                                      

                                    </div>
                                <?php endif?>

                                <?php if(is_user_logged_in()):?>
                                    <div class="ratting-form-wrapper">
                                        <h3>Добавить свой отзыв</h3>
                                        <form action="<?php echo site_url('wp-comments-post.php')?>" method="post">
                                            <div class="ratting-form row">
                                                <div class="col-12 mb-16">
                                                    <h5>Рейтинг:</h5>
                                                    <div class="ratting-star fix">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="">
                                                        <select name="rating">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="your-review">Что думаете:</label>
                                                    <textarea name="comment" id="your-review"
                                                              placeholder="Write a review"></textarea>
                                                </div>
                                                <div class="col-12 mt-22">
                                                    <button class="btn btn-black">Отправить</button>
                                                    <!-- СКРЫТЫЕ ПОЛЯ ЧТОБЫ РАБОТАЛА ФОРМА -->
                                                    <?php
                                                        comment_id_fields();
                                                        do_action('comment_form', $product->get_id());
                                                    ?>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-product-footer d-block d-sm-flex justify-content-between">
                        <div class="prod-footer-left mb-xs-26">
                            <!-- <span class="sku mb-6 d-block">Артикул: 251</span> -->
							<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

							<span class="sku_wrapper sku mb-6 d-block"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

							<?php endif; ?>
                            <ul class="prod-footer-list">
							<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>
                                <!-- <li class="list-name">Категории:</li>
                                <li><a href="#">Новинки</a></li>
                                <li><a href="#">Аксессуары</a></li>
                                <li><a href="#">Одежда</a></li>
                                <li><a href="#">Девушки</a></li> -->
                            </ul>
                            <ul class="prod-footer-list">
                                <li class="list-name">Теги:</li>
                                <li><a href="#">Без кожи и меха</a></li>
                                <li><a href="#">Весна 2020</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Single Product Content -->
        </div>
    </div>
</div>
<!--== End Single Product Page Wrapper ==-->

<!--== Start Related Products Area ==-->
<section id="related-products-wrapper" class="pb-48 pb-md-18 pb-sm-8">
    <div class="container-fluid">
        <div class="row">
            <!-- Start Section title -->
            <div class="col-lg-8 m-auto text-center">
                <div class="section-title-wrap">
                    <h2>Смотрите также</h2>
                </div>
            </div>
            <!-- End Section title -->
        </div>

        <div class="row products-on-column">
            <!--  -->
            <?php
            $related_products = [];
            $upsells = $product->get_upsell_ids();

            if($upsells){
                $related_products = $upsells;
            }else{
                $related_products = wc_get_related_products($product->get_id(), 4);
            }
            ?>
            	<?php foreach ( $related_products as $related_product ) : ?>

                <?php
                $post_object = get_post( $related_product);

                setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

                wc_get_template_part( 'content', 'product' );
                ?>

                <?php endforeach; ?>
        
        </div>
    </div>
</section>
<!--== End Related Products Area ==-->

