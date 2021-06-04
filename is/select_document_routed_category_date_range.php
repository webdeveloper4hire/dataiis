<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select</title>
</head>

<body>
<h3>Select Document by Route, Category and Date Range</h3>
<form action="print_documents_route_category_date_range.php" method="get" target="_blank">
<table class="table table-hover" width="500">
  <tr>
    <td>Route:</td>
    <td>
<select name="tb2_colunm6">
<option value="">Select</option>
<option value="Office of the Regional Director">ORD</option>
<option value="NGP-Coordinator">NGP-Coordinator</option>
<option value="Priority Programs Coordination Office">PPCO</option>
<option value="Regional Public Affairs Office">RPAO</option>
<optgroup label="Technical Services">
<option value="Asst-Regional Director-Technical Services">ARD-TS Office</option>
<option value="Licenses Patents and Deeds Division">Licenses,Patents and Deeds Division</option>
<option value="Surveys and Mapping Division">Surveys and Mapping Division</option>
<option value="Conservation and Development Division">Conservation and Development Division</option>>
<option value="Enforcement Division">Enforcement Division</option>
</optgroup>
<optgroup label="Management Services">
<option value="Asst-Regional Director-Management Services">ARD-MS Office</option>
<option value="Legal-Division">Legal-Division</option>
<option value="Planning and Management Division">Planning and Management Division</option>
<option value="Administrative-Division">Administrative-Division</option>
<option value="Finance-Division">Finance-Division</option>
</optgroup>
<optgroup label="Other Offices">
<option value="HRD Section">HRDS</option>
<option value="Records Section">Records Section</option>
<option value="Regional ICT Unit">Regional ICT Unit</option>
<!--<option value="Manila Bay Coordinating Office">MBCO</option>
<option value="PASu">PASu</option>
<option value="RTDE">RTD ERDS</option>
<option value="RTDF">RTD Forestry</option>
<option value="RTDL">RTD Lands</option>
<option value="RTDP">RTD PAWCZMS</option>-->
<option value="Others">Others</option>
</optgroup>
</select>
    </td>
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
	<td>Date:</td>
    <td><input type="date" name="start" value="<?php echo date("Y-m-d"); ?>" placeholder="<?php echo date("Y-m-d"); ?>" /><br /><i>Format: YYYY-MM-DD</i></td>
    <td>to</td>
	<td><input type="date" name="end" value="<?php echo date("Y-m-d"); ?>" placeholder="<?php echo date("Y-m-d"); ?>" /></td>
    <td><input type="submit" value="Go" /></td>
    </tr>

    </table>
</form>
</body>
</html>