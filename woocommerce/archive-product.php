<?php

defined( 'ABSPATH' ) || exit;

?>

<?php get_header();?>
<!-- Start Page Header Wrapper -->
<div class="page-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="page-header-content">
                    <h2><?php woocommerce_page_title()?></h2>
                    <nav class="page-breadcrumb">
                      <?php woocommerce_breadcrumb();?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header Wrapper -->

<!--== Start Shop Page Wrapper ==-->
<div id="shop-page-wrapper" class="pt-86 pt-md-56 pt-sm-46 pb-50 pb-md-20 pb-sm-10">
    <div class="container">
        <div class="row">
				<?php get_sidebar('shop');?>
            	<!-- Start Shop Page Product Area -->
            <div class="col-lg-9">

				<?php	if ( woocommerce_product_loop() ) {?>
                <!-- Start Product Config Area -->
            	<div class="product-config-area d-md-flex justify-content-between align-items-center">
					<?php woocommerce_output_all_notices();?>
                    <div class="product-config-left d-sm-flex">
						<!-- <p>Отображаются 1–12 из 25 товаров</p> -->
						<?php woocommerce_result_count()?>
                    </div>

                    <div class="product-config-right d-flex align-items-center mt-sm-14">
                        <ul class="product-view-mode">
                            <li data-viewmode="grid-view" class="active"><i class="fa fa-th"></i></li>
                            <li data-viewmode="list-view"><i class="fa fa-list"></i></li>
                        </ul>
                        <ul class="product-filter-sort">
							<li class="dropdown-show sort-by">
									<button class="arrow-toggle">Сортировать по</button>
									<ul class="dropdown-nav">
	<li><a href="?orderby=date" <?php if(isset($_GET['orderby']) && 'date' == $_GET['orderby']) : ?> class="active"<?php endif;?>>Сначала новые</a></li>
	<li><a href="?orderby=popularity" <?php if(isset($_GET['orderby']) && 'popularity' == $_GET['orderby']) : ?> class="active"<?php endif;?>>По популярности</a></li>
	<li><a href="?orderby=rating" <?php if(isset($_GET['orderby']) && 'rating' == $_GET['orderby']) : ?> class="active"<?php endif;?>>По среднему рейтингу</a></li>
	<li><a href="?orderby=price" <?php if(isset($_GET['orderby']) && 'price' == $_GET['orderby']) : ?> class="active"<?php endif;?>>По цене &uarr;</a></li>
	<li><a href="?orderby=price-desc" <?php if(isset($_GET['orderby']) && 'price-desc' == $_GET['orderby']) : ?> class="active"<?php endif;?>>По цене &darr;</a></li>
									</ul>
							</li>
                        </ul>
                    </div>
                </div>
                <!-- End Product Config Area -->

				<?php
				woocommerce_product_loop_start();

				if ( wc_get_loop_prop( 'total' ) ) {
					while ( have_posts() ) {
						the_post();
			
						/**
						 * Hook: woocommerce_shop_loop.
						 */
						do_action( 'woocommerce_shop_loop' );
			
						wc_get_template_part( 'content', 'product' );
					}
				}
			
				woocommerce_product_loop_end();
			}
				?>
              
                <!-- Page Pagination Start  -->
                <!-- <div class="page-pagination-wrapper mt-70 mt-md-50 mt-sm-40">
                    <nav class="page-pagination">
                        <ul class="pagination justify-content-center">
                            <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </nav>
                </div> -->
				<div class="page-pagination-wrapper mt-70 mt-md-50 mt-sm-40">
					<?php


					if ( ! defined( 'ABSPATH' ) ) {
						exit;
					}

					$total   = isset( $total ) ? $total : wc_get_loop_prop( 'total_pages' );
					$current = isset( $current ) ? $current : wc_get_loop_prop( 'current_page' );
					$base    = isset( $base ) ? $base : esc_url_raw( str_replace( 999999999, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( 999999999, false ) ) ) );
					$format  = isset( $format ) ? $format : '';

					if ( $total <= 1 ) {
						return;
					}
					?>
					
						<nav class="page-pagination">
							<?php echo str_replace('<ul class=\'page-numbers\'>','<ul class="pagination justify-content-center">',
							 paginate_links(
								apply_filters(
									'woocommerce_pagination_args',
									array( // WPCS: XSS ok.
										'base'      => $base,
										'format'    => $format,
										'add_args'  => false,
										'current'   => max( 1, $current ),
										'total'     => $total,
										'prev_text' => '<i class="fa fa-angle-double-left"></i>',
										'next_text' => '<i class="fa fa-angle-double-right"></i>',
										'type'      => 'list',
										'end_size'  => 3,
										'mid_size'  => 3,
									)
								))
							);
							?>
						</nav>
					</div>

                <!-- Page Pagination End  -->
            </div>
            <!-- End Shop Page Product Area -->
        </div>
    </div>
</div>
<?php get_footer();?>
