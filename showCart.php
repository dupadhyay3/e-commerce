<?php
require("includes/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <title>Shopping Cart | e-Commerce Portal</title>
    <link rel="stylesheet" href="css/clientStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/clientScript.js"></script>
</head>
<body>
    <?php require_once('includes/clientHeaderCart.php'); ?>
    <?php require_once('includes/clientHeaderMenu.php'); ?>
    <div class="container">
        <div class="cart-body">
            <div class="clear"></div>
            <div class="cart-header">MY CART (0)</div>
            <div class="clear"></div>
            <div class="cart-content">
                <img class="cart-empty" src="img/empty-cart.png" alt="empty-cart">
                <div class="cart-text">Your Shopping Cart is empty</div>
            </div>
        </div>
    </div>
    <?php require_once('includes/clientFooter.php'); ?>
</body>
</html>