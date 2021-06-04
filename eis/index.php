<?php date_default_timezone_set('Asia/Manila'); ?>
<?php require_once('head.php'); ?>      
	<form name="login" method="get" action="view_attendance.php" accept-charset="utf-8">
		<label for="usermail">DENR Item Number</label>
			<input type="text" name="user_id" placeholder="for J.O. use TIN#" required>
		<!--<label for="password">Pin/Password</label>
			<input type="pin" name="pin" placeholder="PIN" required>-->
			<input type="hidden" name="date" value="<?php echo date('Y-m-d') ?>">
          	<input type="submit" value="Continue">
	</form>
<p><b>Note</b><em>: If it is your first time here please create your account <a href="add_account.php?group=3">here</a>.<br/>
If you already have a Document Tracking System account, please update your account <a href="add_account.php?group=3">here</a>.</em></p>
<?php require_once('footer.php'); ?>
</body>
</html>

				