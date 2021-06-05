<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fill</title>
</head>

<body>
<h3 align="center">ACKNOWLEDGEMENT RECEIPT</h3>
<form action="print_acknowledgement_receipt.php" method="get" name="fill">
<table align="center">
<tr valign="baseline">
<td align="right">Doc.ID:</td>
<td><input name="table1_id" type="text" value="<?php echo $_GET['table1_id']; ?>" required /></td>
</tr>
<tr valign="baseline">
<td align="right">Referred to:</td>
<td><select name="tb2_colunm6">
<option value="REGIONAL DIRECTOR">REGIONAL DIRECTOR</option>
<option value="ASSISTANT REGIONAL DIRECTOR-MANAGEMENT SERVICES">ARD-MANAGEMENT SERVICES</option>
<option value="ASSISTANT REGIONAL DIRECTOR-TECHNICAL SERVICES">ARD-TECHNICAL SERVICES</option>
<option value="">Others</option>
</select></td>
</tr>
<tr valign="baseline">
  <td align="right">Others:</td>
  <td><input type="text" name="others" placeholder="" /></td>
</tr>
<tr valign="baseline">
  <td align="right">Date Referred:</td>
  <td><input type="date" name="tb2_colunm7" placeholder="<?php echo date("Y-m-d"); ?>" required /></td>
</tr>
<tr valign="baseline">
<td align="right">Contact No:</td>
<td><input name="contact_no" type="text" value="(02)755-3330 local 2701 / 405-4600" required /></td>
</tr>
<tr valign="baseline">
<td align="right">Email Adress:</td>
<td><input name="email" type="email" value="denr.rd<?php echo $clientbranch;?>@gmail.com" required /></td>
</tr>
<tr valign="baseline">
<td align="right">In Charge:</td>

<td><select name="oic">
<option value="____________________<br/>Chief, Records Section">Records Section</option>
<option value="__________________________________<br/>Regional Director, <?php echo $clientbranch;?>">Regional Director</option>
<option value="____________________________<br/>IN CHARGE, OFFICE OF THE <br/>REGIONAL DIRECTOR">IN CHARGE-ORD</option>
</select></td>
</tr>
<tr valign="baseline">
<td align="right"></td>
<td><input type="submit" value="Go" /></td>
</tr>
</table>
</form>
</body>
</html>
