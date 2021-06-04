<?php require_once('../Connections/connection.php'); ?>
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
<?php require_once('head.php'); ?>
<div>

<div class="navbar-fixed-top body-title">    
	<h3 class="col-lg-10">List of <?php echo $_GET['tb1_colunm1']; ?>(s)</h3>
</div>

<p><a href="add_engp.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1']; ?>" target="_blank"><input type="button" value="Add <?php echo $_GET['tb1_colunm1']; ?>" class="btn denr-btn-primary"/></a></p>

<table class="display" id="datatables">
  <thead>
   <tr class="denr-table-header" role="row">
    <th>&nbsp;</th>
	  <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>ID</th>
    <th>DB</th>
    <th>Region</th>
    <th>PENRO</th>
    <th>CENRO</th>
    <th>District</th>
    <th>Brgy</th>
    <th>Municipality</th>
    <th>Org</th>
    <th>Cont-Person</th>
    <th>Type</th>
    <th>Date</th>
    <th>Status</th>
    <th>Commodity</th>
    <th>Species</th>
    <th>Activity</th>
    <th>Area Shapefile</th>
    <th>Contracted</th>
    <th>Maintained</th>
    <th>Remarks</th>
    <th>Seedling Target</th>
    <th>Produced</th>
    <th>Planted</th>
    <th>Replanted</th>
    <th>Proj-Cost</th>
    <th>Survival Rate</th>
    <th>Area Damaged</th>
    <th>Seedling Damaged</th>
    <th>Occured</th>
    <th>Action</th>
    <th>Disturbance</th>
    <th>Author</th>
    <!--
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
    -->
  </tr>
  </thead>
  <tbody>
  <?php do { ?>
    <tr>
      <td><a href="print_<?php echo $_GET['tb1_colunm1']; ?>.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>" target="_blank">VIEW</a></td>
	  <td><a href="upload_form.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1']; ?>map&table1_id=<?php echo $row_rstable1['table1_id']; ?>" target="_blank">UPLOAD</a></td>
      <td><a href="edit_<?php echo $_GET['tb1_colunm1']; ?>.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>" rel="facebox">UPDATE</a></td>
      <td><a href="delete_table1.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>" onclick="return confirm('Are you sure you?');">DELETE</a></td>
      <td><?php echo $row_rstable1['tb1_colunm32']; ?></td>
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
      <!--
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
      <td><?php echo $row_rstable1['tb1_colunm100']; ?></td>-->
    </tr>
    </tbody>
    <?php } while ($row_rstable1 = mysql_fetch_assoc($rstable1)); ?>
</table>
</div>
<?php require_once('footer.php'); ?>
<?php
mysql_free_result($rstable1);
?>
