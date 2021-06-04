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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE users_tb SET username=%s, password=%s, email=%s, group_id=%s, firstname=%s, middlename=%s, lastname=%s, address=%s, birthdate=%s, contactnumber=%s, civilstatus=%s, gender=%s, designation=%s, division=%s, details=%s WHERE user_id=%s",
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['group_id'], "text"),
                       GetSQLValueString($_POST['firstname'], "text"),
                       GetSQLValueString($_POST['middlename'], "text"),
                       GetSQLValueString($_POST['lastname'], "text"),
                       GetSQLValueString($_POST['address'], "text"),
                       GetSQLValueString($_POST['birthdate'], "text"),
                       GetSQLValueString($_POST['contactnumber'], "text"),
                       GetSQLValueString($_POST['civilstatus'], "text"),
                       GetSQLValueString($_POST['gender'], "text"),
                       GetSQLValueString($_POST['designation'], "text"),
                       GetSQLValueString($_POST['division'], "text"),
                       GetSQLValueString($_POST['details'], "text"),
                       GetSQLValueString($_POST['user_id'], "int"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($updateSQL, $connection) or die(mysql_error());

  $updateGoTo = "confirmed.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

mysql_select_db($database_connection, $connection);
$query_rsusers = "SELECT * FROM users_tb WHERE username = '".$_GET['username']."'";
$rsusers = mysql_query($query_rsusers, $connection) or die(mysql_error());
$row_rsusers = mysql_fetch_assoc($rsusers);
$totalRows_rsusers = mysql_num_rows($rsusers);
?>
<?php require_once('head.php'); ?>
<?php if($totalRows_rsusers != 0) { ?>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">ID:</td>
      <td><input type="text" name="user_id" value="<?php echo htmlentities($row_rsusers['user_id'], ENT_COMPAT, ''); ?>">
      <br/>
      <i>ID's cant be updated here for security concerns. Please coordinate with RICTU.</i>
      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Username:</td>
      <td><input type="text" name="username" value="<?php echo htmlentities($row_rsusers['username'], ENT_COMPAT, ''); ?>"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Password:</td>
      <td><input type="password" name="password" value="<?php echo htmlentities($row_rsusers['password'], ENT_COMPAT, ''); ?>"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Email:</td>
      <td><input type="email" name="email" value="<?php echo htmlentities($row_rsusers['email'], ENT_COMPAT, ''); ?>"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">*Group:</td>
      <td><input type="number" name="group_id" value="<?php echo htmlentities($row_rsusers['group_id'], ENT_COMPAT, ''); ?>"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Firstname:</td>
      <td><input type="text" name="firstname" value="<?php echo htmlentities($row_rsusers['firstname'], ENT_COMPAT, ''); ?>"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Middlename:</td>
      <td><input type="text" name="middlename" value="<?php echo htmlentities($row_rsusers['middlename'], ENT_COMPAT, ''); ?>"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Lastname:</td>
      <td><input type="text" name="lastname" value="<?php echo htmlentities($row_rsusers['lastname'], ENT_COMPAT, ''); ?>"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Address:</td>
      <td><input type="text" name="address" value="<?php echo htmlentities($row_rsusers['address'], ENT_COMPAT, ''); ?>"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Birthdate:</td>
      <td><input type="date" name="birthdate" value="<?php echo htmlentities($row_rsusers['birthdate'], ENT_COMPAT, ''); ?>"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Contactnumber:</td>
      <td><input type="text" name="contactnumber" value="<?php echo htmlentities($row_rsusers['contactnumber'], ENT_COMPAT, ''); ?>"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Civilstatus:</td>
      <td><input type="text" name="civilstatus" value="<?php echo htmlentities($row_rsusers['civilstatus'], ENT_COMPAT, ''); ?>"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Gender:</td>
      <td><input type="text" name="gender" value="<?php echo htmlentities($row_rsusers['gender'], ENT_COMPAT, ''); ?>"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Designation:</td>
      <td><input type="text" name="designation" value="<?php echo htmlentities($row_rsusers['designation'], ENT_COMPAT, ''); ?>"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Division:</td>
      <td><input type="text" name="division" value="<?php echo htmlentities($row_rsusers['division'], ENT_COMPAT, ''); ?>"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Details:</td>
      <td><input type="text" name="details" value="<?php echo htmlentities($row_rsusers['details'], ENT_COMPAT, ''); ?>"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Update"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="user_id" value="<?php echo $row_rsusers['user_id']; ?>">
</form>
<?php } else {?>
	<p>Sorry we cant find your ID. <a href="javascript:history.back()">Please try again</a>.</p>
<?php } ?>	
<?php require_once('footer.php'); ?>
<?php
mysql_free_result($rsusers);
?>
