<?php require_once('../Connections/connection.php'); ?>
<?php require_once('config.php'); ?>
<?php date_default_timezone_set('Asia/Manila'); ?>
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
$query_rstable3 = "SELECT * FROM table3 WHERE tb3_colunm1 = '".$_GET['user_id']."' AND tb3_colunm2 LIKE '%".$_GET['date']."%' ORDER BY tb3_colunm2 ASC";
$rstable3 = mysql_query($query_rstable3, $connection) or die(mysql_error());
$row_rstable3 = mysql_fetch_assoc($rstable3);
$totalRows_rstable3 = mysql_num_rows($rstable3);

mysql_select_db($database_connection, $connection);
$query_rsusers = "SELECT * FROM users_tb WHERE user_id = '".$_GET['user_id']."'";
$rsusers = mysql_query($query_rsusers, $connection) or die(mysql_error());
$row_rsusers = mysql_fetch_assoc($rsusers);
$totalRows_rsusers = mysql_num_rows($rsusers);

?>
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">

<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
b\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<title>Online DTR</title>

<!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="11271" fill="f" fillcolor="white [7]"
  strokecolor="black [0]">
  <v:fill color="white [7]" color2="white [7]" on="f"/>
  <v:stroke color="black [0]" color2="white [7]">
   <o:left v:ext="view" color="black [0]" color2="white [7]"/>
   <o:top v:ext="view" color="black [0]" color2="white [7]"/>
   <o:right v:ext="view" color="black [0]" color2="white [7]"/>
   <o:bottom v:ext="view" color="black [0]" color2="white [7]"/>
   <o:column v:ext="view" color="black [0]" color2="white [7]"/>
  </v:stroke>
  <v:shadow color="#ccc [4]"/>
  <v:textbox inset="2.88pt,2.88pt,2.88pt,2.88pt"/>
  <o:colormru v:ext="edit" colors="#ddd"/>
  <o:colormenu v:ext="edit" fillcolor="#ddd" strokecolor="black [0]"
   shadowcolor="#ccc [4]"/>
 </o:shapedefaults><o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body style='margin:0'>

<div style='position:absolute;width:8.-1863in;height:11.107in'>
<!--[if gte vml 1]><![if mso | ie]><v:shapetype id="_x0000_t201" coordsize="21600,21600"
 o:spt="201" path="m,l,21600r21600,l21600,xe">
 <v:stroke joinstyle="miter"/>
 <v:path shadowok="f" o:extrusionok="f" strokeok="f" fillok="f" o:connecttype="rect"/>
 <o:lock v:ext="edit" shapetype="t"/>
</v:shapetype><v:shape id="_x0000_s1025" type="#_x0000_t201" style='position:absolute;
 left:35.06pt;top:42.26pt;width:525.15pt;height:756.32pt;z-index:1;
 mso-wrap-distance-left:2.88pt;mso-wrap-distance-top:2.88pt;
 mso-wrap-distance-right:2.88pt;mso-wrap-distance-bottom:2.88pt' stroked="f"
 strokecolor="black [0]" insetpen="t" o:cliptowrap="t">
 <v:stroke color2="white [7]">
  <o:left v:ext="view" color="black [0]" color2="white [7]" weight="0"/>
  <o:top v:ext="view" color="black [0]" color2="white [7]" weight="0"/>
  <o:right v:ext="view" color="black [0]" color2="white [7]" weight="0"/>
  <o:bottom v:ext="view" color="black [0]" color2="white [7]" weight="0"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:shadow color="#ccc [4]"/>
 <v:textbox inset="0,0,0,0">
 </v:textbox>
</v:shape><![endif]><![endif]-->

