<?php require_once('../Connections/connection.php'); ?>
<?php require_once('access_global.php'); ?>
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
$query_rsusers = "SELECT * FROM users_tb WHERE username = '".$_SESSION['MM_Username']."'";
$rsusers = mysql_query($query_rsusers, $connection) or die(mysql_error());
$row_rsusers = mysql_fetch_assoc($rsusers);
$totalRows_rsusers = mysql_num_rows($rsusers);

mysql_select_db($database_connection, $connection);
$query_rsnotice = "SELECT * FROM table1 WHERE tb1_colunm2 = 'E' AND tb1_colunm8 = '".$row_rsusers['division']."' AND tb1_colunm24 = 'ONGOING'";
$rsnotice = mysql_query($query_rsnotice, $connection) or die(mysql_error());
$row_rsnotice = mysql_fetch_assoc($rsnotice);
$totalRows_rsnotice = mysql_num_rows($rsnotice);

mysql_select_db($database_connection, $connection);
$query_rsnoticeadmin = "SELECT * FROM table1 WHERE tb1_colunm2 = 'E' AND tb1_colunm24 = 'ONGOING'";
$rsnoticeadmin = mysql_query($query_rsnoticeadmin, $connection) or die(mysql_error());
$row_rsnoticeadmin = mysql_fetch_assoc($rsnoticeadmin);
$totalRows_rsnoticeadmin = mysql_num_rows($rsnoticeadmin);
?>
<?php if ($totalRows_rsnotice != "0") { ?>
<a href="print_documents_category_date.php?type=E&division=<?php echo $row_rsusers['division']; ?>&date=<?php echo date('Y-m'); ?>&status=ONGOING" title="View your notifications!" class="notification"><span>Hi <?php echo $_SESSION['MM_Username']; ?></span><span class="badge"><?php echo $totalRows_rsnotice ?></span></a>
<?php } elseif ($totalRows_rsnoticeadmin != "0" && $row_rsusers['details'] == 'RICTU') { ?>
<a href="print_documents_category_date.php?type=E&division=<?php //echo $row_rsusers['division']; ?>&date=<?php echo date('Y-m'); ?>&status=ONGOING" rel="facebox" title="View all notification!" class="notification"><span>Hi <?php echo $_SESSION['MM_Username']; ?></span><span class="badge"><?php echo $totalRows_rsnoticeadmin ?></span></a>
<?php } else { ?>
<a href="#" title="Sorry no one misses you XD" class="notification"><span>Hi <?php echo $_SESSION['MM_Username']; ?></span></a>
<?php } ?>
<?php
mysql_free_result($rsnotice);
?>