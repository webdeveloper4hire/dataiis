<?php require_once('../Connections/connection.php'); ?>
<?php require_once('config.php'); ?>
<?php require_once('access_global.php'); ?>
<?php
 
// Elapse time
$time =strtotime ($row_rstable1['tb1_colunm5']);

function humanTiming ($time)
{

    $time = time() - $time; // to get the time since that moment

    $tokens = array (
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }

}

?>
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
$query_rstable1 = sprintf("SELECT * FROM table1 WHERE tb1_colunm1 = %s ORDER BY table1_id DESC", GetSQLValueString($colname_rstable1, "text"));
$rstable1 = mysql_query($query_rstable1, $connection) or die(mysql_error());
$row_rstable1 = mysql_fetch_assoc($rstable1);
$totalRows_rstable1 = mysql_num_rows($rstable1);
?>
<?php require_once('head.php'); ?>
<?php require_once('menu.php'); ?>

<!-- Right side column. Contains the navbar and content of the page -->
  <div>

<div class="navbar-fixed-top body-title">    
	<h3 class="col-lg-10"><?php echo $_GET['tb1_colunm1'];?><small>This is in BETA and still developing </small> </h3>
</div>
            <div class="box-header">
              <a href="list_req_vouchers.php" class="button" target="_blank"><button type="submit"  class="btn denr-btn-primary">Add New <?php echo $_GET['tb1_colunm1'];?></button></a> <a href="list_req_vouchers.php" class="button" target="_blank"><button type="submit"  class="btn denr-btn-primary">Checklist of <?php echo $_GET['tb1_colunm1'];?></button></a></p>
              
              <div class="box-tools">
                <!--<form name="search" action="search_documents.php" method="get">
                  <div class="input-group">
                    <input type="hidden" name="tb1_colunm1" value="Document-Tracking">
                    <input type="text" name="query" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search" value="<?php echo $_GET['query']; ?>"/>
                    <div class="input-group-btn">
                      <button class="btn btn-sm btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                  </div>
                </form>-->
                
               </div>

