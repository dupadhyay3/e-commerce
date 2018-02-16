<?php
session_start();
if($_SESSION['User']=="" && $_SESSION['User']==null){
    //echo "Session is Blank";
    header('location:index.php');
}
// else{
//     echo $_SESSION['User'];
// }
?>