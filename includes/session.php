<?php
session_start();
// echo $_SESSION['User'];
if( ($_SESSION['User'] == '') || (!isset($_SESSION['User'])) ){
    $link="/admin/index.php";
    if($_SERVER['PHP_SELF']!=$link){
        header('location:../admin/index.php');
        exit();
    }
}else{
    // $_SESSION['last_page'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    // header('location:http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]');
    header( 'Content-Type: text/html; charset=utf-8' );
}
?>