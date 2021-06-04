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
if (isset($_GET['tb1_colunm1'])) {
  $colname_rstable1 = $_GET['tb1_colunm1'];
}
mysql_select_db($database_connection, $connection);
$query_rstable1 = sprintf("SELECT * FROM table1 WHERE tb1_colunm1 = %s", GetSQLValueString($colname_rstable1, "text"));
$rstable1 = mysql_query($query_rstable1, $connection) or die(mysql_error());
$row_rstable1 = mysql_fetch_assoc($rstable1);
$totalRows_rstable1 = mysql_num_rows($rstable1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print</title>
</head>

<body>
<h1>Title</h1>
<a href="javascript:window.print()">PRINT</a>
<table>
  <tr>
    <td>table1_id</td>
    <td>tb1_colunm1</td>
    <td>tb1_colunm2</td>
    <td>tb1_colunm3</td>
    <td>tb1_colunm4</td>
    <td>tb1_colunm5</td>
    <td>tb1_colunm6</td>
    <td>tb1_colunm7</td>
    <td>tb1_colunm8</td>
    <td>tb1_colunm9</td>
    <td>tb1_colunm10</td>
    <td>tb1_colunm11</td>
    <td>tb1_colunm12</td>
    <td>tb1_colunm13</td>
    <td>tb1_colunm14</td>
    <td>tb1_colunm15</td>
    <td>tb1_colunm16</td>
    <td>tb1_colunm17</td>
    <td>tb1_colunm18</td>
    <td>tb1_colunm19</td>
    <td>tb1_colunm20</td>
    <td>tb1_colunm21</td>
    <td>tb1_colunm22</td>
    <td>tb1_colunm23</td>
    <td>tb1_colunm24</td>
    <td>tb1_colunm25</td>
    <td>tb1_colunm26</td>
    <td>tb1_colunm27</td>
    <td>tb1_colunm28</td>
    <td>tb1_colunm29</td>
    <td>tb1_colunm30</td>
    <td>tb1_colunm31</td>
    <td>tb1_colunm32</td>
    <td>tb1_colunm33</td>
    <td>tb1_colunm34</td>
    <td>tb1_colunm35</td>
    <td>tb1_colunm36</td>
    <td>tb1_colunm37</td>
    <td>tb1_colunm38</td>
    <td>tb1_colunm39</td>
    <td>tb1_colunm40</td>
    <td>tb1_colunm41</td>
    <td>tb1_colunm42</td>
    <td>tb1_colunm43</td>
    <td>tb1_colunm44</td>
    <td>tb1_colunm45</td>
    <td>tb1_colunm46</td>
    <td>tb1_colunm47</td>
    <td>tb1_colunm48</td>
    <td>tb1_colunm49</td>
    <td>tb1_colunm50</td>
    <td>tb1_colunm51</td>
    <td>tb1_colunm52</td>
    <td>tb1_colunm53</td>
    <td>tb1_colunm54</td>
    <td>tb1_colunm55</td>
    <td>tb1_colunm56</td>
    <td>tb1_colunm57</td>
    <td>tb1_colunm58</td>
    <td>tb1_colunm59</td>
    <td>tb1_colunm60</td>
    <td>tb1_colunm61</td>
    <td>tb1_colunm62</td>
    <td>tb1_colunm63</td>
    <td>tb1_colunm64</td>
    <td>tb1_colunm65</td>
    <td>tb1_colunm66</td>
    <td>tb1_colunm67</td>
    <td>tb1_colunm68</td>
    <td>tb1_colunm69</td>
    <td>tb1_colunm70</td>
    <td>tb1_colunm71</td>
    <td>tb1_colunm72</td>
    <td>tb1_colunm73</td>
    <td>tb1_colunm74</td>
    <td>tb1_colunm75</td>
    <td>tb1_colunm76</td>
    <td>tb1_colunm77</td>
    <td>tb1_colunm78</td>
    <td>tb1_colunm79</td>
    <td>tb1_colunm80</td>
    <td>tb1_colunm81</td>
    <td>tb1_colunm82</td>
    <td>tb1_colunm83</td>
    <td>tb1_colunm84</td>
    <td>tb1_colunm85</td>
    <td>tb1_colunm86</td>
    <td>tb1_colunm87</td>
    <td>tb1_colunm88</td>
    <td>tb1_colunm89</td>
    <td>tb1_colunm90</td>
    <td>tb1_colunm91</td>
    <td>tb1_colunm92</td>
    <td>tb1_colunm93</td>
    <td>tb1_colunm94</td>
    <td>tb1_colunm95</td>
    <td>tb1_colunm96</td>
    <td>tb1_colunm97</td>
    <td>tb1_colunm98</td>
    <td>tb1_colunm99</td>
    <td>tb1_colunm100</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_rstable1['table1_id']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm1']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm2']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm3']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm4']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm5']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm6']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm7']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm8']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm9']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm10']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm11']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm12']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm13']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm14']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm15']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm16']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm17']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm18']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm19']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm20']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm21']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm22']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm23']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm24']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm25']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm26']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm27']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm28']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm29']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm30']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm31']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm32']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm33']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm34']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm35']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm36']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm37']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm38']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm39']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm40']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm41']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm42']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm43']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm44']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm45']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm46']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm47']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm48']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm49']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm50']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm51']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm52']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm53']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm54']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm55']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm56']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm57']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm58']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm59']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm60']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm61']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm62']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm63']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm64']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm65']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm66']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm67']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm68']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm69']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm70']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm71']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm72']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm73']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm74']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm75']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm76']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm77']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm78']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm79']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm80']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm81']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm82']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm83']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm84']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm85']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm86']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm87']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm88']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm89']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm90']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm91']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm92']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm93']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm94']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm95']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm96']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm97']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm98']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm99']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm100']; ?></td>
    </tr>
    <?php } while ($row_rstable1 = mysql_fetch_assoc($rstable1)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($rstable1);
?>
