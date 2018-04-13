<?php
include('../../include/layout/dash-header.php');
?>

<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a href="admin.php">Admin</a></li>
    <li><a class="select" href="transaction.php">Transaction Record</a></li>
</ol>
<?php user_message(); ?>
<section class="main ">

            	<?php
				include('../../include/html-parts/transcation-view.php');
				?>
</section>

<?php include('../../include/layout/footer.php'); ?>
