<?php error_reporting(0); include('db.php'); $ayar=$bag->query("select * from ayarlar where ayar_id=1")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- PAGE TITLE -->
    <title><?php echo $ayar['firmaadi']; ?> - Projeler</title>
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
	  		<div class="container">
	  			<!--PORTFOLIO -->
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			Çalışmalarımız <span>Kalite Güven Getirir!</span>
	  			</h2>
	  			<div id="portfolio-filters" class="animate-me fadeIn">
	  				<button class="btn btn-default" data-filter="*"><i class="fa fa-tags"></i> HEPSİ</button>
	  				<?php include ('db.php'); 
                    $kat = $bag->query("select * from pro_kategoriler")->fetchAll(PDO::FETCH_ASSOC);
                    foreach($kat as $key){

	  				 ?>
	<button class="btn btn-default" data-filter=".<?php echo $key['kat_id']; ?>"><i class="fa fa-tag"></i> <?php echo $key['kat_adi']; ?></button>
					<?php } ?>
	  			</div>
	  		</div>
           

	  		<div id="portfolio-container" class="with-separation-bottom with-separation-top">
	  		     <?php 
          include ('db.php'); include('functions.php');
          $albak = $bag->query("select * from projeler inner join pro_kategoriler on pro_kategoriler.kat_id = projeler.proje_kat")->fetchAll(PDO::FETCH_ASSOC);
          foreach($albak as $verbak){
          $ybaslik = tryap($verbak['proje_baslik']);
              ?>
	  			<!--PORTFOLIO ITEM -->
	  			<figure class="portfolio-item effect-sadie <?php echo $verbak['kat_id']; ?>">
			        <img src="images/projeler/<?php echo $verbak['proje_resim']; ?>" style="height: 281px; width: 100%" alt="Image portfolio"/>
			        <figcaption>
			            <h4><?php echo $verbak['proje_baslik']; ?></h4>
			            <p><?php echo $verbak['kat_adi']; ?></p>
			            <a href="proje/<?php echo $ybaslik; ?>">Detaylar</a>
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
  <!--  <script>
var options={ "publisher": "8234a0ff-5822-45f5-92a9-2460ac3c5ca8", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "linkedin", "pinterest", "googleplus", "delicious", "mail_ru"]}};
var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
</script> -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>
  </body>
  <!-- END BODY -->
</html>