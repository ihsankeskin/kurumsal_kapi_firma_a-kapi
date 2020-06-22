<?php 
include ('db.php'); error_reporting(0);
$al = $bag->query("select * from hakkimizda where hakk_id=1")->fetch(); ?>

<?php include('db.php'); $ayar=$bag->query("select * from ayarlar where ayar_id=1")->fetch(PDO::FETCH_ASSOC); ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- PAGE TITLE -->
    <title><?php echo $ayar['firmaadi']; ?> | <?php echo $al['baslik']; ?></title>
    <base href="<?php echo $ayar['siteurl']; ?>">
    <!-- MAKE IT RESPONSIVE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO -->
    <meta name="description" content="">
    <meta name="author" content="<?php echo $ayar['firmaadi']; ?>">
    <meta name="keywords" content="<?php echo $ayar['keywords']; ?>">
    <!-- FAVICON -->	
	<!--<link rel="shortcut icon" href="images/favicon.png" />-->
    <!-- STYLESHEETS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/animate.min.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="style.css" rel="stylesheet" media="screen">
    <link href="css/options.css" rel="stylesheet" media="screen">
    <link href="css/responsive.css" rel="stylesheet" media="screen">
    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:900,300,400,200,800' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" id="st_insights_js" src="http://w.sharethis.com/button/buttons.js?publisher=8234a0ff-5822-45f5-92a9-2460ac3c5ca8"></script>
<script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>
  </head>
  <!-- START BODY -->
  <body>

  	<div id="page">
        <?php include('header.php'); ?>
	  		<!-- HEADER SLIDER -->
		  	<div class="flexslider" id="header-slider">
		  		<ul class="slides">
		  			<li><img src="images/backgrounds/bg2.jpg" alt="SLider Image"></li>
		  		</ul>	
		  	</div>
	  		
	  	</header>
	  	<!-- END HEADER -->
	  	
	  	<!-- START MAIN CONTAINER -->
	  	<div class="main-container">
	  		<div class="container">
	  			<div class="row">
	  				<!--PORTFOLIO -->
		  			<h2 class="with-breaker animate-me fadeInUp">
                        <?php echo $al['baslik']; ?>
		  			</h2>
	  				<div class="col-lg-6">
	  					<div class="flexslider image-slider">
	  					
	  						<!--SLIDER -->
	  						<ul class="slides">
	  					

	  					 
	  					<li><a href="images/<?php echo $al['resim']; ?>" data-fancybox-group="project-slider" class="fancybox"><img src="images/<?php echo $al['resim']; ?>" alt="Project Image"></a></li>
	  							
	  						</ul>
	  					</div>
	  					<!--SHARE BUTTONS -->
			  			<ul class="share-buttons animate-me fadeInUp">
			  				<script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436'); return false;}</script>
			  				<li><a rel="nofollow" href="http://www.facebook.com/share.php?u=<;url>" onclick="return fbs_click()" target="_blank" class="btn btn-default button-facebook" ><i class="fa fa-facebook"></i> Paylaş</a></li>
			  				<li><a href="http://twitter.com/home/?status=Your tweet text." target="_blank" class="btn btn-default button-twitter"><i class="fa fa-twitter"></i> Tweetle</a></li>
			  			</ul>
	  				</div>
	  				<div class="col-lg-6">
	  					<!--ITEM DETAILS -->


			  			
			  			<p class="text-justify"><?php echo $al['metin']; ?></p>
			  			<div class="text-right animate-me bounceIn">
			  				
			  			</div>
	  				</div>
	  			</div>

	  		</div>
	  		</div>
	  			
	  
	  	<!-- END MAIN CONTAINER -->

        <?php include('footer.php'); ?>
	  	
	  	<!-- SCROLL TOP -->
	  	<a href="#" id="scroll-top" class="fadeInRight animate-me"><i class="fa fa-angle-double-up"></i></a>
  	</div>

    <!-- SCRIPTS -->
    <script type="text/javascript">stLight.options({publisher: "8234a0ff-5822-45f5-92a9-2460ac3c5ca8", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<!--<script>
var options={ "publisher": "8234a0ff-5822-45f5-92a9-2460ac3c5ca8", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "linkedin", "pinterest", "googleplus", "delicious", "mail_ru"]}};
var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
</script> -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>
  </body>
  <!-- END BODY -->
</html>