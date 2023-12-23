<?php
$servername = "localhost";
$usernamee="root";
$password ="";
$dbnamee="workwise";

$conn= mysqli_connect($servername,$username,$password,$password,$dbnaame);


if(!conn){
    die("Connection Failed : ".mysqli_connect_error());
}

?>