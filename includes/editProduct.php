<?php
// For Add Product Details AJAZ
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

            $sql = "UPDATE productDetails SET pName = '$name', pSKU = '$sku', pPrice = $price, pcmId = $main, pcsId = $sub, pImage = '$imgContent', pStock = '$stock' WHERE pId = $id";
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
        echo $sql = "UPDATE productDetails SET pName = '$name', pSKU = '$sku', pPrice = $price, pcmId = $main, pcsId = $sub, pStock = '$stock' WHERE pId =$id";
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