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

<p>
<a href="add_request.php?tb1_colunm1=Tech-Assist"><input type="button" value="New Request for <?php echo $_GET['tb1_colunm1']; ?>" class="btn denr-btn-primary"/></a>
<a href="print_request_month.php?tb1_colunm1=Tech-Assist&tb1_colunm2=<?php echo date('Y-m') ?>"><input type="button" value="Print Summary" class="btn denr-btn-primary"/></a>
</p>

<table class="display" id="datatables">
  <thead>
   <tr class="denr-table-header" role="row">
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <td>ID</td>
    <td>Date</td>
    <td>Name</td>
    <td>Office</td>
    <td>Type</td>
    <td>Status</td>
  </tr>
  </thead>
  <tbody>
  <?php do { ?>
    <tr>
      <td><a href="print_tech-assist.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>&tb1_colunm1=tech-assist">VIEW</a></td>
      <td><a href="edit_table1.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>">UPDATE</a></td>
      <td><a href="delete_table1.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>" onclick="return confirm('Are you sure you?');">DELETE</a></td>
      <td><?php echo $row_rstable1['table1_id']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm2']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm3']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm6']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm10']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm12']; ?></td>
    </tr>
    </tbody>
    <?php } while ($row_rstable1 = mysql_fetch_assoc($rstable1)); ?>
</table>
</div>
<?php require_once('footer.php'); ?>
<?php
mysql_free_result($rstable1);
?>
