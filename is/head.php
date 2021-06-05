<?php require_once('config.php'); ?>
<?php date_default_timezone_set('Asia/Manila'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">    
<title><?php echo $clientalias ;?> Information System</title>

<link href="../assets/css.css" rel="stylesheet">
<link href="../assets/font-awesome.min.css" rel="stylesheet">
<link href="../assets/extra-css.css" rel="stylesheet">
<link href="../plugins/facebox/src/facebox.css" rel="stylesheet" />
<link href="../plugins/datatables/css/demo_table_jui.css" rel="stylesheet" />
<link href="../plugins/datatables/themes/ui-lightness/jquery-ui-1.8.4.custom.css" rel="stylesheet" />
    
<script src="../assets/modernizr.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../assets/jquery.js"></script>
<script src="../assets/bootstrap.js"></script>
<script src="../plugins/datatables/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="../plugins/facebox/src/facebox.js" type="text/javascript"></script>
<script>
<!--
jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : '../plugins/facebox/src/loading.gif',
        closeImage   : '../plugins/facebox/src/closelabel.png'
      })
    })
//-->
</script>

<script>
  $(document).ready(function(){
    $('#datatables').dataTable({
      "sPaginationType":"full_numbers",
      "aaSorting":[[1, "asc"]],
      "bJQueryUI":true
  });
    $("#datatables_filter input").focus();
  })
</script>

<script>
	function doRefresh()
{
  $("#show").load("notification.php");
  setTimeout(function() {
    doRefresh();
  }, <?php echo rand(300000,305000); ?>);
}

$(document).ready(function () {
  doRefresh(); 
});
</script>

</head>

<body>

    <div class="navbar-inverse navbar-fixed-top">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="navbar-brand">
                <a href="#" class="denr-logo"></a>
            </div>

            <div class="navbar-brand">
                <a href="#" class="denr-system-name"><?php echo $clientalias ;?> - Information Systems</a>
            </div>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                    <li id="show"></li>
                    <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        
        <div class="navbar-default submenu">
                
                <span><a class="submenu" href="list_documents.php?tb1_colunm1=Document-Tracking">Doc.Tracking</a>&nbsp;|</span>
                
                <span class="dropdown"><a class="btn-default dropdown-toggle submenu" type="button" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                	<span>Tracking Reports</span></a>
                    	<ul class="dropdown-menu" role="menu">
							<li><a href="select_document_date.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>" rel="facebox">Daily Report</a></li>

							<li><a href="select_document_range_category.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>" rel="facebox">Summarize by Doc.No. and Category</a></li>

							<li><a href="select_document_range.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>" rel="facebox">Summarize by Doc.Number</a></li>
                            
							<li><a href="select_document_category_date.php?status=ONGOING" rel="facebox">Summarize by Category and Date</a></li>
                            
							<li><a href="select_document_user_entry.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>" rel="facebox">Summarize by User Entry and Date</a></li>
							
							<li><a href="select_document_routed_by_user.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>&type=received" rel="facebox">Summarize Routed by User-Received</a></li>

							<li><a href="select_document_routed_by_user.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>&type=released" rel="facebox">Summarize Routed by User-Released</a></li>
							
							<li><a href="select_document_routed_date_w_action.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>&type=released" rel="facebox">Summarize Routed by and Date with Action</a></li>
							
							<li><a href="select_document_year_days_on_office_action.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>&type=released" rel="facebox">Summarize by year and days on an office</a></li>
							
							<li><a href="select_document_year_days_on_office_all_action.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>&type=released" rel="facebox">Summarize by year and days on an office with all action</a></li>
                            							
							<li><a href="select_document_year_days_on_office_action_foi.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>&type=released" rel="facebox">Summarize FOI by year and days on an office with action</a></li>

