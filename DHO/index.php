<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DHO Login</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TITLE OF SITE -->
 <title>Zombiz</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>


        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link href="assets/css/bootsnav.css" rel="stylesheet"/>	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
      
	<style>
	.button-solid {
    border: none;
}
button-solid:focus {
    border: none;
    outline: none;
}
button[type="submit"] {

  border-style: none;

  color: #0000ff;
  outline-style: none;

  }
</style>

</head>
<body>
<?php
	$con=mysqli_connect("localhost","root","") or die(mysqli_error());
	$db=mysqli_select_db($con,"hospitalmce") or die(mysqli_error());
$dcode="1015";
$psw="1015";


if(isset($_POST['dho_login']))
	{
		@extract($_POST);

		$usql1=mysqli_query($con,"select * from districts where dcode=$usn1 and psw='$usn1'") or die(mysqli_error());
		$dist = $usql1->fetch_assoc();
		if(mysqli_num_rows($usql1)==1)
		{
			session_start();
			$_SESSION['dho_login']=$dist['dist'];
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('Successfully Login')
					 window.alert('$_SESSION[dho_login]')
					 window.location.href='http://localhost/SmartHospital/DHO/districts.php';
								</SCRIPT>");
			
		}
		else
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Invalid Login id and Psw");
		}
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
          <li class="active"><a href="../main/mainscreen.html">Home</a></li>
          <li><a href="http://localhost/SmartHospital/DHO/THO.php" data-toggle="modal" data-target=".bs-example-modal-sm">DHO Login</button></a></li>

		 
          <li><a href="http://localhost/SmartHospital/THO.php">THO Login</button></li>
          <li class="last"><a href="#.html">Remarks</a></li>
        </ul>


       
          <form  action="http://localhost/SmartHospital/search/index.php" method="post" >
            <span>
            <input name="ser" type="text" class="keywords" id="textfield" maxlength="50" placeholder="Search..." />
            </span>
			 <input type="button"  style='outline-style: none;' name="Search" onclick="this.form.target='_blank';return true;"  class='btn btn-link btn-xs'  value="Search"/>
          </form>
		  <div class="search"> 
      </div>


      </div>



      <div class="clr"></div>
      <div class="header_img"> <img src="images/heder_img1.jpg" alt="" width="960" height="288" /></div>
    </div>
  </div>



  <div class="clr"></div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>District Health and Family welfare Office</span></h2>
          <p>Posted on 18. Sep, 2015 by Sara in Filed under templates, internet, with Comments 18</p>
          <img src="images/img_1.png" width="613" height="179" alt="" />
          <div class="clr"></div>
          <p>The tobacco epidemic is one of the biggest public health threats the world has ever faced, killing more than 8 million people a year around the world. More than millions of those deaths are the result of direct tobacco use while around 1.2 million are the result of non-smokers being exposed to second-hand smoke. Around 80% of the 1.1 billion smokers worldwide live in low- and middle income countries, where the burden of tobaccorelated illness and death is heaviest. Tobacco use contributes to poverty by diverting household spending frombasic needs such as food and shelter to tobacco. Government of Indialaunched the National Tobacco Control Programme (NTCP) in the year 2007-08,during the 11th Five-Year-Plan. Baseline data generated through the Global Adult Tobacco Survey (GATS) India 2009-2010, indicating high level of prevalence of tobacco use, it was up scaled in the 12th Five Year Plan with a goal to reduce the prevalence of tobacco use by 5% by the end of the 12th FYP. As per the second round of GATS, the number of tobacco users has reduced by about 81 lakhs (8.1 million). All 30 Districts of Karnataka NTCP was implemented rest of 12 new District of Karnataka, </p>
          <p><a href="#">Read more </a></p>
        </div>



        <div class="article">
          <h2><span>OBJECTIVES OF </span> DHO :</h2>
          <div class="clr"></div>
          <p>Posted on 18. Sep, 2015 by Sara in Filed under templates, internet, with Comments 18</p>
          <img src="images/img_1.jpg" width="613" height="179" alt="" />
          <div class="clr"></div><br>
          <p>(i) Create awareness about the harmful effects of tobacco consumption.<br>

(ii) Reduce the production and supply of tobacco products.<br>

(iii) Ensure effective implementation of the provisions under “The Cigarettes and Other Tobacco Products (Prohibition of Advertisement and Regulation of Trade and Commerce, Production,      

      Supply and Distribution) Act, 2003” (COTPA)<br>

(iv) Help the people quit tobacco use, and<br>

(v) Facilitate implementation of strategies for prevention and control of tobacco advocated by WHO Framework Convention of Tobacco Control.</p><br>
          <p>Maecenas dignissim mauris in arcu congue tincidunt. Vestibulum elit nunc, accumsan vitae faucibus vel, scelerisque a quam. Aenean at metus id elit bibendum faucibus. Curabitur ultrices ante nec neque consectetur a aliquet libero lobortis. Ut nibh sem, pellentesque in dictum eu, convallis blandit erat. Cras vehicula tellus nec purus sagittis id scelerisque risus congue. Quisque sed semper massa. Donec id lacus mauris, vitae pretium risus. Fusce sed tempor erat. </p>
          <p><a href="#">Read more </a></p>
        </div>
        <div class="article" style="padding:5px 20px 2px 20px;">
          <p>Page 1 of 2 <span class="butons"><a href="#">3</a><a href="#">2</a> <a href="#" class="active">1</a></span></p>
        </div>
      </div>

