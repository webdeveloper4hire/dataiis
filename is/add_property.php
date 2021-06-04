<?php require_once('../Connections/connection.php'); ?>
<?php require_once('access_property.php'); ?>
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

  $insertGoTo = "confirm_global.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<?php require_once('head.php'); ?>
<div>

<div class="navbar-fixed-top body-title">    
	<h3 class="col-lg-10">Add <?php echo $_GET['tb1_colunm1']; ?></h3>
</div>

<div align="center">

</div>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Continue" /></td>
    </tr>
    <tr hidden valign="baseline">
      <td nowrap="nowrap" align="right">ID Number:</td>
      <td><input type="text" name="table1_id" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Category:</td>
      <td><input type="text" name="tb1_colunm1" readonly value="<?php echo $_GET['tb1_colunm1']; ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Entity Name:</td>
      <td><input type="text" name="tb1_colunm2" value="DENR MIMAROPA Region" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Fund Cluster:</td>
      <td><input type="text" name="tb1_colunm3" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Date:</td>
      <td><input type="date" name="tb1_colunm7" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Author:</td>
      <td><input type="text" name="tb1_colunm30" value="<?php echo $_SESSION['MM_Username']; ?>" size="32" /></td>
    </tr>
	<?php if($_GET['tb1_colunm1'] == 'PR' || $_GET['tb1_colunm1'] == 'RIS' || $_GET['tb1_colunm1'] == 'RIS' ) { ?>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Office/Section:</td>
      <td><input type="text" name="tb1_colunm4" value="" size="32" /></td>
    </tr>
	<?php } ?>
	<?php if($_GET['tb1_colunm1'] == 'PR'){ ?>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PR Number:</td>
      <td><input type="text" name="tb1_colunm5" value="" size="32" /></td>
    </tr>
	<?php } ?>
	<?php if( $_GET['tb1_colunm1'] == 'PR' || $_GET['tb1_colunm1'] == 'RIS' || $_GET['tb1_colunm1'] == 'IAR'){ ?>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Responsibility Center Code:</td>
      <td><input type="text" name="tb1_colunm6" value="" size="32" /></td>
    </tr>
	<?php } ?>
	<?php if($_GET['tb1_colunm1'] == 'IAR'){ ?>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Suppliers:</td>
      <td><input type="text" name="tb1_colunm8" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PO No./Date:</td>
      <td><input type="text" name="tb1_colunm9" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Requisitioning Office/Dept.:</td>
      <td><input type="text" name="tb1_colunm10" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">IAR No.:</td>
      <td><input type="text" name="tb1_colunm11" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Sales Invoice:</td>
      <td><input type="text" name="tb1_colunm12" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Delivery Receipt No.:</td>
      <td><input type="text" name="tb1_colunm13" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Delivery Date:</td>
      <td><input type="text" name="tb1_colunm37" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Date Inspected:</td>
      <td><input type="date" name="tb1_colunm25" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Date Received:</td>
      <td><input type="date" name="tb1_colunm14" value="" size="32" /></td>
    </tr>
	<?php }?>
	<?php if($_GET['tb1_colunm1'] == 'RIS'){ ?>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Division:</td>
      <td><input type="text" name="tb1_colunm15" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">RIS No.:</td>
      <td><input type="text" name="tb1_colunm16" value="" size="32" /></td>
    </tr>
	<?php }?>
    <?php if( $_GET['tb1_colunm1'] == 'ICS' || $_GET['tb1_colunm1'] == 'IAR' || $_GET['tb1_colunm1'] == 'RIS'){ ?>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Receiver Name:</td>
      <td><input type="text" name="tb1_colunm28" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Receiver's Position/Office:</td>
      <td><input type="text" name="tb1_colunm31" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Date Received:</td>
      <td><input type="date" name="tb1_colunm14" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Received/Issued from:</td>
      <td><input type="text" name="tb1_colunm35" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Issuers Position/Office :</td>
      <td><input type="text" name="tb1_colunm36" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Date Issued:</td>
      <td><input type="date" name="tb1_colunm20" value="" size="32" /></td>
    </tr>
    <?php }?>
	<?php if($_GET['tb1_colunm1'] == 'ICS'){ ?>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ICS No.:</td>
      <td><input type="text" name="tb1_colunm17" value="" size="32" /></td>\	
    </tr>
	<tr valign="baseline">
      <td nowrap="nowrap" align="right">Delivery Receipts:</td>
      <td><input type="text" name="tb1_colunm18" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Sales Invoice:</td>
      <td><input type="text" name="tb1_colunm19" value="" size="32" /></td>
    </tr>
    
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Supplier:</td>
      <td><input type="text" name="tb1_colunm27" value="" size="32" /></td>
    </tr>
	<?php }?>
	<?php if($_GET['tb1_colunm1'] == 'PAR'){ ?>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PAR No.:</td>
      <td><input type="text" name="tb1_colunm21" value="" size="32" /></td>
    </tr>
	<?php }?>
	
	<?php if($_GET['tb1_colunm1'] == 'PR'){ ?>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">CHARGING:</td>
      <td><input type="text" name="tb1_colunm34" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Recommended by:</td>
      <td><input type="text" name="tb1_colunm23" value="" size="32" /></td>
    </tr>
    <?php }?>
    <?php if( $_GET['tb1_colunm1'] == 'PR' || $_GET['tb1_colunm1'] == 'RIS'){ ?>

    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PURPOSE:</td>
      <td><input type="text" name="tb1_colunm33" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Requested by:</td>
      <td><input type="text" name="tb1_colunm22" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Position:</td>
      <td><input type="text" name="tb1_colunm32" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Date Requested:</td>
      <td><input type="text" name="tb1_colunm40" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Approved by:</td>
      <td><input type="text" name="tb1_colunm24" value="HENRY A. ADORNADO PhD" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Approver's Position:</td>
      <td><input type="text" name="tb1_colunm38" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Date Approved:</td>
      <td><input type="text" name="tb1_colunm39" value="" size="32" /></td>
    </tr>
	<?php }?>
	<!--
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm40:</td>
      <td><input type="text" name="tb1_colunm40" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm41:</td>
      <td><input type="text" name="tb1_colunm41" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm42:</td>
      <td><input type="text" name="tb1_colunm42" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm43:</td>
      <td><input type="text" name="tb1_colunm43" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm44:</td>
      <td><input type="text" name="tb1_colunm44" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm45:</td>
      <td><input type="text" name="tb1_colunm45" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm46:</td>
      <td><input type="text" name="tb1_colunm46" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm47:</td>
      <td><input type="text" name="tb1_colunm47" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm48:</td>
      <td><input type="text" name="tb1_colunm48" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm49:</td>
      <td><input type="text" name="tb1_colunm49" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm50:</td>
      <td><input type="text" name="tb1_colunm50" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm51:</td>
      <td><input type="text" name="tb1_colunm51" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm52:</td>
      <td><input type="text" name="tb1_colunm52" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm53:</td>
      <td><input type="text" name="tb1_colunm53" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm54:</td>
      <td><input type="text" name="tb1_colunm54" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm55:</td>
      <td><input type="text" name="tb1_colunm55" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm56:</td>
      <td><input type="text" name="tb1_colunm56" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm57:</td>
      <td><input type="text" name="tb1_colunm57" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm58:</td>
      <td><input type="text" name="tb1_colunm58" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm59:</td>
      <td><input type="text" name="tb1_colunm59" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm60:</td>
      <td><input type="text" name="tb1_colunm60" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm61:</td>
      <td><input type="text" name="tb1_colunm61" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm62:</td>
      <td><input type="text" name="tb1_colunm62" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm63:</td>
      <td><input type="text" name="tb1_colunm63" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm64:</td>
      <td><input type="text" name="tb1_colunm64" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm65:</td>
      <td><input type="text" name="tb1_colunm65" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm66:</td>
      <td><input type="text" name="tb1_colunm66" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm67:</td>
      <td><input type="text" name="tb1_colunm67" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm68:</td>
      <td><input type="text" name="tb1_colunm68" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm69:</td>
      <td><input type="text" name="tb1_colunm69" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm70:</td>
      <td><input type="text" name="tb1_colunm70" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm71:</td>
      <td><input type="text" name="tb1_colunm71" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm72:</td>
      <td><input type="text" name="tb1_colunm72" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm73:</td>
      <td><input type="text" name="tb1_colunm73" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm74:</td>
      <td><input type="text" name="tb1_colunm74" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm75:</td>
      <td><input type="text" name="tb1_colunm75" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm76:</td>
      <td><input type="text" name="tb1_colunm76" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm77:</td>
      <td><input type="text" name="tb1_colunm77" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm78:</td>
      <td><input type="text" name="tb1_colunm78" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm79:</td>
      <td><input type="text" name="tb1_colunm79" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm80:</td>
      <td><input type="text" name="tb1_colunm80" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm81:</td>
      <td><input type="text" name="tb1_colunm81" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm82:</td>
      <td><input type="text" name="tb1_colunm82" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm83:</td>
      <td><input type="text" name="tb1_colunm83" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm84:</td>
      <td><input type="text" name="tb1_colunm84" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm85:</td>
      <td><input type="text" name="tb1_colunm85" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm86:</td>
      <td><input type="text" name="tb1_colunm86" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm87:</td>
      <td><input type="text" name="tb1_colunm87" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm88:</td>
      <td><input type="text" name="tb1_colunm88" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm89:</td>
      <td><input type="text" name="tb1_colunm89" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm90:</td>
      <td><input type="text" name="tb1_colunm90" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm91:</td>
      <td><input type="text" name="tb1_colunm91" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm92:</td>
      <td><input type="text" name="tb1_colunm92" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm93:</td>
      <td><input type="text" name="tb1_colunm93" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm94:</td>
      <td><input type="text" name="tb1_colunm94" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm95:</td>
      <td><input type="text" name="tb1_colunm95" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm96:</td>
      <td><input type="text" name="tb1_colunm96" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm97:</td>
      <td><input type="text" name="tb1_colunm97" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm98:</td>
      <td><input type="text" name="tb1_colunm98" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tb1_colunm99:</td>
      <td><input type="text" name="tb1_colunm99" value="" size="32" /></td>
    </tr>
    -->
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Others:</td>
      <td><input type="text" name="tb1_colunm100" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Continue" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
</div>
<?php require_once('footer.php'); ?>
