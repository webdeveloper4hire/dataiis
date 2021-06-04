<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select</title>
</head>

<body>
<h3>Select Document by Route and Date with Action</h3>
<form action="print_documents_route_date_w_action.php" method="get" target="_blank">
<table class="table table-hover" width="500">
  <tr>
    <td>Route:</td>
    <td>
    <select name="tb2_colunm6">
<option value="">Select</option>
<option value="NGP-Coordinator">NGP-Coordinator</option>
<option value="Priority Programs Coordination Office">PPCO</option>
<option value="Regional Public Affairs Office">RPAO</option>
<optgroup label="Technical Services">
<option value="Asst-Regional Director-Technical Services">ARD-TS Office</option>
<option value="Licenses Patents and Deeds Division">Licenses,Patents and Deeds Division</option>
<option value="Surveys and Mapping Division">Surveys and Mapping Division</option>
<option value="Conservation and Development Division">Conservation and Development Division</option>
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
	<td>Date:</td>
    <td><input type="text" name="tb2_colunm7" value="<?php echo date("Y-m"); ?>" placeholder="<?php echo date("Y-m-d"); ?>" /><br /><i>Format: YYYY-MM-DD</i></td>
	<td><input type="submit" value="Go" /></td>
    </tr>

    </table>
</form>
</body>
</html>