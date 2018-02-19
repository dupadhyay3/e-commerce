<?php
require_once("../includes/connection.php");
require_once("../includes/session.php");
$userName = $_SESSION['User'];

$sql="SELECT last_login FROM admin WHERE aid = $userName";
$result=$conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_array()){
        $loginTime = $row[0];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Home | E-Commerce</title>
    <link rel="stylesheet" href="../css/adminStyle.css">
</head>
<body>
    <?php 
        require_once('../includes/adminHeader.php');
        require_once('../includes/adminLeft.php');
    ?>
    <div class="right-main">
        <ul class="breadcrumb">
            <li><a href="#">Admin Panel</a></li>
            <li>Dashboard</li>
        </ul>
        <div class="footer">&copy; <?php echo date("Y"); ?> E-Commerce Portal. All rights reserved | Design by <a target="_blank" href="https://github.com/dupadhyay3">spyD3R</a></div>
        <div class="clear"></div>
    </div>
</body>
</html>