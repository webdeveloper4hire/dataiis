<?php require_once('../Connections/connection.php'); ?>
<?php require_once('config.php'); ?>
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
  $insertSQL = sprintf("INSERT INTO table2 (table2_id, tb2_colunm1, tb2_colunm2, tb2_colunm3, tb2_colunm5, tb2_colunm6, tb2_colunm7, tb2_colunm8, tb2_colunm9, tb2_colunm10, tb2_colunm11, tb2_colunm12) VALUES (%s, %s, %s,%s,%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['table2_id'], "int"),
                       GetSQLValueString($_POST['tb2_colunm1'], "text"),
                       GetSQLValueString($_POST['tb2_colunm2'], "text"),
					   GetSQLValueString($_POST['tb2_colunm3'], "text"),
					   GetSQLValueString($_POST['tb2_colunm5'], "text"),
					   GetSQLValueString($_POST['tb2_colunm6'], "text"),
					   GetSQLValueString($_POST['tb2_colunm7'], "text"),
					   GetSQLValueString($_POST['tb2_colunm8'], "text"),
					   GetSQLValueString($_POST['tb2_colunm9'], "text"),
					   GetSQLValueString($_POST['tb2_colunm10'], "text"),
					   GetSQLValueString($_POST['tb2_colunm11'], "text"),
					   GetSQLValueString($_POST['tb2_colunm12'], "text"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($insertSQL, $connection) or die(mysql_error());

  $insertGoTo = "confirm_global.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_connection, $connection);
$query_rsitem = "SELECT * FROM table1 WHERE tb1_colunm1 = 'item'";
$rsitem = mysql_query($query_rsitem, $connection) or die(mysql_error());
$row_rsitem = mysql_fetch_assoc($rsitem);
$totalRows_rsitem = mysql_num_rows($rsitem);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Description" content="Php Error Message" />
<meta name="Keywords" content="error message, php, mysql, perl, framework, microsoft, windows, linux, server, host, tutorial, how to fix error message" />
<meta name="Author" content="webdeveloper4hire@gmail.com" />
<meta name="Distribution" content="Global" />
<title>New</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"
     type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.8.20/jquery-ui.min.js"
     type="text/javascript"></script>
<script src="http://jquery-ui.googlecode.com/svn/tags/latest/external/jquery.bgiframe-2.1.2.js"
        type="text/javascript"></script>
<script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/minified/i18n/jquery-ui-i18n.min.js"
        type="text/javascript"></script>

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
 .textarea{background: #fff;}
        .dragitems{width: 20%; float: left; background: #f1f1f1;}
        .dropitems{width: 70%;float: left;background: #f1f1f1;
                   margin-left: 20px;padding:5px 5px 5px 5px;}
        .dragitems ul{list-style-type: none;padding-left: 5px;
                   display: block;}
        #content{height: 400px;width: 650px;}
    </style>
<script language="javascript" type="text/javascript">
        $(function() {
            $("#allfields li").draggable({
                appendTo: "body",
                helper: "clone",
                cursor: "select",
                revert: "invalid"
            });
            initDroppable($("#TextArea1"));
            function initDroppable($elements) {
                $elements.droppable({
                    hoverClass: "textarea",
                    accept: ":not(.ui-sortable-helper)",
                    drop: function(event, ui) {
                        var $this = $(this);
 
                        var tempid = ui.draggable.text();
                        var dropText;
                        dropText = "" + tempid + ", ";
                        var droparea = document.getElementById('TextArea1');
                        var range1 = droparea.selectionStart;
                        var range2 = droparea.selectionEnd;
                        var val = droparea.value;
                        var str1 = val.substring(0, range1);
                        var str3 = val.substring(range1, val.length);
                        droparea.value = str1 + dropText + str3;
                    }
                });
            }
        });
    </script>
</head>
<body>
<div id="container">
<h1>Add Purchase Request</h1>
<p>


<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <div class="dragitems">
            <h3>
                <span>Item Description</span></h3>
            <ul id="allfields" runat="server">
            <?php do { ?>
                <li id="node1" ><?php echo $row_rsitem['tb1_colunm4']; ?></li>
            <?php } while ($row_rsitem = mysql_fetch_assoc($rsitem)); ?>
            </ul>
        </div>
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Continue" /></td>
    </tr>
	
	  <tr valign="baseline">
      <td nowrap="nowrap" align="right">Category:</td>
      <td><input type="text" name="tb2_colunm1" value="<?php echo $_GET['tb2_colunm1']; ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Fund Cluster:</td>
      <td><input type="text" name="tb2_colunm2" value="" size="32" /></td>
    </tr>
      <td><input type="hidden" name="tb2_colunm12" value="Request" size="32" /></td>
  
  
	<?php if($_GET['tb2_colunm1'] == 'Purchase Request') { ?>	
	  <tr valign="baseline">
      <td nowrap="nowrap" align="right">Office Section:</td>
      <td><input type="text" name="tb2_colunm3" value="" size="32" /></td>
    </tr>
    <?php } ?>
	
	
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Responsibility Center Code:</td>
      <td><input type="text" name="tb2_colunm5" value="" size="32" /></td>
    </tr>
	
	
	<?php if($_GET['tb2_colunm1'] != 'Request and Issue Slip'&'Inspection and Acceoptance Report') { ?>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Date:</td>
      <td><input type="date" name="tb2_colunm6" value="" size="32" /></td>
    </tr>
	<?php } ?>
	
	
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Unit:</td>
      <td><input type="text" name="tb2_colunm7" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Item Description:</td>
       <td><div class="dropitems"><textarea id="TextArea1" cols="40"  rows="10" placeholder="Item Description" name="tb2_colunm8" ></textarea></div></td>
    </tr>

	<tr valign="baseline">
      <td nowrap="nowrap" align="right">Quantity:</td>
      <td><input type="text" name="tb2_colunm9" value="" size="32" /></td>
    </tr>
	<tr valign="baseline">
      <td nowrap="nowrap" align="right">Unit Cost:</td>
      <td><input type="text" name="tb2_colunm10" value="" size="32" /></td>
    </tr>
	
	<?php if($_GET['tb2_colunm1'] == 'Inventory Custodian Slip') { ?>
	<tr valign="baseline">
      <td nowrap="nowrap" align="right">Estimated Useful Life:</td>
      <td><input type="text" name="tb2_colunm11" value="" size="32" /></td>
    </tr>
	<?php } ?>

	
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Continue" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />    
</form>
</p>
</div>
</body>
</html>
<?php
mysql_free_result($rsitem);
?>
