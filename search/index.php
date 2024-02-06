<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Patitent Info</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

       <!-- Font Awesome -->
	       <link href="../doctor/font-awesome/css/font-awesome.css" rel="stylesheet">  
              <!-- <link href="css/all.min.css" rel="stylesheet"> -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
		<style>

</style>
    </head>

<body>




<?php

	$con=mysqli_connect("localhost","root","") or die(mysqli_error());
	$db=mysqli_select_db($con,"hospitalmce") or die(mysqli_error());


if(isset($_POST['Search']))
	{

   @extract($_POST);

  $array = $con->query("select * from patient where pid =trim('$ser')");
   
	if(!$array)
		{
		 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Patitent ID')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
		}
          
	 else{
          $pat = $array->fetch_assoc();
        }
	}
else
{
  $array = $con->query("select * from patient where pid ='P1001'");
    $pat = $array->fetch_assoc();
}


if (isset($_GET['pid']))
{
	  $pid = $_GET['pid'];
 $array = $con->query("select * from patient where pid ='$pid'");
    $pat = $array->fetch_assoc();
}




?>

    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                <img  class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-3 p-1" src="img/profile.gif" alt="Patitent" >
                <h1 class="font-weight-bold"><?php echo $pat['pname'] ."&nbsp;".$pat['lastname'] ?></h1>
                <p class="mb-4">
                    <?php echo $pat['ph'] ."<br>" ;
					echo $pat['Address'] ."<br>";
					echo $pat['place'] ;					
					?>
                </p>

                <div class="d-flex justify-content-center mb-5">
                    <a class="btn btn-outline-primary mr-2" href="#"><i class="fa fa-twitter icon-border twitter"></i></a>
                    <a class="btn btn-outline-primary mr-2" href="#"><i class="fa fa-facebook icon-border facebook"></i></a>
                    <a class="btn btn-outline-primary mr-2" href="#"><i class="fa fa-google-plus icon-border googleplus"></i></a>
                    <a class="btn btn-outline-primary mr-2" href="#"><i class="fa fa-rss icon-border rss"></i></a>
                </div>
                <a href="" class="btn btn-lg btn-block btn-primary mt-auto">Update Info</a>
            </div>
            <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
                <i class="fas fa-2x fa-angle-double-right text-primary"></i>
            </div>
        </div>



        <div class="content">
            <!-- Navbar Start -->
            <div class="container p-0">
                <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
        
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav m-auto">
                            <a href="../main/mainscreen.html" class="nav-item nav-link" >
								<img src="../main/logo.png" width="40" alt="">
                                Remote Health Monitering System
                            </a>
							 <a href="Tretment.html" class="nav-item nav-link"></a>
                            <a href="Edit.html" class="nav-item nav-link"></a>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Navbar End -->

            <!-- Page Header Start -->
            <div class="container py-1 px-0 bg-primary">
                <div class="row py-2 px-1">
                    <div class="col-sm-6 text-center text-md-left">
                        <h2 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">PID :&nbsp;
						<?php echo $pat['pid'] ;?></h2>
                    </div>
                    <div class="col-sm-6 text-center text-md-right">
                        <div class="d-inline-flex pt-2">
                            <h4 class="m-0 text-white"><a class="text-white" href="">Disease</a></h4>
                            <h4 class="m-0 text-white px-2">:</h4>
                            <h4 class="m-0 text-white"><?php echo $pat['Disease'] ;?></h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page Header End -->
<?php	$hidd = $con->query("select * from hospitals where hid='$pat[hid]'");
	    $row = $hidd->fetch_assoc();  ?>

<table>
<tr>
	<td><marquee behavior="slide" direction="left" scrollamount="10" onmouseover="this.stop()"  onmouseout="this.start()"> 
           <?php echo "<strong><font size='' color='#004891'>". $row['hname']."</font></strong>";?></marquee></td>
	<td><marquee behavior="slide" direction="right" scrollamount="10" onmouseover="this.stop()"  onmouseout="this.start()"> 
           <?php echo "<strong><font size='' color='#b9b9ff'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address : ". $row['address']."</font></strong>";?></marquee></td>
</tr>
</table>




            <!-- About Start -->
            <div class="container bg-white pt-5">
			<center><strong>Patient Treatment Details</strong></center><br>
                <div class="row px-3 pb-5">

                    <div class="col-md-12">

					
                       <table width="100%" >

				     <tr bgcolor=#a7a3fa>
				
					<td ><strong><center>Date</center></strong></td>
					<td><strong>Patitens Name</strong></td>
					<td width="35%"><strong>Medican</strong></td>
					<td width="35%"><strong>Doctor</strong></td>
				
                   </tr>
            

<?php	
	$con=mysqli_connect("localhost","root","") or die(mysqli_error());
	$db=mysqli_select_db($con,"hospitalmce") or die(mysqli_error());

			$harr = $con->query("select * from treatment where pid='$pat[pid]'");
			
				while ($hh=mysqli_fetch_assoc($harr)) 
					{
					?>

                   <tr >
					
					<td><?php echo "<center>".$hh['tdate']."</center>"; ?></td>
					<td><?php echo $hh['tname']; ?></td>
					<td><?php echo $hh['Medican']; ?></td>
					<td><?php echo $hh['dname']; ?></td>
		
                   </tr>
  
				   <?php
				   } ?>
                   </table>
                        
			    </div>
                    </div>

     </div>





                    <!-- <div class="col-md-12 pt-4">
                        <div class="d-flex flex-column skills">
                            <div class="progress w-100 mb-4">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">Adaptability </div>
                            </div>

                            <div class="progress w-100 mb-4">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">Research  fgdgdfgdfg</div>
                            </div>
                            <div class="progress w-100">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Editing</div>
                            </div>
                        </div>
                    </div> -->





           
            <!-- About End -->








            <!-- Footer Start -->
           <div class="container py-4 bg-secondary text-center">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">Helth Doctor</a>. All Rights Reserved. Designed by <a class="text-white font-weight-bold" href="https://www.idealcomputereducation.com">www.idealcomputereducation.com</a>
                </p>
            </div>
            <!-- Footer End -->



        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>