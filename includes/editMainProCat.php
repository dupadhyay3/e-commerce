<?php
    require_once("../includes/session.php");
    require_once("../includes/connection.php");
    $id = $_POST['id']; //fatching value from URL
    $mainCategory = $mysqli->real_escape_string($_POST['main1']); //fatching value from URL
    $sql = "UPDATE pCategoryMain SET pcmName = '$mainCategory' WHERE pcmId = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Record Updated Successfully";
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