<table class="display" id="datatables">
    <thead>
      <tr>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>ID</th>
    <th>Status</th>
    <th>Mode of Payment</th>
    <th>No.</th>
    <th>Date</th>
    <th>Payee/Office</th>
    <th>Check/ADA No.</th>
    <th>OS/BUS No.</th>
    <th>Date</th>
    <th>Address</th>
    <th>Responsibility</th>
    <th>Title</th>
    <th>Code</th>
    <th>Certified</th>
    <th>Name</th>
    <th>Position</th>
    <th>Division</th>
    <th>Date<br/></th>
    <th>Approved for Payment</th>
    <th>Name</th>
    <th>Position</th>
    <th>Division</th>
    <th>Date</th>
    <th>Recieved Payment</th>
    <th>Date</th>
    <th>Name</th>
    <th>Check/ADA No.</th>
    <th>Date</th>
    <th>Bank Name</th>
    <th>OR No./Other Relevant</th>
    <th>Documents Issued</th>
    <th>Journal Entry</th>
    <th>No.</th>
    <th>Date</th>
    <!-- <th>37</th>
    <th>38</th>
    <th>39</th>
    <th>40</th>
    <th>41</th>
    <th>42</th>
    <th>43</th>
    <th>44</th>
    <th>45</th>
    <th>46</th>
    <th>47</th>
    <th>48</th>
    <th>49</th>
    <th>50</th>
    <th>51</th>
    <th>52</th>
    <th>53</th>
    <th>54</th>
    <th>55</th>
    <th>56</th>
    <th>57</th>
    <th>58</th>
    <th>59</th>
    <th>60</th>
    <th>61</th>
    <th>62</th>
    <th>63</th>
    <th>64</th>
    <th>65</th>
    <th>66</th>
    <th>67</th>
    <th>68</th>
    <th>69</th>
    <th>70</th>
    <th>71</th>
    <th>72</th>
    <th>73</th>
    <th>74</th>
    <th>75</th>
    <th>76</th>
    <th>77</th>
    <th>78</th>
    <th>79</th>
    <th>80</th>
    <th>81</th>
    <th>82</th>
    <th>83</th>
    <th>84</th>
    <th>85</th>
    <th>86</th>
    <th>87</th>
    <th>88</th>
    <th>89</th>
    <th>90</th>
    <th>91</th>
    <th>92</th>
    <th>93</th>
    <th>94</th>
    <th>95</th>
    <th>96</th>
    <th>97</th>
    <th>98</th>
    <th>99</th>
    <th>100</th>-->
        </tr>
    </thead>
    <tbody>
      <?php do { ?>
        <tr>
       <td>
<a href="
<?php
if ($row_rstable1['tb1_colunm2'] != NULL) {
    echo "#";
}
elseif ($_SESSION['MM_UserGroup'] == "10") {
    echo "edit_voucher.php?table1_id=".$row_rstable1['table1_id']."";
}
elseif ($row_rstable1['tb1_colunm25'] == $_SESSION['MM_Username']) {
    echo "edit_voucher.php?table1_id=".$row_rstable1['table1_id']."";
}
else {
    echo "#";
}
?>		  
">UPDATE</a>
</td>
       <td><a href="print_vouchers.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>" target="_blank">VIEW</a></td>
      <td><?php echo $row_rstable1['table1_id']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm37']; ?></td>
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
      <!--
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
        <?php } while ($row_rstable1 = mysql_fetch_assoc($rstable1)); ?>
    </tbody>
  </table>
            <!-- /.box-body --> 
             
              <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li>
                    <?php if ($pageNum_rstable1 > 0) { // Show if not first page ?>
                      <a href="<?php printf("%s?pageNum_rstable1=%d%s", $currentPage, 0, $queryString_rstable1); ?>">First</a>
                      <?php } // Show if not first page ?>
                  </li>
                  <li>
                    <?php if ($pageNum_rstable1 > 0) { // Show if not first page ?>
                      <a href="<?php printf("%s?pageNum_rstable1=%d%s", $currentPage, max(0, $pageNum_rstable1 - 1), $queryString_rstable1); ?>">Previous</a>
                      <?php } // Show if not first page ?>
                  </li>
                  <li>
                    <?php if ($pageNum_rstable1 < $totalPages_rstable1) { // Show if not last page ?>
                      <a href="<?php printf("%s?pageNum_rstable1=%d%s", $currentPage, min($totalPages_rstable1, $pageNum_rstable1 + 1), $queryString_rstable1); ?>">Next</a>
                      <?php } // Show if not last page ?>
                  </li>
                  <li>
                    <?php if ($pageNum_rstable1 < $totalPages_rstable1) { // Show if not last page ?>
                      <a href="<?php printf("%s?pageNum_rstable1=%d%s", $currentPage, $totalPages_rstable1, $queryString_rstable1); ?>">Last</a>
                      <?php } // Show if not last page ?>
                  </li>
                </ul>
              </div>
              
              <?php if ($totalRows_rstable1 == 0) { // Show if recordset empty ?>
                <div class="error-page">
                  <h2 class="headline text-info"> 404 </h2>
                  <div class="error-content">
                    <h3><i class="fa fa-warning text-yellow"></i> No data found.</h3>
                    <p> We could not find the data you were looking for.
                      Meanwhile, you may <a href='home.php?tb1_colunm1=Document-Tracking'>return to dashboard</a> or try using the search form. </p>
                    
                    <!--<form name="search" action="search_request.php" method="get" class='search-form'>
                      <div class='input-group'>
                        <input type="text" name="q" class='form-control' placeholder="Search"/>
                        <div class="input-group-btn">
                          <button type="submit" name="submit"  class="btn denr-btn-primary"><i class="fa fa-search"></i></button>
                        </div>
                      </div>
                    </form>-->
                  </div>
                  <!-- /.error-content -->
                </div>
                <!-- /.error-page -->
                <?php } // Show if recordset empty ?>
          </div><?php require_once('footer.php'); ?>
<?php
mysql_free_result($rstable1);
?>
