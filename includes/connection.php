<?php
$host="localhost";
$username="root";
$password="root";
$dbname="e_commerce";
$conn=new mysqli($host,$username,$password,$dbname);

//check connection 
if($conn -> connect_error){
    die("Connection Failed". $conn -> connect_error."<br>");
}
// else{
//     echo "Connected Successfully <br>";
// }
?>