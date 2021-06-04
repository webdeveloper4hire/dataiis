<?php require_once('../Connections/calendarcon.php'); ?>
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO sched_tb (sched_id, approved, title, division, co_host_person, contact_email, start_date, start_time, end_date, end_time, meeting_id, password, others) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['sched_id'], "int"),
                       GetSQLValueString($_POST['approved'], "text"),
                       GetSQLValueString($_POST['title'], "text"),
                       GetSQLValueString($_POST['division'], "text"),
                       GetSQLValueString($_POST['co_host_person'], "text"),
                       GetSQLValueString($_POST['contact_email'], "text"),
                       GetSQLValueString($_POST['start_date'], "text"),
                       GetSQLValueString($_POST['start_time'], "text"),
                       GetSQLValueString($_POST['end_date'], "text"),
                       GetSQLValueString($_POST['end_time'], "text"),
                       GetSQLValueString($_POST['meeting_id'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['others'], "text"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($insertSQL, $connection) or die(mysql_error());

  $insertGoTo = "confirmed_global.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DENR</title>
</head>

<body>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
<fieldset>
<legend>New Schedule</legend>
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Title:</td>
      <td><input type="text" name="title" value="" size="32" required="required" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Division:</td>
      <td><input type="text" name="division" value="" size="32" required="required" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Secretariat/Co-Host Name:</td>
      <td><input type="text" name="co_host_person" value="" size="32" required="required" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Secretariat/Co-Host Email Address:</td>
      <td><input type="text" name="contact_email" value="" size="32" required="required" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Date:</td>
      <td><input type="date" name="start_date" value="<?php echo date("Y-m-d");?>" size="32" required="required" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Time:</td>
      <td><input type="time" name="start_time" value="<?php echo date("H:i");?>" size="32" required="required" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">End Date:</td>
      <td><input type="date" name="end_date" value="" size="32" required="required" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">End Time:</td>
      <td><input type="time" name="end_time" value="" size="32" required="required" /></td>
    </tr>
    <!--<tr valign="baseline">
      <td nowrap="nowrap" align="right">Meeting ID:</td>
      <td><input type="text" name="meeting_id" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Password:</td>
      <td><input type="text" name="password" value="" size="32" /></td>
    </tr>-->
    <tr>
      <td nowrap="nowrap" align="right">Attachment:</td>
      <td><input type="text" name="others" value="<?php echo $_GET['tb2_colunm3']; ?>" readonly="readonly"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Save" /></td>
    </tr>
  </table>
  <input type="hidden" name="approved" value="NO" />
  <input type="hidden" name="MM_insert" value="form1" />
</fieldset>
</form>
</body>
</html>