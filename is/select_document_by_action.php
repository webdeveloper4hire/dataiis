<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select</title>
</head>

<body>
<h3>Search Document by Action</h3>
<form action="print_documents_by_action.php" method="get" target="_blank">
<table class="table table-hover">
  <tr valign="top">
    <td>Date:</td>
    <td><input type="text" name="tb2_colunm13" value="<?php echo date("Y-m"); ?>" /></td>
    <td>Category:</td>
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
    </td>
    <td>
    Action:
    </td>
    <td>
    <textarea name="tb2_colunm9" rows="1" cols="25"></textarea>
	<td><input type="submit" value="Go" /></td>
    </tr>
    </table>
</form>
</body>
</html>