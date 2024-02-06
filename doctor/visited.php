
<?php
	include_once("head.php");
?>


<!DOCTYPE html>
<html>
<head>
  <title>Visited </title>
  <link rel="stylesheet" type="text/css" href="css/styleapply.css">
  <style type="text/css">
  <?php include 'css/customStyle.css'; ?>


.wrapper {
  margin: 0 auto;
  padding: 20px;
  max-width: 800px;
}

.table {
  margin: 0 0 20px 0;
  width: 100%;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
  display: table;
}

   .back1 {
      padding: 5px;
      border-radius: 5px;
      box-shadow: 0 0 20px 0 #0000cc; 
      }
	    .btn-block {
      margin-top: 50px;
      text-align: center;
      }
      button {
      width: 80px;
	  height: 25px;
      padding: 5px;
      border: none;
      border-radius: 5px; 
      background: #a7a3fa;
      font-size: 16px;
      color: #0000a0;
      cursor: pointer;
      }
      button:hover {
      background: #0000a0;
	  color: #fff;
      cursor: pointer;
      }


.my-custom-scrollbar {
position: relative;
height: 400px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
tr:nth-child(even) {background-color: #f2f2f2;}
	
</style>


 <body style="background: #ECF0F5;padding:0;margin:0">
 				
<?php
	function hname1($hid)
{	
	global $con;
	
	$hidd = $con->query("select * from hospitals where hid='$hid'");
	$row = $hidd->fetch_assoc();
	return $row['hname'];
}
	
	function hcou($hid)
{	
	global $con;
	
	$hidd = $con->query("select count(*) 'co' from doc_view where hid='$hid'");
	$row = $hidd->fetch_assoc();
	return $row['co'];
}

?>
<center> 
	<div class="page-wrapper bg-blue p-t-50 p-b-50 font-robo">
        <div class="wrapper wrapper--w680">
		<h2 class="title">Hospital Patitent Details</h2>
			     <div class="table-wrapper-scroll-y my-custom-scrollbar">
				   <div  width="80%" class="tableBox" class="table">
          <table  >
				     <tr bgcolor=#a7a3fa>
					<td><strong><center>Hid</center></strong></td>
					<td width="50%"><strong>Name</strong></td>
					<td><strong>No of Patitens</strong></td>
					<td><strong>Check</strong></td>
                   </tr>
          
                 

				   <?php

				  $harr = $con->query("select distinct(hid) from doc_view");
				while ($hh=mysqli_fetch_assoc($harr)) 
					{
					?>
              <form method="POST" action="http://localhost/SmartHospital/doctor/Patitent.php">
                   <tr >
				     <?php $cou=hcou($hh['hid']);   
				       $hname1=hname1($hh['hid']);   
					print"<input type='hidden' name='hid' value=$hh[hid]>";
					print"<input type='hidden' name='hname' value=$hname1>";
				   ?>
					<td><?php echo "<center>".$hh['hid']."</center>"; ?></td>
					<td><?php echo $hname1; ?></td>
					<td><?php echo "<center>".$cou."</center>" ?></td>

					<td>  <div class="p-t-20">
                            <button name="detials" class="black" type="submit">Details</button>
                        </div></td>
			
                   </tr>
                    	</form>
				   <?php
				   } ?>
                   </table>
                        
			    </div>
                 
					
				
                </div>
            </div>
 
    </div></center>

</body>
</html>