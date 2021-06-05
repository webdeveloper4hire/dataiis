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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE table1 SET tb1_colunm24=%s WHERE table1_id=%s",
                       GetSQLValueString($_POST['tb1_colunm24'], "text"),
                       GetSQLValueString($_POST['table1_id'], "int"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($updateSQL, $connection) or die(mysql_error());
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO table2 (tb2_colunm1, tb2_colunm2, tb2_colunm3, tb2_colunm4, tb2_colunm5, tb2_colunm6, tb2_colunm7, tb2_colunm8, tb2_colunm9, tb2_colunm10, tb2_colunm11, tb2_colunm12, tb2_colunm13, tb2_colunm14, tb2_colunm15, tb2_colunm16, tb2_colunm17, tb2_colunm18, tb2_colunm19, tb2_colunm20, tb2_colunm21, tb2_colunm22, tb2_colunm23, tb2_colunm24, tb2_colunm25, tb2_colunm26, tb2_colunm27, tb2_colunm28, tb2_colunm29, tb2_colunm30) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['tb2_colunm1'], "text"),
                       GetSQLValueString($_POST['tb2_colunm2'], "text"),
                       GetSQLValueString($_POST['tb2_colunm3'], "text"),
                       GetSQLValueString($_POST['tb2_colunm4'], "text"),
                       GetSQLValueString($_POST['tb2_colunm5'], "text"),
                       GetSQLValueString($_POST['tb2_colunm6'], "text"),
                       GetSQLValueString($_POST['tb2_colunm7'], "text"),
                       GetSQLValueString($_POST['tb2_colunm8'], "text"),
                       GetSQLValueString($_POST['tb2_colunm9'], "text"),
                       GetSQLValueString($_POST['tb2_colunm10'], "text"),
                       GetSQLValueString($_POST['tb2_colunm11'], "text"),
                       GetSQLValueString($_POST['tb2_colunm12'], "text"),
                       GetSQLValueString($_POST['tb2_colunm13'], "text"),
                       GetSQLValueString($_POST['tb2_colunm14'], "text"),
                       GetSQLValueString($_POST['tb2_colunm15'], "text"),
                       GetSQLValueString($_POST['tb2_colunm16'], "text"),
                       GetSQLValueString($_POST['tb2_colunm17'], "text"),
                       GetSQLValueString($_POST['tb2_colunm18'], "text"),
                       GetSQLValueString($_POST['tb2_colunm19'], "text"),
                       GetSQLValueString($_POST['tb2_colunm20'], "text"),
                       GetSQLValueString($_POST['tb2_colunm21'], "text"),
                       GetSQLValueString($_POST['tb2_colunm22'], "text"),
                       GetSQLValueString($_POST['tb2_colunm23'], "text"),
                       GetSQLValueString($_POST['tb2_colunm24'], "text"),
                       GetSQLValueString($_POST['tb2_colunm25'], "text"),
                       GetSQLValueString($_POST['tb2_colunm26'], "text"),
                       GetSQLValueString($_POST['tb2_colunm27'], "text"),
                       GetSQLValueString($_POST['tb2_colunm28'], "text"),
                       GetSQLValueString($_POST['tb2_colunm29'], "text"),
                       GetSQLValueString($_POST['tb2_colunm30'], "text"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($insertSQL, $connection) or die(mysql_error());
  
  if ($_GET['barcoding'] == 'yes'){
	  	$insertGoTo = "redirect_document_print_barcode.php";
	  }  else {
    	$insertGoTo = "confirm_global.php";
	  }
  
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

$colname_rsuser = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_rsuser = $_SESSION['MM_Username'];
}
mysql_select_db($database_connection, $connection);
$query_rsuser = sprintf("SELECT * FROM users_tb WHERE username = %s", GetSQLValueString($colname_rsuser, "text"));
$rsuser = mysql_query($query_rsuser, $connection) or die(mysql_error());
$row_rsuser = mysql_fetch_assoc($rsuser);
$totalRows_rsuser = mysql_num_rows($rsuser);

