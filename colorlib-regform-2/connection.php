<?php

$host="localhost";
$name="root";
$password="";
$dbname="newagro";
$conn= mysqli_connect($host,$name,$password,$dbname);
if(!$conn)
{
	die("database error" . mysqli_error());
}


?>