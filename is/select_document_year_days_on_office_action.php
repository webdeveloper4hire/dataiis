<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select</title>
</head>

<body>
<h3>Summarize per date with action</h3>
<form action="print_document_year_days_on_office_action.php" method="get" target="_blank">
<table class="table table-hover">
  <tr>
  	<td>Date:</td>
    <td><input type="text" name="rdate" value="<?php echo date('Y-m');?>"></td>
<td><input type="submit" value="Go" /></td>
  </tr>
</table>
<input type="hidden" name="tb1_colunm1" value="<?php echo $_GET['tb1_colunm1'];?>" />
</form>
</body>
</html>