mysql_select_db($database_connection, $connection);
$query_rstable1 = "SELECT * FROM table1 WHERE table1_id = ".$_GET['table1_id']."";
$rstable1 = mysql_query($query_rstable1, $connection) or die(mysql_error());
$row_rstable1 = mysql_fetch_assoc($rstable1);
$totalRows_rstable1 = mysql_num_rows($rstable1);
?>

<?php 
date_default_timezone_set("Asia/Hong_Kong"); 
?> 
<?php //require_once('head.php'); ?>
<?php //require_once('menu.php'); ?>
<?php require_once('head.php'); ?>
<?php require_once('menu.php'); ?>

<!-- Right side column. Contains the navbar and content of the page -->
            <div>

<div class="navbar-fixed-top body-title">    
	<h3 class="col-lg-10">
                        New Document Action <?php if ($_GET['barcoding'] == 'yes') { ?>Barcode<?php } ?>
                        <small><?php echo $clientalias ;?></small>
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
                                    <h3 class="box-title">Add <?php echo $_GET['tb2_colunm1'];?> Data</h3>
                                </div><!-- /.box-header -->

<p><form name="form1" action="<?php echo $editFormAction; ?>" method="POST" id="form1" role="form" onsubmit="return confirm('Are you sure?')">
                              <div class="form-group">
                                            <label><br /></label><input type="submit" value="Submit" class="btn denr-btn-primary" /> | <a href="javascript:history.back(-2)"><input type="button" value="Cancel"  class="btn denr-btn-primary" /></a></div>
                                <div class="form-group">
                                            <label>Status:</label>
                                            <select name="tb2_colunm10" class="form-control" required>
      <?php if ($_GET['barcoding'] == 'yes') { ?>
	  <option value="IN-BARCODED">IN-BARCODED</option>
      <option value="OUT-BARCODED" selected>OUT-BARCODED</option>
	  <?php } ?>
      <option value=""></option>
      <option value="IN">IN</option>
      <option value="OUT">OUT</option>
      <option value="IN/Yellow Lane">IN/Yellow Lane</option>
      <option value="OUT/Yellow Lane">OUT/Yellow Lane</option>
      <option value="IN/URGENT">IN/URGENT</option>
      <option value="OUT/URGENT">OUT/URGENT</option>
      <option value="IN/DUE">IN/DUE</option>
      <option value="OUT/DUE">OUT/DUE</option>
      <option value="ACCOMPLISHED">ACCOMPLISHED</option>
      <option value="UPLOADED">Uploaded</option>
      <option value="Others">Others</option>
      </select>
      							</div>
      							<div class="form-group">
                                            <label>Date Received:</label>
                                            <input type="date" name="tb2_colunm4" value="<?php //echo $row_rstable1['tb1_colunm5']; ?>" required />
                                            &nbsp;Time Received:
                                            <input type="time" name="tb2_colunm5" value="<?php //echo date("h:i A"); ?>" />
                                </div>
                                
                                <div class="form-group">
                                            <label><?php if ($_GET['barcoding'] == 'yes') { ?>Subject / Details / <?php } ?>Action / Remarks:</label>
                                             --<br />
                                    <?php if ($_GET['barcoding'] == 'yes') { ?>
                                    <input type="text" name="tb2_colunm9" value="" class="form-control"  size="60" list="signee" />
                                            <datalist id="signee">
                                                <option value="Signed by RED, Barcoded and Released">
                                                <option value="Signed by ARDMS as In-charge, ORD">
                                                <option value="Signed by ARDTS as In-charge, ORD">
                                                <option value="Signed by In-Charge Division Chief">
											</datalist>
									<?php } else { ?>
                                    <textarea name="tb2_colunm9" rows="3" cols="30" class="form-control"  ><?php echo $_GET['tb2_colunm3']; ?></textarea><?php } ?>
                                    </div>
                                <div class="form-group">
                                            <label>Action Date:</label>
                                            <input type="date" name="tb2_colunm13" value="<?php echo date("Y-m-d"); ?>" required />
                                  			&nbsp;Action Time: <input type="time" name="tb2_colunm14" value="<?php echo date("h:i A"); ?>" /></div>
                                
                                <div class="form-group">
                                            <label><?php if ($_GET['barcoding'] == 'yes') { ?>Source Office<?php } else { ?>Released to #1<?php } ?>:</label>
                                            <input type="text" name="tb2_colunm6" value="<?php echo $row_rstable1['tb1_colunm4']; ?>" class="form-control"  size="60" placeholder="select or type input here" required list="offices" />
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
                                            <label>Released to #2:</label>
                                            <input type="text" name="tb2_colunm15" value="" class="form-control"  size="60" placeholder="Optional" list="offices" />
                                            </div>
                                <div class="form-group">
                                            <label>Released to #3:</label>
                                            <input type="text" name="tb2_colunm16" value="" class="form-control"  size="60" placeholder="Optional" list="offices" /></div>
                                <div class="form-group">
                                            <label>Released to #4:</label>
                                            <input type="text" name="tb2_colunm17" value="" class="form-control"  size="60" placeholder="Optional" list="offices" /></div>
                                <div class="form-group">
                                            <label>Date Released:</label>
                                            <input type="date" name="tb2_colunm7" value="<?php echo date("Y-m-d"); ?>" />
                                            &nbsp;Time Released:
                                            <input type="time" name="tb2_colunm8" value="<?php echo date("h:i A"); ?>" /></div>
                                <div class="form-group">
                                            <label>&nbsp;</label>
                                            &nbsp;</div>
                                <div class="form-group">
                                            <label>Author:</label>
                                            <input type="text" name="tb2_colunm11" value="<?php echo $_SESSION['MM_Username']; ?>" class="form-control"  size="60" readonly />
                                </div>
                                <div class="form-group">
                                            <label>Route to:</label>
                                            <input type="text" name="tb2_colunm3" value="<?php if ($row_rsuser['division'] == NULL) {echo $row_rsuser['details'];} else {echo $row_rsuser['division'];}?>" class="form-control"  size="60" readonly />
                                </div>
                                <div class="form-group">
                                            <label>Recently Accesses by:</label>
                                            <input type="text" name="tb2_colunm12" value="<?php echo $_SESSION['MM_Username']; ?>" class="form-control"  size="60" readonly />
                                </div>
                                <?php if ($_GET['barcoding'] == 'yes') { ?>
                                <div class="form-group">
                                            <label>BARCODE Number:</label>
                                            <input type="text" name="tb2_colunm18" value="<?php echo $clientalias ;?>4B<?php echo date('y'); ?><?php echo $_GET['table1_id'];?>" class="form-control"  size="60" />															                                </div>
                                <div class="form-group">           
                                            <label>Document Type:</label>
                                            <input type="text" name="tb2_colunm19" value="<?php echo $row_rstable1['tb1_colunm9']; ?>" class="form-control" list="doctype"  size="60" />
                                <datalist id="doctype">
                                  <option value="Acceptance of Optional Retirement">
                                  <option value="Approval Sheet">
                                  <option value="Cancellation Order">
                                  <option value="Certificate of Accreditation">
                                  <option value="Certification">
                                  <option value="Complaint/Cert of Non Forum Shopping">
                                  <option value="Completed Staff Work">
                                  <option value="Confiscation Order">
                                  <option value="Contract">
                                  <option value="Decision">
                                  <option value="Email for Transmision">
                                  <option value="Email Message for Transmission">
                                  <option value="Export Autority">
                                  <option value="Outgoing Fax">
                                  <option value="Final Notice to Vacate">
                                  <option value="Formal Charge">
                                  <option value="Ground Water Permit">
                                  <option value="Issuance of Patent">
                                  <option value="Outgoing Letter">
                                  <option value="Outgoing Memorandum">
                                  <option value="Memorandum Circular">
                                  <option value="Memorandum for the Secretary">
                                  <option value="Notice of Award">
                                  <option value="Notice to Proceed">
                                  <option value="Notice to Vacate">
                                  <option value="Order">
                                  <option value="Order of Award">
                                  <option value="Order of Finality">
                                  <option value="Order of Investigation">
                                  <option value="Order of Suspension">
                                  <option value="Permanent Release Order">
                                  <option value="Permit">
                                  <option value="Permit to Study">
                                  <option value="Private Land Timber Permit">
                                  <option value="Rattan Cutting Contract">
                                  <option value="Rattan Cutting Plan">
                                  <option value="Records of Attendance">
                                  <option value="Regional Memorandum Order">
                                  <option value="Regional Special Order">
                                  <option value="Resolution">
                                  <option value="Show Cause Order">
                                  <option value="Show-Cause Memorandum">
                                  <option value="Special Land Use Permit">
                                  <option value="Special Tree Cutting Permit">
                                  <option value="Spl Private Land Timber Permit">
                                  <option value="Survey Order">
                                  <option value="Tree Cutting Permit">
                                  <option value="Wildlife Collector's Permit">
                                  <option value="Wildlife Export Certification">
                                  <option value="Wildlife Farm Permit">
                                  <option value="Wildlife Gratuitous Permit">
                                  <option value="Wildlife Import Certification">
                                  <option value="Writ of Execution">
                                  </datalist>
                                </div>
                                <div class="form-group">
                                            <label>Recipient:</label>
                                            <input type="text" name="tb2_colunm20" value="<?php echo $row_rstable1['tb1_colunm8']; ?>" class="form-control"  size="60" />
                                </div>
                                <?php } ?>
                                <div class="form-group">
                                            <label>Database:</label>
                                            <input type="text" name="tb2_colunm1" value="<?php echo $_GET['tb2_colunm1'];?>" class="form-control"  size="60" readonly />
                                </div>
                                <div class="form-group">
                                            <label>Document ID:</label>
                                            <input type="text" name="tb2_colunm2" value="<?php echo $_GET['table1_id'];?>" class="form-control"  size="60" readonly />
                                </div>
                                
                                <!--
                                <div class="form-group">
                                            <label>Colunm21:</label>
                                            <input type="text" name="tb2_colunm21" value="" class="form-control"  size="60" /></div>
                                <div class="form-group">
                                            <label>Colunm22:</label>
                                            <input type="text" name="tb2_colunm22" value="" class="form-control"  size="60" /></div>
                                <div class="form-group">
                                            <label>Colunm23:</label>
                                            <input type="text" name="tb2_colunm23" value="" class="form-control"  size="60" /></div>
                                <div class="form-group">
                                            <label>Colunm25:</label>
                                            <input type="text" name="tb2_colunm25" value="" class="form-control"  size="60" /></div>
                                <div class="form-group">
                                            <label>Colunm26:</label>
                                            <input type="text" name="tb2_colunm26" value="" class="form-control"  size="60" /></div>
                                <div class="form-group">
                                            <label>Colunm27:</label>
                                            <input type="text" name="tb2_colunm27" value="" class="form-control"  size="60" /></div>
                                <div class="form-group">
                                            <label>Colunm28:</label>
                                            <input type="text" name="tb2_colunm28" value="" class="form-control"  size="60" /></div>
                                <div class="form-group">
                                            <label>Colunm29:</label>
                                            <input type="text" name="tb2_colunm29" value="" class="form-control"  size="60" /></div>
                                <div class="form-group">
                                            <label>Colunm30:</label>
                                            <input type="text" name="tb2_colunm30" value="" class="form-control"  size="60" /></div>
                                -->
                                <div class="form-group">
                                            <label>&nbsp;</label>
                                            <input type="submit" value="Submit"  class="btn denr-btn-primary" />  | <a href="javascript:history.back(-2)"><input type="button" value="Cancel"  class="btn denr-btn-primary" /></a></div>
                              <input type="hidden" name="table1_id" value="<?php echo $row_rstable1['table1_id']; ?>" />
                              <input type="hidden" name="tb1_colunm24" value="ACTION-TAKEN" />
                              <input type="hidden" name="MM_insert" value="form1" />
                              <input type="hidden" name="MM_update" value="form1" />
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
mysql_free_result($rsuser);

mysql_free_result($rstable1);
?>
