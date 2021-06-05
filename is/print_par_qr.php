<!DOCTYPE html>
<html>
<head>
<title>Print</title>

</head>
<body>
<p><?php echo $clientalias ;?> <?php echo $clientbranch;?> PROPERTY</p>

<div id="output"></div>

<script src="../plugins/qr/jquery.js"></script>
<script type="text/javascript" src="../plugins/qr/jquery.qrcode.min.js"></script>
<script>
jQuery(function(){
	jQuery('#output').qrcode("<?php echo $_GET['data'];?>");
})
</script>

</body>
</html>
