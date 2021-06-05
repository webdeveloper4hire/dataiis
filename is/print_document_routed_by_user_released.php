<?php require_once('../Connections/connection.php'); ?>
<?php require_once('config.php'); ?>
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
$query_rstable1 = "SELECT table2.tb2_colunm2, table2.tb2_colunm4, table2.tb2_colunm5, table2.tb2_colunm6, table2.tb2_colunm9, table1. * 
FROM table2
LEFT JOIN table1 ON table2.tb2_colunm2 = table1.table1_id
WHERE table2.tb2_colunm11 LIKE '%".$_GET['tb2_colunm11']."%'
AND tb2_colunm7 LIKE '%".$_GET['date']."%' AND tb2_colunm6 LIKE '%".$_GET['tb2_colunm6']."%' GROUP BY table1_id
";
$rstable1 = mysql_query($query_rstable1, $connection) or die(mysql_error());
$row_rstable1 = mysql_fetch_assoc($rstable1);
$totalRows_rstable1 = mysql_num_rows($rstable1);
?>
<?php require_once('access_global.php'); ?>
<?php require_once('config.php'); ?>
<?php 
date_default_timezone_set("Asia/Hong_Kong"); 
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
  <thead>
  <tr>
    <td colspan="11" align="center"><strong>REGIONAL DOCUMENT TRACKING SUMMARY REPORT - FOR <?php echo $_GET['tb2_colunm6']; ?> ROUTED BY <?php echo $_GET['tb2_colunm11']; ?> Released ON <?php echo $_GET['date']; ?> [<?php echo $totalRows_rstable1 ?>] </strong></td>
    </tr>
  <tr>
    <td><strong>No.</strong><?php $i = 1;?></td>
    <td><strong>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
    <td><strong>Type</strong></td>
    <td><strong>Subject / Particulars</strong></td>
    <td><strong>From</strong></td>
    <td><strong>To / For</strong></td>
    <td><strong>Action/Note</strong></td>
    <td><strong>Routed_to/Office</strong></td>
    <td><strong>Doc.No.</strong></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
  </thead>
  <tbody>
  <?php do { ?>
    <tr valign="top" class="<?php echo $row_rstable1['table1_id']; ?>">
      <td>
<span id="<?php echo $row_rstable1['table1_id']; ?>" title="Hide This"><?php echo $i++; ?></span>

<script> 
$(function(){ 
   
   $("#<?php echo $row_rstable1['table1_id']; ?>").click(function(){ 
    $(".<?php echo $row_rstable1['table1_id']; ?>").hide(); 
    $("#white").show(); 
    
   }); 
    
}); 
</script>
      </td>
      <td><?php echo date("d-M-Y", strtotime($row_rstable1['tb2_colunm4'])); ?><br /><?php echo $row_rstable1['tb2_colunm5']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm9']; ?></td>
      <td><?php echo nl2br($row_rstable1['tb1_colunm7']); ?></td>
      <td><?php echo $row_rstable1['tb1_colunm6']; ?> / <?php echo $row_rstable1['tb1_colunm4']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm8']; ?></td>
      <td><?php echo nl2br($row_rstable1['tb2_colunm9']); ?></td>
      <td><?php echo $row_rstable1['tb2_colunm6']; ?></td>
      <td><?php if ($row_rstable1['tb1_colunm2'] != "0") {  ?><?php echo $row_rstable1['tb1_colunm2']; ?>-<?php } ?><?php echo $row_rstable1['tb1_colunm3']; ?>-<?php echo $row_rstable1['table1_id']; ?></td>
      <td></td>
    </tr>
    <?php } while ($row_rstable1 = mysql_fetch_assoc($rstable1)); ?>
    </tbody>
</table>

</body>
</html>
<?php
mysql_free_result($rstable1);
?>
