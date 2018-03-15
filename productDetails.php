<?php
require("includes/connection.php");
$main = $_GET['main'];
$sub = $_GET['sub'];

if($main != null){  
    
}else if($sub != null){

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <title>Home | e-Commerce Portal</title>
    <link rel="stylesheet" href="css/clientStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/clientScript.js"></script>
</head>
<body>
    <?php require_once('includes/clientHeaderCart.php'); ?>
    <?php require_once('includes/clientHeaderMenu.php'); ?>
    <div class="container">
        <?php
            if($main != null){
                $sqlMain = "SELECT p.pcm_id, m.pcm_name FROM product_details p JOIN p_category_main m ON m.pcm_id = p.pcm_id WHERE p.pcm_id = $main GROUP BY (p.pcm_id)";
                $resultMain=$conn->query($sqlMain); 
                if($resultMain->num_rows > 0){
                    while($row = $resultMain->fetch_array()){
                        echo '<div class="list-header">'.$row[1].'</div>';
                        echo  '<div class="container-horizontal-list">';
                        $sql="SELECT p.p_id, p.p_image, p.p_name, p.p_price FROM product_details p JOIN p_category_main m ON m.pcm_id = p.pcm_id WHERE p.pcm_id = $row[0] GROUP BY (p.p_id)";
                        $result=$conn->query($sql);
                        if($result->num_rows > 0){
                            while($row1 = $result->fetch_array()){
                                echo '
                                <div class="card">
                                    <img src="data:image/*;base64,'.base64_encode( $row1[1] ).'" onerror="."this.src="../img/NoImg.png";"/>
                                    <hr>
                                    <div class="card-container">
                                        <h4><b>'.$row1[2].'</b></h4>
                                        <p><i class="fa fa-inr"></i> '.$row1[3].'</p>
                                        <datalist id="qty">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </datalist>
                                        Qty <input value="1" class="card-qty" type="text" list="qty" id="'.$row1[0].'" name="'.$row1[0].'">
                                    </div>
                                    <hr>
                                    <div class="card-btn">
                                        <button class="addToCart"><i class="fa fa-cart-arrow-down"></i> Add to Cart</button>
                                        <span class="vl">|</span>
                                        <button id="moreDetailsBtn" class="moreDetails"><i class="fa fa-list"></i> More Details</button>
                                    </div>
                                </div>
                                ';
                            }
                        }
                        echo '</div>';
                    }
                }else{
                    header("location: index.php");
                }
            }else if($sub != null){
                $sqlSub = "SELECT p.pcs_id, s.pcs_name FROM product_details p JOIN p_category_main m ON m.pcm_id = p.pcm_id JOIN p_category_sub s ON s.pcs_id = p.pcs_id AND s.pcm_id = m.pcm_id WHERE p.pcs_id = $sub GROUP BY (p.pcs_id)";
                $resultSub=$conn->query($sqlSub); 
                if($resultSub->num_rows > 0){
                    while($row = $resultSub->fetch_array()){
                        echo '<div class="list-header">'.$row[1].'</div>';
                        echo  '<div class="container-horizontal-list">';
                        $sql="SELECT p.p_id, p.p_image, p.p_name, p.p_price FROM product_details p JOIN p_category_main m ON m.pcm_id = p.pcm_id JOIN p_category_sub s ON s.pcm_id = m.pcm_id AND s.pcm_id = m.pcm_id WHERE p.pcs_id = $row[0] GROUP BY (p.p_id)";
                        $result=$conn->query($sql);
                        if($result->num_rows > 0){
                            while($row1 = $result->fetch_array()){
                                echo '
                                <div class="card">
                                    <img src="data:image/*;base64,'.base64_encode( $row1[1] ).'" onerror="."this.src="../img/NoImg.png";"/>
                                    <hr>
                                    <div class="card-container">
                                        <h4><b>'.$row1[2].'</b></h4>
                                        <p><i class="fa fa-inr"></i> '.$row1[3].'</p>
                                        <datalist id="qty">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </datalist>
                                        Qty <input value="1" class="card-qty" type="text" list="qty" id="'.$row1[0].'" name="'.$row1[0].'">
                                    </div>
                                    <hr>
                                    <div class="card-btn">
                                        <button class="addToCart"><i class="fa fa-cart-arrow-down"></i> Add to Cart</button>
                                        <span class="vl">|</span>
                                        <button id="moreDetailsBtn" class="moreDetails"><i class="fa fa-list"></i> More Details</button>
                                    </div>
                                </div>
                                ';
                            }
                        }
                        echo '</div>';
                    }
                }else{
                    header("location: index.php");
                }
            }else{
                header("location: index.php");
            }
        ?>
    </div>
    <?php require_once('includes/clientFooter.php'); ?>
</body>
</html>