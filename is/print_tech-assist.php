<?php require_once('../Connections/connection.php'); ?>
<?php require_once('config.php'); ?>
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

mysql_select_db($database_connection, $connection);
$query_rstable1 = "SELECT * FROM table1 WHERE table1_id = '".$_GET['table1_id']."' AND tb1_colunm1 = 'tech-assist'";
$rstable1 = mysql_query($query_rstable1, $connection) or die(mysql_error());
$row_rstable1 = mysql_fetch_assoc($rstable1);
$totalRows_rstable1 = mysql_num_rows($rstable1);
?>

<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 12 (filtered)">
<title><?php echo $clientalias ;?></title>
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"MS Gothic";
	panose-1:2 11 6 9 7 2 5 8 2 4;}
@font-face
	{font-family:"Cambria Math";
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:"Segoe UI";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:"\@MS Gothic";
	panose-1:2 11 6 9 7 2 5 8 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-link:"Header Char";
	margin:0cm;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-link:"Footer Char";
	margin:0cm;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
a:link, span.MsoHyperlink
	{color:#0563C1;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:#954F72;
	text-decoration:underline;}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-link:"Balloon Text Char";
	margin:0cm;
	margin-bottom:.0001pt;
	font-size:9.0pt;
	font-family:"Segoe UI","sans-serif";}
span.HeaderChar
	{mso-style-name:"Header Char";
	mso-style-link:Header;}
span.FooterChar
	{mso-style-name:"Footer Char";
	mso-style-link:Footer;}
span.BalloonTextChar
	{mso-style-name:"Balloon Text Char";
	mso-style-link:"Balloon Text";
	font-family:"Segoe UI","sans-serif";}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
 /* Page Definitions */
 @page Section1
	{size:21.0cm 841.95pt;
	margin:0cm 28.8pt 7.2pt 28.8pt;}
div.Section1
	{page:Section1;}
-->
</style>

</head>

<body
<?php if ($_GET['print'] == "y") { ?>
 onload="window.print()"
<?php } else { ?>
<?php } ?>
>

<div class=Section1 align="center">

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=5 width=738
 style='width:553.25pt;margin-left:12.25pt;border-collapse:collapse;border:
 none'>
      <tr>
        <td width="50" align="center"><img src="../images/logogrey.jpg" width="50" /></td>
        <td><p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal'>
        <?php echo $clientfullname;?><br />
        <?php echo $clientbranch;?> Region</p></td>
      </tr>
</table>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 width=738
 style='width:553.25pt;margin-left:12.25pt;border-collapse:collapse;border:
 none'>
  <tr>
    <td width=738 colspan=6 valign=top style='width:553.25pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:20.65pt'><p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:justify;line-height:normal'>Reminder: Please <a href="javascript:window.print()" title="Click here to print"><input type="button" value="PRINT"></a> a copy of this form with signatures/authorization.  Once processed, a Technical Support Representative will contact you to schedule service.</p></td>
  </tr>
</table>



<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 width=738
 style='width:553.25pt;margin-left:12.25pt;border-collapse:collapse;border:
 none'>
 <tr>
  <td width=81 valign=top style='width:60.6pt;padding:0cm 0cm 0cm 0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal'><b>Ticket No :</b></p>
  </td>
  <td width=207 valign=top style='width:155.4pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 0cm 0cm 0cm'><p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal'><b><?php echo $row_rstable1['table1_id']; ?></b></p></td>
  <td width=144 valign=top style='width:108.0pt;padding:0cm 0cm 0cm 0cm'>
  
  </td>
  <td width=143 valign=top style='width:107.55pt;padding:0cm 0cm 0cm 0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal'><b>Date (YYYY/MM/DD):</b></p>
  </td>
  <td valign=top style='width:33.25pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 0cm 0cm 0cm'>
        <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><?php echo $row_rstable1['tb1_colunm2']; ?></b></p>
  </td>
  </tr>
</table>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:normal'><b><span style='font-size:2.0pt'>&nbsp;</span></b></p>

