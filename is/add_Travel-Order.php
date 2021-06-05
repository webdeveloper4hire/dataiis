<?php require_once('../Connections/connection.php'); ?>
<?php require_once('config.php'); ?>
<?php require_once('access_to.php'); ?>
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
  $insertSQL = sprintf("INSERT INTO table1 (table1_id, tb1_colunm1, tb1_colunm2, tb1_colunm3, tb1_colunm4, tb1_colunm5, tb1_colunm6, tb1_colunm7, tb1_colunm8, tb1_colunm9, tb1_colunm10, tb1_colunm11, tb1_colunm12, tb1_colunm13, tb1_colunm14, tb1_colunm15, tb1_colunm16, tb1_colunm17, tb1_colunm18, tb1_colunm19, tb1_colunm20, tb1_colunm21, tb1_colunm22, tb1_colunm23, tb1_colunm24, tb1_colunm25, tb1_colunm26, tb1_colunm27, tb1_colunm28, tb1_colunm29, tb1_colunm30, tb1_colunm31, tb1_colunm32, tb1_colunm33, tb1_colunm34, tb1_colunm35, tb1_colunm36, tb1_colunm37, tb1_colunm38, tb1_colunm39, tb1_colunm40, tb1_colunm41, tb1_colunm42, tb1_colunm43, tb1_colunm44, tb1_colunm45, tb1_colunm46, tb1_colunm47, tb1_colunm48, tb1_colunm49, tb1_colunm50, tb1_colunm51, tb1_colunm52, tb1_colunm53, tb1_colunm54, tb1_colunm55, tb1_colunm56, tb1_colunm57, tb1_colunm58, tb1_colunm59, tb1_colunm60, tb1_colunm61, tb1_colunm62, tb1_colunm63, tb1_colunm64, tb1_colunm65, tb1_colunm66, tb1_colunm67, tb1_colunm68, tb1_colunm69, tb1_colunm70, tb1_colunm71, tb1_colunm72, tb1_colunm73, tb1_colunm74, tb1_colunm75, tb1_colunm76, tb1_colunm77, tb1_colunm78, tb1_colunm79, tb1_colunm80, tb1_colunm81, tb1_colunm82, tb1_colunm83, tb1_colunm84, tb1_colunm85, tb1_colunm86, tb1_colunm87, tb1_colunm88, tb1_colunm89, tb1_colunm90, tb1_colunm91, tb1_colunm92, tb1_colunm93, tb1_colunm94, tb1_colunm95, tb1_colunm96, tb1_colunm97, tb1_colunm98, tb1_colunm99, tb1_colunm100) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['table1_id'], "int"),
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
                       GetSQLValueString($_POST['tb1_colunm100'], "text"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($insertSQL, $connection) or die(mysql_error());

  $insertGoTo = "redirect_print_to.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Description" content="Php Error Message" />
<meta name="Keywords" content="error message, php, mysql, perl, framework, microsoft, windows, linux, server, host, tutorial, how to fix error message" />
<meta name="Author" content="webdeveloper4hire@gmail.com" />
<meta name="Distribution" content="Global" />
<title>New</title>
<style type="text/css">

::selection{ background-color: #E13300; color: white; }
::moz-selection{ background-color: #E13300; color: white; }
::webkit-selection{ background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	-webkit-box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}
</style>
</head>
<body>
<div id="container">
<h1>Add <?php echo $_GET['tb1_colunm1'];?> Data</h1>
<p><form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" onsubmit="return confirm('Are you sure?')">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Submit" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Database:</td>
      <td><input type="text" name="tb1_colunm1" value="<?php echo $_GET['tb1_colunm1'];?>" size="32" readonly /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Office:</td>
      <td><input type="text" name="tb1_colunm19" value="<?php echo $clientalias ;?> Regional Office IV-B, <?php echo $clientbranch;?>" size="32" readonly /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">T.O Number:</td>
      <td><input type="text" name="tb1_colunm2" value="No number yet" size="32" readonly /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Firstname:</td>
      <td><input type="text" name="tb1_colunm3" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Lastname:</td>
      <td><input type="text" name="tb1_colunm4" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Middlename:</td>
      <td><input type="text" name="tb1_colunm5" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Salary per Annum:</td>
      <td><input type="text" name="tb1_colunm6" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Position:</td>
      <td><input type="text" name="tb1_colunm13" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Division / Sector / Unit:</td>
      <td>
      <select name="tb1_colunm8" class="form-control">
<option value="">Select</option>
<option value="Office of the Regional Director">ORD</option>
<option value="NGP-Coordinator">NGP-Coordinator</option>
<option value="Priority Programs Coordination Office">PPCO</option>
<option value="Regional Public Affairs Office">RPAO</option>
<optgroup label="Technical Services">
<option value="Asst-Regional Director-Technical Services">ARD-TS Office</option>
<option value="Licenses Patents and Deeds Division">Licenses,Patents and Deeds Division</option>
<option value="Surveys and Mapping Division">Surveys and Mapping Division</option>
<option value="Conservation Division">Conservation Division</option>
<option value="Enforcement Division">Enforcement Division</option>
</optgroup>
<optgroup label="Management Services">
<option value="Asst-Regional Director-Management Services">ARD-MS Office</option>
<option value="Legal-Division">Legal-Division</option>
<option value="Planning and Management Division">Planning and Management Division</option>
<option value="Administrative-Division">Administrative-Division</option>
<option value="Finance-Division">Finance-Division</option>
</optgroup>
<optgroup label="Other Offices">
<option value="HRD Section">HRDS</option>
<option value="Records Section">Records Section</option>
<option value="Regional ICT Unit">Regional ICT Unit</option>
<!--<option value="Manila Bay Coordinating Office">MBCO</option>
<option value="PASu">PASu</option>
<option value="RTDE">RTD ERDS</option>
<option value="RTDF">RTD Forestry</option>
<option value="RTDL">RTD Lands</option>
<option value="RTDP">RTD PAWCZMS</option>-->
<option value="Others">Others</option>
</optgroup>
</select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Departure Date:</td>
      <td><input type="date" name="tb1_colunm9" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Official Station:</td>
      <td><input type="text" name="tb1_colunm10" value="Regional Office" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Destination:</td>
      <td><input type="text" name="tb1_colunm11" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Arrival Date:</td>
      <td><input type="date" name="tb1_colunm12" value="" size="32" /></td>
    </tr>
    <tr valign="top">
      <td nowrap="nowrap" align="right">Purpose of Travel:<br /></td>
      <td><textarea name="tb1_colunm7"></textarea></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Per Diems / Expenses Allowed:</td>
      <td><input type="text" name="tb1_colunm14" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Assistant Laborers Allowed:</td>
      <td><input type="text" name="tb1_colunm15" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Appropriations to which travel<br> should be charged:</td>
      <td><input type="text" name="tb1_colunm16" value="" size="32" /></td>
    </tr>
    <tr valign="top">
      <td nowrap="nowrap" align="right">Remarks:<br /></td>
      <td><textarea name="tb1_colunm17"></textarea></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Recommending Approval:</td>
      <td>
      <select name="tb1_colunm18">
      <option value="Donna Mayor-Gordove<br/>OIC, Assistant Regional Director<br/>Management Services">Assistant Regional Director Management Services</option>
      <option value="VICENTE B. TUDDAO, JR.<br/>Assistant Regional Director<br/>Technical Services">Assistant Regional Director Technical Services</option>
</select>
      </select>
      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Approved:</td>
      <td><input type="text" name="tb1_colunm20" value="Ma. Lourdes G. Ferrer, CESO III<br/>Regional Executive Director<br/><?php echo $clientbranch;?>" size="32" readonly/>
      </td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" nowrap="nowrap"><hr /></td>
      </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Date Received:</td>
      <td><input type="date" name="tb1_colunm21" value="" size="32" readonly /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Date:</td>
      <td><input type="date" name="tb1_colunm22" value="<?php echo date("Y-m-d"); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Date Released:</td>
      <td><input type="date" name="tb1_colunm23" value="" size="32" readonly /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Received:</td>
      <td><input type="text" name="tb1_colunm24" value="NO" size="32" readonly /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Composed by:</td>
      <td><input type="text" name="tb1_colunm25" value="<?php echo $_SESSION['MM_Username']; ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Attachment Description:</td>
      <td><input type="text" name="tb1_colunm26" value="<?php echo $_GET['tb2_colunm3']; ?>" size="32" placeholder="optional" /></td>
    </tr>
    <!--<tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm27:</td>
      <td><input type="text" name="tb1_colunm27" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm28:</td>
      <td><input type="text" name="tb1_colunm28" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm29:</td>
      <td><input type="text" name="tb1_colunm29" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm30:</td>
      <td><input type="text" name="tb1_colunm30" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm31:</td>
      <td><input type="text" name="tb1_colunm31" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm32:</td>
      <td><input type="text" name="tb1_colunm32" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm33:</td>
      <td><input type="text" name="tb1_colunm33" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm34:</td>
      <td><input type="text" name="tb1_colunm34" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm35:</td>
      <td><input type="text" name="tb1_colunm35" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm36:</td>
      <td><input type="text" name="tb1_colunm36" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm37:</td>
      <td><input type="text" name="tb1_colunm37" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm38:</td>
      <td><input type="text" name="tb1_colunm38" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm39:</td>
      <td><input type="text" name="tb1_colunm39" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm40:</td>
      <td><input type="text" name="tb1_colunm40" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm41:</td>
      <td><input type="text" name="tb1_colunm41" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm42:</td>
      <td><input type="text" name="tb1_colunm42" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm43:</td>
      <td><input type="text" name="tb1_colunm43" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm44:</td>
      <td><input type="text" name="tb1_colunm44" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm45:</td>
      <td><input type="text" name="tb1_colunm45" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm46:</td>
      <td><input type="text" name="tb1_colunm46" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm47:</td>
      <td><input type="text" name="tb1_colunm47" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm48:</td>
      <td><input type="text" name="tb1_colunm48" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm49:</td>
      <td><input type="text" name="tb1_colunm49" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm50:</td>
      <td><input type="text" name="tb1_colunm50" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm51:</td>
      <td><input type="text" name="tb1_colunm51" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm52:</td>
      <td><input type="text" name="tb1_colunm52" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm53:</td>
      <td><input type="text" name="tb1_colunm53" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm54:</td>
      <td><input type="text" name="tb1_colunm54" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm55:</td>
      <td><input type="text" name="tb1_colunm55" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm56:</td>
      <td><input type="text" name="tb1_colunm56" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm57:</td>
      <td><input type="text" name="tb1_colunm57" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm58:</td>
      <td><input type="text" name="tb1_colunm58" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm59:</td>
      <td><input type="text" name="tb1_colunm59" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm60:</td>
      <td><input type="text" name="tb1_colunm60" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm61:</td>
      <td><input type="text" name="tb1_colunm61" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm62:</td>
      <td><input type="text" name="tb1_colunm62" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm63:</td>
      <td><input type="text" name="tb1_colunm63" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm64:</td>
      <td><input type="text" name="tb1_colunm64" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm65:</td>
      <td><input type="text" name="tb1_colunm65" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm66:</td>
      <td><input type="text" name="tb1_colunm66" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm67:</td>
      <td><input type="text" name="tb1_colunm67" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm68:</td>
      <td><input type="text" name="tb1_colunm68" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm69:</td>
      <td><input type="text" name="tb1_colunm69" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm70:</td>
      <td><input type="text" name="tb1_colunm70" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm71:</td>
      <td><input type="text" name="tb1_colunm71" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm72:</td>
      <td><input type="text" name="tb1_colunm72" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm73:</td>
      <td><input type="text" name="tb1_colunm73" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm74:</td>
      <td><input type="text" name="tb1_colunm74" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm75:</td>
      <td><input type="text" name="tb1_colunm75" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm76:</td>
      <td><input type="text" name="tb1_colunm76" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm77:</td>
      <td><input type="text" name="tb1_colunm77" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm78:</td>
      <td><input type="text" name="tb1_colunm78" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm79:</td>
      <td><input type="text" name="tb1_colunm79" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm80:</td>
      <td><input type="text" name="tb1_colunm80" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm81:</td>
      <td><input type="text" name="tb1_colunm81" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm82:</td>
      <td><input type="text" name="tb1_colunm82" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm83:</td>
      <td><input type="text" name="tb1_colunm83" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm84:</td>
      <td><input type="text" name="tb1_colunm84" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm85:</td>
      <td><input type="text" name="tb1_colunm85" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm86:</td>
      <td><input type="text" name="tb1_colunm86" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm87:</td>
      <td><input type="text" name="tb1_colunm87" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm88:</td>
      <td><input type="text" name="tb1_colunm88" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm89:</td>
      <td><input type="text" name="tb1_colunm89" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm90:</td>
      <td><input type="text" name="tb1_colunm90" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm91:</td>
      <td><input type="text" name="tb1_colunm91" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm92:</td>
      <td><input type="text" name="tb1_colunm92" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm93:</td>
      <td><input type="text" name="tb1_colunm93" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm94:</td>
      <td><input type="text" name="tb1_colunm94" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm95:</td>
      <td><input type="text" name="tb1_colunm95" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm96:</td>
      <td><input type="text" name="tb1_colunm96" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm97:</td>
      <td><input type="text" name="tb1_colunm97" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm98:</td>
      <td><input type="text" name="tb1_colunm98" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm99:</td>
      <td><input type="text" name="tb1_colunm99" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm100:</td>
      <td><input type="text" name="tb1_colunm100" value="" size="32" /></td>
    </tr>-->
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Submit" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
</p>
</div>
</body>
</html>