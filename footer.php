<?php
?>
<!--== Start Footer Section ===-->
<footer id="footer-area">
    <!-- Start Footer Widget Area -->
    <div class="footer-widget-area pt-40 pb-28">
        <div class="container">
            <div class="footer-widget-content">
                <div class="row">

                    <!-- Start Footer Widget Item -->
                    <div class="col-sm-3 col-lg-3">
                        <div class="footer-widget-item-wrap">
                            <h3 class="widget-title">Каталог</h3>
                            <div class="widget-body">
                                <ul class="footer-list">
                                    <li><a href="index.html">Обычный</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer Widget Item -->

                    <!-- Start Footer Widget Item -->
                    <div class="col-sm-3 col-lg-3">
                        <div class="footer-widget-item-wrap">
                            <h3 class="widget-title">Страницы</h3>
                            <div class="widget-body">
                                <ul class="footer-list">

                                    <li><a href="cart.html">Корзина</a></li>
                                    <li><a href="checkout.html">Оплата</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer Widget Item -->

                    <!-- Start Footer Widget Item -->
                    <div class="col-sm-3 col-lg-3">
                        <div class="footer-widget-item-wrap">
                            <h3 class="widget-title">Товары</h3>
                            <div class="widget-body">
                                <ul class="footer-list">
                                    <li><a href="single-product.html">Простой</a></li>
                                    <li><a href="single-product-grouped.html">Сгруппированный</a></li>
                                    <li><a href="single-product-affiliate.html">Внешний/Партнерский</a></li>
																		<li><a href="single-product-variable.html">Вариативный</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer Widget Item -->

                    <!-- Start Footer Widget Item -->
                    <div class="col-sm-3 col-lg-3">
                        <div class="footer-widget-item-wrap">
                            <h3 class="widget-title">Напишите мне</h3>
                            <div class="widget-body">
                                <div class="contact-text">
                                    <a href="#">(+1) 234 56 78</a>
                                    <a href="#">me@misha.blog</a>
                                    <p>Санкт-Петербург, Невский пр.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer Widget Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Widget Area -->

    <!-- Start Footer Bottom Area -->
    <div class="footer-bottom-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-lg-3 m-auto order-1">
                    <div class="footer-social-icons nav justify-content-center justify-content-sm-start mb-xs-10">
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                </div>

                <div class="col-sm-5 col-lg-6 m-auto order-3 order-sm-2 text-center text-sm-left text-lg-center">
                    <div class="copyright-text mt-xs-10 ">
                        <p>&copy; 2020 Курс WooCommerce от Миши Рудрастых.</p>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-3 m-auto order-2 text-center text-md-right">
                    <img src="assets/img/payments.png" alt="Payment Method"/>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom Area -->
</footer>
<!--== End Footer Section ===-->


<!-- ЕСЛИ НАХОДИМСЯ НЕ НА СТАРНИЦЕ КОРЗИНЫ ТО ВЫВОДИМ, ЕСЛИ НА СТРАНИЦЕ КОРЗИНЫ, ТО НЕТ -->
<?php if(! is_cart()):?>
<!--== Start Mini Cart Wrapper ==-->
<div class="mfp-hide modal-minicart" id="miniCart-popup">
    <div class="minicart-content-wrap">
    <h2>Корзина</h2>
        <?php woocommerce_mini_cart()?>
       
    </div>
</div>
<!--== End Mini Cart Wrapper ==-->
<?php endif;?>



<?php wp_footer();?>
</body>
</html>