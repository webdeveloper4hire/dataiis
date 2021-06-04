<?php require_once('../Connections/connection.php'); ?>
<?php date_default_timezone_set('Asia/Manila'); ?>
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
<h3>Select  Documents by Category and Date</h3>
<form action="print_documents_category_date.php" method="get" target="_blank">
<table class="table table-hover">
  <tr>
    <td><select name="type">
        	<option value="E">Category</option>
            <option value="E">---</option>
            <option value="E" selected="selected">Email</option>
        	<option value="CO">Central Office</option>
        	<option value="P">PENRO</option>
         	<option value="C">CENRO</option>
         	<option value="B">Bureau</option>
        	<option value="LRC">LRC</option>
       		<option value="PASU">PASU</option>
         	<option value="OG">Outgoing</option>
         	<option value="OB">Outgoing/Barcoded</option>
          	<option value="0">Others</option>
    	</select>
     </td>                            
     <td>Date:</td>
     <td><input type="text" name="date" value="<?php echo date("Y-m"); ?>" /></td>
     <td><input type="submit" value="Go" /></td>                 
  </tr>
</table>
</form>
</body>
</html>
<?php
mysql_free_result($rsuser);
?>
