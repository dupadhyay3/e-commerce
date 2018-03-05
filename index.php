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
    <title>Home | e-Commerce Portal</title>
    <link rel="stylesheet" href="css/clientStyle.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/clientScript.js"></script>
</head>
<body>
    <?php require_once('includes/clientHeaderCart.php'); ?>
    <?php require_once('includes/clientHeaderMenu.php'); ?>
    <div class="container">

        <div class="card">
            <img src="img/loader.gif" alt="Avatar">
            <!-- <img src="img/loader.gif" alt="Avatar" style="width:100%;"> -->
            <hr>
            <div class="card-container">
                <h4><b>Jane Doe</b></h4> 
                <p>Interior Designer</p> 
            </div>
            <hr>
            <div class="card-btn">
                <button id="addToCartBtn" class="addToCart">Add to Cart</button>
                <span class="vl"></span>
                <button id="moreDetailsBtn" class="moreDetails">More Details</button>
            </div>
        </div>
        <div class="container-single-line-list">
        </div>
    </div>
    <?php require_once('includes/clientFooter.php'); ?>
</body>
</html>