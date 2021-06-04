<?php require_once('../Connections/connection.php'); ?>
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

$colname_rstable2 = "-1";
if (isset($_GET['table1_id'])) {
  $colname_rstable2 = $_GET['table1_id'];
}
mysql_select_db($database_connection, $connection);
$query_rstable2 = sprintf("SELECT * FROM table2 WHERE tb2_colunm2 = %s", GetSQLValueString($colname_rstable2, "text"));
$rstable2 = mysql_query($query_rstable2, $connection) or die(mysql_error());
$row_rstable2 = mysql_fetch_assoc($rstable2);
$totalRows_rstable2 = mysql_num_rows($rstable2);

$colname_rssumparticulars = "-1";
if (isset($_GET['table1_id'])) {
  $colname_rssumparticulars = $_GET['table1_id'];
}
mysql_select_db($database_connection, $connection);
$query_rssumparticulars = sprintf("SELECT SUM(tb2_colunm4) FROM table2 WHERE tb2_colunm2 = %s", GetSQLValueString($colname_rssumparticulars, "text"));
$rssumparticulars = mysql_query($query_rssumparticulars, $connection) or die(mysql_error());
$row_rssumparticulars = mysql_fetch_assoc($rssumparticulars);
$totalRows_rssumparticulars = mysql_num_rows($rssumparticulars);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="autdor" content="DENR" />
<meta name="copyright" content="DENR; 2010" />
<meta name="description" content="Department of Environment and Natural Resources" />
<meta name="keywords" content="DENR,Environment,Nature,Government,MIMAROPA,Laguna,Calamba,Plants,Philippines,Seeds,Trees,Natural,Farm" />
<title>Print</title>

<style type="text/css">
table{counter-reset:section;}
.count:before
{
counter-increment:section;
content:counter(section);
} 

table.jermar td, table.jermar td {
  
  font-size : 12px;
  font-family: Ecofont Vera Sans, Arial, Helvetica, sans-serif ;
  src: url('http://www.ecofont.com/assets/files/ecofont_vera_sans_regular.ttf');
  src: local('ecofont_vera_sans_regular.ttf'), 
       local('Ecofont Vera Sans'), 
       url('http://www.ecofont.com/assets/files/ecofont_vera_sans_regular.ttf') format('truetype');
   }
</style>
</head>

<body>
<div align="center">
<table width="600" border="1" cellspacing="0" class="jermar">
  <tr>
    <td colspan="3">
    
    <table height="50" border="0" cellspacing="1" >
      <tr>
        <td width="50" align="center"><img src="../images/logogrey.jpg" width="50" /></td>
        <td width="500">
        Department of Environment and Natural Resources<br />
        Regional Office IV-B, MIMAROPA</td>
      </tr>
      </table>
    
    </td>
  </tr>
  <tr>
  <td colspan="3">
  <table border="0" width="600px" cellpadding="0" cellspacing="0">
  <tr>
    <td width="200px">&nbsp;</td>
    <td><div align="center">DISBURSEMENT VOUCHER</div></td>
    <td width="200px" align="right">
    <a href="javascript:history.back(-1)"><img src="../images/bd_prevpage.png" title="BACK" alt="BACK" /></a>
  &nbsp;
  <a href="add_particulars.php?tb2_colunm1=Voucher-Particulars&tb2_colunm2=<?php echo $row_rstable1['table1_id']; ?>"><img src="../images/b_save.png" title="Add Particulars" alt="Save as" /></a>
  &nbsp;
  <a href="javascript:window.print()"><img src="../images/b_print.png" title="PRINT" alt="PRINT" /></a>
  &nbsp;
<a href="home.php"><img src="../images/b_home.png" title="HOME" alt="HOME" /></a></td>
  </tr>
  </table>
  </td>
  </tr>
  <tr>
    <td colspan="2" rowspan="2">MODE OF PAYMENT <?php echo $row_rstable1['tb1_colunm2']; ?><br/>
	<?php
if ($row_rstable1['tb1_colunm2'] == "MDS-Check") {
    echo "<img src=../images/s_success.png width=16 /> ";
} else {
    echo "<img src=../images/box_br.png width=16 />";
}
?> MDS Check &nbsp;
<?php
if ($row_rstable1['tb1_colunm2'] == "Commercial-Check") {
    echo "<img src=../images/s_success.png width=16 /> ";
} else {
    echo "<img src=../images/box_br.png width=16 />";
}
?> Commercial Check &nbsp;

<?php
if ($row_rstable1['tb1_colunm2'] == "ADA") {
    echo "<img src=../images/s_success.png width=16 /> ";
} else {
    echo "<img src=../images/box_br.png width=16 />";
}
?> ADA &nbsp;

<?php
if ($row_rstable1['tb1_colunm2'] == "Others") {
    echo "<img src=../images/s_success.png width=16 /> ";
} else {
    echo "<img src=../images/box_br.png width=16 />";
}
?>  Others
      </td>
   
  </tr>
  <tr>
    <td align="left">No.<br/>
    Date:<?php echo $row_rstable1['tb1_colunm4']; ?></td>
  </tr>
  <tr>
    <td width="200px"><div align="left">Payee/Office:<?php echo $row_rstable1['tb1_colunm5']; ?></div></td>
    <td width="200px"><div align="left">Check/ADA No.</div></td>
    <td><div align="left">
        OS/BUS No.<?php echo $row_rstable1['tb1_colunm7']; ?><br />
