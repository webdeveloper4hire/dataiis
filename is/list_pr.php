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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_rstable1 = 10;
$pageNum_rstable1 = 0;
if (isset($_GET['pageNum_rstable1'])) {
  $pageNum_rstable1 = $_GET['pageNum_rstable1'];
}
$startRow_rstable1 = $pageNum_rstable1 * $maxRows_rstable1;

$colname_rstable1 = "-1";
if (isset($_GET['tb2_colunm12'])) {
  $colname_rstable1 = $_GET['tb2_colunm12'];
}
mysql_select_db($database_connection, $connection);
$query_rstable1 = sprintf("SELECT * FROM table2 WHERE tb2_colunm12 = %s ORDER BY table2_id DESC", GetSQLValueString($colname_rstable1, "text"));
$query_limit_rstable1 = sprintf("%s LIMIT %d, %d", $query_rstable1, $startRow_rstable1, $maxRows_rstable1);
$rstable1 = mysql_query($query_limit_rstable1, $connection) or die(mysql_error());
$row_rstable1 = mysql_fetch_assoc($rstable1);

if (isset($_GET['totalRows_rstable1'])) {
  $totalRows_rstable1 = $_GET['totalRows_rstable1'];
} else {
  $all_rstable1 = mysql_query($query_rstable1);
  $totalRows_rstable1 = mysql_num_rows($all_rstable1);
}
$totalPages_rstable1 = ceil($totalRows_rstable1/$maxRows_rstable1)-1;

$queryString_rstable1 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rstable1") == false && 
        stristr($param, "totalRows_rstable1") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rstable1 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rstable1 = sprintf("&totalRows_rstable1=%d%s", $totalRows_rstable1, $queryString_rstable1);
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
	<h3 class="col-lg-10">Add New Request<small>
<?php //echo $count; ?> ONLINE
</small></h3>
</h3>
</div>
            <div class="box-header">
              <a href="add_pr.php?tb2_colunm1=Purchase Request" class="button" ><button type="submit"  class="btn denr-btn-primary">Add Purchase Request</button></a>
			  <a href="add_pr.php?tb2_colunm1=Request and Issue Slip" class="button" ><button type="submit"  class="btn denr-btn-primary">Add Request & Issue Slip</button></a>
			  <a href="add_pr.php?tb2_colunm1=Inspection and Acceoptance Report" class="button" ><button type="submit"  class="btn denr-btn-primary">Add Inspection & Acceoptance Report</button></a>
			  <a href="add_pr.php?tb2_colunm1=Inventory Custodian Slip" class="button" ><button type="submit"  class="btn denr-btn-primary">Add Inventory Custodian Slip</button></a>
              <div class="box-tools">
                <form name="search" action="search_documents.php" method="get">
                  <div class="input-group">
                    <input type="hidden" name="tb1_colunm1" value="Document-Tracking">
                    <input type="text" name="query" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Quick Search" value="<?php echo $_GET['query']; ?>"/>
                    <div class="input-group-btn">
                      <button class="btn btn-sm btn-default"><span>Go</span></button>
                    </div>
                  </div>
                </form>
                
               </div>

<table class="table table-hover">
    <thead>
      <tr>
        <th>-</th>
        <!--<th></th>-->
        <th>-</th>
		<th>PR No.</th>
		<th>Category</th>
        <th>Fund Cluster</th>
        <th>Office Section</th>
        <th>Responsibility Center Code</th>
		<th>Date</th>
        <th>Unit</th>
		<th>Item Description</th>
        <th>Quantity</th>
		<th>Unit Cost</th>
		<th>Estimated Useful Time</th>
       
        <!--
        <th>11</th>
        <th>12</th>
        <th>13</th>
        <th>14</th>
        <th>15</th>
        <th>16</th>
        <th>17</th>
        <th>18</th>
        <th>19</th>
        <th>20</th>
        <th>21</th>
        <th>22</th>
        <th>23</th>
        <th>24</th>
        <th>25</th>
        <th>26</th>
        <th>27</th>
        <th>28</th>
        <th>29</th>
        <th>30</th>
       -->
        </tr>
    </thead>
    <tbody>
      <?php do { ?>
        <tr>
          <td><a <?php
if ($_SESSION['MM_Username'] = 'RECORDS' ) { ?>  
href="edit_document.php?table1_id=<?php echo $row_rstable1['table2_id']; ?>"
<?php } elseif ($row_rstable1['tb2_colunm11'] == $_SESSION['MM_Username'] ) {?>
href="edit_document.php?table1_id=<?php echo $row_rstable1['table2_id']; ?>"
<?php } else {}?>
 target="_blank">UPDATE</a></td>
          <!--<td><a <?php
if ($row_rstable1['tb2_colunm11'] == $_SESSION['MM_Username'] ) { ?>   
href="delete_table.php?table1_id=<?php echo $row_rstable1['table2_id']; ?>" onclick="return confirm('Are you sure?')"  <?php } ?> >DELETE</a></td>-->
          <td><a href="print_document.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>" target="_blank">VIEW</a></td>
          <td>
<?php echo $row_rstable1['table2_id']; ?>
</td>
      
		  
		  
		  <?php ?></td>
		  <td><?php echo $row_rstable1['tb2_colunm1']; ?></td>
          <td><?php echo $row_rstable1['tb2_colunm2']; ?></td>
          <td><?php echo $row_rstable1['tb2_colunm3']; ?></td>
          <td><?php echo $row_rstable1['tb2_colunm5']; ?></td>
          <td><?php echo $row_rstable1['tb2_colunm6']; ?></td>
		  <td><?php echo $row_rstable1['tb2_colunm7']; ?></td>
		  <td><?php echo $row_rstable1['tb2_colunm8']; ?></td>
		  <td><?php echo $row_rstable1['tb2_colunm9']; ?></td>
		  <td><?php echo $row_rstable1['tb2_colunm10']; ?></td>
		   <td><?php echo $row_rstable1['tb2_colunm11']; ?></td>
          <!--
          <td>-----</td>
          
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
          -->
        </tr>
        <?php } while ($row_rstable1 = mysql_fetch_assoc($rstable1)); ?>
       <!--
        <tr>
          <td>Total</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><?php echo $row_rssumtable7['SUM(tb1_colunm7)']; ?></td>
          <td>&nbsp;</td>
          
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
         -->
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
                      Meanwhile, you may <a href='home.php'>return to dashboard</a> or try using the search form. </p>
                    
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
