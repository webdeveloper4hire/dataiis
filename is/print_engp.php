<?php require_once('../Connections/connection.php'); ?>
<?php require_once('config.php'); ?>
<?php require_once('access_global.php'); ?>
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
$query_rstable1 = sprintf("SELECT * FROM table1 WHERE table1_id = '". $_GET['table1_id'] ."' ");
$rstable1 = mysql_query($query_rstable1, $connection) or die(mysql_error());
$row_rstable1 = mysql_fetch_assoc($rstable1);
$totalRows_rstable1 = mysql_num_rows($rstable1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print</title>
<script src="../plugins/facebox/lib/jquery.js" type="text/javascript"></script>
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

<style type="text/css">
table{counter-reset:section;}
.count:before
{
counter-increment:section;
content:counter(section);
} 

table.jermar th, table.jermar td {
  background : #fff none; color : #000;
  font-size : 80%;
  font-family: 'Ecofont Vera Sans';
  src: url('http://www.ecofont.com/assets/files/ecofont_vera_sans_regular.ttf');
  src: local('ecofont_vera_sans_regular.ttf'), 
       local('Ecofont Vera Sans'), 
       url('http://www.ecofont.com/assets/files/ecofont_vera_sans_regular.ttf') format('truetype');
   }</style>
</head>

<body>
<?php if ($totalRows_rstable1 == 0) { // Show if recordset empty ?>
<h1>No Record Found!</h1>
<?php } // Show if recordset empty ?>

<a href="javascript:history.back(-1)"><img src="../images/bd_prevpage.png" title="BACK" alt="BACK" /></a>
  &nbsp;&nbsp;
  <a href="#" onclick="tableToExcel('datatables', 'DTS')"><img src="../images/b_save.png" title="Sava as" alt="Save as" /></a>
  &nbsp;&nbsp;
  <a href="javascript:window.print()"><img src="../images/b_print.png" title="PRINT" alt="PRINT" /></a>

<table border="1" cellspacing="0" cellpadding="5"  class="jermar" id="datatables">

  
  <table border="1"  cellspacing="0" class="jermar" id="datatables" align="center" >
  <thead>
  <tr align="center">
  	<td rowspan="100"><a href="<?php echo $row_rstable1['tb1_colunm16']; ?>"><img src="<?php echo $row_rstable1['tb1_colunm16']; ?>" width="600px" height="500px" /></a></td>
    <td colspan="3" width = "40%"><a href="<?php echo $row_rstable1['tb1_colunm16']; ?>"><img src="<?php echo $row_rstable1['tb1_colunm16']; ?>" width="200px" height="100px" /></td>
  </tr>
  
  <tr colspan="3" border="0" align="center">
 
	  <?php do { ?>
   
	<td align="center">ID:</td>

	<td align="center"> <?php echo $row_rstable1['table1_id']; ?></td>
	<tr>
    <td align="center">DB:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm1']; ?></td>
  </tr>
  <tr>
    <td align="center">Region:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm2']; ?></td>
  </tr>
  <tr>
    <td align="center">PENRO:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm3']; ?></td>
  </tr>
  <tr>
    <td  align="center">CENRO:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm4']; ?></td>
  </tr>
  <tr>
    <td align="center">District:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm5']; ?></td>
  </tr>
  <tr>
    <td align="center">Brgy:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm6']; ?></td>
  </tr>
  <tr>
    <td align="center">Municipality:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm7']; ?></td>
  </tr><tr>
    <td  align="center">Org:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm8']; ?></td>
  </tr>
  <tr>
    <td align="center">Cont-Person:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm9']; ?></td>
  </tr><tr>
    <td  align="center">Type:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm10']; ?></td>
  </tr>
  <tr>
    <td align="center">Date:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm11']; ?></td>
  </tr>
  <tr>
    <td align="center">Status:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm12']; ?></td>
  </tr>
  <tr>
    <td align="center">Commodity:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm13']; ?></td>
  </tr>
  <tr>
    <td align="center">Species:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm14']; ?></td>
  </tr>
  <tr>
    <td align="center">Activity:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm15']; ?></td>
  </tr>
  <tr>
    <td align="center">Area Shapefile:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm16']; ?></td>
  </tr>
  <tr>
    <td align="center">Contracted:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm17']; ?></td>
  </tr>
  <tr>
    <td align="center">Maintained:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm18']; ?></td>
  </tr><tr>
    <td align="center">Remarks:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm19']; ?></td>
  </tr><tr>
    <td align="center">Seedling Target:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm20']; ?></td>
  </tr>
  <tr>
    <td align="center">Produced:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm21']; ?></td>
  </tr>
  <tr>
    <td align="center">Planted:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm22']; ?></td>
  </tr><tr>
    <td align="center">Replanted:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm23']; ?></td>
  </tr><tr>
    <td align="center">Proj-Cost:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm24']; ?></td>
  </tr><tr>
    <td align="center">Survival Rate:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm25']; ?></td>
  </tr><tr>
    <td align="center">Area Damaged:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm26']; ?></td>
  </tr><tr>
    <td align="center">Occured:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm27']; ?></td>
  </tr>
  <tr>
    <td align="center">Action:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm28']; ?></td>
  </tr>
  <tr>
    <td align="center">Disturbance:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm29']; ?></td>
  </tr>
  <tr>
    <td align="center">Author:</td>
	<td align="center"><?php echo $row_rstable1['tb1_colunm30']; ?></td>
  </tr>

 
  </tr>

   
  
 
  
  <tr>
    <td colspan="3" align="center">  </td>
  </tr>
  <tr align="center" height="100px">
	
    <td>_________________<br>
	Author<br>
	GIS</td>
	<td>_________________<br>
	Author<br>
	NGP Coordinator</td>
  </tr>
  
  
  <tbody>
 
    </tbody>
	
  </table>
	  <?php } while ($row_rstable1 = mysql_fetch_assoc($rstable1)); ?>
  <!--
  <thead>
  <tr>
    <td colspan="33" align="center"><strong>Summary Report [<?php echo $totalRows_rstable1 ?>] </strong></td>
    </tr>
   <tr>
    <th>&nbsp;</th>
    <th>ID</th>
    <th>DB</th>
    <th>Region</th>
    <th>PENRO</th>
    <th>CENRO</th>
    <th>District</th>
    <th>Brgy</th>
    <th>Municipality</th>
    <th>Org</th>
    <th>Cont-Person</th>
    <th>Type</th>
    <th>Date</th>
    <th>Status</th>
    <th>Commodity</th>
    <th>Species</th>
    <th>Activity</th>
    <th>Area Shapefile</th>
    <th>Contracted</th>
    <th>Maintained</th>
    <th>Remarks</th>
    <th>Seedling Target</th>
    <th>Produced</th>
    <th>Planted</th>
    <th>Replanted</th>
    <th>Proj-Cost</th>
    <th>Survival Rate</th>
    <th>Area Damaged</th>
    <th>Seedling Damaged</th>
    <th>Occured</th>
    <th>Action</th>
    <th>Disturbance</th>
    <th>Author</th>
  </tr>
  </thead>
  <tbody>
  <?php do { ?>
    <tr>
      <td><a href="<?php echo $row_rstable1['tb1_colunm16']; ?>"><img src="http://127.0.0.1/denris/system/<?php echo $row_rstable1['tb1_colunm16']; ?>" width="100px" /></a></td>
      <td><?php echo $row_rstable1['table1_id']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm1']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm2']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm3']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm4']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm5']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm6']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm7']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm8']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm9']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm10']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm11']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm12']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm13']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm14']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm15']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm16']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm17']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm18']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm19']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm20']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm21']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm22']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm23']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm24']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm25']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm26']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm27']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm28']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm29']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm30']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm31']; ?></td>
    </tr>
    </tbody>
    <?php } while ($row_rstable1 = mysql_fetch_assoc($rstable1)); ?>
</table> -->
</body>
</html>
