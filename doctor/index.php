
<?php
	include_once("head.php");
?>


<!DOCTYPE html>
<html>
<head>
  <title>Admin </title>
  <style type="text/css">
  <?php include 'css/customStyle.css'; ?>
  </style>

 <body style="background: #ECF0F5;padding:0;margin:0">
<center><h2>Well Come  <?php echo $doc['dname']; ?></h2></center>

<center><img src="../admin/<?php echo $doc['pic'];?>" height = 150px width = 150px></center>
<br><br><br>
<table align="center">
<tr>
	<td><strong>Contact No  :</strong></td>
	<td><?php echo $doc['ph'];?></td>
</tr>
<tr>
	<td><strong>Specialist  :</strong></td>
	<td><?php echo $doc['Specialist'];?></td>
</tr>
<tr>
	<td><strong>Description  :</strong></td>
	<td><?php echo $doc['description'];?></td>
</tr>
</table>
 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<center><a href=""><img src="123.gif" width="40%" height="200" border="0" alt=""></a></center>




</body>
</html>