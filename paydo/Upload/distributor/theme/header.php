<?php
require_once './config/config.php';
?>
<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
<head>
<style>document.addEventListener('contextmenu', event => event.preventDefault());</style>
<title>Paydo.In Online Recharge Business from India</title>
<link href="<?php echo $domain; ?>/theme/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-CSS -->
<link rel="stylesheet" href="https://<?php echo $domain; ?>/theme/css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
<link href="<?php echo $domain; ?>/theme/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /><!-- Fontawesome-CSS -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type='text/javascript' src='<?php echo $domain; ?>/theme/js/jquery-2.2.3.min.js'></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?php echo $domain; ?>/theme/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<!--meta data-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online Recharge, Paydo recharge, recharge online, recharge commission" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//meta data-->
<!-- online fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- /online fonts -->
  <style>
   #h{
       font-size:40px;
       text-align:center;
       margin-right:70px;     
       color:red; 
   }
   .dropdown
   {
      margin-left:15px;
      
   }
 
  </style>

 <link rel="shortcut icon" href="<?php echo $domain; ?>/icon.ico" />
 <!-- easy-responsive-tabs -->    
<link rel="stylesheet" type="text/css" href="<?php echo $domain; ?>/theme/css/easy-responsive-tabs.css " />
<script src="theme/js/easyResponsiveTabs.js"></script>

<!-- //easy-responsive-tabs --> 
    <!-- here stars scrolling icon -->
			<script type="text/javascript">
				$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/
										
					$().UItoTop({ easingType: 'easeOutQuart' });
										
					});
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="theme/js/move-top.js"></script>
			<script type="text/javascript" src="theme/js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling --> 
       
</head>
<!-- //head -->
<!-- body -->
<body >
<!--header-->
<?php
require_once './config/config.php';
?>
<header>
	<div class="container">

		<!--logo-->

			<div class="logo">
				<h1><a href="welcome.php"><?php echo $website; ?></a></h1>
			</div>
<?php



session_start(); 

if(!isset($_SESSION['mobile']) || empty($_SESSION['mobile'])){ 
?>
 <div class="w3layouts-login">
                      <a href="login.php"><i class="glyphicon glyphicon-user"> </i>Login</a>


<?php }else{ ?>


		<!--//logo-->
		  <div class="w3layouts-login">
                       <a href="logout.php"><i class="glyphicon glyphicon-user"> </i>Logout</a>
<?php } ?>  	              
				<div class="clearfix"></div>
   
    </div>
 </header>
<br/> <br/> <br/> 
 
<br/>