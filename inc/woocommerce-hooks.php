<?php
// ОТКЛЮЧАЕМ ВСЕ СТИЛИ woocommerce
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

//ХЛЕБНЫЕ КРОШКИ
add_filter('woocommerce_breadcrumb_defaults', function() {
    return array(
        'delimiter'   => '',
        'wrap_before' => '<nav class="page-breadcrumb"><ul class="d-flex justify-content-center">',
        'wrap_after'  => '</ul></nav>',
        'before'      => ' <li>',
        'after'       => '</li>',
        'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
    );
});

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// ДИНАМИЧСКОЕ ОБНОВОЕНИЕ СЧЁТЧИКА ТОВАРОВ В ИКОНКЕ КОРЗИНЫ ЧЕРЕЗ ajax
add_filter('woocommerce_add_to_cart_fragments', function($fragments){
    $fragments['.cart-count'] = '<span class="cart-count">' . count(WC()->cart->get_cart()) .'</span>';
    return $fragments;
});


// С ПОМОЩЬЮ ЭТОГО ФИЛЬТРА МЫ МОЖЕМ МЕНЯТЬ ПОЛЯ НА СТРАНИЦЕ ЗАКАЗА ДОБАВЛЯТЬ placeholder К ПРИМЕРУ ИЛИ МЕНЯТЬ КЛАССЫ И Т.Д
add_filter('woocommerce_checkout_fields', function($checkout_fields) {
    $checkout_fields['billing']['billing_first_name']['placeholder'] = 'Как Вас зовут';
    return $checkout_fields;
});

//МЕНЯЕМ КЛАССЫ У КНОПКИ В ПОДИТОГЕ НА СТРАНИЦЕ ОФОРМЛЕНИЯ ЗАКАЗА
add_filter('woocommerce_order_button_html', function($html) {
    return str_replace('button alt', 'btn btn-full btn-black mt-26', $html);
});


