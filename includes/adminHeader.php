<?php
$userName = $_SESSION['User'];
$sql="SELECT last_login FROM admin WHERE email = '$userName'";
$result=$conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_array()){
        $loginTime = $row[0];
    }
}
?>
<div class="header">
    <span class="logo">Admin Panel</span>
    <span class="logTime">Last Login : <?php echo $loginTime; ?></span>
    <span><a href="../includes/logout.php">Logout</a></span>
</div>