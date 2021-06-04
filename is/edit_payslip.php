<?php require_once('../Connections/connection.php'); ?>
<?php require_once('access_payroll.php'); ?>
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
  $updateSQL = sprintf("UPDATE table2 SET tb2_colunm1=%s, tb2_colunm2=%s, tb2_colunm3=%s, tb2_colunm4=%s, tb2_colunm5=%s, tb2_colunm6=%s, tb2_colunm7=%s, tb2_colunm8=%s, tb2_colunm9=%s, tb2_colunm10=%s, tb2_colunm11=%s, tb2_colunm12=%s, tb2_colunm13=%s, tb2_colunm14=%s, tb2_colunm15=%s, tb2_colunm16=%s, tb2_colunm17=%s, tb2_colunm18=%s, tb2_colunm19=%s, tb2_colunm20=%s, tb2_colunm21=%s, tb2_colunm22=%s, tb2_colunm23=%s, tb2_colunm24=%s, tb2_colunm25=%s, tb2_colunm26=%s, tb2_colunm27=%s, tb2_colunm28=%s, tb2_colunm29=%s, tb2_colunm30=%s, tb2_colunm31=%s, tb2_colunm32=%s, tb2_colunm33=%s, tb2_colunm34=%s, tb2_colunm35=%s, tb2_colunm36=%s, tb2_colunm37=%s, tb2_colunm38=%s, tb2_colunm39=%s, tb2_colunm40=%s, tb2_colunm41=%s, tb2_colunm42=%s, tb2_colunm43=%s, tb2_colunm44=%s, tb2_colunm45=%s, tb2_colunm46=%s, tb2_colunm47=%s, tb2_colunm48=%s, tb2_colunm49=%s, tb2_colunm50=%s, tb2_colunm51=%s, tb2_colunm52=%s, tb2_colunm53=%s, tb2_colunm54=%s, tb2_colunm55=%s, tb2_colunm56=%s, tb2_colunm57=%s, tb2_colunm58=%s, tb2_colunm59=%s, tb2_colunm60=%s, tb2_colunm61=%s, tb2_colunm62=%s, tb2_colunm63=%s, tb2_colunm64=%s, tb2_colunm65=%s, tb2_colunm66=%s, tb2_colunm67=%s, tb2_colunm68=%s, tb2_colunm69=%s, tb2_colunm70=%s, tb2_colunm71=%s, tb2_colunm72=%s, tb2_colunm73=%s, tb2_colunm74=%s, tb2_colunm75=%s, tb2_colunm76=%s, tb2_colunm77=%s, tb2_colunm78=%s, tb2_colunm79=%s, tb2_colunm80=%s, tb2_colunm81=%s, tb2_colunm82=%s, tb2_colunm83=%s, tb2_colunm84=%s, tb2_colunm85=%s, tb2_colunm86=%s, tb2_colunm87=%s, tb2_colunm88=%s, tb2_colunm89=%s, tb2_colunm90=%s, tb2_colunm91=%s, tb2_colunm92=%s, tb2_colunm93=%s, tb2_colunm94=%s, tb2_colunm95=%s, tb2_colunm96=%s, tb2_colunm97=%s, tb2_colunm98=%s, tb2_colunm99=%s, tb2_colunm100=%s WHERE table2_id=%s",
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
                       GetSQLValueString($_POST['tb2_colunm100'], "text"),
                       GetSQLValueString($_POST['table2_id'], "int"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($updateSQL, $connection) or die(mysql_error());

  $updateGoTo = "confirm_global.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_rspayslip = "-1";
if (isset($_GET['table2_id'])) {
  $colname_rspayslip = $_GET['table2_id'];
}
mysql_select_db($database_connection, $connection);
$query_rspayslip = sprintf("SELECT * FROM table2 WHERE table2_id = %s", GetSQLValueString($colname_rspayslip, "int"));
$rspayslip = mysql_query($query_rspayslip, $connection) or die(mysql_error());
$row_rspayslip = mysql_fetch_assoc($rspayslip);
$totalRows_rspayslip = mysql_num_rows($rspayslip);
?>
<?php require_once('head.php'); ?>
<div>

<div class="navbar-fixed-top body-title">    
	<h3 class="col-lg-10">Update</h3>
</div>

<div>
  <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
<input type="hidden" name="tb2_colunm1" value="<?php echo htmlentities($row_rspayslip['tb2_colunm1'], ENT_COMPAT, 'utf-8'); ?>" />
<input type="hidden" name="tb2_colunm2" value="<?php echo htmlentities($row_rspayslip['tb2_colunm2'], ENT_COMPAT, 'utf-8'); ?>" />
<input type="hidden" name="tb2_colunm3" value="<?php echo htmlentities($row_rspayslip['tb2_colunm3'], ENT_COMPAT, 'utf-8'); ?>" />
<input type="hidden" name="tb2_colunm4" value="<?php echo htmlentities($row_rspayslip['tb2_colunm4'], ENT_COMPAT, 'utf-8'); ?>" />
<input type="hidden" name="tb2_colunm5" value="<?php echo htmlentities($row_rspayslip['tb2_colunm5'], ENT_COMPAT, 'utf-8'); ?>" />
<input type="hidden" name="tb2_colunm6" value="<?php echo htmlentities($row_rspayslip['tb2_colunm6'], ENT_COMPAT, 'utf-8'); ?>" />
<input type="hidden" name="tb2_colunm7" value="<?php echo htmlentities($row_rspayslip['tb2_colunm7'], ENT_COMPAT, 'utf-8'); ?>" />
<input type="hidden" name="tb2_colunm10" value="<?php echo htmlentities($row_rspayslip['tb2_colunm10'], ENT_COMPAT, 'utf-8'); ?>" />
<input type="hidden" name="tb2_colunm12" value="<?php echo htmlentities($row_rspayslip['tb2_colunm12'], ENT_COMPAT, 'utf-8'); ?>" />
<input type="hidden" name="tb2_colunm13" value="<?php echo htmlentities($row_rspayslip['tb2_colunm13'], ENT_COMPAT, 'utf-8'); ?>" />
<input type="hidden" name="tb2_colunm14" value="<?php echo htmlentities($row_rspayslip['tb2_colunm14'], ENT_COMPAT, 'utf-8'); ?>" />
<input type="hidden" name="tb2_colunm15" value="<?php echo htmlentities($row_rspayslip['tb2_colunm15'], ENT_COMPAT, 'utf-8'); ?>" />
    
<table align="center">
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">&nbsp;</td>
        <td><input type="submit" value="Update" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">ID:</td>
        <td><?php echo $row_rspayslip['table2_id']; ?></td>
      </tr>
	<tr valign="baseline">
          <td nowrap="nowrap" align="right">Salary (1-15/16-30):</td>
          <td><input type="text" name="tb2_colunm58" value="<?php echo htmlentities($row_rspayslip['tb2_colunm58'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>      
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Absences/Late:</td>
        <td><input type="text" name="tb2_colunm57" value="<?php echo htmlentities($row_rspayslip['tb2_colunm57'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr>
	<td nowrap="nowrap" align="right">OLD Rate:</td>
	<td><input type="text" name="tb2_colunm8" value="<?php echo htmlentities($row_rspayslip['tb2_colunm8'], ENT_COMPAT, 'utf-8'); ?>" />
</td>
      </tr>
<tr>
	<td nowrap="nowrap" align="right">SAF:</td>
	<td><input type="text" name="tb2_colunm9" value="<?php echo htmlentities($row_rspayslip['tb2_colunm9'], ENT_COMPAT, 'utf-8'); ?>" />
</td>
      </tr>
<tr>
	<td nowrap="nowrap" align="right">PERA:</td>
	<td><input type="text" name="tb2_colunm11" value="<?php echo htmlentities($row_rspayslip['tb2_colunm11'], ENT_COMPAT, 'utf-8'); ?>" />
</td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">W/Hold Tax:</td>
        <td><input type="text" name="tb2_colunm16" value="<?php echo htmlentities($row_rspayslip['tb2_colunm16'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">Philhealth:</td>
        <td><input type="text" name="tb2_colunm17" value="<?php echo htmlentities($row_rspayslip['tb2_colunm17'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">MOWEL:</td>
        <td><input type="text" name="tb2_colunm18" value="<?php echo htmlentities($row_rspayslip['tb2_colunm18'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">DENREU:</td>
        <td><input type="text" name="tb2_colunm19" value="<?php echo htmlentities($row_rspayslip['tb2_colunm19'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">HDMF Premium:</td>
        <td><input type="text" name="tb2_colunm20" value="<?php echo htmlentities($row_rspayslip['tb2_colunm20'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">HDMF MPL:</td>
        <td><input type="text" name="tb2_colunm21" value="<?php echo htmlentities($row_rspayslip['tb2_colunm21'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">HDMF H.Loan:</td>
        <td><input type="text" name="tb2_colunm22" value="<?php echo htmlentities($row_rspayslip['tb2_colunm22'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">GSIS Premium:</td>
        <td><input type="text" name="tb2_colunm23" value="<?php echo htmlentities($row_rspayslip['tb2_colunm23'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">CONSOLOAN:</td>
        <td><input type="text" name="tb2_colunm24" value="<?php echo htmlentities($row_rspayslip['tb2_colunm24'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">E-Cash/UMID:</td>
        <td><input type="text" name="tb2_colunm25" value="<?php echo htmlentities($row_rspayslip['tb2_colunm25'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">Policy Loan:</td>
        <td><input type="text" name="tb2_colunm26" value="<?php echo htmlentities($row_rspayslip['tb2_colunm26'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">HIP:</td>
        <td><input type="text" name="tb2_colunm27" value="<?php echo htmlentities($row_rspayslip['tb2_colunm27'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">Other Receivable:</td>
        <td><input type="text" name="tb2_colunm28" value="<?php echo htmlentities($row_rspayslip['tb2_colunm28'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">Add Life:</td>
        <td><input type="text" name="tb2_colunm29" value="<?php echo htmlentities($row_rspayslip['tb2_colunm29'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">CEAP:</td>
        <td><input type="text" name="tb2_colunm30" value="<?php echo htmlentities($row_rspayslip['tb2_colunm30'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">Pre-Need (Gen):</td>
        <td><input type="text" name="tb2_colunm31" value="<?php echo htmlentities($row_rspayslip['tb2_colunm31'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">EduChild:</td>
        <td><input type="text" name="tb2_colunm32" value="<?php echo htmlentities($row_rspayslip['tb2_colunm32'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">NML:</td>
        <td><input type="text" name="tb2_colunm33" value="<?php echo htmlentities($row_rspayslip['tb2_colunm33'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">Real Estate:</td>
        <td><input type="text" name="tb2_colunm34" value="<?php echo htmlentities($row_rspayslip['tb2_colunm34'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">UOLI:</td>
        <td><input type="text" name="tb2_colunm35" value="<?php echo htmlentities($row_rspayslip['tb2_colunm35'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">UOLI Loan:</td>
        <td><input type="text" name="tb2_colunm36" value="<?php echo htmlentities($row_rspayslip['tb2_colunm36'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">Emergency Loan:</td>
        <td><input type="text" name="tb2_colunm37" value="<?php echo htmlentities($row_rspayslip['tb2_colunm37'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">Educ. Asst. Loan:</td>
        <td><input type="text" name="tb2_colunm38" value="<?php echo htmlentities($row_rspayslip['tb2_colunm38'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">GSIS ELA:</td>
        <td><input type="text" name="tb2_colunm39" value="<?php echo htmlentities($row_rspayslip['tb2_colunm39'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">BFOSLA Deposit:</td>
        <td><input type="text" name="tb2_colunm40" value="<?php echo htmlentities($row_rspayslip['tb2_colunm40'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">BFOSLA Loan:</td>
        <td><input type="text" name="tb2_colunm41" value="<?php echo htmlentities($row_rspayslip['tb2_colunm41'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">Relief:</td>
        <td><input type="text" name="tb2_colunm42" value="<?php echo htmlentities($row_rspayslip['tb2_colunm42'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">HOPE:</td>
        <td><input type="text" name="tb2_colunm43" value="<?php echo htmlentities($row_rspayslip['tb2_colunm43'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">MRI:</td>
        <td><input type="text" name="tb2_colunm44" value="<?php echo htmlentities($row_rspayslip['tb2_colunm44'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">FRI:</td>
        <td><input type="text" name="tb2_colunm45" value="<?php echo htmlentities($row_rspayslip['tb2_colunm45'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">DREAMC-IV:</td>
        <td><input type="text" name="tb2_colunm46" value="<?php echo htmlentities($row_rspayslip['tb2_colunm46'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Calamity Loan:</td>
        <td><input type="text" name="tb2_colunm53" value="<?php echo htmlentities($row_rspayslip['tb2_colunm53'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">OPFNS:</td>
        <td><input type="text" name="tb2_colunm54" value="<?php echo htmlentities($row_rspayslip['tb2_colunm54'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Phil Am:</td>
        <td><input type="text" name="tb2_colunm55" value="<?php echo htmlentities($row_rspayslip['tb2_colunm55'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">HDMF Calamity:</td>
        <td><input type="text" name="tb2_colunm56" value="<?php echo htmlentities($row_rspayslip['tb2_colunm56'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">TEV Disallownace:</td>
        <td><input type="text" name="tb2_colunm47" value="<?php echo htmlentities($row_rspayslip['tb2_colunm47'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">Others:</td>
        <td><input type="text" name="tb2_colunm48" value="<?php echo htmlentities($row_rspayslip['tb2_colunm48'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <!--<tr valign="baseline">
        <td align="right" nowrap="nowrap">Total Deductions:</td>
        <td><input type="text" name="tb2_colunm49" value="<?php echo htmlentities($row_rspayslip['tb2_colunm49'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>-->
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">Net Pay 1-15:</td>
        <td><input type="text" name="tb2_colunm50" value="<?php echo htmlentities($row_rspayslip['tb2_colunm50'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">Net Pay 16-30:</td>
        <td><input type="text" name="tb2_colunm51" value="<?php echo htmlentities($row_rspayslip['tb2_colunm51'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Date:</td>
        <td><input type="date" name="tb2_colunm52" value="<?php echo htmlentities($row_rspayslip['tb2_colunm52'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <!--
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm59:</td>
        <td><input type="text" name="tb2_colunm59" value="<?php echo htmlentities($row_rspayslip['tb2_colunm59'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm60:</td>
        <td><input type="text" name="tb2_colunm60" value="<?php echo htmlentities($row_rspayslip['tb2_colunm60'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm61:</td>
        <td><input type="text" name="tb2_colunm61" value="<?php echo htmlentities($row_rspayslip['tb2_colunm61'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm62:</td>
        <td><input type="text" name="tb2_colunm62" value="<?php echo htmlentities($row_rspayslip['tb2_colunm62'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm63:</td>
        <td><input type="text" name="tb2_colunm63" value="<?php echo htmlentities($row_rspayslip['tb2_colunm63'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm64:</td>
        <td><input type="text" name="tb2_colunm64" value="<?php echo htmlentities($row_rspayslip['tb2_colunm64'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm65:</td>
        <td><input type="text" name="tb2_colunm65" value="<?php echo htmlentities($row_rspayslip['tb2_colunm65'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm66:</td>
        <td><input type="text" name="tb2_colunm66" value="<?php echo htmlentities($row_rspayslip['tb2_colunm66'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm67:</td>
        <td><input type="text" name="tb2_colunm67" value="<?php echo htmlentities($row_rspayslip['tb2_colunm67'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm68:</td>
        <td><input type="text" name="tb2_colunm68" value="<?php echo htmlentities($row_rspayslip['tb2_colunm68'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm69:</td>
        <td><input type="text" name="tb2_colunm69" value="<?php echo htmlentities($row_rspayslip['tb2_colunm69'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm70:</td>
        <td><input type="text" name="tb2_colunm70" value="<?php echo htmlentities($row_rspayslip['tb2_colunm70'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm71:</td>
        <td><input type="text" name="tb2_colunm71" value="<?php echo htmlentities($row_rspayslip['tb2_colunm71'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm72:</td>
        <td><input type="text" name="tb2_colunm72" value="<?php echo htmlentities($row_rspayslip['tb2_colunm72'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm73:</td>
        <td><input type="text" name="tb2_colunm73" value="<?php echo htmlentities($row_rspayslip['tb2_colunm73'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm74:</td>
        <td><input type="text" name="tb2_colunm74" value="<?php echo htmlentities($row_rspayslip['tb2_colunm74'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm75:</td>
        <td><input type="text" name="tb2_colunm75" value="<?php echo htmlentities($row_rspayslip['tb2_colunm75'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm76:</td>
        <td><input type="text" name="tb2_colunm76" value="<?php echo htmlentities($row_rspayslip['tb2_colunm76'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm77:</td>
        <td><input type="text" name="tb2_colunm77" value="<?php echo htmlentities($row_rspayslip['tb2_colunm77'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm78:</td>
        <td><input type="text" name="tb2_colunm78" value="<?php echo htmlentities($row_rspayslip['tb2_colunm78'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm79:</td>
        <td><input type="text" name="tb2_colunm79" value="<?php echo htmlentities($row_rspayslip['tb2_colunm79'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm80:</td>
        <td><input type="text" name="tb2_colunm80" value="<?php echo htmlentities($row_rspayslip['tb2_colunm80'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm81:</td>
        <td><input type="text" name="tb2_colunm81" value="<?php echo htmlentities($row_rspayslip['tb2_colunm81'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm82:</td>
        <td><input type="text" name="tb2_colunm82" value="<?php echo htmlentities($row_rspayslip['tb2_colunm82'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm83:</td>
        <td><input type="text" name="tb2_colunm83" value="<?php echo htmlentities($row_rspayslip['tb2_colunm83'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm84:</td>
        <td><input type="text" name="tb2_colunm84" value="<?php echo htmlentities($row_rspayslip['tb2_colunm84'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm85:</td>
        <td><input type="text" name="tb2_colunm85" value="<?php echo htmlentities($row_rspayslip['tb2_colunm85'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm86:</td>
        <td><input type="text" name="tb2_colunm86" value="<?php echo htmlentities($row_rspayslip['tb2_colunm86'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm87:</td>
        <td><input type="text" name="tb2_colunm87" value="<?php echo htmlentities($row_rspayslip['tb2_colunm87'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm88:</td>
        <td><input type="text" name="tb2_colunm88" value="<?php echo htmlentities($row_rspayslip['tb2_colunm88'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm89:</td>
        <td><input type="text" name="tb2_colunm89" value="<?php echo htmlentities($row_rspayslip['tb2_colunm89'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm90:</td>
        <td><input type="text" name="tb2_colunm90" value="<?php echo htmlentities($row_rspayslip['tb2_colunm90'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm91:</td>
        <td><input type="text" name="tb2_colunm91" value="<?php echo htmlentities($row_rspayslip['tb2_colunm91'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm92:</td>
        <td><input type="text" name="tb2_colunm92" value="<?php echo htmlentities($row_rspayslip['tb2_colunm92'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm93:</td>
        <td><input type="text" name="tb2_colunm93" value="<?php echo htmlentities($row_rspayslip['tb2_colunm93'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm94:</td>
        <td><input type="text" name="tb2_colunm94" value="<?php echo htmlentities($row_rspayslip['tb2_colunm94'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm95:</td>
        <td><input type="text" name="tb2_colunm95" value="<?php echo htmlentities($row_rspayslip['tb2_colunm95'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm96:</td>
        <td><input type="text" name="tb2_colunm96" value="<?php echo htmlentities($row_rspayslip['tb2_colunm96'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm97:</td>
        <td><input type="text" name="tb2_colunm97" value="<?php echo htmlentities($row_rspayslip['tb2_colunm97'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm98:</td>
        <td><input type="text" name="tb2_colunm98" value="<?php echo htmlentities($row_rspayslip['tb2_colunm98'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm99:</td>
        <td><input type="text" name="tb2_colunm99" value="<?php echo htmlentities($row_rspayslip['tb2_colunm99'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Tb2_colunm100:</td>
        <td><input type="text" name="tb2_colunm100" value="<?php echo htmlentities($row_rspayslip['tb2_colunm100'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>-->
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">&nbsp;</td>
        <td><input type="submit" value="Update" /></td>
      </tr>
    </table>
    <input type="hidden" name="MM_update" value="form1" />
    <input type="hidden" name="table2_id" value="<?php echo $row_rspayslip['table2_id']; ?>" />

  </form>
  <p>&nbsp;</p>
</div>
      
<?php require_once('footer.php'); ?>
<?php
mysql_free_result($rspayslip);
?>
