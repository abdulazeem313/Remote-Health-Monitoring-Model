<?php

	include_once("db.php");
?>

  <style type="text/css">
  <?php include 'css/customStyle.css'; ?>
  </style>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">  
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link href="style.css" rel="stylesheet" type="text/css" />
		



<style>
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
body {font-family: Arial, Helvetica, sans-serif;}



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


    <div class="footer">
      <p class="lf">Copyright &copy; <a href="#">Ideal Computers</a>. All Rights Reserved</p>
      <p class="rf">Design by <a target="_blank" href="http://www.idealcomputereducation.com/">Ideal Computer Education</a></p>
      <div class="clr"></div>
    </div>





<!-- jaquery link -->

		<script src="assets/js/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        
        <!--modernizr.min.js-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		
		<!--bootstrap.min.js-->
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>
		
		<!-- for manu -->
		<script src="assets/js/jquery.hc-sticky.min.js" type="text/javascript"></script>

		
		<!-- vedio player js -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>


		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <!--owl.carousel.js-->
        <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
		
		<!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>
		
        <!--Custom JS-->
        <script type="text/javascript" src="assets/js/jak-menusearch.js"></script>
        <script type="text/javascript" src="assets/js/custom.js"></script>