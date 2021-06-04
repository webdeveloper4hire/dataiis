<?php require_once('../Connections/connection.php'); ?>
<?php require_once('access_global.php'); ?>
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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_rsviewmessage = 5;
$pageNum_rsviewmessage = 0;
if (isset($_GET['pageNum_rsviewmessage'])) {
  $pageNum_rsviewmessage = $_GET['pageNum_rsviewmessage'];
}
$startRow_rsviewmessage = $pageNum_rsviewmessage * $maxRows_rsviewmessage;

$colname_rsviewmessage = "-1";
if (isset($_GET['tb2_colunm2'])) {
  $colname_rsviewmessage = $_GET['tb2_colunm2'];
}
$colname2_rsviewmessage = "-2";
if (isset($_GET['tb2_colunm3'])) {
  $colname2_rsviewmessage = $_GET['tb2_colunm3'];
}
mysql_select_db($database_connection, $connection);
$query_rsviewmessage = sprintf("SELECT * FROM table2 WHERE tb2_colunm2 = %s OR tb2_colunm2 = %s ORDER BY table2_id ASC", GetSQLValueString($colname_rsviewmessage, "text"),GetSQLValueString($colname2_rsviewmessage, "text"));
$query_limit_rsviewmessage = sprintf("%s LIMIT %d, %d", $query_rsviewmessage, $startRow_rsviewmessage, $maxRows_rsviewmessage);
$rsviewmessage = mysql_query($query_limit_rsviewmessage, $connection) or die(mysql_error());
$row_rsviewmessage = mysql_fetch_assoc($rsviewmessage);

if (isset($_GET['totalRows_rsviewmessage'])) {
  $totalRows_rsviewmessage = $_GET['totalRows_rsviewmessage'];
} else {
  $all_rsviewmessage = mysql_query($query_rsviewmessage);
  $totalRows_rsviewmessage = mysql_num_rows($all_rsviewmessage);
}
$totalPages_rsviewmessage = ceil($totalRows_rsviewmessage/$maxRows_rsviewmessage)-1;

$queryString_rsviewmessage = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rsviewmessage") == false && 
        stristr($param, "totalRows_rsviewmessage") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rsviewmessage = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rsviewmessage = sprintf("&totalRows_rsviewmessage=%d%s", $totalRows_rsviewmessage, $queryString_rsviewmessage);
?>

<?php 
date_default_timezone_set("Asia/Hong_Kong"); 
?> 
<?php
$page ="view_message.php"
?>
<?php require_once('head.php'); ?>
<?php require_once('menu.php'); ?>
<meta http-equiv="refresh" content="10;URL=
<?php printf("%s?pageNum_rsviewmessage=%d%s", $page, $totalPages_rsviewmessage, $queryString_rsviewmessage); ?>">
<link href="../plugins/emoticons/stylesheets/jquery.cssemoticons.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="../plugins/emoticons/javascripts/jquery-1.4.2.min.js" type="text/javascript"></script>
	<script src="../plugins/emoticons/javascripts/jquery.cssemoticons.min.js" type="text/javascript"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$('.text').emoticonize({
				//delay: 800,
				//animate: false,
				//exclude: 'pre, code, .no-emoticons'
			});
			$('#toggle-headline').toggle(
				function(){
					$('#large').unemoticonize({
						//delay: 800,
						//animate: false
					})
				}, 
				function(){
					$('#large').emoticonize({
						//delay: 800,
						//animate: false
					})
				}
			);
		})
	</script>
	<style type="text/css">
		#small { font-size: 8px; }
		#large { font-size: 60px; }
		#regular { font-size: 20px; }
		.wrapped { width: 350px; }
	</style>

  <!-- Right side column. Contains the navbar and content of the page -->
            <div>

<div class="navbar-fixed-top body-title">    
	<h3 class="col-lg-10">Notifications</h3>
