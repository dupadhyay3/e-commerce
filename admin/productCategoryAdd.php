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


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cutomer Address | E-Commerce</title>
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
            <li><a href="../admin/home.php">Admin Panel</a></li>
            <li><a href="#">Product</a></li>
            <li>Product Category</li>
        </ul>
        <div class="main-content">

            <div class="tab">
                <button id="m" class="tablinks active" onclick="openTab(event, 'Main')">Main Category</button>
                <button id="s" class="tablinks" onclick="openTab(event, 'Sub')">Sub Category</button>
            </div>

            <div id="Main" class="tabcontent" style="display:block;">
                <div class="tab-txt">
                    <div class="box-category-main">
                        <div class="box-header">
                            <h1>Add Main Product Category</h1>
                        </div>
                        <form id="mainCatForm" name="MainCatForm" action="../admin/productCategoryAdd.php" method="post">
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

            <div id="Sub" class="tabcontent">
                <div class="tab-txt">
                    <div class="box-category-sub">
                        <div class="box-header">
                            <h1>Add Sub Product Category</h1>
                        </div>
                        <form id="subCatForm" name="SubCatForm" action="../admin/productCategoryAdd.php" method="post">
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
                                <input class="box-input-field" list="opMainProCat" type="text" id="txtProCatMain1" name="txtMain1" value="<?php echo $ele[0]; ?>">
                                <span id="errMainSub" class="err"><?php echo $err[0]; ?></span>
                                <label>Main Category</label>
                            </div>
                            <div class="box-input-group">
                                <input class="box-input-field" type="text" id="txtProCatSub" name="txtSub" value="<?php echo $ele[0]; ?>">
                                <span id="errSub" class="err"><?php echo $err[0]; ?></span>
                                <label>Sub Category</label>
                            </div>
                            <button type="submit" name="btnAddSub" id="btnAddSub">Add</button>
                        </form>
                    </div>
                    <!-- <div id="alertSub"></div> -->
                </div>
            </div>

        </div>
    </div>
    <?php require_once('../includes/adminFooter.php'); ?>

    <script>
        // Script For Tab View
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
    <script src="../js/adminScript.js"></script>
</body>
</html>