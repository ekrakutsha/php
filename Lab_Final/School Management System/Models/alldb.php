<?php
require_once('db.php');
function auth($id,$pass)
{
	$con=con();
	$sql="select * from faculty where ID='$id' and Pass='$pass'";
	$res=mysqli_query($con,$sql);
	return $res;
}

function data()
{
	$con=con();
	$sql="select * from faculty";
	$res=mysqli_query($con,$sql);
	return $res;
}

function delete($id)
{
	$con=con();
	$sql="Delete from faculty where id='$id'";
	$res=mysqli_query($con,$sql);
	return $res ;
}
function add($name,$id,$email,$pass)
{
	$con=con();
	$sql="Insert into faculty values ('$name','$id','$email','$pass')";
	$res=mysqli_query($con,$sql);
	return $res;
}
?>