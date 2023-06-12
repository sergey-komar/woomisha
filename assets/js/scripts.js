jQuery( function( $ ) {

	/*===============================
		 Shop page
	==================================*/

	/*===== Product View Mode Change =====*/
	var viewItemClick = $(".product-view-mode li"),
			productWrapper = $(".shop-page-products-wrapper .products-wrapper");

	viewItemClick.each(function (index, elem) {
			var element = $(elem),
					viewStyle = element.data('viewmode');

			viewItemClick.on('click', function () {
					var viewMode = $(this).data('viewmode');
					productWrapper.removeClass(viewStyle).addClass(viewMode);
					viewItemClick.removeClass('active');
					$(this).addClass('active')
			});
	});

	/*=============================
		Mfp Modal Active JS
	==============================*/
	$(".modalActive").magnificPopup({
			type: 'inline',
			midClick: true,
			mainClass: 'veeraModal',
			preloader: false
	});

	/*=============================
		Nice Select Js
	==============================*/
	$('select').niceSelect();




	/*=============================
		Price Range Slider JS
	==============================*/

	var rangeSlider = $(".price-range"),
			amount = $("#amount"),
			minPrice = rangeSlider.data('min'),
			maxPrice = rangeSlider.data('max'),
			minPriceField = $("#min_price"),//мой код
			maxPriceField = $("#max_price"),//мой код
			form = $("#price_filter");//мой код

	rangeSlider.slider({
			range: true,
			min: minPrice,
			max: maxPrice,
			values: [minPriceField.val(), maxPriceField.val()],//мой код
			slide: function (event, ui) {
					amount.val( ui.values[0] + " р - " + ui.values[1] + " р");
					minPriceField.val(ui.values[0])//мой код
					maxPriceField.val(ui.values[1])//мой код
			},
			stop: function(event, ui){//мой код
				form.submit();//мой код
			}
	});
	amount.val( rangeSlider.slider("values", 0) +
			" р - " + rangeSlider.slider("values", 1) + " р" );




	/*=============================
		Product Quantity
	==============================*/
	var proQty = $(".pro-qty");
	proQty.append('<a href="#" class="inc qty-btn">+</a>');
	proQty.append('<a href="#" class= "dec qty-btn">-</a>');
	$('.qty-btn').on('click', function (e) {
			e.preventDefault();
			var $button = $(this);
			var oldValue = $button.parent().find('input').val();
			if ($button.hasClass('inc')) {
					var newVal = parseFloat(oldValue) + 1;
			} else {
					// Don't allow decrementing below zero
					if (oldValue > 0) {
							var newVal = parseFloat(oldValue) - 1;
					} else {
							newVal = 0;
					}
			}
			$button.parent().find('input').val(newVal);
	});

	/*==================================
			Single Product Zoom
	===================================*/
	$('.product-thumb-large-view .product-thumb-item').zoom();

	/*==================================
			Single Product Thumbnail JS
	===================================*/
	$('.product-thumb-carousel').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.product-thumbnail-nav, .vertical-tab-nav'
	});

	// Horizontal Nav Style
	$('.product-thumbnail-nav').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			asNavFor: '.product-thumb-carousel',
			dots: false,
			arrows: false,
			centerMode: true,
			centerPadding: 0,
			variableWidth: false,
			focusOnSelect: true
	});

	// Vertical Nav Style
	$('.vertical-tab-nav').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			asNavFor: '.product-thumb-carousel',
			dots: false,
			arrows: false,
			focusOnSelect: true,
			vertical: true
	});

	/*=============================
		Checkout Page Checkbox
	==============================*/
	$("#create_pwd").on("change", function () {
			$(".account-create").slideToggle("100");
	});

	$("#ship_to_different").on("change", function () {
			$(".ship-to-different").slideToggle("100");
	});

	/*=============================
		Payment Method Accordion
	==============================*/
	$('input[name="paymentmethod"]').on('click', function () {

			var $value = $(this).attr('value');

			$('.payment-method-details').slideUp();
			$('[data-method="' + $value + '"]').slideDown();
	});

} );
