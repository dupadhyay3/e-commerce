<?php
require_once("../includes/session.php");
require_once("../includes/connection.php");
if(isset($_GET['delete_id']))
{
    $sql="DELETE FROM pCategoryMain WHERE pCategoryMain.pcmId=".$_GET['delete_id'];
    $conn->query($sql);
    echo $conn->error;
    header("Refresh: 0.1; url=../admin/productCategory.php");
}
$conn->close();
?>