<div align=center>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=738
 style='width:553.25pt;margin-left:12.25pt;border-collapse:collapse;border:
 none'>
 <tr>
  <td width=738 colspan=6 valign=top style='width:553.25pt;border:solid windowtext 1.0pt;
  background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b>Requester’s Information</b></p>
  </td>
 </tr>
 <tr>
  <td width=352 colspan=3 valign=top style='width:264.25pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>Name: <?php echo $row_rstable1['tb1_colunm3']; ?> </p>
  </td>
  <td width=385 colspan=3 valign=top style='width:289.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>Sex: <?php echo $row_rstable1['tb1_colunm5']; ?></p>
  </td>
 </tr>
 <tr>
  <td width=352 colspan=3 valign=top style='width:264.25pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>Office: <?php echo $row_rstable1['tb1_colunm6']; ?> </p>
  </td>
  <td width=385 colspan=3 valign=top style='width:289.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>Building/Room/Flr: <?php echo $row_rstable1['tb1_colunm7']; ?></p>
  </td>
 </tr>
 <tr>
  <td width=352 colspan=3 valign=top style='width:264.25pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>Phone: <?php echo $row_rstable1['tb1_colunm8']; ?></p>
  </td>
  <td width=385 colspan=3 valign=top style='width:289.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>Email Address: <?php echo $row_rstable1['tb1_colunm9']; ?></p>
  </td>
 </tr>
 <tr>
  <td width=738 colspan=6 valign=top style='width:553.25pt;border:solid windowtext 1.0pt;
  border-top:none;background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b>Request Information</b></p>
  </td>
 </tr>
 <tr style='height:20.65pt'>
  <td width=738 colspan=6 valign=top style='width:553.25pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:20.65pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b>Type of request:       </b></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:7.0pt'>&nbsp;</span></b></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>        Technical Assistance</p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>                 <span style='font-family:"MS Gothic"'><?php if ($row_rstable1['tb1_colunm10'] == "Hardware") {
  echo "&#9746;";
} else {
  echo "&#9744;";
}
?></span>Hardware   
  <span style='font-family:"MS Gothic"'><?php if ($row_rstable1['tb1_colunm10'] == "Software") {
  echo "&#9746;";
} else {
  echo "&#9744;";
}
?></span>Software            <span
  style='font-family:"MS Gothic"'><?php if ($row_rstable1['tb1_colunm10'] == "Local Area Network") {
  echo "&#9746;";
} else {
  echo "&#9744;";
}
?></span>Local Area Network           <span
  style='font-family:"MS Gothic"'><?php if ($row_rstable1['tb1_colunm10'] == "Information Systems") {
  echo "&#9746;";
} else {
  echo "&#9744;";
}
?></span>Information Systems           <span
  style='font-family:"MS Gothic"'><?php if ($row_rstable1['tb1_colunm10'] == "Databases") {
  echo "&#9746;";
} else {
  echo "&#9744;";
}
?></span>Databases  </p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:5.0pt'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>        Database System Assistance (In-house)</p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>                 <span style='font-family:"MS Gothic"'><?php if ($row_rstable1['tb1_colunm10'] == "New User") {
  echo "&#9746;";
} else {
  echo "&#9744;";
}
?></span>New User                                                      <span
  style='font-family:"MS Gothic"'><?php if ($row_rstable1['tb1_colunm10'] == "Change Password") {
  echo "&#9746;";
} else {
  echo "&#9744;";
}
?></span>Change Password                                   <span
  style='font-family:"MS Gothic"'><?php if ($row_rstable1['tb1_colunm10'] == "System Modification") {
  echo "&#9746;";
} else {
  echo "&#9744;";
}
?></span>System Modification</p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:5.0pt'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>       
  Website                                                                                                     
                                                         E-mail</p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>                 <span style='font-family:"MS Gothic"'><?php if ($row_rstable1['tb1_colunm10'] == "Website Posting") {
  echo "&#9746;";
} else {
  echo "&#9744;";
}
?></span>Posting                                                                                                              
                                           <span style='font-family:"MS Gothic"'><?php if ($row_rstable1['tb1_colunm10'] == "Email Assistance") {
  echo "&#9746;";
} else {
  echo "&#9744;";
}
?></span>Assistance 
  </p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:5.0pt'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>        Asset/Borrow                          </p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>                 <span style='font-family:"MS Gothic"'><?php if ($row_rstable1['tb1_colunm10'] == "Hardware Components") {
  echo "&#9746;";
} else {
  echo "&#9744;";
}
?></span>Hardware Components                              <span style='font-family:"MS Gothic"'><?php if ($row_rstable1['tb1_colunm10'] == "Peripherals") {
  echo "&#9746;";
} else {
  echo "&#9744;";
}
?> </span>Peripherals 
                                              <span style='font-family:"MS Gothic"'><?php if ($row_rstable1['tb1_colunm10'] == "Tools") {
  echo "&#9746;";
} else {
  echo "&#9744;";
}
?></span>Tools</p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:5.0pt'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>       <span style='font-size:2.0pt'>  </span></p>
  <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=666
   style='width:499.5pt;margin-left:33.6pt;border-collapse:collapse;border:
   none'>
   <tr>
    <td width=114 valign=top style='width:85.5pt;border:none;padding:0cm .7pt 0cm .7pt'>
    <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
    line-height:normal'><span style='position:absolute;z-index:1;margin-left:
    -19px;margin-top:0px;width:22px;height:27px'>
    <table cellpadding=0 cellspacing=0>
     <tr>
      <td width=22 height=27 bgcolor=white style='vertical-align:top;
      background:white'><span style='position:absolute;z-index:1'>
      <table cellpadding=0 cellspacing=0 width="100%">
       <tr>
        <td>
        <div style='padding:0pt 0pt 0pt 0pt'>
        <p class=MsoNormal><span style='font-family:"MS Gothic"'><?php if ($row_rstable1['tb1_colunm10'] == "Others") {
  echo "&#9746;";
} else {
  echo "&#9744;";
}
?></span></p>
        </div>
        </td>
       </tr>
      </table>
      </span>&nbsp;</td>
     </tr>
    </table>
    </span> Others:</p>
    </td>
    <td width=552 valign=top style='width:414.0pt;border:none'>
    </td>
   </tr>
  </table>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'> <span style='font-size:3.0pt'>                                          
  </span></p>
  </td>
 </tr>
 <tr>
  <td width=738 colspan=6 valign=top style='width:553.25pt;border:solid windowtext 1.0pt;
  border-top:none;background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b>DESCRIPTION OF REQUEST</b><i>(Please clearly write down the
  details of the request.)</i></p>
  </td>
 </tr>
 <tr style='height:50.8pt'>
  <td width=738 colspan=6 valign=top style='width:553.25pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:70.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><?php echo $row_rstable1['tb1_colunm11']; ?></p>
  </td>
 </tr>
 <tr>
  <td width=738 colspan=6 valign=top style='width:553.25pt;border:solid windowtext 1.0pt;
  border-top:none;background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b>Authorization</b></p>
  </td>
 </tr>
 <tr>
  <td width=738 colspan=6 valign=top style='width:553.25pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>All requests for service must be
  approved by the appropriate <b>supervisor (at least division chief, OIC,
  immediate supervisor or next in rank staff)</b> of the requester. By signing
  below the manager/supervisor certifies that <a name="_GoBack"></a>the service
  is required.</span></p>
  </td>
 </tr>
 <tr style='height:3.75pt'>
  <td width=352 colspan=3 valign=top style='width:264.25pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:3.75pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>Full Name:</p>
  </td>
  <td width=385 colspan=3 valign=top style='width:289.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.75pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>Position/Title:</p>
  </td>
 </tr>
 <tr style='height:45.85pt'>
  <td width=738 colspan=6 valign=top style='width:553.25pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:45.85pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:20.0pt'>&nbsp;</span></p>
  <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=673
   style='width:504.45pt;margin-left:11.1pt;border-collapse:collapse;
   border:none'>
   <tr>
    <td width=312 valign=top style='width:234.0pt;border:none;border-bottom:
    solid windowtext 1.0pt;padding:0cm 0cm 0cm 0cm'>
    
    </td>
    <td width=198 valign=top style='width:148.5pt;border:none;padding:0cm 0cm 0cm 0cm'>
    
    </td>
    <td width=44 valign=top style='width:33.25pt;border:none;border-bottom:
    solid windowtext 1.0pt;padding:0cm 0cm 0cm 0cm'>
    
    </td>
    <td width=9 valign=top style='width:7.05pt;border:none;padding:0cm 0cm 0cm 0cm'>
    <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>/</b></p>
    </td>
    <td width=48 valign=top style='width:36.0pt;border:none;border-bottom:solid windowtext 1.0pt;
    padding:0cm 0cm 0cm 0cm'>
    
    </td>
    <td width=7 valign=top style='width:5.25pt;border:none;padding:0cm 0cm 0cm 0cm'>
    <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>/</b></p>
    </td>
    <td width=54 valign=top style='width:40.4pt;border:none;border-bottom:solid windowtext 1.0pt;
    padding:0cm 0cm 0cm 0cm'>
    
    </td>
   </tr>
   <tr>
    <td width=312 valign=top style='width:234.0pt;border:none;padding:0cm 0cm 0cm 0cm'>
    <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'>Signature</p>
    </td>
    <td width=198 valign=top style='width:148.5pt;border:none;padding:0cm 0cm 0cm 0cm'>
    <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:justify;line-height:normal'>&nbsp;</p>
    </td>
    <td width=163 colspan=5 valign=top style='width:121.95pt;border:none;
    padding:0cm 0cm 0cm 0cm'>
    <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'>Date (mm/dd/yyyy):</p>
    </td>
   </tr>
  </table>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:2.0pt'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:2.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=738 colspan=6 valign=top style='width:553.25pt;border:solid windowtext 1.0pt;
  border-top:none;background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b>Infrastructure Service Authorization</b></p>
  </td>
 </tr>
 <tr>
  <td width=738 colspan=6 valign=top style='width:553.25pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>All requests for service must be
  coordinated with and signed by the Chief of RICTu or his/her authorized
  representative.</span></p>
  </td>
 </tr>
 <tr style='height:13.9pt'>
  <td width=352 colspan=3 valign=top style='width:264.25pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:13.9pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>Full Name:</p>
  </td>
  <td width=385 colspan=3 valign=top style='width:289.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.9pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'>Position/Title:</p>
  </td>
 </tr>
 <tr style='height:49.0pt'>
  <td width=738 colspan=6 valign=top style='width:553.25pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:49.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=673
   style='width:504.45pt;margin-left:11.1pt;border-collapse:collapse;
   border:none'>
   <tr>
    <td width=312 valign=top style='width:234.0pt;border:none;border-bottom:
    solid windowtext 1.0pt;padding:0cm 0cm 0cm 0cm'>
    
    </td>
    <td width=198 valign=top style='width:148.5pt;border:none;padding:0cm 0cm 0cm 0cm'>
    
    </td>
    <td width=44 valign=top style='width:33.25pt;border:none;border-bottom:
    solid windowtext 1.0pt;padding:0cm 0cm 0cm 0cm'>
    
    </td>
    <td width=9 valign=top style='width:7.05pt;border:none;padding:0cm 0cm 0cm 0cm'>
    <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>/</b></p>
    </td>
    <td width=48 valign=top style='width:36.0pt;border:none;border-bottom:solid windowtext 1.0pt;
    padding:0cm 0cm 0cm 0cm'>
    
    </td>
    <td width=7 valign=top style='width:5.25pt;border:none;padding:0cm 0cm 0cm 0cm'>
    <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><b>/</b></p>
    </td>
    <td width=54 valign=top style='width:40.4pt;border:none;border-bottom:solid windowtext 1.0pt;
    padding:0cm 0cm 0cm 0cm'>
    
    </td>
   </tr>
   <tr>
    <td width=312 valign=top style='width:234.0pt;border:none;padding:0cm 0cm 0cm 0cm'>
    <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'>Signature</p>
    </td>
    <td width=198 valign=top style='width:148.5pt;border:none;padding:0cm 0cm 0cm 0cm'>
    <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:justify;line-height:normal'>&nbsp;</p>
    </td>
    <td width=163 colspan=5 valign=top style='width:121.95pt;border:none;
    padding:0cm 0cm 0cm 0cm'>
    <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:
    .0001pt;text-align:center;line-height:normal'>Date (mm/dd/yyyy):</p>
    </td>
   </tr>
  </table>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:2.0pt'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:1.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:14.35pt'>
  <td width=738 colspan=6 valign=top style='width:553.25pt;border:solid windowtext 1.0pt;
  border-top:none;background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt;height:14.35pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b>For RICTu Staff Only</b>(Use Back of Form or Separate sheet if
  necessary)</p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=91 valign=top style='width:68.25pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'>Date</p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'>Time</p>
  </td>
  <td width=294 colspan=2 valign=top style='width:220.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'>Action Taken</p>
  </td>
  <td width=120 valign=top style='width:90.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'>Action Staff</p>
  </td>
  <td width=149 valign=top style='width:111.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'>Signature</p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=91 valign=top style='width:68.25pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  
  </td>
  <td width=294 colspan=2 valign=top style='width:220.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  
  </td>
  <td width=120 valign=top style='width:90.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  
  </td>
  <td width=149 valign=top style='width:111.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=91 valign=top style='width:68.25pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  
  </td>
  <td width=294 colspan=2 valign=top style='width:220.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  
  </td>
  <td width=120 valign=top style='width:90.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  
  </td>
  <td width=149 valign=top style='width:111.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=91 valign=top style='width:68.25pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  
  </td>
  <td width=294 colspan=2 valign=top style='width:220.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  
  </td>
  <td width=120 valign=top style='width:90.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  
  </td>
  <td width=149 valign=top style='width:111.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  
  </td>
 </tr>
 <tr height=0>
  <td width=91 style='border:none'></td>
  <td width=84 style='border:none'></td>
  <td width=177 style='border:none'></td>
  <td width=117 style='border:none'></td>
  <td width=120 style='border:none'></td>
  <td width=149 style='border:none'></td>
 </tr>
