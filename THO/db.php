<?php

	 session_start();
	 	$sub_tal=$_SESSION['sub_adm1'];
		$dist=$_SESSION['sub_taluk'];

	 /*	if(!isset($_SESSION['sub_tal']))
	{
		header("location:../");
	}
	else
	{
		
		$sub_tal=$_SESSION['sub_tal'];
		$dho_login=$_SESSION['dho_login'];
	}*/

	error_reporting(0);
	$con=mysqli_connect("localhost","root","") or die(mysqli_error());
	$db=mysqli_select_db($con,"hospitalmce") or die(mysqli_error());



$con->query("create or replace view pat_view as select p.pid,p.adimin,p.pname,p.age,p.Disease,p.did,p.hid,p.district,p.taluk from patient p where p.district='$dist' and p.taluk='$sub_tal' ");




	$base_path = "http://localhost/SmartHospital/DHO";









?>