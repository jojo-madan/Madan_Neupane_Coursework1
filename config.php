<?php

$server = "localhost";
$username = "hotelswastik";
$password = "jojo-madan";
$database = "hotelswastik";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
// else{
//     echo "<script>alert('connection successfully.')</script>";
// }
?>