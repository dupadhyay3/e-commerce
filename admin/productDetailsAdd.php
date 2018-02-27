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
    <title>Add Product Details | E-Commerce</title>
    <link rel="stylesheet" href="../css/adminStyle.css">
    <script src="../js/jquery-3.3.1.js"></script>
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
                <div class="box-product">
                    <div class="box-header">
                        <h1>Add Product Deatils</h1>
                    </div>
                    <form id="proDetailForm" name="ProDetailForm" action="../admin/productDetailsAdd.php" method="post" enctype="multipart/form-data">
                        <div class="box-left">
                            <div class="box-input-group">
                                <input class="box-input-field" type="text" id="txtProName" name="txtPName" value="<?php echo $ele[0]; ?>">
                                <span id="errName" class="err"><?php echo $err[0]; ?></span>
                                <label>Product Name</label>
                            </div>
                            <div class="box-input-group">
                                <input class="box-input-field" type="text" id="txtProSKU" name="txtPSKU" value="<?php echo $ele[1]; ?>">
                                <span id="errSKU" class="err"><?php echo $err[1]; ?></span>
                                <label>SKU</label>
                            </div>
                            <div class="box-input-group">
                                <input class="box-input-field" type="text" id="txtProPrice" name="txtPPrice" value="<?php echo $ele[2]; ?>">
                                <span id="errPrice" class="err"><?php echo $err[2]; ?></span>
                                <label>Product Price</label>
                            </div>
                        </div>
                        <div class="box-mid">
                            <div class="box-input-group">
                                <datalist id="opMainProCat" >
                                    <?php
                                        $sql = "SELECT * FROM pCategoryMain";
                                        $result = $conn->query($sql);
                                        if($result->num_rows > 0){
                                            while($row = $result->fetch_array()){
                                                echo "<option value='$row[0]'>$row[1]</option>";
                                            }
                                        }
                                    ?>
                                </datalist>
                                <input class="box-input-field" list="opMainProCat" type="text" id="txtProCatMain2" name="txtMain2" value="<?php echo $ele[3]; ?>">
                                <span id="errProMain" class="err"><?php echo $err[3]; ?></span>
                                <label>Main Category</label>
                            </div>
                            <div class="box-input-group">
                                <datalist id="opSubProCat" >
                                    <!-- <?php
                                        // $sql = "SELECT * FROM pCategorySub";
                                        // $result = $conn->query($sql);
                                        // if($result->num_rows > 0){
                                        //     while($row = $result->fetch_array()){
                                        //         echo "<option value='$row[0]'>$row[2]</option>";
                                        //     }
                                        // }
                                    ?> -->
                                </datalist>
                                <input class="box-input-field" list="opSubProCat" type="text" id="txtProCatSub2" name="txtSub2" value="<?php echo $ele[4]; ?>">
                                <span id="errProSub" class="err"><?php echo $err[4]; ?></span>
                                <label>Sub Category</label>
                            </div>
                            <div class="box-input-group">
                                <datalist id="opStock" >
                                    <option value="In Stock">In Stock</option>
                                    <option value="Out of Stock">Out of Stock</option>
                                </datalist>
                                <input class="box-input-field" list="opStock" type="text" id="txtStock" name="txtPStock" value="<?php echo $ele[5]; ?>">
                                <span id="errProSub" class="err"><?php echo $err[5]; ?></span>
                                <label>Stock</label>
                            </div>
                        </div>
                        <div class="box-right">
                            <div class="box-input-group">
                                <input accept="image/*" class="box-input-field" type="file" name="fileImg" id="FileImg">
                                <img name="fileImage" class="product-img" src="" id="fileImgTag" onerror="this.src='../img/NoImg.png';"/>
                                <span id="errProImg" class="err"><?php echo $err[6]; ?></span>
                                <label>Product Image</label>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <button type="submit" name="btnAddProduct" id="btnAddPro">Add</button>
                    </form>
                </div>
                <!-- <div id="alertMain"></div> -->
            </div>
        </div>
    </div>
    <?php require_once('../includes/adminFooter.php'); ?>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#fileImgTag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#FileImg").change(function(){
            readURL(this);
        });
    </script>
    <script src="../js/adminScript.js"></script>
</body>
</html>