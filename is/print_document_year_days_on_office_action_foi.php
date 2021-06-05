<?php require_once('../Connections/connection.php'); ?>
<?php require_once('config.php'); ?>
<?php require_once('access_global.php'); ?>
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
$query_rstable1 = "SELECT table2.table2_id,tb2_colunm2,table2.tb2_colunm3,table2.tb2_colunm4,table2.tb2_colunm6,table2.tb2_colunm7,table2.tb2_colunm9,tb2_colunm13,table1. * 
FROM table2
LEFT JOIN table1 ON table2.tb2_colunm2 = table1.table1_id
WHERE table1.tb1_colunm22 LIKE 'Y' AND table1.tb1_colunm5 LIKE '%".$_GET['rdate']."%' ORDER BY table1_id DESC
";
$rstable1 = mysql_query($query_rstable1, $connection) or die(mysql_error());
$row_rstable1 = mysql_fetch_assoc($rstable1);
$totalRows_rstable1 = mysql_num_rows($rstable1);
?>
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
    <td colspan="15" align="center"><strong>CY <?php echo $_GET['rdate']; ?> FREEDOM OF INFORMATION (FOI) REGISTRY <?php echo $clientbranch;?> [<?php echo $totalRows_rstable1; ?> Actions]</strong></td>
    </tr>
  <tr>
    <td><strong>No.</strong><?php $i = 1;?></td>
    <td><strong>Year</strong></td>
    <td><strong>Tracking Number</strong></td>
    <td><strong>Request Type</strong></td>
    <td><strong>Date Received</strong></td>
    <td><strong>Title of Request</strong></td>
    <td><strong>Extension</strong></td>
    <td><strong>Status / Action Taken</strong></td>
    <td><strong>Date Finished / Action</strong></td>
    <td><strong>Cost</strong></td>
    <td><strong>Days Lapsed</strong></td>
    <td><strong>Appeal's filed</strong></td>
    <td><strong>Remarks</strong></td>
    <td><strong> </strong></td>
  </tr>
  </thead>
  <tbody>
  <?php do { ?>
    <tr valign="top" class="<?php echo $row_rstable1['table2_id']; ?>">
      <td <?php // echo "class=count"; ?>><?php echo $i++; ?></td>
      <td><?php echo $_GET['rdate']; ?></td>
      <td><?php if ($row_rstable1['tb1_colunm2'] != "0") {  ?><?php echo $row_rstable1['tb1_colunm2']; ?>-<?php } ?><?php echo $row_rstable1['tb1_colunm3']; ?>-<?php echo $row_rstable1['table1_id']; ?>
      </td>
      <td>Standard</td>
      <td><?php echo $row_rstable1['tb1_colunm5']; ?></td>

      <td><?php echo $row_rstable1['tb1_colunm7']; ?></td>
      <td>No</td>
      <td><?php echo nl2br($row_rstable1['tb2_colunm9']); ?> by <?php echo $row_rstable1['tb2_colunm3']; ?></td>
      <td><?php if ($row_rstable1['tb2_colunm13'] == NULL) {
                  echo $row_rstable1['tb2_colunm4']; 
          } else {
                  echo $row_rstable1['tb2_colunm13']; 
}
      
       ?></td>
      <td>FREE</td>
      <td>
<?php
//Elapse time in an office

$ts1 = strtotime($row_rstable1['tb1_colunm5']);
if ($row_rstable1['tb2_colunm13'] == NULL) {
    $ts2 = strtotime($row_rstable1['tb2_colunm4']); 
} else {
    $ts2 = strtotime($row_rstable1['tb2_colunm13']); 
}

$seconds_diff = $ts2 - $ts1;

$seconds = $seconds_diff;

$days = $seconds / 86400;
$day_explode = explode(".", $days);
$day = $day_explode[0];

$hours = '.'.$day_explode[1].'';
$hour = $hours * 24;
$hourr = explode(".", $hour);
$hourrs = $hourr[0];

$minute = '.'.$hourr[1].'';
$minutes = $minute * 60;
$minute = explode(".", $minutes);
$minuter = $minute[0];

$seconds = '.'.$minute[1].'';
$second = $seconds * 60;
$second = round($second);
//echo $day.' Days '.$hourrs.' Hours '.$minuter.' minutes, '.$second.' seconds';
echo $day.' Day(s) ';

?>  
	 </td>
	 <td>No</td>
	 <td></td>
   <td><span id="<?php echo $row_rstable1['table2_id']; ?>" title="Hide This">[HIDE]</span>
<script> 
$(function(){ 
   
   $("#<?php echo $row_rstable1['table2_id']; ?>").click(function(){ 
    $(".<?php echo $row_rstable1['table2_id']; ?>").hide(); 
    $("#white").show(); 
    
   }); 
    
}); 
</script></td>
    </tr>
    <?php } while ($row_rstable1 = mysql_fetch_assoc($rstable1)); ?>
    </tbody>
</table>

</body>
</html>
<?php
mysql_free_result($rstable1);
?>
