<?php require_once('../Connections/connection.php'); ?>
<?php require_once('config.php'); ?>
<?php require_once('access_barcode.php'); ?>
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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_rstable2 = 10;
$pageNum_rstable2 = 0;
if (isset($_GET['pageNum_rstable2'])) {
  $pageNum_rstable2 = $_GET['pageNum_rstable2'];
}
$startRow_rstable2 = $pageNum_rstable2 * $maxRows_rstable2;

mysql_select_db($database_connection, $connection);
$query_rstable2 = "SELECT tb2_colunm18,table2.table2_id,table2.tb2_colunm2,table2.tb2_colunm3,table2.tb2_colunm4,table2.tb2_colunm5,table2.tb2_colunm6,table2.tb2_colunm7,table2.tb2_colunm8,table2.tb2_colunm9,table2.tb2_colunm10,table2.tb2_colunm11,table2.tb2_colunm14,table1. * 
FROM table2
LEFT JOIN table1 ON table2.tb2_colunm2 = table1.table1_id WHERE tb2_colunm1 = 'Document-Action' AND tb2_colunm10 = 'OUT-BARCODED' AND tb2_colunm13 LIKE '%". $_GET['rdate'] ."%' ORDER BY table2_id DESC";
$query_limit_rstable2 = sprintf("%s LIMIT %d, %d", $query_rstable2, $startRow_rstable2, $maxRows_rstable2);
$rstable2 = mysql_query($query_limit_rstable2, $connection) or die(mysql_error());
$row_rstable2 = mysql_fetch_assoc($rstable2);

if (isset($_GET['totalRows_rstable2'])) {
  $totalRows_rstable2 = $_GET['totalRows_rstable2'];
} else {
  $all_rstable2 = mysql_query($query_rstable2);
  $totalRows_rstable2 = mysql_num_rows($all_rstable2);
}
$totalPages_rstable2 = ceil($totalRows_rstable2/$maxRows_rstable2)-1;

$queryString_rstable2 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rstable2") == false && 
        stristr($param, "totalRows_rstable2") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rstable2 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rstable2 = sprintf("&totalRows_rstable2=%d%s", $totalRows_rstable2, $queryString_rstable2);
?>
<?php 
// Elapse time
$time =strtotime ($row_rstable1['tb1_colunm5']);

function humanTiming ($time)
{

    $time = time() - $time; // to get the time since that moment

    $tokens = array (
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Barcodes</title>
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



<?php if ($totalRows_rstable2 > 0) { // Show if recordset not empty ?>  
			<table border="1" cellspacing="0" cellpadding="5"  class="jermar" id="datatables">
  <thead>
  <tr>
    <td colspan="11" align="center"><strong>REGIONAL DOCUMENT TRACKING SUMMARY REPORT FOR <?php echo date("d-M-Y"); ?> <!--DOC.NO. <?php echo $_GET['start_id'];?> to <?php echo $_GET['end_id'];?> --> [<?php echo $totalRows_rstable2 ?>]</strong></td>
    </tr>
                <tr>
                  
                  <th>Barcode</th>
                  <th>Document#</th>
                  <th>Subject</th>
                  <th>Date Received</th>
                  <th>Time</th>
                  <th>Released to</th>
                  <th>Date Released</th>
                  <th>Time</th>
                  <th>Action</th>
                  <th>Time</th>
                </tr>
                </thead>
                <tbody>
                <?php do { ?>
                  <tr>
                    
                    
                    <td><?php echo $row_rstable2['tb2_colunm18']; ?></td>
                    <td><?php echo $row_rstable2['tb1_colunm2']; ?>-<?php echo $row_rstable2['tb1_colunm3']; ?>-<?php echo $row_rstable2['tb2_colunm2']; ?></td>
                    <td><?php echo $row_rstable2['tb1_colunm7']; ?></td>
                    <td><?php echo $row_rstable2['tb2_colunm4']; ?></td>
                    <td><?php echo $row_rstable2['tb2_colunm5']; ?></td>
                    <td><?php echo $row_rstable2['tb2_colunm6']; ?></td>
                    <td><?php echo $row_rstable2['tb2_colunm7']; ?></td>
                    <td><?php echo $row_rstable2['tb2_colunm8']; ?></td>
                    <td><?php echo $row_rstable2['tb2_colunm9']; ?></td>
                    <td><?php echo $row_rstable2['tb2_colunm14']; ?></td>
                  </tr>
                  <?php } while ($row_rstable2 = mysql_fetch_assoc($rstable2)); ?>
              </tbody>
              </table>
              <?php } // Show if recordset not empty ?>
</body>
</html>
<?php
mysql_free_result($rstable2);
?>