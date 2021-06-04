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

<p align="right">Appendix 71</p>
<center><h4> Property Acknowledgement Receipt </h4> 

<table width="800px" border="0" cellspacing="0" class="jermar">
<tr>
<td>Entity Name: <?php echo $row_rspr['tb1_colunm2']; ?></td>
<td align="right"><a href="add_item.php?table1_id=<?php echo $row_rspr['table1_id']; ?>&category=<?php echo $_GET['tb1_colunm1'] ?>&tb1_colunm1=item"><img src="../images/b_plus.png" title="ADD NEW ACTION" alt="ADD NEW ACTION" /></a>
&nbsp;&nbsp;
<a href="javascript:window.print()"><img src="../images/b_print.png" title="PRINT" alt="PR" /></a>
&nbsp;&nbsp;
<a href="print_documents_range.php?tb1_colunm3=<?php echo $row_rspr['tb1_colunm3']; ?>&tb1_colunm2=<?php echo $row_rspr['tb1_colunm2']; ?>&start_id=<?php echo $row_rstable1['tb1_colunm17']; ?>&end_id=<?php echo $row_rstable1['tb1_colunm17']; ?>&tb1_colunm1=Document-Tracking"><img src="../images/b_export.png" title="PRINT AS SUMMARY" alt="PS" /></a>
&nbsp;&nbsp;
<a href="javascript:history.back(-1)"><img src="../images/bd_prevpage.png" title="BACK" alt="BA" /></a>
&nbsp;&nbsp;
<a href="home.php"><img src="../images/b_home.png" title="HOME" alt="HOME" /></a></td>
</tr>
<tr>
<td>Fund Cluster: <?php echo $row_rspr['tb1_colunm3']; ?></td>
<td align="right">PAR No.: <?php echo $row_rspr['tb1_colunm21']; ?></td>
</tr>
</table>
<table style="width:800px" border="1" cellspacing="0">
  <tr>
	<th> Quantity </th>
  	<th> Unit </th>
	<th> Description </th>
    <th> Property Number </th>
  	<th> Date Acquired </th>
  	<th> Amount </th> 
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_rsitem['tb1_colunm6']; ?></td>
      <td><?php echo $row_rsitem['tb1_colunm4']; ?></td>
	  <td><?php echo $row_rsitem['tb1_colunm5']; ?></td>
      <td><?php echo $row_rsitem['tb1_colunm3']; ?></td>
	  <td><?php echo $row_rsitem['tb1_colunm11']; ?></td>
	  <td><?php echo $row_rsitem['tb1_colunm7'] * $row_rsitem['tb1_colunm6']; ?></td>
    </tr>
    <?php } while ($row_rsitem = mysql_fetch_assoc($rsitem)); ?>

</table>

<table style="width:800px" border="0" cellspacing="0">
  <tr>
  	<center> 
	<td style="width:50%;"><h3>Received by:</h3>
	
	 <center><b><?php echo $row_rspr['tb1_colunm28']; ?></b><br/>
	 Signature over Printed Name<br>
	 
	 <?php echo $row_rspr['tb1_colunm31']; ?><br>
	 
	 Position/Office<br><br>
	 
	 <u><?php echo $row_rspr['tb1_colunm14']; ?></u><br>
	 
	 Date
	 </center>
	 </td>
	 
	 <td>
	 <h3>Issued by:</h3>
	
	 <center><b><?php echo $row_rspr['tb1_colunm35']; ?></b><br/>
	 Signature over Printed Name<br>
	 
	 <?php echo $row_rspr['tb1_colunm36']; ?><br>
	 
	 Position/Office<br><br>
	 
	 <u><?php echo $row_rspr['tb1_colunm20']; ?></u><br>
	 
	 Date
	 </center>
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