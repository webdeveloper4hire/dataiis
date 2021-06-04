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

$maxRows_rstablemessage = 10;
$pageNum_rstablemessage = 0;
if (isset($_GET['pageNum_rstablemessage'])) {
  $pageNum_rstablemessage = $_GET['pageNum_rstablemessage'];
}
$startRow_rstablemessage = $pageNum_rstablemessage * $maxRows_rstablemessage;

$colname_rstablemessage = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_rstablemessage = $_SESSION['MM_Username'];
}
mysql_select_db($database_connection, $connection);
$query_rstablemessage = sprintf("SELECT * FROM table2 WHERE tb2_colunm3 = %s GROUP BY tb2_colunm2", GetSQLValueString($colname_rstablemessage, "text"));
$query_limit_rstablemessage = sprintf("%s LIMIT %d, %d", $query_rstablemessage, $startRow_rstablemessage, $maxRows_rstablemessage);
$rstablemessage = mysql_query($query_limit_rstablemessage, $connection) or die(mysql_error());
$row_rstablemessage = mysql_fetch_assoc($rstablemessage);

if (isset($_GET['totalRows_rstablemessage'])) {
  $totalRows_rstablemessage = $_GET['totalRows_rstablemessage'];
} else {
  $all_rstablemessage = mysql_query($query_rstablemessage);
  $totalRows_rstablemessage = mysql_num_rows($all_rstablemessage);
}
$totalPages_rstablemessage = ceil($totalRows_rstablemessage/$maxRows_rstablemessage)-1;

$queryString_rstablemessage = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rstablemessage") == false && 
        stristr($param, "totalRows_rstablemessage") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rstablemessage = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rstablemessage = sprintf("&totalRows_rstablemessage=%d%s", $totalRows_rstablemessage, $queryString_rstablemessage);
?>
<?php require_once('head.php'); ?>
<?php require_once('menu.php'); ?>

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
                                                    <li class="active"><a href="list_notification.php"><i class="fa fa-inbox"></i> Inbox (<?php echo $totalRows_rstablemessage ?>)</a></li>
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
<?php do { ?>
<tr <?php
if ($row_rstablemessage['tb2_colunm7'] == 0 ) {
    echo "class=unread";
} else {
    echo "";
}
?>>
          <td class="small-col"><input type="checkbox" /></td>
                                                        <td class="small-col"><?php
if ($row_rstablemessage['tb2_colunm7'] == 0 ) {
    echo "<i class=fa fa-star></i>";
} else {
    echo "";
}
?></td>
                                                        <td class="name"><?php echo $row_rstablemessage['tb2_colunm2']; ?></td>
                                                        <td class="subject"><a href="redirect_view_message.php?tb2_colunm2=<?php echo $row_rstablemessage['tb2_colunm2']; ?>&tb2_colunm3=<?php echo $row_rstablemessage['tb2_colunm3']; ?>"><?php
if ($row_rstablemessage['tb2_colunm7'] == 0 ) {
    echo "NEW MESSAGE";
} else {
    echo $row_rstablemessage['tb2_colunm1'];
}
?> sent at <?php echo $row_rstablemessage['tb2_colunm4']; ?></a></td>
                                                        <td class="time"><?php echo $row_rstablemessage['tb2_colunm5']; ?></td>
                                                    </tr>                                               <?php } while ($row_rstablemessage = mysql_fetch_assoc($rstablemessage)); ?>
                                                </table>
                                            </div><!-- /.table-responsive -->
                                        </div><!-- /.col (RIGHT) -->
                                    </div><!-- /.row -->
                                </div><!-- /.box-body -->
                                
                                <div class="box-footer clearfix">
                                    <div class="pull-right">
                                        <small>Total of <?php echo $totalRows_rstablemessage ?> Messages</small> |
                                        <?php if ($pageNum_rstablemessage > 0) { // Show if not first page ?><a href="<?php printf("%s?pageNum_rstablemessage=%d%s", $currentPage, max(0, $pageNum_rstablemessage - 1), $queryString_rstablemessage ); ?>"><button class="btn btn-xs btn-primary"><i class="fa fa-caret-left"></i></button></a><?php } ?>
                                        <?php if ($pageNum_rstablemessage < $totalPages_rstablemessage) { // Show if not last page ?><a href="<?php printf("%s?pageNum_rstablemessage=%d%s", $currentPage, min($totalPages_rstablemessage, $pageNum_rstablemessage + 1), $queryString_rstablemessage); ?>"><button class="btn btn-xs btn-primary"><i class="fa fa-caret-right"></i></button></a><?php } ?>
                                    </div>
                                </div><!-- box-footer -->
                                
                            </div><!-- /.box -->
                        </div><!-- /.col (MAIN) -->
                    </div>
                    
                    
                    <!-- MAILBOX END -->
  
<?php require_once('footer.php'); ?>
<?php
mysql_free_result($rstablemessage);
?>