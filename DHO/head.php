<?php

	include_once("db.php");
?>

  <style type="text/css">
  <?php include 'css/customStyle.css'; ?>
  </style>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">  
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
		
<style>

body {font-family: Arial, Helvetica, sans-serif;}

.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  margin: 0px;
  float: right;
  width: 100%;
  padding: 5px;
 /*background: #141114; */
  height: 25px;
  text-align: center;
  background: #1A2226;
  font-size: 10pt;
  color: #79978F;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #000000;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: #ffffff;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #000;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>

  <body style="background: #ECF0F5;padding:0;margin:0" id="top">


  <nav>
  <div style="background: #1A2226;font-size: 11pt;padding: 18px;color: #d7d7d7;">
  <img src="../main/logo.png" class='img-circle' style='width: 33px;height: 30px'>
  Remote Health Monitering System
	  <ul  id="navli">
                <li ><a  class="homeblack" href="index.php">HOME</a></li>   
					<li>
					     <div class="dropdown"><a >New Registration</a>
					  <div  class="dropdown-content">
					 <a class="homeblack" href="patient.php">Patient</a>
				     <a class="homeblack" href="Doctor.php">Doctor</a>
					   </div>
					       </div>
					   </li>
			<li>
					     <div class="dropdown"><a >Report</a>
					  <div  class="dropdown-content">
					    <a class="homeblack" href="pat_report.php">Patient Report</a>
				        <a class="homeblack" href="Doc_report.php">Doctor Details</a>
					   </div>
					       </div>
					   </li>
			
			<li><a class="homeblack" href="logout.php">Sign Out</a></li>
			</div>
 </nav>

<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

<!--footer -->
	<div class="footer";> 
		<p>© 2022  All Rights Reserved |Design by Ideal Computer Education  <font size="3" color="">Ph : :9844438331</font></p>
	 </div> 
<!--/footer -->