<!-- //**************************************************************************************************************** -->

      <div class="sidebar">

        <div class="gadget">
          <h3>DISTRICTS OF KARNATAKA Code</h3>
          
          <ul class="sb_menu">
      <?php 
	  $usql2=mysqli_query($con,"select * from districts") or die(mysqli_error());
	   while ($dist1 = $usql2->fetch_assoc()) 
        { 

	  echo "
	  <li><a data-toggle='modal'href='index.php?dcode=$dist1[dcode]'>($dist1[dcode]).$dist1[dist]</a></li>";}
	  ?>

			<!-- <li><a href="#">(1001)Bagalkot</a></li>
			<li><a href="#">(1002)Ballari (Bellary)</a></li>
			<li><a href="#">(1003)Belagavi (Belgaum)</a></li>
			<li><a href="#">(1004)Bengaluru (Bangalore) Rural</a></li>
			<li><a href="#">(1005)Bengaluru (Bangalore) Urban</a></li>
			<li><a href="#">(1006)Bidar</a></li>
			<li><a href="#">(1007)Chamarajanagar</a></li>
			<li><a href="#">(1008)Chikballapur</a></li>
			<li><a href="#">(1009)Chikkamagaluru (Chikmagalur)</a></li>
			<li><a href="#">(1010)Chitradurga</a></li>
			<li><a href="#">(1011)Dakshina Kannada</a></li>
			<li><a href="#">(1012)Davangere</a></li>
			<li><a href="#">(1013)Dharwad</a></li>
			<li><a href="#">(1014)Gadag</a></li>
			<li><a href="#">(1015)Hassan</a></li>
			<li><a href="#">(1016)Haveri</a></li>
			<li><a href="#">(1017)Kalaburagi (Gulbarga)</a></li>
			<li><a href="#">(1018)Kodagu</a></li>
			<li><a href="#">(1019)Kolar</a></li>
			<li><a href="#">(1020)Koppal</a></li>
			<li><a href="#">(1021)Mandya</a></li>
			<li><a href="#">(1022)Mysuru (Mysore)</a></li>
			<li><a href="#">(1023)Raichur</a></li>
			<li><a href="#">(1024)Ramanagara</a></li>
			<li><a href="#">(1025)Shivamogga (Shimoga)</a></li>
			<li><a href="#">(1026)Tumakuru (Tumkur)</a></li>
			<li><a href="#">(1027)Udupi</a></li>
			<li><a href="#">(1028)Uttara Kannada (Karwar)</a></li>
			<li><a href="#">(1029)Vijayapura (Bijapur)</a></li>
			<li><a href="#">(1030)Yadgir</a></li> -->
          </ul>
        </div>



       <div class="gadget">
          <h2><span>Sponsors sdfsdfsdf</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
            <li><a href="#">Apolo Hospital</a><br />
              Donec libero. Suspendisse bibendum</li>
            <li><a href="#">Ramya Hospital Bangalore</a><br />
              Phasellus suscipit, leo a pharetra</li>
            <li><a href="#">Munipal Hospital</a><br />
              Tellus eleifend magna eget</li>
            
          </ul>
        </div>

       <div class="gadget">
          <h2>Wise Words</h2>
          <div class="clr"></div>
          <p> <img src="images/test_img_1.gif" alt="" width="19" height="18" /> <em>We can let circumstances rule us, or we can take charge and rule our lives from within </em>.<img src="images/test_img_2.gif" alt="" width="19" height="18" /></p>
          <p style="float:right;"><strong>Earl Nightingale</strong></p>
        </div>

 

      </div>
      <div class="clr"></div>
    </div>
  </div>




  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image Gallery</span></h2>
        <a href="#"><img src="images/lab.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/gallery_2.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/gallery_3.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/gallery_4.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/gallery_5.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/gallery_6.jpg" width="58" height="58" alt="" /></a> </div>
      <div class="col c2">
        <h2><span>Lorem Ipsum</span></h2>
        <p>Lorem ipsum dolor<br />
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam</a>, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.</p>
      </div>
      <div class="col c3">
        <h2><span>Contact</span></h2>
        <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida gravida eu porttitor dui. Nulla pharetra, mauris vitae interdum dignissim, justo nunc suscipit ipsum. <a href="#">mail@example.com</a><br />
          <a href="#">+1 (123) 444-5677</a></p>
      </div>

      <div class="clr"></div>
    </div>


 <!-- small modal -->



							<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
								<div class="modal-dialog modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-header">
											 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											 	<span aria-hidden="true">
											 		<i class="fa fa-close"></i>
											 	</span>
											 </button> 
											<h4 class="modal-title" id="mySmallModalLabel">
												DHO Sign In
											</h4> 
								     <?php if (isset($_GET['dcode'])) 
									{
										$dcode = $_GET['dcode'];
									}?>
											<form action="" name='dho_login' method="POST">
												<label>Distract ID :</label>
												<input type="text" class="form-control" value=<?php echo $dcode;?> name="usn1" placeholder="id">
												<label>Password :</label>
												<input type="password" class="form-control" name="psw" placeholder="Enter Passoward">
                                                 <br> 
												<label><input type="checkbox" name="personality"> Remenber Me</label>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="submit" class="btn btn-default"  name="dho_login" >
											
											</form>
										</div>
									</div>
								</div>
							</div>



    <div class="footer">
      <p class="lf">Copyright &copy; <a href="#">Ideal Computers</a>. All Rights Reserved</p>
      <p class="rf">Design by <a target="_blank" href="http://www.idealcomputereducation.com/">Ideal Computer Education</a></p>
      <div class="clr"></div>
    </div>



  </div>
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
