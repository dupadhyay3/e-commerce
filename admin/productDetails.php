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
    <title>Product Details | E-Commerce</title>
    <link rel="stylesheet" href="../css/adminStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <li>Product Details</li>
        </ul>
        <div class="main-content">
            <div style="overflow-x:auto">
                <table border=1 align="center">
                    <thead>
                        <tr>
                            <th>p_id</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>SKU</th>
                            <th style="width:100px;">Price</th>
                            <th>pcmName</th>
                            <th>pcsName</th>
                            <th>Stock</th>
                            <th colspan="2" style="min-width:70px;max-width:70px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $limit = 4; 
                            if (isset($_GET["page"])) { 
                                $page  = $_GET["page"]; 
                            } else { $page=1; };  
                            $start_from = ($page-1) * $limit;

                            $sql = "SELECT p.p_id, p.p_image, p.p_name, p.p_sku, p.p_price, m.pcm_name, s.pcs_name, p.p_stock FROM product_details p JOIN p_category_sub s ON s.pcs_id=p.pcs_id JOIN p_category_main m ON m.pcm_id = s.pcm_id ORDER BY p.p_name ASC, m.pcm_name ASC, s.pcs_name ASC, p.p_stock ASC LIMIT $start_from, $limit";
                            $result=$conn->query($sql); 
                            if($result->num_rows > 0){
                                while($row = $result->fetch_array()){
                                    echo "
                                    <tr id='$row[0]'>
                                        <td>$row[0]</td>
                                        <td><img class='pImgTbl' src='data:image/*;base64,".base64_encode( $row[1] )."'  onerror='.'this.src='../img/NoImg.png';'/></td>
                                        <td>$row[2]</td>
                                        <td>$row[3]</td>
                                        <td><i class='fa fa-inr'></i>$row[4]</td>
                                        <td>$row[5]</td>
                                        <td>$row[6]</td>
                                        <td>$row[7]</td>"; ?>
                                        <!-- <td><a class="del" href='../includes/adminDelProduct.php?delete_id=<?php echo $row[0]; ?>' onclick='return confirm("Are You sure to delete !");'><img class='icon' src='../img/delete.png'></a></td> -->
                                        <td colspan="2"><a class="del" href='../includes/adminDelProduct.php?delete_id=<?php echo $row[0]; ?>' onclick='return confirm("Are You sure to delete !");'><img class='icon' src='../img/delete.png'></a> &nbsp;
                                        <!-- <td><a href='../admin/productDetailsEdit.php?edit=<?php echo $row[0]; ?>'><img class='icon' src='../img/edit.png'></a></td> -->
                                        <a href='#' onclick="editDetails(<?php echo $row[0]; ?>,'productDetailsEdit.php')"><img class='icon' src='../img/edit.png'></a></td>
                        <?php echo "</tr>";
                                }
                            }else{
                                echo "  
                                <tr>
                                    <td id='empty' colspan='10'>There's No data found !!!</td>
                                </tr>";
                            }
                        ?>
                        </tbody>
                </table>
                <div align="center">
                    <?php
                            $sql="SELECT COUNT(p_id) FROM product_details";
                            $result = $conn->query($sql);
                            $row = $result->fetch_array();
                            $total_records = $row[0];
                            $total_pages = ceil($total_records/$limit); 
                    ?> 
                    <div class="pagination">
                        <?php
                                for($i=1;$i<=$total_pages;$i++){
                                    echo "<a href='productDetails.php?page=".$i."'>".$i."</a>";
                                }
                        ?>
                        <!-- <a href="#">&laquo;</a>
                        <a href="#">1</a>
                        <a href="#" class="active">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#">&raquo;</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('../includes/adminFooter.php'); ?>
</body>
</html>