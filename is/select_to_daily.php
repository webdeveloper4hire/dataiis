<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select</title>
</head>

<body>
<h3>Select Date of Daily Summary</h3>
<form action="print_to_daily.php" method="get" target="_blank">
<table class="table table-hover" width="500px">
  <tr>
    <td>Daily Report:</td>
    <td><input type="date" name="tb1_colunm22" value="<?php echo date("Y-m-d"); ?>" /></td>
    <td><input type="submit" value="Go" /></td>
  </tr>
</table>
<input type="hidden" name="tb1_colunm1" value="Travel-Order" />
</form>
</body>
</html>