<?php if (strpos($_SESSION['MM_Username'],'ORED') !== false) { ?>
							<!-- ORED ONLY  -->
							<li><a href="select_document_routed_by_user_w_action.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>" rel="facebox">Summarize Routed by User with Action</a></li>

							<li><a href="select_document_by_action.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>" rel="facebox">Summarize by Action</a></li>

							<li><a href="select_document_range_category_w_action.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>" rel="facebox">Summarize by CTRL.No. and Category with Action</a></li>

							<li><a href="select_document_routed_date_w_action.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>" rel="facebox">Summarize by Route and Date with Action</a></li>

							<li><a href="select_document_routed_date_w_action_priority.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>" rel="facebox">Summarize by Route and Date with Action and Priority</a></li>

							<li><a href="select_document_category_date_range_w_action.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>" rel="facebox">Summarize by Category and Between Date with Action</a></li>
							
							<li><a href="select_document_range_user.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>" rel="facebox">Summarize by Crtl.No. and User</a></li>

							<li><a href="select_document_routed_date.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>" rel="facebox">Summarize by Route and Date</a></li>

							<li><a href="select_document_routed_date_range.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>" rel="facebox">Summarize by Route and Between Date</a></li>

<li><a href="select_document_category_date_range.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>" rel="facebox">Summarize by Category and Between Date</a></li>

							<li><a href="select_document_routed_category_date_range.php?tb1_colunm1=<?php echo $_GET['tb1_colunm1'];?>" rel="facebox">Summarize by Route,Category and Between Date</a></li>
							
<?php } ?>
                    	</ul>&nbsp;| 
                </span>
                
                <span class="dropdown"><a class="btn-default dropdown-toggle submenu" type="button" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                	<span>Barcode</span></a>
                    	<ul class="dropdown-menu" role="menu">
                       		<li><a href="list_document_barcode.php">Barcode List</a></li>
                            <li><a href="select_barcode_date.php" rel="facebox">Barcode Reports</a></li>
                    	</ul>&nbsp;| 
                </span>
                
                <span class="dropdown"><a class="btn-default dropdown-toggle submenu" type="button" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                	<span>More Systems</span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="select_payment_date.php?tb1_colunm1=employee">Payslip</a></li>
                      <li><a href="list_employee.php?tb1_colunm1=employee">Employees</a></li>
                      <li><a href="list_so.php?tb1_colunm1=Special-Order&type=advance">Special Order</a></li>
                      <li><a href="list_to.php?tb1_colunm1=Travel-Order&type=advance">Travel Order</a></li>
                      <li><a href="list_vouchers.php?tb1_colunm1=Vouchers&type=advance">Vouchers</a></li>
                      <li><a href="list_engp.php?tb1_colunm1=engp&type=advance">E-NGP</a></li>
                      <li><a href="list_files.php?tb1_colunm1=Files&type=advance">Records Files</a></li>
                      <li><a href="list_tech-assist.php?tb1_colunm1=Tech-Assist">Request for Technical Assistance</a></li>
                      <li><a href="http://203.160.181.242:85/denreis" target="_blank">Property Management</a></li>
                      <li><a href="https://203.160.181.242:5001/" target="_blank">File Archive</a></li>
                      <li><a href="http://203.160.181.242:84/denr/eis" target="_blank">Online Attendance</a></li>
                      <li><a href="../cal" target="_blank">Zoom Scheduling</a></li>
                      <li><a href="../denr-eservices" target="_blank">Frontline Services</a></li>
                      <li><a href="../../phpmyadmin/sql.php?db=database&table=users_tb" target="_blank">Users</a></li>
                      <li><a href="../../phpmyadmin/server_import.php">Restore Data</a></li>
                      <li><a href="../database/backupdb.php">Backup Data</a></li>
                      <li><a href="/archive" target="_blank">Document Archive</a></li>
                    </ul>
                </span>
                
                <!--<span><a class="submenu" href="bugreport.php" target="_blank">Bug Reporting System</a></span>
                
                <span><a class="submenu" href="about.php">About</a></span>-->
                                
        </div>
    
    </div>

    <div class="body-content">
    
