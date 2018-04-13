<?php
include('include('../../include/layout/web-header.php');
?>
<section>
	<h4>Database Connection Error</h4>
	<p>There was an error connecting to the database.</p>
	<!-- display the error message -->
	<p>Error message: <?php echo $error_message; ?></p>
 </section>

<?php include('include('../../include/layout/footer.php'); ?>   