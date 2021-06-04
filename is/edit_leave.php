<?php require_once('../Connections/connection.php'); ?>
<?php require_once('access_leave.php'); ?>
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
$query_rsleave = sprintf("SELECT * FROM table2 WHERE table2_id = %s", GetSQLValueString($colname_rsleave, "int"));
$rsleave = mysql_query($query_rsleave, $connection) or die(mysql_error());
$row_rsleave = mysql_fetch_assoc($rsleave);
$totalRows_rsleave = mysql_num_rows($rsleave);
?>
<?php require_once('head.php'); ?>
<div>

<div class="navbar-fixed-top body-title">    
	<h3 class="col-lg-10">Process Leave</h3>
</div>

<div align="center">
                  <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
                    <table align="center">
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td><input type="submit" value="Continue"></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">ID Number:</td>
                        <td><input type="number" name="tb2_colunm2" value="<?php echo $_GET['table1_id']; ?>"  required></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr valign="baseline">
                        <td colspan="2" align="center" nowrap><strong>No. of Wk.Days</strong></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Days:</td>
                        <td><input type="number" name="tb2_colunm14" value="<?php echo $row_rsleave['tb2_colunm14']; ?>" required>
                        </td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Hours:</td>
                        <td><select name="tb2_colunm15">
                        		<option value="0">0</option>
                                <option value="0.125">1</option>
                                <option value="0.250">2</option>
                                <option value="0.375">3</option>
                                <option value="0.500">4</option>
                                <option value="0.625">5</option>
                                <option value="0.750">6</option>
                                <option value="0.875">7</option>
                                <option value="1.000">8</option>
                            </select>
                        </td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Minutes:</td>
                        <td><select name="tb2_colunm16">
                        		<option value="0">0</option>
                        		<option value="0.002">1</option>
                                <option value="0.004">2</option>
                                <option value="0.006">3</option>
                                <option value="0.008">4</option>
                                <option value="0.010">5</option>
                                <option value="0.012">6</option>
                                <option value="0.015">7</option>
                                <option value="0.017">8</option>
                                <option value="0.019">9</option>
                                <option value="0.021">10</option>
                                <option value="0.023">11</option>
                                <option value="0.025">12</option>
                                <option value="0.027">13</option>
                                <option value="0.031">15</option>
                                <option value="0.033">16</option>
                                <option value="0.035">17</option>
                                <option value="0.037">18</option>
                                <option value="0.040">19</option>
                                <option value="0.042">20</option>
                                <option value="0.044">21</option>
                                <option value="0.046">22</option>
                                <option value="0.048">23</option>
                                <option value="0.050">24</option>
                                <option value="0.052">25</option>
                                <option value="0.054">26</option>
                                <option value="0.056">27</option>
                                <option value="0.058">28</option>
                                <option value="0.060">29</option>
                                <option value="0.062">30</option>
                                <option value="0.065">31</option>
                                <option value="0.067">32</option>
                                <option value="0.069">33</option>
                                <option value="0.071">34</option>
                                <option value="0.073">35</option>
                                <option value="0.075">36</option>
                                <option value="0.077">37</option>
                                <option value="0.079">38</option>
                                <option value="0.081">39</option>
                                <option value="0.083">40</option>
                                <option value="0.085">41</option>
                                <option value="0.087">42</option>
                                <option value="0.090">43</option>
                                <option value="0.092">44</option>
                                <option value="0.094">45</option>
                                <option value="0.096">46</option>
                                <option value="0.098">47</option>
                                <option value="0.100">48</option>
                                <option value="0.102">49</option>
                                <option value="0.104">50</option>
                                <option value="0.106">51</option>
                                <option value="0.108">52</option>
                                <option value="0.110">53</option>
                                <option value="0.112">54</option>
                                <option value="0.115">55</option>
                                <option value="0.117">56</option>
                                <option value="0.119">57</option>
                                <option value="0.121">58</option>
                                <option value="0.123">59</option>
                                <option value="0.125">60</option> 	
                        	</select>
                        </td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Total:</td>
                        <td><input type="number" name="totalmin" onfocus="sumpar(this.form)" value=""  step="any" required></td></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr valign="baseline">
                        <td colspan="2" align="center" nowrap><strong>Period</strong></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Month:</td>
                        <td><select name="tb2_colunm3">
                        		<option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                        	</select>
                        </td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Year:</td>
                        <td><input type="number" name="tb2_colunm4" value="<?php echo date('Y'); ?>" required></td>
                      </tr>
                      <tr valign="baseline">
                        <td colspan="2" align="center" nowrap><strong>Vacation Leave</strong></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right"> Earned:</td>
                        <td><input type="number" name="tb2_colunm5" value="1.25" step="any" required></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Previous Balance:</td>
						<td><input type="number" name="vlprebal" value="<?php echo $row_rsleave['tb2_colunm7']; ?>" step="any" required></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Total:</td>
						<td><input type="number" name="vltotalearn" onfocus="sumvltotalearn(this.form)" step="any" value="" required></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Absence Undertime W/ pay:</td>
                        <td><input type="number" name="tb2_colunm6" onfocus="totalcol6(this.form)" value="" min="0" step="any" required></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Absence Undertime W/O pay:</td>
                        <td><input type="number" name="tb2_colunm8" onfocus="vlsumabsence9(this.form)" value="" min="0" step="any" required></td>
                      </tr>
                      <tr valign="baseline">
                        <td align="right" nowrap>New Balance:</td>
                        <td><input type="number" name="tb2_colunm7" onfocus="vlnewbal(this.form)" step="any" value="" required></td>
                      </tr>
                      <tr valign="baseline">
                        <td colspan="2" align="center" nowrap>&nbsp;</td>
                      </tr>
                      <tr valign="baseline">
                        <td colspan="2" align="center" nowrap><strong>Sick Leave</strong></td>
                      </tr> 
                      <tr valign="baseline">
                        <td nowrap align="right">Earned:</td>
                        <td><input type="number" name="tb2_colunm9" value="1.25" step="any" required></td>
                      </tr>
                      <tr valign="baseline">

                        <td nowrap align="right">Previous Balance:</td>
                        <td><input type="number" name="slprebal" value="<?php echo $row_rsleave['tb2_colunm11']; ?>" step="any" required></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Total:</td>
                        <td><input type="number" name="sltotalearn" onfocus="sumsltotalearn(this.form)" value="" step="any" required></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Absence Undertime </td>
                        <td><input type="number" name="slabsence"  value="" min="0"  step="any" required></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">W/ pay:</td>
                        <td><input type="number" name="tb2_colunm10" onfocus="totalcol0(this.form)" value="" min="0"  step="any" required></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right"> W/O pay:</td>
                        <td><input type="number" name="tb2_colunm12" value="" min="0" step="any" required></td>
                      </tr>
                      <tr valign="top">
                        <td nowrap align="right">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr valign="top">
                        <td align="right" valign="baseline" nowrap>New Balance</td>
                        <td valign="baseline"><input type="number" name="tb2_colunm11" onfocus="slnewbal(this.form)" step="any" value="" required></td>
                      </tr>
                      <tr valign="top">
                        <td nowrap align="right">Remarks:</td>
                        <td><textarea name="tb2_colunm13"></textarea></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td><input type="submit" value="Continue"></td>
                      </tr>
                    </table>
                    
                    <div style="display:none;">
                    <table>
                    	<tr valign="baseline">
                        <td nowrap align="right">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm17:</td>
                        <td><input type="text" name="tb2_colunm17" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm18:</td>
                        <td><input type="text" name="tb2_colunm18" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm19:</td>
                        <td><input type="text" name="tb2_colunm19" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm20:</td>
                        <td><input type="text" name="tb2_colunm20" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm21:</td>
                        <td><input type="text" name="tb2_colunm21" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm22:</td>
                        <td><input type="text" name="tb2_colunm22" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm23:</td>
                        <td><input type="text" name="tb2_colunm23" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm24:</td>
                        <td><input type="text" name="tb2_colunm24" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm25:</td>
                        <td><input type="text" name="tb2_colunm25" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm26:</td>
                        <td><input type="text" name="tb2_colunm26" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm27:</td>
                        <td><input type="text" name="tb2_colunm27" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm28:</td>
                        <td><input type="text" name="tb2_colunm28" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm29:</td>
                        <td><input type="text" name="tb2_colunm29" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm30:</td>
                        <td><input type="text" name="tb2_colunm30" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm31:</td>
                        <td><input type="text" name="tb2_colunm31" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm32:</td>
                        <td><input type="text" name="tb2_colunm32" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm33:</td>
                        <td><input type="text" name="tb2_colunm33" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm34:</td>
                        <td><input type="text" name="tb2_colunm34" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm35:</td>
                        <td><input type="text" name="tb2_colunm35" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm36:</td>
                        <td><input type="text" name="tb2_colunm36" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm37:</td>
                        <td><input type="text" name="tb2_colunm37" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm38:</td>
                        <td><input type="text" name="tb2_colunm38" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm39:</td>
                        <td><input type="text" name="tb2_colunm39" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm40:</td>
                        <td><input type="text" name="tb2_colunm40" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm41:</td>
                        <td><input type="text" name="tb2_colunm41" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm42:</td>
                        <td><input type="text" name="tb2_colunm42" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm43:</td>
                        <td><input type="text" name="tb2_colunm43" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm44:</td>
                        <td><input type="text" name="tb2_colunm44" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm45:</td>
                        <td><input type="text" name="tb2_colunm45" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm46:</td>
                        <td><input type="text" name="tb2_colunm46" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm47:</td>
                        <td><input type="text" name="tb2_colunm47" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm48:</td>
                        <td><input type="text" name="tb2_colunm48" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm49:</td>
                        <td><input type="text" name="tb2_colunm49" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm50:</td>
                        <td><input type="text" name="tb2_colunm50" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm51:</td>
                        <td><input type="text" name="tb2_colunm51" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm52:</td>
                        <td><input type="text" name="tb2_colunm52" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm53:</td>
                        <td><input type="text" name="tb2_colunm53" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm54:</td>
                        <td><input type="text" name="tb2_colunm54" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm55:</td>
                        <td><input type="text" name="tb2_colunm55" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm56:</td>
                        <td><input type="text" name="tb2_colunm56" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm57:</td>
                        <td><input type="text" name="tb2_colunm57" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm58:</td>
                        <td><input type="text" name="tb2_colunm58" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm59:</td>
                        <td><input type="text" name="tb2_colunm59" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm60:</td>
                        <td><input type="text" name="tb2_colunm60" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm61:</td>
                        <td><input type="text" name="tb2_colunm61" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm62:</td>
                        <td><input type="text" name="tb2_colunm62" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm63:</td>
                        <td><input type="text" name="tb2_colunm63" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm64:</td>
                        <td><input type="text" name="tb2_colunm64" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm65:</td>
                        <td><input type="text" name="tb2_colunm65" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm66:</td>
                        <td><input type="text" name="tb2_colunm66" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm67:</td>
                        <td><input type="text" name="tb2_colunm67" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm68:</td>
                        <td><input type="text" name="tb2_colunm68" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm69:</td>
                        <td><input type="text" name="tb2_colunm69" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm70:</td>
                        <td><input type="text" name="tb2_colunm70" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm71:</td>
                        <td><input type="text" name="tb2_colunm71" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm72:</td>
                        <td><input type="text" name="tb2_colunm72" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm73:</td>
                        <td><input type="text" name="tb2_colunm73" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm74:</td>
                        <td><input type="text" name="tb2_colunm74" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm75:</td>
                        <td><input type="text" name="tb2_colunm75" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm76:</td>
                        <td><input type="text" name="tb2_colunm76" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm77:</td>
                        <td><input type="text" name="tb2_colunm77" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm78:</td>
                        <td><input type="text" name="tb2_colunm78" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm79:</td>
                        <td><input type="text" name="tb2_colunm79" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm80:</td>
                        <td><input type="text" name="tb2_colunm80" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm81:</td>
                        <td><input type="text" name="tb2_colunm81" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm82:</td>
                        <td><input type="text" name="tb2_colunm82" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm83:</td>
                        <td><input type="text" name="tb2_colunm83" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm84:</td>
                        <td><input type="text" name="tb2_colunm84" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm85:</td>
                        <td><input type="text" name="tb2_colunm85" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm86:</td>
                        <td><input type="text" name="tb2_colunm86" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm87:</td>
                        <td><input type="text" name="tb2_colunm87" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm88:</td>
                        <td><input type="text" name="tb2_colunm88" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm89:</td>
                        <td><input type="text" name="tb2_colunm89" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm90:</td>
                        <td><input type="text" name="tb2_colunm90" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm91:</td>
                        <td><input type="text" name="tb2_colunm91" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm92:</td>
                        <td><input type="text" name="tb2_colunm92" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm93:</td>
                        <td><input type="text" name="tb2_colunm93" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm94:</td>
                        <td><input type="text" name="tb2_colunm94" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm95:</td>
                        <td><input type="text" name="tb2_colunm95" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm96:</td>
                        <td><input type="text" name="tb2_colunm96" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm97:</td>
                        <td><input type="text" name="tb2_colunm97" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm98:</td>
                        <td><input type="text" name="tb2_colunm98" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm99:</td>
                        <td><input type="text" name="tb2_colunm99" value="" ></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap align="right">Tb2_colunm100:</td>
                        <td><input type="text" name="tb2_colunm100" value="" ></td>
                      </tr>
                    </table>
                    </div>
                    <input type="hidden" name="table2_id" value="<?php echo $_GET['table2_id']; ?>">
                    <input type="hidden" name="tb2_colunm1" value="mbg4b-employee-leave">
                    <input type="hidden" name="MM_insert" value="form1">
                  </form>
                  <p>&nbsp;</p>
                </div>

      
</div>
<?php require_once('footer.php'); ?>
<?php
mysql_free_result($rsleave);
?>
