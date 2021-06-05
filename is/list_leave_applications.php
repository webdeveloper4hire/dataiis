<?php require_once('../Connections/connection.php'); ?>
<?php require_once('config.php'); ?>
<?php require_once('access_global.php'); ?>
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
?>
<?php require_once('head.php'); ?>
<div>

<div class="navbar-fixed-top body-title">    
	<h3 class="col-lg-10">Leave Applications</h3>
</div>

<div align="center">
                  <table class="display" id="datatables">
                    <thead>
                    <tr>
                      <th width="120"><div align="center"></div></th>
                      <th width="120"><div align="center"></div></th>
                      <th width="150"><div align="center">Name</div></th>
                      <th width="250"><div align="center">Position</div></th>
                      <th width="250"><div align="center">Date of Filling</div></th>
                      <!--<th>tb2_colunm4</th>
                      <th>tb2_colunm5</th>
                      <th>tb2_colunm6</th>
                      <th>tb2_colunm7</th>
                      <th>tb2_colunm8</th>
                      <th>tb2_colunm9</th>
                      <th>tb2_colunm10</th>
                      <th>tb2_colunm11</th>
                      <th>tb2_colunm12</th>
                      <th>tb2_colunm13</th>
                      <th>tb2_colunm14</th>
                      <th>tb2_colunm15</th>
                      <th>tb2_colunm16</th>
                      <th>tb2_colunm17</th>
                      <th>tb2_colunm18</th>
                      <th>tb2_colunm19</th>
                      <th>tb2_colunm20</th>
                      <th>tb2_colunm21</th>
                      <th>tb2_colunm22</th>
                      <th>tb2_colunm23</th>
                      <th>tb2_colunm24</th>
                      <th>tb2_colunm25</th>
                      <th>tb2_colunm26</th>
                      <th>tb2_colunm27</th>
                      <th>tb2_colunm28</th>
                      <th>tb2_colunm29</th>
                      <th>tb2_colunm30</th>
                      <th>tb2_colunm31</th>
                      <th>tb2_colunm32</th>
                      <th>tb2_colunm33</th>
                      <th>tb2_colunm34</th>
                      <th>tb2_colunm35</th>
                      <th>tb2_colunm36</th>
                      <th>tb2_colunm37</th>
                      <th>tb2_colunm38</th>
                      <th>tb2_colunm39</th>
                      <th>tb2_colunm40</th>
                      <th>tb2_colunm41</th>
                      <th>tb2_colunm42</th>
                      <th>tb2_colunm43</th>
                      <th>tb2_colunm44</th>
                      <th>tb2_colunm45</th>
                      <th>tb2_colunm46</th>
                      <th>tb2_colunm47</th>
                      <th>tb2_colunm48</th>
                      <th>tb2_colunm49</th>
                      <th>tb2_colunm50</th>
                      <th>tb2_colunm51</th>
                      <th>tb2_colunm52</th>
                      <th>tb2_colunm53</th>
                      <th>tb2_colunm54</th>
                      <th>tb2_colunm55</th>
                      <th>tb2_colunm56</th>
                      <th>tb2_colunm57</th>
                      <th>tb2_colunm58</th>
                      <th>tb2_colunm59</th>
                      <th>tb2_colunm60</th>
                      <th>tb2_colunm61</th>
                      <th>tb2_colunm62</th>
                      <th>tb2_colunm63</th>
                      <th>tb2_colunm64</th>
                      <th>tb2_colunm65</th>
                      <th>tb2_colunm66</th>
                      <th>tb2_colunm67</th>
                      <th>tb2_colunm68</th>
                      <th>tb2_colunm69</th>
                      <th>tb2_colunm70</th>
                      <th>tb2_colunm71</th>
                      <th>tb2_colunm72</th>
                      <th>tb2_colunm73</th>
                      <th>tb2_colunm74</th>
                      <th>tb2_colunm75</th>
                      <th>tb2_colunm76</th>
                      <th>tb2_colunm77</th>
                      <th>tb2_colunm78</th>
                      <th>tb2_colunm79</th>
                      <th>tb2_colunm80</th>
                      <th>tb2_colunm81</th>
                      <th>tb2_colunm82</th>
                      <th>tb2_colunm83</th>
                      <th>tb2_colunm84</th>
                      <th>tb2_colunm85</th>
                      <th>tb2_colunm86</th>
                      <th>tb2_colunm87</th>
                      <th>tb2_colunm88</th>
                      <th>tb2_colunm89</th>
                      <th>tb2_colunm90</th>
                      <th>tb2_colunm91</th>
                      <th>tb2_colunm92</th>
                      <th>tb2_colunm93</th>
                      <th>tb2_colunm94</th>
                      <th>tb2_colunm95</th>
                      <th>tb2_colunm96</th>
                      <th>tb2_colunm97</th>
                      <th>tb2_colunm98</th>
                      <th>tb2_colunm99</th>
                      <th>tb2_colunm100</th>-->
                    </tr>
                    </thead>
                    <tbody>
                    <?php do { ?>
                      <tr>
                        <td><a href="add_leave.php?table1_id=<?php echo $_GET['table1_id']; ?>&table2_id=<?php echo $row_rsleave['table2_id']; ?>">Compute Leave</a></td>
                        <td><a href="print_application.php?table2_id=<?php echo $row_rsleave['table2_id']; ?>">Print Leave</a></td>
                        <td><div align="center"><strong><?php echo $row_rsleave['tb2_colunm20']; ?> <?php echo $row_rsleave['tb2_colunm21']; ?> <?php echo $row_rsleave['tb2_colunm19']; ?></strong></div></td>
                        <td><div align="center"><strong><?php echo $row_rsleave['tb2_colunm23']; ?></strong></div></td>
                        <td><div align="center"><strong></strong>
                          <div align="center"><strong><?php echo $row_rsleave['tb2_colunm22']; ?></strong></div>
                        </div></td>
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
                      <?php } while ($row_rsleave = mysql_fetch_assoc($rsleave)); ?>
                      </tbody>
                  </table>
                </div>

      
</div>
<?php require_once('footer.php'); ?>
<?php
mysql_free_result($rsleave);
?>
