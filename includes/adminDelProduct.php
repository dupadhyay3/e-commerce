<?php
require_once("../includes/session.php");
require_once("../includes/connection.php");
if(isset($_GET['delete_id']))
{
    $sql="DELETE FROM product_details WHERE p_id=".intval($_GET['delete_id']);
    if($conn->query($sql) === TRUE){
        echo "Data Deleted Successfully";
        header("Refresh: 0.1; url=../admin/productDetails.php");
    }else{
        echo "Error:". $conn->error;
    }
}
$conn->close();
?>