</table>

</div>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b><i><span style='font-size:5.0pt'>&nbsp;</span></i></b></p>

<div align=center>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=738
 style='width:553.25pt;margin-left:12.25pt;border-collapse:collapse;border:
 none'>
 <tr style='height:1.9pt'>
  <td width=102 nowrap valign=top style='width:76.5pt;border-top:solid windowtext 1.0pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:none;
  padding:0cm 1.45pt 0cm 1.45pt;height:1.9pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><i><span style='font-size:3.0pt'>               </span></i></b></p>
  </td>
  <td width=16 nowrap valign=top style='width:12.15pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0cm 1.45pt 0cm 1.45pt;height:1.9pt'>
  
  </td>
  <td width=104 nowrap valign=top style='width:77.85pt;border:none;border-top:
  solid windowtext 1.0pt;padding:0cm 1.45pt 0cm 1.45pt;height:1.9pt'>
  
  </td>
  <td width=18 valign=top style='width:13.5pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0cm 1.45pt 0cm 1.45pt;height:1.9pt'>
  
  </td>
  <td width=140 valign=top style='width:105.3pt;border:none;border-top:solid windowtext 1.0pt;
  padding:0cm 1.45pt 0cm 1.45pt;height:1.9pt'>
  
  </td>
  <td width=18 nowrap valign=top style='width:13.25pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0cm 1.45pt 0cm 1.45pt;height:1.9pt'>
  
  </td>
  <td width=114 nowrap valign=top style='width:85.5pt;border:none;border-top:
  solid windowtext 1.0pt;padding:0cm 1.45pt 0cm 1.45pt;height:1.9pt'>
  
  </td>
  <td width=16 valign=top style='width:12.15pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0cm 0cm 0cm 2.9pt;height:1.9pt'>
  
  </td>
  <td width=128 valign=top style='width:95.65pt;border:none;border-top:solid windowtext 1.0pt;
  padding:0cm 0cm 0cm 2.9pt;height:1.9pt'>
  
  </td>
  <td width=16 valign=top style='width:11.85pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0cm 0cm 0cm 2.9pt;height:1.9pt'>
  
  </td>
  <td width=66 valign=top style='width:49.8pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0cm 0cm 0cm 2.9pt;height:1.9pt'>
  
  </td>
 </tr>
 </table>
 <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=738
 style='width:553.25pt;margin-left:12.25pt;border-collapse:collapse;border:
 none'>
 <tr>
  <td width=102 nowrap valign=top style='width:76.5pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0cm 1.45pt 0cm 1.45pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:10.0pt'>Feedback Rating:</span></b></p>
  </td>
  <td width=16 nowrap valign=top style='width:12.15pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 1.45pt 0cm 1.45pt'>
  
  </td>
  <td width=104 nowrap valign=top style='width:77.85pt;border:none;border-right:
  solid windowtext 1.0pt;padding:0cm 1.45pt 0cm 1.45pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>Excellent </span></p>
  </td>
  <td width=18 valign=top style='width:13.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 1.45pt 0cm 1.45pt'>
  
  </td>
  <td width=140 valign=top style='width:105.3pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 1.45pt 0cm 1.45pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>Very Satisfactory </span></p>
  </td>
  <td width=18 nowrap valign=top style='width:13.25pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 1.45pt 0cm 1.45pt'>
  
  </td>
  <td width=114 nowrap valign=top style='width:85.5pt;border:none;border-right:
  solid windowtext 1.0pt;padding:0cm 1.45pt 0cm 1.45pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>Satisfactory </span></p>
  </td>
  <td width=16 valign=top style='width:12.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 0cm 0cm 2.9pt'>
  
  </td>
  <td width=128 valign=top style='width:95.65pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 0cm 0cm 2.9pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>Unsatisfactory </span></p>
  </td>
  <td width=16 valign=top style='width:11.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 0cm 0cm 2.9pt'>
  
  </td>
  <td width=66 valign=top style='width:49.8pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 0cm 0cm 2.9pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt'>Poor </span></p>
  </td>
 </tr>
 <tr>
  <td width=102 nowrap valign=top style='width:76.5pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0cm 1.45pt 0cm 1.45pt'>
  
  </td>
  <td width=16 nowrap valign=top style='width:12.15pt;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0cm 1.45pt 0cm 1.45pt'>
  
  </td>
  <td width=104 nowrap valign=top style='width:77.85pt;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0cm 1.45pt 0cm 1.45pt'>
  
  </td>
  <td width=18 valign=top style='width:13.5pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 1.45pt 0cm 1.45pt'>
  
  </td>
  <td width=140 valign=top style='width:105.3pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 1.45pt 0cm 1.45pt'>
  
  </td>
  <td width=18 nowrap valign=top style='width:13.25pt;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0cm 1.45pt 0cm 1.45pt'>
  
  </td>
  <td width=114 nowrap valign=top style='width:85.5pt;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0cm 1.45pt 0cm 1.45pt'>
  
  </td>
  <td width=16 valign=top style='width:12.15pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 0cm 0cm 2.9pt'>
  
  </td>
  <td width=128 valign=top style='width:95.65pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 0cm 0cm 2.9pt'>
  
  </td>
  <td width=16 valign=top style='width:11.85pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 0cm 0cm 2.9pt'>
  
  </td>
  <td width=66 valign=top style='width:49.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 0cm 0cm 2.9pt'>
  
  </td>
 </tr>
