
<?php
	include_once("head.php");

 $dsql=mysqli_query($con,"SELECT * FROM doctor order by id desc");
        $d_arr=mysqli_fetch_assoc($dsql);
		$id1=$d_arr['id']+1;
		$did=(500+$id1);

		//****************************************************************************************************************
if(isset($_POST['dsave']))
	{
   @extract($_POST);
$files = $_FILES['file'];
$filename = $files['name'];
$filrerror = $files['error'];
$filetemp = $files['tmp_name'];
$fileext = explode('.', $filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png' , 'jpg' , 'jpeg');

if(in_array($filecheck, $fileextstored))
	{

    $destinationfile = 'images/'.$filename;
    move_uploaded_file($filetemp, $destinationfile);
   $ins=mysqli_query($con,"insert into doctor values($id1,'$did','$dname','$ph','$Specialist','$description','$hid','$destinationfile','Active')")  or die(mysqli_query());
			if(!$ins)
				$dmsg="<font size='' color='#fe929a'>Doctor Details inserted sucessfully</font>";
			else
			$dmsg="<font size='' color='#ffff66'>Doctor Details un sucessfully</font>";
	}
else
        $ins=mysqli_query($con,"insert into doctor values($id1,'$did','$dname','$ph','$Specialist','$description','$hid','images/no.jpg','Active')")  or die(mysqli_query());
			if(!$ins)
				$dmsg="<font size='' color='#fe929a'>Doctor Details inserted sucessfully</font>";
			else
			$dmsg="<font size='' color='#ffff66'>Doctor Details un sucessfully</font>";
	}
?>



<!DOCTYPE html>
<html>
<head>
  <title>Admin||Doctor </title>
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
</head>
<body>

<div style="color:white;background:#3C8DBC" >
 <?php echo "<span style='color:#ffff00; text-align:left;'><strong>New Doctor Entry  :    :</strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Hospital ID :</strong> $hos[hid] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Hospital Name :</strong> $hos[hname] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>District :</strong> $hos[district] 
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Taluk :</strong>$hos[taluk]"; ?></div>

 <?php print"<input type='hidden' name='id1' value='$id1'>";
	     print"<input type='hidden' name='did' value='D$did'>";
		 print"<input type='hidden' name='hid' value='$hid'>";
	   ?>

 <form action=" " method="POST" enctype="multipart/form-data">
<?php $admin=(new DateTime())->format('Y-m-d');?>
<input type="hidden" disabled  name="did" style="text-align:center;font-size: 15;font-weight: bold;"; value=<?php print("D$pid");?>>
<input type="hidden" disabled  name="id1" style="text-align:center;font-size: 15;font-weight: bold;"; value=<?php print("id1");?>>

<div class="item">
 <div class="ermsg"><center><span><font size="" color="#339900"><?php if(isset($dmsg)){ echo $dmsg; } ?></font></span></center></div>
         </div>

<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">

                <div class="card-body">

				<div class="row row-space">
				<div class="col-2">
                 <div class="input-group">
                    <h2 class="title">Doctor Info</h2>		
                        </div></div>
               
                      <div class="col-2">
					   <div class="input-group">
				<center><p> <font size='3' color='#a4a4a4'><strong>Doctor ID :</strong> <?php print("D$pid");?></font></p></center>
                      </div> </div> </div>

                        <div class="row row-space">
                            <div class="col-2">

                                <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="Docter Name" name="dname" required="required">
                                </div>
                            </div>

                        <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Last Name" name="lastname" required="required">
                                </div>
                            </div>
                     </div>
                       
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Contact Number" maxlength="10" name="ph" required="required" >
                        </div>
                   <br><br>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Specialist" name="Specialist" required="required">
                        </div>

                          
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="description" name="description" required="required">
                        </div>

							<div class="input-group">
                            <input class="input--style-1" type="file" placeholder="file" name="file">
                        </div>


                         <div class="p-t-20">
	
                            <input type="submit" class="btn btn--radius btn--green" name='stud_ins' >
                        </div>
        
                </div>
            </div>
        </div>
    </div>

  </form>
	
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










</body>
</html>