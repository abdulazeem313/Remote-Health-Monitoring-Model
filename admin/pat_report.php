
<?php
	include_once("head.php");
?>


<!DOCTYPE html>
<html>
<head>
  <title>Patient Report </title>
  <link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js1/cufon-yui.js"></script>
<script type="text/javascript" src="js1/arial.js"></script>
<script type="text/javascript" src="js1/cuf_run.js"></script>


  <style>




tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>
    <style type="text/css">
  <?php include 'css/customStyle.css'; ?>
    </style>
<div style="color:white;background:#3C8DBC" >
 <?php echo "<span style='color:#ffff00; text-align:left;'><strong>Patient Report  :</strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Hospital ID :</strong> $hos[hid] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Hospital Name :</strong> $hos[hname] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>District :</strong> $hos[district] 
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Taluk :</strong>$hos[taluk]"; ?></div>

<br>

 <div class="search">
          <form  action="" method="post" >
            

			<table>
			<tr>
				<td> <span ><input name="ser" type="text" class="keywords" id="textfield" maxlength="50" placeholder="Search..." /></td>
				<td><Button  class="Search" type="image" style='float:right'; name='search' src="image/search.gif" class="button" >Search</Button>     </span></td>
			</tr>
			</table>
           


          </form>
		  
        </div>
<?php
if(isset($_POST['search']))
	{
@extract($_POST);
  $array = $con->query("select * from patient where pname like '$ser%'");
	}
else
  $array = $con->query("select * from patient order by id desc");


if (isset($_GET['hid1']))
{
	  $hid = $_GET['hid1'];
 $array = $con->query("select * from patient where hid ='$hid' and status='Active'");
}

?>


 
	    <div class="table-wrapper-scroll-y my-custom-scrollbar">
    <table  width="50%" class="table " >   
	  <thead align="center" style='background: #2980b9;'>
        <th ><font color="ffffff">#</font></th>
        <th ><font color="ffffff">P_ID</font></th>
        <th ><font color="ffffff">Admin</font></th>
        <th width="15%"><font color="ffffff">Patient Name</font></th>
        <th><font color="ffffff">Contact</font></th>
        <th width="15%"><font color="ffffff">Disease</font></th>
        <th><font color="ffffff">Doctor ID</font></th>
        <th><font color="ffffff">Status</font></th>
		<th width="30%"><font color="ffffff">Patient Report</font></th>
      </thead>

     <tbody>
	  <?php $i=0;
	    if(mysqli_num_rows($array)!=0)
		{
        while ($row = $array->fetch_assoc()) 
        { 
          $i=$i+1;
        ?>
          <tr align="center">
            <td><?php echo $i; ?></td>
            <td><?php echo $row['pid']; ?></td>
            <td><?php echo $row['adimin']; ?></td>
            <td align="left"><?php echo $row['pname']; ?></td>
            <td><?php echo $row['ph']; ?></td>
            <td align="left"><?php echo $row['Disease']; ?></td>
			<td><?php echo $row['did']; ?></td>
			<td align="left"><?php echo $row['Status']; ?></td>
			<td align="left">&nbsp;</td>
         </tr>
		<?php } 
		}
		else
		echo "<center><font size='3' color='#ff0000'>No Data Found....</font></center>";?>
			</tbody>
	
    </table>
                 
</div>
</div>

</body>
</html>