</table>

</div>



<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b><i><span style='font-size:4.0pt'>&nbsp;</span></i></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=738
 style='width:553.25pt;margin-left:12.25pt;border-collapse:collapse;border:
 none'>
 <tr>
  <td width=168 valign=top style='width:126.0pt;border:none;padding:0cm 0cm 0cm 0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:9.0pt'>Released by:</span></b></p>
  </td>
  <td width=18 valign=top style='width:13.5pt;border:none;padding:0cm 0cm 0cm 0cm'>
  
  </td>
  <td width=30 valign=top style='width:22.5pt;border:none;padding:0cm 0cm 0cm 0cm'>
  
  </td>
  <td width=6 valign=top style='width:4.5pt;border:none;padding:0cm 0cm 0cm 0cm'>
  
  </td>
  <td width=30 valign=top style='width:22.5pt;border:none;padding:0cm 0cm 0cm 0cm'>
  
  </td>
  <td width=6 valign=top style='width:4.5pt;border:none;padding:0cm 0cm 0cm 0cm'>
  
  </td>
  <td width=36 valign=top style='width:27.0pt;border:none;padding:0cm 0cm 0cm 0cm'>
  
  </td>
  <td width=156 valign=top style='width:117.0pt;border:none;padding:0cm 0cm 0cm 0cm'>
  
  </td>
  <td width=156 valign=top style='width:117.0pt;border:none;padding:0cm 0cm 0cm 0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:9.0pt'>Received by:</span></b></p>
  </td>
  <td width=24 valign=top style='width:18.0pt;border:none;padding:0cm 0cm 0cm 0cm'>
  
  </td>
  <td width=30 valign=top style='width:22.5pt;border:none;padding:0cm 0cm 0cm 0cm'>
  
  </td>
  <td width=6 valign=top style='width:4.5pt;border:none;padding:0cm 0cm 0cm 0cm'>
  
  </td>
  <td width=30 valign=top style='width:22.5pt;border:none;padding:0cm 0cm 0cm 0cm'>
  
  </td>
  <td width=6 valign=top style='width:4.5pt;border:none;padding:0cm 0cm 0cm 0cm'>
  
  </td>
  <td width=36 valign=top style='width:27.0pt;border:none;padding:0cm 0cm 0cm 0cm'>
  
  </td>
 </tr>
 <tr style='height:22.05pt'>
  <td width=168 valign=bottom style='width:126.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0cm 0cm 0cm 0cm;height:22.05pt'>
  </td>
  <td width=18 valign=bottom style='width:13.5pt;border:none;padding:0cm 0cm 0cm 0cm;
  height:22.05pt'>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0cm 0cm 0cm 0cm;height:22.05pt'>
  </td>
  <td width=6 valign=bottom style='width:4.5pt;border:none;padding:0cm 0cm 0cm 0cm;
  height:22.05pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b>/</b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0cm 0cm 0cm 0cm;height:22.05pt'>
  </td>
  <td width=6 valign=bottom style='width:4.5pt;border:none;padding:0cm 0cm 0cm 0cm;
  height:22.05pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b>/</b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0cm 0cm 0cm 0cm;height:22.05pt'>
  </td>
  <td width=156 valign=bottom style='width:117.0pt;border:none;padding:0cm 0cm 0cm 0cm;
  height:22.05pt'>
  </td>
  <td width=156 valign=bottom style='width:117.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0cm 0cm 0cm 0cm;height:22.05pt'>
  </td>
  <td width=24 valign=bottom style='width:18.0pt;border:none;padding:0cm 0cm 0cm 0cm;
  height:22.05pt'>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0cm 0cm 0cm 0cm;height:22.05pt'>
  </td>
  <td width=6 valign=bottom style='width:4.5pt;border:none;padding:0cm 0cm 0cm 0cm;
  height:22.05pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b>/</b></p>
  </td>
  <td width=30 valign=bottom style='width:22.5pt;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0cm 0cm 0cm 0cm;height:22.05pt'>
  </td>
  <td width=6 valign=bottom style='width:4.5pt;border:none;padding:0cm 0cm 0cm 0cm;
  height:22.05pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b>/</b></p>
  </td>
  <td width=36 valign=bottom style='width:27.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0cm 0cm 0cm 0cm;height:22.05pt'>
  </td>
 </tr>
 <tr>
  <td width=168 valign=top style='width:126.0pt;border:none;padding:0cm 0cm 0cm 0cm'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt'>Signature
  over printed name</span></p>
  </td>
  <td width=18 valign=top style='width:13.5pt;border:none;padding:0cm 0cm 0cm 0cm'>
  
  </td>
  <td width=108 colspan=5 valign=top style='width:81.0pt;border:none;
  padding:0cm 0cm 0cm 0cm'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt'>Date
  (mm/dd/yyyy)</span></p>
  </td>
  <td width=156 valign=top style='width:117.0pt;border:none;padding:0cm 0cm 0cm 0cm'>
  
  </td>
  <td width=156 valign=top style='width:117.0pt;border:none;padding:0cm 0cm 0cm 0cm'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt'>Signature
  over printed name</span></p>
  </td>
  <td width=24 valign=top style='width:18.0pt;border:none;padding:0cm 0cm 0cm 0cm'>
  
  </td>
  <td width=108 colspan=5 valign=top style='width:81.0pt;border:none;
  padding:0cm 0cm 0cm 0cm'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt'>Date
  (mm/dd/yyyy)</span></p>
  </td>
 </tr>
</table>

</div>

</body>

</html>
<?php
mysql_free_result($rstable1);
?>
