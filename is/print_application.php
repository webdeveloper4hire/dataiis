<?php require_once('../Connections/connection.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_rsleave = "-1";
if (isset($_GET['table2_id'])) {
  $colname_rsleave = $_GET['table2_id'];
}
mysql_select_db($database_connection, $connection);
$query_rsleave = sprintf("SELECT * FROM table2 WHERE table2_id = %s AND tb2_colunm1 = 'mbg4b-employee-apply'", GetSQLValueString($colname_rsleave, "int"));
$rsleave = mysql_query($query_rsleave, $connection) or die(mysql_error());
$row_rsleave = mysql_fetch_assoc($rsleave);
$totalRows_rsleave = mysql_num_rows($rsleave);

$colname_rscredits = "-1";
if (isset($_GET['table2_id'])) {
  $colname_rscredits = $_GET['table2_id'];
}
mysql_select_db($database_connection, $connection);
$query_rscredits = sprintf("SELECT * FROM table2 WHERE tb2_colunm1 = 'mbg4b-employee-leave' AND tb2_colunm2 = '". $_GET['tb2_colunm2']."' ORDER BY table2_id DESC", GetSQLValueString($colname_rscredits, "int"));
$rscredits = mysql_query($query_rscredits, $connection) or die(mysql_error());
$row_rscredits = mysql_fetch_assoc($rscredits);
$totalRows_rscredits = mysql_num_rows($rscredits);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print</title>
</head>

<body>
<table width="1000" border="1" cellpadding="5" cellspacing="0" align="center">
	<TR>
   	  <TD>
        
        <table width="990" cellpadding="0" cellspacing="0" align="center">
	<tr>
    	<td width="395" align="right"><img src="../clip_image002_0000.gif" /a></td>
        <td width="593">Republic of the Philippines<br/>
        	Department of Environment and Natural Resources<br/>
            MINES AND GEOSCIENCES BUREAU<br/>
            DENR By the Bay Bldg., Roxas Blvd., Manila</td>
          </tr>
  </table>
 <table width="990">
 	<tr>
    	<td align="center"><h2><strong><u>APPLICATION FOR LEAVE</u></strong></h2></td>
      </tr></table>
<table width="990">
	<tr>
		<td>CSC Form No. 6<br/>
        	Revised 1984</td>
    </tr>
</table>
<table width="990" align="center" cellpadding="0" cellspacing="0" border="1">
	<TR>
    	<td><table width="990" cellpadding="0" cellspacing="0" align="center">

	<tr>
    	<td width="35">1.</td>
        <td width="363">OFFICE/AGENCY</td>
        <td width="35">2.</td>
        <td width="219">LAST NAME</td>
        <td width="188">FIRST</td>
        <td width="148">MIDDLE</td>
    </tr>
</table>
<table width="990" cellpadding="0" cellspacing="0" align="center" height="25">
     <tr>
     	<td width="23"><div align="center"></div></td>
        <td width="343"><div align="center"><strong><?php echo $row_rsleave['tb2_colunm18']; ?></strong>&nbsp;</div></td>
        <td width="148"><div align="center"><strong><?php echo $row_rsleave['tb2_colunm19']; ?></strong>&nbsp;</div></td>
        <td width="51"><div align="center"></div></td>
        <td width="203"><div align="center"><strong><?php echo $row_rsleave['tb2_colunm20']; ?></strong>&nbsp;</div></td>
        <td width="220"><div align="center"><strong><?php echo $row_rsleave['tb2_colunm21']; ?></strong>&nbsp;</div></td>
      </tr>
</table>
</td>
</TR>
</table>
<table width="990" cellpadding="0" cellspacing="0" align="center" border="1">
<TR>
<TD><table width="990" cellpadding="0" cellspacing="0" align="center">
	<tr>
    	<td width="30">3.</td>
        <td width="370">DATE OF FILLING</td>
        <TD width="37">4.</TD>
        <td width="252">POSITION</td>
        <TD width="26">5.</TD>
        <TD width="273">SALARY (MONTHLY)</TD>
    </tr>
</table>
<table width="990" cellpadding="0" cellspacing="0" align="center" height="25">
     <tr>
     	<td width="24"></td>
        <td width="216"><div align="center"><strong><?php echo $row_rsleave['tb2_colunm22']; ?></strong></div></td>
        <td width="124"><div align="center"></div></td>
        <td width="300"><div align="center"><strong><?php echo $row_rsleave['tb2_colunm23']; ?></strong></div></td>
        <td width="20"><div align="center"></div></td>
        <td width="304"><div align="center"><strong><?php echo $row_rsleave['tb2_colunm24']; ?></strong></div></td>
      </tr>
</table>
</TD>
</TR>
</table>
<table height="5"></table>
<table width="994" cellpadding="0" cellspacing="0" align="center" border="2">
	<tr>
    	<td><div align="center"><font size="+2">
    	  <strong>DETAILS OF APPLICATION</strong>
        </div></td>
    </tr>
</table>
<BR/>
<table width="990" align="center" cellpadding="0" cellspacing="0">
	<tr>
    	<td width="523">6.a). TYPE OF LEAVE</td>
        <td width="465">6.b). WHERE LEAVE WILL BE SPENT</td></tr></table>
