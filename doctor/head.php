<?php
	include_once("db.php");
?>

  <style type="text/css">
  <?php include 'css/customStyle.css'; ?>
  </style>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">  
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">

	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
		
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

  <body style="background: #ECF0F5;padding:0;margin:0">

  <nav>
  <div style="background: #1A2226;font-size: 11pt;padding: 18px;color: #d7d7d7;">Remote Health Monitering System
	  <ul  id="navli">
                <li ><a  class="homeblack" href="index.php">HOME</a></li>   
					<li>
					  
					   </li>
			<li><a class="homeblack" href="logout.php">Log Off</a></li>
	       </ul>

	</div>
 </nav>
<!-- <div class="divider"></div> -->


  <div class="dashboard" style="position: fixed;width: 15%;height: 100%;background:#222D32">  <!--#79978F #357CA5 #1A2226 #222D32 -->
  <div style="background:#222D32;padding: 8px 3px;color:white;font-size: 15pt;text-align: center;text-shadow: 1px 1px 11px white"><a href="index.php" style="color: white;text-decoration: none;"><?php echo "Main Menu"; ?> </a>
  </div>
  <div class="flex" style="padding: 3px 7px;margin:5px 2px;">
    <div><img src="../main/logo.png" class='img-circle' style='width: 77px;height: 66px'></div>
    <div style="color:lightgreen;font-size: 13pt;padding: 14px 7px;margin-left: 11px;">
	<?php echo "<B><center>Doctor</center></B> <a href='logoff.php'><font style=color:#ff6600>Log Off</font></a> "; ?></div>
  </div>


<div style="background:#1E282C;color: white;padding: 13px 25px;border-both: 3px solid #ffffff;">
<span><i class="fa fa-dashboard fa-fw"></i> Dashboard</span></div>
	<div class="item" style="background:#1E282C;color: white;padding: 13px 17px;">
		  <ul class="nostyle zero" >
			<a href="visited.php"><li style="color: white;font-size:10pt;padding: 10px 15px;"><i class="fa fa-circle-o fa-fw"></i>Doctor Hospital List</li></a>
			<a href="Patitent.php"><li style="align-text:center;font-size: 10pt;padding: 10px 15px;"> <i class="fa fa-circle-o fa-fw"></i>Patient List</li></a>
		   <a href="treatment.php"><li style="align-text:center;font-size: 10pt;padding: 10px 15px;"><i class="fa fa-circle-o fa-fw"></i>Treatment Report</li></a>
			<a href="reports.php"><li style="font-size: 10pt;padding: 10px 15px;"><i class="fa fa-circle-o fa-fw"></i>All Patitent Report</li></a>
		  </ul>
		</div>
		<br><br><br><br>
	<img src="doc2.webp" width="80px" height="180px" border="0" alt=""> 
		
		</div>













<!--footer -->
	<div class="footer";> 
		<p>© 2022  All Rights Reserved |Design by Ideal Computer Education  <font size="3" color="">Ph : :9844438331</font></p>
	 </div> 
<!--/footer -->
