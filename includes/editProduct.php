<?php
// For Update Product Details AJAX
    require_once("../includes/session.php");
    require_once("../includes/connection.php");

    $id = $_POST['id']; //fatching value from Previous Page
    $name = $_POST['txtPName']; //fatching value from Previous Page
    $sku = $_POST['txtPSKU']; //fatching value from Previous Page
    $price = $_POST['txtPPrice']; //fatching value from Previous Page
    $main = $_POST['txtMain2']; //fatching value from Previous Page
    $sub = $_POST['txtSub2']; //fatching value from Previous Page
    // $img = $_FILE['fileImg']['name']; //fatching value from Previous Page
    $stock = $_POST['txtPStock']; //fatching value from Previous Page
    
    if(!$_FILES['fileImg']['size'] == 0 || !$_FILES['fileImg']['name'] == "") {
        $check = getimagesize($_FILES["fileImg"]["tmp_name"]);
        if($check !== false){
            $image = $_FILES['fileImg']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));

            $sql = "UPDATE product_details SET p_name = '$name', p_sku = '$sku', p_price = $price, pcm_id = $main, pcs_id = $sub, p_image = '$imgContent', p_stock = '$stock' WHERE p_id = $id";
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
        }
    }else{
        $sql = "UPDATE product_details SET p_name = '$name', p_sku = '$sku', p_price = $price, pcm_id = $main, pcs_id = $sub, p_stock = '$stock' WHERE p_id =$id";
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
    }
    $conn->close();
?>