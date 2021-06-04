<?php
$host = "localhost";
$user = "root";
$password = "P@ssw0rd1";
$dbname = "database";

$con = mysqli_connect($host, $user, $password,$dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
  if(isset($_POST['username']) && isset($_FILES['file']['name'])){
     # Username
     $username = $_POST['username'];

     # Get file name
     $filename = $_FILES['file']['name'];

     # Get File size
     $filesize = $_FILES['file']['size'];

     # Location
     $location = $_GET['directory'];

     # create directory if not exists in upload/ directory
     if(!is_dir($location)){
       mkdir($location, 0755);
     }

     $location .= "/".$filename;

     # Upload file
     if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
        echo "File upload successful.";
     }
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DENR</title>
</head>

<body>
<h3>You are uploading to "<?php echo $_GET['directory']; ?>" folder</h3>
 <table border='0'>
   <tr>
    <td>
     <!-- Form -->
     <form method='post' action='' enctype='multipart/form-data'>
      <input type='hidden' value='<?= $username ?>' name='username' >
      <input type="file" name="file" id="file" >
      <input type='submit' name='submit' value='Upload'>
     </form>
   </td>
  </tr>
 </table>
<p><a href="add_email.php">Add new email</a></p> 
 </body>
</html>