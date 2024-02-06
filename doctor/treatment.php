
<?php
	include_once("head.php");
?>


<!DOCTYPE html>
<html>
<head>
  <title>treatment </title>
    <link rel="stylesheet" type="text/css" href="css/styleapply.css">
  <style type="text/css">
  <?php include 'css/customStyle.css'; ?>
  </style>

 <body style="background: #ECF0F5;padding:0;margin:0">

<?php
    $adimin=date_create($adimin); 
	$adimin=date_format($adimin,"Y-m-d"); 



if(isset($_POST['treat']))
	{
   @extract($_POST);

	}




?>
<br>


<center> 
<p>
<label><strong>Pid : </strong><label><?php echo $pid ;?>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<strong>Patient Name : </strong><?php echo $pname ;?> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<strong>Hospital Name : </strong><?php echo $hname ;?></p></center>

<hr>
 <center>
 <br> <br>
 	<div class="page-wrapper bg-blue p-t-500 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
 <h3 class="title">Treatment Form</h3>

                   
                    <form method="POST" action="treatmentreport.php">

                    <?php 
					
					print"<input type='hidden' name=pid   value='$pid'>";
					print"<input type='hidden' name=pname value='$pname'>";
					print"<input type='hidden' name=hid   value='$hid'>";

					?>
                        
                       <div class="row row-space">
                            <div class="col-2">
                            	<p>Start Date</p>
                                <div class="input-group">
                       <?php print"<input class='input--style-1' type='date' placeholder='start' name='tdate' value='$adimin' required='required'>";?>
                                   
                                </div>
                            </div>
                            
                        </div>
                                   
                            	<p> Reason</p>
						<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Reason" name="Medican" required="required">
                        </div>


                        <div class="p-t-20">
                            <button name="tsave" class="btn btn--radius btn--green" type="submit">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
	</div>
        </div>
    </div>	</center>


</body>
</html>