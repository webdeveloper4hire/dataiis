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
$query_rstable3 = "SELECT * FROM table3 WHERE table3_id = '".$_GET['table3_id']."'";
$rstable3 = mysql_query($query_rstable3, $connection) or die(mysql_error());
$row_rstable3 = mysql_fetch_assoc($rstable3);
$totalRows_rstable3 = mysql_num_rows($rstable3);

mysql_select_db($database_connection, $connection);
$query_rsusers = "SELECT * FROM users_tb WHERE user_id = '".$_GET['user_id']."'";
$rsusers = mysql_query($query_rsusers, $connection) or die(mysql_error());
$row_rsusers = mysql_fetch_assoc($rsusers);
$totalRows_rsusers = mysql_num_rows($rsusers);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Daily Accomplishment</title>

</head>

<body>
<table width="600" border="0" cellspacing="0" align="center" class="jermar">
  <tr>
    <td>

<table height="50" border="0" cellspacing="1" class="jermar" align="center">
      <tr>
        <td width="50" align="center"><img src="../images/logogrey.jpg" width="50" /></td>
        <td>
        Department of Environment and Natural Resources<br />
        MIMAROPA Region</td>
      </tr>
</table>
<p>
Name: <?php echo $row_rsusers['firstname']; ?> <?php echo $row_rsusers['middlename']; ?> <?php echo $row_rsusers['lastname']; ?><br/>
Position: <?php echo $row_rsusers['designation']; ?><br/>
Office: <?php echo $row_rsusers['division']; ?><br/>
Date: <?php echo date('F d, Y', strtotime($row_rstable3['tb3_colunm2'])); ?>
</p>

<h3>Work Accomplishments</h3>

<p><?php echo nl2br($row_rstable3['tb3_colunm8']); ?></p>

<p>Submitted by</p>
<p><?php echo $row_rsusers['firstname']; ?> <?php echo $row_rsusers['middlename']; ?> <?php echo $row_rsusers['lastname']; ?></p>
<br/>

<p>Noted by</p>
<p>_______________________<br/>
&nbsp; &nbsp; &nbsp;ARD/Division Chief</p>
<p align="center"><em>(Note:  This is a computer-generated document, hence, signature is not  required)</em></p>
</td>
</tr>
</table>
</body>
</html>
<?php
mysql_free_result($rstable3);
?>
