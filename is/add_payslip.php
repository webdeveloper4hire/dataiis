<?php require_once('../Connections/connection.php'); ?>
<?php require_once('config.php'); ?>
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

$colname_rsemployee = "-1";
if (isset($_GET['table1_id'])) {
  $colname_rsemployee = $_GET['table1_id'];
}
mysql_select_db($database_connection, $connection);
$query_rsemployee = sprintf("SELECT * FROM table1 WHERE table1_id = %s", GetSQLValueString($colname_rsemployee, "int"));
$rsemployee = mysql_query($query_rsemployee, $connection) or die(mysql_error());
$row_rsemployee = mysql_fetch_assoc($rsemployee);
$totalRows_rsemployee = mysql_num_rows($rsemployee);
?>
<?php require_once('head.php'); ?>
<div>

<div class="navbar-fixed-top body-title">    
	<h3 class="col-lg-10">Add <?php echo $_GET['tb2_colunm1']; ?></h3>
</div>

<div align="center">

</div>
<form action="<?php echo $editFormAction; ?>" method="POST" name="form1" id="form1">
<input type="hidden" name="tb2_colunm2" value="<?php echo $clientalias ;?> <?php echo $clientbranch;?>" />
<input type="hidden" name="tb2_colunm3" value="<?php echo $row_rsemployee['tb1_colunm3']; ?>"  />
<input type="hidden" name="tb2_colunm4" value="<?php echo $row_rsemployee['tb1_colunm4']; ?>"  />
<input type="hidden" name="tb2_colunm5" value="<?php echo $row_rsemployee['tb1_colunm5']; ?>"  />
<input type="text" name="tb2_colunm6" value="<?php echo $row_rsemployee['tb1_colunm6']; ?>"  />
<input type="hidden" name="tb2_colunm7" value="<?php echo $row_rsemployee['tb1_colunm7']; ?>"  />
<input type="hidden" name="tb2_colunm13" value="<?php echo $row_rsemployee['tb1_colunm13']; ?>" />
<input type="hidden" name="tb2_colunm14" value="<?php echo $row_rsemployee['tb1_colunm14']; ?>" />
<input type="hidden" name="tb2_colunm9" value="<?php echo $row_rsemployee['tb1_colunm9']; ?>"  />
<input type="hidden" name="tb2_colunm10" value="<?php echo $row_rsemployee['tb1_colunm10']; ?>"  />
<input type="hidden" name="tb2_colunm12" value="<?php echo $row_rsemployee['tb1_colunm12']; ?>"  />
<input type="hidden" name="tb2_colunm57" value="0" required />  
<table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Continue" /></td>
    </tr>
    
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Database:</td>
      <td><input type="text" name="tb2_colunm1" value="<?php echo $_GET['tb2_colunm1']; ?>" readonly="readonly" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ID:</td>
      <td><input type="text" name="tb2_colunm15" value="<?php echo $_GET['table1_id']; ?>" readonly="readonly" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Date:</td>
      <td><input type="date" name="tb2_colunm52" value="<?php echo date('Y'); ?>-<?php echo sprintf("%02d", date('m')-1); ?>-<?php echo date('d'); ?>" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Salary (1-15/16-30):</td>
      <td><input type="text" name="tb2_colunm58" value="0" required /></td>
    </tr>
    <tr>
	<td nowrap="nowrap" align="right">OLD Rate:</td>
	<td><input type="text" name="tb2_colunm8" value="<?php echo $_GET['tb1_colunm8']; ?>"  />
    </td>
      </tr>
    <tr>
	<td nowrap="nowrap" align="right">SAF:</td>
	<td><input type="text" name="tb2_colunm9" value="<?php echo $row_rsemployee['tb1_colunm9']; ?>" />
    </td>
      </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PERA:</td>
      <td><input type="text" name="tb2_colunm11" value="<?php echo $row_rsemployee['tb1_colunm11']; ?>" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">W/Hold Tax:</td>
      <td><input type="text" name="tb2_colunm16" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">GSIS Premium:</td>
      <td><input type="text" name="tb2_colunm23" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">HDMF Premium:</td>
      <td><input type="text" name="tb2_colunm20" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Philhealth:</td>
      <td><input type="text" name="tb2_colunm17" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">MOWEL:</td>
      <td><input type="text" name="tb2_colunm18" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">CONSOLOAN:</td>
      <td><input type="text" name="tb2_colunm24" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Policy Loan:</td>
      <td><input type="text" name="tb2_colunm26" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Calamity Loan:</td>
      <td><input type="text" name="tb2_colunm53" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Real Estate:</td>
      <td><input type="text" name="tb2_colunm34" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">UOLI:</td>
      <td><input type="text" name="tb2_colunm35" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">UOLI Loan:</td>
      <td><input type="text" name="tb2_colunm36" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">HIP:</td>
      <td><input type="text" name="tb2_colunm27" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">HDMF MPL:</td>
      <td><input type="text" name="tb2_colunm21" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">HOPE:</td>
      <td><input type="text" name="tb2_colunm43" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">MRI:</td>
      <td><input type="text" name="tb2_colunm44" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">FRI:</td>
      <td><input type="text" name="tb2_colunm45" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Emergency Loan:</td>
      <td><input type="text" name="tb2_colunm37" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">OPFNS:</td>
      <td><input type="text" name="tb2_colunm54" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Add Life:</td>
      <td><input type="text" name="tb2_colunm29" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">CEAP:</td>
      <td><input type="text" name="tb2_colunm30" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Pre-Need (Gen):</td>
      <td><input type="text" name="tb2_colunm31" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">EduChild:</td>
      <td><input type="text" name="tb2_colunm32" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">E-Cash/UMID:</td>
      <td><input type="text" name="tb2_colunm25" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NML:</td>
      <td><input type="text" name="tb2_colunm33" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">BFOSLA Deposit:</td>
      <td><input type="text" name="tb2_colunm40" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">BFOSLA Loan:</td>
      <td><input type="text" name="tb2_colunm41" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Relief:</td>
      <td><input type="text" name="tb2_colunm42" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">DREAMC-IV:</td>
      <td><input type="text" name="tb2_colunm46" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right"><?php echo $clientalias ;?>EU:</td>
      <td><input type="text" name="tb2_colunm19" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Phil Am:</td>
      <td><input type="text" name="tb2_colunm55" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">HDMF Calamity:</td>
      <td><input type="text" name="tb2_colunm56" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">HDMF H.Loan:</td>
      <td><input type="text" name="tb2_colunm22" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Educ. Asst. Loan:</td>
      <td><input type="text" name="tb2_colunm38" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">GSIS ELA:</td>
      <td><input type="text" name="tb2_colunm39" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TEV Disallownace:</td>
      <td><input type="text" name="tb2_colunm47" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Others:</td>
      <td><input type="text" name="tb2_colunm48" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Other Receivable:</td>
      <td><input type="text" name="tb2_colunm28" value="0" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Net Pay 1-15:</td>
      <td><input type="text" name="tb2_colunm50" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Net Pay 16-30:</td>
      <td><input type="text" name="tb2_colunm51" value="" required /></td>
    </tr>
    <!--<tr valign="baseline">
      <td nowrap="nowrap" align="right">table2_id:</td>
      <td><input type="text" name="table2_id" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Total Deductions:</td>
      <td><input type="text" name="tb2_colunm49" value="" required /></td>
    </tr>
    
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm59:</td>
      <td><input type="text" name="tb2_colunm59" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm60:</td>
      <td><input type="text" name="tb2_colunm60" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm61:</td>
      <td><input type="text" name="tb2_colunm61" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm62:</td>
      <td><input type="text" name="tb2_colunm62" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm63:</td>
      <td><input type="text" name="tb2_colunm63" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm64:</td>
      <td><input type="text" name="tb2_colunm64" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm65:</td>
      <td><input type="text" name="tb2_colunm65" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm66:</td>
      <td><input type="text" name="tb2_colunm66" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm67:</td>
      <td><input type="text" name="tb2_colunm67" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm68:</td>
      <td><input type="text" name="tb2_colunm68" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm69:</td>
      <td><input type="text" name="tb2_colunm69" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm70:</td>
      <td><input type="text" name="tb2_colunm70" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm71:</td>
      <td><input type="text" name="tb2_colunm71" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm72:</td>
      <td><input type="text" name="tb2_colunm72" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm73:</td>
      <td><input type="text" name="tb2_colunm73" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm74:</td>
      <td><input type="text" name="tb2_colunm74" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm75:</td>
      <td><input type="text" name="tb2_colunm75" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm76:</td>
      <td><input type="text" name="tb2_colunm76" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm77:</td>
      <td><input type="text" name="tb2_colunm77" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm78:</td>
      <td><input type="text" name="tb2_colunm78" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm79:</td>
      <td><input type="text" name="tb2_colunm79" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm80:</td>
      <td><input type="text" name="tb2_colunm80" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm81:</td>
      <td><input type="text" name="tb2_colunm81" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm82:</td>
      <td><input type="text" name="tb2_colunm82" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm83:</td>
      <td><input type="text" name="tb2_colunm83" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm84:</td>
      <td><input type="text" name="tb2_colunm84" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm85:</td>
      <td><input type="text" name="tb2_colunm85" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm86:</td>
      <td><input type="text" name="tb2_colunm86" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm87:</td>
      <td><input type="text" name="tb2_colunm87" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm88:</td>
      <td><input type="text" name="tb2_colunm88" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm89:</td>
      <td><input type="text" name="tb2_colunm89" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm90:</td>
      <td><input type="text" name="tb2_colunm90" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm91:</td>
      <td><input type="text" name="tb2_colunm91" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm92:</td>
      <td><input type="text" name="tb2_colunm92" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm93:</td>
      <td><input type="text" name="tb2_colunm93" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm94:</td>
      <td><input type="text" name="tb2_colunm94" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm95:</td>
      <td><input type="text" name="tb2_colunm95" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm96:</td>
      <td><input type="text" name="tb2_colunm96" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm97:</td>
      <td><input type="text" name="tb2_colunm97" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm98:</td>
      <td><input type="text" name="tb2_colunm98" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm99:</td>
      <td><input type="text" name="tb2_colunm99" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">tb2_colunm100:</td>
      <td><input type="text" name="tb2_colunm100" value="" required /></td>
    </tr>-->
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Continue" /></td>
    </tr>
  </table>
<input type="hidden" name="MM_insert" value="form1" />
</form>
</div>
<?php require_once('footer.php'); ?>
<?php
mysql_free_result($rsemployee);
?>