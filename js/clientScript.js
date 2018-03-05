// Page Loading Event 
$(document).ready(function() {

    //cart items count
    var items = 5;
    if (items != 0) {
        // $(".header-cart").show();
        $("#headerCart.header-cart").append("<span class=\"itemCount\">" + items + "</span>");
    } else {
        $("#headerCart.header-cart").append("<span class=\"itemCount\">0</span>");
    }





});

function jumpUrl(id, php) {
    window.location.href = "../" + php + "?pid=" + id;
    console.log("hellow");
}