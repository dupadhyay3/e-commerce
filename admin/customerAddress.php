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
    <title>Customer Address | E-Commerce</title>
    <link rel="stylesheet" href="../css/adminStyle.css">
    <script src="../js/adminScript.js"></script>
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
                            <th>cust_id</th>
                            <th>add_id</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Zip</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            $limit = 8; 
                            if (isset($_GET["page"])) { 
                                $page  = $_GET["page"]; 
                            } else { $page=1; };  
                            $start_from = ($page-1) * $limit;  
                            
                            $sql = "SELECT c.cust_id, a.add_id, a.address, a.city, a.zip, a.state, a.country FROM address a JOIN customer_details c ON c.cust_id = a.cust_id LIMIT $start_from, $limit";
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
                                        <td>$row[6]</td>";?>
                                        <td><a href='../includes/adminDelAllAdd.php?delete_id=<?php echo $row[1]; ?>' onclick='return confirm("Are You sure to delete !"); ' ><img class='icon' src='../img/delete.png'></a></td>
                        <?php echo "</tr>";
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
                            $sql="SELECT COUNT(add_id) FROM address";
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
                            <th>ship_id</th>                            
                            <th>cust_id</th>
                            <th>add_id</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Zip</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            $limit = 8; 
                            if (isset($_GET["page"])) { 
                                $page  = $_GET["page"]; 
                            } else { $page=1; };  
                            $start_from = ($page-1) * $limit;  
                            
                            $sql = "SELECT s.ship_id, c.cust_id, a.address, a.city, a.zip, a.state, a.country FROM ship_add s JOIN customer_details c ON c.cust_id = s.cust_id JOIN address a ON a.add_id = s.add_id AND a.cust_id = c.cust_id LIMIT $start_from, $limit";
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
                                        <td>$row[6]</td>"; ?>
                                        <td><a href='../includes/adminDelShipAdd.php?delete_id=<?php echo $row[0]; ?>' onclick='return confirm("Are You sure to delete !"); ' ><img class='icon' src='../img/delete.png'></a></td>
                        <?php echo "</tr>";
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
                            $sql="SELECT COUNT(ship_id) FROM ship_add";
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
                            <th>bill_id</th>                            
                            <th>cust_id</th>
                            <th>add_id</th>
                            <th>address</th>
                            <th>city</th>
                            <th>zip</th>
                            <th>state</th>
                            <th>country</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                            $limit = 8; 
                            if (isset($_GET["page"])) { 
                                $page  = $_GET["page"]; 
                            } else { $page=1; };  
                            $start_from = ($page-1) * $limit;  
                            
                            $sql = "SELECT b.bill_id, c.cust_id, a.address, a.city, a.zip, a.state, a.country FROM bill_add b JOIN customer_details c ON c.cust_id = b.cust_id JOIN address a ON a.add_id = b.add_id AND a.cust_id = c.cust_id LIMIT $start_from, $limit";
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
                                        <td>$row[6]</td>";?>
                                        <td><a href='../includes/adminDelBillAdd.php?delete_id=<?php echo $row[0]; ?>' onclick='return confirm("Are You sure to delete !"); ' ><img class='icon' src='../img/delete.png'></a></td>
                        <?php echo "</tr>";
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
                            $sql="SELECT COUNT(bill_id) FROM bill_add";
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