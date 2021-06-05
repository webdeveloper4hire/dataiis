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
$query_rstable1 = "SELECT * FROM table1 WHERE tb1_colunm1 = 'tech-assist' AND tb1_colunm2 LIKE '%".$_GET['tb1_colunm2']."%'";
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

<table border="1" cellspacing="0" cellpadding="5"  class="jermar" id="datatables" width="80%">
  <thead>
  <tr>
    <td colspan="8" align="center"><strong>SERVICE REQUESTS / TECHNICAL ASSISTANCE SUMMARY REPORT - FOR <?php echo $_GET['tb1_colunm2']; ?> [<?php echo $totalRows_rstable1 ?>] </strong></td>
    </tr>
  <tr class="denr-table-header" role="row">
    <td>ID</td>
    <td>Date</td>
    <td>Client Name</td>
    <td>Office</td>
    <td>Type</td>
    <td>Status</td>
    <td>Rating</td>
    <td>Action Date</td>
  </tr>
  </thead>
  <tbody>
  <?php do { ?>
    <tr>
      <td><?php echo $row_rstable1['table1_id']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm2']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm3']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm6']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm10']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm12']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm13']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm18']; ?></td>
    </tr>
    </tbody>
    <?php } while ($row_rstable1 = mysql_fetch_assoc($rstable1)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($rstable1);
?>
