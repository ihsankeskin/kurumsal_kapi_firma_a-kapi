<?php error_reporting(0); include('db.php'); $ayar=$bag->query("select * from ayarlar where ayar_id=1")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- PAGE TITLE -->
    <title><?php echo $ayar['firmaadi']; ?> - Hizmetlerimiz</title>
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
	  	<!-- START HEADER -->
	  	<header id="header" class="small with-separation-bottom">
	  		<!-- POINTER ANIMATED -->
	  		<canvas id="header-canvas"></canvas>
	  		
	  		<!-- TOP NAVIGATION -->
	  		<div id="top-navigation">
		  		<ul class="animate-me fadeInDown" data-wow-duration="1.2s">
			  		<li class="menu-item"><i class="fa fa-phone"></i> <?php echo $ayar['telefon']; ?></li>
			  		<li class="menu-item"><i class="fa fa-mobile"></i> <?php echo $ayar['gsm']; ?></li>
			  		<li class="menu-item"><a href="iletisim"><i class="fa fa-question"></i> İLETİŞİM</a></li>
			  	
			  		
			  		
			  		
		  		</ul>
	  		</div>
	  	
	  		<!-- MOBILE NAVIGATION -->
	  			<nav id="navigation-mobile"></nav>
	  	
	  		<!-- MAIN MENU -->
	  		<nav id="navigation">
	  			<!-- DISPLAY MOBILE MENU -->
	  			<a href="#" id="show-mobile-menu"><i class="fa fa-bars"></i></a>
	  			<!-- CLOSE MOBILE MENU -->
		  		<a href="#" id="close-navigation-mobile"><i class="fa fa-long-arrow-left"></i></a>
	  			
		  		<ul id="left-navigation" class="animate-me fadeInLeftBig">

			  		<li class="menu-item menu-item-has-children">
			  			<a href="urunler/kapi" data-description="Ne Üretiyoruz?">Ürünlerimiz</a>

			  		</li>
			  		<li class="menu-item menu-item-has-children">
			  			<a href="hakkimizda" data-description="Biz Kimiz?">Kurumsal</a>
			  			<ul class="sub-menu bounceInDown">
			  			<?php include('db.php'); $n = $bag->query("select * from sayfalar")->fetchAll(PDO::FETCH_ASSOC); foreach($n as $a){ ?>
			  				<li class="menu-item"><a href="sayfa/<?php echo $a['sayfasefurl']; ?>"><?php echo $a['baslik']; ?></a></li>
				  			 <?php } ?>
			  			</ul>
			  		</li>
		  		</ul>
		  		<div  class="animate-me flipInX" data-wow-duration="3s" >
		  			<a href="anasayfa" id="logo-navigation" >

		  			</a>
		  		</div>
		  		<ul id="right-navigation" class="animate-me fadeInRightBig">
			  		<li class="menu-item"><a href="projeler" data-description="Neler Yaptık?">Projeler</a></li>
			  		<li class="menu-item menu-item-has-children">
			  			<a href="galeri" data-description="Görseller">Foto Galeri</a>
			  			
			  		</li>
			  		<li class="menu-item"><a href="iletisim" data-description="Bize Ulaşın!">İletişim</a></li>
		  		</ul>
	  		</nav>

	  		<!-- SHADOW -->
	  		<div id="shade2"></div>

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
	  	   <h2 class="with-breaker animate-me fadeInUp">
		  			Hizmetlerimiz <span>Kalite Güven Getirir!</span>
	  			</h2>
           

	  		<div id="portfolio-container" class="with-separation-bottom with-separation-top">
	  		     <?php 
          include ('db.php'); include('functions.php');
          $albak = $bag->query("select * from hizmetler order by hizmet_id desc")->fetchAll(PDO::FETCH_ASSOC);
          foreach($albak as $verbak){
         
              ?>
	  			<!--PORTFOLIO ITEM -->
	  			<figure class="portfolio-item effect-sadie ">
			        <img src="images/hizmetler/<?php echo $verbak['hizmet_resim']; ?>" style="height: 281px;" alt="Image portfolio"/>
			        <figcaption>
			            <h4><?php echo $verbak['hizmet_baslik']; ?></h4>
			            <a href="hizmet/<?php echo $verbak['hizmet_sefurl']; ?>">Detaylar</a>
			        </figcaption>         
			    </figure>
			    <?php } ?>
			    <!--PORTFOLIO ITEM -->
	  			
	  		</div>
	  		<div class="portfolio-button center animate-me zoomIn">
		  		
	  		</div>
	  	</div>
	  	<!-- END MAIN CONTAINER -->
	  	
	  	<!-- START FOOTER -->
	  	<footer id="footer" class="with-separation-top">
		  	<aside id="widgets" class="container">
		  		<div class="row">
		  			<!-- WIDGET -->
			  		<div class="col-md-4 widget animate-me fadeInLeft">
			  			<img src="images/logo-footer.png" id="footer-logo" alt="Logo footer">
			  			<p><?php echo $ayar['footermetin'];?></p>
			  			<a href="iletisim" class="btn btn-default"><i class="fa fa-users"></i> BİZE ULAŞIN!</a>
			  		</div>
		  			<!-- WIDGET -->
			  		<div class="col-md-4 widget animate-me fadeInUp">
				  		<h4>Site Haritası</h4>
				  		<ul>
					  		<li><a href="anasayfa">Ana Sayfa</a></li>
					  		<li><a href="hakkimizda">Hakkımzızda</a></li>
					  		<li><a href="projeler">Projeler</a></li>
					  		<li><a href="hizmetler">Hizmetlerimiz</a></li>
					  		<li><a href="iletisim">İletişim</a></li>
				  		</ul>
			  		</div>
		  			<!-- WIDGET -->
			  		<div class="col-md-4 widget animate-me fadeInRight">
			  			<h4>İletişim Detayları</h4>
			  			<ul class="contact-informations">
				  			<li class="contact-address"><?php echo $ayar['adres']; ?></li>
				  			<li class="fa fa-phone"><?php echo $ayar['telefon']; ?></li><br>
				  			<li class="fa fa-print"><?php echo $ayar['fax']; ?></li><br>
				  			<li class="fa fa-mail"><?php echo $ayar['eposta']; ?></li>
			  			</ul>
			  			
			  			<a href="iletisim" class="btn btn-default"><i class="fa fa-envelope-o"></i> BİZE ULAŞIN!</a>
			  		</div>
		  		</div>
		  	</aside>
		  	<div id="copyright" class="animate-me fadeInUp">
		  		<div class="container">
			  		<p>&#169; <?php echo date('Y'); ?> All Rights Reserved. Powered by <a href="https://ihsankeskin.org">Alfa Yazılım</a>.</p>
			  		<ul id="footer-navigation">
				  		<li><a href="anasayfa">Ana Sayfa</a></li>
				  		<li><a href="hakkimizda">Hakkımızda</a></li>
				  		<li><a href="iletisim">İletişim</a></li>
			  		</ul>
		  		</div>
		  	</div>
	  	</footer>
	  	<!-- END FOOTER -->
	  	
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