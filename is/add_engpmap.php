<?php require_once('../Connections/connection.php'); ?>
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
  $updateSQL = sprintf("UPDATE table1 SET tb1_colunm1=%s, tb1_colunm2=%s, tb1_colunm3=%s, tb1_colunm4=%s, tb1_colunm5=%s, tb1_colunm6=%s, tb1_colunm7=%s, tb1_colunm8=%s, tb1_colunm9=%s, tb1_colunm10=%s, tb1_colunm11=%s, tb1_colunm12=%s, tb1_colunm13=%s, tb1_colunm14=%s, tb1_colunm15=%s, tb1_colunm16=%s, tb1_colunm17=%s, tb1_colunm18=%s, tb1_colunm19=%s, tb1_colunm20=%s, tb1_colunm21=%s, tb1_colunm22=%s, tb1_colunm23=%s, tb1_colunm24=%s, tb1_colunm25=%s, tb1_colunm26=%s, tb1_colunm27=%s, tb1_colunm28=%s, tb1_colunm29=%s, tb1_colunm30=%s, tb1_colunm31=%s, tb1_colunm32=%s, tb1_colunm33=%s, tb1_colunm34=%s, tb1_colunm35=%s, tb1_colunm36=%s, tb1_colunm37=%s, tb1_colunm38=%s, tb1_colunm39=%s, tb1_colunm40=%s, tb1_colunm41=%s, tb1_colunm42=%s, tb1_colunm43=%s, tb1_colunm44=%s, tb1_colunm45=%s, tb1_colunm46=%s, tb1_colunm47=%s, tb1_colunm48=%s, tb1_colunm49=%s, tb1_colunm50=%s, tb1_colunm51=%s, tb1_colunm52=%s, tb1_colunm53=%s, tb1_colunm54=%s, tb1_colunm55=%s, tb1_colunm56=%s, tb1_colunm57=%s, tb1_colunm58=%s, tb1_colunm59=%s, tb1_colunm60=%s, tb1_colunm61=%s, tb1_colunm62=%s, tb1_colunm63=%s, tb1_colunm64=%s, tb1_colunm65=%s, tb1_colunm66=%s, tb1_colunm67=%s, tb1_colunm68=%s, tb1_colunm69=%s, tb1_colunm70=%s, tb1_colunm71=%s, tb1_colunm72=%s, tb1_colunm73=%s, tb1_colunm74=%s, tb1_colunm75=%s, tb1_colunm76=%s, tb1_colunm77=%s, tb1_colunm78=%s, tb1_colunm79=%s, tb1_colunm80=%s, tb1_colunm81=%s, tb1_colunm82=%s, tb1_colunm83=%s, tb1_colunm84=%s, tb1_colunm85=%s, tb1_colunm86=%s, tb1_colunm87=%s, tb1_colunm88=%s, tb1_colunm89=%s, tb1_colunm90=%s, tb1_colunm91=%s, tb1_colunm92=%s, tb1_colunm93=%s, tb1_colunm94=%s, tb1_colunm95=%s, tb1_colunm96=%s, tb1_colunm97=%s, tb1_colunm98=%s, tb1_colunm99=%s, tb1_colunm100=%s WHERE table1_id=%s",
                       GetSQLValueString($_POST['tb1_colunm1'], "text"),
                       GetSQLValueString($_POST['tb1_colunm2'], "text"),
                       GetSQLValueString($_POST['tb1_colunm3'], "text"),
                       GetSQLValueString($_POST['tb1_colunm4'], "text"),
                       GetSQLValueString($_POST['tb1_colunm5'], "text"),
                       GetSQLValueString($_POST['tb1_colunm6'], "text"),
                       GetSQLValueString($_POST['tb1_colunm7'], "text"),
                       GetSQLValueString($_POST['tb1_colunm8'], "text"),
                       GetSQLValueString($_POST['tb1_colunm9'], "text"),
                       GetSQLValueString($_POST['tb1_colunm10'], "text"),
                       GetSQLValueString($_POST['tb1_colunm11'], "text"),
                       GetSQLValueString($_POST['tb1_colunm12'], "text"),
                       GetSQLValueString($_POST['tb1_colunm13'], "text"),
                       GetSQLValueString($_POST['tb1_colunm14'], "text"),
                       GetSQLValueString($_POST['tb1_colunm15'], "text"),
                       GetSQLValueString($_POST['tb1_colunm16'], "text"),
                       GetSQLValueString($_POST['tb1_colunm17'], "text"),
                       GetSQLValueString($_POST['tb1_colunm18'], "text"),
                       GetSQLValueString($_POST['tb1_colunm19'], "text"),
                       GetSQLValueString($_POST['tb1_colunm20'], "text"),
                       GetSQLValueString($_POST['tb1_colunm21'], "text"),
                       GetSQLValueString($_POST['tb1_colunm22'], "text"),
                       GetSQLValueString($_POST['tb1_colunm23'], "text"),
                       GetSQLValueString($_POST['tb1_colunm24'], "text"),
                       GetSQLValueString($_POST['tb1_colunm25'], "text"),
                       GetSQLValueString($_POST['tb1_colunm26'], "text"),
                       GetSQLValueString($_POST['tb1_colunm27'], "text"),
                       GetSQLValueString($_POST['tb1_colunm28'], "text"),
                       GetSQLValueString($_POST['tb1_colunm29'], "text"),
                       GetSQLValueString($_POST['tb1_colunm30'], "text"),
                       GetSQLValueString($_POST['tb1_colunm31'], "text"),
                       GetSQLValueString($_POST['tb1_colunm32'], "text"),
                       GetSQLValueString($_POST['tb1_colunm33'], "text"),
                       GetSQLValueString($_POST['tb1_colunm34'], "text"),
                       GetSQLValueString($_POST['tb1_colunm35'], "text"),
                       GetSQLValueString($_POST['tb1_colunm36'], "text"),
                       GetSQLValueString($_POST['tb1_colunm37'], "text"),
                       GetSQLValueString($_POST['tb1_colunm38'], "text"),
                       GetSQLValueString($_POST['tb1_colunm39'], "text"),
                       GetSQLValueString($_POST['tb1_colunm40'], "text"),
                       GetSQLValueString($_POST['tb1_colunm41'], "text"),
                       GetSQLValueString($_POST['tb1_colunm42'], "text"),
                       GetSQLValueString($_POST['tb1_colunm43'], "text"),
                       GetSQLValueString($_POST['tb1_colunm44'], "text"),
                       GetSQLValueString($_POST['tb1_colunm45'], "text"),
                       GetSQLValueString($_POST['tb1_colunm46'], "text"),
                       GetSQLValueString($_POST['tb1_colunm47'], "text"),
                       GetSQLValueString($_POST['tb1_colunm48'], "text"),
                       GetSQLValueString($_POST['tb1_colunm49'], "text"),
                       GetSQLValueString($_POST['tb1_colunm50'], "text"),
                       GetSQLValueString($_POST['tb1_colunm51'], "text"),
                       GetSQLValueString($_POST['tb1_colunm52'], "text"),
                       GetSQLValueString($_POST['tb1_colunm53'], "text"),
                       GetSQLValueString($_POST['tb1_colunm54'], "text"),
                       GetSQLValueString($_POST['tb1_colunm55'], "text"),
                       GetSQLValueString($_POST['tb1_colunm56'], "text"),
                       GetSQLValueString($_POST['tb1_colunm57'], "text"),
                       GetSQLValueString($_POST['tb1_colunm58'], "text"),
                       GetSQLValueString($_POST['tb1_colunm59'], "text"),
                       GetSQLValueString($_POST['tb1_colunm60'], "text"),
                       GetSQLValueString($_POST['tb1_colunm61'], "text"),
                       GetSQLValueString($_POST['tb1_colunm62'], "text"),
                       GetSQLValueString($_POST['tb1_colunm63'], "text"),
                       GetSQLValueString($_POST['tb1_colunm64'], "text"),
                       GetSQLValueString($_POST['tb1_colunm65'], "text"),
                       GetSQLValueString($_POST['tb1_colunm66'], "text"),
                       GetSQLValueString($_POST['tb1_colunm67'], "text"),
                       GetSQLValueString($_POST['tb1_colunm68'], "text"),
                       GetSQLValueString($_POST['tb1_colunm69'], "text"),
                       GetSQLValueString($_POST['tb1_colunm70'], "text"),
                       GetSQLValueString($_POST['tb1_colunm71'], "text"),
                       GetSQLValueString($_POST['tb1_colunm72'], "text"),
                       GetSQLValueString($_POST['tb1_colunm73'], "text"),
                       GetSQLValueString($_POST['tb1_colunm74'], "text"),
                       GetSQLValueString($_POST['tb1_colunm75'], "text"),
                       GetSQLValueString($_POST['tb1_colunm76'], "text"),
                       GetSQLValueString($_POST['tb1_colunm77'], "text"),
                       GetSQLValueString($_POST['tb1_colunm78'], "text"),
                       GetSQLValueString($_POST['tb1_colunm79'], "text"),
                       GetSQLValueString($_POST['tb1_colunm80'], "text"),
                       GetSQLValueString($_POST['tb1_colunm81'], "text"),
                       GetSQLValueString($_POST['tb1_colunm82'], "text"),
                       GetSQLValueString($_POST['tb1_colunm83'], "text"),
                       GetSQLValueString($_POST['tb1_colunm84'], "text"),
                       GetSQLValueString($_POST['tb1_colunm85'], "text"),
                       GetSQLValueString($_POST['tb1_colunm86'], "text"),
                       GetSQLValueString($_POST['tb1_colunm87'], "text"),
                       GetSQLValueString($_POST['tb1_colunm88'], "text"),
                       GetSQLValueString($_POST['tb1_colunm89'], "text"),
                       GetSQLValueString($_POST['tb1_colunm90'], "text"),
                       GetSQLValueString($_POST['tb1_colunm91'], "text"),
                       GetSQLValueString($_POST['tb1_colunm92'], "text"),
                       GetSQLValueString($_POST['tb1_colunm93'], "text"),
                       GetSQLValueString($_POST['tb1_colunm94'], "text"),
                       GetSQLValueString($_POST['tb1_colunm95'], "text"),
                       GetSQLValueString($_POST['tb1_colunm96'], "text"),
                       GetSQLValueString($_POST['tb1_colunm97'], "text"),
                       GetSQLValueString($_POST['tb1_colunm98'], "text"),
                       GetSQLValueString($_POST['tb1_colunm99'], "text"),
                       GetSQLValueString($_POST['tb1_colunm100'], "text"),
                       GetSQLValueString($_POST['table1_id'], "int"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($updateSQL, $connection) or die(mysql_error());

  $updateGoTo = "confirm_global.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

mysql_select_db($database_connection, $connection);
$query_rstable1 = "SELECT * FROM table1 WHERE table1_id = '".$_GET['table1_id']."'";
$rstable1 = mysql_query($query_rstable1, $connection) or die(mysql_error());
$row_rstable1 = mysql_fetch_assoc($rstable1);
$totalRows_rstable1 = mysql_num_rows($rstable1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update</title>
</head>

<body>
<h3>Add Map</h3>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Save" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ID:</td>
      <td><?php echo $row_rstable1['table1_id']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Map:</td>
      <td><input type="text" name="tb1_colunm16" value="<?php echo htmlentities($_GET['tb2_colunm3'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    </table>
    <table style="visibility: hidden;">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm1:</td>
      <td><input type="text" name="tb1_colunm1" value="<?php echo htmlentities($row_rstable1['tb1_colunm1'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm2:</td>
      <td><input type="text" name="tb1_colunm2" value="<?php echo htmlentities($row_rstable1['tb1_colunm2'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm3:</td>
      <td><input type="text" name="tb1_colunm3" value="<?php echo htmlentities($row_rstable1['tb1_colunm3'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm4:</td>
      <td><input type="text" name="tb1_colunm4" value="<?php echo htmlentities($row_rstable1['tb1_colunm4'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm5:</td>
      <td><input type="text" name="tb1_colunm5" value="<?php echo htmlentities($row_rstable1['tb1_colunm5'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm6:</td>
      <td><input type="text" name="tb1_colunm6" value="<?php echo htmlentities($row_rstable1['tb1_colunm6'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm7:</td>
      <td><input type="text" name="tb1_colunm7" value="<?php echo htmlentities($row_rstable1['tb1_colunm7'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm8:</td>
      <td><input type="text" name="tb1_colunm8" value="<?php echo htmlentities($row_rstable1['tb1_colunm8'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm9:</td>
      <td><input type="text" name="tb1_colunm9" value="<?php echo htmlentities($row_rstable1['tb1_colunm9'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm10:</td>
      <td><input type="text" name="tb1_colunm10" value="<?php echo htmlentities($row_rstable1['tb1_colunm10'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm11:</td>
      <td><input type="text" name="tb1_colunm11" value="<?php echo htmlentities($row_rstable1['tb1_colunm11'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm12:</td>
      <td><input type="text" name="tb1_colunm12" value="<?php echo htmlentities($row_rstable1['tb1_colunm12'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm13:</td>
      <td><input type="text" name="tb1_colunm13" value="<?php echo htmlentities($row_rstable1['tb1_colunm13'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm14:</td>
      <td><input type="text" name="tb1_colunm14" value="<?php echo htmlentities($row_rstable1['tb1_colunm14'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm15:</td>
      <td><input type="text" name="tb1_colunm15" value="<?php echo htmlentities($row_rstable1['tb1_colunm15'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm17:</td>
      <td><input type="text" name="tb1_colunm17" value="<?php echo htmlentities($row_rstable1['tb1_colunm17'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm18:</td>
      <td><input type="text" name="tb1_colunm18" value="<?php echo htmlentities($row_rstable1['tb1_colunm18'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm19:</td>
      <td><input type="text" name="tb1_colunm19" value="<?php echo htmlentities($row_rstable1['tb1_colunm19'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm20:</td>
      <td><input type="text" name="tb1_colunm20" value="<?php echo htmlentities($row_rstable1['tb1_colunm20'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm21:</td>
      <td><input type="text" name="tb1_colunm21" value="<?php echo htmlentities($row_rstable1['tb1_colunm21'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm22:</td>
      <td><input type="text" name="tb1_colunm22" value="<?php echo htmlentities($row_rstable1['tb1_colunm22'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm23:</td>
      <td><input type="text" name="tb1_colunm23" value="<?php echo htmlentities($row_rstable1['tb1_colunm23'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm24:</td>
      <td><input type="text" name="tb1_colunm24" value="<?php echo htmlentities($row_rstable1['tb1_colunm24'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm25:</td>
      <td><input type="text" name="tb1_colunm25" value="<?php echo htmlentities($row_rstable1['tb1_colunm25'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm26:</td>
      <td><input type="text" name="tb1_colunm26" value="<?php echo htmlentities($row_rstable1['tb1_colunm26'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm27:</td>
      <td><input type="text" name="tb1_colunm27" value="<?php echo htmlentities($row_rstable1['tb1_colunm27'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm28:</td>
      <td><input type="text" name="tb1_colunm28" value="<?php echo htmlentities($row_rstable1['tb1_colunm28'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm29:</td>
      <td><input type="text" name="tb1_colunm29" value="<?php echo htmlentities($row_rstable1['tb1_colunm29'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm30:</td>
      <td><input type="text" name="tb1_colunm30" value="<?php echo htmlentities($row_rstable1['tb1_colunm30'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm31:</td>
      <td><input type="text" name="tb1_colunm31" value="<?php echo htmlentities($row_rstable1['tb1_colunm31'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm32:</td>
      <td><input type="text" name="tb1_colunm32" value="<?php echo htmlentities($row_rstable1['tb1_colunm32'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm33:</td>
      <td><input type="text" name="tb1_colunm33" value="<?php echo htmlentities($row_rstable1['tb1_colunm33'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm34:</td>
      <td><input type="text" name="tb1_colunm34" value="<?php echo htmlentities($row_rstable1['tb1_colunm34'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm35:</td>
      <td><input type="text" name="tb1_colunm35" value="<?php echo htmlentities($row_rstable1['tb1_colunm35'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm36:</td>
      <td><input type="text" name="tb1_colunm36" value="<?php echo htmlentities($row_rstable1['tb1_colunm36'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm37:</td>
      <td><input type="text" name="tb1_colunm37" value="<?php echo htmlentities($row_rstable1['tb1_colunm37'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm38:</td>
      <td><input type="text" name="tb1_colunm38" value="<?php echo htmlentities($row_rstable1['tb1_colunm38'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm39:</td>
      <td><input type="text" name="tb1_colunm39" value="<?php echo htmlentities($row_rstable1['tb1_colunm39'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm40:</td>
      <td><input type="text" name="tb1_colunm40" value="<?php echo htmlentities($row_rstable1['tb1_colunm40'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm41:</td>
      <td><input type="text" name="tb1_colunm41" value="<?php echo htmlentities($row_rstable1['tb1_colunm41'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm42:</td>
      <td><input type="text" name="tb1_colunm42" value="<?php echo htmlentities($row_rstable1['tb1_colunm42'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm43:</td>
      <td><input type="text" name="tb1_colunm43" value="<?php echo htmlentities($row_rstable1['tb1_colunm43'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm44:</td>
      <td><input type="text" name="tb1_colunm44" value="<?php echo htmlentities($row_rstable1['tb1_colunm44'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm45:</td>
      <td><input type="text" name="tb1_colunm45" value="<?php echo htmlentities($row_rstable1['tb1_colunm45'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm46:</td>
      <td><input type="text" name="tb1_colunm46" value="<?php echo htmlentities($row_rstable1['tb1_colunm46'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm47:</td>
      <td><input type="text" name="tb1_colunm47" value="<?php echo htmlentities($row_rstable1['tb1_colunm47'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm48:</td>
      <td><input type="text" name="tb1_colunm48" value="<?php echo htmlentities($row_rstable1['tb1_colunm48'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm49:</td>
      <td><input type="text" name="tb1_colunm49" value="<?php echo htmlentities($row_rstable1['tb1_colunm49'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm50:</td>
      <td><input type="text" name="tb1_colunm50" value="<?php echo htmlentities($row_rstable1['tb1_colunm50'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm51:</td>
      <td><input type="text" name="tb1_colunm51" value="<?php echo htmlentities($row_rstable1['tb1_colunm51'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm52:</td>
      <td><input type="text" name="tb1_colunm52" value="<?php echo htmlentities($row_rstable1['tb1_colunm52'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm53:</td>
      <td><input type="text" name="tb1_colunm53" value="<?php echo htmlentities($row_rstable1['tb1_colunm53'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm54:</td>
      <td><input type="text" name="tb1_colunm54" value="<?php echo htmlentities($row_rstable1['tb1_colunm54'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm55:</td>
      <td><input type="text" name="tb1_colunm55" value="<?php echo htmlentities($row_rstable1['tb1_colunm55'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm56:</td>
      <td><input type="text" name="tb1_colunm56" value="<?php echo htmlentities($row_rstable1['tb1_colunm56'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm57:</td>
      <td><input type="text" name="tb1_colunm57" value="<?php echo htmlentities($row_rstable1['tb1_colunm57'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm58:</td>
      <td><input type="text" name="tb1_colunm58" value="<?php echo htmlentities($row_rstable1['tb1_colunm58'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm59:</td>
      <td><input type="text" name="tb1_colunm59" value="<?php echo htmlentities($row_rstable1['tb1_colunm59'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm60:</td>
      <td><input type="text" name="tb1_colunm60" value="<?php echo htmlentities($row_rstable1['tb1_colunm60'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm61:</td>
      <td><input type="text" name="tb1_colunm61" value="<?php echo htmlentities($row_rstable1['tb1_colunm61'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm62:</td>
      <td><input type="text" name="tb1_colunm62" value="<?php echo htmlentities($row_rstable1['tb1_colunm62'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm63:</td>
      <td><input type="text" name="tb1_colunm63" value="<?php echo htmlentities($row_rstable1['tb1_colunm63'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm64:</td>
      <td><input type="text" name="tb1_colunm64" value="<?php echo htmlentities($row_rstable1['tb1_colunm64'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm65:</td>
      <td><input type="text" name="tb1_colunm65" value="<?php echo htmlentities($row_rstable1['tb1_colunm65'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm66:</td>
      <td><input type="text" name="tb1_colunm66" value="<?php echo htmlentities($row_rstable1['tb1_colunm66'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm67:</td>
      <td><input type="text" name="tb1_colunm67" value="<?php echo htmlentities($row_rstable1['tb1_colunm67'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm68:</td>
      <td><input type="text" name="tb1_colunm68" value="<?php echo htmlentities($row_rstable1['tb1_colunm68'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm69:</td>
      <td><input type="text" name="tb1_colunm69" value="<?php echo htmlentities($row_rstable1['tb1_colunm69'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm70:</td>
      <td><input type="text" name="tb1_colunm70" value="<?php echo htmlentities($row_rstable1['tb1_colunm70'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm71:</td>
      <td><input type="text" name="tb1_colunm71" value="<?php echo htmlentities($row_rstable1['tb1_colunm71'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm72:</td>
      <td><input type="text" name="tb1_colunm72" value="<?php echo htmlentities($row_rstable1['tb1_colunm72'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm73:</td>
      <td><input type="text" name="tb1_colunm73" value="<?php echo htmlentities($row_rstable1['tb1_colunm73'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm74:</td>
      <td><input type="text" name="tb1_colunm74" value="<?php echo htmlentities($row_rstable1['tb1_colunm74'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm75:</td>
      <td><input type="text" name="tb1_colunm75" value="<?php echo htmlentities($row_rstable1['tb1_colunm75'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm76:</td>
      <td><input type="text" name="tb1_colunm76" value="<?php echo htmlentities($row_rstable1['tb1_colunm76'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm77:</td>
      <td><input type="text" name="tb1_colunm77" value="<?php echo htmlentities($row_rstable1['tb1_colunm77'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm78:</td>
      <td><input type="text" name="tb1_colunm78" value="<?php echo htmlentities($row_rstable1['tb1_colunm78'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm79:</td>
      <td><input type="text" name="tb1_colunm79" value="<?php echo htmlentities($row_rstable1['tb1_colunm79'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm80:</td>
      <td><input type="text" name="tb1_colunm80" value="<?php echo htmlentities($row_rstable1['tb1_colunm80'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm81:</td>
      <td><input type="text" name="tb1_colunm81" value="<?php echo htmlentities($row_rstable1['tb1_colunm81'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm82:</td>
      <td><input type="text" name="tb1_colunm82" value="<?php echo htmlentities($row_rstable1['tb1_colunm82'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm83:</td>
      <td><input type="text" name="tb1_colunm83" value="<?php echo htmlentities($row_rstable1['tb1_colunm83'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm84:</td>
      <td><input type="text" name="tb1_colunm84" value="<?php echo htmlentities($row_rstable1['tb1_colunm84'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm85:</td>
      <td><input type="text" name="tb1_colunm85" value="<?php echo htmlentities($row_rstable1['tb1_colunm85'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm86:</td>
      <td><input type="text" name="tb1_colunm86" value="<?php echo htmlentities($row_rstable1['tb1_colunm86'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm87:</td>
      <td><input type="text" name="tb1_colunm87" value="<?php echo htmlentities($row_rstable1['tb1_colunm87'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm88:</td>
      <td><input type="text" name="tb1_colunm88" value="<?php echo htmlentities($row_rstable1['tb1_colunm88'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm89:</td>
      <td><input type="text" name="tb1_colunm89" value="<?php echo htmlentities($row_rstable1['tb1_colunm89'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm90:</td>
      <td><input type="text" name="tb1_colunm90" value="<?php echo htmlentities($row_rstable1['tb1_colunm90'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm91:</td>
      <td><input type="text" name="tb1_colunm91" value="<?php echo htmlentities($row_rstable1['tb1_colunm91'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm92:</td>
      <td><input type="text" name="tb1_colunm92" value="<?php echo htmlentities($row_rstable1['tb1_colunm92'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm93:</td>
      <td><input type="text" name="tb1_colunm93" value="<?php echo htmlentities($row_rstable1['tb1_colunm93'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm94:</td>
      <td><input type="text" name="tb1_colunm94" value="<?php echo htmlentities($row_rstable1['tb1_colunm94'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm95:</td>
      <td><input type="text" name="tb1_colunm95" value="<?php echo htmlentities($row_rstable1['tb1_colunm95'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm96:</td>
      <td><input type="text" name="tb1_colunm96" value="<?php echo htmlentities($row_rstable1['tb1_colunm96'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm97:</td>
      <td><input type="text" name="tb1_colunm97" value="<?php echo htmlentities($row_rstable1['tb1_colunm97'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm98:</td>
      <td><input type="text" name="tb1_colunm98" value="<?php echo htmlentities($row_rstable1['tb1_colunm98'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm99:</td>
      <td><input type="text" name="tb1_colunm99" value="<?php echo htmlentities($row_rstable1['tb1_colunm99'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm100:</td>
      <td><input type="text" name="tb1_colunm100" value="<?php echo htmlentities($row_rstable1['tb1_colunm100'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Save" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="table1_id" value="<?php echo $row_rstable1['table1_id']; ?>" />
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($rstable1);
?>
