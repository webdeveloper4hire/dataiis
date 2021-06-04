<?php require_once('../Connections/connection.php'); ?>
<?php require_once('access_dats.php'); ?>
<?php date_default_timezone_set("Asia/Hong_Kong"); ?>
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
    	$insertGoTo = "confirm_global.php";
	  }
  
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

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
<?php require_once('head.php'); ?>
<?php require_once('menu.php'); ?>

<!-- Right side column. Contains the navbar and content of the page -->
            <div>

<div class="navbar-fixed-top body-title">    
	<h3 class="col-lg-10">
                        New Document <?php if ($_GET['barcoding'] == 'yes') { ?>Barcode<?php } ?>
                        <small>DENR</small>
                    </h3>
</div></li>
      </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                      <div class="col-md-6">
                            <!-- general form elements -->
                        <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"><?php echo $row_rslastid['tb1_colunm2']; ?> <?php echo $row_rslastid['tb1_colunm3']; ?> <?php echo $row_rslastid['table1_id']; ?></h3>
                                </div><!-- /.box-header -->
                                
<?php if ($totalRows_rstable1 > 0) { // Show if recordset not empty ?>
<p><img src="../images/warning_gif.gif" /></p>
<h3 class="box-title">Subject has a potential match: <a href="#" onclick="toggle_visibility('list1');">View possible items</a></h3>

<div id="list1" style="display:none;">
<ul>
  <?php do { ?>
    <li><a href="print_document.php?table1_id=<?php echo $row_rstable1['table1_id']; ?>" rel="facebox"><?php echo $row_rstable1['tb1_colunm7']; ?></a></li>
    <?php } while ($row_rstable1 = mysql_fetch_assoc($rstable1)); ?>
</ul>
</div>
<?php } // Show if recordset not empty ?>
                                <!-- form start -->
 
<form action="<?php echo $editFormAction; ?>" method="post" id="form1" role="form" onsubmit="return confirm('Are you sure?')">
              <div class="form-group">
                                            <label>&nbsp;</label>
                                            <input type="submit" value="Submit"  class="btn denr-btn-primary" /> | <a href="javascript:history.back(-2)"><input type="button" value="Cancel"  class="btn denr-btn-primary" /></a></div>
                                        <div class="form-group">
                                            <label>Database:</label>
                                            <input type="text" name="tb1_colunm1" value="Document-Tracking" class="form-control"  size="60" readonly /></div>
                                        <div class="form-group">
                                            <label>Office:</label>
                                            <input type="text" name="tb1_colunm19" value="MIMAROPA Region" class="form-control" size="60" readonly /></div>
                                        
                                        <div class="form-group">
                                            <label>Category:</label>
                                  <select name="tb1_colunm2" class="form-control">
                                  <option value="E"></option>
                                  <option value="E">Email</option>
                                  <option value="CO">Central Office</option>
                                  <option value="P">PENRO</option>
                                  <option value="C">CENRO</option>
                                  <option value="B">Bureau</option>
                                  <option value="LRC">LRC</option>
                                  <option value="I">Internal</option>
                                  <option value="OG">Outgoing</option>
                                  <?php if ($_GET['barcoding'] == 'yes') { ?><option value="OB" selected>Outgoing/Barcoded</option><?php } ?>
                                  <option value="0">Others</option>
                                  </select>
                                  </div>
                                        <div class="form-group">
                                            <label>Year:</label>
                                            <input type="text" name="tb1_colunm3" value="<?php echo date("Y"); ?>" class="form-control"  size="60" /></div>
                                        <div class="form-group">
                                            <label><?php if ($_GET['barcoding'] == 'yes') { ?>Source / <?php } ?>Originating Office:</label>
                                            <input type="text" name="tb1_colunm4" value="" class="form-control"  size="60" required <?php if ($_GET['barcoding'] == 'yes') { ?>list="offices"<?php } ?> />
                                            <datalist id="offices">
