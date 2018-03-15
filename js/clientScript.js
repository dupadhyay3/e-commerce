if (sessionStorage) {
    sessionStorage.setItem("totalCartItems", 0);
}


// Page Loading Event 
$(document).ready(function() {
    // Scroll to top arrow
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 150) { // If page is scrolled more than 150px
            $('#return-to-top').fadeIn(200); // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200); // Else fade out the arrow
        }
    });

    // When arrow is clicked
    $('#return-to-top').click(function() {
        scrollTop();
    });

    // Add To Fly Animation First Try
    $('.addToCart').click(function() {
        scrollTop();
        var cart = $('#headerCart'); //select cart logo or location
        var imgToAnimate = $(this).parent('.card-btn').parent('.card').find('img').eq(0); // product image select for fly animation 
        var qty1 = $(this).parent('.card-btn').parent('.card').find('.card-container').find('input[type="text"]').val();
        var qty = parseInt(qty1);
        flyToCart(imgToAnimate, cart);
        cartQty(qty);
    });

    // View More Details of Product
    $('.moreDetails').click(function() {
        var p_id = $(this).parent('.card-btn').parent('.card').attr('id'); //product id
        jumpUrl(p_id, "pid", "productView.php");
    });

    // Show Cart Page
    $('#headerCart').click(function() {
        window.location.href = "showCart.php";
    });

});

//jump to url function
function jumpUrl(id, attri, php) {
    window.location.href = "../" + php + "?" + attri + "=" + id;
}

// scroll to top animation
function scrollTop() {
    //Scroll to top if cart icon is hidden on top
    $('html, body').animate({
        'scrollTop': $(".cart_anchor").position().top
    });
}

// cart items count
function cartQty(qunatity) {
    // var i = parseInt(i) + items;
    var total_item = parseInt(sessionStorage.getItem('totalCartItems'));
    var updateTotal = total_item + qunatity;
    sessionStorage.setItem('totalCartItems', updateTotal);
    // alert("after add" + i);
    //cart items count
    total_item = parseInt(sessionStorage.getItem('totalCartItems'));
    if (total_item != 0) {
        // $(".header-cart").show();
        // TODO: Error Avilable Fix It
        $("#headerCart.header-cart").html("<i class='fa fa-shopping-cart'></i> Cart <span class=\"itemCount\">" + total_item + "</span>");
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