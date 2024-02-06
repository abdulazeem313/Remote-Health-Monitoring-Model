
<?php
	include_once("head.php");
?>


<!DOCTYPE html>
<html>
<head>
  <title>Patient Report </title>

  <link rel="stylesheet" type="text/css" href="../css/styleapply.css">
  	<link rel="stylesheet" type="text/css" href="css/styleview.css">


<link rel="stylesheet" href="js/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <script src="js/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="js/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

  <style>

body {
  font-family: "Helvetica Neue", Helvetica, Arial;
  font-size: 14px;
  line-height: 20px;
  font-weight: 400;
  color: #3b3b3b;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
  background: #2b2b2b;
}
@media screen and (max-width: 580px) {
  body {
    font-size: 16px;
    line-height: 22px;
  }
}

.wrapper {
  margin: 0 auto;
  padding: 40px;
  max-width: 800px;
}

.table {
  margin: 0 0 40px 0;
  width: 100%;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
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
  padding: 6px 12px;
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
      background: #33ffcc;
      font-size: 16px;
      color: #000000;
      cursor: pointer;
      }
      button:hover {
      background: #339900;
	  color: #fff;
      cursor: pointer;
      }
	  @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
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
</head>
<body>
    <style type="text/css">
  <?php include 'css/customStyle.css'; ?>
    </style>
<div style="color:white;background:#3C8DBC" >
 <?php echo "<span style='color:#ffff00; text-align:left;'><strong>Doctor Report  :</strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Hospital ID :</strong> $hos[hid] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Hospital Name :</strong> $hos[hname] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>District :</strong> $hos[district] 
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Taluk :</strong>$hos[taluk]"; ?></div>



<form action=" " method="POST" enctype="multipart/form-data">
<strong>Search :</strong><input type="text" name="ser"  style="text-align:center;font-size: 15;font-weight: bold;"; > <Button class="btn-block" name="search">Search </Button> 
</form>
<?php
if(isset($_POST['search']))
	{
@extract($_POST);
  $array = $con->query("select * from Doctor where dname like '___$ser%'");
	}
else
  $array = $con->query("select * from Doctor where hid='$hos[hid]' order by id desc");
?>


 
	    <div class="table-wrapper-scroll-y my-custom-scrollbar">
    <table  width="50%"  >   
	  <thead align="center" style='background: #336600;'>
        <th ><font color="ffffff">#</font></th>
         <th ><font color="ffffff">Photo</font></th>
        <th ><font color="ffffff">Dr_ID</font></th>
        <th width="15%"><font color="ffffff">Doctor Name</font></th>
        <th><font color="ffffff">Contact</font></th>

        <th width="10%"><font color="ffffff">Specialist</font></th>
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
			 <td><img src=<?php echo $row['pic']; ?> height = "10px" width = '10px'></td>
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

<script type="text/javascript">
  function addInBill(id,place)
  { 
    var value = $("#counter").val();
    value ++;
    var selection = 'selection'+place;
    $("#bill").fadeIn();
    $("#counter").val(value);
    $("#"+selection).html("selected");
    $.post('called.php?q=addtobill',
               {
                   id:id
               }
        );

  }
  $(document).ready(function()
  {
    $(".rightAccount").click(function(){$(".account").fadeToggle();});
    $("#dataTable").DataTable();
   
  });
</script>



