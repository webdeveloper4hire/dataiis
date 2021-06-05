<?php require_once('../Connections/connection.php'); ?>
<?php require_once('config.php'); ?>
<?php require_once('access_dats.php'); ?>
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
$query_rstable1 = "SELECT * FROM table1 WHERE table1_id = '".$_GET['table1_id']."'";
$rstable1 = mysql_query($query_rstable1, $connection) or die(mysql_error());
$row_rstable1 = mysql_fetch_assoc($rstable1);
$totalRows_rstable1 = mysql_num_rows($rstable1);

mysql_select_db($database_connection, $connection);
$query_rstable2 = "SELECT * FROM table2 WHERE tb2_colunm1 = 'Document-Action' AND tb2_colunm2 = '".$_GET['table1_id']."' ORDER BY table2_id ASC";
$rstable2 = mysql_query($query_rstable2, $connection) or die(mysql_error());
$row_rstable2 = mysql_fetch_assoc($rstable2);
$totalRows_rstable2 = mysql_num_rows($rstable2);

mysql_select_db($database_connection, $connection);
$query_rstable2arc = "SELECT * FROM table2 WHERE tb2_colunm1 = 'Document-Archive' AND tb2_colunm2 = '".$_GET['arcno']."'";
$rstable2arc = mysql_query($query_rstable2arc, $connection) or die(mysql_error());
$row_rstable2arc = mysql_fetch_assoc($rstable2arc);
$totalRows_rstable2arc = mysql_num_rows($rstable2arc);
?>
<?php
//Last Record
$lastrecord = $totalRows_rstable2;
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
<?php 
date_default_timezone_set("Asia/Hong_Kong"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="author" content="<?php echo $clientalias ;?>" />
<meta name="copyright" content="<?php echo $clientalias ;?>; 2010" />
<meta name="description" content="<?php echo $clientfullname;?>" />
<meta name="keywords" content="<?php echo $clientalias ;?>,Environment,Nature,Government,<?php echo $clientbranch;?>,Laguna,Calamba,Plants,Philippines,Seeds,Trees,Natural,Farm" />
<title>DOCUMENT TRACKING SLIP - Print</title>

<style type="text/css">
table{counter-reset:section;}
.count:before
{
counter-increment:section;
content:counter(section);
} 

table.jermar th, table.jermar td {
  
  font-size : 12px;
  font-family: 'Ecofont Vera Sans';
  font-color: #787878;
  src: url('http://www.ecofont.com/assets/files/ecofont_vera_sans_regular.ttf');
  src: local('ecofont_vera_sans_regular.ttf'), 
       local('Ecofont Vera Sans'), 
       url('http://www.ecofont.com/assets/files/ecofont_vera_sans_regular.ttf') format('truetype');
   }
 
 a:link { 
            text-decoration: none; 
        } 
</style>



</head>

<body>

<!-- barcode -->
<div style="visibility: hidden; display:inline;">
<input type="hidden" id="barcodeValue" value="<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]"; ?>/denris/system/search_documents.php?query=<?php echo $row_rstable1['table1_id']; ?>">
<input type="radio" name="btype" id="datamatrix" value="datamatrix" checked="checked">
<input type="radio" id="bmp" name="renderer" value="bmp" checked="checked">
<input type="text" id="moduleSize" value="2" size="3">
</div>
<!-- end -->

<div align="center">
  <table width="600" border="1" cellspacing="0" class="jermar">
  <tr>
    <td align="left" colspan="4">
    
    <table height="50" border="0" cellspacing="1" class="jermar">
      <tr valign="middle">
        <td width="50" align="center"><img src="../images/logogrey.jpg" width="60" /></td>
        <td width="500">
        <?php echo $clientfullname;?><br />
        <?php echo $clientbranch;?><br />
	<?php echo $clientaddress ;?>
	</td>
        <td align="center">

<a title="ID: <?php echo $row_rstable1['table1_id']; ?>">
<div id="barcodeTarget" class="barcodeTarget"></div>
<canvas id="canvasTarget" width="150" height="150"></canvas>
<font size="1px" color="#808080"><?php //echo $row_rstable1['table1_id']; ?></font>
</a>
          </td>
      </tr>
      </table>
      
      </td>
    </tr>
  <tr <?php
if ($row_rstable2['tb2_colunm10'] == "IN/Yellow Lane") {
    echo "bgcolor=#FFFF00";
}
elseif ($row_rstable2['tb2_colunm10'] == "OUT/Yellow Lane") {
    echo "bgcolor=#FFFF00";
}
elseif ($row_rstable2['tb2_colunm10'] == "IN/URGENT") {
	echo "bgcolor=#FF0000";
}
elseif ($row_rstable2['tb2_colunm10'] == "OUT/URGENT") {
	echo "bgcolor=#FF0000";
}
elseif ($row_rstable2['tb2_colunm10'] == "IN/DUE") {
    echo "bgcolor=#0000FF";
}
elseif ($row_rstable2['tb2_colunm10'] == "OUT/DUE") {
    echo "bgcolor=#0000FF";
}
else {
    echo "";
}
   ?>>
    <td colspan="4"><div align="center" class="style9">REGIONAL DOCUMENT ACTION TRACKING SLIP</div></td>
    </tr>
  <tr>
    <td width="115"><div align="left">Regional Doc. Number </div></td>
    <td><div align="left">
<?php if ($row_rstable1['tb1_colunm2'] != "0") {  ?><?php echo $row_rstable1['tb1_colunm2']; ?>-<?php } ?><?php echo $row_rstable1['tb1_colunm3']; ?>-<?php if ($row_rstable1['tb1_colunm3'] <= "2017") {
  echo $row_rstable1['tb1_colunm17'];
} else {
  echo $row_rstable1['table1_id'];
}
?>
</div></td>
    <td align="right" colspan="2">
    
<a href="add_document-action.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>&amp;tb2_colunm1=Document-Action"><img src="../images/b_plus.png" title="ADD NEW ACTION" alt="ADD NEW ACTION" /></a>
&nbsp;&nbsp;

<a <?php
if ($row_rstable1['tb1_colunm11'] == $_SESSION['MM_Username']) { ?>  
href="edit_document.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>"
<?php } else {}?>
 target="_blank"><img src="../images/b_edit.png" title="UPDATE" alt="UP" /></a>
&nbsp;&nbsp;

<a href="add_acknowledgement_receipt.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>"><img src="../images/b_save.png" title="Print Acknowledgement Receipt" alt="AR"/></a>
&nbsp;&nbsp;

<a href="upload_form.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>&tb1_colunm1=Document-Action"><img src="../images/drive_upload.png" title="UPLOAD" alt="UP" /></a>
&nbsp;&nbsp;

<a href="javascript:window.print()"><img src="../images/b_print.png" title="PRINT" alt="PR" /></a>
&nbsp;&nbsp;

<a href="add_document-action.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>&amp;tb2_colunm1=Document-Action&amp;barcoding=yes"><img src="../images/b_sbrowse.png" title="ADD NEW BARCODE" alt="ADD NEW BARCODE" /></a>
&nbsp;&nbsp;

<!--<a href="print_barcode.php?table1_id=<?php echo $clientalias ;?>4B-<?php echo date('y'); ?>-<?php echo $row_rstable1['table1_id']; ?>" target="_blank"><img src="../images/b_sbrowse.png" title="PRINT Barcode" alt="PR" /></a>
&nbsp;&nbsp;-->

<a href="print_documents_range.php?tb1_colunm3=<?php echo $row_rstable1['tb1_colunm3']; ?>&tb1_colunm2=<?php echo $row_rstable1['tb1_colunm2']; ?>&start_id=<?php echo $row_rstable1['tb1_colunm17']; ?>&end_id=<?php echo $row_rstable1['tb1_colunm17']; ?>&tb1_colunm1=Document-Tracking"><img src="../images/b_export.png" title="PRINT AS SUMMARY" alt="PS" /></a>
&nbsp;&nbsp;

<a href="javascript:history.back(-1)"><img src="../images/bd_prevpage.png" title="BACK" alt="BA" /></a>
&nbsp;&nbsp;

<a href="home.php"><img src="../images/b_home.png" title="HOME" alt="HOME" /></a>    
    </td>
    </tr>
  <tr>
    <td><div align="left">Originating Office</div></td>
    <td width="150"><div align="left"><?php if ($row_rstable1['tb1_colunm4'] == NULL) {echo $row_rstable1['tb1_colunm18'];} else {echo $row_rstable1['tb1_colunm4'];}?></div></td>
    <td><div align="left">Date Received: <?php if ($row_rstable1['tb1_colunm5'] == NULL) { 
		echo "N/A";
	}
  	else {
   		echo $newDate = date("d-M-Y", strtotime($row_rstable1['tb1_colunm5']));
	}
	?>
	
    <!--Elapsed Time --></div></td>
    <td width="160"><div align="left">Date Encoded: 
<?php if ($row_rstable1['tb1_colunm21'] == NULL) {
  echo date("d-M-Y", strtotime($row_rstable1['tb1_colunm5']));
}
  else {
    echo date("d-M-Y", strtotime($row_rstable1['tb1_colunm21']));
}
?>
    <br />
    <?php //echo humanTiming($time);?>
    <?php //echo date("h:i A");?>
    </div></td>
  </tr>
  <tr>
    <td><div align="left">Sender</div></td>
    <td colspan="3"><div align="left"><?php if ($row_rstable1['tb1_colunm6'] == NULL) {echo $row_rstable1['tb1_colunm18'];} else {echo $row_rstable1['tb1_colunm6'];}?></div></td>
    </tr>
    <tr>
    <td><div align="left">Address</div></td>
    <td colspan="3"><div align="left"><?php echo $row_rstable1['tb1_colunm18']; ?></div></td>
    </tr>
  <tr>
    <td><div align="left">Subject</div></td>
    <td colspan="3"><div align="left"><?php echo nl2br($row_rstable1['tb1_colunm7']); ?></div></td>
    </tr>
  <tr>
    <td><div align="left">Addressee</div></td>
    <td colspan="3"><div align="left"><?php echo $row_rstable1['tb1_colunm8']; ?></div></td>
    </tr>
  <tr>
    <td><div align="left">Document Type </div></td>
    <td colspan="3"><div align="left"><?php echo $row_rstable1['tb1_colunm9']; ?></div></td>
    </tr>
  <tr>
    <td><div align="left">Attachment(s)</div></td>
    <td colspan="3"><div align="left"><a href="<?php echo $row_rstable1['tb1_colunm10']; ?>"><?php echo nl2br($row_rstable1['tb1_colunm10']); ?></a></div></td>
    </tr>
<tr>
    <td><div align="left">Urgent</div></td>
    <td colspan="3"><div><?php echo $row_rstable1['tb1_colunm12']; ?> | <span style="align-content: right">
    Received by: <?php //echo $row_rstable1['tb1_colunm17']; ?></span> 
    
<?php if ($row_rstable1['tb1_colunm14']== NULL) {
  echo $row_rstable1['tb1_colunm11'];
}
  else {
    echo $row_rstable1['tb1_colunm14'];
}
?>

</div></td>
    </tr>
</table>
<table width="600" border="1" cellspacing="0" cellpadding="5" class="jermar">
  <tr>
    <td width="170"><div align="center" class="style15">Route/Date/Time<br />Received <?php $i=1; ?></div></td>
    <td width="170"><div align="center" class="style15">Released to/Date/Time<br />
      Released </div></td>
    <td width="240"><div align="center">Action Required/Taken Remarks/Status </div></td>
  </tr>
<?php if ($row_rstable1['tb1_colunm16'] == 'RECORDS' OR $row_rstable1['tb1_colunm16'] == 'RICTU') { ?>
<tr>
    <td><div class="style16"><?php echo $row_rstable1['tb1_colunm16']; ?> <?php echo $row_rstable1['tb1_colunm5']; ?> <br/>by <?php echo $row_rstable1['tb1_colunm11']; ?></div></td>
    <td><div class="style16"><?php if ($row_rstable1['tb1_colunm23'] == NULL) {
  echo $row_rstable1['tb1_colunm8'];
} else {
  echo $row_rstable1['tb1_colunm23'];
}
?> <?php echo $row_rstable1['tb1_colunm21']; ?></div></td>
    <td><div class="style16"><?php echo $row_rstable1['tb1_colunm9']; ?> forwarded for your information and appropriate action / <font color="#0000FF">OUT</font> / <?php echo $row_rstable1['tb1_colunm21']; ?></div></td>
  </tr>
<?php } else { ?>
<?php } ?>

<?php if ($row_rstable1['tb1_colunm3'] <= "2017") { ?>
	<?php do { ?>
    <tr>
    <?php if ($totalRows_rstable2arc > 0) { // Show if recordset not empty ?>
  <td><div align="left" class="style16">
    <?php echo $row_rstable2arc['tb2_colunm3']; ?><br /> <?php echo $row_rstable2arc['tb2_colunm4']; ?> / <?php echo $row_rstable2arc['tb2_colunm5']; ?> by <?php echo $row_rstable2arc['tb2_colunm11']; ?></div></td>
      <td><div align="left" class="style16">
          <?php echo $row_rstable2arc['tb2_colunm6']; ?> <?php echo $row_rstable2arc['tb2_colunm15']; ?> <?php echo $row_rstable2arc['tb2_colunm16']; ?> <?php echo $row_rstable2arc['tb2_colunm17']; ?> / <?php echo $row_rstable2arc['tb2_colunm7']; ?> / <?php echo $row_rstable2arc['tb2_colunm8']; ?></div></td>
      <td>
        <div align="left" class="style16"><?php echo nl2br($row_rstable2arc['tb2_colunm9']); ?><br /><font color="#0000FF">
<?php echo $row_rstable2arc['tb2_colunm10'] ?></font> / <?php echo $row_rstable2arc['tb2_colunm13']; ?> / <?php echo $row_rstable2arc['tb2_colunm14']; ?>
</div></td>
      <?php } // Show if recordset not empty ?>
  </tr>
  <?php } while ($row_rstable2arc = mysql_fetch_assoc($rstable2arc)); ?>
<?php } else { ?>
<?php } ?> 

  <?php do { ?>
  <tr>
    <?php if ($totalRows_rstable2 > 0) { // Show if recordset not empty ?>
  <td><div align="left" class="style16">
    <?php echo $row_rstable2['tb2_colunm3']; ?> <?php echo $row_rstable2['tb2_colunm4']; ?> <?php echo $row_rstable2['tb2_colunm5']; ?>
    <br />by <a <?php
if ($row_rstable2['tb2_colunm11'] == $_SESSION['MM_Username'] ) { ?>   
href="edit_document_action.php?table2_id=<?php echo $row_rstable2['table2_id']; ?>" title="Edit"  <?php } ?> ><?php echo $row_rstable2['tb2_colunm11']; ?> </a>
  </div></td>
      <td>
        <div align="left" class="style16">
          <?php echo $row_rstable2['tb2_colunm6']; ?> <?php echo $row_rstable2['tb2_colunm15']; ?> <?php echo $row_rstable2['tb2_colunm16']; ?> <?php echo $row_rstable2['tb2_colunm17']; ?> / <?php echo $row_rstable2['tb2_colunm7']; ?> / <?php echo $row_rstable2['tb2_colunm8']; ?></div></td>
      
      <td>
        <div align="left" class="style16">

<a href="<?php
if ($row_rstable2['tb2_colunm10'] == "Attachment") {
   echo $row_rstable2['tb2_colunm9'];
} else {
    echo "";
}
?>	
<?php echo $row_rstable2['tb2_colunm9']; ?>
"> 
<?php echo nl2br($row_rstable2['tb2_colunm9']); ?> <?php echo $row_rstable2['tb2_colunm20']; ?></a>
/ <font color="#0000FF">
<?php echo $row_rstable2['tb2_colunm10'] ?>
<?php $r=$i++; ?>
<?php
//if ($r != $lastrecord) {
//    echo "OUT";
//} else if ($r == $lastrecord) {
//    echo $row_rstable2['tb2_colunm10'];
//} else {
//    echo "ELSE";
//}
?>		  
</font> / <?php echo $row_rstable2['tb2_colunm13']; ?> / <?php echo $row_rstable2['tb2_colunm14']; ?>
</div></td>
      <?php } // Show if recordset not empty ?>
  </tr>
<?php } while ($row_rstable2 = mysql_fetch_assoc($rstable2)); ?>  
 
 <tr>
    <td height="450"></td>
    <td></td>
    <td></td>
  </tr>
  
</table>
</div>
<!-- Barcode -->
<script type="text/javascript" src="../plugins/barcode/jquery-min.js"></script>
<script type="text/javascript" src="../plugins/barcode/jquery-barcode.js"></script>
<script type="text/javascript">
    
      function generateBarcode(){
        var value = $("#barcodeValue").val();
        var btype = $("input[name=btype]:checked").val();
        var renderer = $("input[name=renderer]:checked").val();
        
		var quietZone = false;
        if ($("#quietzone").is(':checked') || $("#quietzone").attr('checked')){
          quietZone = true;
        }
		
        var settings = {
          output:renderer,
          bgColor: $("#bgColor").val(),
          color: $("#color").val(),
          barWidth: $("#barWidth").val(),
          barHeight: $("#barHeight").val(),
          moduleSize: $("#moduleSize").val(),
          posX: $("#posX").val(),
          posY: $("#posY").val(),
          addQuietZone: $("#quietZoneSize").val()
        };
        if ($("#rectangular").is(':checked') || $("#rectangular").attr('checked')){
          value = {code:value, rect: true};
        }
        if (renderer == 'canvas'){
          clearCanvas();
          $("#barcodeTarget").hide();
          $("#canvasTarget").show().barcode(value, btype, settings);
        } else {
          $("#canvasTarget").hide();
          $("#barcodeTarget").html("").show().barcode(value, btype, settings);
        }
      }
          
      function showConfig1D(){
        $('.config .barcode1D').show();
        $('.config .barcode2D').hide();
      }
      
      function showConfig2D(){
        $('.config .barcode1D').hide();
        $('.config .barcode2D').show();
      }
      
      function clearCanvas(){
        var canvas = $('#canvasTarget').get(0);
        var ctx = canvas.getContext('2d');
        ctx.lineWidth = 1;
        ctx.lineCap = 'butt';
        ctx.fillStyle = '#FFFFFF';
        ctx.strokeStyle  = '#000000';
        ctx.clearRect (0, 0, canvas.width, canvas.height);
        ctx.strokeRect (0, 0, canvas.width, canvas.height);
      }
      
      $(function(){
        $('input[name=btype]').click(function(){
          if ($(this).attr('id') == 'datamatrix') showConfig2D(); else showConfig1D();
        });
        $('input[name=renderer]').click(function(){
          if ($(this).attr('id') == 'canvas') $('#miscCanvas').show(); else $('#miscCanvas').hide();
        });
        generateBarcode();
      });
  
    </script>

</body>
</html>
<?php
mysql_free_result($rstable1);

mysql_free_result($rstable2);
?>
