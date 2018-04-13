<?php
include('../../include/layout/db_connection.php');
    session_start();
    require_once ('../../include/functions/functions.php');
    require_once ('../../include/functions/functions_blogs.php');
?>

<?php	
	$ID = $_GET['comment_id'];
    $res=get_comment_blog($ID);
	foreach($res as $row){
	$blog=$row['blog_id']; }
	$result = delete_comment($ID);
	
	if($result){
		$_SESSION['success'] = 'Comment successfully deleted.';
		redirect('../../include/html-parts/comments.php?blog_id='.$blog);
	}else
	{
		$_SESSION['error'] = 'An error has occurred. Please try again.';
		redirect('../../include/html-parts/comments.php?blog_id='.$blog);
	}
?>
