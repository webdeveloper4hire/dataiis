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

$colname_rsleave = "-1";
if (isset($_GET['table1_id'])) {
  $colname_rsleave = $_GET['table1_id'];
}
mysql_select_db($database_connection, $connection);
$query_rsleave = sprintf("SELECT * FROM table2 WHERE tb2_colunm2 = %s", GetSQLValueString($colname_rsleave, "text"));
$rsleave = mysql_query($query_rsleave, $connection) or die(mysql_error());
$row_rsleave = mysql_fetch_assoc($rsleave);
$totalRows_rsleave = mysql_num_rows($rsleave);

$colname_rsemployee = "-1";
if (isset($_GET['table1_id'])) {
  $colname_rsemployee = $_GET['table1_id'];
}
mysql_select_db($database_connection, $connection);
$query_rsemployee = sprintf("SELECT * FROM table1 WHERE table1_id = %s", GetSQLValueString($colname_rsemployee, "int"));
$rsemployee = mysql_query($query_rsemployee, $connection) or die(mysql_error());
$row_rsemployee = mysql_fetch_assoc($rsemployee);
$totalRows_rsemployee = mysql_num_rows($rsemployee);

$colname_rssumvacwithpay = "-1";
if (isset($_GET['table1_id'])) {
  $colname_rssumvacwithpay = $_GET['table1_id'];
}
mysql_select_db($database_connection, $connection);
$query_rssumvacwithpay = sprintf("SELECT SUM(tb2_colunm6) FROM table2 WHERE tb2_colunm2 = %s", GetSQLValueString($colname_rssumvacwithpay, "text"));
$rssumvacwithpay = mysql_query($query_rssumvacwithpay, $connection) or die(mysql_error());
$row_rssumvacwithpay = mysql_fetch_assoc($rssumvacwithpay);
$totalRows_rssumvacwithpay = mysql_num_rows($rssumvacwithpay);

$colname_rssumvacwithoutpay = "-1";
if (isset($_GET['table1_id'])) {
  $colname_rssumvacwithoutpay = $_GET['table1_id'];
}
mysql_select_db($database_connection, $connection);
$query_rssumvacwithoutpay = sprintf("SELECT SUM(tb2_colunm8) FROM table2 WHERE tb2_colunm2 = %s", GetSQLValueString($colname_rssumvacwithoutpay, "text"));
$rssumvacwithoutpay = mysql_query($query_rssumvacwithoutpay, $connection) or die(mysql_error());
$row_rssumvacwithoutpay = mysql_fetch_assoc($rssumvacwithoutpay);
$totalRows_rssumvacwithoutpay = mysql_num_rows($rssumvacwithoutpay);

$colname_rssumsacwithpay = "-1";
if (isset($_GET['table1_id'])) {
  $colname_rssumsacwithpay = $_GET['table1_id'];
}
mysql_select_db($database_connection, $connection);
$query_rssumsacwithpay = sprintf("SELECT SUM(tb2_colunm10) FROM table2 WHERE tb2_colunm2 = %s", GetSQLValueString($colname_rssumsacwithpay, "text"));
$rssumsacwithpay = mysql_query($query_rssumsacwithpay, $connection) or die(mysql_error());
$row_rssumsacwithpay = mysql_fetch_assoc($rssumsacwithpay);
$totalRows_rssumsacwithpay = mysql_num_rows($rssumsacwithpay);

$colname_rssumsacwithoutpay = "-1";
if (isset($_GET['table1_id'])) {
  $colname_rssumsacwithoutpay = $_GET['table1_id'];
}
mysql_select_db($database_connection, $connection);
$query_rssumsacwithoutpay = sprintf("SELECT SUM(tb2_colunm12) FROM table2 WHERE tb2_colunm2 = %s", GetSQLValueString($colname_rssumsacwithoutpay, "text"));
$rssumsacwithoutpay = mysql_query($query_rssumsacwithoutpay, $connection) or die(mysql_error());
$row_rssumsacwithoutpay = mysql_fetch_assoc($rssumsacwithoutpay);
$totalRows_rssumsacwithoutpay = mysql_num_rows($rssumsacwithoutpay);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print</title>
</head>

<body>
<center>
<table align="center" cellpadding="0" cellspacing="0" width="1250">
 <tr>	
 	<td width="468" height="114" align="center"><img src="../images/logogrey.jpg" width="50px" align="right" /></td>
    <td width="780"><h1><u>EMPLOYEE'S LEAVE CARD</u></h1></td>
    	</tr>
 </table>
