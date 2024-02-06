<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DHO Login</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
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
.button-solid {
    border: none;
}
button-solid:focus {
    border: none;
    outline: none;
}
button[type="submit"] {

  border-style: none;

  color: #ff5b5b;
  outline-style: none;

  }
</style>
</head>
<body style="margin:0; padding: 0;">



<?php
	include_once("db.php");

	/*function dname1($did)
{	
	global $con;
	
	$didd = $con->query("select * from doctor where did='$did'");
	$drow = $didd->fetch_assoc();
	return $drow['dname'];
} -->*/

function hname1($hid)
{	
	global $con;
	
	$hidd = $con->query("select * from hospitals where hid='$hid'");
	$row = $hidd->fetch_assoc();
	return $row['hname'];
}
	?>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
	  <img src="logo.png" width="40" alt="">
        <h2> <a  href="mainscreen.html">
           Remote Health Monitering System </a></h2>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="http://localhost/SmartHospital/DHO/index.php">Home</a></li>
          <li><a href="#.html">About Us</a></li>
          <li class="last"><a href="#.html">Remarks</a></li>
		  <li><a href="http://localhost/SmartHospital/DHO/logout.php" data-toggle="modal" data-target=".bs-example-modal-sm">Login Out</a></li>
        </ul>


        <div style='float:right'>
          <form  action="http://localhost/SmartHospital/search/index.php" method="post" >
            <span>
            <input name="ser" type="text" class="keywords" id="textfield" maxlength="50" placeholder="Search..." />
            </span>
			 <input type="submit"  style='outline-style: none;' name="Search" onclick="this.form.target='_blank';return true;"  class='btn btn-link btn-xs'  value="Search"/>
          </form></div>


		   <div class="search">
        </div>

      </div>

<?php
 $tal = $con->query("select distinct(taluk) 'tna' from pat_view");
  while ($taluk = $tal->fetch_assoc()) 
        { 
echo "<h2><p>District :". $dho_login."//".$taluk['tna']."</p></h2>";?>
 <div>
    <table width="100%">
      <thead align="left" style='background-color:#a5cff1;'>
        <th >#</th>
        <th>pid</th>
        <th>pname</th>
		 <th>Age</th>
        <th>Disease</th>
        <th>Doctor</th>
        <th>Hospital</th>

      </thead>
     <tbody>


 <?php 

 $array = $con->query("select * from pat_view where taluk='$taluk[tna]'");
 $i=0;
        while ($row = $array->fetch_assoc()) 
        { 
          $i=$i+1;
        
        ?>
          <tr >
            <td><?php echo $i; ?></td>
            <td><form method='post' action="http://localhost/SmartHospital/search/index.php">
			<input type='hidden' name='ser' value=<?php print"$row[pid]";?>>
			<button  type='submit'  style='outline-style: none;' onclick="this.form.target='_blank';return true;" class='btn btn-link btn-xs'  name="Search" ><?php print"$row[pid]";?></button></form></td>
            <td><?php echo $row['pname']; ?></td>   
			<td><?php echo $row['age']; ?></td>
            <td><?php echo $row['Disease']; ?></td>
			<td><?php echo $row['dname']; ?></td>
			<td><?php echo hname1($row['hid']); ?></td>
         
            
</tr>
      <?php
        }
       ?>
     </tbody>
    </table>
  </div>                      
<?php }?>
  </div>  <!-- ending tag for content -->


  </div>
</div>








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
</body>
</html>
