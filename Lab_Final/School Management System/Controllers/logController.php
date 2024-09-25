<?php
    session_start();
	require_once('../Models/alldb.php');
    if (isset($_GET['admin']))
	{
		header('location:../Views/admin login.php');
	}
    
	if (isset($_GET['Faculty']))
	{
		header('location:../Views/facultylog.php');
	}
    
    if (isset($_GET['adLogin']))
	{
		$id=$_GET['id'];
		$name=$_GET['name'];
		$pass=$_GET['pass'];
		if (empty($id) || empty($name) || empty($pass))
		{
			$_SESSION['error']="Please fill the form!";
			header('location: ../Views/adminLog.php');
		}
		else
		{
			if (is_numeric($id))
			{
				if (mysqli_num_rows(adCheck($id))==1)
				{
					$_SESSION['name']=$name;
					header('location: ../Views/adHome.php');
				}
				else
				{
					$_SESSION['error']="Incorrect login!";
					header('location: ../Views/admin login.php');
				}
			}
			else
			{
				$_SESSION['error']="Id must be numeric!";
				header('location: ../Views/admin login.php');
			}
		}
	}
   
   
?>