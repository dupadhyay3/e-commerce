<?php      
include_once('../includes/session.php');
session_unset();
session_destroy();
unset($_SESSION['User']);
header("Refresh: 0.1; url=../admin/index.php");
?>