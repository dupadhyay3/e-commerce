<?php
    require_once("../includes/connection.php");
    require_once("../includes/session.php");

    // remove extra html special char and symbols
    function secure($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $sql = "SELECT * FROM p_category_sub WHERE pcs_id =".$_GET['edit'];
    $result = $conn->query($sql);
    if($result->num_rows == 1){
        while($row = $result->fetch_array()){
            $rows = array($row[0],$row[1],$row[2]);
        }
    }else{
        header("Refresh: 0.1; url=../admin/productCategory.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../img/favicon.ico" />
    <title>Product Category Sub | E-Commerce</title>
    <link rel="stylesheet" href="../css/adminStyle.css">
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/adminScript.js"></script>    
</head>
<body>
    <?php 
        require_once('../includes/adminHeader.php');
        require_once('../includes/adminLeft.php');
    ?>
    <div class="right-main">
        <ul class="breadcrumb">
            <li><a href="../admin/home.php">Admin Panel</a></li>
            <li><a href="#">Product</a></li>
            <li>Update Product Category</li>
        </ul>
        <div class="main-content">

            <div class="tab">
                <button id="s" style="width:100%" class="tablinks active" >Sub Category</button>
            </div>


            <div id="Sub" class="tabcontent" style="display:block;">
                <div class="tab-txt">
                    <div class="box-category-sub">
                        <div class="box-header">
                            <h1>Update Product Category</h1>
                        </div>
                        <form id="subCatEditForm" name="SubCatEditForm" action="../admin/productCategorySubEdit.php" method="post">
                            <input type="hidden" value="<?php echo $rows[0]; ?>" id="editId" name="id">
                            <div class="box-input-group">
                                <datalist id="opMainProCat" >
                                    <?php
                                        $sql = "SELECT * FROM p_category_main";
                                        $result = $conn->query($sql);
                                        if($result->num_rows > 0){
                                            while($row = $result->fetch_array()){
                                                echo "<option value='$row[0]'>$row[1]</option>";
                                            }
                                        }
                                    ?>
                                </datalist>
                                <input class="box-input-field" list="opMainProCat" type="text" id="txtProCatMain1" name="txtMain1" value="<?php echo $rows[1]; ?>">
                                <span id="errMainSub" class="err"><?php echo $err[0]; ?></span>
                                <label>Main Category</label>
                            </div>
                            <div class="box-input-group">
                                <input class="box-input-field" type="text" id="txtProCatSub" name="txtSub" value="<?php echo $rows[2]; ?>">
                                <span id="errSub" class="err"><?php echo $err[0]; ?></span>
                                <label>Sub Category</label>
                            </div>
                            <button type="submit" name="btnEditSub" id="btnEditSub">Update</button>
                        </form>
                    </div>
                    <!-- <div id="alertSub"></div> -->
                </div>
            </div>

        </div>
    </div>
    <?php require_once('../includes/adminFooter.php'); ?>
</body>
</html>