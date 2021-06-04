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
<head>

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
<body>

<p align="right">Appendix 62</p>
<center>
<h4> INSPECTION AND ACCEPTANCE REPORT </h4> 

<table width="800px" border="0" cellspacing="0" class="jermar">
<tr>
<td width="400px">Entity Name: <?php echo $row_rspr['tb1_colunm2']; ?></td>
<td width="400px" align="right">   
<a href="add_item.php?table1_id=<?php echo $row_rspr['table1_id']; ?>&category=<?php echo $_GET['tb1_colunm1'] ?>&tb1_colunm1=item"><img src="../images/b_plus.png" title="ADD NEW ITEM" alt="ADD NEW ACTION" /></a>
&nbsp;&nbsp;
<a href="javascript:window.print()"><img src="../images/b_print.png" title="PRINT" alt="PR" /></a>
&nbsp;&nbsp;
<a href="javascript:history.back(-1)"><img src="../images/bd_prevpage.png" title="BACK" alt="BA" /></a>
&nbsp;&nbsp;
<a href="home.php"><img src="../images/b_home.png" title="HOME" alt="HOME" /></a></td>
</tr>
<tr>
<td>Fund Cluster: <?php echo $row_rspr['tb1_colunm3']; ?></td>
<td></td>
</tr>
<tr>
<td colspan="2">

<table style="width:800px" border="1" cellspacing="0">
  <tr>
    <td>Suppliers: <?php echo $row_rspr['tb1_colunm8']; ?></td>
    <td>IAR No.: <?php echo $row_rspr['tb1_colunm11']; ?></td>
  </tr>
  <tr>
    <td>PO No./Date: <?php echo $row_rspr['tb1_colunm9']; ?></td>
    <td>Date: <?php echo $row_rspr['tb1_colunm7']; ?></td>
  </tr>
  <tr>
    <td>Requisitioning Office/Dept.: <?php echo $row_rspr['tb1_colunm10']; ?></td>
    <td>Delivery Receipt No.: <?php echo $row_rspr['tb1_colunm13']; ?></td>
  </tr>
  <tr>
    <td>Responsibility Center Code: <?php echo $row_rspr['tb1_colunm6']; ?></td>
    <td>Date: <?php echo $row_rspr['tb1_colunm37']; ?></td>
  </tr>
  </table>

<table style="width:800px" border="1" cellspacing="0">
	 <tr>
		<center> <td > Stock/Property No.
		<br> </td> 
		<td > Description </td>
		<td> Unit </td>
		<td> Quantity </td> </center>
	</tr> 
	 <?php do { ?>
    <tr>
      <td><?php echo $row_rsitem['tb1_colunm3']; ?></td>
      <td><?php echo $row_rsitem['tb1_colunm5']; ?></td>
	  <td><?php echo $row_rsitem['tb1_colunm4']; ?></td>
      <td><?php echo $row_rsitem['tb1_colunm6']; ?></td>
    </tr>
    <?php } while ($row_rsitem = mysql_fetch_assoc($rsitem)); ?>
    <tr>
      <td>&nbsp;</td>
      <td></td>
	  <td></td>
      <td></td>
    </tr>
</table>
<table style="width:800px" border="0" cellspacing="0">
	<tr> 
		<th width="400px"> INSPECTION </th>
		<th width="400px"> ACCEPTANCE </th></center>
	</tr>

	<tr>
		<td> Date Inspected: <?php echo $row_rspr['tb1_colunm25']; ?></td>
		<td> Date Received: <?php echo $row_rspr['tb1_colunm26']; ?></td>
	</tr>
	<tr>
		<td> Inspected, verify and found in order as to quantity and specifications </td>
		<td> Complete <br> 
		Partial (pls. specify quantity) </td> 
	</tr>

	<tr> 
		<td> <br/><br/>__________________________________ </td>
		<td> <br/><br/>__________________________________ </td> 
	</tr>

	<tr>
		<td> Inspection Officer/Inspection Committee</td>
		<td> Chief, General Services Section </td> 
	</tr>
</table>

</td>
</tr>
</table>
</center>
</body>
</html>
<?php
mysql_free_result($rspr);

mysql_free_result($rsitem);
?>