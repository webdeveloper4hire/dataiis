<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select</title>
</head>

<body>
<h3>Summarize based on days on an office</h3>
<form action="print_document_year_days_on_office.php" method="get" target="_blank">
<table class="table table-hover">
  <tr>
  	<td>Year:</td>
    <td><select name="tb1_colunm3" >
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
</select></td>
    <td>Status:</td>
    <td><select name="tb2_colunm10">
      <option value="OUT">OUT</option>
      <option value="IN">IN</option>
      <option value="OUT/Yellow Lane">OUT/Yellow Lane</option>
      <option value="IN/Yellow Lane">IN/Yellow Lane</option>
      <option value="OUT/URGENT">OUT/URGENT</option>
      <option value="IN/URGENT">IN/URGENT</option>
      <option value="OUT/DUE">OUT/DUE</option>
      <option value="IN/DUE">IN/DUE</option>
      <option value="Others">Others</option>
      </select></td>
    <td>Office:</td>
    <td><select name="tb2_colunm3">
<option value="ORD">ORD</option>
<option value="NGP">NGP-Coordinator</option>
<option value="PPCO">PPCO</option>
<option value="RPAO">RPAO</option>
<optgroup label="Technical Services">
<option value="ARD-TS">ARD-TS Office</option>
<option value="LPDD">Licenses,Patents and Deeds Division</option>
<option value="SMD">Surveys and Mapping Division</option>
<option value="CDD">Conservation and Development Division</option>
<option value="ED">Enforcement Division</option>
</optgroup>
<optgroup label="Management Services">
<option value="ARDMS">ARD-MS Office</option>
<option value="Legal">Legal-Division</option>
<option value="PMD">Planning and Management Division</option>
<option value="Admin">Administrative-Division</option>
<option value="Finance">Finance-Division</option>
</optgroup>
<optgroup label="Other Offices">
<option value="MGB-MIMA">MGB-MIMA</option>
<option value="EMB-MIMA">EMB-MIMA</option>
<option value="HRDS">HRDS</option>
<option value="Records">Records Section</option>
<option value="ICT">Regional ICT Unit</option>
<!--<option value="Manila Bay Coordinating Office">MBCO</option>
<option value="PASu">PASu</option>
<option value="RTDE">RTD ERDS</option>
<option value="RTDF">RTD Forestry</option>
<option value="RTDL">RTD Lands</option>
<option value="RTDP">RTD PAWCZMS</option>-->
<option value="Others">Others</option>
</optgroup>
</select></td>
                                  <td><input type="submit" value="Go" /></td>
  </tr>
</table>
<input type="hidden" name="tb1_colunm1" value="<?php echo $_GET['tb1_colunm1'];?>" />
</form>
</body>
</html>