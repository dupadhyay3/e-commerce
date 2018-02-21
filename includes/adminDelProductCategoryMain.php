<?php
if(isset($_GET['delete_id']))
{
    $sql="DELETE FROM pCategoryMain WHERE pcmId=".$_GET['delete_id'];
    $conn->query($sql);
    header("Refresh: 0.1; url=../admin/productCategory.php");
}
?>