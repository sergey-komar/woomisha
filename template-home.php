<?php
/*
TemplateName: Главная страница
*/
?>
<?php
?>
<?php get_header();?>

<!-- Start Page Header Wrapper -->
<div class="page-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="page-header-content">
                    <h2>Каталог</h2>
                    <nav class="page-breadcrumb">
                        <ul class="d-flex justify-content-center">
                            <li><a href="index.html">Главная</a></li>
                            <li><a href="index.html" class="active">Каталог</a></li>
                        </ul>
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
            <!-- Start Sidebar Area Wrapper -->
            <div class="col-lg-3 order-last order-lg-first mt-md-54 mt-sm-44">
                <div class="sidebar-area-wrapper">
                    <!-- Start Single Sidebar -->
                    <div class="single-sidebar-wrap">
                        <h3 class="sidebar-title">Категории товаров</h3>
                        <div class="sidebar-body">
                            <ul class="sidebar-list">
                                <li><a href="#">Аксессуары <span>(8)</span></a></li>
                                <li><a href="#">Рюкзаки <span>(2)</span></a></li>
                                <li><a href="#">Одежда <span>(12)</span></a></li>
                                <li><a href="#">Дети <span>(5)</span></a></li>
                                <li><a href="#">Парни <span>(7)</span></a></li>
                                <li><a href="#">Новинки <span>(24)</span></a></li>
                                <li><a href="#">Сникеры <span>(1)</span></a></li>
                                <li><a href="#">Девушки <span>(33)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Sidebar -->

                    <!-- Start Single Sidebar -->
                    <div class="single-sidebar-wrap">
                        <h3 class="sidebar-title">Цвет</h3>
                        <div class="sidebar-body">
                            <ul class="sidebar-list">
                                <li><a href="#">Чёрный <span>(3)</span></a></li>
                                <li><a href="#">Голубой <span>(1)</span></a></li>
                                <li><a href="#">Коричневый <span>(7)</span></a></li>
                                <li><a href="#">Золотой <span>(5)</span></a></li>
                                <li><a href="#">Серый <span>(4)</span></a></li>
                                <li><a href="#">Белый <span>(1)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Sidebar -->

                    <!-- Start Single Sidebar -->
                    <div class="single-sidebar-wrap">
                        <h3 class="sidebar-title">Цены</h3>
                        <div class="sidebar-body">
                            <div class="price-range-wrap">
                                <div class="price-range" data-min="50" data-max="400"></div>
                                <div class="range-slider">
                                    <form action="#">
                                        <label for="amount">Цена: </label>
                                        <input type="text" id="amount" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Sidebar -->

                    <!-- Start Single Sidebar -->
                    <div class="single-sidebar-wrap">
                        <h3 class="sidebar-title">Размер</h3>
                        <div class="sidebar-body">
                            <ul class="size-list">
                                <li><a href="#">S</a></li>
                                <li><a href="#">M</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">X</a></li>
                                <li><a href="#">XL</a></li>
                                <li><a href="#">XXL</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Sidebar -->

                    <!-- Start Single Sidebar -->
                    <div class="single-sidebar-wrap">
                        <h3 class="sidebar-title">Теги</h3>
                        <div class="sidebar-body">
                            <ul class="tags-cloud">
                                <li><a href="#">Весна 2020</a></li>
                                <li><a href="#">Сноубордическое</a></li>
                                <li><a href="#">Из кожи</a></li>
                                <li><a href="#">Без кожи и меха</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Sidebar -->
                </div>
            </div>
            <!-- End Sidebar Area Wrapper -->

            <!-- Start Shop Page Product Area -->
            <div class="col-lg-9">
                <!-- Start Product Config Area -->
                <div class="product-config-area d-md-flex justify-content-between align-items-center">
                    <div class="product-config-left d-sm-flex">
											<p>Отображаются 1–12 из 25 товаров</p>
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
																	<li><a href="#" class="active">Сначала новые</a></li>
																	<li><a href="#">По популярности</a></li>
																	<li><a href="#">По среднему рейтингу</a></li>
																	<li><a href="#">По цене &uarr;</a></li>
																	<li><a href="#">По цене &darr;</a></li>
															</ul>
													</li>
                        </ul>
                    </div>
                </div>
                <!-- End Product Config Area -->

                <!-- Start Product Wrapper -->
                <div class="shop-page-products-wrapper mt-44 mt-sm-30">
                    <div class="products-wrapper products-on-column">
                        <div class="row">
                            <!-- Start Single Product -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-product-wrap">
                                    <!-- Product Thumbnail -->
                                    <figure class="product-thumbnail">
                                        <a href="single-product.html" class="d-block">
                                            <img class="primary-thumb" src="<?php echo get_template_directory_uri()?>./assets/img/products/prod-1-1.jpg"
                                                 alt="Product"/>
                                            <img class="secondary-thumb" src="<?php echo get_template_directory_uri()?>.assets/img/products/prod-1-2.jpg"
                                                 alt="Product"/>
                                        </a>
                                        <figcaption class="product-hvr-content">
                                            <a href="#" class="btn btn-black btn-addToCart">Добавить в корзину</a>

                                            <span class="product-badge sale">-20%</span>
                                        </figcaption>
                                    </figure>

                                    <!-- Product Details -->
                                    <div class="product-details">
                                        <h2 class="product-name"><a href="single-product.html">Название товара</a></h2>
                                        <div class="product-prices">
                                            <del class="oldPrice">5000 р</del>
                                            <span class="price">4000 р</span>
                                        </div>
                                        <div class="list-view-content">
                                            <p class="product-desc">Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco ommodo consequat. Duis aute irure dolor in reprehenderit dolore
                                                eu fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Accusantium commodi consectetur dignissimos, eveniet maiores nesciunt
                                                quisquam quos soluta!</p>

                                            <div class="list-btn-group mt-30 mt-sm-14">
                                                <a href="cart.html" class="btn btn-black">Добавить в корзину</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->

                            <!-- Start Single Product -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-product-wrap">
                                    <!-- Product Thumbnail -->
                                    <figure class="product-thumbnail">
                                        <a href="single-product.html" class="d-block">
                                            <img class="primary-thumb" src="<?php echo get_template_directory_uri()?>./assets/img/products/prod-2-1.jpg"
                                                 alt="Product"/>
                                            <img class="secondary-thumb" src="<?php echo get_template_directory_uri()?>./assets/img/products/prod-2-2.jpg"
                                                 alt="Product"/>
                                        </a>
                                        <figcaption class="product-hvr-content">
                                            <a href="#" class="btn btn-black btn-addToCart">Добавить в корзину</a>

                                        </figcaption>
                                    </figure>

                                    <!-- Product Details -->
                                    <div class="product-details">
                                        <h2 class="product-name"><a href="single-product.html">Свитер с оленями</a>
                                        </h2>
                                        <div class="product-prices">
                                            <span class="price">4000 р</span>
                                        </div>
                                        <div class="list-view-content">
                                            <p class="product-desc">Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco ommodo consequat. Duis aute irure dolor in reprehenderit dolore
                                                eu fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Accusantium commodi consectetur dignissimos, eveniet maiores nesciunt
                                                quisquam quos soluta!</p>

                                            <div class="list-btn-group mt-30 mt-sm-14">
                                                <a href="cart.html" class="btn btn-black">Добавить в корзину</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->

                            <!-- Start Single Product -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-product-wrap">
                                    <!-- Product Thumbnail -->
                                    <figure class="product-thumbnail">
                                        <a href="single-product.html" class="d-block">
                                            <img class="primary-thumb" src="<?php echo get_template_directory_uri()?>./assets/img/products/prod-3-1.jpg"
                                                 alt="Product"/>
                                            <img class="secondary-thumb" src="<?php echo get_template_directory_uri()?>./assets/img/products/prod-3-2.jpg"
                                                 alt="Product"/>
                                        </a>
                                        <figcaption class="product-hvr-content">
                                            <a href="#" class="btn btn-black btn-addToCart">Добавить в корзину</a>

                                            <span class="product-badge hot">Хит продаж</span>
                                        </figcaption>
                                    </figure>

                                    <!-- Product Details -->
                                    <div class="product-details">
                                        <h2 class="product-name"><a href="single-product.html">Сноуборд 153
                                            </a></h2>
                                        <div class="product-prices">
                                            <del class="oldPrice">5000 р</del>
                                            <span class="price">4000 р</span>
                                        </div>
                                        <div class="list-view-content">
                                            <p class="product-desc">Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco ommodo consequat. Duis aute irure dolor in reprehenderit dolore
                                                eu fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Accusantium commodi consectetur dignissimos, eveniet maiores nesciunt
                                                quisquam quos soluta!</p>

                                            <div class="list-btn-group mt-30 mt-sm-14">
                                                <a href="cart.html" class="btn btn-black">Добавить в корзину</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->

                            <!-- Start Single Product -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-product-wrap">
                                    <!-- Product Thumbnail -->
                                    <figure class="product-thumbnail">
                                        <a href="single-product.html" class="d-block">
                                            <img class="primary-thumb" src="<?php echo get_template_directory_uri()?>./assets/img/products/prod-4-1.jpg"
                                                 alt="Product"/>
                                            <img class="secondary-thumb" src="<?php echo get_template_directory_uri()?>./assets/img/products/prod-4-2.jpg"
                                                 alt="Product"/>
                                        </a>
                                        <figcaption class="product-hvr-content">
                                            <a href="#" class="btn btn-black btn-addToCart">Добавить в корзину</a>

                                            <span class="product-badge">Новинка</span>
                                        </figcaption>
                                    </figure>

                                    <!-- Product Details -->
                                    <div class="product-details">
                                        <h2 class="product-name"><a href="single-product.html">Ещё один товар
                                            </a></h2>
                                        <div class="product-prices">
                                            <del class="oldPrice">5000 р</del>
                                            <span class="price">4000 р</span>
                                        </div>
                                        <div class="list-view-content">
                                            <p class="product-desc">Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco ommodo consequat. Duis aute irure dolor in reprehenderit dolore
                                                eu fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Accusantium commodi consectetur dignissimos, eveniet maiores nesciunt
                                                quisquam quos soluta!</p>

                                            <div class="list-btn-group mt-30 mt-sm-14">
                                                <a href="cart.html" class="btn btn-black">Добавить в корзину</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->

                            <!-- Start Single Product -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-product-wrap">
                                    <!-- Product Thumbnail -->
                                    <figure class="product-thumbnail">
                                        <a href="single-product.html" class="d-block">
                                            <img class="primary-thumb" src="<?php echo get_template_directory_uri()?>./assets/img/products/prod-5-1.jpg"
                                                 alt="Product"/>
                                            <img class="secondary-thumb" src="<?php echo get_template_directory_uri()?>./assets/img/products/prod-5-2.jpg"
                                                 alt="Product"/>
                                        </a>
                                        <figcaption class="product-hvr-content">
                                            <a href="#" class="btn btn-black btn-addToCart">Добавить в корзину</a>

                                        </figcaption>
                                    </figure>

                                    <!-- Product Details -->
                                    <div class="product-details">
                                        <h2 class="product-name"><a href="single-product.html">Товар номер 2</a></h2>
                                        <div class="product-prices">
                                            <del class="oldPrice">5000 р</del>
                                            <span class="price">4000 р</span>
                                        </div>
                                        <div class="list-view-content">
                                            <p class="product-desc">Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco ommodo consequat. Duis aute irure dolor in reprehenderit dolore
                                                eu fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Accusantium commodi consectetur dignissimos, eveniet maiores nesciunt
                                                quisquam quos soluta!</p>

                                            <div class="list-btn-group mt-30 mt-sm-14">
                                                <a href="cart.html" class="btn btn-black">Добавить в корзину</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->

                            <!-- Start Single Product -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-product-wrap">
                                    <!-- Product Thumbnail -->
                                    <figure class="product-thumbnail">
                                        <a href="single-product.html" class="d-block">
                                            <img class="primary-thumb" src="<?php echo get_template_directory_uri()?>./assets/img/products/prod-6-1.jpg"
                                                 alt="Product"/>
                                            <img class="secondary-thumb" src="<?php echo get_template_directory_uri()?>./assets/img/products/prod-6-2.jpg"
                                                 alt="Product"/>
                                        </a>
                                        <figcaption class="product-hvr-content">
                                            <a href="#" class="btn btn-black btn-addToCart">Добавить в корзину</a>

                                        </figcaption>
                                    </figure>

                                    <!-- Product Details -->
                                    <div class="product-details">
                                        <h2 class="product-name"><a href="single-product.html">Рюкзак</a>
                                        </h2>
                                        <div class="product-prices">
                                            <del class="oldPrice">5000 р</del>
                                            <span class="price">4000 р</span>
                                        </div>
                                        <div class="list-view-content">
                                            <p class="product-desc">Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco ommodo consequat. Duis aute irure dolor in reprehenderit dolore
                                                eu fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Accusantium commodi consectetur dignissimos, eveniet maiores nesciunt
                                                quisquam quos soluta!</p>

                                            <div class="list-btn-group mt-30 mt-sm-14">
                                                <a href="cart.html" class="btn btn-black">Добавить в корзину</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->

                            <!-- Start Single Product -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-product-wrap">
                                    <!-- Product Thumbnail -->
                                    <figure class="product-thumbnail">
                                        <a href="single-product.html" class="d-block">
                                            <img class="primary-thumb" src="<?php echo get_template_directory_uri()?>./assets/img/products/prod-7-1.jpg"
                                                 alt="Product"/>
                                            <img class="secondary-thumb" src="<?php echo get_template_directory_uri()?>./assets/img/products/prod-7-2.jpg"
                                                 alt="Product"/>
                                        </a>
                                        <figcaption class="product-hvr-content">
                                            <a href="#" class="btn btn-black btn-addToCart">Добавить в корзину</a>

                                            <span class="product-badge sale">-20%</span>
                                        </figcaption>
                                    </figure>

                                    <!-- Product Details -->
                                    <div class="product-details">
                                        <h2 class="product-name"><a href="single-product.html">Товар товар</a></h2>
                                        <div class="product-prices">
                                            <del class="oldPrice">5000 р</del>
                                            <span class="price">4000 р</span>
                                        </div>
                                        <div class="list-view-content">
                                            <p class="product-desc">Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco ommodo consequat. Duis aute irure dolor in reprehenderit dolore
                                                eu fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Accusantium commodi consectetur dignissimos, eveniet maiores nesciunt
                                                quisquam quos soluta!</p>

                                            <div class="list-btn-group mt-30 mt-sm-14">
                                                <a href="cart.html" class="btn btn-black">Добавить в корзину</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->

                            <!-- Start Single Product -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-product-wrap">
                                    <!-- Product Thumbnail -->
                                    <figure class="product-thumbnail">
                                        <a href="single-product.html" class="d-block">
                                            <img class="primary-thumb" src="<?php echo get_template_directory_uri()?>./assets/img/products/prod-8-1.jpg"
                                                 alt="Product"/>
                                            <img class="secondary-thumb" src="<?php echo get_template_directory_uri()?>./assets/img/products/prod-8-2.jpg"
                                                 alt="Product"/>
                                        </a>
                                        <figcaption class="product-hvr-content">
                                            <a href="#" class="btn btn-black btn-addToCart">Добавить в корзину</a>

                                            <span class="product-badge hot">Хит продаж</span>
                                        </figcaption>
                                    </figure>

                                    <!-- Product Details -->
                                    <div class="product-details">
                                        <h2 class="product-name"><a href="single-product.html">Квартира в центре</a></h2>
                                        <div class="product-prices">
                                            <del class="oldPrice">5000 р</del>
                                            <span class="price">4000 р</span>
                                        </div>
                                        <div class="list-view-content">
                                            <p class="product-desc">Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco ommodo consequat. Duis aute irure dolor in reprehenderit dolore
                                                eu fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Accusantium commodi consectetur dignissimos, eveniet maiores nesciunt
                                                quisquam quos soluta!</p>

                                            <div class="list-btn-group mt-30 mt-sm-14">
                                                <a href="cart.html" class="btn btn-black">Добавить в корзину</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->

                            <!-- Start Single Product -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-product-wrap">
                                    <!-- Product Thumbnail -->
                                    <figure class="product-thumbnail">
                                        <a href="single-product.html" class="d-block">
                                            <img class="primary-thumb" src="<?php echo get_template_directory_uri()?>./assets/img/products/prod-9-1.jpg"
                                                 alt="Product"/>
                                            <img class="secondary-thumb" src="<?php echo get_template_directory_uri()?>./assets/img/products/prod-9-2.jpg"
                                                 alt="Product"/>
                                        </a>
                                        <figcaption class="product-hvr-content">
                                            <a href="#" class="btn btn-black btn-addToCart">Добавить в корзину</a>

                                            <span class="product-badge">Новинка</span>
                                        </figcaption>
                                    </figure>

                                    <!-- Product Details -->
                                    <div class="product-details">
                                        <h2 class="product-name"><a href="single-product.html">Сноубордическая шапка</a></h2>
                                        <div class="product-prices">
                                            <del class="oldPrice">5000 р</del>
                                            <span class="price">4000 р</span>
                                        </div>
                                        <div class="list-view-content">
                                            <p class="product-desc">Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco ommodo consequat. Duis aute irure dolor in reprehenderit dolore
                                                eu fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Accusantium commodi consectetur dignissimos, eveniet maiores nesciunt
                                                quisquam quos soluta!</p>

                                            <div class="list-btn-group mt-30 mt-sm-14">
                                                <a href="cart.html" class="btn btn-black">Добавить в корзину</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->

                        </div>
                    </div>
                </div>
                <!-- End Product Wrapper -->

                <!-- Page Pagination Start  -->
                <div class="page-pagination-wrapper mt-70 mt-md-50 mt-sm-40">
                    <nav class="page-pagination">
                        <ul class="pagination justify-content-center">
                            <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Page Pagination End  -->
            </div>
            <!-- End Shop Page Product Area -->
        </div>
    </div>
</div>
<!--== End Shop Page Wrapper ==-->



<?php get_footer();?>