<option value="">Select</option>
<option value="Office of the Regional Executive Director">
<option value="NGP-Coordinator">
<option value="Regional Public Affairs Office">
<option value="Asst-Regional Director-Technical Services">
<option value="Licenses Patents and Deeds Division">
<option value="Surveys and Mapping Division">
<option value="Conservation and Development Division">
<option value="Enforcement Division">
<option value="Asst-Regional Director-Management Services">
<option value="Legal-Division">
<option value="Planning and Management Division">
<option value="Administrative-Division">
<option value="Finance-Division">
<option value="MGB-MIMA">
<option value="EMB-MIMA">
<option value="HRD Section">
<option value="Records Section">
<option value="Regional ICT Unit">
<!--<option value="Manila Bay Coordinating Office">
<option value="Priority Programs Coordination Office">
<option value="PASu">
<option value="RTDE">
<option value="RTDF">
<option value="RTDL">
<option value="RTDP">-->
                                                </datalist></div>
                                        <div class="form-group">
                                            <label>Date Received:<?php if ($_GET['barcoding'] == 'yes') { ?> / Signed<?php } ?>:</label>
                                            <input type="date" name="tb1_colunm5" value="<?php echo date("Y-m-d"); ?>" /></div>
                                        <div class="form-group">
                                            <label>Sender:</label>
                                            <input type="text" name="tb1_colunm6" value="<?php if ($_GET['barcoding'] == 'yes') { ?>Henry A. Adornado, Ph.D<?php } ?>" class="form-control"  size="60" /></div>
                                        <div class="form-group">
                                            <label>Sender's Address:</label>
                                            <input type="text" name="tb1_colunm18" value="<?php
												if ($_GET['barcoding'] == 'yes') { ?>1515 L&S Bldg., Roxas Blvd., Ermita, Manila<?php } ?>" class="form-control"  size="60" /></div>
                                        <div class="form-group">
                                            <label>Subject:</label>
                                  <textarea name="tb1_colunm7" rows="5" cols="30" class="form-control"  ><?php echo $_GET['tb1_colunm7']; ?></textarea>
                                  
                                </div>
                                        <div class="form-group">
                                            <label><?php if ($_GET['barcoding'] == 'yes') { ?>Recipient / <?php } ?>Addresee:</label>
                                            <input type="text" name="tb1_colunm8" value="" class="form-control"  size="60" /></div>
                                        <div class="form-group">
                                            <label>Document Type:</label>
                                            <select name="tb1_colunm9" class="form-control">
                                  <option value="" selected></option>
                                  <option value="Letter">Letter</option>
                                  <option value="Request">Request</option>
                                  <option value="Memorandum">Memorandum</option>
                                  <option value="Fax">Fax</option>
                                  <option value="Report">Report</option>
                                  <option value="Others">Others</option>
                                  <?php if ($_GET['barcoding'] == 'yes') { ?>
                                  <option value="">---Options below is for Barcoding only---</option>
                                  <option value="Acceptance of Optional Retirement">Acceptance of Optional Retirement<strong></strong></option>
                                  <option value="Approval Sheet">Approval Sheet</option>
                                  <option value="Cancellation Order">Cancellation Order</option>
                                  <option value="Certificate of Accreditation">Certificate of Accreditation</option>
                                  <option value="Certification">Certification</option>
                                  <option value="Complaint/Cert of Non Forum Shopping">Complaint/Cert of Non Forum Shopping</option>
                                  <option value="Completed Staff Work">Completed Staff Work</option>
                                  <option value="Confiscation Order">Confiscation Order</option>
                                  <option value="Contract">Contract</option>
                                  <option value="Decision">Decision</option>
                                  <option value="Email for Transmision">Email for Transmision</option>
                                  <option value="Email Message for Transmission">Email Message for Transmission</option>
                                  <option value="Export Autority">Export Autority</option>
                                  <option value="Outgoing Fax">Outgoing Fax</option>
                                  <option value="Final Notice to Vacate">Final Notice to Vacate</option>
                                  <option value="Formal Charge">Formal Charge</option>
                                  <option value="Ground Water Permit">Ground Water Permit</option>
                                  <option value="Issuance of Patent">Issuance of Patent</option>
                                  <option value="Outgoing Letter">Outgoing Letter</option>
                                  <option value="Outgoing Memorandum">Outgoing Memorandum</option>
                                  <option value="Memorandum Circular">Memorandum Circular</option>
                                  <option value="Memorandum for the Secretary">Memorandum for the Secretary</option>
                                  <option value="Notice of Award">Notice of Award</option>
                                  <option value="Notice to Proceed">Notice to Proceed</option>
                                  <option value="Notice to Vacate">Notice to Vacate</option>
                                  <option value="Order">Order</option>
                                  <option value="Order of Award">Order of Award</option>
                                  <option value="Order of Finality">Order of Finality</option>
                                  <option value="Order of Investigation">Order of Investigation</option>
                                  <option value="Order of Suspension">Order of Suspension</option>
                                  <option value="Permanent Release Order">Permanent Release Order</option>
                                  <option value="Permit">Permit</option>
                                  <option value="Permit to Study">Permit to Study</option>
                                  <option value="Private Land Timber Permit">Private Land Timber Permit</option>
                                  <option value="Rattan Cutting Contract">Rattan Cutting Contract</option>
                                  <option value="Rattan Cutting Plan">Rattan Cutting Plan</option>
                                  <option value="Records of Attendance">Records of Attendance</option>
                                  <option value="Regional Memorandum Order">Regional Memorandum Order</option>
                                  <option value="Regional Special Order">Regional Special Order</option>
                                  <option value="Resolution">Resolution</option>
                                  <option value="Show Cause Order">Show Cause Order</option>
                                  <option value="Show-Cause Memorandum">Show-Cause Memorandum</option>
                                  <option value="Special Land Use Permit">Special Land Use Permit</option>
                                  <option value="Special Tree Cutting Permit">Special Tree Cutting Permit</option>
                                  <option value="Spl Private Land Timber Permit">Spl Private Land Timber Permit</option>
                                  <option value="Survey Order">Survey Order</option>
                                  <option value="Tree Cutting Permit">Tree Cutting Permit</option>
                                  <option value="Wildlife Collectors Permit">Wildlife Collectors Permit</option>
                                  <option value="Wildlife Export Certification">Wildlife Export Certification</option>
                                  <option value="Wildlife Farm Permit">Wildlife Farm Permit</option>
                                  <option value="Wildlife Gratuitous Permit">Wildlife Gratuitous Permit</option>
                                  <option value="Wildlife Import Certification">Wildlife Import Certification</option>
                                  <option value="Writ of Execution">Writ of Execution</option>
                                  <?php } ?>
                                  </select>
                                  </div>
                                        <div class="form-group">
                                            <label>Attachment Description:</label>
                                  --<br />
                                  <textarea  name="tb1_colunm10" rows="3" cols="30" class="form-control" placeholder="<?php if ($_GET['barcoding'] == NULL) { ?>Example: Memo dtd <?php echo date("M d, Y"); ?> , photos, email, report, fax message, etc <?php } ?>"></textarea>
                                  </div>
                                        <div class="form-group">
                                            <label>Urgent/Prioroty:</label>
                                            Yes <input type="radio" name="tb1_colunm12" value="Yes" />
                                            No <input type="radio" name="tb1_colunm12" value="No" checked="checked" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Received By:</label>
                                            <input type="text" name="tb1_colunm14" value="<?php if ($_GET['barcoding'] == 'yes') { echo $_SESSION['MM_Username']; } ?>" class="form-control"  size="60" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Date Encoded:</label>
                                            <input type="date" name="tb1_colunm21" value="<?php echo date('Y-m-d'); ?>" class="form-control"  size="60" required readonly />
                                        </div>
                                        <div class="form-group">
                                            <label>Referred By:</label>
                                            <input type="text" name="tb1_colunm15" value="" class="form-control"  size="60" />
                                        </div>
                                        <div class="form-group">
                                            <label>Referred To:</label>
                                            <input type="text" name="tb1_colunm23" value="" class="form-control"  size="60" required list="offices" />
                                            <datalist id="offices">
