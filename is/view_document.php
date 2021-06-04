<?php require_once('../Connections/connection.php'); ?>
<?php date_default_timezone_set("Asia/Hong_Kong"); ?>
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

$colname_rstable1 = "-1";
if (isset($_GET['table1_id'])) {
  $colname_rstable1 = $_GET['table1_id'];
}
mysql_select_db($database_connection, $connection);
$query_rstable1 = sprintf("SELECT * FROM table1 WHERE table1_id = %s", GetSQLValueString($colname_rstable1, "int"));
$rstable1 = mysql_query($query_rstable1, $connection) or die(mysql_error());
$row_rstable1 = mysql_fetch_assoc($rstable1);
$totalRows_rstable1 = mysql_num_rows($rstable1);

$colname_rstable2 = "-1";
if (isset($_GET['table1_id'])) {
  $colname_rstable2 = $_GET['table1_id'];
}
mysql_select_db($database_connection, $connection);
$query_rstable2 = sprintf("SELECT * FROM table2 WHERE tb2_colunm2 = %s ORDER BY table2_id ASC", GetSQLValueString($colname_rstable2, "text"));
$rstable2 = mysql_query($query_rstable2, $connection) or die(mysql_error());
$row_rstable2 = mysql_fetch_assoc($rstable2);
$totalRows_rstable2 = mysql_num_rows($rstable2);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $row_rstable1['tb1_colunm7']; ?></title>
<style>div.headerdisplayname {font-weight:bold;}
</style>
</head>
<body>
<table border=0 cellspacing=0 cellpadding=0 class="header-part1">
<tr><td><div class="headerdisplayname" style="display:inline;">Subject: </div><?php echo nl2br($row_rstable1['tb1_colunm7']); ?></td></tr>
<tr><td><div class="headerdisplayname" style="display:inline;">From: </div><?php if ($row_rstable1['tb1_colunm6'] == NULL) {echo $row_rstable1['tb1_colunm18'];} else {echo $row_rstable1['tb1_colunm6'];}?></td></tr>
<tr><td><div class="headerdisplayname" style="display:inline;">Date: </div><?php echo $row_rstable1['tb1_colunm5']; ?></td></tr>
</table>

<table border=0 cellspacing=0 cellpadding=0 width="100%" class="header-part2"><tr><td><div class="headerdisplayname" style="display:inline;">To: </div><?php echo $row_rstable1['tb1_colunm8']; ?></td></tr></tr></table><br>

<h3><?php echo nl2br($row_rstable1['tb1_colunm7']); ?></h3>

<hr><br><div style="font-size:12px;color:black;"><img src="../assets/clip.gif" />
<ul>
<li><?php if ($row_rstable1['tb1_colunm10'] != NULL) { ?>
<a href="<?php echo $row_rstable1['tb1_colunm10']; ?>">Attachments <?php echo $row_rstable1['tb1_colunm2']; ?><?php echo $row_rstable1['tb1_colunm3']; ?>-<?php echo $row_rstable1['table1_id']; ?></a>	
<?php } else { ?>.<?php } ?>
</li>
</ul>
</div>
</body>
</html>