<table height="25"></table>
<table width="1250" cellpadding="0" cellspacing="0" align="center">
 	<tr>
    
    	<td width="457">Name: <strong><?php echo $row_rsemployee['tb1_colunm3']?> <?php echo $row_rsemployee['tb1_colunm5']; ?> <?php echo $row_rsemployee['tb1_colunm4']; ?></strong></td>
        <td width="399">Civil Status:<strong> <?php echo $row_rsemployee['tb1_colunm17']; ?></strong></td>
        <td width="392">GSIS Policy No.: <strong><?php echo $row_rsemployee['tb1_colunm20']; ?></strong></td>
    </tr>
    <tr>
    
    	<td width="457">Position: <strong><?php echo $row_rsemployee['tb1_colunm6']; ?></strong></td>
        <td width="399">Entrance to Duty: <strong><?php echo $row_rsemployee['tb1_colunm18']; ?></strong></td>
        <td width="392">TIN No.: <strong><?php echo $row_rsemployee['tb1_colunm21']; ?></strong></td>
    </tr>
    <tr>
    
    	<td width="457">Item No.: <strong><?php echo $row_rsemployee['tb1_colunm15']; ?></strong></td>
        <td width="399">Division: <strong><?php echo $row_rsemployee['tb1_colunm19']; ?></strong></td>
        <!--<td width="392">National Refernce Card No.: <strong><?php echo $row_rsemployee['tb1_colunm22']; ?></strong></td>-->
    </tr>