<table width="990" align="center" cellpadding="0" cellspacing="0">
    <tr>
    	<td width="115"></td>
    	<td width="44"><table><input type="checkbox"/></table>
        <td width="381">Vacation</td>
        <td width="448">In case of Vacation Leave</td>
      </table>
<table width="990" align="center" cellpadding="0" cellspacing="0">
    <tr>
    	<td width="115"></td>
    	<td width="44"><input type="checkbox" /></td> 		
        <td width="378">Force leave</td>
        <td width="45"><table><input type="checkbox" /></table></td>
        <td width="406">Within the Philippines</td>
      </tr>
        </table>
<table width="990" align="center" cellpadding="0" cellspacing="0">
<tr>
<td width="115"></td>
    	<td width="44"><input type="checkbox" /></td> 		
        <td width="378">Special leave
        	<select name="Special leave" >
            	<option></option>
                <option>Birthday</option>
                <option>Wedding Anniversary</option>
                <option>Enrolment/Graduation</option>
                <option>Calamity/Accident</option>
                <option>Goverment Transaction</option>
                <option>Funeral/Mourning</option>
                <option>Domestic Emergencies</option>
                <option>Parent/Filial Obligation</option>
          </select></td>
        <td width="46"><table><input type="checkbox" /></table></td>
        <td width="405">Abroad (specify) <input type="text" /></td>
</tr>
</table>
<table width="990" align="center" cellpadding="0" cellspacing="0">
	<tr>
    	<td width="158"></td>
		<td width="421">&nbsp;</td>
        <td width="409">&nbsp;</td>
</table>
<table width="990" align="center" cellpadding="0" cellspacing="0">
	<tr>
    	<td width="115"></td>
    	<td width="44"><table><input type="checkbox" /></table></td>
        <td width="381">Sick</td>
        <td width="448">In case of Sick Leave</td>
    </tr>
</table>
<table width="990" align="center" cellpadding="0" cellspacing="0">
    <tr>
    	<td width="115"></td>
    	<td width="44"><table><input type="checkbox" /></table></td> 		
        <td width="378">Others 
          <select name="Others">
        							<option></option>
                                    <option>Maternity/Paternity Leave</option>
                                    <option>Study Leave</option>
                                    <option>Solo Parent Leave</option>
                              </select></td>
        <td width="34"><table><input type="checkbox" /></table></td>
        <td width="417">-- In Hospital (specify)</td>
      </tr>
        </table>
<table width="990" align="center" cellpadding="0" cellspacing="0">
<tr>
<td width="115"></td>
    	<td width="44"><table></table></td> 		
        <td width="378">&nbsp;</td>
        <td width="34"><table><input type="checkbox"/></table></td>
        <td width="417">-- Out patient (specify) <input type="text" /></td>
</tr>
</table>
<table width="990" align="center" cellpadding="0" cellspacing="0">
	<tr>
    	<td width="158"></td>
		<td width="421">&nbsp;</td>
        <td width="409">&nbsp;</td>
</table>
<table width="990" align="center" cellpadding="0" cellspacing="0">
	<tr>
    	<td width="523">6.c). Number of working days applied for <input type="number" />   	      day(s)</td>
        <td width="465">6.d). COMMUTATIONS</td></tr></table>
<table width="990" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<TD width="33"></TD>
   	    <TD width="955">&nbsp;</TD></tr></table>
