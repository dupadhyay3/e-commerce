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
    <title>Cutomer Details | E-Commerce</title>
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
            <li>Customer Details</li>
        </ul>
        <div class="main-content">
            <div style="overflow-x:auto">
                <table border=1 align="center">
                        <tr>
                            <th>CustId</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Gender</th>
                            <th>Mobile No.</th>
                            <th>Delete</th>   
                        </tr>
                        <?php
                            $sql = "SELECT (custId, FirstName, LastName,Email,Pwd,Gender,MobNo) FROM customerDetails";
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
                                        <td><a href='../includes/adminDelCustomer.php?delete_id=<?php echo $row[0]; ?>' onclick='return confirm('Are You sure to delete !'); ' >Delete</a></td>
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
            </div>
        </div>
    </div>
    <?php require_once('../includes/adminFooter.php'); ?>
</body>
</html>