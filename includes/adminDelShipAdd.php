<?php
require_once("../includes/session.php");
require_once("../includes/connection.php");
if(isset($_GET['delete_id']))
{
    $sql="DELETE FROM ship_add WHERE ship_id=".$_GET['delete_id'];
    $conn->query($sql);
    header("Refresh: 0.1; url=../admin/customerAddress.php");
}
$conn->close();
?>