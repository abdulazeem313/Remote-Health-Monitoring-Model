<?php
    include_once("db.php");

	session_start();
	//Admin session
	if(isset($_SESSION['sub_adm']))
	{
		header("location:admin/");
	}
	
///*************************************************************************************************************************************************************************************************	

	if(isset($_POST['sub_adm']))
	{
		@extract($_POST);

		$usql=mysqli_query($con,"select * from hospitals where hid='$usn' and psw='$psw'") or die(mysqli_error());
		
		if(mysqli_num_rows($usql)==1)
		{
			$_SESSION['sub_adm']=$usn;
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('Successfully Login')
					 window.location.href='http://localhost/SmartHospital/admin/index.php';
								</SCRIPT>");
			//header("location:admin/index.php");
		}
		else
		{
			$umsg="Login info is not Correct";
		}
	}
///*************************************************************************************************************************************************************************************************

	if(isset($_POST['sub_adm1']))
	{
		@extract($_POST);

		$usql=mysqli_query($con,"select * from THO where usn='$usn' and psw='$psw'") or die(mysqli_error());
		
		if(mysqli_num_rows($usql)==1)
		{
			$_SESSION['sub_adm1']=$taluk;
			$_SESSION['sub_taluk']=$dist;

			echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('Successfully Login')
					 window.location.href='http://localhost/SmartHospital/THO/index.php';
								</SCRIPT>");
			//header("location:admin/index.php");
		}
		else
		{
			$umsg="Login info is not Correct";
		}
	}
///*************************************************************************************************************************************************************************************************
///*************************************************************************************************************************************************************************************************	

	if(isset($_POST['sub_doc']))
	{
		@extract($_POST);

		$usql=mysqli_query($con,"select * from doctor where did='$usn' and hid='$psw'") or die(mysqli_error());
		
		if(mysqli_num_rows($usql)==1)
		{
			$_SESSION['sub_doc']=$usn;
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('Successfully Login')
					 window.location.href='http://localhost/SmartHospital/doctor/index.php';
								</SCRIPT>");
			//header("location:admin/index.php");
		}
		else
		{

			echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Login Failed..')
     window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
		}
	}
///*************************************************************************************************************************************************************************************************


?>