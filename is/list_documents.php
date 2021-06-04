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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_rstable1 = 10;
$pageNum_rstable1 = 0;
if (isset($_GET['pageNum_rstable1'])) {
  $pageNum_rstable1 = $_GET['pageNum_rstable1'];
}
$startRow_rstable1 = $pageNum_rstable1 * $maxRows_rstable1;

mysql_select_db($database_connection, $connection);
$query_rstable1 = "SELECT * FROM table1 WHERE tb1_colunm1 = '".$_GET['tb1_colunm1']."' AND tb1_colunm3 = '".date('Y')."' ORDER BY table1_id DESC";
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
	<h3 class="col-lg-10"><?php echo $_GET['tb1_colunm1'];?><small>
<?php //echo $count; ?> ONLINE
</small></h3>
</h3>
</div>
            <div class="box-header">
              <a href="search_document.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>&type=refresh_id" class="button" rel="facebox"><button type="submit"  class="btn denr-btn-primary">New Document</button></a>
              <a href="select_document_range.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>" rel="facebox"><button type="submit"  class="btn denr-btn-primary">Summarize</button></a>
              <a href="select_year_documents_advance.php?tb1_colunm1=Document-Tracking" title="Document Tracking System RECORDS" rel="facebox"><button type="submit"  class="btn denr-btn-primary">Advance Search</button></a>
                            
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

<p><i><font color="red">We are currently merging data from 2015-<?php echo date('Y') ?>. If you are experiencing issues, please let RITC unit know.<!--cant find what your looking for, please use the quick search or advance search.--> Thank you</font></i></p>

<table class="table table-hover">
    <thead>
      <tr>
        <th>-</th>
        <th>-</th>
        <!--<th></th>-->
        <th>-</th>
        <th>Doc.Number</th>
        <th>Status</th>
        <th>Urgent</th>
        <th>Originating Office</th>
        <th>Date Received</th>
        <th>Sender</th>
        <th>Subject</th>
        <th>Addressee</th>
        <th>Doc.Type</th>
        <th>Attachment(s)</th>
        <th>Encoded_by</th>
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
          <td><a href="upload_form.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>&tb1_colunm1=Document-Action" title="UPLOAD ATTACHMENT">UPLOAD</a></td>
          <td><a href="add_document-action.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>&amp;tb2_colunm1=Document-Action" title="ADD ACTION">ACTION</a></td>
          <!--<td><a <?php
if ($row_rstable1['tb1_colunm11'] == $_SESSION['MM_Username'] ) { ?>   
href="delete_table.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>" onclick="return confirm('Are you sure?')"  <?php } ?> >DELETE</a></td>-->
          <td><a href="print_document.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>&arcno=<?php echo $row_rstable1['tb1_colunm25']; ?>" target="_blank">VIEW</a></td>
          <td>
<?php if ($row_rstable1['tb1_colunm2'] != "0") {  ?><?php echo $row_rstable1['tb1_colunm2']; ?>-<?php } ?><?php echo $row_rstable1['tb1_colunm3']; ?>-<?php echo $row_rstable1['table1_id']; ?>
</td>
          <td>
   <?php
	$now = time(); // or your date as well
	$your_date = strtotime($row_rstable1['tb1_colunm5']);
	$datediff = $now - $your_date;
	$duration=round($datediff / (60 * 60 * 24));
	
	if ($duration == "5") {
    	echo "<font color='blue'>";
	} else {
    	echo "<font color='green'>";
	}
	?>
    
    <?php
  if ($row_rstable1['tb1_colunm5'] == date("Y-m-d")) {
    echo "Today";
} else {
    echo humanTiming(strtotime ($row_rstable1['tb1_colunm5']));
}
   ?>
   </font>
   </td>
          <td><?php echo $row_rstable1['tb1_colunm12']; ?></td>
          <td><?php if ($row_rstable1['tb1_colunm4'] == NULL) {echo $row_rstable1['tb1_colunm18'];} else {echo $row_rstable1['tb1_colunm4'];}?></td>
          <td><?php echo $row_rstable1['tb1_colunm5']; ?></td>
          <td><?php if ($row_rstable1['tb1_colunm6'] == NULL) {echo $row_rstable1['tb1_colunm18'];} else {echo $row_rstable1['tb1_colunm6'];}?></td>
          <td><?php echo $row_rstable1['tb1_colunm7']; ?></td>
          <td><?php echo $row_rstable1['tb1_colunm8']; ?></td>
          <td><?php echo $row_rstable1['tb1_colunm9']; ?></td>
          <td><a href="<?php echo $row_rstable1['tb1_colunm10']; ?>"><?php echo $row_rstable1['tb1_colunm10']; ?></a></td>
          <td><?php echo $row_rstable1['tb1_colunm11']; ?></td>
          <!--
          <td>-----</td>
          <td><?php echo $row_rstable1['tb1_colunm11']; ?></td>
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
