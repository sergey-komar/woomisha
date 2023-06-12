<?php
?>
 <div class="col-lg-3 order-last order-lg-first mt-md-54 mt-sm-44">
    <div class="sidebar-area-wrapper">
    <!-- <?php dynamic_sidebar( 'sidebar-catalog' ); ?> -->

        <!-- Start Single Sidebar -->
        <?php $product_categories = get_terms([
            'taxonomy' => 'product_cat',
            'hide_empty' => true
        ])?>
        <?php if($product_categories) : ?>
        <div class="single-sidebar-wrap">
            <h3 class="sidebar-title">Категории товаров</h3>
            <div class="sidebar-body">
                <ul class="sidebar-list">
                    <?php foreach($product_categories as $product_category) :?>
                    <li>
                    <a href="<?php echo get_term_link($product_category);?>"><?php echo $product_category->name;?>
                     <span><?php echo $product_category->count;?></span>
                    </a>
                    </li>
                    <?php endforeach;?>
                   
                </ul>
            </div>
        </div>
        <?php endif;?>
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
                    <div class="price-range" data-min="0" data-max="100"></div>
                    <div class="range-slider">
                        <form action="" id="price_filter" method="GET">
                            <label for="amount">Цена: </label>
                            <input type="text" id="amount" value=""/>
                            <input type="hidden" id="min_price" name="min_price"
                             value="<?php echo isset($_GET['min_price']) ? intval($_GET['min_price']) : 0 ?>">
                            <input type="hidden" id="max_price" name="max_price"
                            value="<?php echo isset($_GET['max_price']) ? intval($_GET['max_price']) : 100 ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Sidebar -->

        <?php $product_razmers = get_terms([
            'taxonomy' => 'pa_razmer',
            'hide_empty' => true
        ])?>
        <!-- Start Single Sidebar -->
        <?php if($product_razmers) :?>
        <div class="single-sidebar-wrap">
            <h3 class="sidebar-title">Размер</h3>
            <div class="sidebar-body">
                <ul class="size-list">
                    <?php $i=0; foreach($product_razmers as $product_razmer) : ?>
                    <li>
                        <a href="?filter_razmer=<?php echo $product_razmer->slug;?>">
                        <?php echo $product_razmer->name?></a>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
        <?php endif;?>
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