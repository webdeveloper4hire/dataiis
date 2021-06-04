<?php require_once('../Connections/connection.php'); ?>
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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE table1 SET tb1_colunm1=%s, tb1_colunm2=%s, tb1_colunm3=%s, tb1_colunm4=%s, tb1_colunm5=%s, tb1_colunm6=%s, tb1_colunm7=%s, tb1_colunm8=%s, tb1_colunm9=%s, tb1_colunm10=%s, tb1_colunm11=%s, tb1_colunm12=%s, tb1_colunm13=%s, tb1_colunm14=%s, tb1_colunm15=%s, tb1_colunm16=%s, tb1_colunm17=%s, tb1_colunm18=%s, tb1_colunm19=%s, tb1_colunm20=%s, tb1_colunm21=%s, tb1_colunm22=%s, tb1_colunm23=%s, tb1_colunm24=%s, tb1_colunm25=%s, tb1_colunm26=%s, tb1_colunm27=%s, tb1_colunm28=%s, tb1_colunm29=%s, tb1_colunm30=%s WHERE table1_id=%s",
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

$colname_rstable1 = "-1";
if (isset($_GET['table1_id'])) {
  $colname_rstable1 = $_GET['table1_id'];
}
mysql_select_db($database_connection, $connection);
$query_rstable1 = sprintf("SELECT * FROM table1 WHERE table1_id = %s", GetSQLValueString($colname_rstable1, "int"));
$rstable1 = mysql_query($query_rstable1, $connection) or die(mysql_error());
$row_rstable1 = mysql_fetch_assoc($rstable1);
$totalRows_rstable1 = mysql_num_rows($rstable1);
?>
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

<h1>Edit T.O Data</h1>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" onsubmit="return confirm('Are you sure?')">
  <table align="center">
  <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Update" /> | <input type="reset" value="Reset" /> | <a href="javascript:history.back(-2)"><input type="button" value="Cancel" /></a></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Table1_id:</td>
      <td><?php echo $row_rstable1['table1_id']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Database:</td>
      <td><input type="text" name="tb1_colunm1" value="<?php echo htmlentities($row_rstable1['tb1_colunm1'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">TO Number:</td>
      <td><input type="text" name="tb1_colunm2" value="<?php echo htmlentities($row_rstable1['tb1_colunm2'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Received:</td>
      <td><select name="tb1_colunm24">
        <option value="<?php echo htmlentities($row_rstable1['tb1_colunm24'], ENT_COMPAT, 'utf-8'); ?>"><?php echo htmlentities($row_rstable1['tb1_colunm24'], ENT_COMPAT, 'utf-8'); ?></option>
        <option value="<?php echo htmlentities($row_rstable1['tb1_colunm24'], ENT_COMPAT, 'utf-8'); ?>"> </option>
        <option value="YES">YES</option>
        <option value="NO">NO</option>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Date Received:</td>
      <td><input type="date" name="tb1_colunm21" value="<?php echo htmlentities($row_rstable1['tb1_colunm21'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Date:</td>
      <td><input type="date" name="tb1_colunm22" value="<?php echo htmlentities($row_rstable1['tb1_colunm22'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Date Released:</td>
      <td><input type="date" name="tb1_colunm23" value="<?php echo htmlentities($row_rstable1['tb1_colunm23'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Firstname:</td>
      <td><input type="text" name="tb1_colunm3" value="<?php echo htmlentities($row_rstable1['tb1_colunm3'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Lastname:</td>
      <td><input type="text" name="tb1_colunm4" value="<?php echo htmlentities($row_rstable1['tb1_colunm4'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Middlename:</td>
      <td><input type="text" name="tb1_colunm5" value="<?php echo htmlentities($row_rstable1['tb1_colunm5'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Salary per Annum:</td>
      <td><input type="text" name="tb1_colunm6" value="<?php echo htmlentities($row_rstable1['tb1_colunm6'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Position:</td>
      <td><input type="text" name="tb1_colunm13" value="<?php echo htmlentities($row_rstable1['tb1_colunm13'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Division / Sector / Unit:</td>
      <td><input type="text" name="tb1_colunm8" value="<?php echo htmlentities($row_rstable1['tb1_colunm8'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Departure Date:</td>
      <td><input type="date" name="tb1_colunm9" value="<?php echo htmlentities($row_rstable1['tb1_colunm9'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Official Station:</td>
      <td><input type="text" name="tb1_colunm10" value="<?php echo htmlentities($row_rstable1['tb1_colunm10'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Destination:</td>
      <td><input type="text" name="tb1_colunm11" value="<?php echo htmlentities($row_rstable1['tb1_colunm11'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Arrival Date:</td>
      <td><input type="date" name="tb1_colunm12" value="<?php echo htmlentities($row_rstable1['tb1_colunm12'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Purpose of Travel:</td>
      <td><input type="text" name="tb1_colunm7" value="<?php echo htmlentities($row_rstable1['tb1_colunm7'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Per Diems / Expenses Allowed:</td>
      <td><input type="text" name="tb1_colunm14" value="<?php echo htmlentities($row_rstable1['tb1_colunm14'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Assistant Laborers Allowed:</td>
      <td><input type="text" name="tb1_colunm15" value="<?php echo htmlentities($row_rstable1['tb1_colunm15'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Appropriations to which travel<br>
        should be charged:</td>
      <td><input type="text" name="tb1_colunm16" value="<?php echo htmlentities($row_rstable1['tb1_colunm16'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Remarks:</td>
      <td><input type="text" name="tb1_colunm17" value="<?php echo htmlentities($row_rstable1['tb1_colunm17'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Recommending Approval:</td>
      <td><input type="text" name="tb1_colunm18" value="<?php echo htmlentities($row_rstable1['tb1_colunm18'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Office:</td>
      <td><input type="text" name="tb1_colunm19" value="<?php echo htmlentities($row_rstable1['tb1_colunm19'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Recommending Approval:</td>
      <td><input type="text" name="tb1_colunm20" value="<?php echo htmlentities($row_rstable1['tb1_colunm20'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <!--<tr valign="baseline">
      <td nowrap="nowrap" align="right">Colunm25:</td>
      <td><input type="text" name="tb1_colunm25" value="<?php echo htmlentities($row_rstable1['tb1_colunm25'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Colunm26:</td>
      <td><input type="text" name="tb1_colunm26" value="<?php echo htmlentities($row_rstable1['tb1_colunm26'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Colunm27:</td>
      <td><input type="text" name="tb1_colunm27" value="<?php echo htmlentities($row_rstable1['tb1_colunm27'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Colunm28:</td>
      <td><input type="text" name="tb1_colunm28" value="<?php echo htmlentities($row_rstable1['tb1_colunm28'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Colunm29:</td>
      <td><input type="text" name="tb1_colunm29" value="<?php echo htmlentities($row_rstable1['tb1_colunm29'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Colunm30:</td>
      <td><input type="text" name="tb1_colunm30" value="<?php echo htmlentities($row_rstable1['tb1_colunm30'], ENT_COMPAT, 'utf-8'); ?>" class="text w_40" size="32" /></td>
    </tr>-->
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Update" /> | <input type="reset" value="Reset" /> | <a href="javascript:history.back(-2)"><input type="button" value="Cancel" /></a></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="table1_id" value="<?php echo $row_rstable1['table1_id']; ?>" />
</form>
</div>
	</body>
</html>
<?php
mysql_free_result($rstable1);
?>
