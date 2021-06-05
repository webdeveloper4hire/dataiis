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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_rstable2 = 10;
$pageNum_rstable2 = 0;
if (isset($_GET['pageNum_rstable2'])) {
  $pageNum_rstable2 = $_GET['pageNum_rstable2'];
}
$startRow_rstable2 = $pageNum_rstable2 * $maxRows_rstable2;

mysql_select_db($database_connection, $connection);
$query_rstable2 = "SELECT table2.tb2_colunm18,table2.table2_id,table2.tb2_colunm2,table2.tb2_colunm3,table2.tb2_colunm4,table2.tb2_colunm5,table2.tb2_colunm6,table2.tb2_colunm7,table2.tb2_colunm8,table2.tb2_colunm9,table2.tb2_colunm10,table2.tb2_colunm11,table2.tb2_colunm14,table1. * 
FROM table2
LEFT JOIN table1 ON table2.tb2_colunm2 = table1.table1_id WHERE tb2_colunm1 = 'Document-Action' AND tb2_colunm10 = 'OUT-BARCODED' AND (tb2_colunm18 ='".$_GET[query]."' OR tb1_colunm7 LIKE '%".$_GET[query]."%' OR tb2_colunm2 ='".$_GET[query]."') ORDER BY table2_id DESC";
$query_limit_rstable2 = sprintf("%s LIMIT %d, %d", $query_rstable2, $startRow_rstable2, $maxRows_rstable2);
$rstable2 = mysql_query($query_limit_rstable2, $connection) or die(mysql_error());
$row_rstable2 = mysql_fetch_assoc($rstable2);

if (isset($_GET['totalRows_rstable2'])) {
  $totalRows_rstable2 = $_GET['totalRows_rstable2'];
} else {
  $all_rstable2 = mysql_query($query_rstable2);
  $totalRows_rstable2 = mysql_num_rows($all_rstable2);
}
$totalPages_rstable2 = ceil($totalRows_rstable2/$maxRows_rstable2)-1;

$queryString_rstable2 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rstable2") == false && 
        stristr($param, "totalRows_rstable2") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rstable2 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rstable2 = sprintf("&totalRows_rstable2=%d%s", $totalRows_rstable2, $queryString_rstable2);
?>
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
<?php require_once('head.php'); ?>
<?php require_once('menu.php'); ?>

<!-- Right side column. Contains the navbar and content of the page -->
  <div>

<div class="navbar-fixed-top body-title">    
	<h3 class="col-lg-10">Search Barcode <small><?php echo $clientalias ;?> REGION</small> </h3>
