<?php require_once('../Connections/connection.php'); ?>
<?php require_once('access_global.php'); ?>
<?php
//set where you want to store files
//in this example we keep file in folder upload 
//$HTTP_POST_FILES['ufile']['name']; = upload file name
//for example upload file name cartoon.gif . $path will be upload/cartoon.gif

$path= "upload/".$HTTP_POST_FILES['ufile']['name'];
$table1_id=$_POST['table1_id'];
$tb1_colunm1=$_POST['tb1_colunm1'];
if($ufile !=none)
{
if(copy($HTTP_POST_FILES['ufile']['tmp_name'], $path))
{
$result="Upload Successful!"; 

//$HTTP_POST_FILES['ufile']['name'] = file name
//$HTTP_POST_FILES['ufile']['size'] = file size
//$HTTP_POST_FILES['ufile']['type'] = type of file

}
else
{
$result="ERROR!";
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload</title>
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
<div id="container">
<h1><?php echo $result; ?> (2/3)</h1>
<form action="add_<?php echo $tb1_colunm1; ?>.php" method="get">
<p><a href="<?php echo $path; ?>" target="_blank">Preview</a></p>
<p><label>ID:</label> <input name="table1_id" type="text" value="<?php echo $table1_id; ?>" readonly="readonly" /></p>
<p><label>Type:</label> <input name="tb2_colunm1" type="text" value="<?php echo $tb1_colunm1; ?>" readonly="readonly" /></p>
<p><label>File Name:</label> <input name="tb2_colunm3" type="text" value="<?php echo $path; ?>" readonly="readonly" /></p>
<p><input type="submit" value="Continue" /></p>
</form>
</div>
</body>
</html>
</html>