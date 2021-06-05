<?php require_once('../Connections/connection.php'); ?>
<?php require_once('config.php'); ?>
<?php require_once('access_leave.php'); ?>
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

  $insertGoTo = "redirect_print_application.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

$colname_rsleave = "-1";
if (isset($_GET['table1_id'])) {
  $colname_rsleave = $_GET['table1_id'];
}
mysql_select_db($database_connection, $connection);
$query_rsleave = sprintf("SELECT * FROM table2 WHERE tb2_colunm2 = %s ORDER BY table2_id DESC", GetSQLValueString($colname_rsleave, "text"));
$rsleave = mysql_query($query_rsleave, $connection) or die(mysql_error());
$row_rsleave = mysql_fetch_assoc($rsleave);
$totalRows_rsleave = mysql_num_rows($rsleave);

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
	<h3 class="col-lg-10">Personnel Information</h3>
</div>

<div align="center">
                  <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
                    <table align="center">
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td><input type="submit" value="Continue"></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">ID Number:</td>
                        <td><input type="number" name="tb2_colunm2" value="<?php echo $_GET['table1_id']; ?>"></td>
                      </tr>
                      <tr valign="baseline">
                        <td colspan="2" align="center" nowrap><strong>Period</strong></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Month:</td>
                        <td><select name="tb2_colunm3">
                        		<option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                        	</select>
                        </td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Year:</td>
                        <td><input type="number" name="tb2_colunm4" value="<?php echo date('Y'); ?>"></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr valign="baseline">
                        <td colspan="2" align="right" nowrap><div align="center"><strong>Personal Data</strong></div></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Office/Agency:</td>
                        <td><input type="text" name="tb2_colunm18" value="<?php echo $row_rsemployee['tb1_colunm2']; ?>" >
                        </td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Last Name:</td>
                        <td><input type="text" name="tb2_colunm19" value="<?php echo $row_rsemployee['tb1_colunm4']; ?>" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">First:</td>
                        <td><input type="text" name="tb2_colunm20" value="<?php echo $row_rsemployee['tb1_colunm3']; ?>" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Middle:</td>
                        <td><input type="text" name="tb2_colunm21" value="<?php echo $row_rsemployee['tb1_colunm5']; ?>" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Date of Filling:</td>
                        <td><input type="date" name="tb2_colunm22" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Position:</td>
                        <td><input type="text" name="tb2_colunm23" value="<?php echo $row_rsemployee['tb1_colunm6']; ?>" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Salary (Monthly):</td>
                        <td><input type="text" name="tb2_colunm24" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td><input type="submit" value="Continue"></td>
                         </tr>
                      <!--<tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm47:</td>
                        <td><input type="text" name="tb2_colunm47" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm48:</td>
                        <td><input type="text" name="tb2_colunm48" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm49:</td>
                        <td><input type="text" name="tb2_colunm49" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm50:</td>
                        <td><input type="text" name="tb2_colunm50" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm51:</td>
                        <td><input type="text" name="tb2_colunm51" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm52:</td>
                        <td><input type="text" name="tb2_colunm52" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm53:</td>
                        <td><input type="text" name="tb2_colunm53" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm54:</td>
                        <td><input type="text" name="tb2_colunm54" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm55:</td>
                        <td><input type="text" name="tb2_colunm55" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm56:</td>
                        <td><input type="text" name="tb2_colunm56" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm57:</td>
                        <td><input type="text" name="tb2_colunm57" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm58:</td>
                        <td><input type="text" name="tb2_colunm58" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm59:</td>
                        <td><input type="text" name="tb2_colunm59" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm60:</td>
                        <td><input type="text" name="tb2_colunm60" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm61:</td>
                        <td><input type="text" name="tb2_colunm61" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm62:</td>
                        <td><input type="text" name="tb2_colunm62" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm63:</td>
                        <td><input type="text" name="tb2_colunm63" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm64:</td>
                        <td><input type="text" name="tb2_colunm64" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm65:</td>
                        <td><input type="text" name="tb2_colunm65" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm66:</td>
                        <td><input type="text" name="tb2_colunm66" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm67:</td>
                        <td><input type="text" name="tb2_colunm67" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm68:</td>
                        <td><input type="text" name="tb2_colunm68" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm69:</td>
                        <td><input type="text" name="tb2_colunm69" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm70:</td>
                        <td><input type="text" name="tb2_colunm70" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm71:</td>
                        <td><input type="text" name="tb2_colunm71" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm72:</td>
                        <td><input type="text" name="tb2_colunm72" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm73:</td>
                        <td><input type="text" name="tb2_colunm73" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm74:</td>
                        <td><input type="text" name="tb2_colunm74" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm75:</td>
                        <td><input type="text" name="tb2_colunm75" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm76:</td>
                        <td><input type="text" name="tb2_colunm76" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm77:</td>
                        <td><input type="text" name="tb2_colunm77" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm78:</td>
                        <td><input type="text" name="tb2_colunm78" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm79:</td>
                        <td><input type="text" name="tb2_colunm79" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm80:</td>
                        <td><input type="text" name="tb2_colunm80" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm81:</td>
                        <td><input type="text" name="tb2_colunm81" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm82:</td>
                        <td><input type="text" name="tb2_colunm82" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm83:</td>
                        <td><input type="text" name="tb2_colunm83" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm84:</td>
                        <td><input type="text" name="tb2_colunm84" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm85:</td>
                        <td><input type="text" name="tb2_colunm85" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm86:</td>
                        <td><input type="text" name="tb2_colunm86" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm87:</td>
                        <td><input type="text" name="tb2_colunm87" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm88:</td>
                        <td><input type="text" name="tb2_colunm88" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm89:</td>
                        <td><input type="text" name="tb2_colunm89" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm90:</td>
                        <td><input type="text" name="tb2_colunm90" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm91:</td>
                        <td><input type="text" name="tb2_colunm91" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm92:</td>
                        <td><input type="text" name="tb2_colunm92" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm93:</td>
                        <td><input type="text" name="tb2_colunm93" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm94:</td>
                        <td><input type="text" name="tb2_colunm94" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm95:</td>
                        <td><input type="text" name="tb2_colunm95" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm96:</td>
                        <td><input type="text" name="tb2_colunm96" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm97:</td>
                        <td><input type="text" name="tb2_colunm97" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm98:</td>
                        <td><input type="text" name="tb2_colunm98" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm99:</td>
                        <td><input type="text" name="tb2_colunm99" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm100:</td>
                        <td><input type="text" name="tb2_colunm100" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td><input type="submit" value="Continue"></td>
                      </tr>-->
                    </table>
                    
                    <div style="display:none;">
                    <table>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr valign="baseline">
                        <td colspan="2" align="center" nowrap><strong>Vacation Leave</strong></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right"> Earned:</td>
                        <td><input type="number" name="tb2_colunm5" value="1.25" step="any"></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Previous Balance:</td>
						<td><input type="number" name="vlprebal" value="<?php echo $row_rsleave['tb2_colunm7']; ?>" step="any"></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Total:</td>
						<td><input type="number" name="vltotalearn" onfocus="sumvltotalearn(this.form)" step="any" value=""></td>
                      </tr>
                      
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Absence Undertime W/ pay:</td>
                        <td><input type="number" name="tb2_colunm6" onfocus="totalcol6(this.form)" value="" min="0" step="any"></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Absence Undertime W/O pay:</td>
                        <td><input type="number" name="tb2_colunm8" onfocus="vlsumabsence9(this.form)" value="" min="0" step="any"></td>
                      </tr>
                      <tr valign="baseline">
                        <td align="right" nowrap>New Balance:</td>
                        <td><input type="number" name="tb2_colunm7" onfocus="vlnewbal(this.form)" step="any" value=""></td>
                      </tr>
                      <tr valign="baseline">
                        <td colspan="2" align="center" nowrap>&nbsp;</td>
                      </tr>
                      <tr valign="baseline">
                        <td colspan="2" align="center" nowrap><strong>Sick Leave</strong></td>
                      </tr> 
                      <tr valign="baseline">
                        <td nowrap align="right">Earned:</td>
                        <td><input type="number" name="tb2_colunm9" value="1.25" step="any"></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Previous Balance:</td>
                        <td><input type="number" name="slprebal" value="<?php echo $row_rsleave['tb2_colunm11']; ?>" step="any"></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Total:</td>
                        <td><input type="number" name="sltotalearn" onfocus="sumsltotalearn(this.form)" value="" step="any"></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Absence Undertime </td>
                        <td><input type="number" name="slabsence"  value="" min="0"  step="any"></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">W/ pay:</td>
                        <td><input type="number" name="tb2_colunm10" onfocus="totalcol0(this.form)" value="" min="0"  step="any"></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right"> W/O pay:</td>
                        <td><input type="number" name="tb2_colunm12" value="" min="0" step="any"></td>
                      </tr>
                      <tr valign="top">
                        <td nowrap align="right">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr valign="top">
                        <td align="right" valign="baseline" nowrap>New Balance</td>
                        <td valign="baseline"><input type="number" name="tb2_colunm11" onfocus="slnewbal(this.form)" step="any" value=""></td>
                      </tr>
                      <tr valign="top">
                        <td nowrap align="right">Remarks:</td>
                        <td><textarea name="tb2_colunm13"></textarea></td>
                      </tr>
                    </table>
                    </div>
                    <input type="hidden" name="table2_id" value="">
                    <input type="hidden" name="tb2_colunm1" value="mbg4b-employee-apply">
                    <input type="hidden" name="MM_insert" value="form1">
                  </form>
                </div>

      
</div>
<?php require_once('footer.php'); ?>
<?php
mysql_free_result($rsleave);

mysql_free_result($rsemployee);
?>
