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

mysql_select_db($database_connection, $connection);
$query_rspayment = "SELECT * FROM table2 WHERE tb2_colunm15 = '".$_GET['table1_id']."' AND tb2_colunm52 LIKE '%".$_GET['tb2_colunm52']."%' ORDER BY table2_id ASC";
$rspayment = mysql_query($query_rspayment, $connection) or die(mysql_error());
$row_rspayment = mysql_fetch_assoc($rspayment);
$totalRows_rspayment = mysql_num_rows($rspayment);

mysql_select_db($database_connection, $connection);
$query_rstable1 = sprintf("SELECT * FROM table1 WHERE table1_id = '".$_GET['table1_id']."'", GetSQLValueString($colname_rstable1, "text"));
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
  
  font-size : 10px;
  font-family: 'Ecofont Vera Sans';
  src: url('http://www.ecofont.com/assets/files/ecofont_vera_sans_regular.ttf');
  src: local('ecofont_vera_sans_regular.ttf'), 
       local('Ecofont Vera Sans'), 
       url('http://www.ecofont.com/assets/files/ecofont_vera_sans_regular.ttf') format('truetype');
   }
   span.surname {
    text-transform: uppercase;
}
</style>
</head>

<body>
<?php if ($totalRows_rspayment == 0) { // Show if recordset empty ?>
  <h1>No Record Found!</h1>
<?php } // Show if recordset empty ?>

