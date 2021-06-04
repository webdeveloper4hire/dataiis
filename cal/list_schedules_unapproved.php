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

mysql_select_db($database_connection, $connection);
$query_rssched = "SELECT * FROM sched_tb WHERE approved = 'NO'";
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
<h3>Schedules for Approval</h3>
<table border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td></td>
    <td></td>
    <td>Approved</td>
    <td>Title</td>
    <td>Division</td>
    <td>Co-Host Person</td>
    <td>Email</td>
    <td>Start Date</td>
    <td>Start Time</td>
    <td>End Date</td>
    <td>End Time</td>
    <!--<td>Meeting ID</td>
    <td>Password</td>-->
  </tr>
  <?php do { ?>
    <tr>
      <td><a href="edit_sched.php?sched_id=<?php echo $row_rssched['sched_id']; ?>">[UPDATE]</a></td>
      <td><a href="<?php echo $row_rssched['others']; ?>">[VIEW]</a></td>
      <td><?php echo $row_rssched['approved']; ?></td>
      <td><?php echo $row_rssched['title']; ?></td>
      <td><?php echo $row_rssched['division']; ?></td>
      <td><?php echo $row_rssched['co_host_person']; ?></td>
      <td><?php echo $row_rssched['contact_email']; ?></td>
      <td><?php echo $row_rssched['start_date']; ?></td>
      <td><?php echo $row_rssched['start_time']; ?></td>
      <td><?php echo $row_rssched['end_date']; ?></td>
      <td><?php echo $row_rssched['end_time']; ?></td>
      <!--<td><?php echo $row_rssched['meeting_id']; ?></td>
      <td><?php echo $row_rssched['password']; ?></td>-->
    </tr>
    <?php } while ($row_rssched = mysql_fetch_assoc($rssched)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($rssched);
?>
