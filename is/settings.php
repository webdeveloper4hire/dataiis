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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "frm")) {
  $insertSQL = sprintf("INSERT INTO users_tb (username, password, email, group_id, details) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['group_id'], "text"),
                       GetSQLValueString($_POST['type'], "text"));

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
<?php
$a = session_id();
if(empty($a)) session_start();
"SID: ".SID."<br>session_id(): ".session_id()."<br>COOKIE: ".$_COOKIE["PHPSESSID"];
?>
<?php require_once('head.php'); ?>
<?php require_once('menu.php'); ?>
  <div>

<div class="navbar-fixed-top body-title">    
	<h3 class="col-lg-10"> Settings <small><?php echo $clientalias ;?> <?php echo $clientbranch;?></small> </h1>
      <ol class="breadcrumb">

      </ol>
</section>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE><?php echo $clientalias ;?> IV-B</TITLE>
<script language="javascript" type="text/javascript">
function validate()
{

var formName=document.frm;

if(formName.password.value == "")
{
document.getElementById("newpassword_label").innerHTML='Please Enter New Password';
formName.password.focus();
return false;
}
else
{
document.getElementById("newpassword_label").innerHTML='';
}


if(formName.password2.value == "")
{
document.getElementById("cpassword_label").innerHTML='Enter ConfirmPassword';
formName.password2.focus();
return false;
}
else
{
document.getElementById("cpassword_label").innerHTML='';
}


if(formName.password.value != formName.password2.value)
{
document.getElementById("cpassword_label").innerHTML='Passwords Missmatch';
formName.password2.focus()
return false;
}
else
{
document.getElementById("cpassword_label").innerHTML='';
}
}
</script>

<html>
<head>
<title> Settings </title>
 </head>
<body>
<br><br>
<div class="col-md-12">
  <div class="col-md-7">
  <div class='panel panel-primary dialog-panel' >
  <div class='panel-heading'>
  <div align="left">
  <li class="user-header bg-light-blue">
  <h4><b>Add an Admin </b></h4>
</div>
  </div>
<div class='panel-body'>
           <form action="<?php echo $editFormAction; ?>" method="POST" name="frm" id="frm" onSubmit="return validate();">

          <div class='form-group' style="display: none;">
            <label class='control-label col-md-2 col-md-offset-2'>Type</label>
            <div class='col-md-6'>
                  <input class='form-control' type='text' name="type" value="setting"></div>
          </div>

          <div class='form-group' style="display: none;">
            <label class='control-label col-md-2 col-md-offset-2'>Setting</label>
            <div class='col-md-6'>
                  <input class='form-control' type='text' name="setting" value="admin"></div>
          </div>

          <div class='form-group' style="display: none;">
            <label class='control-label col-md-2 col-md-offset-2'>Group_id</label>
            <div class='col-md-6'>
                  <input class='form-control' type='text' name="group_id" value="1"></div>
          </div>
<div class="form-group">
      <label for="contactname">Name:</label>
    <div class="col-sm-12 no-margin">
    </div>
    <div class="col-sm-7 no-margin">
      <input class="form-control" type="text" id="contactname" name="details" value="" onkeyup="AllowAlphabet()" placeholder="Full Name" onkeyup="AllowAlphabet14()" required />
    </div> 
  </div>

  <br><br>
    <div class="form-group">
    <label for="contactemail">E-mail Address:</label>
    <div class="col-sm-12 no-margin">
     </div>
    <div class="col-sm-11 no-margin">
      <input type="email" class="form-control" name="email" value="" id="contactemail" placeholder="Enter email" required/> 
    <span class="help-block input-sm">* Please enter a valid e-mail address</span>
    </div>

  </div>

  <div class="form-group">
    <label for="contactname">Username:</label>
      <div class="col-sm-12 no-margin">
    </div>
    <div class="col-sm-8 no-margin">
      <input class="form-control" type="text"  name="username" value="" id="contactusername" placeholder="Usename" onkeyup="AllowAlphabet14()" required/>
    </div>  
  </div>
  <br><br>
  <div class="form-group">
    <label for="contactname">Password:</label>
      <div class="col-sm-12 no-margin">
    </div>
    <div class="col-sm-8 no-margin">
      <input class="form-control password" autocomplete="off"  type="password"  name="password" value=""   id="contactpassword"  placeholder="Password"  required/>
    </div>  <label id="newpassword_label" class="level_msg">
  </div>
  <br><br>
    <div class="form-group">
    <label for="contactname">Confirm Password:</label>
      <div class="col-sm-12 no-margin">
    </div>
    <div class="col-sm-8 no-margin">
      <input class="form-control password" autocomplete="off"  type="password"  name="password2" value="" id="contactpassword2"  placeholder="Confirm Password"  required/>
      <label id="cpassword_label" class="level_msg">
     </div>
    <div class="col-sm-4 no-margin">                  
          <center><input type="checkbox" id="showHide"> Show Password</center>
    </div>  
  </div>
  <br><br>
    <div class="form-group">
       <center>
           <button type="submit" id="contactbtn"  style="width:400px;" class="btn bg-blue btn-block ">Submit</button>   
       </center>
      </div>
      </div>
  <input type="hidden" name="MM_insert" value="form1">
  <input type="hidden" name="MM_insert" value="frm">
      </form>
  </div>
</div>
</div>
<script src="js/jquery.min.js"></script>

        <script type="text/javascript">
  $(document).ready(function () {
    $("#showHide").click(function () {
      if ($(".password").attr("type")=="password") {
        $(".password").attr("type", "text");
      }
      else{
        $(".password").attr("type", "password");
      }
  
    });
  });
</script>

</body>
</html>