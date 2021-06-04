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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE table3 SET tb3_colunm1=%s, tb3_colunm2=%s, tb3_colunm3=%s, tb3_colunm4=%s, tb3_colunm5=%s, tb3_colunm6=%s, tb3_colunm7=%s, tb3_colunm8=%s, tb3_colunm9=%s, tb3_colunm10=%s, tb3_colunm11=%s, tb3_colunm12=%s, tb3_colunm13=%s, tb3_colunm14=%s, tb3_colunm15=%s, tb3_colunm16=%s, tb3_colunm17=%s, tb3_colunm18=%s, tb3_colunm19=%s, tb3_colunm20=%s, tb3_colunm21=%s, tb3_colunm22=%s, tb3_colunm23=%s, tb3_colunm24=%s, tb3_colunm25=%s, tb3_colunm26=%s, tb3_colunm27=%s, tb3_colunm28=%s, tb3_colunm29=%s, tb3_colunm30=%s WHERE table3_id=%s",
                       GetSQLValueString($_POST['tb3_colunm1'], "text"),
                       GetSQLValueString($_POST['tb3_colunm2'], "text"),
                       GetSQLValueString($_POST['tb3_colunm3'], "text"),
                       GetSQLValueString($_POST['tb3_colunm4'], "text"),
                       GetSQLValueString($_POST['tb3_colunm5'], "text"),
                       GetSQLValueString($_POST['tb3_colunm6'], "text"),
                       GetSQLValueString($_POST['tb3_colunm7'], "text"),
                       GetSQLValueString($_POST['tb3_colunm8'], "text"),
                       GetSQLValueString($_POST['tb3_colunm9'], "text"),
                       GetSQLValueString($_POST['tb3_colunm10'], "text"),
                       GetSQLValueString($_POST['tb3_colunm11'], "text"),
                       GetSQLValueString($_POST['tb3_colunm12'], "text"),
                       GetSQLValueString($_POST['tb3_colunm13'], "text"),
                       GetSQLValueString($_POST['tb3_colunm14'], "text"),
                       GetSQLValueString($_POST['tb3_colunm15'], "text"),
                       GetSQLValueString($_POST['tb3_colunm16'], "text"),
                       GetSQLValueString($_POST['tb3_colunm17'], "text"),
                       GetSQLValueString($_POST['tb3_colunm18'], "text"),
                       GetSQLValueString($_POST['tb3_colunm19'], "text"),
                       GetSQLValueString($_POST['tb3_colunm20'], "text"),
                       GetSQLValueString($_POST['tb3_colunm21'], "text"),
                       GetSQLValueString($_POST['tb3_colunm22'], "text"),
                       GetSQLValueString($_POST['tb3_colunm23'], "text"),
                       GetSQLValueString($_POST['tb3_colunm24'], "text"),
                       GetSQLValueString($_POST['tb3_colunm25'], "text"),
                       GetSQLValueString($_POST['tb3_colunm26'], "text"),
                       GetSQLValueString($_POST['tb3_colunm27'], "text"),
                       GetSQLValueString($_POST['tb3_colunm28'], "text"),
                       GetSQLValueString($_POST['tb3_colunm29'], "text"),
                       GetSQLValueString($_POST['tb3_colunm30'], "text"),
                       GetSQLValueString($_POST['table3_id'], "int"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($updateSQL, $connection) or die(mysql_error());

  $updateGoTo = "confirmed.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_rstable3 = "-1";
if (isset($_GET['table3_id'])) {
  $colname_rstable3 = $_GET['table3_id'];
}
mysql_select_db($database_connection, $connection);
$query_rstable3 = sprintf("SELECT * FROM table3 WHERE table3_id = %s", GetSQLValueString($colname_rstable3, "int"));
$rstable3 = mysql_query($query_rstable3, $connection) or die(mysql_error());
$row_rstable3 = mysql_fetch_assoc($rstable3);
$totalRows_rstable3 = mysql_num_rows($rstable3);
?>
<?php require_once('head.php'); ?>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ID:</td>
      <td><input type="text" name="tb3_colunm1" value="<?php echo htmlentities($row_rstable3['tb3_colunm1'], ENT_COMPAT, 'utf-8'); ?>"  /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Date:</td>
      <td><input type="date" name="tb3_colunm2" value="<?php echo htmlentities($row_rstable3['tb3_colunm2'], ENT_COMPAT, 'utf-8'); ?>" readonly /></td>
    </tr>
    <tr <?php if ($_GET['action'] != Attend) { ?>hidden<?php } ?> valign="baseline">
      <td nowrap="nowrap" align="right">Attend:</td>
      <td><input type="time" name="tb3_colunm3" value="<?php if ($_GET['action'] == Attend && $row_rstable3 == NULL) {echo date('H:i');} else{ echo htmlentities($row_rstable3['tb3_colunm3'], ENT_COMPAT, 'utf-8'); } ?>"  readonly /></td>
    </tr>
    <tr <?php if ($_GET['action'] != OUT) { ?>hidden<?php } ?> valign="baseline">
      <td nowrap="nowrap" align="right">OUT:</td>
      <td><input type="time" name="tb3_colunm4" value="<?php if ($_GET['action'] == OUT && $row_rstable4 == NULL) {echo date('H:i');} else{ echo htmlentities($row_rstable3['tb3_colunm4'], ENT_COMPAT, 'utf-8'); } ?>"  readonly /></td>
    </tr>
    <tr <?php if ($_GET['action'] != IN) { ?>hidden<?php } ?> valign="baseline">
      <td nowrap="nowrap" align="right">IN:</td>
      <td><input type="time" name="tb3_colunm5" value="<?php if ($_GET['action'] == IN && $row_rstable5 == NULL) {echo date('H:i');} else{ echo htmlentities($row_rstable3['tb3_colunm5'], ENT_COMPAT, 'utf-8'); } ?>"  readonly /></td>
    </tr>
    <tr <?php if ($_GET['action'] != Leave) { ?>hidden<?php } ?> valign="baseline">
      <td nowrap="nowrap" align="right">Leave:</td>
      <td><input type="time" name="tb3_colunm6" value="<?php if ($_GET['action'] == Leave && $row_rstable6 == NULL) {echo date('H:i');} else{ echo htmlentities($row_rstable3['tb3_colunm6'], ENT_COMPAT, 'utf-8'); } ?>"  readonly /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Task:</td>
      <td><input type="text" name="tb3_colunm7" value="<?php echo htmlentities($row_rstable3['tb3_colunm7'], ENT_COMPAT, 'utf-8'); ?>"  /></td>
    </tr>
    <tr valign="baseline">
      <td align="right" valign="top">Accomplishment:</td>
      <td><textarea name="tb3_colunm8" rows="5"><?php echo htmlentities($row_rstable3['tb3_colunm8'], ENT_COMPAT, 'utf-8'); ?></textarea></td>
    </tr>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="<?php echo $_GET['action'] ?>" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="table3_id" value="<?php echo $row_rstable3['table3_id']; ?>" />
</form>
<?php require_once('footer.php'); ?>
<?php
mysql_free_result($rstable3);
?>
