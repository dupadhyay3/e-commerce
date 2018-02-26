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
            <li><a href="#">Product</a></li>
            <li>Add Product Details</li>
        </ul>
        <div class="main-content">
            <div class="tab-txt">
                <div class="box-category-main">
                    <div class="box-header">
                        <h1>Add Product Deatils</h1>
                    </div>
                    <form id="proDetailForm" name="ProDetailForm" action="../admin/productDetailsAdd.php" method="post">
                        <div class="box-input-group">
                            <input class="box-input-field" type="text" id="txtProCatMain" name="txtMain" value="<?php echo $ele[0]; ?>">
                            <span id="errMain" class="err"><?php echo $err[0]; ?></span>
                            <label>Main Category</label>
                        </div>
                        <button type="submit" name="btnAddMain" id="btnAddMain">Add</button>
                    </form>
                </div>
                <!-- <div id="alertMain"></div> -->
            </div>
        </div>
    </div>
    <?php require_once('../includes/adminFooter.php'); ?>
</body>
</html>