<table v:shapes="_x0000_s1025" cellpadding=5 cellspacing=5 width=700
 border=1 dir=ltr style='width:525.15pt;border-collapse:
 collapse'>
 <tr>
  <td width=700 height=42 colspan=7 style='width:525.1475pt;height:31.155pt;
  padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:
  2.88pt'>
  <p class=MsoNormal style='text-align:center;text-align:center'><span
  lang=en-US style='font-family:Arial;color:black;font-weight:bold;language:
  en-US'><?php echo $clientfullname;?> - <?php echo $clientbranch;?></span></p>
  <p class=MsoNormal style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:12.0pt;font-family:Arial;color:black;font-weight:
  bold;language:en-US'>DAILY TIME RECORD</span></p>
  </td>
 </tr>
 <tr>
  <td width=700 height=23 colspan=2 style='width:68.4359pt;height:17.384pt;
  padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:
  2.88pt'>
  <p class=MsoNormal><span lang=en-US style='font-size:9.0pt;font-family:Arial;
  color:black;font-weight:bold;language:en-US'>Name </span></p>
  </td>
  <td height=23 colspan="4" style='width:456.7115pt;height:17.384pt;
  padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:
  2.88pt;border-bottom:solid black .25pt'>
    <p class=MsoNormal>&nbsp;<?php echo $row_rsusers['firstname']; ?> <?php echo $row_rsusers['middlename']; ?> <?php echo $row_rsusers['lastname']; ?></p>
  </td>
  <td width=357 height=23 style='width:456.7115pt;height:17.384pt;
  padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:
  2.88pt;border-bottom:solid black .25pt'><p align="right"><a href="javascript:window.print()"><img src="../images/b_print.png" alt="PRINT" title="PRINT"></a></p></td>
 </tr>
 <tr>
  <td width=700 height=23 colspan=2 style='width:68.4359pt;height:17.509pt;
  padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:
  2.88pt'>
  <p class=MsoNormal><span lang=en-US style='font-size:9.0pt;font-family:Arial;
  color:black;font-weight:bold;language:en-US'>Position </span></p>
  </td>
  <td width=609 height=23 colspan=5 style='width:456.7115pt;height:17.509pt;
  padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:
  2.88pt;border-top:solid black .25pt;border-bottom:solid black .25pt'>
  <p class=MsoNormal>&nbsp; <?php echo $row_rsusers['designation']; ?> </p>
  </td>
 </tr>
 <tr>
   <td height=24 colspan=2 style='width:68.4359pt;height:17.564pt;
  padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:
  2.88pt'><p class=MsoNormal><span lang=en-US style='font-size:9.0pt;font-family:Arial;
  color:black;font-weight:bold;language:en-US'>Division </span></p></td>
   <td height=24 colspan=5 style='width:456.7115pt;height:17.564pt;
  padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:
  2.88pt;border-top:solid black .25pt;border-bottom:solid black .25pt'><p class=MsoNormal>&nbsp; <?php echo $row_rsusers['division']; ?> </p></td>
 </tr>
 <tr>
  <td width=700 height=24 colspan=2 style='width:68.4359pt;height:17.564pt;
  padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:
  2.88pt'>
  <p class=MsoNormal><span lang=en-US style='font-size:9.0pt;font-family:Arial; color:black;font-weight:bold;language:en-US'>Employee No. </span></p>
  </td>
  <td width=609 height=24 colspan=5 style='width:456.7115pt;height:17.564pt;
  padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:
  2.88pt;border-top:solid black .25pt;border-bottom:solid black .25pt'>
  <p class=MsoNormal>&nbsp; <?php echo $_GET['user_id'] ;?> </p>
  </td>
 </tr>
 <tr>
   <td width=700 height=26 colspan=7 bgcolor="#DDDDDD" style='width:525.1475pt;
  height:18.909pt;padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;
  padding-bottom:2.88pt;background:#DDDDDD;border:solid black .5pt'>
     <p class=MsoNormal style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:11.0pt;font-family:Arial;color:black;font-weight:
  bold;language:en-US'><?php echo date('F Y', strtotime($_GET['date'])); ?></span></p>
     </td>
 </tr>
 <tr>
  <td width=700 height=44 rowspan=2 bgcolor="#DDDDDD" style='width:32.4359pt;
  height:33.322pt;padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;
  padding-bottom:2.88pt;background:#DDDDDD;border:solid black .5pt'>
  <p class=MsoNormal style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:9.0pt;font-family:Arial;color:black;font-weight:
  bold;language:en-US'>Date</span></p>
  </td>
  <td width=48 height=44 rowspan=2 bgcolor="#DDDDDD" style='width:36.0pt;
  height:33.322pt;padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;
  padding-bottom:2.88pt;background:#DDDDDD;border:solid black .5pt'>
  <p class=MsoNormal style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:9.0pt;font-family:Arial;color:black;font-weight:
  bold;language:en-US'>Day</span></p>
  </td>
  <td width=609 height=22 colspan=2 bgcolor="#DDDDDD" style='width:94.5pt;
  height:16.661pt;padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;
  padding-bottom:2.88pt;background:#DDDDDD;border:solid black .5pt'>
  <p class=MsoNormal style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:9.0pt;font-family:Arial;color:black;font-weight:
  bold;language:en-US'>Morning</span></p>
  </td>
  <td width=126 height=22 colspan=2 bgcolor="#DDDDDD" style='width:94.5pt;
  height:16.661pt;padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;
  padding-bottom:2.88pt;background:#DDDDDD;border:solid black .5pt'>
  <p class=MsoNormal style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:9.0pt;font-family:Arial;color:black;font-weight:
  bold;language:en-US'>Afternoon</span></p>
  </td>
  <td width=357 height=44 rowspan=2 bgcolor="#DDDDDD" style='width:267.7115pt;
  height:33.322pt;padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;
  padding-bottom:2.88pt;background:#DDDDDD;border:solid black .5pt'>
  <p class=MsoNormal style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:9.0pt;font-family:Arial;color:black;font-weight:
  bold;language:en-US'>Accomplishment</span></p>
  </td>
 </tr>
 
 
 
 <tr>
  <td width=609 height=22 bgcolor="#DDDDDD" style='width:49.5pt;height:16.661pt;
  padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:
  2.88pt;background:#DDDDDD;border:solid black .5pt'>
  <p class=MsoNormal style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:9.0pt;font-family:Arial;color:black;font-weight:
  bold;language:en-US'>In</span></p>
  </td>
  <td width=60 height=22 bgcolor="#DDDDDD" style='width:45.0pt;height:16.661pt;
  padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:
  2.88pt;background:#DDDDDD;border:solid black .5pt'>
  <p class=MsoNormal style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:9.0pt;font-family:Arial;color:black;font-weight:
  bold;language:en-US'>Out</span></p>
  </td>
  <td width=126 height=22 bgcolor="#DDDDDD" style='width:45.0pt;height:16.661pt;
  padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:
  2.88pt;background:#DDDDDD;border:solid black .5pt'>
  <p class=MsoNormal style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:9.0pt;font-family:Arial;color:black;font-weight:
  bold;language:en-US'>In</span></p>
  </td>
  <td width=66 height=22 bgcolor="#DDDDDD" style='width:49.5pt;height:16.661pt;
  padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:
  2.88pt;background:#DDDDDD;border:solid black .5pt'>
  <p class=MsoNormal style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:9.0pt;font-family:Arial;color:black;font-weight:
  bold;language:en-US'>Out</span></p>
  </td>
 </tr>


