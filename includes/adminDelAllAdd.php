<?php
require_once("../includes/session.php");
require_once("../includes/connection.php");
if(isset($_GET['delete_id']))
{
    $sql="DELETE FROM address WHERE addId=".$_GET['delete_id']."LIMIT 1";
    $conn->query($sql);
    header("Refresh: 0.1; url=../admin/customerAddress.php");
}
$conn->close();
?>