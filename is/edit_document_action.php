<?php require_once('../Connections/connection.php'); ?>
<?php require_once('access_dats.php'); ?>
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
  $updateSQL = sprintf("UPDATE table2 SET tb2_colunm1=%s, tb2_colunm2=%s, tb2_colunm3=%s, tb2_colunm4=%s, tb2_colunm5=%s, tb2_colunm6=%s, tb2_colunm7=%s, tb2_colunm8=%s, tb2_colunm9=%s, tb2_colunm10=%s, tb2_colunm11=%s, tb2_colunm12=%s, tb2_colunm13=%s, tb2_colunm14=%s, tb2_colunm15=%s, tb2_colunm16=%s, tb2_colunm17=%s, tb2_colunm18=%s, tb2_colunm19=%s, tb2_colunm20=%s, tb2_colunm21=%s, tb2_colunm22=%s, tb2_colunm23=%s, tb2_colunm24=%s, tb2_colunm25=%s, tb2_colunm26=%s, tb2_colunm27=%s, tb2_colunm28=%s, tb2_colunm29=%s, tb2_colunm30=%s WHERE table2_id=%s",
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

$colname_rstable2 = "-1";
if (isset($_GET['table2_id'])) {
  $colname_rstable2 = $_GET['table2_id'];
}
mysql_select_db($database_connection, $connection);
$query_rstable2 = sprintf("SELECT * FROM table2 WHERE table2_id = %s", GetSQLValueString($colname_rstable2, "int"));
$rstable2 = mysql_query($query_rstable2, $connection) or die(mysql_error());
$row_rstable2 = mysql_fetch_assoc($rstable2);
$totalRows_rstable2 = mysql_num_rows($rstable2);
?>
<?php //require_once('head.php'); ?>
<?php //require_once('menu.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Description" content="Php Error Message" />
<meta name="Keywords" content="error message, php, mysql, perl, framework, microsoft, windows, linux, server, host, tutorial, how to fix error message" />
<meta name="Author" content="webdeveloper4hire@gmail.com" />
<meta name="Distribution" content="Global" />
<title>DENR</title>
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
<div id="container" align="center">

<h1>Edit Data</h1>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" onsubmit="return confirm('Are you sure?')">
  <table align="center">
  <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Update" /> | <input type="reset" value="Reset" />| <a href="delete_table2.php?table2_id=<?php echo $row_rstable2['table2_id']; ?>"><input type="button" value="Delete" /></a></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Action ID:</td>
      <td><?php echo $row_rstable2['table2_id']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Database:</td>
      <td><input type="text" name="tb2_colunm1" value="<?php echo htmlentities($row_rstable2['tb2_colunm1'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" readonly /></td>
    </tr>
    <tr valign="baseline">
      <td align="right">Document ID:</td>
      <td><input type="text" name="tb2_colunm2" value="<?php echo htmlentities($row_rstable2['tb2_colunm2'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" readonly /></td>
    </tr>
    <tr valign="baseline">
      <td align="right">Status:</td>
      <td><select name="tb2_colunm10">
        <option value="<?php echo htmlentities($row_rstable2['tb2_colunm10'], ENT_COMPAT, 'utf-8'); ?>" selected="selected"><?php echo htmlentities($row_rstable2['tb2_colunm10'], ENT_COMPAT, 'utf-8'); ?></option>
        <option value="IN">IN</option>
      <option value="OUT">OUT</option>
      <option value="IN/Yellow Lane">IN/Yellow Lane</option>
      <option value="OUT/Yellow Lane">OUT/Yellow Lane</option>
      <option value="IN/URGENT">IN/URGENT</option>
      <option value="OUT/URGENT">OUT/URGENT</option>
      <option value="IN/DUE">IN/DUE</option>
      <option value="OUT/DUE">OUT/DUE</option>
      <option value="Others">Others</option>      </select></td>
    </tr>
    <tr valign="baseline">
      <td align="right">Route to:</td>
      <td><input type="text" name="tb2_colunm3" value="<?php echo htmlentities($row_rstable2['tb2_colunm3'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right">Date Received:</td>
      <td><input type="date" name="tb2_colunm4" value="<?php echo htmlentities($row_rstable2['tb2_colunm4'], ENT_COMPAT, 'utf-8'); ?>" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right">Time Received:</td>
      <td><input type="text" name="tb2_colunm5" value="<?php echo htmlentities($row_rstable2['tb2_colunm5'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40"  size="60" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr valign="baseline">
      <td align="right">Released to #1:</td>
      <td>
      <select name="tb2_colunm6">
                                  <option value="<?php echo htmlentities($row_rstable2['tb2_colunm6'], ENT_COMPAT, 'utf-8'); ?>" selected="selected"><?php echo htmlentities($row_rstable2['tb2_colunm6'], ENT_COMPAT, 'utf-8'); ?></option>
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
<option value="Records Section">Records Section</option>
<option value="Regional ICT Unit">Regional ICT Unit</option>
<option value="PASu">PASu</option>
<option value="RTDE">RTD ERDS</option>
<option value="RTDF">RTD Forestry</option>
<option value="RTDL">RTD Lands</option>
<option value="RTDP">RTD PAWCZMS</option>
<option value="Others">Others</option>
</optgroup>
</select>
      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Released to #2:</td>
      <td><input type="text" name="tb2_colunm15" value="<?php echo htmlentities($row_rstable2['tb2_colunm15'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Released to #3:</td>
      <td><input type="text" name="tb2_colunm16" value="<?php echo htmlentities($row_rstable2['tb2_colunm16'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Released to #4:</td>
      <td><input type="text" name="tb2_colunm17" value="<?php echo htmlentities($row_rstable2['tb2_colunm17'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right">Date Released:</td>
      <td><input type="date" name="tb2_colunm7" value="<?php echo htmlentities($row_rstable2['tb2_colunm7'], ENT_COMPAT, 'utf-8'); ?>" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right">Time Released:</td>
      <td><input type="text" name="tb2_colunm8" value="<?php echo htmlentities($row_rstable2['tb2_colunm8'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40"  size="60" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr valign="baseline">
      <td align="right">Action/Remarks:</td>
      <td> --<br />
      <textarea name="tb2_colunm9" rows="5" cols="30" class="text w_40" ><?php echo htmlentities($row_rstable2['tb2_colunm9'], ENT_COMPAT, 'utf-8'); ?></textarea>
      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Action Date:</td>
      <td><input type="date" name="tb2_colunm13" value="<?php echo htmlentities($row_rstable2['tb2_colunm13'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Action Time:</td>
      <td><input type="text" name="tb2_colunm14" value="<?php echo htmlentities($row_rstable2['tb2_colunm14'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right">Author:</td>
      <td><input type="text" name="tb2_colunm11" value="<?php echo htmlentities($row_rstable2['tb2_colunm11'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" readonly /></td>
    </tr>
    <tr valign="baseline">
      <td align="right">Recently Accesses by:</td>
      <td><input type="text" name="tb2_colunm12" value="<?php echo htmlentities($row_rstable2['tb2_colunm12'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" readonly /></td>
    </tr>
    <!--
    
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Colunm18:</td>
      <td><input type="text" name="tb2_colunm18" value="<?php echo htmlentities($row_rstable2['tb2_colunm18'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Colunm19:</td>
      <td><input type="text" name="tb2_colunm19" value="<?php echo htmlentities($row_rstable2['tb2_colunm19'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Colunm20:</td>
      <td><input type="text" name="tb2_colunm20" value="<?php echo htmlentities($row_rstable2['tb2_colunm20'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Colunm21:</td>
      <td><input type="text" name="tb2_colunm21" value="<?php echo htmlentities($row_rstable2['tb2_colunm21'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Colunm22:</td>
      <td><input type="text" name="tb2_colunm22" value="<?php echo htmlentities($row_rstable2['tb2_colunm22'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Colunm23:</td>
      <td><input type="text" name="tb2_colunm23" value="<?php echo htmlentities($row_rstable2['tb2_colunm23'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Colunm24:</td>
      <td><input type="text" name="tb2_colunm24" value="<?php echo htmlentities($row_rstable2['tb2_colunm24'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Colunm25:</td>
      <td><input type="text" name="tb2_colunm25" value="<?php echo htmlentities($row_rstable2['tb2_colunm25'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Colunm26:</td>
      <td><input type="text" name="tb2_colunm26" value="<?php echo htmlentities($row_rstable2['tb2_colunm26'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Colunm27:</td>
      <td><input type="text" name="tb2_colunm27" value="<?php echo htmlentities($row_rstable2['tb2_colunm27'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Colunm28:</td>
      <td><input type="text" name="tb2_colunm28" value="<?php echo htmlentities($row_rstable2['tb2_colunm28'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Colunm29:</td>
      <td><input type="text" name="tb2_colunm29" value="<?php echo htmlentities($row_rstable2['tb2_colunm29'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Colunm30:</td>
      <td><input type="text" name="tb2_colunm30" value="<?php echo htmlentities($row_rstable2['tb2_colunm30'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    -->
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Update" /> | <input type="reset" value="Reset" />| <a href="delete_table2.php?table2_id=<?php echo $row_rstable2['table2_id']; ?>"><input type="button" value="Delete" /></a></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="table2_id" value="<?php echo $row_rstable2['table2_id']; ?>" />
</form>
</div>
<?php //require_once('footer.php'); ?>
	</body>
</html>
<?php
mysql_free_result($rstable2);
?>
