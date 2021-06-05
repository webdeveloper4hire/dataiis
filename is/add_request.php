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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO table1 (table1_id, tb1_colunm1, tb1_colunm2, tb1_colunm3, tb1_colunm4, tb1_colunm5, tb1_colunm6, tb1_colunm7, tb1_colunm8, tb1_colunm9, tb1_colunm10, tb1_colunm11, tb1_colunm12, tb1_colunm13, tb1_colunm14, tb1_colunm15, tb1_colunm16, tb1_colunm17, tb1_colunm18, tb1_colunm19, tb1_colunm20, tb1_colunm21, tb1_colunm22, tb1_colunm23, tb1_colunm24, tb1_colunm25, tb1_colunm26, tb1_colunm27, tb1_colunm28, tb1_colunm29, tb1_colunm30, tb1_colunm31, tb1_colunm32, tb1_colunm33, tb1_colunm34, tb1_colunm35, tb1_colunm36, tb1_colunm37, tb1_colunm38, tb1_colunm39, tb1_colunm40, tb1_colunm41, tb1_colunm42, tb1_colunm43, tb1_colunm44, tb1_colunm45, tb1_colunm46, tb1_colunm47, tb1_colunm48, tb1_colunm49, tb1_colunm50, tb1_colunm51, tb1_colunm52, tb1_colunm53, tb1_colunm54, tb1_colunm55, tb1_colunm56, tb1_colunm57, tb1_colunm58, tb1_colunm59, tb1_colunm60, tb1_colunm61, tb1_colunm62, tb1_colunm63, tb1_colunm64, tb1_colunm65, tb1_colunm66, tb1_colunm67, tb1_colunm68, tb1_colunm69, tb1_colunm70, tb1_colunm71, tb1_colunm72, tb1_colunm73, tb1_colunm74, tb1_colunm75, tb1_colunm76, tb1_colunm77, tb1_colunm78, tb1_colunm79, tb1_colunm80, tb1_colunm81, tb1_colunm82, tb1_colunm83, tb1_colunm84, tb1_colunm85, tb1_colunm86, tb1_colunm87, tb1_colunm88, tb1_colunm89, tb1_colunm90, tb1_colunm91, tb1_colunm92, tb1_colunm93, tb1_colunm94, tb1_colunm95, tb1_colunm96, tb1_colunm97, tb1_colunm98, tb1_colunm99, tb1_colunm100) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['table1_id'], "int"),
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
                       GetSQLValueString($_POST['tb1_colunm30'], "text"),
                       GetSQLValueString($_POST['tb1_colunm31'], "text"),
                       GetSQLValueString($_POST['tb1_colunm32'], "text"),
                       GetSQLValueString($_POST['tb1_colunm33'], "text"),
                       GetSQLValueString($_POST['tb1_colunm34'], "text"),
                       GetSQLValueString($_POST['tb1_colunm35'], "text"),
                       GetSQLValueString($_POST['tb1_colunm36'], "text"),
                       GetSQLValueString($_POST['tb1_colunm37'], "text"),
                       GetSQLValueString($_POST['tb1_colunm38'], "text"),
                       GetSQLValueString($_POST['tb1_colunm39'], "text"),
                       GetSQLValueString($_POST['tb1_colunm40'], "text"),
                       GetSQLValueString($_POST['tb1_colunm41'], "text"),
                       GetSQLValueString($_POST['tb1_colunm42'], "text"),
                       GetSQLValueString($_POST['tb1_colunm43'], "text"),
                       GetSQLValueString($_POST['tb1_colunm44'], "text"),
                       GetSQLValueString($_POST['tb1_colunm45'], "text"),
                       GetSQLValueString($_POST['tb1_colunm46'], "text"),
                       GetSQLValueString($_POST['tb1_colunm47'], "text"),
                       GetSQLValueString($_POST['tb1_colunm48'], "text"),
                       GetSQLValueString($_POST['tb1_colunm49'], "text"),
                       GetSQLValueString($_POST['tb1_colunm50'], "text"),
                       GetSQLValueString($_POST['tb1_colunm51'], "text"),
                       GetSQLValueString($_POST['tb1_colunm52'], "text"),
                       GetSQLValueString($_POST['tb1_colunm53'], "text"),
                       GetSQLValueString($_POST['tb1_colunm54'], "text"),
                       GetSQLValueString($_POST['tb1_colunm55'], "text"),
                       GetSQLValueString($_POST['tb1_colunm56'], "text"),
                       GetSQLValueString($_POST['tb1_colunm57'], "text"),
                       GetSQLValueString($_POST['tb1_colunm58'], "text"),
                       GetSQLValueString($_POST['tb1_colunm59'], "text"),
                       GetSQLValueString($_POST['tb1_colunm60'], "text"),
                       GetSQLValueString($_POST['tb1_colunm61'], "text"),
                       GetSQLValueString($_POST['tb1_colunm62'], "text"),
                       GetSQLValueString($_POST['tb1_colunm63'], "text"),
                       GetSQLValueString($_POST['tb1_colunm64'], "text"),
                       GetSQLValueString($_POST['tb1_colunm65'], "text"),
                       GetSQLValueString($_POST['tb1_colunm66'], "text"),
                       GetSQLValueString($_POST['tb1_colunm67'], "text"),
                       GetSQLValueString($_POST['tb1_colunm68'], "text"),
                       GetSQLValueString($_POST['tb1_colunm69'], "text"),
                       GetSQLValueString($_POST['tb1_colunm70'], "text"),
                       GetSQLValueString($_POST['tb1_colunm71'], "text"),
                       GetSQLValueString($_POST['tb1_colunm72'], "text"),
                       GetSQLValueString($_POST['tb1_colunm73'], "text"),
                       GetSQLValueString($_POST['tb1_colunm74'], "text"),
                       GetSQLValueString($_POST['tb1_colunm75'], "text"),
                       GetSQLValueString($_POST['tb1_colunm76'], "text"),
                       GetSQLValueString($_POST['tb1_colunm77'], "text"),
                       GetSQLValueString($_POST['tb1_colunm78'], "text"),
                       GetSQLValueString($_POST['tb1_colunm79'], "text"),
                       GetSQLValueString($_POST['tb1_colunm80'], "text"),
                       GetSQLValueString($_POST['tb1_colunm81'], "text"),
                       GetSQLValueString($_POST['tb1_colunm82'], "text"),
                       GetSQLValueString($_POST['tb1_colunm83'], "text"),
                       GetSQLValueString($_POST['tb1_colunm84'], "text"),
                       GetSQLValueString($_POST['tb1_colunm85'], "text"),
                       GetSQLValueString($_POST['tb1_colunm86'], "text"),
                       GetSQLValueString($_POST['tb1_colunm87'], "text"),
                       GetSQLValueString($_POST['tb1_colunm88'], "text"),
                       GetSQLValueString($_POST['tb1_colunm89'], "text"),
                       GetSQLValueString($_POST['tb1_colunm90'], "text"),
                       GetSQLValueString($_POST['tb1_colunm91'], "text"),
                       GetSQLValueString($_POST['tb1_colunm92'], "text"),
                       GetSQLValueString($_POST['tb1_colunm93'], "text"),
                       GetSQLValueString($_POST['tb1_colunm94'], "text"),
                       GetSQLValueString($_POST['tb1_colunm95'], "text"),
                       GetSQLValueString($_POST['tb1_colunm96'], "text"),
                       GetSQLValueString($_POST['tb1_colunm97'], "text"),
                       GetSQLValueString($_POST['tb1_colunm98'], "text"),
                       GetSQLValueString($_POST['tb1_colunm99'], "text"),
                       GetSQLValueString($_POST['tb1_colunm100'], "text"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($insertSQL, $connection) or die(mysql_error());

  $insertGoTo = "redirect_request.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_connection, $connection);
$query_rsusers = "SELECT * FROM users_tb WHERE username = '".$_SESSION['MM_Username']."'";
$rsusers = mysql_query($query_rsusers, $connection) or die(mysql_error());
$row_rsusers = mysql_fetch_assoc($rsusers);
$totalRows_rsusers = mysql_num_rows($rsusers);
?>
<?php require_once('head.php'); ?>
<div>

<div class="navbar-fixed-top body-title">    
	<h3 class="col-lg-10">New <?php echo $_GET['tb1_colunm1']; ?> Data</h3>
</div>

<div style='width:70%'>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
    <div class="form-group">
                                            <label>&nbsp;</label>
                                            <input type="submit" value="Send" /></div>
    
    <div class="form-group">
                                            <label>Database:</label>
                                            <input type="text" name="tb1_colunm1" value="tech-assist" readonly="readonly" required class="form-control" /></div>
    <div class="form-group">
                                            <label>Date Requested:</label>
                                            <input type="date" name="tb1_colunm2" value="<?php echo date('Y-m-d') ?>" required class="form-control" /></div>
    <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text" name="tb1_colunm3" value="<?php echo $row_rsusers['firstname']; ?> <?php echo $row_rsusers['middlename']; ?> <?php echo $row_rsusers['lastname']; ?>" required class="form-control" /></div>
    <div class="form-group">
                                            <label>Employee-ID:</label>
                                            <input type="text" name="tb1_colunm4" value="<?php echo $row_rsusers['user_id']; ?>" required class="form-control"  /></div>
    <div class="form-group">
                                            <label>Gender:</label>
                                            <input type="text" name="tb1_colunm5" value="<?php echo $row_rsusers['gender']; ?>" placeholder="gender" required class="form-control"  /></div>
    <div class="form-group">
                                            <label>Office:</label>
                                            <input type="text" name="tb1_colunm6" value="<?php echo $row_rsusers['division']; ?>" required class="form-control"  /></div>
    <div class="form-group">
                                            <label>Phone:</label>
                                            <input type="text" name="tb1_colunm8" value="<?php echo $row_rsusers['contactnumber']; ?>" required class="form-control"  /></div>
    <div class="form-group">
                                            <label>Email:</label>
                                            <input type="text" name="tb1_colunm9" value="<?php echo $row_rsusers['email']; ?>" required class="form-control"  /></div>
    <div class="form-group">
                                            <label>Floor,Room/Details:</label>
                                            <input type="text" name="tb1_colunm7" value="" required class="form-control"  /></div>
    <div class="form-group">
                                            <label>Type of Request:</label>
                                            <select name="tb1_colunm10" required class="form-control">
  <option value="">Select</option>
  <optgroup label="Technical Assistance">
    <option value="Hardware">Hardware</option>
    <option value="Software">Software</option>
    <option value="Local Area Network">Local Area Network</option>
    <option value="Information Systems">Information Systems</option>
    <option value="Databases">Databases</option>
  </optgroup>
  <optgroup label="Database System Assistance">
    <option value="New User">New User</option>
    <option value="Change Password">Change Password</option>
    <option value="System Modification">System Modification</option>
  </optgroup>
  <optgroup label="Website">
    <option value="Website Posting">Posting</option>
  </optgroup>
  <optgroup label="E-mail">
    <option value="E-mail Assistance">Assistance</option>
  </optgroup>
  <optgroup label="Asset/Borrow">
    <option value="Hardware Components">Hardware Components</option>
    <option value="Peripherals">Peripherals</option>
    <option value="Tools">Tools</option>
  </optgroup>
  <optgroup label="Others">
    <option value="Others">Please descbibe below</option>
  </optgroup>
</select>
                                            </div>
    <div class="form-group">
                                            <label>Description:</label>
                                            <textarea cols="30" rows="5" name="tb1_colunm11" value="" required class="form-control"></textarea>
                                            </div>
    
    <!--<div class="form-group">
                                            <label>Noted by:</label>
                                            <input type="text" name="tb1_colunm14" value="" class="form-control"  /></div>
    <div class="form-group">
                                            <label>Authorized by:</label>
                                            <input type="text" name="tb1_colunm15" value="" class="form-control"  /></div>
    <div class="form-group">
                                            <label>Position:</label>
                                            <input type="text" name="tb1_colunm16" value="" class="form-control"  /></div>
    <div class="form-group">
                                            <label>Date Authorized:</label>
                                            <input type="text" name="tb1_colunm17" value="" class="form-control"  /></div>
    <div class="form-group">
                                            <label>Time Action:</label>
                                            <input type="text" name="tb1_colunm19" value="" class="form-control"  /></div>
    <div class="form-group">
                                            <label>Action Taken:</label>
                                            <input type="text" name="tb1_colunm20" value="" class="form-control"  /></div>
    <div class="form-group">
                                            <label>Action Staff:</label>
                                            <input type="text" name="tb1_colunm21" value="" class="form-control"  /></div>
    <div class="form-group">
                                            <label>Tb1_colunm22:</label>
                                            <input type="text" name="tb1_colunm22" value="" class="form-control"  /></div>
    <div class="form-group">
                                            <label>Tb1_colunm23:</label>
                                            <input type="text" name="tb1_colunm23" value="" class="form-control"  /></div>
    <div class="form-group">
                                            <label>Tb1_colunm24:</label>
                                            <input type="text" name="tb1_colunm24" value="" class="form-control"  /></div>
    <div class="form-group">
                                            <label>Tb1_colunm25:</label>
                                            <input type="text" name="tb1_colunm25" value="" class="form-control" /></div>-->
    <div class="form-group">
                                            <input type="submit" value="Send" /></div>
  
<input type="hidden" name="tb1_colunm12" value="Pending" placeholder="Status"  />
<input type="hidden" name="tb1_colunm13" value="5" placeholder="Rating" />
<input type="hidden" name="tb1_colunm18" value="<?php echo date('Y-m-d') ?>" placeholder="Action Date" />
<input type="hidden" name="MM_insert" value="form1" />
</form>
</div>
     
</div>
<?php require_once('footer.php'); ?>
<?php
mysql_free_result($rsusers);
?>
