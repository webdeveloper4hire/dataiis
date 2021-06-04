<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select</title>
</head>

<body>
<h3>Select Documents Number and Category to Summary with Action</h3>
<form action="print_documents_range_category_w_action.php" method="get" target="_blank">
<table class="table table-hover">
  <tr>
    <td>Year:</td>
    <td>
<select name="tb1_colunm3" >
<option value="2014">2014</option>
<option value="2015" selected="selected">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
</select></td>
    <td>From.CRTL.No.:</td>
    <td><input type="number" name="start_id" value="" required="required" /></td>
    <td>To</td>
    <td><input type="number" name="end_id" value="" required="required"/></td>
    <td><select name="tb1_colunm2" required="required">
                                  <option value="0">--</option>
                                  <option value="P">PENRO</option>
                                  <option value="C">CENRO</option>
                                  <option value="LRC">LRC</option>
                                  <option value="PASU">PASU</option>
                                  <option value="FP">Fax PENRO</option>
                                  <option value="FC">Fax CENRO</option>
                                  <option value="FCO">Fax Central Office</option>
                                  <option value="FPASU">Fax PASU</option>
                                  <option value="FO">Fax Others</option>
                                  <option value="EP">Email PENRO</option>
                                  <option value="EC">Email CENRO</option>
                                  <option value="ECO">Email Cental Office</option>
                                  <option value="EPASU">Email PASU</option>
                                  <option value="EO">Email Others</option>
                                  <option value="0">Others</option>
                                  </select></td>
                                  <td><input type="text" name="user" value="ored" /></td>
                                  <td><input type="submit" value="Go" /></td>
  </tr>
</table>
<input type="hidden" name="tb1_colunm1" value="<?php echo $_GET['tb1_colunm1'];?>" />
</form>
</body>
</html>