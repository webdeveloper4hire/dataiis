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
$query_rstable1 = sprintf("SELECT * FROM table1 WHERE tb1_colunm1 = %s ORDER BY table1_id DESC", GetSQLValueString($colname_rstable1, "text"));
$rstable1 = mysql_query($query_rstable1, $connection) or die(mysql_error());
$row_rstable1 = mysql_fetch_assoc($rstable1);
$colname_rstable1 = "-1";
if (isset($_GET['tb1_colunm1'])) {
  $colname_rstable1 = $_GET['tb1_colunm1'];
}
$colname3_rstable1 = "-3";
if (isset($_GET['tb1_colunm3'])) {
  $colname3_rstable1 = $_GET['tb1_colunm3'];
}
mysql_select_db($database_connection, $connection);
$query_rstable1 = sprintf("SELECT * FROM table1 WHERE tb1_colunm1 = %s AND tb1_colunm3 = %s ORDER BY table1_id DESC", GetSQLValueString($colname_rstable1, "text"),GetSQLValueString($colname3_rstable1, "text"));
$rstable1 = mysql_query($query_rstable1, $connection) or die(mysql_error());
$row_rstable1 = mysql_fetch_assoc($rstable1);
$totalRows_rstable1 = mysql_num_rows($rstable1);
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
	<h3 class="col-lg-10"><?php echo $_GET['tb1_colunm1'];?> <small>DENR REGION</small> </h3>
</div>
            <div class="box-header">
              <a href="search_document.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>&type=refresh_id" class="button" rel="facebox"><button type="submit"  class="btn denr-btn-primary">Add New Document</button></a>
              <a href="select_document_range.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>" rel="facebox"><button type="submit"  class="btn denr-btn-primary">Summarize by Doc.No.</button></a>
              <a href="select_year_documents_advance.php?tb1_colunm1=Document-Tracking" title="Document Tracking System RECORDS" rel="facebox"><button type="submit"  class="btn denr-btn-primary">Advance Search</button></a>
              
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
        </tr>
    </thead>
    <tbody>
      <?php do { ?>
        <tr>
          <td><a href="upload_form.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>&tb1_colunm1=dats-file" title="UPLOAD ATTACHMENT">UPLOAD</a></td>
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
