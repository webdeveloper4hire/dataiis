<?php require_once('../Connections/connection.php'); ?>
<?php require_once('config.php'); ?>
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
$query_rstable2 = "SELECT * FROM table2 WHERE tb2_colunm2 =  " . $_GET['table1_id'] . "";
$rstable2 = mysql_query($query_rstable2, $connection) or die(mysql_error());
$row_rstable2 = mysql_fetch_assoc($rstable2);
$totalRows_rstable2 = mysql_num_rows($rstable2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print</title>
<script src="../plugins/facebox/lib/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/table2excel.js"></script>
<script>
$(document).ready(function() {
    $('input[type="checkbox"]').click(function() {
        var index = $(this).attr('name').substr(3);
        index--;
        $('table tr').each(function() { 
            $('td:eq(' + index + ')',this).toggle();
        });
        $('th.' + $(this).attr('name')).toggle();
    });
});
</script>

<style type="text/css">
table{counter-reset:section;}
.count:before
{
counter-increment:section;
content:counter(section);
} 

table.jermar th, table.jermar td {
  background : #fff none; color : #000;
  font-size : 80%;
  font-family: Ecofont Vera Sans, Arial, Helvetica, sans-serif ;
  src: url('http://www.ecofont.com/assets/files/ecofont_vera_sans_regular.ttf');
  src: local('ecofont_vera_sans_regular.ttf'), 
       local('Ecofont Vera Sans'), 
       url('http://www.ecofont.com/assets/files/ecofont_vera_sans_regular.ttf') format('truetype');
   }</style>
</head>

<body>
<?php if ($totalRows_rstable2 == 0) { // Show if recordset empty ?>
<h1>No Record Found</h1>
<?php } // Show if recordset empty ?>
<a href="javascript:history.back(-1)"><img src="../images/bd_prevpage.png" title="BACK" alt="BACK" /></a>
  &nbsp;&nbsp;
  <a href="#" onclick="tableToExcel('datatables', 'DTS')"><img src="../images/b_save.png" title="Sava as" alt="Save as" /></a>
  &nbsp;&nbsp;
  <a href="javascript:window.print()"><img src="../images/b_print.png" title="PRINT" alt="PRINT" /></a>
<table border="1" cellspacing="0" cellpadding="5"  class="jermar" id="datatables" width="800px">
  <tr>
    <th colspan="4"><?php echo $_GET['name'];?></th>
  </tr>
  <tr>
    <th>No.</th>
    <th>File</th>
    <th>Remarks</th>
    <th>-</th>
    <!--<th>tb2_colunm5</th>
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
    <th>tb2_colunm30</th>-->
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_rstable2['table2_id']; ?></td>
      <td><a href="<?php echo $row_rstable2['tb2_colunm3']; ?>" target="_blank"><?php echo $row_rstable2['tb2_colunm3']; ?></a></td>
      <td><?php echo $row_rstable2['tb2_colunm4']; ?></td>
      <td><a href="delete_table2.php?table2_id=<?php echo $row_rstable2['table2_id']; ?>" onclick="return confirm('Are you sure?')">DELETE</a></td>
      <!--<td><?php echo $row_rstable2['tb2_colunm5']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm6']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm7']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm8']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm9']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm10']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm11']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm12']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm13']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm14']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm15']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm16']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm17']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm18']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm19']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm20']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm21']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm22']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm23']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm24']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm25']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm26']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm27']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm28']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm29']; ?></td>
      <td><?php echo $row_rstable2['tb2_colunm30']; ?></td>-->
    </tr>
    <?php } while ($row_rstable2 = mysql_fetch_assoc($rstable2)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($rstable2);
?>
