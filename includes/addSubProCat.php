<?php
    require_once("../includes/session.php");
    require_once("../includes/connection.php");
    $mainCategory = $_POST['main1'];//fatching value from URL
    $subCategory = $_POST['sub1']; //fatching value from URL
    $sql = "INSERT INTO pCategorySub (pcmId, pcsName) VALUES ('$mainCategory','$subCategory')";
    if ($conn->query($sql) === TRUE) {
        echo "Record Added Successfully";
        // echo $popup='<div id="alertMsg" class="alert alert-success">\
        //                 <span id="alertClose" class="closebtn" onclick="this.parentElement.style.display=&#39;none&#39;;">&times;</span>\ 
        //                 Record Added Successfull\
        //             </div>';
    }else{
        echo "Error:". $conn->error;
        // echo $popup='<div id="alertMsg" class="alert alert-danger">\
        //                 <span id="alertClose" class="closebtn" onclick="this.parentElement.style.display=&#39;none&#39;;">&times;</span>\
        //                 Erro: $conn->error;\
        //             </div>';
    }
    $conn->close();
?>