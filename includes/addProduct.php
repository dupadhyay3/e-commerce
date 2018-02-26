<!-- For Add Product Details AJAZ -->
<?php
    require_once("../includes/session.php");
    require_once("../includes/connection.php");
    
    print_r($_POST);
    print_r($_FILES);

    $name = $_POST['name1']; //fatching value from URL
    $sku = $_POST['sku1']; //fatching value from URL
    $price = $_POST['price1']; //fatching value from URL
    $main = $_POST['main1']; //fatching value from URL
    $sub = $_POST['sub1']; //fatching value from URL
    $img = $_POST['img1']; //fatching value from URL
    $stock = $_POST['stock1']; //fatching value from URL
    $sql = "INSERT INTO productDetails (pName,pSKU,pPrice, pcmId, pcsId, pImage,pStock) VALUES ('$name', '$sku', $price, $main, $sub, '$img', '$stock')";
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