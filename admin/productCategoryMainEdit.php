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

$sql = "SELECT * FROM pCategoryMain WHERE pcmId =".$_GET['edit'];
$result = $conn->query($sql);
if($result->num_rows == 1){
    while($row = $result->fetch_array()){
        $rows = array($row[0],$row[1]);
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
    <title>Product Category Main | E-Commerce</title>
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
                <button id="m" style="width:100%" class="tablinks active" onclick="openTab(event, 'Main')">Main Category</button>
            </div>

            <div id="Main" class="tabcontent" style="display:block;">
                <div class="tab-txt">
                    <div class="box-category-main">
                        <div class="box-header">
                            <h1>Update Product Category</h1>
                        </div>
                        <form id="mainCatEditForm" name="MainCatEditForm" action="../admin/productCategoryMainEdit.php" method="post">
                            <input type="hidden" value="<?php echo $rows[0]; ?>" id="editId" name="id">
                            <div class="box-input-group">
                                <input class="box-input-field" type="text" id="txtProCatMain" name="txtMain" value="<?php echo $rows[1]; ?>">
                                <span id="errMain" class="err"><?php echo $err[0]; ?></span>
                                <label>Main Category</label>
                            </div>
                            <button type="submit" name="btnEditMain" id="btnEditMain">Update</button>
                        </form>
                    </div>
                    <!-- <div id="alertMain"></div> -->
                </div>
            </div>

        </div>
    </div>
    <?php require_once('../includes/adminFooter.php'); ?>
</body>
</html>