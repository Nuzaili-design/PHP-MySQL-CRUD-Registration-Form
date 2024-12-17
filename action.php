<?php
$servername="localhost";
$username="root1";
$password="";
$dbname="form";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die ("Connection failed" .$conn->connect_error);
}


?>