<table width="990" align="center" cellpadding="0" cellspacing="0">
	<TR>
    	<td width="22"></td>
    	<td width="513">Inclusive Dates
        					<select name="Months">
                            	<option> </option>
                        		<option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                        	</select>
                            <select name="date">
                            	<option> </option>
                                <option> 1 </option>
                                <option> 2 </option>
                                <option> 3 </option>
                                <option> 4 </option>
                                <option> 5 </option>
                                <option> 6 </option>
                                <option> 7</option>
                                <option> 8 </option>
                                <option> 9 </option>
                                <option> 10 </option>
                                <option> 11 </option>
                                <option> 12 </option>
                                <option> 13 </option>
                                <option> 14 </option>
                                <option> 15 </option>
                                <option> 16 </option>
                                <option> 17 </option>
                                <option> 18 </option>
                                <option> 19 </option>
                                <option> 20 </option>
                                <option> 21 </option>
                                <option> 22 </option>
                                <option> 23 </option>
                                <option> 24 </option>
                                <option> 25 </option>
                                <option> 26 </option>
                                <option> 27 </option>
                                <option> 28 </option>
                                <option> 29 </option>
                                <option> 30 </option>
                                <option> 31 </option>
                            </select> 
                            to
                            <select name="date">
                            	<option> </option>
                                <option> 1 </option>
                                <option> 2 </option>
                                <option> 3 </option>
                                <option> 4 </option>
                                <option> 5 </option>
                                <option> 6 </option>
                                <option> 7</option>
                                <option> 8 </option>
                                <option> 9 </option>
                                <option> 10 </option>
                                <option> 11 </option>
                                <option> 12 </option>
                                <option> 13 </option>
                                <option> 14 </option>
                                <option> 15 </option>
                                <option> 16 </option>
                                <option> 17 </option>
                                <option> 18 </option>
                                <option> 19 </option>
                                <option> 20 </option>
                                <option> 21 </option>
                                <option> 22 </option>
                                <option> 23 </option>
                                <option> 24 </option>
                                <option> 25 </option>
                                <option> 26 </option>
                                <option> 27 </option>
                                <option> 28 </option>
                                <option> 29 </option>
                                <option> 30 </option>
                                <option> 31 </option>
                            </select>
                            <input type="number" name="year" value="<?php echo date('Y'); ?>"> 
                            
                        </td>
        <td width="43"><table><input type="checkbox" /></table></td>
        <td width="150">Requested</td>
        <td width="40"><table><input type="checkbox" /></table></td>
        <td width="220">Not requested</td></TR>
        </table>
<br/>
<br/>
<br/>
<table width="990" align="center" cellpadding="0" cellspacing="0">
	<tr>
    	<td align="right">_____________________________</td></tr></table>
<table width="990" align="center" cellpadding="0" cellspacing="0">
    <tr>
    	<td width="802"></td>
    	<td width="186"><em>Signature of Applicant</em></td>
    </tr>
</table>
<table width="994" cellpadding="0" cellspacing="0" align="center" border="2">
	<tr>
    	<td><div align="center"><font size="+2">
    	  <strong>DETAILS OF ACTION ON APPLICATION</strong>
        </div></td>
    </tr>
</table>
<br/>
<table width="990" align="center" cellpadding="0" cellspacing="0">
<tr>
    	<td width="523">7.a). CERTIFICATION OF LEAVE CREDITS</td>
        <td width="465">7.b). RECOMMENDATION</td></tr></table>
<table width="990" align="center" cellpadding="0" cellspacing="0">
	<TR>
    	<TD width="36"></TD>
        <td width="952">as of ________________________________________________________</td>
    </TR>
</table>
<table width="990" align="center" cellpadding="0" cellspacing="0">
	<TR>
    	<TD width="36"></TD>
        <td width="952"> ____________________________________________________________</td>
    </TR>
</table>
<br/>
<table width="990" align="center" cellpadding="0" cellspacing="0">
	<tr>
    	<td width="26"></td>
        <td width="519"><table width="300" cellpadding="0" cellspacing="0" border="1">
        <td width="100"><div align="center">Vacation</div></td>
        <td width="100"><div align="center">Sick</div></td>
        <td width="100"><div align="center">Total</div></td></table></td>
        <td width="36"><table width="25" height="25" border="1"></table></td>
        <td width="407">Approved</td>
	</tr>
</table>
<table width="990" align="center" cellpadding="0" cellspacing="0">
	<tr>
    	<td width="26"></td>
        <td width="519"><table width="300" cellpadding="0" cellspacing="0" border="1" height="75">
        <td width="100" align="center"><strong><?php echo round($row_rscredits['tb2_colunm7'],3); ?></strong></td>
        <td width="100" align="center"><strong><?php echo round($row_rscredits['tb2_colunm11'],3); ?></strong></td>
        <td width="100" align="center"><strong><?php echo round($row_rscredits['tb2_colunm7']+$row_rscredits['tb2_colunm11'],3); ?></strong></td></table></td>
        <td width="36"><table width="25" height="25" border="1"></table></td>
        <td width="407">Disapproved</td>
	</tr>
