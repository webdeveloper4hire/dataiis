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
<h3>Select  Documents Routed by User to Summary(<?php echo $_GET['type']; ?>)</h3>
<form action="print_document_routed_by_user_<?php echo $_GET['type']; ?>.php" method="get" target="_blank">
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
     <td>Released to</td>
     <td><input type="text" name="tb2_colunm6" value="" list="offices" />
<datalist id="offices">
<option value="Office of the Regional Executive Director">
<option value="NGP-Coordinator">
<option value="Regional Public Affairs Office">
<option value="Asst-Regional Director-Technical Services">
<option value="Licenses Patents and Deeds Division">
<option value="Surveys and Mapping Division">
<option value="Conservation and Development Division">
<option value="Enforcement Division">
<option value="Asst-Regional Director-Management Services">
<option value="Legal-Division">
<option value="Planning and Management Division">
<option value="Administrative-Division">
<option value="Finance-Division">
<option value="MGB-MIMA">
<option value="EMB-MIMA">
<option value="HRD Section">
<option value="Records Section">
<option value="Regional ICT Unit">
<!--<option value="Manila Bay Coordinating Office">
<option value="Priority Programs Coordination Office">
<option value="PASu">PASu</option>
<option value="RTDE">RTD ERDS</option>
<option value="RTDF">RTD Forestry</option>
<option value="RTDL">RTD Lands</option>
<option value="RTDP">RTD PAWCZMS</option>-->
                                                </datalist></td>
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
