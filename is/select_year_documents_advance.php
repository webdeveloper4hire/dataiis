<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select Year</title>
</head>
<body>
<h3>Select Year</h3>
<form action="list_documents_advance.php" method="get" target="_blank">
<table class="table table-hover" width="250px">
  <tr>
    <td><label>Year:</label></td>
<td>
<select name="tb1_colunm3" >
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
</select></td>
<td><input type="hidden" name="tb1_colunm1" value="<?php echo $_GET['tb1_colunm1']; ?>" />
<input type="hidden" name="type" value="advance" />
<input type="submit" value="Go" /></td>
</form>
</body>
</html>