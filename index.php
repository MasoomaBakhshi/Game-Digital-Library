<?php
ini_set('display_errors',1);
error_reporting(-1);
?>
<?php
include('include/layout/db_connection.php');
include ('include/functions/functions_blogs.php');
include  ('include/functions/functions_games.php');
include ('include/functions/functions_users.php');
include ('include/functions/functions.php');
include('include/functions/functions_messages.php');
include('include/functions/functions_message_manag.php');
include ('include/functions/functions_transaction.php');

session_start();
include('include/layout/header.php');
?>
<script>
	//jumbotron
	var img= new Array();
	var qoute=new Array();
img[0]="url(public/images/jumbo3.png)";
img[1]="url(public/images/jumbo2.jpg)";
qoute[0]="Each player must accept the cards life deals him or her: but once they are in hand, he or she alone must decide how to play the cards in order to win the game.";
qoute[1]="I think sportsmanship is knowing that it is a game, that we are only as a good as our opponents, and whether you win or lose, to always give 100 percent.";
var x=0;
function swap(){
		$(".jumbotron").fadeTo("slow",.8,fading);	
  		if(x<=1) x++; else x=0;
		setTimeout("swap()",2500);
				}
	function fading(){		
		$(".jumbotron").fadeTo("slow",1);
		$(".jumbotron").css("background-image",img[x]);
		$(".qoute p").html(qoute[x]);
		}
		
$(document).onload=swap();
$(document).ready(function() {

 $(function()
    {
        $('.overlay').colorbox({opacity:0.3,width:"90%",transition:'fade',top:'-1%'});
    });
 var nav = $('nav');
   $(window).scroll(function () {
       if ($(window).scrollTop() > 100)
		 {
            nav.addClass("fixnav");
        } 
		else {
            nav.removeClass("fixnav");
        }
    }
	);

});

</script> 

<body>

<div class="mainpage">
    <nav class="web-nav navbar navbar-default" role="navigation">
    	<div class="navbar-header">
        <?php if (!isset($_SESSION['user'])){?>
               <a href="index.php" title="Home Page"><img id="company-logo" class="img-responsive img-thumbnail web-nav-img " src="public/images/Logo1.png.png"/></a>
               <?php } else { ?> 
        	<a href="public/pages/admin.php" title="Admin Page" ><img id="company-logo" class="img-responsive img-thumbnail web-nav-img " src="public/images/Logo1.png.png"/></a>
        	<?php } ?>
            <button type="button" class="navbar-toggle"  data-toggle="collapse" data-target="#collapse">
            	<span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav nav-justified nav-pills">
               <li><a href="public/pages/games-info.php" title="Games Page"><span class="glyphicon web-nav-icon glyphicon-th-list" ></span> Games</a></li>
               <li><a href="public/pages/about-us.php" title="About Page"><span class="glyphicon web-nav-icon glyphicon-question-sign"></span> About Us</a></li>
                <li><a href="public/pages/blog.php" title="Blog Page"><span class="glyphicon glyphicon-list-alt web-nav-icon"></span>  Blogs and News</a></li>
               <li><a href="public/pages/contact-us.php" title="Contact Page"><span class="web-nav-icon glyphicon glyphicon-comment"></span> Contact Us</a></li>
               <li><a href="public/pages/cart.php" title="Cart Page"><span class="web-nav-icon glyphicon glyphicon-shopping-cart"></span> shopping cart</a></li>
               <?php if (!isset($_SESSION['user'])){?>
               <li><a href="public/pages/login.php" title="Log in Page"><span class="web-nav-icon glyphicon glyphicon-log-in"></span> Log In</a></li>
               <?php } else { ?>
               <li><center>               
                  <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <?php echo $_SESSION['user']; ?>  <span class="web-nav-icon caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                     <ul class="dropdown-menu">
                      <li><a href="public/pages/profile.php" title="Profile Page"><span class="web-nav-icon  glyphicon glyphicon-user"></span>  Profile</a></li>
                      <li title="public/pages/Logout Page"><a href="include/controller/logout.php"><span class="web-nav-icon glyphicon glyphicon-log-out"></span> Log Out</a></li>
                     </ul>
                  </div></center> 
               </li>
              <?php } ?>  	
            </ul>
        </div>
    </nav>
    
