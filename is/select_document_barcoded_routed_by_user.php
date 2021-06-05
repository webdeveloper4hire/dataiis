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
$query_rsuser = "SELECT * FROM users_tb ORDER BY username ASC";
$rsuser = mysql_query($query_rsuser, $connection) or die(mysql_error());
$row_rsuser = mysql_fetch_assoc($rsuser);
$totalRows_rsuser = mysql_num_rows($rsuser);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select</title>
</head>

<body>
<h3>Select Documents Routed by User to Summary(<?php echo $_GET['type']; ?>)</h3>
<form action="print_document_barcoded_routed_by_user_<?php echo $_GET['type']; ?>.php" method="get" target="_blank">
<table class="table table-hover">
  <tr>
    <td><select name="tb2_colunm11" required="required">
      <option value="admin">Select User</option>
	  <?php
do {  
?>
      <option value="<?php echo $row_rsuser['username']?>"><?php echo $row_rsuser['username']?></option>
      <?php
} while ($row_rsuser = mysql_fetch_assoc($rsuser));
  $rows = mysql_num_rows($rsuser);
  if($rows > 0) {
      mysql_data_seek($rsuser, 0);
	  $row_rsuser = mysql_fetch_assoc($rsuser);
  }
?>
    </select></td>
     <td>Date Received:</td>
     <td><input type="text" name="date" value="<?php echo date("Y-m"); ?>" />
     <br /><i>Format: YYYY-MM-DD or YYYY-MM or YYYY</i></td>
     <td>STATUS:</td>
     <td><select name="tb2_colunm10">
	  <option value="IN-BARCODED">IN-BARCODED</option>
      <option value="OUT-BARCODED" selected>OUT-BARCODED</option>
      <option value="IN">IN</option>
      <option value="OUT">OUT</option>
      <option value="IN/Yellow Lane">IN/Yellow Lane</option>
      <option value="OUT/Yellow Lane">OUT/Yellow Lane</option>
      <option value="IN/URGENT">IN/URGENT</option>
      <option value="OUT/URGENT">OUT/URGENT</option>
      <option value="IN/DUE">IN/DUE</option>
      <option value="OUT/DUE">OUT/DUE</option>
      <option value="ACCOMPLISHED">ACCOMPLISHED</option>
      <option value="Others">Others</option>
      </select></td>
     <td><input type="submit" value="Go" /></td>                 
  </tr>
</table>
<input type="hidden" name="tb1_colunm1" value="Document-Tracking" />
</form>
</body>
</html>
<?php
mysql_free_result($rsuser);
?>
