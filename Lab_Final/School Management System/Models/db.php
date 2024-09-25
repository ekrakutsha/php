<?php 

function con()
{
	$serverName="localhost";
	$userName="root";
	$password="";
	$dbname="abc";
	$conn=new mysqli($serverName,$userName,$password,$dbname);
	return $conn;
}

?>