<?php require_once('../Connections/connection.php'); ?>
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO table2 (table2_id, tb2_colunm1, tb2_colunm2, tb2_colunm3, tb2_colunm4, tb2_colunm5, tb2_colunm6, tb2_colunm7, tb2_colunm8, tb2_colunm9, tb2_colunm10, tb2_colunm11, tb2_colunm12, tb2_colunm13, tb2_colunm14, tb2_colunm15, tb2_colunm16, tb2_colunm17, tb2_colunm18, tb2_colunm19, tb2_colunm20, tb2_colunm21, tb2_colunm22, tb2_colunm23, tb2_colunm24, tb2_colunm25, tb2_colunm26, tb2_colunm27, tb2_colunm28, tb2_colunm29, tb2_colunm30, tb2_colunm31, tb2_colunm32, tb2_colunm33, tb2_colunm34, tb2_colunm35, tb2_colunm36, tb2_colunm37, tb2_colunm38, tb2_colunm39, tb2_colunm40, tb2_colunm41, tb2_colunm42, tb2_colunm43, tb2_colunm44, tb2_colunm45, tb2_colunm46, tb2_colunm47, tb2_colunm48, tb2_colunm49, tb2_colunm50, tb2_colunm51, tb2_colunm52, tb2_colunm53, tb2_colunm54, tb2_colunm55, tb2_colunm56, tb2_colunm57, tb2_colunm58, tb2_colunm59, tb2_colunm60, tb2_colunm61, tb2_colunm62, tb2_colunm63, tb2_colunm64, tb2_colunm65, tb2_colunm66, tb2_colunm67, tb2_colunm68, tb2_colunm69, tb2_colunm70, tb2_colunm71, tb2_colunm72, tb2_colunm73, tb2_colunm74, tb2_colunm75, tb2_colunm76, tb2_colunm77, tb2_colunm78, tb2_colunm79, tb2_colunm80, tb2_colunm81, tb2_colunm82, tb2_colunm83, tb2_colunm84, tb2_colunm85, tb2_colunm86, tb2_colunm87, tb2_colunm88, tb2_colunm89, tb2_colunm90, tb2_colunm91, tb2_colunm92, tb2_colunm93, tb2_colunm94, tb2_colunm95, tb2_colunm96, tb2_colunm97, tb2_colunm98, tb2_colunm99, tb2_colunm100) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['table2_id'], "int"),
                       GetSQLValueString($_POST['tb2_colunm1'], "text"),
                       GetSQLValueString($_POST['tb2_colunm2'], "text"),
                       GetSQLValueString($_POST['tb2_colunm3'], "text"),
                       GetSQLValueString($_POST['tb2_colunm4'], "text"),
                       GetSQLValueString($_POST['tb2_colunm5'], "text"),
                       GetSQLValueString($_POST['tb2_colunm6'], "text"),
                       GetSQLValueString($_POST['tb2_colunm7'], "text"),
                       GetSQLValueString($_POST['tb2_colunm8'], "text"),
                       GetSQLValueString($_POST['tb2_colunm9'], "text"),
                       GetSQLValueString($_POST['tb2_colunm10'], "text"),
                       GetSQLValueString($_POST['tb2_colunm11'], "text"),
                       GetSQLValueString($_POST['tb2_colunm12'], "text"),
                       GetSQLValueString($_POST['tb2_colunm13'], "text"),
                       GetSQLValueString($_POST['tb2_colunm14'], "text"),
                       GetSQLValueString($_POST['tb2_colunm15'], "text"),
                       GetSQLValueString($_POST['tb2_colunm16'], "text"),
                       GetSQLValueString($_POST['tb2_colunm17'], "text"),
                       GetSQLValueString($_POST['tb2_colunm18'], "text"),
                       GetSQLValueString($_POST['tb2_colunm19'], "text"),
                       GetSQLValueString($_POST['tb2_colunm20'], "text"),
                       GetSQLValueString($_POST['tb2_colunm21'], "text"),
                       GetSQLValueString($_POST['tb2_colunm22'], "text"),
                       GetSQLValueString($_POST['tb2_colunm23'], "text"),
                       GetSQLValueString($_POST['tb2_colunm24'], "text"),
                       GetSQLValueString($_POST['tb2_colunm25'], "text"),
                       GetSQLValueString($_POST['tb2_colunm26'], "text"),
                       GetSQLValueString($_POST['tb2_colunm27'], "text"),
                       GetSQLValueString($_POST['tb2_colunm28'], "text"),
                       GetSQLValueString($_POST['tb2_colunm29'], "text"),
                       GetSQLValueString($_POST['tb2_colunm30'], "text"),
                       GetSQLValueString($_POST['tb2_colunm31'], "text"),
                       GetSQLValueString($_POST['tb2_colunm32'], "text"),
                       GetSQLValueString($_POST['tb2_colunm33'], "text"),
                       GetSQLValueString($_POST['tb2_colunm34'], "text"),
                       GetSQLValueString($_POST['tb2_colunm35'], "text"),
                       GetSQLValueString($_POST['tb2_colunm36'], "text"),
                       GetSQLValueString($_POST['tb2_colunm37'], "text"),
                       GetSQLValueString($_POST['tb2_colunm38'], "text"),
                       GetSQLValueString($_POST['tb2_colunm39'], "text"),
                       GetSQLValueString($_POST['tb2_colunm40'], "text"),
                       GetSQLValueString($_POST['tb2_colunm41'], "text"),
                       GetSQLValueString($_POST['tb2_colunm42'], "text"),
                       GetSQLValueString($_POST['tb2_colunm43'], "text"),
                       GetSQLValueString($_POST['tb2_colunm44'], "text"),
                       GetSQLValueString($_POST['tb2_colunm45'], "text"),
                       GetSQLValueString($_POST['tb2_colunm46'], "text"),
                       GetSQLValueString($_POST['tb2_colunm47'], "text"),
                       GetSQLValueString($_POST['tb2_colunm48'], "text"),
                       GetSQLValueString($_POST['tb2_colunm49'], "text"),
                       GetSQLValueString($_POST['tb2_colunm50'], "text"),
                       GetSQLValueString($_POST['tb2_colunm51'], "text"),
                       GetSQLValueString($_POST['tb2_colunm52'], "text"),
                       GetSQLValueString($_POST['tb2_colunm53'], "text"),
                       GetSQLValueString($_POST['tb2_colunm54'], "text"),
                       GetSQLValueString($_POST['tb2_colunm55'], "text"),
                       GetSQLValueString($_POST['tb2_colunm56'], "text"),
                       GetSQLValueString($_POST['tb2_colunm57'], "text"),
                       GetSQLValueString($_POST['tb2_colunm58'], "text"),
                       GetSQLValueString($_POST['tb2_colunm59'], "text"),
                       GetSQLValueString($_POST['tb2_colunm60'], "text"),
                       GetSQLValueString($_POST['tb2_colunm61'], "text"),
                       GetSQLValueString($_POST['tb2_colunm62'], "text"),
                       GetSQLValueString($_POST['tb2_colunm63'], "text"),
                       GetSQLValueString($_POST['tb2_colunm64'], "text"),
                       GetSQLValueString($_POST['tb2_colunm65'], "text"),
                       GetSQLValueString($_POST['tb2_colunm66'], "text"),
                       GetSQLValueString($_POST['tb2_colunm67'], "text"),
                       GetSQLValueString($_POST['tb2_colunm68'], "text"),
                       GetSQLValueString($_POST['tb2_colunm69'], "text"),
                       GetSQLValueString($_POST['tb2_colunm70'], "text"),
                       GetSQLValueString($_POST['tb2_colunm71'], "text"),
                       GetSQLValueString($_POST['tb2_colunm72'], "text"),
                       GetSQLValueString($_POST['tb2_colunm73'], "text"),
                       GetSQLValueString($_POST['tb2_colunm74'], "text"),
                       GetSQLValueString($_POST['tb2_colunm75'], "text"),
                       GetSQLValueString($_POST['tb2_colunm76'], "text"),
                       GetSQLValueString($_POST['tb2_colunm77'], "text"),
                       GetSQLValueString($_POST['tb2_colunm78'], "text"),
                       GetSQLValueString($_POST['tb2_colunm79'], "text"),
                       GetSQLValueString($_POST['tb2_colunm80'], "text"),
                       GetSQLValueString($_POST['tb2_colunm81'], "text"),
                       GetSQLValueString($_POST['tb2_colunm82'], "text"),
                       GetSQLValueString($_POST['tb2_colunm83'], "text"),
                       GetSQLValueString($_POST['tb2_colunm84'], "text"),
                       GetSQLValueString($_POST['tb2_colunm85'], "text"),
                       GetSQLValueString($_POST['tb2_colunm86'], "text"),
                       GetSQLValueString($_POST['tb2_colunm87'], "text"),
                       GetSQLValueString($_POST['tb2_colunm88'], "text"),
                       GetSQLValueString($_POST['tb2_colunm89'], "text"),
                       GetSQLValueString($_POST['tb2_colunm90'], "text"),
                       GetSQLValueString($_POST['tb2_colunm91'], "text"),
                       GetSQLValueString($_POST['tb2_colunm92'], "text"),
                       GetSQLValueString($_POST['tb2_colunm93'], "text"),
                       GetSQLValueString($_POST['tb2_colunm94'], "text"),
                       GetSQLValueString($_POST['tb2_colunm95'], "text"),
                       GetSQLValueString($_POST['tb2_colunm96'], "text"),
                       GetSQLValueString($_POST['tb2_colunm97'], "text"),
                       GetSQLValueString($_POST['tb2_colunm98'], "text"),
                       GetSQLValueString($_POST['tb2_colunm99'], "text"),
                       GetSQLValueString($_POST['tb2_colunm100'], "text"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($insertSQL, $connection) or die(mysql_error());

  $insertGoTo = "confirm_global.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<?php require_once('head.php'); ?>
<div>

<div class="navbar-fixed-top body-title">    
	<h3 class="col-lg-10">Add <?php echo $_GET['tb2_colunm1']; ?></h3>
</div>

<div align="center">

</div>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Continue" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">table2_id:</td>
      <td><input type="text" name="table2_id" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm1:</td>
      <td><input type="text" name="tb2_colunm1" value="<?php echo $_GET['tb2_colunm1']; ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm2:</td>
      <td><input type="text" name="tb2_colunm2" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm3:</td>
      <td><input type="text" name="tb2_colunm3" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm4:</td>
      <td><input type="text" name="tb2_colunm4" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm5:</td>
      <td><input type="text" name="tb2_colunm5" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm6:</td>
      <td><input type="text" name="tb2_colunm6" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm7:</td>
      <td><input type="text" name="tb2_colunm7" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm8:</td>
      <td><input type="text" name="tb2_colunm8" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm9:</td>
      <td><input type="text" name="tb2_colunm9" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm10:</td>
      <td><input type="text" name="tb2_colunm10" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm11:</td>
      <td><input type="text" name="tb2_colunm11" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm12:</td>
      <td><input type="text" name="tb2_colunm12" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm13:</td>
      <td><input type="text" name="tb2_colunm13" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm14:</td>
      <td><input type="text" name="tb2_colunm14" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm15:</td>
      <td><input type="text" name="tb2_colunm15" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm16:</td>
      <td><input type="text" name="tb2_colunm16" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm17:</td>
      <td><input type="text" name="tb2_colunm17" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm18:</td>
      <td><input type="text" name="tb2_colunm18" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm19:</td>
      <td><input type="text" name="tb2_colunm19" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm20:</td>
      <td><input type="text" name="tb2_colunm20" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm21:</td>
      <td><input type="text" name="tb2_colunm21" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm22:</td>
      <td><input type="text" name="tb2_colunm22" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm23:</td>
      <td><input type="text" name="tb2_colunm23" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm24:</td>
      <td><input type="text" name="tb2_colunm24" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm25:</td>
      <td><input type="text" name="tb2_colunm25" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm26:</td>
      <td><input type="text" name="tb2_colunm26" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm27:</td>
      <td><input type="text" name="tb2_colunm27" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm28:</td>
      <td><input type="text" name="tb2_colunm28" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm29:</td>
      <td><input type="text" name="tb2_colunm29" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm30:</td>
      <td><input type="text" name="tb2_colunm30" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm31:</td>
      <td><input type="text" name="tb2_colunm31" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm32:</td>
      <td><input type="text" name="tb2_colunm32" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm33:</td>
      <td><input type="text" name="tb2_colunm33" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm34:</td>
      <td><input type="text" name="tb2_colunm34" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm35:</td>
      <td><input type="text" name="tb2_colunm35" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm36:</td>
      <td><input type="text" name="tb2_colunm36" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm37:</td>
      <td><input type="text" name="tb2_colunm37" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm38:</td>
      <td><input type="text" name="tb2_colunm38" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm39:</td>
      <td><input type="text" name="tb2_colunm39" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm40:</td>
      <td><input type="text" name="tb2_colunm40" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm41:</td>
      <td><input type="text" name="tb2_colunm41" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm42:</td>
      <td><input type="text" name="tb2_colunm42" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm43:</td>
      <td><input type="text" name="tb2_colunm43" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm44:</td>
      <td><input type="text" name="tb2_colunm44" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm45:</td>
      <td><input type="text" name="tb2_colunm45" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm46:</td>
      <td><input type="text" name="tb2_colunm46" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm47:</td>
      <td><input type="text" name="tb2_colunm47" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm48:</td>
      <td><input type="text" name="tb2_colunm48" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm49:</td>
      <td><input type="text" name="tb2_colunm49" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm50:</td>
      <td><input type="text" name="tb2_colunm50" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm51:</td>
      <td><input type="text" name="tb2_colunm51" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm52:</td>
      <td><input type="text" name="tb2_colunm52" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm53:</td>
      <td><input type="text" name="tb2_colunm53" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm54:</td>
      <td><input type="text" name="tb2_colunm54" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm55:</td>
      <td><input type="text" name="tb2_colunm55" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm56:</td>
      <td><input type="text" name="tb2_colunm56" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm57:</td>
      <td><input type="text" name="tb2_colunm57" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm58:</td>
      <td><input type="text" name="tb2_colunm58" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm59:</td>
      <td><input type="text" name="tb2_colunm59" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm60:</td>
      <td><input type="text" name="tb2_colunm60" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm61:</td>
      <td><input type="text" name="tb2_colunm61" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm62:</td>
      <td><input type="text" name="tb2_colunm62" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm63:</td>
      <td><input type="text" name="tb2_colunm63" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm64:</td>
      <td><input type="text" name="tb2_colunm64" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm65:</td>
      <td><input type="text" name="tb2_colunm65" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm66:</td>
      <td><input type="text" name="tb2_colunm66" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm67:</td>
      <td><input type="text" name="tb2_colunm67" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm68:</td>
      <td><input type="text" name="tb2_colunm68" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm69:</td>
      <td><input type="text" name="tb2_colunm69" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm70:</td>
      <td><input type="text" name="tb2_colunm70" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm71:</td>
      <td><input type="text" name="tb2_colunm71" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm72:</td>
      <td><input type="text" name="tb2_colunm72" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm73:</td>
      <td><input type="text" name="tb2_colunm73" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm74:</td>
      <td><input type="text" name="tb2_colunm74" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm75:</td>
      <td><input type="text" name="tb2_colunm75" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm76:</td>
      <td><input type="text" name="tb2_colunm76" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm77:</td>
      <td><input type="text" name="tb2_colunm77" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm78:</td>
      <td><input type="text" name="tb2_colunm78" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm79:</td>
      <td><input type="text" name="tb2_colunm79" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm80:</td>
      <td><input type="text" name="tb2_colunm80" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm81:</td>
      <td><input type="text" name="tb2_colunm81" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm82:</td>
      <td><input type="text" name="tb2_colunm82" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm83:</td>
      <td><input type="text" name="tb2_colunm83" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm84:</td>
      <td><input type="text" name="tb2_colunm84" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm85:</td>
      <td><input type="text" name="tb2_colunm85" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm86:</td>
      <td><input type="text" name="tb2_colunm86" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm87:</td>
      <td><input type="text" name="tb2_colunm87" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm88:</td>
      <td><input type="text" name="tb2_colunm88" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm89:</td>
      <td><input type="text" name="tb2_colunm89" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm90:</td>
      <td><input type="text" name="tb2_colunm90" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm91:</td>
      <td><input type="text" name="tb2_colunm91" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm92:</td>
      <td><input type="text" name="tb2_colunm92" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm93:</td>
      <td><input type="text" name="tb2_colunm93" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm94:</td>
      <td><input type="text" name="tb2_colunm94" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm95:</td>
      <td><input type="text" name="tb2_colunm95" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm96:</td>
      <td><input type="text" name="tb2_colunm96" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm97:</td>
      <td><input type="text" name="tb2_colunm97" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm98:</td>
      <td><input type="text" name="tb2_colunm98" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm99:</td>
      <td><input type="text" name="tb2_colunm99" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm100:</td>
      <td><input type="text" name="tb2_colunm100" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Continue" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
</div>
<?php require_once('footer.php'); ?>