<?php do { ?>
<font color="blue">
<table width="300px" border="1" cellspacing="0" cellpadding="5" class="jermar">
  <tr>
    <td colspan="2">
    <table border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td><img src="../assets/logogrey.jpg" width="30px" /></td>
    <td> <?php echo $row_rspayment['tb2_colunm2']; ?> Payslip Dated: <?php echo date("F Y", strtotime($_GET['tb2_colunm52'])); ?></td>
  </tr>
</table>

    </td>
  </tr>
  <tr>
    <td><span class="surname"><?php echo $row_rstable1['tb1_colunm4']; ?>, <?php echo $row_rstable1['tb1_colunm3']; ?> <?php echo $row_rstable1['tb1_colunm5']; ?></span> <br /> <?php echo $row_rspayment['tb2_colunm7']; ?> <?php echo $row_rspayment['tb2_colunm6']; ?> SG-<?php echo $row_rspayment['tb2_colunm13']; ?> ST-<?php echo $row_rspayment['tb2_colunm14']; ?></td>
    <td><a href="javascript:window.print()"><img src="../assets/b_print.png" /></a> <a href="edit_payslip.php?table2_id=<?php echo $row_rspayment['table2_id']; ?>"><img src="../assets/b_edit.png" /></a></td>
  </tr>
  <tr>
    <td colspan="2">BASIC SALARY<br />
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
		<td>OLD RATE: </td>
		<td align="right"><?php echo number_format($row_rspayment['tb2_colunm8'],2); ?></td></tr>
	<tr>
    	<td>SAF: </td>
        <td align="right"><?php echo number_format($row_rspayment['tb2_colunm9'],2); ?></td></tr>
	<tr>
    	<td>NEW RATE:</td>
        <td align="right"><?php echo number_format($new=$row_rspayment['tb2_colunm8']+$row_rspayment['tb2_colunm9'],2); ?></td></tr>
	<tr>
    	<td>PERA: </td>
		<td align="right"><?php echo number_format($row_rstable1['tb1_colunm11'],2); ?></td></tr>
	<tr>
    	<td>ACTUAL: </td>
		<td align="right"><?php echo number_format($row_rspayment['tb2_colunm58'],2); ?></td></tr>
	<tr>
    	<td>GROSS: </td>
		<td align="right"><?php
    	if ($row_rspayment['tb2_colunm58'] == 0){
			echo number_format($total=$new+$row_rspayment['tb2_colunm11'],2);
		} else {
			echo number_format($actual=$row_rspayment['tb2_colunm58']+$row_rspayment['tb2_colunm11'],2);
		}
		?></td>
    </tr>
</table>

    </td>
    </tr>
  <tr valign="top">
    <td>
    Philhealth<br />
    MOWEL<br />
    <?php echo $clientalias ;?>EU<br />
    HDMF Premium<br />
    HDMF MPL<br />
    HDMF H.Loan<br />
    HDMF Calamity
    <hr />
	GSIS Premium<br />
	CONSOLOAN<br />
	E-Cash/UMID<br />
	Policy loan<br />
	HIP<br />
	Add Life<br />
	CEAP<br />
	Pre-Need (Gen)<br />
	EduChild<br />
	NML<br />
	Real Estate<br />
	UOLI<br />
	UOLI Loan<br />
	Emergency Loan<br />
	Educ. Asst. Loan<br />
	GSIS EALA
	<hr />
    Absences/Late:<br />
    W/Hold Tax<br />
    BFOSLA Deposit<br />
    BFOSLA Loan<br />
    Calamity Loan<br />
    OPFNS<br />
    Phil Am<br />
    Relief<br />
    Project HOPE<br />
    MRI<br />
    FRI<br />
    DREAMC-IV<br />
    Other Receivable<br />
    TEV Disallowance<br />
    Others
      </td>
    <td align="right">
  		<?php echo number_format($row_rspayment['tb2_colunm17'],2); ?><br />
		<?php echo number_format($row_rspayment['tb2_colunm18'],2); ?><br />
		<?php echo number_format($row_rspayment['tb2_colunm19'],2); ?><br />
		<?php echo number_format($row_rspayment['tb2_colunm20'],2); ?><br />
		<?php echo number_format($row_rspayment['tb2_colunm21'],2); ?><br />
		<?php echo number_format($row_rspayment['tb2_colunm22'],2); ?><br />
		<?php echo number_format($row_rspayment['tb2_colunm56'],2); ?>
		<hr />
        <?php echo number_format($row_rspayment['tb2_colunm23'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm24'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm25'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm26'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm27'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm29'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm30'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm31'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm32'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm33'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm34'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm35'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm36'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm37'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm38'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm39'],2); ?>
		<hr />
        <?php echo number_format($row_rspayment['tb2_colunm57'],2); ?><br/ >
		<?php echo number_format($row_rspayment['tb2_colunm16'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm40'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm41'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm53'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm54'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm55'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm42'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm43'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm44'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm45'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm46'],2); ?><br />
		<?php echo number_format($row_rspayment['tb2_colunm28'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm47'],2); ?><br />
        <?php echo number_format($row_rspayment['tb2_colunm48'],2); ?>
    </tr>
  <tr>
    <td>TOTAL Deductions</td>
    <td align="right"><?php echo number_format($deduc=($row_rspayment['tb2_colunm16']+$row_rspayment['tb2_colunm17']+$row_rspayment['tb2_colunm18']+$row_rspayment['tb2_colunm19']+$row_rspayment['tb2_colunm20']+$row_rspayment['tb2_colunm21']+$row_rspayment['tb2_colunm22']+$row_rspayment['tb2_colunm23']+$row_rspayment['tb2_colunm24']+$row_rspayment['tb2_colunm25']+$row_rspayment['tb2_colunm26']+$row_rspayment['tb2_colunm27']+$row_rspayment['tb2_colunm28']+$row_rspayment['tb2_colunm29']+$row_rspayment['tb2_colunm30']+$row_rspayment['tb2_colunm31']+$row_rspayment['tb2_colunm32']+$row_rspayment['tb2_colunm33']+$row_rspayment['tb2_colunm34']+$row_rspayment['tb2_colunm35']+$row_rspayment['tb2_colunm36']+$row_rspayment['tb2_colunm37']+$row_rspayment['tb2_colunm38']+$row_rspayment['tb2_colunm39']+$row_rspayment['tb2_colunm40']+$row_rspayment['tb2_colunm41']+$row_rspayment['tb2_colunm42']+$row_rspayment['tb2_colunm43']+$row_rspayment['tb2_colunm44']+$row_rspayment['tb2_colunm45']+$row_rspayment['tb2_colunm46']+$row_rspayment['tb2_colunm47']+$row_rspayment['tb2_colunm48']+$row_rspayment['tb2_colunm53']+$row_rspayment['tb2_colunm54']+$row_rspayment['tb2_colunm55']+$row_rspayment['tb2_colunm56']+$row_rspayment['tb2_colunm57']),2); ?></td>
  </tr>
  <tr>
    <td>Net Pay 1-15<br />
      Net Pay 16-30<br />
      TOTAL SALARY</td>
    <td align="right"><?php echo number_format($row_rspayment['tb2_colunm50'],2); ?><br />
      <?php echo number_format($row_rspayment['tb2_colunm51'],2); ?><br />
      <?php echo number_format($net=$row_rspayment['tb2_colunm50']+$row_rspayment['tb2_colunm51'],2); ?></td>
  </tr>
  <tr align="center">
    <td colspan="2">
      Certified Correct<br />
      <br />
      <br />
      ____________________<br />
      Cashier
      
      </td>
  </tr>
</table>
</table>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
</font>
<?php } while ($row_rspayment = mysql_fetch_assoc($rspayment)); ?>
</body>
</html>
<?php
mysql_free_result($rspayment);
?>
