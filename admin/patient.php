
<?php
	include_once("head.php");

	//***********************************************************************************

 $dsql=mysqli_query($con,"SELECT * FROM patient order by id desc");
        $d_arr=mysqli_fetch_assoc($dsql);
		$id1=$d_arr['ID']+1;
		$pid=(1000+$id1);
//***************************************************************************************************
if(isset($_POST['psave']))
	{
		//print("<h2>sfnaskflksdfsdkflsdklfsdf</h2>");
   @extract($_POST);
    $adimin=date_create($adimin); 
	$adimin=date_format($adimin,"Y-m-d"); 
 $ins=mysqli_query($con,"insert into patient values($id1,'$adimin',	'$pid','$pname','$lastname','$ph','$Address','$place','$taluk','$district',$age,'$gender','$Disease','$did','$hid','$Status')")  or die(mysqli_query());
			if(!$ins)
			{
				$mmsg="<font size='' color='#ff0000'><strong>Patient Details un sucessfully...</strong></font>";
				
			}
			else
		{
				
				   echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Succesfully Registered')
					 window.location.href='..//pat_report.php';
						</SCRIPT>");
				$id1=$id1+1;
		       $pid=(1000+$id1);

		}
			  
	}

//*******************************************************************************************************
?>


<!DOCTYPE html>
<html>
<head>
  <title>Admin </title>

    <!-- Title Page-->
    <title>Add Patient | Admin Panel</title>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>


<body>
<div style="color:white;background:#3C8DBC" >
 <?php echo "<center><strong>Hospital ID :</strong> $hos[hid] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Hospital Name :</strong> $hos[hname] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>District :</strong> $hos[district] 
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Taluk :</strong>$hos[taluk]</center>"; ?></div>
<!-- //********************************************************************************************** -->
    <form action=" " method="POST" enctype="multipart/form-data">
<?php $admin=(new DateTime())->format('Y-m-d');?>
<input type="hidden" disabled  name="pid" style="text-align:center;font-size: 15;font-weight: bold;"; value=<?php print("P$pid");?>>
<input type="hidden" disabled  name="id1" style="text-align:center;font-size: 15;font-weight: bold;"; value=<?php print("id1");?>>


	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">

                <div class="card-body">
				<div class="row row-space">
	
                    <div class="input-group">
		
                    <h2 class="title">Patient Info</h2>
					<center><p> <font size='3' color='#a4a4a4'><strong>Patient ID :</strong> <?php print("P$pid");?></font></p></center>
                        </div>
                    <div class="col-2">
                    <div class="input-group">
					<p>  Date :</p>
				<?php	print("<input type='date'  name='adimin' value='$admin' class='input--style-1'/>");?>
             
                      </div> </div> </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="First Name" name="firstName" required="required">
                                </div>
                            </div>

                        <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Last Name" name="lastname" required="required">
                                </div>
                            </div>
                     </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Disease" name="Disease" required="required">
                        </div>  

                        <div class="row row-space">						
                       <div class="col-2">
                       <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Age" name="age" required="required">
                        </div></div>

                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender" required="required">
                                            <option  selected="selected">GENDER</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
 
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Contact Number" maxlength="10" name="ph" required="required" >
                        </div>
                   <br><br>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Address" name="Address" required="required">
                        </div>

                            <br><br>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Place" name="place" required="required">
                        </div>

                        <div class="input-group">
						<?php	
			 $dos=mysqli_query($con,"select * from Doctor ")  or die(mysqli_query());	
 			print("<select class='input--style-1' style='border-color: #ffffff;width: 100%';  name='did' style='width: 100%; text-align: left; font: 0.95em sans-serif;'>");
            print("<option  value=' '>Add Doctor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.</option>");
            while($d_arr=mysqli_fetch_assoc($dos))	
			print("<option  value='$d_arr[did]'>$d_arr[dname]&nbsp; ($d_arr[Specialist]) ");
			echo"</select>  ";		
			?>

                        
                        </div>	

                        <div class="input-group">
						<select class="input--style-1" style='border-color: #ffffff; width: 100%'; placeholder="Status" name="Status" >
              <option value="Normal">Normal</option>
              <option value="Emergancy">Emergancy</option>
              <option value="Critical">Critical</option>
            </select>
                           
                        </div>

                        <div class="p-t-20">
                            <input type="submit" class="btn btn--radius btn--green" name='psave' >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

  
	
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>



</body>
</html>