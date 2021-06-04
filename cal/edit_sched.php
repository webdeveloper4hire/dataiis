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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE sched_tb SET approved=%s, title=%s, division=%s, co_host_person=%s, contact_email=%s, start_date=%s, start_time=%s, end_date=%s, end_time=%s, meeting_id=%s, password=%s, others=%s WHERE sched_id=%s",
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
                       GetSQLValueString($_POST['others'], "text"),
                       GetSQLValueString($_POST['sched_id'], "int"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($updateSQL, $connection) or die(mysql_error());

  $updateGoTo = "confirmed_global.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

mysql_select_db($database_connection, $connection);
$query_rssched = "SELECT * FROM sched_tb WHERE sched_id = " . $_GET['sched_id'] . "";
$rssched = mysql_query($query_rssched, $connection) or die(mysql_error());
$row_rssched = mysql_fetch_assoc($rssched);
$totalRows_rssched = mysql_num_rows($rssched);
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
<legend>Update</legend>
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Sched ID:</td>
      <td><?php echo $row_rssched['sched_id']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Approved:</td>
      <td>
      <select name="approved">
      	<option value="<?php echo htmlentities($row_rssched['approved'], ENT_COMPAT, 'utf-8'); ?>" selected="selected"><?php echo htmlentities($row_rssched['approved'], ENT_COMPAT, 'utf-8'); ?></option>
        <option value="<?php echo htmlentities($row_rssched['approved'], ENT_COMPAT, 'utf-8'); ?>">--</option>
        <option value="YES">YES</option>
        <option value="NO">NO</option>
      </select>
      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Title:</td>
      <td><input type="text" name="title" value="<?php echo htmlentities($row_rssched['title'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Division:</td>
      <td><input type="text" name="division" value="<?php echo htmlentities($row_rssched['division'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Co-Host Person:</td>
      <td><input type="text" name="co_host_person" value="<?php echo htmlentities($row_rssched['co_host_person'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Contact Email:</td>
      <td><input type="text" name="contact_email" value="<?php echo htmlentities($row_rssched['contact_email'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Start Date:</td>
      <td><input type="date" name="start_date" value="<?php echo htmlentities($row_rssched['start_date'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Start Time:</td>
      <td><input type="time" name="start_time" value="<?php echo htmlentities($row_rssched['start_time'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">End Date:</td>
      <td><input type="date" name="end_date" value="<?php echo htmlentities($row_rssched['end_date'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">End Time:</td>
      <td><input type="time" name="end_time" value="<?php echo htmlentities($row_rssched['end_time'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <!--<tr valign="baseline">
      <td nowrap="nowrap" align="right">Meeting ID:</td>
      <td><input type="text" name="meeting_id" value="<?php echo htmlentities($row_rssched['meeting_id'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Password:</td>
      <td><input type="text" name="password" value="<?php echo htmlentities($row_rssched['password'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>-->
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Attachment:</td>
      <td><input type="text" name="others" value="<?php echo htmlentities($row_rssched['others'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Update" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="sched_id" value="<?php echo $row_rssched['sched_id']; ?>" />
</form>
</fieldset>
</body>
</html>
<?php
mysql_free_result($rssched);
?>
