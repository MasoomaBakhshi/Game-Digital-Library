<?php
include('../../include/layout/dash-header.php');
?>

<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
    <li><a href="admin.php">Admin</a></li>
    <li><a class="select" href="user-mang.php">User</a></li>
</ol>

<?php user_message(); ?>

<section class="main ">

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <!--ADD USER-->
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#add-user" aria-expanded="true" aria-controls="collapseOne">
              ADD USER
            </a>
          </h4>
        </div>
        <div id="add-user" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
              <?php
				include('../../include/html-parts/add-user-form.php');
				?>
           </div>
          </div>
        </div>
      </div>
      <!--DELETE USER-->
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#delete-user" aria-expanded="false" aria-controls="collapseTwo">
              DELETE USER
            </a>
          </h4>
        </div>
        <div id="delete-user" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
            	<?php
				include('../../include/html-parts/delete-user-form.php');
				?>
          </div>
        </div>
      </div>
      <!--UPDATE USER-->
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#update-user" aria-expanded="false" aria-controls="collapseThree">
              UPDATE USER
            </a>
          </h4>
        </div>
        <div id="update-user" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
          			 <?php
                    include('../../include/html-parts/search-user-form.php');
                    ?>                  
				   <?php
                    include('../../include/html-parts/update-user-form.php');
                    ?>
          </div>
        </div>
      </div>
      <!--VIEW USER-->
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#view-user" aria-expanded="false" aria-controls="collapseThree">
              VIEW ADMINS
            </a>
          </h4>
        </div>
        <div id="view-user" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <?php
                    include('../../include/html-parts/view-user.php');
                    ?>
        </div>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#view-member" aria-expanded="false" aria-controls="collapseThree">
              VIEW MEMBERS
            </a>
          </h4>
        </div>
        <div id="view-member" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <?php
                    include('../../include/html-parts/view-user-members.php');
                    ?>
        </div>
      </div>
      
      
      
    </div><!--END PANEL-->
    
</section>

<?php include('../../include/layout/footer.php'); ?>
