<?php require_once('head.php'); ?>
<div>

<div class="navbar-fixed-top body-title">    
	<h3 class="col-lg-10">Select Date</h3>
</div>

<form action="print_payment_date.php" method="get" target="_blank">
	<label>Date:</label>
    <input type="text" name="tb2_colunm52" value="<?php echo date('Y'); ?>-<?php echo sprintf("%02d", date('m')-1); ?>" />
    <input type="submit" value="Go" /><br />
    <i>Format: YYYY-MM</i>
    <!--<input type="hidden" name="table1_id" value="<?php echo $_GET['table1_id']; ?>" />-->
</form>

      
</div>
<?php require_once('footer.php'); ?>
        