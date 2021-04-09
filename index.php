<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>



<br><br>
<link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- FlexSlider -->
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>
<style>
	img{
		width:5000px;
		height: 500px;
	}
	
	.container{
		background-image: url("img1.jpg");
	}
	p3{
		font-family: 'Anton', sans-serif;
		color: gold;
		font-size: 60px;
	
	}
	.btn{
		border: 3px solid green;
		border-radius: 10px;
		background-color: green;
		color: white;
		margin-top: 40px;
		margin-left: 800px;
		padding: 15px;
	}
	.btn:hover{
		color: white;
		background-color: transparent;
		border-bottom: 3px solid green;
		border-left: 3px solid green;
		border-right: 3px solid green;
		border-top: 3px solid green;
	}
	.btn1{
		width: 150px;
		margin-left: 950px;
		background-color: blue;
		border: 2px solid blue;
		border-radius: 20px;
		padding: 15px;
		margin-top: 50px;
		color: white;
	}
	.btn1:hover{
		background-color: transparent;
		color: blue;
		border-bottom: 2px solid blue;
		border-right: 6px solid blue;
	}
	p5{
		margin-left: 50px;
	}
	.cntnr{
		margin-top: 2px;
		margin-bottom: 50px;
		background-image: url("img3.jpg");
		height: 1300px;
	}
	.btn2{
		width: 150px;
		margin-left: 950px;
		background-color: blue;
		border: 1px solid blue;
		border-radius: 20px;
		padding: 15px;
		margin-top: 50px;
		color: white;
	}
	.btn2:hover{
		background-color: transparent;
		color: blue;
		border-bottom: 5px solid blue;
		border-right: 5px solid blue;
	}
</style>
<div class="container">
<center><p3>Online Notes Sharing Platform</p3></center>
<br>
<br>
<br>
<center>
<p4 style="color: white; font-size: 30px; opacity: 50%;">Online Notes Sharing Platform is a platform from where users can upload the notes and manage<br>
their uploaded notes and the uploaded will be managed and approved by the administrator.
</p4>
</center>
<button class="btn"
onClick="window.location.href='about.php';">Know More>></button>
<br>
</div>
<div class="cntnr">
<br>
<br>
<br>
<br>
<h1 style="color: white; font-size: 50px; margin-left: 800px;">Create Your Account Now</h1>
<button class="btn1"
onClick="window.location.href='signup.php';">Register</button>
<br>
<h2 style="color: voilet; font-size: 60px; margin-left: 990px;">OR</h2>
<h1 style="color: white; font-size: 50px; margin-left: 800px;">Already have an account?</h1>
<button class="btn2"
onClick="window.location.href='login.php';">Log in</button>
</div>
     <div class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	    	<li>
	    		<a href="#"><img src="images/slider/s1.gif" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Easy Notes Management</h2><p>Now easily manage all kind of notes by uploading them here.</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/s2.gif" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Upload Various Files</h2><p>User can upload various types of files like PDF, PPT, DOC etc..</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/i1.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Controled By Admin</h2><p>Everying is managed and controled by administrator</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/s2.gif" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Login For Both Teacher and Student</h2><p>Both teacher and student can login and upload notes </p></div>
                </div>
	    	</li>
	    </ul>
	  </div>
   </div>
    </div>  
</div>

</body>
</html>









































<?php include 'includes/footer.php';?>

        