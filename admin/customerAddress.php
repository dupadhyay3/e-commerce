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
    <title>Customer Address | E-Commerce</title>
    <link rel="stylesheet" href="../css/adminStyle.css">
</head>
<body>
    <?php 
        require_once('../includes/adminHeader.php');
        require_once('../includes/adminLeft.php');
    ?>
    <div class="right-main">
        <ul class="breadcrumb">
            <li><a href="../admin/home.php">Admin Panel</a></li>
            <li><a href="#">Cutomer</a></li>
            <li>Customer Address</li>
        </ul>
        <div class="main-content">

            <div class="tab">
                <button id="Al" class="tablinks active" onclick="openTab(event, 'All')">All Address</button>
                <button id="Ship" class="tablinks" onclick="openTab(event, 'Shipping')">Shipping Address</button>
                <button id="Bill" class="tablinks" onclick="openTab(event, 'Billing')">Billing Address</button>
            </div>

            <div id="All" class="tabcontent" style="display:block;">
                <div class="tab-txt">
                    <table>
                        <tr>
                            <th>custId</th>
                            <th>addId</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Zip</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                            $limit = 8; 
                            if (isset($_GET["page"])) { 
                                $page  = $_GET["page"]; 
                            } else { $page=1; };  
                            $start_from = ($page-1) * $limit;  
                            
                            $sql = "SELECT c.custId, a.addId, a.Address, a.City, a.Zip, a.State, a.Country FROM address a JOIN customerDetails c ON c.custId = a.custId LIMIT $start_from, $limit";
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
                                        <td><a href='../includes/adminDelAllAdd.php?delete_id=<?php echo $row[1]; ?>' onclick='return confirm('Are You sure to delete !'); ' ><img class='icon' src='../img/delete.png'></a></td>
                                    </tr>
                                    ";
                                }
                            }else{
                                echo "  
                                <tr>
                                    <td id='empty' colspan='8'>There's No data found !!!</td>
                                </tr>";
                            }
                        ?>
                    </table>
                    <div align="center">
                        <?php
                            $sql="SELECT COUNT(addId) FROM address";
                            $result = $conn->query($sql);
                            $row = $result->fetch_array();
                            $total_records = $row[0];
                            $total_pages = ceil($total_records/$limit); 
                        ?>  
                        <div class="pagination">
                            <?php
                                for($i=1;$i<=$total_pages;$i++){
                                    echo "<a href='customerAddress.php?page=".$i."'>".$i."</a>";
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

            <div id="Shipping" class="tabcontent">
                <div class="tab-txt">
                    <table>
                        <tr>
                            <th>shipId</th>                            
                            <th>custId</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Zip</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                            $limit = 8; 
                            if (isset($_GET["page"])) { 
                                $page  = $_GET["page"]; 
                            } else { $page=1; };  
                            $start_from = ($page-1) * $limit;  
                            
                            $sql = "SELECT s.shipId, c.custId, s.Address, s.City, s.Zip, s.State, s.Country FROM shipAdd s JOIN customerDetails c ON c.custId = s.custId LIMIT $start_from, $limit";
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
                                        <td><a href='../includes/adminDelShipAdd.php?delete_id=<?php echo $row[0]; ?>' onclick='return confirm('Are You sure to delete !'); ' ><img class='icon' src='../img/delete.png'></a></td>
                                    </tr>
                                    ";
                                }
                            }else{
                                echo "  
                                <tr>
                                    <td id='empty' colspan='8'>There's No data found !!!</td>
                                </tr>";
                            }
                        ?>
                    </table>
                    <div align="center">
                        <?php
                            $sql="SELECT COUNT(shipId) FROM shipAdd";
                            $result = $conn->query($sql);
                            $row = $result->fetch_array();
                            $total_records = $row[0];
                            $total_pages = ceil($total_records/$limit); 
                        ?> 
                        <div class="pagination">
                            <?php
                                for($i=1;$i<=$total_pages;$i++){
                                    echo "<a href='customerAddress.php?page=".$i."'>".$i."</a>";
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

            <div id="Billing" class="tabcontent">
                <div class="tab-txt">
                    <table>
                        <tr>
                            <th>billId</th>                            
                            <th>custId</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Zip</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                            $limit = 8; 
                            if (isset($_GET["page"])) { 
                                $page  = $_GET["page"]; 
                            } else { $page=1; };  
                            $start_from = ($page-1) * $limit;  
                            
                            $sql = "SELECT b.billId, c.custId, b.Address, b.City, b.Zip, b.State, b.Country FROM billAdd b JOIN customerDetails c ON c.custId = b.custId LIMIT $start_from, $limit";
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
                                        <td><a href='../includes/adminDelBillAdd.php?delete_id=<?php echo $row[0]; ?>' onclick='return confirm('Are You sure to delete !'); ' ><img class='icon' src='../img/delete.png'></a></td>
                                    </tr>
                                    ";
                                }
                            }else{
                                echo "  
                                <tr>
                                    <td id='empty' colspan='8'>There's No data found !!!</td>
                                </tr>";
                            }
                        ?>
                    </table>
                    <div align="center">
                    <?php
                            $sql="SELECT COUNT(billId) FROM billAdd";
                            $result = $conn->query($sql);
                            $row = $result->fetch_array();
                            $total_records = $row[0];
                            $total_pages = ceil($total_records/$limit); 
                        ?> 
                        <div class="pagination">
                            <?php
                                for($i=1;$i<=$total_pages;$i++){
                                    echo "<a href='customerAddress.php?page=".$i."'>".$i."</a>";
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

</body>
</html>