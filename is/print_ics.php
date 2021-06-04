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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print</title>
<?php require_once('facebox.html'); ?>
<script type="text/javascript" src="../js/table2excel.js"></script>
<script>
$(document).ready(function() {
    $('input[type="checkbox"]').click(function() {
        var index = $(this).attr('name').substr(3);
        index--;
        $('table tr').each(function() { 
            $('td:eq(' + index + ')',this).toggle();
        });
        $('th.' + $(this).attr('name')).toggle();
    });
});
</script>
</head>
<body>

<p align="right">Appendix 59</p>
<center> <h4> INVENTORY CUSTODIAN SLIP </h4> 
<table border="0" width="800px">
<tr>
<td width="400px">Entity Name: <?php echo $row_rspr['tb1_colunm2']; ?></td>
<td align="right">ICS No: <?php echo $row_rspr['tb1_colunm17']; ?></td>
</tr>
<tr>
<tr>
<td>Fund Cluster: <?php echo $row_rspr['tb1_colunm3']; ?></td>
<td align="right">
<a href="add_item.php?table1_id=<?php echo $_GET['table1_id']; ?>&category=<?php echo $_GET['tb1_colunm1'] ?>&tb1_colunm1=item" title="ADD ITEM" style="background-image:url(../images/b_plus.png); background-position: center; background-repeat: no-repeat; text-decoration: none;">&nbsp;&nbsp;&nbsp;</a>
&nbsp;&nbsp;
<a href="#" onclick="tableToExcel('datatables', 'DTS')" style="background-image:url(../images/b_save.png); background-position: center; background-repeat: no-repeat; text-decoration: none;">&nbsp;&nbsp;&nbsp;</a>
&nbsp;&nbsp;
<a href="javascript:window.print()" title="PRINT" style="background-image:url(../images/b_print.png); background-position: center; background-repeat: no-repeat; text-decoration: none;">&nbsp;&nbsp;&nbsp;</a>
</td>
</tr>
<tr>
<td colspan="2">

<table width="100%" border="1" cellspacing="0" class="jermar" id="datatables">
  <thead>
  <tr align="center">
	<td rowspan="2">Quantity</td>
  	<td rowspan="2">Unit</td>
    <td colspan="2">Amount</td>
  	<td rowspan="2">Description</td>
  	<td rowspan="2">Inventory Item No.</td>
  	<td rowspan="2">Estimated Useful Life</td>
    <td rowspan="2"><img src="../images/s_success.png" /></td>
  </tr>
  <tr>
    <td align="center"> Unit Cost </td>
    <td align="center"> Total Cost </td>
  </tr>
  </thead>
  <tbody>
  <?php do { ?>
    <tr>
      <td align="center"><?php echo $row_rsitem['tb1_colunm6']; ?></td>
      <td align="center"><?php echo $row_rsitem['tb1_colunm4']; ?></td>
      <td align="right"><?php echo number_format($row_rsitem['tb1_colunm7'],2) ?></td>
      <td align="right"><?php echo number_format($row_rsitem['tb1_colunm7'] * $row_rsitem['tb1_colunm6'],2) ?></td>
	    <td><?php echo $row_rsitem['tb1_colunm5']; ?></td>
      <td align="center"><?php echo $row_rsitem['tb1_colunm9']; ?></td>
	    <td align="center"><?php echo $row_rsitem['tb1_colunm10']; ?></td>
      <td width="50px"><a href="edit_item.php?table1_id=<?php echo $row_rsitem['table1_id']; ?>" rel="facebox" style="background-image:url(../images/b_edit.png); background-position: center; background-repeat: no-repeat; text-decoration: none">&nbsp;&nbsp;&nbsp;&nbsp;</a>
      &nbsp;<a href="delete_table1.php?table1_id=<?php echo $row_rsitem['table1_id']; ?>" style="background-image:url(../images/b_drop.png);  background-position: center; background-repeat: no-repeat; text-decoration: none;" onclick="return confirm('Are you sure you?');">&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
    </tr>
    <?php } while ($row_rsitem = mysql_fetch_assoc($rsitem)); ?>
    </tbody>
</table>

<table align="right">
<tr align="right">
<td>
<font size="1px">Author: <?php echo $row_rspr['tb1_colunm30']; ?></font>
</td>
</tr>
</table>

<table style="width:800px" border="0">
  <tr> 
  	<td> <?php echo $row_rspr['tb1_colunm27']; ?> </td>
  </tr>
  <tr> 
  	<td> Delivery Receipts: <?php echo $row_rspr['tb1_colunm18']; ?></td>
  </tr>
  <tr>
  	<td> Sales Invoice: <?php echo $row_rspr['tb1_colunm19']; ?></td>
  </tr>
  <!--<tr>
  	<td> Date: <?php echo $row_rspr['tb1_colunm20']; ?></td>
  </tr>-->
  <tr>
  	<td><hr/></td>
  </tr>
</table>


</td>
</tr>
<tr></tr>
<td colspan="2">
<table width="100%" border="0">
  <tr>
  	<td width="400px"> Received from: </td>
  	<td> Received by: </td>
  </tr></table>
<table border="0" width="100%">
  <tr align="center">
  	<td width="400px"><br/><u><?php echo $row_rspr['tb1_colunm35']; ?></u> </td>
  	<td><br/><u><?php echo $row_rspr['tb1_colunm28']; ?></u> </td>
  </tr>
  <tr align="center">
  	<td> Signature Over Printed Name </td>
  	<td> Signature Over Printed Name </td>
  </tr>
  <tr align="center">
  	 <td> <u><?php echo $row_rspr['tb1_colunm36']; ?></u> </td>
  	 <td> <u><?php echo $row_rspr['tb1_colunm31']; ?></u> </td>
  </tr>
  <tr align="center">
  	<td> <u><?php echo $row_rspr['tb1_colunm14']; ?></u></td>
  	<td> <u><?php echo $row_rspr['tb1_colunm20']; ?></u> </td>
  </tr> 
  <tr align="center">
  	<td> Date </td>
  	<td> Date </td>
  </tr>
</table>
</td>
</table>
</body>
</html>
<?php
mysql_free_result($rspr);

mysql_free_result($rsitem);
?>