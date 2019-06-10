<?php

$servername="localhost";
$username="root";
$password="";
$dbname="task2";


$conn=mysqli_connect($servername, $username, $password, $dbname) or die(mysqli_error());

if(!$conn){
	echo "Error: something went wrong";
}


?>