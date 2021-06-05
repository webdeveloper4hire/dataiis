<?php require_once('../Connections/calendarcon.php'); ?>
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
$query_rssched = "SELECT * FROM sched_tb WHERE approved = 'YES'";
$rssched = mysql_query($query_rssched, $connection) or die(mysql_error());
$row_rssched = mysql_fetch_assoc($rssched);
$totalRows_rssched = mysql_num_rows($rssched);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='../plugins/fullcalendar/lib/main.css' rel='stylesheet' />
<script src='../plugins/fullcalendar/lib/main.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      initialDate: '<?php echo date("Y-m-d");?>',
      navLinks: true, // can click day/week names to navigate views
      nowIndicator: true,

      weekNumbers: true,
      weekNumberCalculation: 'ISO',

      editable: true,
      selectable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: [
        <?php do { ?>
		{
          title: '<?php echo $row_rssched['title']; ?>',
		  url: 'view.php?sched_id=<?php echo $row_rssched['sched_id']; ?>',
          start: '<?php echo $row_rssched['start_date']; ?>T<?php echo $row_rssched['start_time']; ?>',
		  end: '<?php echo $row_rssched['end_date']; ?>T<?php echo $row_rssched['end_time']; ?>'
        },
		<?php } while ($row_rssched = mysql_fetch_assoc($rssched)); ?>
		{
          groupId: 999,
          title: 'Happy Birthday',
		  url: '#',
          start: '2021-11-20T08:00:00',
		  end: '2021-11-20T17:00:00'
        }
      ]
    });

    calendar.render();
  });

</script>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 1100px;
    margin: 0 auto;
  }

</style>
</head>
<body>
<h2 align="center"><?php echo $clientalias;?> <?php echo $clientbranch;?> Zoom Scheduling</h2>
<div id='calendar'></div>
<div>
<fieldset>
<legend>DENR</legend>
<p><a href="upload_form.php?table1_id=<?php echo date('Y-m-d'); ?>"><input type="button" value="New Schedule"></a></p>
<p><a href="list_schedules_unapproved.php"><input type="button" value="Unapprove Schedules"></a></p>
</fieldset>
</div>
<i align="right"></i>
</body>
</html>
<?php
mysql_free_result($rssched);
?>
