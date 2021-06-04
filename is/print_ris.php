<?php require_once('../Connections/connection.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_connection, $connection);
$query_rspr = "SELECT * FROM table1 WHERE table1_id = '".$_GET['table1_id']."'";
$rspr = mysql_query($query_rspr, $connection) or die(mysql_error());
$row_rspr = mysql_fetch_assoc($rspr);
$totalRows_rspr = mysql_num_rows($rspr);

mysql_select_db($database_connection, $connection);
$query_rsitem = "SELECT * FROM table1 WHERE tb1_colunm2 = '".$_GET['table1_id']."'";
$rsitem = mysql_query($query_rsitem, $connection) or die(mysql_error());
$row_rsitem = mysql_fetch_assoc($rsitem);
$totalRows_rsitem = mysql_num_rows($rsitem);
?>
<!DOCTYPE html>
<html>
<title>PRINT</title>
<style type="text/css">
table{counter-reset:section;}
.count:before
{
counter-increment:section;
content:counter(section);
} 

table.jermar th, table.jermar td {
  
  font-size : 12px;
  font-family: 'Ecofont Vera Sans';
  font-color: #787878;
  src: url('http://www.ecofont.com/assets/files/ecofont_vera_sans_regular.ttf');
  src: local('ecofont_vera_sans_regular.ttf'), 
       local('Ecofont Vera Sans'), 
       url('http://www.ecofont.com/assets/files/ecofont_vera_sans_regular.ttf') format('truetype');
   }
</style>
</head>
<body>

<p align="right">Appendix 63</p>

<center>
<h5>REQUISITION AND ISSUE SLIP<h5>

<table width="800px" border="0" cellspacing="0" class="jermar">
<tr>
<th></th>
<th align="right">   
<a href="add_item.php?table1_id=<?php echo $row_rspr['table1_id']; ?>&category=<?php echo $_GET['tb1_colunm1'] ?>&tb1_colunm1=item"><img src="../images/b_plus.png" title="ADD NEW ITEM" alt="ADD NEW ACTION" /></a>
&nbsp;&nbsp;
<a href="javascript:window.print()"><img src="../images/b_print.png" title="PRINT" alt="PR" /></a>
&nbsp;&nbsp;
<a href="javascript:history.back(-1)"><img src="../images/bd_prevpage.png" title="BACK" alt="BA" /></a>
&nbsp;&nbsp;
<a href="home.php"><img src="../images/b_home.png" title="HOME" alt="HOME" /></a></th>
</tr>
<tr>
<th align="left">Entity Name: <?php echo $row_rspr['tb1_colunm2']; ?></th>
<th align="right">Fund Cluster: <?php echo $row_rspr['tb1_colunm3']; ?></th>
</tr>
<tr>
<th align="left">Division: <?php echo $row_rspr['tb1_colunm15']; ?></th>
<th align="right">Responsibility Center Code: <?php echo $row_rspr['tb1_colunm6']; ?></th>
</tr>
<tr>
<th align="left">Office: <?php echo $row_rspr['tb1_colunm4']; ?></th>
<th align="right">RIS No. : <?php echo $row_rspr['tb1_colunm16']; ?></th> 
</tr>

<tr>
<td colspan="2">

<table style="width:800px" border="1" cellspacing="0">
  <tr>
<th colspan="4"> Requisition </th>
<th colspan="2"> Stock Available</th>
<th colspan="2"> Issue </th> 
  </tr>
  <tr>
    <th>Stock No.</th>
    <th>Unit</th>
    <th>Description</th>
    <th>Quantity</th>
    <th>Yes</th>
    <th>No</th>
    <th>Quantity</th>
    <th>REMARKS</th>
  </tr>
   <?php do { ?>
   <tr>
      <td><?php echo $row_rsitem['tb1_colunm3']; ?></td>
	  <td><?php echo $row_rsitem['tb1_colunm4']; ?></td>
      <td><?php echo $row_rsitem['tb1_colunm5']; ?></td>
      <td><?php echo $row_rsitem['tb1_colunm6']; ?></td>
	  <td></td>
	  <td></td>
	  <td><?php echo $row_rsitem['tb1_colunm6']; ?></td>
	  <td></td>
    </tr>
    <?php } while ($row_rsitem = mysql_fetch_assoc($rsitem)); ?>
      <td colspan="7">&nbsp;</td>
      <td>&nbsp;</td>
</table>

<h4>Purpose: <u><?php echo $row_rspr['tb1_colunm33']; ?> <u> </h4>

<table style="width:800px" border="1" cellspacing="0">
  <tr>
    <th><br>
      Signature:</th>
    <th>Requested by:<br>
      <br></th> 
       <th>Approved by:<br>
      <br></th> 
       <th>Issued by:<br>
      <br></th> 
       <th>Received by:<br>
      <br></th> 
    </tr>


<tr>
<td>Printed Name:</td>
<td style="text-align: center;"><?php echo $row_rspr['tb1_colunm22']; ?></td>
<td style="text-align: center;"><?php echo $row_rspr['tb1_colunm24']; ?></td> 
<td style="text-align: center;"><?php echo $row_rspr['tb1_colunm35']; ?></td> 
<td style="text-align: center;"><?php echo $row_rspr['tb1_colunm28']; ?></td> 
</tr>

<tr>
<td>Designation:</td>
<td style="text-align: center;"><?php echo $row_rspr['tb1_colunm32']; ?></td>
<td style="text-align: center;"><?php echo $row_rspr['tb1_colunm38']; ?></td>
<td style="text-align: center;"><?php echo $row_rspr['tb1_colunm36']; ?></td> 
<td style="text-align: center;"><?php echo $row_rspr['tb1_colunm31']; ?></td>  
</tr>

<tr>
<td>Date:</td>
<td style="text-align: center;"><?php echo $row_rspr['tb1_colunm40']; ?></td> 
<td style="text-align: center;"><?php echo $row_rspr['tb1_colunm39']; ?></td> 
<td style="text-align: center;"><?php echo $row_rspr['tb1_colunm20']; ?></td> 
<td style="text-align: center;"><?php echo $row_rspr['tb1_colunm14']; ?></td> 
</tr>
</table>
</tr>
</table>
</center>
</body>
</html>
<?php
mysql_free_result($rspr);

mysql_free_result($rsitem);
?>