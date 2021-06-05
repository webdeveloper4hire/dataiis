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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print</title>
<style type="text/css">
table{counter-reset:section;}
.count:before
{
counter-increment:section;
content:counter(section);
} 

table.jermar th, table.jermar td {
  
  font-size : 14px;
  font-family: Ecofont Vera Sans, Arial, Helvetica, sans-serif ;
  src: url('http://www.ecofont.com/assets/files/ecofont_vera_sans_regular.ttf');
  src: local('ecofont_vera_sans_regular.ttf'), 
       local('Ecofont Vera Sans'), 
       url('http://www.ecofont.com/assets/files/ecofont_vera_sans_regular.ttf') format('truetype');
   }
</style>
</head>

<body>
<br />
<table width="600" border="1" cellspacing="0" cellpadding="10" class="jermar" align="center">
  <tr>
    <td colspan="2" valign="top">
    <table height="50" border="0" cellspacing="1">
      <tr>
        <td width="50" align="center"><a href="list_to.php?tb1_colunm1=Travel-Order&type=advance"><img src="../images/logogrey.jpg" width="50" /></a></td>
        <td width="500">
        <?php echo $clientfullname;?><br />
        Regional Office <?php echo $clientbranch;?></td>
        <td></td>
      </tr>
      </table>
    </td>
  </tr>
  <tr align="center">
    <td colspan="2" valign="top">TRAVEL ORDER (NO.<u> 
	<?php
if ($row_rstable1['tb1_colunm2'] == "No number yet") {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;";
}
else {
    echo $row_rstable1['tb1_colunm2'];
}
?> </u>) Date:</td>
  </tr>
  <tr>
    <td valign="top" width="300px">Name: <?php echo $row_rstable1['tb1_colunm3']; ?> <?php echo $row_rstable1['tb1_colunm5']; ?>  <?php echo $row_rstable1['tb1_colunm4']; ?></td>
    <td valign="top">Salary per Annum: <?php echo $row_rstable1['tb1_colunm6']; ?></td>
  </tr>
  <tr>
    <td valign="top">Position :<?php echo $row_rstable1['tb1_colunm13']; ?></td>
    <td valign="top">Div/Sec/Unit: <?php echo $row_rstable1['tb1_colunm8']; ?></td>
  </tr>
  <tr>
    <td valign="top">Departure Date:
	<?php echo $newDate = date("d-M-Y", strtotime($row_rstable1['tb1_colunm9'])); ?>
</td>
    <td valign="top">Official Station: <?php echo $row_rstable1['tb1_colunm10']; ?></td>
  </tr>
  <tr>
    <td valign="top">Destination: <?php echo $row_rstable1['tb1_colunm11']; ?></td>
    <td valign="top">Arrival Date:
	<?php echo $newDate = date("d-M-Y", strtotime($row_rstable1['tb1_colunm12'])); ?>
	</td>
  </tr>
  <tr>
    <td colspan="2" valign="top">Purpose of Travel: <?php echo $row_rstable1['tb1_colunm7']; ?></td>
  </tr>
  <tr>
    <td colspan="2" valign="top">Per Diems/Expenses    Allowed: <?php echo $row_rstable1['tb1_colunm14']; ?></td>
  </tr>
  <tr>
    <td colspan="2" valign="top">Assistant or Laborers    Allowed: <?php echo $row_rstable1['tb1_colunm15']; ?></td>
  </tr>
  <tr>
    <td colspan="2" valign="top">Appropriations to    which travel should be charged: <?php echo $row_rstable1['tb1_colunm16']; ?></td>
  </tr>
  <tr>
    <td colspan="2" valign="top">Remarks or Special    Instruction:<?php echo $row_rstable1['tb1_colunm17']; ?></td>
  </tr>
  <tr>
    <td colspan="2" valign="top">Certifications:</p>
      <p>                        This is to certify that  the travel is necessary and is connected with the functions of the  official/employee of this Div/Sec/Unit.</p>
      
<table width="100%" border="0" cellspacing="0" align="center" style="font-size:130%">
  <tr>
    <td>Recommending  Approval:</td>
    <td>Approved:</td>
  </tr>
  <tr align="center">
    <td>
	<p>&nbsp;</p>
    <p>&nbsp;</p>
	<?php echo $row_rstable1['tb1_colunm18']; ?></td>
    <td>
	<p>&nbsp;</p>
    <p>&nbsp;</p>
	<?php echo $row_rstable1['tb1_colunm20']; ?></td>
  </tr>
</table>
<hr />      
      <p align="center">AUTHORIZATION</p>
      <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I  hereby authorize the accountant to deduct the corresponding amount of the  unliquidated cash advance from my succeeding salary for my failure to liquidate  this travel within the prescribed thirty-day period upon return to may  permanent official station pursuant to item 5.1.3 COA Circular 97-002 dated  February 10, 1997 and Sec. 16 EO No. 248 dated May 29, 1995.</p>      
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p align="right"><strong><a href="javascript:window.print()" title="PRINT"><?php echo $row_rstable1['tb1_colunm3']; ?> <?php echo $row_rstable1['tb1_colunm5']; ?>  <?php echo $row_rstable1['tb1_colunm4']; ?></a></strong><strong></strong><br />
      Official/Employee</td>
  </tr>
</table>

</body>
</html>
<?php
mysql_free_result($rstable1);
?>