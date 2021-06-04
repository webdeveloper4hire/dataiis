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

mysql_select_db($database_connection, $connection);
$query_rspr = "SELECT * FROM table1 WHERE table1_id = '".$_GET['table1_id']."'";
$rspr = mysql_query($query_rspr, $connection) or die(mysql_error());
$row_rspr = mysql_fetch_assoc($rspr);
$totalRows_rspr = mysql_num_rows($rspr);

mysql_select_db($database_connection, $connection);
$query_rsitem = "SELECT * FROM table1 WHERE tb1_colunm2 = '".$_GET['table1_id']."'";
$rsitem = mysql_query($query_rsitem, $connection) or die(mysql_error());
$row_rsitem = mysql_fetch_assoc($rsitem);
$totalRows_rsitem = mysql_num_rows($rsitem);
?>

<!DOCTYPE html>
<html>
<head>
<title>Print</title>
<style type="text/css">
table{counter-reset:section;}
.count:before
{
counter-increment:section;
content:counter(section);
} 

table.jermar th, table.jermar td {
  
  font-size : 12px;
  font-family: 'Ecofont Vera Sans';
  font-color: #787878;
  src: url('http://www.ecofont.com/assets/files/ecofont_vera_sans_regular.ttf');
  src: local('ecofont_vera_sans_regular.ttf'), 
       local('Ecofont Vera Sans'), 
       url('http://www.ecofont.com/assets/files/ecofont_vera_sans_regular.ttf') format('truetype');
   }
</style>
</head>
<body>
<center>  
 <h5 align="right">Appendix 60 <br></h5>
 <h5>Republic of the Philippines<br>
  Department of Environment and Natural Resources<br>
  MIMAROPA REGION <br>
  1515 L & S Building, Roxas Boulevard, Metro, Manila
  <br>
  <br>
  <strong>PURCHASE REQUEST</strong>
  <br>
  <h5>
</h5>


<table width="800px" border="0" cellspacing="0" class="jermar">

<tr>
<td>
</td>
<td align="right"><a href="add_item.php?table1_id=<?php echo $_GET['table1_id']; ?>&category=<?php echo $_GET['tb1_colunm1'] ?>&tb1_colunm1=item"><img src="../images/b_plus.png" title="ADD NEW ACTION" alt="ADD NEW ACTION" /></a>
&nbsp;&nbsp;
<a href="javascript:window.print()"><img src="../images/b_print.png" title="PRINT" alt="PR" /></a>
&nbsp;&nbsp;
<a href="javascript:history.back(-1)"><img src="../images/bd_prevpage.png" title="BACK" alt="BA" /></a>
&nbsp;&nbsp;
<a href="home.php"><img src="../images/b_home.png" title="HOME" alt="HOME" /></a>  </td>
</tr>
<tr>
<td width="400px">Entity Name: <?php echo $row_rspr['tb1_colunm2']; ?></td>
<td width="400px" align="right">Fund Cluster: <?php echo $row_rspr['tb1_colunm3']; ?></td>
</tr>
  
  
  </table>
<table style="width:800px" border="1" cellspacing="0" >
<tr >
    <th>Office/Section: <?php echo $row_rspr['tb1_colunm4']; ?></th>
    <th>PR No.: <?php echo $row_rspr['tb1_colunm5']; ?><br>
    Responsibility Center Code:<?php echo $row_rspr['tb1_colunm6']; ?> </th> 
    <th>Date: <?php echo $row_rspr['tb1_colunm7']; ?></th>
  </tr>
  </table>
  <table style="width:800px" border="1" cellspacing="0" >
  <tr>
    <th>Stock/Property No.</th>
    <th>Unit</th>
    <th>Item Description</th>
    <th>Quantity</th>
    <th>Unit Cost</th>
    <th>Total Cost</th>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_rsitem['tb1_colunm3']; ?></td>
      <td><?php echo $row_rsitem['tb1_colunm4']; ?></td>
      <td><?php echo $row_rsitem['tb1_colunm5']; ?></td>
      <td><?php echo $row_rsitem['tb1_colunm6']; ?></td>
      <td><?php echo $row_rsitem['tb1_colunm7']; ?></td>
      <td><?php echo $row_rsitem['tb1_colunm7'] * $row_rsitem['tb1_colunm6']; ?></td>
    </tr>
    <?php } while ($row_rsitem = mysql_fetch_assoc($rsitem)); ?>
    <tr>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">DELIVERY (Please.check):( ) 15  ( ) 30  ( ) 45 calendar days upon receipt of the Purchase Order</td>
      <td colspan="2">TOTAL ABC:</td>
      <td></td>
    </tr>
<tr>
	<td colspan="6">PURPOSE: <?php echo $row_rsitem['tb1_colunm33']; ?></td>
</tr>
<tr>
	<td colspan="6">CHARGING: <?php echo $row_rsitem['tb1_colunm34']; ?></td>
</tr>
<tr>
      <td colspan="3"><b>CERTIFICATION</b>
      <p>This is to certify that the item(s) above is/are included in their Project 		
Procurement Management Plan (PPMP) and in accordance with the 		
approved CY 2018 Annual Procurement Plan (APP).</p>	
<p>&nbsp;</p>
<p>_______________________<br/>
Chief, Procurement Section<p>
</td>
      <td colspan="3">
MODE OF PROCUREMENT (to be accomplished by RBAC):<br/>		
(__) Competitive Bidding	<br/>	
(__) Limited Source Bidding	<br/>	
(__) Direct Contracting		<br/>
(__) Repeat Order		<br/>
(__) Shopping [ ] 52.1.a [ ] 52.1.b	<br/>	
(__) Negotiated Procurement		<br/>
____________________________		
      </td>
    </tr>
</table>
<table style="width:800px" border="1" cellspacing="0">
	<tr>
  	<td rowspan="5" colspan="7" >Requested by:<br>
      <p align="center"><u><?php echo $row_rspr['tb1_colunm22']; ?></u><br/>
      <?php echo $row_rspr['tb1_colunm32']; ?></p>
    </td>
    <td rowspan="5" colspan="3">Recommended by:<br>
      <p align="center"><u><?php echo $row_rspr['tb1_colunm23']; ?></u><br/>
      OIC, ARD for  Management Services</p>
	  </td>
  <tr>
  		<td rowspan="5" colspan="7">Approved by:<br>
      <p align="center"><u><?php echo $row_rspr['tb1_colunm24']; ?></u><br/>
      Regional Executive Director</p>
    </td>
  </tr>
</table>


</body>
</html>
<?php
mysql_free_result($rspr);

mysql_free_result($rsitem);
?>
