<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search</title>
</head>

<body>
<h3>Subject</h3>
<div class="ui-widget">
<form action="add_document.php" method="get">
<table>
  <tr>
    <td><textarea name="tb1_colunm7" rows="5" cols="50" ></textarea></td>
    <td>
    <input type="hidden" value="refresh_id" name="type" />
    <input type="submit" /></td>
  </tr>
</table>
<input type="hidden" name="tb1_colunm1" value="<?php echo $_GET['tb1_colunm1'];?>" />
<input type="hidden" name="barcoding" value="<?php echo $_GET['barcoding'];?>" />
</form>
</div>

</body>
</html>

