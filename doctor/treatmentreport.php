
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
if(isset($_POST['tsave']))
	{
   @extract($_POST);
 
$ins=mysqli_query($con,"insert into treatment(tdate,tname,Medican,pid,hid)values('$tdate','$pname','$Medican','$pid','$hid')")  or die(mysqli_query());
			if(!$ins)
			{
				$mmsg="<font size='' color='#ff0000'><strong>Patient Details un sucessfully...</strong></font>";
				
			}
$flage=1;
	}

?>
<center> 

<?php
if(isset($_POST['search']))
	{
  @extract($_POST);
  $harr = $con->query("select * from treatment where pid like '$ser%'");
    $msg="Patitent Id : $ser";
	}
else
		{
  $harr = $con->query("select * from treatment");
  $msg="All Patitent";
  $flage=0;
		}

?>



	<div class="page-wrapper bg-blue p-t-50 p-b-50 font-robo">
        <div class="wrapper wrapper--w680">
		<h2 class="title">Hospital Patitent treatment Details</h2>
			     <div class="table-wrapper-scroll-y my-custom-scrollbar">
				   <div  width="80%" class="tableBox" class="table">
				   

          <table  >
<form action=" " method="POST" enctype="multipart/form-data">
		  <tr bgcolor=#ffffcc>
					<td><strong><center>Search :</center></strong></td>
					<td cellpadding="3"><strong><center><input type="text" name="ser"  style="text-align:center;font-size: 15;font-weight: bold;"; ></center></strong></td>
					<td><strong><Button  name="search">Search </Button> </strong></td>
				    <td width="35%"><strong><?php echo "$msg";?></strong></td>
                   </tr></form>

				     <tr bgcolor=#a7a3fa>
					<td><strong><center>Pid</center></strong></td>
					<td ><strong><center>Date</center></strong></td>
					<td><strong>Patitens Name</strong></td>
					<td width="35%"><strong>Medican</strong></td>
				
                   </tr>
          <tr bgcolor=#ffffff>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				
                   </tr>
            

<?php		    
					if($flage==1)
			$harr = $con->query("select * from treatment where pid='$pid'");
			
				while ($hh=mysqli_fetch_assoc($harr)) 
					{
					?>

                   <tr >
					<td><?php echo "<center>".$hh['pid']."</center>"; ?></td>
					<td><?php echo "<center>".$hh['tdate']."</center>"; ?></td>
					<td><?php echo $hh['tname']; ?></td>
					<td><?php echo $hh['Medican']; ?></td>
		
                   </tr>
  
				   <?php
				   } ?>
                   </table>
                        
			    </div>
                 
					
				
                </div>
            </div>
 
    </div></center>

</body>
</html>