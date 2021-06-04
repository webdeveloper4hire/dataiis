<?php require_once('../Connections/connection.php'); ?>
<?php require_once('access_so.php'); ?>
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

$currentPage = $_SERVER["PHP_SELF"];

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO table1 (tb1_colunm1, tb1_colunm2, tb1_colunm3, tb1_colunm4, tb1_colunm5, tb1_colunm6, tb1_colunm7, tb1_colunm8, tb1_colunm9, tb1_colunm10, tb1_colunm11, tb1_colunm12, tb1_colunm13, tb1_colunm14, tb1_colunm15, tb1_colunm16, tb1_colunm17, tb1_colunm18, tb1_colunm19, tb1_colunm20, tb1_colunm21, tb1_colunm22, tb1_colunm23, tb1_colunm24, tb1_colunm25, tb1_colunm26, tb1_colunm27, tb1_colunm28, tb1_colunm29, tb1_colunm30) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
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
                       GetSQLValueString($_POST['tb1_colunm30'], "text"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($insertSQL, $connection) or die(mysql_error());

  $insertGoTo = "confirm_global.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

//$colname_rsuser = "-1";
//if (isset($_SESSION['MM_Username'])) {
//  $colname_rsuser = $_SESSION['MM_Username'];
//}
mysql_select_db($database_connection, $connection);
$query_rsuser = sprintf("SELECT * FROM users_tb WHERE username = %s", GetSQLValueString($colname_rsuser, "text"));
$rsuser = mysql_query($query_rsuser, $connection) or die(mysql_error());
$row_rsuser = mysql_fetch_assoc($rsuser);
$totalRows_rsuser = mysql_num_rows($rsuser);

$queryString_rstable1 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rstable1") == false && 
        stristr($param, "totalRows_rstable1") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rstable1 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rstable1 = sprintf("&totalRows_rstable1=%d%s", $totalRows_rstable1, $queryString_rstable1);
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

<h1>Add SO data</h1>
 
<form action="<?php echo $editFormAction; ?>" method="post" id="form1" role="form" onsubmit="return confirm('Are you sure?')">
              <div class="form-group">
                                            <label>Database:</label>
                                            <input type="text" name="tb1_colunm1" value="Special-Order" class="form-control"size="32" readonly /></div>

                                        <div class="form-group">
                                            <label>   Office:</label>
                                            <input type="text" name="tb1_colunm19" value="Regional Office IV-B, MIMAROPA" class="form-control"  size="32" readonly/></div>

                                        <div class="form-group">
                                            <label>S.O Number:</label>
                                  <input type="text" name="tb1_colunm2" value="<?php echo $_GET['table1_id']; ?>" class="form-control" size="32" />                 
                                  </div>

                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input type="date" name="tb1_colunm5" value="<?php echo date("Y-m-d"); ?>" size="32" /></div>
                                        
                                         <div class="form-group">
                                            <label>Subject:</label>
                                  <textarea name="tb1_colunm7" rows="5" cols="30" class="form-control"  ><?php echo $_GET['tb1_colunm7']; ?></textarea>
                                </div>

                                <div class="form-group">
                                            <label>Restricted:</label>
                                            <input type="radio" name="tb1_colunm9" value="Restricted" />
                                    Yes |                                     <input type="radio" name="tb1_colunm12" value="Open" checked="checked" />
                                    No </div>
                                   <div class="form-group">
                                            <label>Attachment(s):
                                  <textarea  name="tb1_colunm10" rows="1" class="form-control"><?php echo $_GET['tb2_colunm3']; ?></textarea>
                                  </div>     
                                       <div class="form-group">
                                            <label>Others:</label>
                                            <input type="text" name="tb1_colunm9" value="" class="form-control" size="32" />
                                  <!--
                                  <select name="tb1_colunm9">
                                  <option value="Memo">Memo</option>
                                  <option value="Fax">Fax</option>
                                  <option value="Letter">Letter</option>
                                  -->
                                  
                                  </div> 
                                        

                                <div class="form-group">
                                            <label>&nbsp;</label>
                                            <input type="submit" value="Submit"  class="btn denr-btn-primary" />  | <a href="javascript:history.back(-2)"><input type="button" value="Cancel"  class="btn denr-btn-primary" /></a></div>
                              <input type="hidden" name="MM_insert" value="form1" />
                          </form>
                          <a href="home.php">Back to home</a>
                             
                           
</div>
	</body>
</html>