
<?php
	include_once("head.php");
	$flage=0;
	 $adimin=date_create($adimin); 
	$adimin=date_format($adimin,"Y-m-d");
?>


<!DOCTYPE html>
<html>
<head>
  <title>Doctor || Patient </title>
  <link rel="stylesheet" type="text/css" href="css/styleapply.css">
  <style type="text/css">
  <?php include 'css/customStyle.css'; ?>

.wrapper {
  margin: 0 auto;
  padding: 20px;
  max-width: 1000px;
}

.table {
  margin: 0 0 40px 0;
  width : 70%;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.4);
  display: table;
}
@media screen and (max-width: 580px) {
  .table {
    display: block;
  }
}

.row {
  display: table-row;
  background: #f6f6f6;
}

.row:nth-of-type(odd) {
  background: #e9e9e9;
}
.row.header {
  font-weight: 900;
  color: #ffffff;
  background: #ea6153;
}
.row.green {
  background: #27ae60;
}
.row.blue {
  background: #2980b9;
}
@media screen and (max-width: 580px) {
  .row {
    padding: 14px 0 7px;
    display: block;
  }
  .row.header {
    padding: 0;
    height: 6px;
  }
  .row.header .cell {
    display: none;
  }
  .row .cell {
    margin-bottom: 10px;

  }
  .row .cell:before {
    margin-bottom: 3px;
	height: 3px;
    content: attr(data-title);
    min-width: 98px;
    font-size: 10px;
    line-height: 10px;
    font-weight: bold;
    text-transform: uppercase;
    color: #969696;
    display: block;
  }
}

.cell {
  padding: 6px 6px;
  display: table-cell;
}
@media screen and (max-width: 580px) {
  .cell {
    padding: 2px 16px;
    display: block;
  }
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


if(isset($_POST['detials']))
	{
   @extract($_POST);
 
	$flage=1;
	}

?>
<br>

<center> 
	<div class="page-wrapper bg-blue p-t-50 p-b-50 font-robo">
        <div class="wrapper wrapper--w680">

		<h3 class="title"><?php 
		
	   if ($flage==1)
		echo "<a href='visited.php'>".$hid."</a> : ".$hname ;
		else
		echo "Patitent Details" ;
		
		
		?></h3>

     <div class="table-wrapper-scroll-y my-custom-scrollbar">
				   <div class="tableBox" class="table">
                 <table>
				     <tr bgcolor=#fccdf4>
					<td><strong><center>Pid</center></strong></td>
					<td><center><strong>Admin Date</strong></center></td>
					<td ><strong>Name</strong></td>
					<td><center><strong>Age</strong></center></td>
					<td><center><strong>Disease</strong></center></td>
					<td><center><strong>Status</strong></center></td>
					<td><center><strong>Tretment_Date</strong></center></td>
					<td><center><strong>Hid</strong></center></td>
					<td><center><strong>Teratment</strong></center></td>
			
                   </tr>

				   <?php
				   if ($flage==1)
				  $hdoc = $con->query("select * from doc_view where hid='$hid'");
				  else
				  {
				  $hdoc = $con->query("select * from doc_view");

	        }
				   while ($doc1=mysqli_fetch_assoc($hdoc)) {?>
                    <form method="POST" action="treatment.php">
                  <?php  
					
					   $hname=hname1($doc1[hid]);
					   print"<input type='hidden' name='hid' value=$doc1[hid]>";
					   print"<input type='hidden' name='hname' value='$hname'>";
					   print"<input type='hidden' name='pid' value=$doc1[pid]>";
					   print"<input type='hidden' name='pname' value=$doc1[pname]>";
                   
                        ?>
                   <tr >
					<td><?php echo "<center>".$doc1['pid']."</center>"; ?></td>
					<td><?php echo "<center>".$doc1['adimin']."</center>"; ?></td>
					<td><?php echo $doc1['pname']; ?></td>
					<td><?php echo "<center>".$doc1['age']."</center>"; ?></td>
					<td><?php echo "<center>".$doc1['Disease']."</center>"; ?></td>
					<td><?php echo "<center><font color='#ff0000'>Pending</font></center>"; ?></td>
					<td><?php echo "<center>".$adimin."</center>"; ?></td>
                    <td><?php echo "<center>".$doc1['hid']."</center>"; ?></td>

					<td>  <div class="p-t-20">
                            <button name="treat" class="black" type="submit">Check</button>
                        </div></td>
			
                   </tr>
   
				   <?php
				   } ?>
                   </table>
                        
			    </div>
                 
					
					</form>
        
 
    </div></center>

</body>
</html>