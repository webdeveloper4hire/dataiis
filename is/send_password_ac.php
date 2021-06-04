<?

$host="127.0.0.1"; // Host name
$username="root"; // Mysql username
$password="09486798293"; // Mysql password
$db_name="database"; // Database name


//Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select DB");

// value sent from form
$email_to=$_POST['email_to'];

// table name
$tbl_name=users_tb;

// retrieve password from table where e-mail = $email_to(mark@phpeasystep.com)
$sql="SELECT password FROM $tbl_name WHERE email='$email_to'";
$result=mysql_query($sql);

// if found this e-mail address, row must be 1 row
// keep value in variable name "$count"
$count=mysql_num_rows($result);

// compare if $count =1 row
if($count==1){

$rows=mysql_fetch_array($result);

// keep password in $your_password
$your_password=$rows['password'];

// ---------------- SEND MAIL FORM ----------------

// send e-mail to ...
$to=$email_to;

// Your subject
$subject="Your password here";

// From
$header="from: your name <your email>";

// Your message
$messages= "Your password for login to our website \r\n";
$messages.="Your password is $your_password \r\n";
$messages.="more message... \r\n";

// send email
$sentmail = mail($to,$subject,$messages,$header);

}

// else if $count not equal 1
else {
echo "Not found your email in our database.\r\n";
}

// if your email succesfully sent
if($sentmail){
echo "Your Password Has Been Sent To Your Email Address.";
}
else {
echo "Cannot send password to your e-mail address.";
}

?>
<script src="../lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>