</table>
<table height="25"></table>
<table border="1" cellpadding="0" cellspacing="0" width="1250px" align="center">
  <tr align="center">
    <td rowspan="2" width="50"><strong>No.</strong></td>
    <td rowspan="2" width="100"><strong>Period</strong></td>
    <td rowspan="2" width="150"><strong>Particulars</strong></td>
    <td width="450" height="50" colspan="4"><div align="center"><strong>Vacation Leave</strong></div></td>
    <td colspan="4" width="450"><div align="center"><strong>Sick Leave</strong></div></td>
    <td rowspan="2" width="100"><div align="center"><strong>Remarks</strong></div></td>
    <!--<td>tb2_colunm14</td>
    <td>tb2_colunm15</td>
    <td>tb2_colunm16</td>
    <td>tb2_colunm17</td>
    <td>tb2_colunm18</td>
    <td>tb2_colunm19</td>
    <td>tb2_colunm20</td>
    <td>tb2_colunm21</td>
    <td>tb2_colunm22</td>
    <td>tb2_colunm23</td>
    <td>tb2_colunm24</td>
    <td>tb2_colunm25</td>
    <td>tb2_colunm26</td>
    <td>tb2_colunm27</td>
    <td>tb2_colunm28</td>
    <td>tb2_colunm29</td>
    <td>tb2_colunm30</td>
    <td>tb2_colunm31</td>
    <td>tb2_colunm32</td>
    <td>tb2_colunm33</td>
    <td>tb2_colunm34</td>
    <td>tb2_colunm35</td>
    <td>tb2_colunm36</td>
    <td>tb2_colunm37</td>
    <td>tb2_colunm38</td>
    <td>tb2_colunm39</td>
    <td>tb2_colunm40</td>
    <td>tb2_colunm41</td>
    <td>tb2_colunm42</td>
    <td>tb2_colunm43</td>
    <td>tb2_colunm44</td>
    <td>tb2_colunm45</td>
    <td>tb2_colunm46</td>
    <td>tb2_colunm47</td>
    <td>tb2_colunm48</td>
    <td>tb2_colunm49</td>
    <td>tb2_colunm50</td>
    <td>tb2_colunm51</td>
    <td>tb2_colunm52</td>
    <td>tb2_colunm53</td>
    <td>tb2_colunm54</td>
    <td>tb2_colunm55</td>
    <td>tb2_colunm56</td>
    <td>tb2_colunm57</td>
    <td>tb2_colunm58</td>
    <td>tb2_colunm59</td>
    <td>tb2_colunm60</td>
    <td>tb2_colunm61</td>
    <td>tb2_colunm62</td>
    <td>tb2_colunm63</td>
    <td>tb2_colunm64</td>
    <td>tb2_colunm65</td>
    <td>tb2_colunm66</td>
    <td>tb2_colunm67</td>
    <td>tb2_colunm68</td>
    <td>tb2_colunm69</td>
    <td>tb2_colunm70</td>
    <td>tb2_colunm71</td>
    <td>tb2_colunm72</td>
    <td>tb2_colunm73</td>
    <td>tb2_colunm74</td>
    <td>tb2_colunm75</td>
    <td>tb2_colunm76</td>
    <td>tb2_colunm77</td>
    <td>tb2_colunm78</td>
    <td>tb2_colunm79</td>
    <td>tb2_colunm80</td>
    <td>tb2_colunm81</td>
    <td>tb2_colunm82</td>
    <td>tb2_colunm83</td>
    <td>tb2_colunm84</td>
    <td>tb2_colunm85</td>
    <td>tb2_colunm86</td>
    <td>tb2_colunm87</td>
    <td>tb2_colunm88</td>
    <td>tb2_colunm89</td>
    <td>tb2_colunm90</td>
    <td>tb2_colunm91</td>
    <td>tb2_colunm92</td>
    <td>tb2_colunm93</td>
    <td>tb2_colunm94</td>
    <td>tb2_colunm95</td>
    <td>tb2_colunm96</td>
    <td>tb2_colunm97</td>
    <td>tb2_colunm98</td>
    <td>tb2_colunm99</td>
    <td>tb2_colunm100</td>-->
  </tr>
      <tr>
        <td height="68" width="100"><div align="center"><strong>Earned</strong></div></td>
        <td width="100"><div align="center"><strong>Absence Undertime w/ Pay</strong></div></td>
        <td width="100"><div align="center"><strong>Balance</strong></div></td>
        <td width="100"><div align="center"><strong>Absence Undertime w/o Pay</strong></div></td>
        <td width="100"><div align="center"><strong>Earned</strong></div></td>
        <td width="100"><div align="center"><strong>Absence Undertime w/ Pay</strong></div></td>
        <td width="100"><div align="center"><strong>Balance</strong></div></td>
        <td width="100"><div align="center"><strong>Absence Undertime w/o Pay</strong></div></td>
        <!--<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>-->
      </tr>
      <tr>
        <th>Total</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th><p><strong></strong><?php echo round($row_rsleave['tb2_colunm7'],3); ?></p></th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th><p><strong></strong><?php echo round($row_rsleave['tb2_colunm11'],3); ?></p></th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <!--<th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>-->
      </tr>
      <?php do { ?>
      <tr>
      <td><div align="center"><?php echo $row_rsleave['table2_id']; ?></div></td>
      <td><div align="center"><?php echo $row_rsleave['tb2_colunm3']; ?> <?php echo $row_rsleave['tb2_colunm4']; ?></div></td>
      <td><div align="center"><?php echo $row_rsleave['tb2_colunm14']; ?> Days, <?php echo $row_rsleave['tb2_colunm15'] * 8; ?> Hrs, <?php echo round($row_rsleave['tb2_colunm16'] * 60 * 8,0); ?> Mins</div></td>
      <td><div align="center"><?php echo $row_rsleave['tb2_colunm5']; ?></div></td>
      <td><div align="center"><?php echo $row_rsleave['tb2_colunm6']; ?></div></td>
      <td><div align="center"><?php echo round($row_rsleave['tb2_colunm7'],3); ?></div></td>
      <td><div align="center"><?php echo $row_rsleave['tb2_colunm8']; ?></div></td>
      <td><div align="center"><?php echo $row_rsleave['tb2_colunm9']; ?></div></td>
      <td><div align="center"><?php echo $row_rsleave['tb2_colunm10']; ?></div></td>
      <td><div align="center"><?php echo round($row_rsleave['tb2_colunm11'],3); ?></div></td>
      <td><div align="center"><?php echo $row_rsleave['tb2_colunm12']; ?></div></td>
      <td><div align="center"><?php echo $row_rsleave['tb2_colunm13']; ?></div></td>
      <!--<td><?php echo $row_rsleave['tb2_colunm15']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm16']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm17']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm18']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm19']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm20']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm21']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm22']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm23']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm24']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm25']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm26']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm27']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm28']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm29']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm30']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm31']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm32']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm33']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm34']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm35']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm36']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm37']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm38']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm39']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm40']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm41']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm42']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm43']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm44']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm45']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm46']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm47']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm48']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm49']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm50']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm51']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm52']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm53']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm54']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm55']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm56']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm57']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm58']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm59']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm60']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm61']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm62']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm63']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm64']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm65']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm66']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm67']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm68']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm69']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm70']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm71']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm72']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm73']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm74']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm75']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm76']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm77']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm78']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm79']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm80']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm81']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm82']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm83']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm84']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm85']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm86']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm87']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm88']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm89']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm90']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm91']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm92']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm93']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm94']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm95']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm96']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm97']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm98']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm99']; ?></td>
      <td><?php echo $row_rsleave['tb2_colunm100']; ?></td>-->
    </tr>
    <?php } while ($row_rsleave = mysql_fetch_assoc($rsleave)); ?>
</table>
<a href="javascript:window.print()">PRINT</a>
</center>
</body>
</html>
<?php
mysql_free_result($rsleave);

mysql_free_result($rsemployee);

mysql_free_result($rssumvacwithpay);

mysql_free_result($rssumvacwithoutpay);

mysql_free_result($rssumsacwithpay);

mysql_free_result($rssumsacwithoutpay);
?>
