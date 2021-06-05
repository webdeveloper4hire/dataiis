<?php require_once('../Connections/connection.php'); ?>
<?php require_once('config.php'); ?>
<?php require_once('access_admin.php'); ?>
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO table1 (tb1_colunm1, tb1_colunm2, tb1_colunm3, tb1_colunm4, tb1_colunm5, tb1_colunm6, tb1_colunm7, tb1_colunm8, tb1_colunm9, tb1_colunm10, tb1_colunm11, tb1_colunm12, tb1_colunm13, tb1_colunm14, tb1_colunm15, tb1_colunm16, tb1_colunm17, tb1_colunm18, tb1_colunm19, tb1_colunm20, tb1_colunm21, tb1_colunm22, tb1_colunm23, tb1_colunm24, tb1_colunm25, tb1_colunm26, tb1_colunm27, tb1_colunm28, tb1_colunm29, tb1_colunm30) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['tb1_colunm1'], "text"),
                       GetSQLValueString($_POST['tb1_colunm2'], "text"),
                       GetSQLValueString($_POST['tb1_colunm3'], "text"),
                       GetSQLValueString($_POST['tb1_colunm4'], "text"),
                       GetSQLValueString($_POST['tb1_colunm5'], "text"),
                       GetSQLValueString($_POST['tb1_colunm6'], "text"),
                       GetSQLValueString($_POST['tb1_colunm7'], "text"),
                       GetSQLValueString($_POST['tb1_colunm8'], "text"),
                       GetSQLValueString($_POST['tb1_colunm9'], "text"),
                       GetSQLValueString($_POST['tb1_colunm10'], "text"),
                       GetSQLValueString($_POST['tb1_colunm11'], "text"),
                       GetSQLValueString($_POST['tb1_colunm12'], "text"),
                       GetSQLValueString($_POST['tb1_colunm13'], "text"),
                       GetSQLValueString($_POST['tb1_colunm14'], "text"),
                       GetSQLValueString($_POST['tb1_colunm15'], "text"),
                       GetSQLValueString($_POST['tb1_colunm16'], "text"),
                       GetSQLValueString($_POST['tb1_colunm17'], "text"),
                       GetSQLValueString($_POST['tb1_colunm18'], "text"),
                       GetSQLValueString($_POST['tb1_colunm19'], "text"),
                       GetSQLValueString($_POST['tb1_colunm20'], "text"),
                       GetSQLValueString($_POST['tb1_colunm21'], "text"),
                       GetSQLValueString($_POST['tb1_colunm22'], "text"),
                       GetSQLValueString($_POST['tb1_colunm23'], "text"),
                       GetSQLValueString($_POST['tb1_colunm24'], "text"),
                       GetSQLValueString($_POST['tb1_colunm25'], "text"),
                       GetSQLValueString($_POST['tb1_colunm26'], "text"),
                       GetSQLValueString($_POST['tb1_colunm27'], "text"),
                       GetSQLValueString($_POST['tb1_colunm28'], "text"),
                       GetSQLValueString($_POST['tb1_colunm29'], "text"),
                       GetSQLValueString($_POST['tb1_colunm30'], "text"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($insertSQL, $connection) or die(mysql_error());
  
  if ($_GET['barcoding'] == 'yes'){
	  	$insertGoTo = "redirect_add_document_barcode.php?barcoding=yes";
	  }  else {
    	$insertGoTo = "confirm_email.php";
	  }
  
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

$colname_rslastid = "-1";
if (isset($_GET['tb1_colunm1'])) {
  $colname_rslastid = $_GET['tb1_colunm1'];
}
mysql_select_db($database_connection, $connection);
$query_rslastid = sprintf("SELECT * FROM table1 WHERE tb1_colunm1 = %s ORDER BY table1_id DESC", GetSQLValueString($colname_rslastid, "text"));
$rslastid = mysql_query($query_rslastid, $connection) or die(mysql_error());
$row_rslastid = mysql_fetch_assoc($rslastid);
$totalRows_rslastid = mysql_num_rows($rslastid);

$maxRows_rstable1 = 5;
$pageNum_rstable1 = 0;
if (isset($_GET['pageNum_rstable1'])) {
  $pageNum_rstable1 = $_GET['pageNum_rstable1'];
}
$startRow_rstable1 = $pageNum_rstable1 * $maxRows_rstable1;

mysql_select_db($database_connection, $connection);
$query_rstable1 = "SELECT *,MATCH (tb1_colunm7) AGAINST ('" . $_GET['tb1_colunm7'] . "') as relevance FROM `table1` WHERE MATCH (tb1_colunm7) AGAINST ('" . $_GET['tb1_colunm7'] . "')";
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

$colname_rsuser = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_rsuser = $_SESSION['MM_Username'];
}
mysql_select_db($database_connection, $connection);
$query_rsuser = sprintf("SELECT * FROM users_tb WHERE username = %s", GetSQLValueString($colname_rsuser, "text"));
$rsuser = mysql_query($query_rsuser, $connection) or die(mysql_error());
$row_rsuser = mysql_fetch_assoc($rsuser);
$totalRows_rsuser = mysql_num_rows($rsuser);

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
date_default_timezone_set("Asia/Hong_Kong"); 
?>
<?php require_once('head.php'); ?>
<?php require_once('menu.php'); ?>

<!-- Right side column. Contains the navbar and content of the page -->
<div>

<div class="navbar-fixed-top body-title">    
	<h3 class="col-lg-10">
      New Email
      <small><?php echo $clientalias ;?></small>
    </h3>
