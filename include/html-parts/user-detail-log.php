<?php
include('../../include/layout/dash-header.php');
?>

<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a href="../../public/pages/admin.php">Admin</a></li>
    <li><a href="../../public/pages/user-mang.php">User</a></li>
    <li><a class="select" href="user-detail-log.php">User Detail Logs</a></li>
	
</ol>

<?php user_message(); 
$id=$_GET['user_id'];
?>

<section class="main ">
<div class="table-responsive">
<table class="table">
	<tr>
    	<th>User ID</th>
        <th>Name</th>
        <th>Games created </th>
        <th>Blogs created</th>
        <th>User Log in Details</th>      
    </tr>
  
    <tr>
	    <?php 
		 $user=get_user_id($id);
		foreach($user as $field){
			$name=$field['user_name'];
		?>  
    	<td><?php echo $field['user_id']; ?></td>
        <td><?php echo $field['user_name']; }?></td>
		
        <td><ul><?php $game=get_games_user($id);
		if(empty($game)) echo "None</td>";
		else foreach($game as $field){
		?>  
    	<li><?php echo $field['game_name']; }?></li></ul></td>
		
        <td><ul><?php $blog=find_blog_user($name);
		if(empty($blog))  echo "None</td>";
		else foreach($blog as $field){
		?>  
    	<li><?php echo $field['blog_name']; }?></li></ul></td>
		
        <td><?php $log=getlog($id);
		if(empty($log))  echo "None</td>";
		else foreach($log as $field){
		?>  
    	<li><?php echo $field['log_date']; }?></li></ul></td>
    </tr>
</table>

        <a href="../../public/pages/user-mang.php" class="btn btn-default">Back</a>
</div>

    
</section>

<?php include('../../include/layout/footer.php'); ?>