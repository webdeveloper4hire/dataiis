<?php require_once('head.php'); ?>
<div>

<div class="navbar-fixed-top body-title">    
	<h3 class="col-lg-10"><?php echo $clientalias ;?> Information System</h3>
</div>

<div>
               <ul>
                      <li><a href="list_documents.php?tb1_colunm1=Document-Tracking">Doc.Tracking</a></li>
                      <li><a href="list_document_barcode.php">Barcodes</a></li>
                      
                            
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
</div>
     
</div>
<?php require_once('footer.php'); ?>       