
<?php
	include_once("head.php");

?>


<!DOCTYPE html>
<html>
<head>
  <title>Admin </title>
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
  table, th, td {
  border: 0px solid;
}
  tr:nth-child(odd) {background-color: #f2f2f2;}
  </style>
</head>
<body background="back.jpg" >
<center><h2>Well Come to admin Dash Board</h2></center>
<div style="color:white;background:#3C8DBC" >
 <?php echo "<span style='color:#ffff00; text-align:left;'><strong>Dash Board :</strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Hospital ID :</strong> $hos[hid] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Hospital Name :</strong> $hos[hname] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>District :</strong> $hos[district] 
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Taluk :</strong>$hos[taluk]"; ?></div>
<br><br>


 <div  width="80%" class="tableBox" class="table">
<table width="80%">
<tr>
	<td align="center"><?php 
 
      $array2 = $con->query("select count(*) from patient where hid = '$hos[hid]' and status='Active'");
      $row2 = $array2->fetch_assoc();
  ?>
    <a href="pat_report.php?hid1=<?php echo $hos['hid'] ?>"><div class="box2 col-md-3">
     <div class="center"> <img src="image/emr1.webp" style="width: 155px;height: 122px;" class='img-thumbnail'></div>
      <hr style="margin: 7px;">
  <span style="padding: 11px" class="pull-center"><strong style="font-size: 10pt;color:red;">Critical</strong>
  
  <!-- <span class="pull-right" style="color:blue;margin-right: 11px;"><?php echo $hos['hname'] ?></span></span> -->
      <hr style="margin: 7px;">
      <span style="padding: 11px"><strong style="font-size: 10pt">Active Cases</strong><span class="pull-right" style="color:blue;margin-right: 11px"><?php echo $row2['count(*)']; ?></span></span>
    </div></a></td>
	<td align="center"><?php 
 
      $array2 = $con->query("select count(*) from patient where hid = '$hos[hid]' and status='Active'");
      $row2 = $array2->fetch_assoc();
  ?>
    <a href="pat_report.php?hid1=<?php echo $hos['hid'] ?>"><div class="box2 col-md-3">
     <div class="center"> <img src="image/amb1.webp" style="width: 155px;height: 122px;" class='img-thumbnail'></div>
      <hr style="margin: 7px;">
       <span style="padding: 11px" class="pull-center"><strong style="font-size: 10pt;color:red;">Emergancy</strong>
      <hr style="margin: 7px;">
      <span style="padding: 11px"><strong style="font-size: 10pt">Active Cases</strong><span class="pull-right" style="color:blue;margin-right: 11px"><?php echo $row2['count(*)']; ?></span></span>
    </div></a></td>
	<td align="center"><?php 
 
      $array2 = $con->query("select count(*) from patient where hid = '$hos[hid]' and status='Active'");
      $row2 = $array2->fetch_assoc();
  ?>
    <a href="pat_report.php?hid1=<?php echo $hos['hid'] ?>"><div class="box2 col-md-3">
     <div class="center"> <img src="image/pp.gif" style="width: 155px;height: 122px;" class='img-thumbnail'></div>
      <hr style="margin: 7px;">
      <span style="padding: 11px" class="pull-center"><strong style="font-size: 10pt;color:red;">Normal</strong>
      <hr style="margin: 7px;">
      <span style="padding: 11px"><strong style="font-size: 10pt">Active Cases</strong><span class="pull-right" style="color:blue;margin-right: 11px"><?php echo $row2['count(*)']; ?></span></span>
    </div></a>
</td>
	<td align="center"> <?php 
 
      $array2 = $con->query("select count(*) from Doctor where hid = '$hos[hid]'");
      $row2 = $array2->fetch_assoc();
  ?>
    <a href="pat_report.php?hid1=<?php echo $hos['hid'] ?>"><div class="box2 col-md-3">
     <div class="center"> <img src="image/doc1.webp" style="width: 155px;height: 122px;" class='img-thumbnail'></div>
      <hr style="margin: 7px;">
      <span style="padding: 11px" class="pull-center"><strong style="font-size: 10pt;color:red;">Doctors Present</strong>
      <hr style="margin: 7px;">
      <span style="padding: 11px"><strong style="font-size: 10pt">Doctors</strong><span class="pull-right" style="color:blue;margin-right: 11px"><?php echo $row2['count(*)']; ?></span></span>
    </div></a></td>
</tr>
</table>

</div>



</body>
</html>