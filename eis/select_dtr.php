<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DENR</title>
</head>

<body>
<h3>Select Date</h3>
<form action="print_dtr.php">
	<label>ID:</label>
    <input type="text" name="user_id" value="<?php echo $_GET['user_id'] ?>" />
    <label>Date:</label>
    <input type="month" name="date" value="<?php echo date('Y-m') ?>" />
    <input type="submit" value="Go" />
</form>
<p><i>Date Format: YYYY-MM e.g: 2019-01</i></p>
</body>
</html>