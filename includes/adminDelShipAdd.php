<?php
if(isset($_GET['delete_id']))
{
    $sql="DELETE FROM shipAdd WHERE shipId=".$_GET['delete_id'];
    $conn->query($sql);
    header("Refresh: 0.1; url=../admin/customerAddress.php");
}
?>