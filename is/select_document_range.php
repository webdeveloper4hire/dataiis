<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select</title>
</head>

<body>
<h3>Select Documents Number to Summary</h3>
<form action="print_documents_range.php" method="get" target="_blank">
<table class="table table-hover">
  <tr>
    <td>Year:</td>
    <td><input type="text" name="tb1_colunm3" value="<?php echo date("Y"); ?>" placeholder="<?php echo date("Y-m-d"); ?>" /><br /><i>Format: YYYY-MM-DD</i>
    <!--<select name="tb1_colunm3" >
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
</select>--></td>
    <td>From.Doc.No.:</td>
    <td><input type="number" name="start_id" value="" required="required" /></td>
    <td>To</td>
    <td><input type="number" name="end_id" value="" required="required" /></td>
                                  <td><input type="submit" value="Go" /></td>
  </tr>
</table>
<input type="hidden" name="tb1_colunm1" value="<?php echo $_GET['tb1_colunm1'];?>" />
</form>
</body>
</html>