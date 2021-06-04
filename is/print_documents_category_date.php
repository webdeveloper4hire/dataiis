<?php require_once('../Connections/connection.php'); ?>
<?php date_default_timezone_set("Asia/Hong_Kong"); ?>
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

mysql_select_db($database_connection, $connection);
$query_rstable1 = "SELECT * FROM table1 WHERE tb1_colunm2 = '".$_GET['type']."' AND tb1_colunm21 LIKE '%".$_GET['date']."%' ORDER BY tb1_colunm24 DESC";
$rstable1 = mysql_query($query_rstable1, $connection) or die(mysql_error());
$row_rstable1 = mysql_fetch_assoc($rstable1);
$totalRows_rstable1 = mysql_num_rows($rstable1);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inbox (<?php echo $totalRows_rstable1; ?>)</title>
<style>
table { border-collapse: collapse; }
th { background-color: #e6ffff; }
th, td { padding: 4px; text-align: left; vertical-align: center; }
tr:nth-child(even) { background-color: #f0f0f0; }
tr:nth-child(odd) { background-color: #fff; }
tr>:nth-child(5) { text-align: center; }

.crop
	{overflow:hidden; 
  	white-space:nowrap; 
  	width:400px; }
.crop2
	{overflow:hidden; 
  	white-space:nowrap; 
  	width:300px; }
</style>
</head>

<body>
<?php if ($totalRows_rstable1 == 0) { ?>
<h2>No notification for now!</h2>
<?php } ?>

<h2>Inbox (<?php echo $_GET['date']; ?>) </h2>

<table width="99%" border="1" >
  <tr>
    <th>Subject</th>
    <th>From</th>
    <th>To</th>
    <th>Date</th>
    <th>Attachment</th>
  </tr>
  <?php do { ?>
  <tr>
    <td><div class="crop">
    <?php if ($row_rstable1['tb1_colunm24'] == "ONGOING") { ?><font color="#FF0000">For Action <?php echo $row_rstable1['tb1_colunm8']; ?></font><?php } ?>
	<?php if ($row_rstable1['tb1_colunm24'] == "ONGOING" && $row_rstable1['tb1_colunm8'] == $_GET['division']) { ?>
    <a href="add_document-action.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>&tb2_colunm1=Document-Action" title="Add action" target="_blank">
	<?php } else { ?><a href="view_document.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>" title="<?php if ($row_rstable1['tb1_colunm2'] != "0") {  ?><?php echo $row_rstable1['tb1_colunm2']; ?>-<?php } ?><?php echo $row_rstable1['tb1_colunm3']; ?>-<?php echo $row_rstable1['table1_id']; ?>"><?php } ?> <?php echo $row_rstable1['tb1_colunm7']; ?></a></div></td>
    <td><div class="crop2"><?php if ($row_rstable1['tb1_colunm6'] == NULL) {echo $row_rstable1['tb1_colunm18'];} else {echo $row_rstable1['tb1_colunm6'];}?></div></td>
    <td><div class="crop2"><?php
     if ($row_rstable1['tb1_colunm8'] == "ORED") {
  		echo "ORED &lt;mimaroparegion@denr.gov.ph&gt;";
	} elseif ($row_rstable1['tb1_colunm8'] == "ARDTS") {
  		echo "ARDTS &lt;ardts.mimaropa@gmail.com&gt;";
	} elseif ($row_rstable1['tb1_colunm8'] == "ARDMS") {
  		echo "ARDMS &lt;dmg.mimaropa@gmail.com&gt;";
	} elseif ($row_rstable1['tb1_colunm8'] == "NGP") {
  		echo "NGP &lt;mimaropaengp@gmail.com&gt;";
	} elseif ($row_rstable1['tb1_colunm8'] == "PMD") {
  		echo "PMD &lt;pmd_mimar4b@yahoo.com.ph&gt;";
	} elseif ($row_rstable1['tb1_colunm8'] == "FD") {
  		echo "FD &lt;denr_finance4B@yahoo.com&gt;";
	} elseif ($row_rstable1['tb1_colunm8'] == "LD") {
  		echo "LD &lt;denr4blegal@gmail.com&gt;";
	} elseif ($row_rstable1['tb1_colunm8'] == "AD") {
  		echo "AD &lt;admimar4b@gmail.com&gt;";
	} elseif ($row_rstable1['tb1_colunm8'] == "LPDD") {
  		echo "LPDD &lt;denrmimaropalpdd@gmail.com&gt;";
	} elseif ($row_rstable1['tb1_colunm8'] == "SMD") {
  		echo "SMD &lt;surveys_mimaropa@yahoo.com&gt;";
	} elseif ($row_rstable1['tb1_colunm8'] == "CDD") {
  		echo "CDD &lt;cddmimaropa@gmail.com&gt;";
	} elseif ($row_rstable1['tb1_colunm8'] == "ED") {
  		echo "ED &lt;enforcement.mimaropa@gmail.com&gt;";
	} else {
  		echo $row_rstable1['tb1_colunm8'];
	} ?></div></td>
    <td nowrap><?php echo $newDate = date("m/d/Y", strtotime($row_rstable1['tb1_colunm5'])); ?></td>
    <td style="text-align: center;"><?php if ($row_rstable1['tb1_colunm10'] != NULL) { ?>*<?php } else { ?><?php } ?></td>	  
  </tr>
  <?php } while ($row_rstable1 = mysql_fetch_assoc($rstable1)); ?>
</table>

</body>
</html>
<?php
mysql_free_result($rstable1);
?>