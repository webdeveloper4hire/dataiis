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

$currentPage = $_SERVER["PHP_SELF"];

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO table2 (tb2_colunm1, tb2_colunm2, tb2_colunm3, tb2_colunm4, tb2_colunm5, tb2_colunm6, tb2_colunm7) VALUES (%s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['tb2_colunm1'], "text"),
                       GetSQLValueString($_POST['tb2_colunm2'], "text"),
                       GetSQLValueString($_POST['tb2_colunm3'], "text"),
                       GetSQLValueString($_POST['tb2_colunm4'], "text"),
                       GetSQLValueString($_POST['tb2_colunm5'], "text"),
                       GetSQLValueString($_POST['tb2_colunm6'], "text"),
                       GetSQLValueString($_POST['tb2_colunm7'], "text"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($insertSQL, $connection) or die(mysql_error());
}

$maxRows_rsviewmessage = 5;
$pageNum_rsviewmessage = 0;
if (isset($_GET['pageNum_rsviewmessage'])) {
  $pageNum_rsviewmessage = $_GET['pageNum_rsviewmessage'];
}
$startRow_rsviewmessage = $pageNum_rsviewmessage * $maxRows_rsviewmessage;

$colname_rsviewmessage = "-1";
if (isset($_GET['tb2_colunm2'])) {
  $colname_rsviewmessage = $_GET['tb2_colunm2'];
}
$colname2_rsviewmessage = "-2";
if (isset($_GET['tb2_colunm3'])) {
  $colname2_rsviewmessage = $_GET['tb2_colunm3'];
}
mysql_select_db($database_connection, $connection);
$query_rsviewmessage = sprintf("SELECT * FROM table2 WHERE tb2_colunm2 = %s OR tb2_colunm2 = %s", GetSQLValueString($colname_rsviewmessage, "text"),GetSQLValueString($colname2_rsviewmessage, "text"));
$query_limit_rsviewmessage = sprintf("%s LIMIT %d, %d", $query_rsviewmessage, $startRow_rsviewmessage, $maxRows_rsviewmessage);
$rsviewmessage = mysql_query($query_limit_rsviewmessage, $connection) or die(mysql_error());
$row_rsviewmessage = mysql_fetch_assoc($rsviewmessage);

if (isset($_GET['totalRows_rsviewmessage'])) {
  $totalRows_rsviewmessage = $_GET['totalRows_rsviewmessage'];
} else {
  $all_rsviewmessage = mysql_query($query_rsviewmessage);
  $totalRows_rsviewmessage = mysql_num_rows($all_rsviewmessage);
}
$totalPages_rsviewmessage = ceil($totalRows_rsviewmessage/$maxRows_rsviewmessage)-1;

$queryString_rsviewmessage = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rsviewmessage") == false && 
        stristr($param, "totalRows_rsviewmessage") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rsviewmessage = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rsviewmessage = sprintf("&totalRows_rsviewmessage=%d%s", $totalRows_rsviewmessage, $queryString_rsviewmessage);
?>
<?php
$page ="view_message.php";
$tb2_colunm2="tb2_colunm2=";
$tb2_colunm3="&tb2_colunm3=";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="0;URL=<?php printf("%s?pageNum_rsviewmessage=%d%s", $page, $totalPages_rsviewmessage, $queryString_rsviewmessage); ?>">
<title>...</title>
</head>

<body>
<?php printf("%s?pageNum_rsviewmessage=%d%s", $page, $totalPages_rsviewmessage, $queryString_rsviewmessage); ?>
</body>
</html>
<?php
mysql_free_result($rsviewmessage);
?>