<?php do { ?>
 <tr align="left" valign="top">
  <td><?php echo date('d', strtotime($row_rstable3['tb3_colunm2'])); ?></td>
  <td><?php echo date('D', strtotime($row_rstable3['tb3_colunm2'])); ?></td>
  <td><?php echo $row_rstable3['tb3_colunm3']; ?></td>
  <td><?php echo $row_rstable3['tb3_colunm4']; ?></td>
  <td><?php echo $row_rstable3['tb3_colunm5']; ?></td>
  <td><?php echo $row_rstable3['tb3_colunm6']; ?></td>
  <td><?php echo nl2br($row_rstable3['tb3_colunm8']); ?><!--<a href="print_daily_accom.php?table3_id=<?php echo $row_rstable3['table3_id']; ?>&user_id=<?php echo $_GET['user_id'] ?>" title="Click to read more">[]</a>--></td>
 </tr>
<?php } while ($row_rstable3 = mysql_fetch_assoc($rstable3)); ?> 


 <tr>
  <td width=700 height=22 style='width:32.4359pt;height:16.661pt;padding-left:
  1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:2.88pt;
  border:solid black .5pt'>
  <p class=MsoNormal style='text-align:center;text-align:center'><span
  lang=en-US style='font-size:9.0pt;font-family:Arial;color:black;language:
  en-US'> </span></p>
  </td>
  <td width=48 height=22 style='width:36.0pt;height:16.661pt;padding-left:1.44pt;
  padding-right:1.44pt;padding-top:2.88pt;padding-bottom:2.88pt;border:solid black .5pt'>
  <p class=MsoNormal><span lang=en-US style='font-size:9.0pt;font-family:Arial;
  color:black;language:en-US'>&nbsp; </span></p>
  </td>
  <td width=609 height=22 style='width:49.5pt;height:16.661pt;padding-left:1.44pt;
  padding-right:1.44pt;padding-top:2.88pt;padding-bottom:2.88pt;border:solid black .5pt'>
  <p class=MsoNormal><span lang=en-US style='font-size:9.0pt;font-family:Arial;
  color:black;language:en-US'>&nbsp;</span></p>
  </td>
  <td width=60 height=22 style='width:45.0pt;height:16.661pt;padding-left:1.44pt;
  padding-right:1.44pt;padding-top:2.88pt;padding-bottom:2.88pt;border:solid black .5pt'>
  <p class=MsoNormal><span lang=en-US style='font-size:9.0pt;font-family:Arial;
  color:black;language:en-US'>&nbsp;</span></p>
  </td>
  <td width=126 height=22 style='width:45.0pt;height:16.661pt;padding-left:1.44pt;
  padding-right:1.44pt;padding-top:2.88pt;padding-bottom:2.88pt;border:solid black .5pt'>
  <p class=MsoNormal><span lang=en-US style='font-size:9.0pt;font-family:Arial;
  color:black;language:en-US'>&nbsp;</span></p>
  </td>
  <td width=66 height=22 style='width:49.5pt;height:16.661pt;padding-left:1.44pt;
  padding-right:1.44pt;padding-top:2.88pt;padding-bottom:2.88pt;border:solid black .5pt'>
  <p class=MsoNormal><span lang=en-US style='font-size:9.0pt;font-family:Arial;
  color:black;language:en-US'>&nbsp;</span></p>
  </td>
  <td width=357 height=22 style='width:267.7115pt;height:16.661pt;padding-left:
  1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:2.88pt;
  border:solid black .5pt'>
  <p class=MsoNormal><span lang=en-US style='font-size:9.0pt;font-family:Arial;
  color:black;language:en-US'>&nbsp;</span></p>
  </td>
 </tr>
 
 
 <tr>
  <td width=700 height=28 colspan=5 style='width:207.9359pt;height:21.2163pt;
  padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:
  2.88pt;border-bottom:solid black .25pt'>
  <p class=MsoNormal><span lang=en-US style='font-size:9.0pt;font-family:Arial;
  language:en-US'>&nbsp;</span></p>
  </td>
  <td width=66 height=28 style='width:49.5pt;height:21.2163pt;padding-left:
  1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:2.88pt'>
  <p class=MsoNormal><span lang=en-US style='font-size:9.0pt;font-family:Arial;
  language:en-US'>&nbsp;</span></p>
  </td>
  <td width=357 height=28 style='width:267.7115pt;height:21.2163pt;padding-left:
  1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:2.88pt;
  border-bottom:solid black .5pt'>
  <p class=MsoNormal><span lang=en-US style='font-size:9.0pt;font-family:Arial;
  language:en-US'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=700 height=22 colspan=5 style='width:207.9359pt;height:16.4105pt;
  padding-left:1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:
  2.88pt;border-top:solid black .25pt'>
  <p class=MsoNormal style='page-break-before:always;text-align:center;
  text-align:center'><span lang=en-US style='font-size:9.0pt;font-family:Arial;
  color:black;font-weight:bold;language:en-US'>Employee's Signature </span></p>
  </td>
  <td width=66 height=22 style='width:49.5pt;height:16.4105pt;padding-left:
  1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:2.88pt'>
  <p class=MsoNormal style='page-break-before:always;text-align:center;
  text-align:center'><span lang=en-US style='font-size:9.0pt;font-family:Arial;
  color:black;font-weight:bold;language:en-US'>&nbsp;</span></p>
  </td>
  <td width=357 height=22 style='width:267.7115pt;height:16.4105pt;padding-left:
  1.44pt;padding-right:1.44pt;padding-top:2.88pt;padding-bottom:2.88pt;
  border-top:solid black .5pt'>
  <p class=MsoNormal style='page-break-before:always;text-align:center;
  text-align:center'><span lang=en-US style='font-size:9.0pt;font-family:Arial;
  color:black;font-weight:bold;language:en-US'>Authorized Official</span></p>
  </td>
 </tr>
</table>
</div>

</body>
</html>
<?php
mysql_free_result($rstable3);

mysql_free_result($rsusers);
?>