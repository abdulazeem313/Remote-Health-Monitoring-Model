<?php

	 session_start();

	 	if(!isset($_SESSION['dho_login']))
	{
		header("location:../");
	}
	else
	{
		
		$dho_login=$_SESSION['dho_login'];
	}

	error_reporting(0);
	$con=mysqli_connect("localhost","root","") or die(mysqli_error());
	$db=mysqli_select_db($con,"hospitalmce") or die(mysqli_error());



$con->query("create or replace view pat_view as select p.pid,p.adimin,p.pname,p.age,p.Disease,d.dname,p.hid,p.district,p.taluk from patient p,doctor d where p.district='$dho_login' and p.did=d.did ");




	$base_path = "http://localhost/SmartHospital/DHO";









?>