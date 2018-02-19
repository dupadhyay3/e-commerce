<?php
session_start();
// echo $_SESSION['User'];
if(($_SESSION['User'] == '') || (!isset($_SESSION['User']))){
    $link="/admin/index.php";
    if($_SERVER['PHP_SELF']!=$link){
        // echo $_SERVER['PHP_SELF'];
        header('location:../admin/index.php');
    }
}else{
    $link2="/admin/home.php";
    if($_SERVER['PHP_SELF']!=$link2){
        // echo $_SERVER['PHP_SELF'];
        header('location:../admin/home.php');
    }
}
//$_SESSION['User'];
?>