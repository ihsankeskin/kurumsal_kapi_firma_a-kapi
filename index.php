<?php error_reporting(0); include('db.php'); $ayar = $bag->query("select * from ayarlar where ayar_id=1")->fetch(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- PAGE TITLE -->
    <title><?php echo $ayar['firmaadi']; ?> - Ana Sayfa</title>
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
  	<!-- LOADER DIV - ONLY HOME -->
  	<div id="loader">
  		<div id="loading-logo"></div>
  	</div>
  	<div id="page">
	  	<!-- START HEADER -->
	  	<header id="header" class="big with-separation-bottom">
	  		<!-- POINTER ANIMATED -->
	  		<canvas id="header-canvas"></canvas>

            <!-- TOP NAVIGATION -->
            <div id="top-navigation">
                <ul class="animate-me fadeInDown" data-wow-duration="1.2s">
                    <li class="menu-item"><i class="fa fa-phone"></i> <?php echo $ayar['telefon']; ?></li>
                    <li class="menu-item"><i class="fa fa-mobile"></i> <?php echo $ayar['gsm']; ?></li>
                    <li class="menu-item"><a href="iletisim"><i class="fa fa-question"></i> İLETİŞİM</a></li>

                    <li class="menu-item"><span class="navigation-social">Sosyal Ağlardayız</span>
                        <a href="<?php echo $ayar['facebook']; ?>">
                            <i class="fa fa-facebook"></i></a> <a href="<?php echo $ayar['instagram']; ?>">
                            <i class="fa fa-instagram"></i></a><a href="<?php echo $ayar['twitter']; ?>"><i class="fa fa-linkedin"></i></a> <a href="<?php echo $ayar['youtube']; ?>"><i class="fa fa-youtube"></i></a></li>
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
                        <a href="hakkimizda" data-description="Hakkımızda?">Kurumsal</a>
                        <ul class="sub-menu bounceInDown">
                            <?php include('db.php'); $n = $bag->query("select * from sayfalar")->fetchAll(PDO::FETCH_ASSOC); foreach($n as $a){ ?>
                                <li class="menu-item"><a href="sayfa/<?php echo $a['sayfasefurl']; ?>"><?php echo $a['baslik']; ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="urunler/kapi" data-description="Ne Üretiyoruz?">Ürünlerimiz</a>

                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="katalog" data-description="Tüm Ürünlerimiz">Katalog</a>

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

	  		<!-- TEXT SLIDER -->
			<div id="ticker" class="animate-me zoomIn">
				<h4 class="with-breaker"><?php echo $ayar['firmaadi']; ?></h4>
				<div id="ticker-text">

					<ul>

                   <?php include('db.php') ; $slogan = $bag->query("select * from sliderslogan")->fetchAll(PDO::FETCH_ASSOC);
                foreach($slogan as $ney){


				 ?>

						<li><?php echo $ney['kelime']; ?></li>
						<?php }  ?>
					</ul>

				</div>
			</div>

	  		<!-- SCROLL BOTTOM -->
	  		<div id="scroll-bottom" class="animate-me fadeInUpBig">
		  		<a href="#"><i class="fa fa-angle-double-down"></i></a>
	  		</div>

	  		<!-- SHADOW -->
	  		<div id="shade"></div>

	  		<!-- SLIDER NAVIGATION (DELETE IF YOU DON'T USE THE SLIDER) -->
            <div class="navigation-slider-container">

            	<a href="#" id="sliderPrev"><i class="fa fa-arrow-left"></i></a>
            	<a href="#" id="sliderNext"><i class="fa fa-arrow-right"></i></a>
            </div>

	  		<!-- HEADER SLIDER -->

		  	<div class="flexslider" id="header-slider">

		  		<ul class="slides">
		  		<?php include('db.php'); $slider = $bag->query("select * from slider")->fetchAll(PDO::FETCH_ASSOC);
            foreach($slider as $dem){
		  	  ?>
		  			<li><img src="images/slider/<?php echo $dem['resim']; ?>" alt=""></li>
		  			<?php } ?>
		  		</ul>

		  	</div>
		  	<!-- OR VIDEO -> https://github.com/VodkaBears/Vide -->
		  	<!--<div id="header-video"
			    data-vide-bg="ogv: images/video/video, webm: images/video/video, poster: images/video/poster" data-vide-options="posterType: jpg, loop: true, muted: true, position: 50% 50%">
			</div>-->

	  	</header>
	  	<!-- END HEADER -->

	  	<!-- START MAIN CONTAINER -->
	  	<div class="main-container">
	  		<div class="container">
	  			<!-- SKILLS -->
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			<?php echo $ayar['firmaadi']; ?> <span>
	  			</h2>
	  			<table id="skills-container" class="skills">
		  			<tr class="skills-row">
			  			<td class="skill animate-me zoomIn">
			  			<?php include('db.php'); $kutu1=$bag->query("select * from kutu1 where kutu1_id=1")->fetch(); ?>
				  			<h4><i class="fa fa-star-o"></i><?php echo $kutu1['baslik']; ?></h4>
				  			<p><?php echo $kutu1['metin']; ?></p>
			  			</td>
			  			<td class="skill animate-me zoomIn">
			  			<?php include('db.php'); $kutu2=$bag->query("select * from kutu2 where kutu2_id=1")->fetch(); ?>
				  			<h4><i class="fa fa-envelope-o"></i></i><?php echo $kutu2['baslik']; ?></h4>
				  			<p></i><?php echo $kutu2['metin']; ?></p>
			  			</td>
			  			<td class="skill animate-me zoomIn">
			  			<?php include('db.php'); $kutu3=$bag->query("select * from kutu3 where kutu3_id=1")->fetch(); ?>
				  			<h4><i class="fa fa-line-chart"></i><?php echo $kutu3['baslik']; ?></h4>
				  			<p><?php echo $kutu3['metin']; ?></p>
			  			</td>
		  			</tr>
		  			<tr class="skills-row animate-me zoomIn">
			  			<td class="skill">
			  			<?php include('db.php'); $kutu4=$bag->query("select * from kutu4 where kutu4_id=1")->fetch(); ?>
				  			<h4><i class="fa fa-thumbs-up"></i><?php echo $kutu4['baslik']; ?></h4>
				  			<p><?php echo $kutu4['metin']; ?></p>
			  			</td>
			  			<td class="skill animate-me zoomIn">
			  			<?php include('db.php'); $kutu5=$bag->query("select * from kutu5 where kutu5_id=1")->fetch(); ?>
				  			<h4><i class="fa fa-mobile"></i><?php echo $kutu5['baslik']; ?></h4>
				  			<p><?php echo $kutu5['metin']; ?></p>
			  			</td>
			  			<td class="skill animate-me zoomIn">
			  			<?php include('db.php'); $kutu6=$bag->query("select * from kutu6 where kutu6_id=1")->fetch(); ?>
				  			<h4><i class="fa fa-cubes"></i><?php echo $kutu6['baslik']; ?></h4>
				  			<p><?php echo $kutu6['metin']; ?></p>
			  			</td>
		  			</tr>
	  			</table>


	  			<!--PORTFOLIO -->
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			Projelerimiz <span>Kalite Güven Getirir !</span>
	  			</h2>
	  		</div>
	  		<div id="portfolio-container" class="with-separation-bottom with-separation-top">
	  			<!--PORTFOLIO ITEM -->
	  			<?php
	  			include ('functions.php');
	  			include('db.php');

                $pr = $bag->query("select * from projeler order by proje_id desc limit 6")->fetchAll(PDO::FETCH_ASSOC);
                 foreach($pr as $pro){
                 $baslik = $pro['proje_baslik'];
                 $ybaslik = tryap($pro['proje_baslik']);
                 $resim = $pro['proje_resim'];


	  			 ?>
	  			<figure class="portfolio-item effect-sadie">
			        <img src="images/projeler/<?php echo $pro['proje_resim']; ?>" style="height: 281px; width: 100%;" alt="Image portfolio"/>
			        <figcaption>
			            <h4><?php echo $baslik; ?></h4>

			            <a href="proje/<?php echo $ybaslik; ?>">Detaylar</a>
			        </figcaption>
			    </figure>
			    <?php } ?>


	  		</div>
	  		<div class="portfolio-button center animate-me zoomIn">
		  		<a href="projeler" class="btn btn-default"><i class="fa fa-suitcase"></i> Tüm Projelerimiz</a>
	  		</div>
	  		<!-- CUSTOM CONTAINER -->
	  		<section class="custom-section-container with-separation-bottom with-separation-top">
		  		<div class="container">
			  		<div class="custom-section-text">
			  		<?php include('db.php'); $orta = $bag->query("select * from ortaslogan where os_id=1")->fetch(); ?>
				  		<h2 class="animate-me fadeInLeft"><?php echo $orta['os_baslik']; ?></h2>
				  		<p class="animate-me fadeInLeft"><?php echo $orta['os_metin']; ?></p>

			  		</div>
			  		<div class="custom-section-buttons">
				  		<a href="katalog" class="btn btn-default animate-me fadeInRight"><i class="fa fa-book"></i>Katalog</a>
				  		<a href="iletisim" class="btn btn-default animate-me fadeInRight"><i class="fa fa-paper-plane"></i> İletişim</a>
			  		</div>
		  		</div>
	  		</section>

            <div class="container" id="urunler">
	  			<!-- COMMENTS SHORTCODEs -->
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			Ürünlerimiz<span>Sadece Kalite Üretiyoruz.</span>
	  			</h2>
	  		</div>
	  		<div id="blog-container" class="with-separation-bottom with-separation-top animate-me fadeIn">
	  			<div class="flexslider">
		  			<ul class="slides">


			  		<?php include ('db.php'); $a = $bag->query("select * from urunler order by urun_id desc")->fetchAll(PDO::FETCH_ASSOC);
                    foreach($a as $b){
			  		 ?>
			  			<li class="blog-post">
			  				<!-- THUMBNAIL IMAGE -->
			  				<div class="blog-thumbnail">
				  				<a href="urun/<?php echo $b['urunsefurl']; ?>">
					  				<img src="images/urunler/<?php echo $b['urunresim']; ?>" style="height: 211px;" alt="Blog Header Image">
				  				</a>
				  			</div>
				  			<!-- POST CONTENT -->
	  						<div class="blog-content">
				  			<center>	<a href="urun/<?php echo $b['urunsefurl'] ;?>" class="blog-post-title"><h6><b><?php echo $b['urunbaslik'] ?></b></h6></a></center>
				  				<div class="blog-button">
					  				<a href="urun/<?php echo $b['urunsefurl'] ;?>" class="btn btn-default"><i class="fa fa-arrow-right"></i> Detaylar</a>
					  			</div>
				  			</div>
			  			</li>
			  		<?php } ?>

		  			</ul>
	  			</div>
	  		</div>

        <div class="container">
	  			<!-- PARTNERS -->
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			Referanslarımız<span>Bizi Tercih Ettiğiniz İçin Teşekkür Ederiz!</span>
	  			</h2>
	  			<div id="partners-slider" class="flexslider">
		  			<ul class="slides">
		  			<?php include('db.php');
		  			$ref = $bag->query("select * from referanslar order by referans_id desc")->fetchAll(PDO::FETCH_ASSOC);
                    foreach($ref as $res){

		  				 ?>
		  				<li class="partners-slide">

		  					<a href="#"><img src="images/referanslar/<?php echo $res['re_logo']; ?>" alt="Partner Logo"></a>

		  				</li>
		  				<?php } ?>
		  			</ul>
			  	</div>
	  			<!-- GET IN TOUCH  -->

	  		</div>
	  		<!-- CUSTOM CONTAINER -->

	  	</div>
	  	<!-- END MAIN CONTAINER -->

        <?php include('footer.php'); ?>
	  	
	  	<!-- SCROLL TOP -->
	  	<a href="#" id="scroll-top" class="fadeInRight animate-me"><i class="fa fa-angle-double-up"></i></a>
  	</div>

    <!-- SCRIPTS -->
    <script type="text/javascript">stLight.options({publisher: "8234a0ff-5822-45f5-92a9-2460ac3c5ca8", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    <!--
<script>
var options={ "publisher": "8234a0ff-5822-45f5-92a9-2460ac3c5ca8", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "linkedin", "pinterest", "googleplus", "delicious", "mail_ru"]}};
var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
</script> 
-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
	<script type="text/javascript">
		/*TEXT TICKER (ONLY FOR HOME PAGE)*/
		$('#ticker-text').vTicker('init', {
			speed: 500, 
		    pause: 5000
	    });
	</script>	
    <script src="js/custom.js"></script>
  </body>
  <!-- END BODY -->
</html>