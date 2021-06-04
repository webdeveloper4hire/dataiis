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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO table2 (tb2_colunm1, tb2_colunm2, tb2_colunm3, tb2_colunm4, tb2_colunm5, tb2_colunm6, tb2_colunm7, tb2_colunm8, tb2_colunm9, tb2_colunm10, tb2_colunm11, tb2_colunm12, tb2_colunm13, tb2_colunm14, tb2_colunm15, tb2_colunm16, tb2_colunm17, tb2_colunm18, tb2_colunm19, tb2_colunm20, tb2_colunm21, tb2_colunm22, tb2_colunm23, tb2_colunm24, tb2_colunm25, tb2_colunm26, tb2_colunm27, tb2_colunm28, tb2_colunm29, tb2_colunm30) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
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
                       GetSQLValueString($_POST['tb2_colunm30'], "text"));

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

<h1>Add <?php echo $_GET['tb2_colunm1'];?> Data (3/3)</h1>
                            <form action="<?php echo $editFormAction; ?>" method="post" id="form1" onsubmit="return confirm('Are you sure?')">
                              <table>
                              <tr valign="baseline">
                                  <td align="right">&nbsp;</td>
                                  <td><input type="submit" value="Submit" /> | <a href="javascript:history.back(-2)"><input type="button" value="Cancel" /></a></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm1:</td>
                                  <td><input type="text" name="tb2_colunm1" value="<?php echo $_GET['tb1_colunm1']; ?>" class="text w_40"  size="60" readonly /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">ID:</td>
                                  <td><input type="text" name="tb2_colunm2" value="<?php echo $_GET['table1_id']; ?>" class="text w_40"  size="60" readonly /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Type:</td>
                                  <td><input type="text" name="tb2_colunm3" value="Attatched by <?php echo $_SESSION['MM_Username']; ?>" class="text w_40" size="60"/></td>
                                </tr>
                               <tr valign="baseline">
                                  <td align="right">Date:</td>
                                  <td><input type="date" name="tb2_colunm4" value="<?php echo date("Y-m-d"); ?>" size="60" /></td>
                                </tr>
                                <!-- <tr valign="baseline">
                                  <td align="right">Colunm5:</td>
                                  <td><input type="text" name="tb2_colunm5" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm6:</td>
                                  <td><input type="text" name="tb2_colunm6" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm7:</td>
                                  <td><input type="text" name="tb2_colunm7" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm8:</td>
                                  <td><input type="text" name="tb2_colunm8" value="" class="text w_40"  size="60" /></td>
                                </tr>-->
                                <tr valign="baseline">
                                  <td align="right">File:</td>
                                  <td><input type="text" name="tb2_colunm9" value="<?php echo $_GET['tb2_colunm3']; ?>" class="text w_40"  size="60" /></td>
                                </tr>
                                <!--<tr valign="baseline">
                                  <td align="right">Colunm10:</td>
                                  <td><input type="text" name="tb2_colunm10" value="" class="text w_40"  size="60" /></td>
                                </tr>-->
                                <tr valign="baseline">
                                  <td align="right">Uploader:</td>
                                  <td><input type="text" name="tb2_colunm11" value="<?php echo $_SESSION['MM_Username']; ?>" readonly class="text w_40"  size="60" /></td>
                                </tr>
                                
                                <!--<tr valign="baseline">
                                  <td align="right">Colunm12:</td>
                                  <td><input type="text" name="tb2_colunm12" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm13:</td>
                                  <td><input type="text" name="tb2_colunm13" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm14:</td>
                                  <td><input type="text" name="tb2_colunm14" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm15:</td>
                                  <td><input type="text" name="tb2_colunm15" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm16:</td>
                                  <td><input type="text" name="tb2_colunm16" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm17:</td>
                                  <td><input type="text" name="tb2_colunm17" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm18:</td>
                                  <td><input type="text" name="tb2_colunm18" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm19:</td>
                                  <td><input type="text" name="tb2_colunm19" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm20:</td>
                                  <td><input type="text" name="tb2_colunm20" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm21:</td>
                                  <td><input type="text" name="tb2_colunm21" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm22:</td>
                                  <td><input type="text" name="tb2_colunm22" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm23:</td>
                                  <td><input type="text" name="tb2_colunm23" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm24:</td>
                                  <td><input type="text" name="tb2_colunm24" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm25:</td>
                                  <td><input type="text" name="tb2_colunm25" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm26:</td>
                                  <td><input type="text" name="tb2_colunm26" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm27:</td>
                                  <td><input type="text" name="tb2_colunm27" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm28:</td>
                                  <td><input type="text" name="tb2_colunm28" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm29:</td>
                                  <td><input type="text" name="tb2_colunm29" value="" class="text w_40"  size="60" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right">Colunm30:</td>
                                  <td><input type="text" name="tb2_colunm30" value="" class="text w_40"  size="60" /></td>
                                </tr>-->
                                <tr valign="baseline">
                                  <td align="right">&nbsp;</td>
                                  <td><input type="submit" value="Submit" />  | <a href="javascript:history.back(-2)"><input type="button" value="Cancel" /></a></td>
                                </tr>
                              </table>
                              <input type="hidden" name="MM_insert" value="form1" />
                            </form>
</div>
<?php //require_once('footer.php'); ?>
	</body>
</html>