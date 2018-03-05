<?php
require_once("../includes/connection.php");
require_once("../includes/session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../img/favicon.ico" />
    <title>Admin Home | E-Commerce</title>
    <link rel="stylesheet" href="../css/adminStyle.css">
</head>
<body>
    <?php 
        require_once('../includes/adminHeader.php');
        require_once('../includes/adminLeft.php');
    ?>
    <div class="right-main">
        <ul class="breadcrumb">
            <li><a href="#">Admin Panel</a></li>
            <li>Dashboard</li>
        </ul>
        <div class="main-content">
            
        </div>
    </div>
    <?php require_once('../includes/adminFooter.php'); ?>
</body>
</html>