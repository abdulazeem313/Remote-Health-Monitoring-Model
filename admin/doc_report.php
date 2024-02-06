
<?php
	include_once("head.php");
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Doctor Login</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js1/cufon-yui.js"></script>
<script type="text/javascript" src="js1/arial.js"></script>
<script type="text/javascript" src="js1/cuf_run.js"></script>
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
  img {
  border-radius: 50%;
  width: 30px;
  height: 30px;
}
</style>
</head>
<body style="margin:0; padding: 0;">

<div style="color:white;background:#3C8DBC" >
 <?php echo "<span style='color:#ffff00; text-align:left;'><strong>Doctor Report  :</strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Hospital ID :</strong> $hos[hid] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Hospital Name :</strong> $hos[hname] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>District :</strong> $hos[district] 
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
  $array = $con->query("select * from Doctor where dname like '___$ser%'");
	}
else
  $array = $con->query("select * from Doctor where hid='$hos[hid]' order by id desc");
?>

<br>&nbsp;<br>
 
	    <div class="table-wrapper-scroll-y my-custom-scrollbar">
    <table  width="50%"  >   
	  <thead align="center" style='background: #336600;'>
        <th ><font color="ffffff">#</font></th>
         <th ><font color="ffffff">Photo</font></th>
        <th ><font color="ffffff">Dr_ID</font></th>
        <th width="10%"><font color="ffffff">Doctor Name</font></th>
        <th><font color="ffffff">Contact</font></th>

        <th width="20%"><font color="ffffff">Specialist</font></th>
        <th><font color="ffffff">description</font></th>
		<th><font color="ffffff">HID</font></th>
        <th><font color="ffffff">Status</font></th>
      </thead>

     <tbody>
	  <?php $i=0;
	    if(mysqli_num_rows($array)!=0)
		{
        while ($row = $array->fetch_assoc()) 
        {   
          $i=$i+1;   ?>
     
          <tr align="center">
            <td><?php echo $i; ?></td>
			<td><img src=<?php echo $row['pic']; ?> class='img'></td> 
            <td><?php echo $row['did']; ?></td>
            <td align="left"><?php echo $row['dname']; ?></td>
            <td><?php echo $row['ph']; ?></td>
            <td align="left"><?php echo $row['Specialist']; ?></td>
			<td align="left"><?php echo $row['description']; ?></td>
			<td align="left"><?php echo $row['hid']; ?></td>
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


</body>
</html>











</body>
</html>