Date:<?php echo $row_rstable1['tb1_colunm8']; ?>
    </div></td>
  </tr>
  <tr>
    <td rowspan="2" ><div align="left">Address: <?php echo $row_rstable1['tb1_colunm9']; ?></div></td>
    <td colspan="3" >Responsibility</td>
  </tr>
  <tr>
    <td><div align="left">Title:<?php echo $row_rstable1['tb1_colunm11']; ?></div></td>
    <td><div align="left">Code:<?php echo $row_rstable1['tb1_colunm12']; ?></div></td>
  </tr>
  <tr>
    <td colspan="3" >
    
    <table border="0" width="100%" cellspacing="0">
  <tr>
    <td width="450px">Particulars</td>
    <td align="center">Amount</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_rstable2['tb2_colunm3']; ?></td>
      <td align="center"><?php
	 $number = $row_rstable2['tb2_colunm4'];
	 echo $english_format_number = number_format($number) ?></td>
    </tr>
    <?php } while ($row_rstable2 = mysql_fetch_assoc($rstable2)); ?>
 <tr>
    <td colspan="2" height="200px"></td>
  </tr>
  <tr>
    <td><div align="right">Amount Due</div></td>
    <td align="center">Php <?php
	 $number = $row_rssumparticulars['SUM(tb2_colunm4)'];
	 echo $english_format_number = number_format($number) ?></td>
  </tr>
</table>

    </td>
  </tr>
  
  <tr>
    <td><div align="left">A. Certified</div></td>
    <td colspan="3"><div align="left">B. Approved for payment</div></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" metdod="post" action="">
      <div align="left">
        <table >
          <tr>
            <td>&nbsp;</td>
            <td>
              <div align="left">
                <?php
if ($row_rstable1['tb1_colunm13'] == "Supporting") {
    echo "<img src=../images/s_success.png width=16 /> ";
} else {
    echo "<img src=../images/box_br.png width=16 />";
}
?> Supporting </div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>
              <div align="left">
                <?php
if ($row_rstable1['tb1_colunm13'] == "Cash-Available") {
    echo "<img src=../images/s_success.png width=16 /> ";
} else {
    echo "<img src=../images/box_br.png width=16 />";
}
?> Cash Available </div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label> </label>
              <div align="left">
                <?php
if ($row_rstable1['tb1_colunm13'] == "Subject-to-ADA-where-applicable") {
    echo "<img src=../images/s_success.png width=16 /> ";
} else {
    echo "<img src=../images/box_br.png width=16 />";
}
?> Subject-to-ADA-where-applicable</div></td>
          </tr>
        </table>
      </div>
      <table border="0">
        <tr>
          <td><div align="left">Signature:</div></td>
          <td>__________________________</td>
        </tr>
        <tr>
          <td><div align="left">Printed Name:</div></td>
          <td>__________________________</td>
        </tr>
        <tr>
          <td><div align="left">Position:</div></td>
          <td>__________________________</td>
        </tr>
        <tr>
          <td><div align="left">Date</div></td>
          <td>__________________________</td>
        </tr>
    </table>
      &nbsp;
    </form></td>
    <td colspan="2" >
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table border="0">
      <tr>
        <td><div align="left">Signature:</div></td>
        <td>__________________________</td>
      </tr>
      <tr>
        <td><div align="left">Printed Name:</div></td>
        <td>__________________________</td>
      </tr>
      <tr>
        <td><div align="left">Position:</div></td>
        <td>__________________________</td>
      </tr>
      <tr>
        <td><div align="left">Date</div></td>
        <td>__________________________</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="left">C. Received Payment</div></td>
    <td>&nbsp;</td>
    <td><div align="left">D. Journal Entry</div></td>
  </tr>
  <tr>
    <td colspan="2" ><table 
    border="0">
      <tr>
        <td><div align="left"></div></td>
        <td><div align="left"></div></td>
        <td><div align="left"></div></td>
        <td><div align="left"></div></td>
        <td widtd="172"><div align="left">Check/ADA No.</div></td>
        <td widtd="176"><div align="left"><u><?php echo $row_rstable1['tb1_colunm29']; ?></u></div></td>
        </tr>
      <tr>
        <td><div align="left">              </div></td>
        <td></td>
        <td></td>
        <td></td>
        <td><div align="left">Date:</div></td>
        <td><div align="left"><u><?php echo $row_rstable1['tb1_colunm30']; ?></u></div></td>
        </tr>
      <tr>
        <td><div align="left">Signature:</div></td>
        <td><div align="left">__________</div></td>
        <td><div align="left">Date:</div></td>
        <td><div align="left">__________</u></div></td>
        <td><div align="left">Bank Name:</div></td>
        <td><div align="left"><u><?php echo $row_rstable1['tb1_colunm31']; ?></u></div></td>
        </tr>
      <tr>
        <td><div align="left">Printed Name:</div></td>
        <td colspan="3"><div align="left"><u><?php echo $row_rstable1['tb1_colunm28']; ?></u></div></td>
        <td><div align="left">
          OR No./other <br/> relevant documents issued
        </div></td>
        <td><div align="left"><u><?php echo $row_rstable1['tb1_colunm32']; ?></u></div></td>
        </tr>
    </table></td>
    <td>No. ____________<br />
    Date: ______________</td>
  </tr>
</table>
</div>

<link href="../plugins/facebox/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="../plugins/facebox/lib/jquery.js" type="text/javascript"></script>
<script src="../plugins/facebox/src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : '../plugins/facebox/src/loading.gif',
        closeImage   : '../plugins/facebox/src/closelabel.png'
      })
    })
//-->
</script>
</body>
</html>
<?php
mysql_free_result($rstable1);

mysql_free_result($rstable2);

mysql_free_result($rssumparticulars);
?>
