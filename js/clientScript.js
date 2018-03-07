var items = 0;
// Page Loading Event 
$(document).ready(function() {

    cartQty();

    // Add To Fly Animation First Try
    $('.addToCart').click(function() {

        scrollTop();

        var cart = $('#headerCart'); //select cart logo or location
        var imgToAnimate = $(this).parent('.card-btn').parent('.card').find('img').eq(0); // product image select for fly animation 
        var qty = $(this).parent('.card-btn').find('.card-container').children('.card-qty').val();
        alert(qty);
        flyToCart(imgToAnimate, cart);
        cartQty();

    });

});

//jump to url function
function jumpUrl(id, attri, php) {
    window.location.href = "../" + php + "?" + attri + "=" + id;
    console.log("hellow");
}

// scroll to op animation
function scrollTop() {
    //Scroll to top if cart icon is hidden on top
    $('html, body').animate({
        'scrollTop': $(".cart_anchor").position().top
    });
}

// cart items count
function cartQty() {
    //cart items count
    if (items != 0) {
        // $(".header-cart").show();
        // TODO: Error Avilable Fix It
        $("#headerCart.header-cart").html("<i class='fa fa-shopping-cart'></i> Cart <span class=\"itemCount\">" + items + "</span>");
    } else {
        $("#headerCart.header-cart").html("<i class='fa fa-shopping-cart'></i> Cart <span class=\"itemCount\">0</span>");
    }
}

// add to cart product image fly animation
function flyToCart(flyer, flyingTo) {
    var $func = $(this);
    var divider = 3;
    var flyerClone = $(flyer).clone();
    $(flyerClone).css({
        position: 'absolute',
        top: $(flyer).offset().top + "px",
        left: $(flyer).offset().left + "px",
        opacity: 1,
        'z-index': 1000
    });
    $('body').append($(flyerClone));
    var gotoX = $(flyingTo).offset().left + ($(flyingTo).width() / 2) - ($(flyer).width() / divider) / 2;
    var gotoY = $(flyingTo).offset().top + ($(flyingTo).height() / 2) - ($(flyer).height() / divider) / 2;

    $(flyerClone).animate({
            opacity: 0.4,
            left: gotoX,
            top: gotoY,
            width: $(flyer).width() / divider,
            height: $(flyer).height() / divider
        }, 700,
        function() {
            $(flyingTo).fadeOut('fast', function() {
                $(flyingTo).fadeIn('fast', function() {
                    $(flyerClone).fadeOut('fast', function() {
                        $(flyerClone).remove();
                    });
                });
            });
        });
}