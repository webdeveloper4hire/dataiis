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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO table3 (table3_id, tb3_colunm1, tb3_colunm2, tb3_colunm3, tb3_colunm4, tb3_colunm5, tb3_colunm6, tb3_colunm7, tb3_colunm8, tb3_colunm9, tb3_colunm10, tb3_colunm11, tb3_colunm12, tb3_colunm13, tb3_colunm14, tb3_colunm15, tb3_colunm16, tb3_colunm17, tb3_colunm18, tb3_colunm19, tb3_colunm20, tb3_colunm21, tb3_colunm22, tb3_colunm23, tb3_colunm24, tb3_colunm25, tb3_colunm26, tb3_colunm27, tb3_colunm28, tb3_colunm29, tb3_colunm30) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['table3_id'], "int"),
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
                       GetSQLValueString($_POST['tb3_colunm30'], "text"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($insertSQL, $connection) or die(mysql_error());

  $insertGoTo = "confirmed.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<?php require_once('head.php'); ?>
<h3>New Attendance</h3>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Item No.:</td>
      <td><input type="text" name="tb3_colunm1" value="<?php echo $_GET['user_id'] ?>" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Date:</td>
      <td><input type="text" name="tb3_colunm2" value="<?php echo date('Y-m-d') ?>" readonly /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Attend:</td>
      <td><input type="time" name="tb3_colunm3" value="<?php echo date('H:i') ?>" readonly /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Task/Target:</td>
      <td><input type="text" name="tb3_colunm7" value="" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right" valign="top">Accomplishment/MOV:</td>
      <td>
      <textarea name="tb3_colunm8" rows="5"></textarea>
      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="SAVE" /></td>
    </tr>
  </table>
  <input type="hidden" name="tb3_colunm4" value="" />
  <input type="hidden" name="tb3_colunm5" value="" />
  <input type="hidden" name="tb3_colunm6" value="" />
  <input type="hidden" name="MM_insert" value="form1" />
</form>
<?php require_once('footer.php'); ?>