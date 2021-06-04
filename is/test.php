<?php if ($_GET['type'] == "refresh_id") { ?>

	<!-- Refresh Div -->
	<script>
	$(function() {
    		startRefresh();
	});

	function startRefresh() {
    		setTimeout(startRefresh,<?php echo mt_rand(400, 600);
	?>);
    	$.get('last_id.php', function(data) {
        	$('#refresh').html(data);    
    	});
	}
	</script>
	<!-- End -->

	<?php } else { ?>       
	<script>
	$(function() {
 	   startRefresh();
	});

	function startRefresh() {
	    setTimeout(startRefresh,<?php echo mt_rand(4000, 5000); ?>);
	    $.get('notification.php', function(data) {
	        $('#noti').html(data);    
	    });
	}
	</script>
	<!-- End -->
	<?php } ?>