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
    <title>Product Category | E-Commerce</title>
    <link rel="shortcut icon" href="../img/favicon.ico" />
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
            <li>Product Category</li>
        </ul>
        <div class="main-content">

            <div class="tab">
                <button id="m" class="tablinks active" onclick="openTab(event, 'Main')">Main Category</button>
                <button id="s" class="tablinks" onclick="openTab(event, 'Sub')">Sub Category</button>
            </div>

            <div id="Main" class="tabcontent" style="display:block;">
                <div class="tab-txt">
                    <table>
                        <tr>
                            <th>pcm_id</th>
                            <th>Main Category</th>
                            <th colspan="2">Action</th>
                        </tr>
                        <?php
                            $limit = 6; 
                            if (isset($_GET["page"])) { 
                                $page  = $_GET["page"]; 
                            } else { $page=1; };  
                            $start_from = ($page-1) * $limit;  
                            
                            $sql = "SELECT pcm_id, pcm_name FROM p_category_main LIMIT $start_from, $limit";
                            $result=$conn->query($sql); 
                            if($result->num_rows > 0){
                                while($row = $result->fetch_array()){
                                    echo "
                                    <tr>
                                        <td>$row[0]</td>
                                        <td>$row[1]</td>";?>
                                        <td colspan="2"><a href='../includes/adminDelProductCategoryMain.php?delete_id=<?php echo $row[0]; ?>' onclick='return confirm("Are You sure to delete !"); ' ><img class='icon' src='../img/delete.png'></a> &nbsp;
                                        <a href='#' onclick="editDetails(<?php echo $row[0]; ?>,'productCategoryMainEdit.php')"><img class='icon' src='../img/edit.png'></a></td>
                        <?php echo "</tr>
                                    ";
                                }
                            }else{
                                echo "  
                                <tr>
                                    <td id='empty' colspan='4'>There's No data found !!!</td>
                                </tr>";
                            }
                        ?>
                    </table>
                    <div align="center">
                        <?php
                            $sql="SELECT COUNT(pcm_id) FROM p_category_main";
                            $result = $conn->query($sql);
                            $row = $result->fetch_array();
                            $total_records = $row[0];
                            $total_pages = ceil($total_records/$limit); 
                        ?>  
                        <div class="pagination">
                            <?php
                                for($i=1;$i<=$total_pages;$i++){
                                    echo "<a href='../admin/productCategory.php?page=".$i."'>".$i."</a>";
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

            <div id="Sub" class="tabcontent">
                <div class="tab-txt">
                    <table>
                        <tr>                            
                            <th>Main Category</th>
                            <th>Sub Category</th>
                            <th colspan="2">Action</th>
                        </tr>
                        <?php
                            $limit = 6; 
                            if (isset($_GET["page"])) { 
                                $page  = $_GET["page"]; 
                            } else { $page=1; };  
                            $start_from = ($page-1) * $limit;  
                            
                            $sql = "SELECT s.pcs_id, m.pcm_name, s.pcs_name  FROM p_category_sub s JOIN p_category_main m ON m.pcm_id = s.pcm_id ORDER BY m.pcm_name ASC, pcs_name ASC LIMIT $start_from, $limit ";
                            $result=$conn->query($sql); 
                            if($result->num_rows > 0){
                                while($row = $result->fetch_array()){
                                    echo "
                                    <tr>
                                        <td>$row[1]</td>
                                        <td>$row[2]</td>"; ?>
                                        <td colspan="2"><a href='../includes/adminDelProductCategorySub.php?delete_id=<?php echo $row[0]; ?>' onclick='return confirm("Are You sure to delete !"); ' ><img class='icon' src='../img/delete.png'></a> &nbsp;
                                        <a href='#' onclick="editDetails(<?php echo $row[0]; ?>,'productCategorySubEdit.php')"><img class='icon' src='../img/edit.png'></a></td>
                        <?php echo "</tr>
                                    ";
                                }
                            }else{
                                echo "  
                                <tr>
                                    <td id='empty' colspan='5'>There's No data found !!!</td>
                                </tr>";
                            }
                        ?>
                    </table>
                    <div align="center">
                        <?php
                            $sql="SELECT COUNT(pcs_id) FROM p_category_sub";
                            $result = $conn->query($sql);
                            $row = $result->fetch_array();
                            $total_records = $row[0];
                            $total_pages = ceil($total_records/$limit); 
                        ?> 
                        <div class="pagination">
                            <?php
                                for($i=1;$i<=$total_pages;$i++){
                                    echo "<a href='../admin/productCategory.php?page=".$i."'>".$i."</a>";
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