</div>
            <div class="box-header">
                            
              <div class="box-tools">

                <!-- Main content -->
                <section class="content">
                    <!-- MAILBOX BEGIN -->
                    <div class="mailbox row">
                        <div class="col-xs-12">
                            <div class="box box-solid">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-4">
                                            <!-- BOXES are complex enough to move the .box-header around.
                                                 This is an example of having the box header within the box body -->
                                            <div class="box-header">
                                                <i class="fa fa-inbox"></i>
                                                <h3 class="box-title">INBOX</h3>
                                            </div>
                                            <!-- compose message btn -->
                                            <a class="btn btn-block btn-primary" href="messenger.php?tb2_colunm1=message"><i class="fa fa-pencil"></i> Compose Message</a>
                                            <!-- Navigation - folders-->
                                            <div style="margin-top: 15px;">
                                                <ul class="nav nav-pills nav-stacked">
                                                    <li class="header">Folders</li>
                                                    <li class="active"><a href="list_notification.php"><i class="fa fa-inbox"></i> Inbox</a></li>
                                                    <li><a href="#"><i class="fa fa-pencil-square-o"></i> Drafts</a></li>
                                                    <li><a href="#"><i class="fa fa-mail-forward"></i> Sent</a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i> Starred</a></li>
                                                    <li><a href="#"><i class="fa fa-folder"></i> Junk</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- /.col (LEFT) -->
                                        <div class="col-md-9 col-sm-8">
                                            <div class="row pad">
                                                <div class="col-sm-6">
                                                    <label style="margin-right: 10px;">
                                                        <input type="checkbox" id="check-all"/>
                                                    </label>
                                                    <!-- Action button -->
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm btn-flat dropdown-toggle" data-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">Mark as read</a></li>
                                                            <li><a href="#">Mark as unread</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Move to junk</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Delete</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="col-sm-6 search-form">
                                                    <form action="#" class="text-right">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control input-sm" placeholder="Search">
                                                            <div class="input-group-btn">
                                                                <button type="submit" name="q" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div><!-- /.row -->

                                            <div class="table-responsive">
                                                <!-- THE MESSAGES -->
                                                <table class="table table-mailbox">

<tr>
<td class="subject">
<?php if ($pageNum_rsviewmessage > 0) { // Show if not first page ?><a href="<?php printf("%s?pageNum_rsviewmessage=%d%s", $currentPage, max(0, $pageNum_rsviewmessage - 1), $queryString_rsviewmessage); ?>">Back</a><?php } // Show if not first page ?>
&nbsp;|&nbsp;
<?php if ($pageNum_rsviewmessage < $totalPages_rsviewmessage) { // Show if not last page ?><a href="<?php printf("%s?pageNum_rsviewmessage=%d%s", $currentPage, min($totalPages_rsviewmessage, $pageNum_rsviewmessage + 1), $queryString_rsviewmessage); ?>">Previous</a><?php } // Show if not last page ?>

<?php do { ?>
<p class="text wrapped" id="regular">
<?php echo $row_rsviewmessage['tb2_colunm2']; ?>: 
<?php echo $row_rsviewmessage['tb2_colunm6']; ?></p>
<hr />
<?php } while ($row_rsviewmessage = mysql_fetch_assoc($rsviewmessage)); ?>

<hr />
<a href="messenger.php?tb2_colunm2=<?php echo $_GET['tb2_colunm2']; ?>"><input type="button" value="Reply" /></a>  | <a href="home.php"><input type="button" value="Back to Home" /></a>
</td>
</tr>                                              
                                                </table>
                                            </div><!-- /.table-responsive -->
                                        </div><!-- /.col (RIGHT) -->
                                    </div><!-- /.row -->
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <div class="pull-right">
                                        <small>Total of  Messages</small> | <button class="btn btn-xs btn-primary"><i class="fa fa-caret-left"></i></button> <button class="btn btn-xs btn-primary"><i class="fa fa-caret-right"></i></button>
                                    </div>
                                </div><!-- box-footer -->
                            </div><!-- /.box -->
                        </div><!-- /.col (MAIN) -->
                    </div>
                    <!-- MAILBOX END -->
  
<?php require_once('footer.php'); ?>
<?php
mysql_free_result($rsviewmessage);
?>