<?php
    require_once("../includes/session.php");
    require_once("../includes/connection.php");

    $cust_id = ctype_digit($_POST['cust_id']); //fatching value from URL
    $p_id = ctype_digit($_POST['p_id']); //fatching value from URL
    $p_qty = ctype_digit($_POST['p_qty']); //fatching value from URL

    $sqlPrice = "SELECT p_price FROM product_details WHERE p_id= $p_id";
    $res = $conn->query($sqlPrice);
    if($row = $res->fetch_array() == 1){
        while($row){
            $sub_total = $p_qty * $row[0];
        }
    }else{
        echo "Error:". $conn->error;
    }
    
    $ql = "INSERT INTO cart (cust_id, p_id, qty, sub_total) VALUES ($cust_id, $p_id, $p_qty, $sub_total)";
    if ($conn->query($sql) === TRUE) {
        echo "Record Added Successfully";
    }else{
        echo "Error:". $conn->error;
    }
    $conn->close();
?>