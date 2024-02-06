<?php

	 session_start();
   
	if(!isset($_SESSION['sub_adm']))
	{
		header("location:../");
	}
	else
	{
		$sub_adm=$_SESSION['sub_adm'];
	}

	error_reporting(0);
	$con=mysqli_connect("localhost","root","") or die(mysqli_error());
	$db=mysqli_select_db($con,"hospitalmce") or die(mysqli_error());

    $array = $con->query("select * from hospitals where hid ='$sub_adm'");
    $hos = $array->fetch_assoc();

	$base_path = "http://localhost/SmartHospital/";

?>