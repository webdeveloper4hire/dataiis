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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO users_tb (user_id, username, password, email, group_id, firstname, middlename, lastname, address, birthdate, contactnumber, civilstatus, gender, designation, division, details) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['user_id'], "text"),
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
                       GetSQLValueString($_POST['details'], "text"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($insertSQL, $connection) or die(mysql_error());

  $insertGoTo = "confirmed.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>

<?php require_once('head.php'); ?>

<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  
  <legend>Sign-up</legend>
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ID:</td>
      <td><input type="text" name="user_id" value=""  placeholder="OSEC-DENRB-XXXXXXX-X" required /><br/>
      <i>DENR Item Number / for J.O. use TIN Number</i>
      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Username:</td>
      <td><input type="text" name="username" value="" placeholder="nmlastname" required /><br/>
      <em>If you already have a Document Tracking System account please enter the same username</em>
      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Password:</td>
      <td><input type="password" name="password" value=""  required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Repeat Password:</td>
      <td><input type="password" name="password2" value=""  required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Email Address:</td>
      <td><input type="email" name="email" value=""  required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Firstname:</td>
      <td><input type="text" name="firstname" value=""  required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Middlename:</td>
      <td><input type="text" name="middlename" value=""  required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Lastname:</td>
      <td><input type="text" name="lastname" value=""  required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Address:</td>
      <td><input type="text" name="address" value=""  required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Birthdate:</td>
      <td><input type="date" name="birthdate" value=""  required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Contact Number:</td>
      <td><input type="text" name="contactnumber" value=""  required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Civil Status:</td>
      <td><select name="civilstatus" required>
      <option value="Single">Single</option>
      <option value="Married">Married</option>
      <option value="Widow">Widow</option>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Sex:</td>
      <td><select name="gender" required>
      <option>Female</option>
      <option>Male</option>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Position:</td>
      <td><input type="text" name="designation" value="" required />
                                  </td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Division:</td>
      <td><select name="division" value="" required />                     
<option value="ORED">ORED</option>
<option value="NGP">NGP</option>
<option value="RSCIG">RSCIG</option>
<option value="ARDTS">ARDTS</option>
<option value="LPDD">LPDD</option>
<option value="SMD">SMD</option>
<option value="CDD">CDD</option>
<option value="ED">ED</option>
<option value="ARDMS">ARDMS</option>
<option value="LD">LD</option>
<option value="PMD">PMD</option>
<option value="AD">AD</option>
<option value="FD">FD</option>
<option value="MGB-MIMAROPA">MGB-4B</option>
<option value="EMB-MIMAROPA">EMB-4B</option>
<!--<option value="HRD Section">HRD</option>
<option value="Records Section">Records</option>
<option value="Regional ICT Unit">RICTU</option>
<option value="Manila Bay Coordinating Office">MBCO</option>
<option value="Priority Programs Coordination Office">PPCO</option>
<option value="PASu">PASu</option>
<option value="RTDE">RTD ERDS</option>
<option value="RTDF">RTD Forestry</option>
<option value="RTDL">RTD Lands</option>
<option value="RTDP">RTD PAWCZMS</option>-->
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Group:</td>
      <td><input type="number" name="group_id" value="<?php echo $_GET['group'];?>"  required readonly /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Other Details:</td>
      <td><input type="text" name="details" value="" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="SAVE" /></td>
    </tr>
  </table>
  <input type="hidden" name="group_id" value="2" />
  <input type="hidden" name="MM_insert" value="form1" />

</form>
<?php require_once('footer.php'); ?>