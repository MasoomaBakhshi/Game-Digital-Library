<?php 
include('db_connection.php');
session_start();
require ('../../include/functions/functions_blogs.php');
require ('../../include/functions/functions_games.php');
require ('../../include/functions/functions_users.php');
require_once ('../../include/functions/functions.php');
require_once ('../../include/functions/functions_messages.php');
require_once ('../../include/functions/functions_message_manag.php');
require_once ('../../include/functions/functions_transaction.php');
$mainuser=find_user();
include('header.php');
?>
<script>
	//jumbotron
	var img= new Array();
	var qoute=new Array();
img[0]="url(../images/jumbo3.png)";
img[1]="url(../images/jumbo2.jpg)";
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
        $('.overlay').colorbox({opacity:0.3,width:"100%",transition:'fade'});
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

    <nav class="web-nav navbar navbar-default" role="navigation">
    	<div class="navbar-header">
        <?php if (!isset($_SESSION['user'])){?>
               <a href="index.php" title="Home Page"><img id="company-logo" class="img-responsive img-thumbnail web-nav-img " src="../../public/images/Logo1.png.png"/></a>
               <?php } else { ?> 
        	<a href="admin.php" title="Admin Page" ><img id="company-logo" class="img-responsive img-thumbnail web-nav-img " src="../../public/images/Logo1.png.png"/></a>
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
               <li><a href="games-info.php" title="Games Page"><span class="glyphicon web-nav-icon glyphicon-th-list" ></span> Games</a></li>
               <li><a href="about-us.php" title="About Page"><span class="glyphicon web-nav-icon glyphicon-question-sign"></span> About Us</a></li>
                <li><a href="blog.php" title="Blog Page"><span class="glyphicon glyphicon-list-alt web-nav-icon"></span>  Blogs and News</a></li>
               <li><a href="contact-us.php" title="Contact Page"><span class="web-nav-icon glyphicon glyphicon-comment"></span> Contact Us</a></li>
               <li><a href="cart.php" title="Cart Page"><span class="web-nav-icon glyphicon glyphicon-shopping-cart"></span> shopping cart</a></li>
               <?php if (!isset($_SESSION['user'])){?>
               <li><a href="login.php" title="Log in Page"><span class="web-nav-icon glyphicon glyphicon-log-in"></span> Log In</a></li>
               <?php } else { ?>
               <li>               
                  <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <?php echo $_SESSION['user']; ?>  <span class="web-nav-icon caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                     <ul class="dropdown-menu">
                      <li><a href="profile.php"><span class="web-nav-icon  glyphicon glyphicon-user"></span>  Profile</a></li>
                      <li title="Logout Page"><a href="../../include/controller/logout.php"><span class="web-nav-icon glyphicon glyphicon-log-out"></span> Log Out</a></li>
                     </ul>
                  </div> 
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