</div>
              
    <div class="box-header">
              <a href="search_document.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>&type=refresh_id" class="button" rel="facebox"><button type="submit"  class="btn denr-btn-primary">Add New Document</button></a>
              
              
      <div class="box-tools">
        <form name="search" action="search_document_barcode.php" method="get">
                  <div class="input-group">
                    <input type="hidden" name="tb1_colunm1" value="Document-Tracking">
                    <input type="text" name="query" class="form-control input-sm pull-right" style="width: 250px;" placeholder="Search Barcode" value="<?php echo $_GET['query']; ?>" autofocus="autofocus"/>
                    <div class="input-group-btn">
                      <button class="btn btn-sm btn-default"><span>Go</span></button>
                    </div>
                  </div>
        </form>                
      </div>
           <?php if ($totalRows_rstable2 > 0) { // Show if recordset not empty ?>  
			<table class="table table-hover">
                <thead>
                <tr>
                  <th>-</th>
                  <th>-</th>
                  <th>Barcode</th>
                  <th>Action#</th>
                  <th>Document#</th>
                  <th>Subject</th>
                  <th>Routed By</th>
                  <th>Date Received</th>
                  <th>Time</th>
                  <th>Released to</th>
                  <th>Date Released</th>
                  <th>Time</th>
                  <th>Action</th>
                  <th>Status</th>
                  <th>Author</th>
                  <th>Recent Accessed</th>
                  <th>Action Date</th>
                  <th>Time</th>
                </tr>
                </thead>
                <tbody>
                <?php do { ?>
                  <tr>
                    <td><a href="print_document.php?table1_id=<?php echo $row_rstable2['tb2_colunm2']; ?>" target="_blank">VIEW</a></td>
                    <td><a href="print_barcode.php?barcode=<?php echo $row_rstable2['tb2_colunm18']; ?>" target="_blank">PRINT</a></td>
                    <td><?php echo $row_rstable2['tb2_colunm18']; ?></td>
                    <td><?php echo $row_rstable2['table2_id']; ?></td>
                    <td><?php echo $row_rstable2['tb1_colunm2']; ?>-<?php echo $row_rstable2['tb1_colunm3']; ?>-<?php echo $row_rstable2['tb2_colunm2']; ?></td>
                    <td><?php echo $row_rstable2['tb1_colunm7']; ?></td>
                    <td><?php echo $row_rstable2['tb2_colunm3']; ?></td>
                    <td><?php echo $row_rstable2['tb2_colunm4']; ?></td>
                    <td><?php echo $row_rstable2['tb2_colunm5']; ?></td>
                    <td><?php echo $row_rstable2['tb2_colunm6']; ?></td>
                    <td><?php echo $row_rstable2['tb2_colunm7']; ?></td>
                    <td><?php echo $row_rstable2['tb2_colunm8']; ?></td>
                    <td><?php echo $row_rstable2['tb2_colunm9']; ?></td>
                    <td><?php echo $row_rstable2['tb2_colunm10']; ?></td>
                    <td><?php echo $row_rstable2['tb2_colunm11']; ?></td>
                    <td><?php echo $row_rstable2['tb2_colunm12']; ?></td>
                    <td><?php echo $row_rstable2['tb2_colunm13']; ?></td>
                    <td><?php echo $row_rstable2['tb2_colunm14']; ?></td>
                  </tr>
                  <?php } while ($row_rstable2 = mysql_fetch_assoc($rstable2)); ?>
              </tbody>
              </table>
              <?php } // Show if recordset not empty ?>

      
        
            <!-- /.box-body -->
            
<div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li>
                    <?php if ($pageNum_rstable2 > 0) { // Show if not first page ?>
                    <a href="<?php printf("%s?pageNum_rstable2=%d%s", $currentPage, 0, $queryString_rstable2); ?>">First</a>
                    <?php } // Show if not first page ?>
                  </li>
                  <li>
                   <?php if ($pageNum_rstable2 > 0) { // Show if not first page ?>
                    <a href="<?php printf("%s?pageNum_rstable2=%d%s", $currentPage, max(0, $pageNum_rstable2 - 1), $queryString_rstable2); ?>">Previous</a>
                    <?php } // Show if not first page ?>
                  </li>
                  <li>
                    <?php if ($pageNum_rstable2 < $totalPages_rstable2) { // Show if not last page ?>
                    <a href="<?php printf("%s?pageNum_rstable2=%d%s", $currentPage, min($totalPages_rstable2, $pageNum_rstable2 + 1), $queryString_rstable2); ?>">Next</a>
                    <?php } // Show if not last page ?>
                  </li>
                  <li>
                   <?php if ($pageNum_rstable2 < $totalPages_rstable2) { // Show if not last page ?>
                    <a href="<?php printf("%s?pageNum_rstable2=%d%s", $currentPage, $totalPages_rstable2, $queryString_rstable2); ?>">Last</a>
                    <?php } // Show if not last page ?>
                  </li>
      </ul>
              </div>
<?php if ($totalRows_rstable2 == 0) { // Show if recordset empty ?>
  <div class="error-page">
    <h2 class="headline text-info"> 404 </h2>
    <div class="error-content">
      <h3>No Data to display!</h3>
      <p>Please use the search bar on the right.</p>
      <p>Query: <?php echo $_GET['query']; ?></p>
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
mysql_free_result($rstable2);
?>
