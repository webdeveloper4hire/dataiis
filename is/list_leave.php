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

mysql_select_db($database_connection, $connection);
$query_rsemployee = "SELECT * FROM table1 WHERE tb1_colunm1 = 'mbg4b-employee'";
$rsemployee = mysql_query($query_rsemployee, $connection) or die(mysql_error());
$row_rsemployee = mysql_fetch_assoc($rsemployee);
$totalRows_rsemployee = mysql_num_rows($rsemployee);
?>
<?php require_once('head.php'); ?>
<div>

<div class="navbar-fixed-top body-title">    
	<h3 class="col-lg-10"><?php echo $_GET['title']; ?></h3>
          	<div class="row mt">
          		<div class="showback">
                <a href="add_employee.php"><button type="button" class="btn btn-theme03">Select Employee</button></a> 
                </div>
                
                <div class="col-lg-12">
                  <table class="display" id="datatables">
                    <thead>
                    <tr>
                      <th></th>
                      <th>table1_id</th>
                      <th>tb1_colunm1</th>
                      <th>tb1_colunm2</th>
                      <th>tb1_colunm3</th>
                      <th>tb1_colunm4</th>
                      <th>tb1_colunm5</th>
                      <th>tb1_colunm6</th>
                      <th>tb1_colunm7</th>
                      <th>tb1_colunm8</th>
                      <th>tb1_colunm9</th>
                      <th>tb1_colunm10</th>
                      <th>tb1_colunm11</th>
                      <th>tb1_colunm12</th>
                      <th>tb1_colunm13</th>
                      <th>tb1_colunm14</th>
                      <th>tb1_colunm15</th>
                      <th>tb1_colunm16</th>
                      <th>tb1_colunm17</th>
                      <th>tb1_colunm18</th>
                      <th>tb1_colunm19</th>
                      <th>tb1_colunm20</th>
                      <th>tb1_colunm21</th>
                      <th>tb1_colunm22</th>
                      <th>tb1_colunm23</th>
                      <th>tb1_colunm24</th>
                      <th>tb1_colunm25</th>
                      <th>tb1_colunm26</th>
                      <th>tb1_colunm27</th>
                      <th>tb1_colunm28</th>
                      <th>tb1_colunm29</th>
                      <th>tb1_colunm30</th>
                      <th>tb1_colunm31</th>
                      <th>tb1_colunm32</th>
                      <th>tb1_colunm33</th>
                      <th>tb1_colunm34</th>
                      <th>tb1_colunm35</th>
                      <th>tb1_colunm36</th>
                      <th>tb1_colunm37</th>
                      <th>tb1_colunm38</th>
                      <th>tb1_colunm39</th>
                      <th>tb1_colunm40</th>
                      <th>tb1_colunm41</th>
                      <th>tb1_colunm42</th>
                      <th>tb1_colunm43</th>
                      <th>tb1_colunm44</th>
                      <th>tb1_colunm45</th>
                      <th>tb1_colunm46</th>
                      <th>tb1_colunm47</th>
                      <th>tb1_colunm48</th>
                      <th>tb1_colunm49</th>
                      <th>tb1_colunm50</th>
                      <th>tb1_colunm51</th>
                      <th>tb1_colunm52</th>
                      <th>tb1_colunm53</th>
                      <th>tb1_colunm54</th>
                      <th>tb1_colunm55</th>
                      <th>tb1_colunm56</th>
                      <th>tb1_colunm57</th>
                      <th>tb1_colunm58</th>
                      <th>tb1_colunm59</th>
                      <th>tb1_colunm60</th>
                      <th>tb1_colunm61</th>
                      <th>tb1_colunm62</th>
                      <th>tb1_colunm63</th>
                      <th>tb1_colunm64</th>
                      <th>tb1_colunm65</th>
                      <th>tb1_colunm66</th>
                      <th>tb1_colunm67</th>
                      <th>tb1_colunm68</th>
                      <th>tb1_colunm69</th>
                      <th>tb1_colunm70</th>
                      <th>tb1_colunm71</th>
                      <th>tb1_colunm72</th>
                      <th>tb1_colunm73</th>
                      <th>tb1_colunm74</th>
                      <th>tb1_colunm75</th>
                      <th>tb1_colunm76</th>
                      <th>tb1_colunm77</th>
                      <th>tb1_colunm78</th>
                      <th>tb1_colunm79</th>
                      <th>tb1_colunm80</th>
                      <th>tb1_colunm81</th>
                      <th>tb1_colunm82</th>
                      <th>tb1_colunm83</th>
                      <th>tb1_colunm84</th>
                      <th>tb1_colunm85</th>
                      <th>tb1_colunm86</th>
                      <th>tb1_colunm87</th>
                      <th>tb1_colunm88</th>
                      <th>tb1_colunm89</th>
                      <th>tb1_colunm90</th>
                      <th>tb1_colunm91</th>
                      <th>tb1_colunm92</th>
                      <th>tb1_colunm93</th>
                      <th>tb1_colunm94</th>
                      <th>tb1_colunm95</th>
                      <th>tb1_colunm96</th>
                      <th>tb1_colunm97</th>
                      <th>tb1_colunm98</th>
                      <th>tb1_colunm99</th>
                      <th>tb1_colunm100</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php do { ?>
                      <tr>
                        <td><a href="add_leave.php?table1_id=<?php echo $row_rsemployee['table1_id']; ?>">Add Leave</a></td>
                        <td><?php echo $row_rsemployee['table1_id']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm1']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm2']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm3']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm4']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm5']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm6']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm7']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm8']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm9']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm10']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm11']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm12']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm13']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm14']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm15']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm16']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm17']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm18']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm19']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm20']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm21']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm22']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm23']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm24']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm25']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm26']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm27']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm28']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm29']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm30']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm31']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm32']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm33']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm34']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm35']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm36']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm37']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm38']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm39']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm40']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm41']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm42']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm43']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm44']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm45']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm46']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm47']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm48']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm49']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm50']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm51']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm52']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm53']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm54']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm55']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm56']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm57']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm58']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm59']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm60']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm61']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm62']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm63']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm64']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm65']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm66']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm67']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm68']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm69']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm70']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm71']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm72']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm73']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm74']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm75']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm76']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm77']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm78']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm79']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm80']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm81']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm82']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm83']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm84']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm85']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm86']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm87']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm88']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm89']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm90']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm91']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm92']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm93']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm94']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm95']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm96']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm97']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm98']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm99']; ?></td>
                        <td><?php echo $row_rsemployee['tb1_colunm100']; ?></td>
                      </tr>
                      <?php } while ($row_rsemployee = mysql_fetch_assoc($rsemployee)); ?>
                      </tbody>
                  </table>

                </div>

      
</div>
<?php require_once('footer.php'); ?>
<?php
mysql_free_result($rsemployee);
?>
