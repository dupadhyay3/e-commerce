<?php
// For Product Sub Category AJAX
    require_once("../includes/session.php");
    require_once("../includes/connection.php");
    $sql = "SELECT * FROM pCategorySub WHERE pcmId =".$_POST['id'];
    $result = $conn->query($sql);
    $json=[];
    while($row = $result->fetch_array()){
        $json[$row[0]] = $row[2];
    }
    echo json_encode($json);
?>