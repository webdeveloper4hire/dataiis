<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select</title>
</head>

<body>
<h3>Select Date of Daily Summary</h3>
<form action="print_documents_date.php" method="get" target="_blank">
<table class="table table-hover" width="500">
  <tr>
    <td>Daily Report:</td>
    <td><input type="date" name="tb1_colunm5" value="<?php echo date("Y-m-d"); ?>" /></td>
    <td><select name="tb1_colunm2">
                                  <option value="0">--</option>
                                  <option value="P">PENRO</option>
                                  <option value="C">CENRO</option>
                                  <option value="LRC">LRC</option>
                                  <option value="FP">Fax PENRO</option>
                                  <option value="FC">Fax CENRO</option>
                                  <option value="FCO">Fax Central Office</option>
                                  <option value="FO">Fax Others</option>
                                  <option value="EP">Email PENRO</option>
                                  <option value="EC">Email CENRO</option>
                                  <option value="ECO">Email Cental Office</option>
                                  <option value="EO">Email Others</option>
                                  <option value="0">Others</option>
                                  </select></td>
                                  <td><input type="submit" value="Go" /></td>
  </tr>
</table>
<input type="hidden" name="tb1_colunm1" value="<?php echo $_GET['tb1_colunm1'];?>" />
</form>
</body>
</html>