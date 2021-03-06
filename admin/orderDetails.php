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
    <title>Order Details | E-Commerce</title>
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
            <li><a href="#">Order</a></li>
            <li>Order Details</li>
        </ul>
        <div class="main-content">
            <div style="overflow-x:auto">
                <table border=1 align="center">
                    <thead>
                        <tr>
                            <th>odr_id</th>
                            <th>custId</th>
                            <th>billId</th>
                            <th>paymentMethod</th>
                            <th>shipId</th>
                            <th>shipMethodId</th>
                            <th>pId</th>
                            <th>pcsId</th>
                            <th>cartId</th>
                            <th colspan="3">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $limit = 4; 
                            if (isset($_GET["page"])) { 
                                $page  = $_GET["page"]; 
                            } else { $page=1; };  
                            $start_from = ($page-1) * $limit;

                            // $sql = "SELECT p.pId, p.pImage, p.pName, p.pSKU, p.pPrice, m.pcmName, s.pcsName, p.pStock FROM productDetails p JOIN pCategorySub s ON s.pcsId=p.pcsId JOIN pCategoryMain m ON m.pcmId = s.pcmId ORDER BY p.pName ASC, m.pcmName ASC, s.pcsName ASC, p.pStock ASC LIMIT $start_from, $limit";
                            $sql = "SELECT * FROM order_details LIMIT $start_from, $limit";
                            $result=$conn->query($sql); 
                            if($result->num_rows > 0){
                                while($row = $result->fetch_array()){
                                    echo "
                                    <tr>
                                        <td>$row[0]</td>
                                        <td>$row[1]</td>
                                        <td>$row[2]</td>
                                        <td>$row[3]</td>
                                        <td>$row[4]</td>
                                        <td>$row[5]</td>
                                        <td>$row[6]</td>
                                        <td>$row[7]</td>
                                        <td>$row[8]</td>
                                        <td>$row[9]</td>"; ?>
                                        <!-- <td><a class="del" href='../includes/adminDelProduct.php?delete_id=<?php echo $row[0]; ?>' onclick='return confirm("Are You sure to delete !");'><img class='icon' src='../img/delete.png'></a></td> -->
                                        <td><a class="del" href='../includes/adminDelProduct.php?delete_id=<?php echo $row[0]; ?>' onclick='return confirm("Are You sure to delete !");'><img class='icon' src='../img/delete.png'></a></td>
                                        <!-- <td><a href='../admin/productDetailsEdit.php?edit=<?php echo $row[0]; ?>'><img class='icon' src='../img/edit.png'></a></td> -->
                                        <td><a href='#' onclick="editDetails(<?php echo $row[0]; ?>,'productDetailsEdit.php')"><img class='icon' src='../img/edit.png'></a></td>
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
                            $sql="SELECT COUNT(odr_id) FROM order_details";
                            $result = $conn->query($sql);
                            $row = $result->fetch_array();
                            $total_records = $row[0];
                            $total_pages = ceil($total_records/$limit); 
                    ?> 
                    <div class="pagination">
                        <?php
                                for($i=1;$i<=$total_pages;$i++){
                                    echo "<a href='orderDetails.php?page=".$i."'>".$i."</a>";
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