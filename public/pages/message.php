<?php
include('../../include/layout/dash-header.php');
?>

<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a href="admin.php">Admin</a></li>
    <li ><a class="select" href="message.php">Messages</a></li>
</ol>
<?php user_message();
?>
<section>

    	<center><h2>All Messages</h2></center>
    <!-----START Loop FOR GMAES"--->
    		<?php
				include('../../include/html-parts/message-view.php');
				?>     
    <!-----END Loop FOR GMAES"--->  
    </div>  
        </div>
    </div>
    
</section>

<?php include('../../include/layout/footer.php'); ?>