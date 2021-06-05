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
$query_rstable1 = "SELECT * FROM table1";
$rstable1 = mysql_query($query_rstable1, $connection) or die(mysql_error());
$row_rstable1 = mysql_fetch_assoc($rstable1);
$totalRows_rstable1 = mysql_num_rows($rstable1);$colname_rstable1 = "-1";
if (isset($_GET['table1_id'])) {
  $colname_rstable1 = $_GET['table1_id'];
}
mysql_select_db($database_connection, $connection);
$query_rstable1 = sprintf("SELECT * FROM table1 WHERE table1_id = %s", GetSQLValueString($colname_rstable1, "int"));
$rstable1 = mysql_query($query_rstable1, $connection) or die(mysql_error());
$row_rstable1 = mysql_fetch_assoc($rstable1);
$totalRows_rstable1 = mysql_num_rows($rstable1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $clientalias ;?></title>
<style type="text/css">
.indent { text-indent: 30px; text-align:justify }
table.jermar th, table.jermar td {
  
  font-size : 80%;
  font-family: Ecofont Vera Sans, Arial, Helvetica, sans-serif ;
  src: url('http://www.ecofont.com/assets/files/ecofont_vera_sans_regular.ttf');
  src: local('ecofont_vera_sans_regular.ttf'), 
       local('Ecofont Vera Sans'), 
       url('http://www.ecofont.com/assets/files/ecofont_vera_sans_regular.ttf') format('truetype');
   }
</style>
</head>

<body>
<table width="600" border="0" cellspacing="0" align="center" class="jermar">
  <tr>
    <td>

<table height="50" border="0" cellspacing="1" class="jermar" align="center">
      <tr>
        <td width="50" align="center"><img src="../images/logogrey.jpg" width="50" /></td>
        <td>
        <?php echo $clientfullname;?><br />
        <?php echo $clientbranch;?> Region</td>
      </tr>
</table>

<p align="right">Date Received: <?php echo $newDate = date("d-M-Y", strtotime($row_rstable1['tb1_colunm5'])); ?><br />
RDATS Doc. No.: <?php if ($row_rstable1['tb1_colunm2'] != "0") {  ?><?php echo $row_rstable1['tb1_colunm2']; ?>-<?php } ?><?php echo $row_rstable1['tb1_colunm3']; ?>-<?php echo $row_rstable1['table1_id']; ?></p>

<p align="left">
<?php echo $row_rstable1['tb1_colunm6']; ?><br />
<?php echo $row_rstable1['tb1_colunm4']; ?><br />
<?php echo $row_rstable1['tb1_colunm18']; ?><br />
</p>

<center><h3>ACKNOWLEDGEMENT RECEIPT</h3></center>

<p>Dear Sir/Madam:</p>

<p class="indent">This is to acknowledge receipt of <b><?php echo nl2br($row_rstable1['tb1_colunm7']); ?>.</b></p>

<p class="indent">Please be informed that the subject document was referred to the OFFICE OF THE <?php echo $_GET['tb2_colunm6']; ?><?php echo $_GET['others']; ?> on <?php echo $newDate = date("F d, Y", strtotime($_GET['tb2_colunm7'])); ?> with instructions. You may follow up the status of your document through contact no. <?php echo $_GET['contact_no']; ?> or you may email us at <?php echo $_GET['email']; ?> using the Regional Document Tracking Number <?php if ($row_rstable1['tb1_colunm2'] != "0") {  ?><?php echo $row_rstable1['tb1_colunm2']; ?>-<?php } ?><?php echo $row_rstable1['tb1_colunm3']; ?>-<?php echo $row_rstable1['table1_id']; ?>.</p>

<p align="right"><?php echo $_GET['oic']; ?></p>
<p align="center"><em>(Note:  This is a computer-generated document, hence, signature is not  required)</em><br />
</p>

						               




</td>
</tr>
</table>
</body>
</html>
<?php
mysql_free_result($rstable1);
?>