<div class="jumbotron" id="slide">
	<div class="qoute">
		<blockquote><p></p></blockquote>
    </div>
</div>


<ol class="breadcrumb">
	<strong>Breadcrumbs:</strong>
       <li><a class="select" href="index.php">Home</a></li>
</ol>

<?php user_welcome();
user_message(); ?>

<section>
            <div id="carousel-game" class="carousel slide" data-ride="carousel">
                <!-----START Loop FOR GMAES"--->
                <div class="list carousel-inner" role="listbox">
                <h2>TOP RATED GAMES</h2>
                 	<?php  $counter = 1; 
					$resa=top_games();
					  foreach($resa as $viewa){ 
					   ?>
					   <div class="item<?php if($counter <= 1){echo " active"; } ?>">
                    <div class="col-md-1"></div>
                      <div class="row">                        
                            <div class="col-md-4">
				
                                <a href="include/html-parts/modal-pic.php?game_id=<?php echo $viewa['game_id']; ?>" class="overlay">
                                <img class="img-responsive img-thumbnail game-viewimg" title="<?php echo $viewa['game_name']; ?>" src="public/images/<?php echo $viewa['game_image']; ?>"/>
                                </a>
                                 <div class="game-des">
                                     <h4>Game Name:</h4> <?php echo $viewa['game_name']; ?>
                                     <h4>Game Type:</h4> <?php echo $viewa['game_type']; ?>
                                     <h4>Game Rating:</h4> <?php echo $viewa['game_rating']; ?> /10
                                     <h4>Game Release Date:</h4> <?php echo $viewa['game_release_date']; ?>
                                 </div>
                            </div>
                             <div class="col-md-5">
                                 <h4>Game Description:</h4> <?php echo $viewa['game_description']; ?></BR></BR>
                                 <iframe class="game-viewvideo" src="<?php echo $viewa['game_link']; ?>" allowfullscreen>
								 </iframe></br></br>
                                    <a href="include/controller/cart_process.php?game_id=<?php echo $viewa['game_id']; ?>" class="btn btn-default">Add to cart</a>
                             </div>
                        </div>
                        </div>
                        <?php
    $counter++;
    }
?> 
                   <!-----END Loop FOR GMAES"--->
                   </br></br></br>
                   <ol class="carousel-indicators">
                   
                   <li><a href="#carousel-game" role="button"  data-slide-to="0" class="active">
                   </a></li>
                   <li><a href="#carousel-game" role="button"  data-slide-to="1" class="active">
                   </a></li>
                   <li><a href="#carousel-game" role="button"  data-slide-to="2" class="active">
                   </a></li>
                   </ol>
                   
           <a class="left carousel-control" href="#carousel-game" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-game" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
               </div><!--end of carousel-->
          </div>
</section>

<div class="row blog-row">
       <div class="col-md-4 col-sm-4 col-xs-11 blog-list">		   
            <ol><h4>Recent Posts</h4>
             <?php $res1=get_blogs_new();
                foreach($res1 as $view1): ?> 
                <li><a  href="public/pages/blog_des.php?blog_id=<?php echo $view1['blog_id'];?>"><?php echo $view1['blog_name']; endforeach;?></a></li>          
            </ol>
       </div>
     
       <div class="col-md-3 col-sm-3 col-xs-11 blog-list">
            <ol><h4>News</h4>
               <?php $res2=get_blogs_news();
                 foreach($res2 as $view2): ?>  
                <li><a  href="public/pages/blog_des.php?blog_id=<?php echo $view2['blog_id'];?>"><?php echo $view2['blog_name']; endforeach;?></a></li>           
            </ol>
       </div>

       <div class="col-md-3 col-sm-3 col-xs-11 blog-list">
            <ol><h4>Blogs</h4>
            <?php $res3=get_blogs_blogs();
            foreach($res3 as $view3): ?> 
                <li><a  href="public/pages/blog_des.php?blog_id=<?php echo $view3['blog_id'];?>"><?php echo $view3['blog_name']; endforeach;?></a></li>           
            </ol>
       </div>
       
 </div>
  
<?php include('include/layout/footer.php'); ?>