<option value="Office of the Regional Executive Director">
<option value="NGP-Coordinator">
<option value="Regional Public Affairs Office">
<option value="Asst-Regional Director-Technical Services">
<option value="Licenses Patents and Deeds Division">
<option value="Surveys and Mapping Division">
<option value="Conservation and Development Division">
<option value="Enforcement Division">
<option value="Asst-Regional Director-Management Services">
<option value="Legal-Division">
<option value="Planning and Management Division">
<option value="Administrative-Division">
<option value="Finance-Division">
<option value="MGB-MIMA">
<option value="EMB-MIMA">
<option value="HRD Section">
<option value="Records Section">
<option value="Regional ICT Unit">
<!--<option value="Manila Bay Coordinating Office">MBCO</option>
<option value="Priority Programs Coordination Office">
<option value="PASu">PASu</option>
<option value="RTDE">RTD ERDS</option>
<option value="RTDF">RTD Forestry</option>
<option value="RTDL">RTD Lands</option>
<option value="RTDP">RTD PAWCZMS</option>-->
                                                </datalist>
                                        </div>
                                        <div class="form-group">
                                            <label>FOI:</label>
                                            Yes <input type="radio" name="tb1_colunm22" value="Y" required  />
                                            No <input type="radio" name="tb1_colunm22" value="N" required  <?php if ($_GET['barcoding'] == 'yes') { ?>checked<?php } ?>/><br />
                                            <p><a href="../assets/malayang-pagkuha-ng-impormasyon.pdf" target="_blank">What is FOI?</a></p>
                                        </div>
                                        
                                        
                                 
                                <div class="form-group">
                                            <label>&nbsp;</label>
                                            <input type="submit" value="Submit"  class="btn denr-btn-primary" />  | <a href="javascript:history.back(-2)"><input type="button" value="Cancel"  class="btn denr-btn-primary" /></a>
                                </div>
                                <div class="form-group" style="visibility: hidden">
                                            <label>Document No.</label>
                                            <textarea id="refresh" name="tb1_colunm17" rows="1" class="form-control" required readonly></textarea>
                                            <input type="text" name="tb1_colunm11" value="<?php echo $_SESSION['MM_Username']; ?>" />
                                            <input type="text" name="tb1_colunm13" value="<?php echo $_SESSION['MM_Username']; ?>" />
                                            <input type="text" name="tb1_colunm16" value="<?php echo $row_rsuser['details']; ?>" />
                                            <input type="text" name="barcoding" value="<?php echo $_GET['barcoding']; ?>" />
                                            <input type="text" name="tb1_colunm20" value="<?php echo date("h:i A"); ?>" />
                                            <input type="text" name="tb1_colunm24" value="pending" />
                                </div>
                                            
                                            <input type="hidden" name="MM_insert" value="form1" />
                          </form>
                             
                           </div><!-- /.box -->

                          <!-- Form Element sizes --><!-- /.box --><!-- /.box -->

                          <!-- Input addon --><!-- /.box -->

                        </div><!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-6">
                            <!-- general form elements disabled --><!-- /.box -->
                        </div><!--/.col (right) -->
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
mysql_free_result($rstable1);
?>