</table>
<table width="990" align="center" cellpadding="0" cellspacing="0">
	<tr>
    	<td width="28"></td>
        <td width="960"><table width="300" cellpadding="0" cellspacing="0" border="0">
        <td width="100"><div align="center">Days</div></td>
        <td width="100"><div align="center">Days</div></td>
        <td width="100"><div align="center">Days</div></td></table></td>
    </tr>
</table>
<BR/>
<BR/>
<table width="990" align="center" cellpadding="0" cellspacing="0">
	<tr>
    	<td width="28"></td>
    	<td align="left">_____________________________________</td>
        <td align="RIGHT">_____________________________________</td></tr></table>
<table width="990" align="center" cellpadding="0" cellspacing="0">
    <tr>
    	<td width="102"></td>
    	<td width="674"><strong>NERISSA A. SALVAÑA</strong></td>
        <td width="212"><em>Authorized Official</em></td>
    </tr>
</table>
<table width="990" align="center" cellpadding="0" cellspacing="0">
	<tr>
    	<td width="107"></td>
        <td width="881"><em>Administrative Officer V</em></td>
	</tr>
</table>
<table width="990" align="center" cellpadding="0" cellspacing="0" border="1"></table>
<br/>
<table width="990" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td></td>
    	<td width="523">7.c). APPROVED FOR:</td>
        <td width="465">7.d). DISAPPROVED DUE TO: _______________________________</td>
    </tr>
</table>
<table width="990" align="center" cellpadding="0" cellspacing="0">
    <tr>
    	<td width="34"></td>
        <td width="99">__________</td>
        <TD width="421">days w/pay</TD>
        <td width="434">______________________________________________________</td>
    </tr>
 </table>
 <table width="990" align="center" cellpadding="0" cellspacing="0">
    <tr>
    	<td width="34"></td>
        <td width="99">__________</td>
        <TD width="421">days w/o pay</TD>
        <td width="434">______________________________________________________</td>
    </tr>
 </table>
 <table width="990" align="center" cellpadding="0" cellspacing="0">
    <tr>
    	<td width="34"></td>
        <td width="98">__________</td>
        <TD width="856">others (specify)</TD>
   </tr>
 </table>
 <br/>
 <br/>
 <table width="990" align="center" cellpadding="0" cellspacing="0">
 	<tr>
    	<td><div align="center">______________________________<br/>
    	  <em>(Signature)</em></div></td>
    </tr>
 </table>
 <br/>
 <br/>
 <table width="990" align="center" cellpadding="0" cellspacing="0">
 	<tr>
    	<td><div align="center">______________________________<br/>
    	  <em>(Authorized Official)</em></div></td>
    </tr>
 </table>
 <br/>
 <!--
 <table>
   <?php do { ?>
     <tr>
       <td><?php echo $row_rsleave['table2_id']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm1']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm2']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm3']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm4']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm5']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm6']; ?></td>
       <td></td>
       <td><?php echo $row_rsleave['tb2_colunm8']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm9']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm10']; ?></td>
       <td></td>
       <td><?php echo $row_rsleave['tb2_colunm12']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm13']; ?></td>
       <td></td>
       <td><?php echo $row_rsleave['tb2_colunm15']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm16']; ?></td>
       <td></td>
       <td></td>
       <td><?php echo $row_rsleave['tb2_colunm19']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm20']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm21']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm22']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm23']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm24']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm25']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm26']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm27']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm28']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm29']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm30']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm31']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm32']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm33']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm34']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm35']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm36']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm37']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm38']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm39']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm40']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm41']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm42']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm43']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm44']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm45']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm46']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm47']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm48']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm49']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm50']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm51']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm52']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm53']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm54']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm55']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm56']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm57']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm58']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm59']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm60']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm61']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm62']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm63']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm64']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm65']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm66']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm67']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm68']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm69']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm70']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm71']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm72']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm73']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm74']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm75']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm76']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm77']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm78']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm79']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm80']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm81']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm82']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm83']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm84']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm85']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm86']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm87']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm88']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm89']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm90']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm91']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm92']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm93']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm94']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm95']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm96']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm97']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm98']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm99']; ?></td>
       <td><?php echo $row_rsleave['tb2_colunm100']; ?></td>
     </tr>-->
     <?php } while ($row_rsleave = mysql_fetch_assoc($rsleave)); ?>
</table>

<center><a href="javascript:window.print()">PRINT</a></center>
 </body>
</html>
<?php
mysql_free_result($rsleave);

mysql_free_result($rscredits);
?>