</div>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                      <div class="col-md-6">
                            <!-- general form elements -->
                        <div class="box box-primary">                          

                                <!-- form start -->
<p><a href="print_emails_date.php?tb1_colunm1=Document-Tracking&category=E&date=<?php echo date('Y-m-d'); ?>"><button type="submit"  class="btn denr-btn-primary">Print Summary</button></a></p>

<form action="<?php echo $editFormAction; ?>" method="post" id="form1" role="form" onsubmit="return confirm('Continue?')">
              
                                                                                   
                                  <div class="form-group">
                                  <label>Subject:</label>
                                  <input type="text" name="tb1_colunm7" value="" class="form-control" size="60" />
                                  </div>
                                  <div class="form-group">
                                            <label>Email address of sender:</label>
                                            <input type="text" name="tb1_colunm18" value="" class="form-control" size="60" />
                                            </div>
                                            <div class="form-group">
                                            <label>To / Addressee / For:</label>
                                            <input type="text" name="tb1_colunm8" value="" placeholder="Click here to see options" class="form-control"  size="60" required list="offices" />
                                            <datalist id="offices">
<option value="ORED">
<option value="ARDMS">
<option value="ARDTS">
<option value="LPDD">
<option value="SMD">
<option value="CDD">
<option value="ED">
<option value="LD">
<option value="PMD">
<option value="AD">
<option value="FD">
<option value="NGP">
<option value="RSCIG">
<option value="MGB-MIMA">
<option value="EMB-MIMA">
<!--<option value="HRD Section">
<option value="Records Section">
<option value="Regional ICT Unit">
<option value="Manila Bay Coordinating Office">MBCO</option>
<option value="Priority Programs Coordination Office">
<option value="PASu">PASu</option>
<option value="RTDE">RTD ERDS</option>
<option value="RTDF">RTD Forestry</option>
<option value="RTDL">RTD Lands</option>
<option value="RTDP">RTD PAWCZMS</option>-->
                                                </datalist>
                                            </div>
                                            <div class="form-group">
                                            <label>Attachment Directory Example: upload/emails/foldername/</label>
                                            <input type="text" name="tb1_colunm10" value="upload/emails/" placeholder="upload/emails/foldername/" class="form-control" size="60" /><br />
                                            <em>Note:<a href="../assets/upload-multiple.jpg" rel="facebox" title="Click here to enlarge image">Please refer to the instruction here</a>, otherwise attachments will not be accessible to end users</em>
                                            
                                  </div>
                                  <div class="form-group">
                                            <label>Date Received:</label>
                                            <input type="date" name="tb1_colunm5" value="<?php echo date("Y-m-d"); ?>" />
                                  </div>
                                               
                                <div class="form-group">
                                            <label>&nbsp;</label>
                                            <input type="submit" value="Submit"  class="btn denr-btn-primary" />
                                </div>
                                
                                <div class="form-group" style="visibility: hidden">
                                            <input type="text" name="tb1_colunm1" value="Document-Tracking" />
                                            <input type="text" name="tb1_colunm2" value="E" class="form-control" />
                                            <input type="text" name="tb1_colunm3" value="<?php echo date("Y"); ?>" />
                                            <input type="text" name="tb1_colunm4" value="" />
                                            <input type="text" name="tb1_colunm6" value="" />
                                            <input type="text" name="tb1_colunm9" value="Email" />
                                            <input type="text" name="tb1_colunm11" value="<?php echo $_SESSION['MM_Username']; ?>" />
                                            <input type="text" name="tb1_colunm12" value="No" />
                                            <input type="text" name="tb1_colunm13" value="<?php echo $_SESSION['MM_Username']; ?>" />
                                            <input type="text" name="tb1_colunm14" value="<?php echo $_SESSION['MM_Username'];?>" />
                                            <input type="text" name="tb1_colunm15" value="<?php echo $_SESSION['MM_Username'];?>" />
                                            <input type="text" name="tb1_colunm16" value="<?php if ($row_rsuser['division'] == NULL) {
                                              echo $row_rsuser['details'];
                                            } else {
                                              echo $row_rsuser['division'];
                                            }
                                            ?><?php echo $row_rsuser['division']; ?>" />
                                            <input type="text" name="tb1_colunm17" value="" id="refresh" />
                                            <input type="text" name="tb1_colunm19" value="<?php echo $clientbranch;?>" />
                                            <input type="text" name="tb1_colunm20" value="<?php echo date("h:i A"); ?>" />
                                            <input type="text" name="tb1_colunm21" value="<?php echo date('Y-m-d'); ?>" />
                                            <input type="text" name="tb1_colunm22" value="N" />
                                            <input type="text" name="tb1_colunm23" value="" />
                                            <input type="text" name="tb1_colunm24" value="ONGOING" />
                                            <input type="text" name="barcoding" value="<?php echo $_GET['barcoding']; ?>" />    
                                </div>
                                            
<input type="hidden" name="MM_insert" value="form1" />
                          </form>
                             
                           </div><!-- /.box -->

                          <!-- Form Element sizes --><!-- /.box --><!-- /.box -->

                          <!-- Input addon --><!-- /.box -->

                        </div><!--/.col (left) -->
                        <!-- right column -->
                     
                    </div>   <!-- /.row -->

<script type="text/javascript">
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
</script>                             
<?php require_once('footer.php'); ?>
<?php
mysql_free_result($rslastid);

mysql_free_result($rstable1);
?>