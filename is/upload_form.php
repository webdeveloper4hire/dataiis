<?php require_once('../Connections/connection.php'); ?>
<?php require_once('access_global.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Description" content="Php Error Message" />
<meta name="Keywords" content="error message, php, mysql, perl, framework, microsoft, windows, linux, server, host, tutorial, how to fix error message" />
<meta name="Author" content="webdeveloper4hire@gmail.com" />
<meta name="Distribution" content="Global" />
<title>DENR</title>
<style type="text/css">

::selection{ background-color: #E13300; color: white; }
::moz-selection{ background-color: #E13300; color: white; }
::webkit-selection{ background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	-webkit-box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}
</style>
</head>
<body>
<div id="container" align="center">

<h1>Select File to Upload (1/3)</h1>

<form action="upload_file.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table>
  <tr>
    <td nowrap="nowrap" align="right">ID:</td>
    <td><input name="table1_id" type="text" value="<?php echo $_GET['table1_id']; ?>" /></td>
  </tr>
  <tr>
    <td nowrap="nowrap" align="right">Type:</td>
    <td><input name="tb1_colunm1" type="text" value="<?php echo $_GET['tb1_colunm1']; ?>" readonly /></td>
  </tr>
  <tr>
    <td nowrap="nowrap" align="right">File:</td>
    <td><input name="ufile" type="file" id="ufile" required />
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>PLEASE DO NOT PUT SPECIAL CHARACTERS AND SPACES ON FILE NAMES.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Upload" /></td>
  </tr>
</table>
</form>
</div>
</body>
</html>
