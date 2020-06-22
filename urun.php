<?php 
include ('db.php');
error_reporting(0);
$id = $_GET['urun'];
$al = $bag->query("select * from urunler where urunsefurl='$id'")->fetch();
$rkat = $al['urun_id'];
?>
<?php include('db.php'); $ayar=$bag->query("select * from ayarlar where ayar_id=1")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- PAGE TITLE -->
    <title><?php echo $al['urunbaslik']; ?></title>
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
	  			<div class="row">
	  				<!--PORTFOLIO -->
		  			<h2 class="with-breaker animate-me fadeInUp">
			  			Ürün Detay
		  			</h2>
	  				<div class="col-lg-6">
	  					<div class="flexslider image-slider">
	  						<!--SLIDER -->
	  						<ul class="slides">
	  						<?php include('db.php'); $pre = $bag->query("select * from urunresimler where urunresimkat='$rkat'")->fetchAll(PDO::FETCH_ASSOC);
                                foreach($pre as $dim){

	  						 ?>
	  					<li><a href="images/urunler/<?php echo $dim['resim']; ?>" data-fancybox-group="project-slider" class="fancybox"><img src="images/urunler/<?php echo $dim['resim']; ?>" alt="Project Image"></a></li>
	  							<?php } ?>
	  						</ul>
	  					</div>
	  					<!--SHARE BUTTONS -->
			  			<ul class="share-buttons animate-me fadeInUp">
			  				<script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436'); return false;}</script>
			  				<li><a rel="nofollow" href="http://www.facebook.com/share.php?u=<;url>" onclick="return fbs_click()" target="_blank" class="btn btn-default button-facebook" ><i class="fa fa-facebook"></i> Paylaş</a></li>
			  				<li><a href="http://twitter.com/home/?status=Your tweet text." target="_blank" class="btn btn-default button-twitter"><i class="fa fa-twitter"></i> Tweetle</a></li>
			  			</ul>
	  				</div>
	  				<div class="col-lg-6 ">
                        <form id="contact-form" action="teklif.php" method="post" class="form-horizontal urunteklif ">
	  					<!--ITEM DETAILS -->
			  			<h1 class="animate-me fadeInRight project-title" style="color:#6b5672;"><?php echo $al['urunbaslik']; ?></h1>
			  			<p class="animate-me fadeInRight" style="color:#4b5672;font-family: Verdana;">Ürün Serisi :<i style="color:#990000;"> <?php echo $al['urunfiyat']; ?></i></p>
			  			<p class="animate-me fadeInRight" style="color:#4b5672;font-family: Verdana;">ÜRÜN KODU : <i style="color:#990000;"> <?php echo $al['urunkod']; ?></i></p>
			  			<p class="animate-me fadeInRight" style="color:#4b5672;font-family: Verdana;" >Renk/Desen Seçenekleri : <input id="contact-name" name="isim" type="color" placeholder="(Cm)" class="input-sm " required=""> </p></p>
                        <p class="animate-me fadeInRight" style="color:#4b5672;font-family: Verdana;" >Kapı Kolu Seçenekleri :
                            <input id="contact-name" name="model1" type="radio" class="input-sm" value="model1" >
                            <label for="male">model1</label><br>
                            <input id="contact-name" name="model1" type="radio" class="input-sm" value="model1" >
                            <label for="male">model1</label><br>
                            <input id="contact-name" name="model1" type="radio" class="input-sm" value="model1" >
                            <label for="male">model1</label><br>
                            <input id="contact-name" name="model1" type="radio" class="input-sm" value="model1" >
                            <label for="male">model1</label><br>



                        <p class="animate-me fadeInRight" style="color:#4b5672;font-family: Verdana;" >Kapı Yönü :
                                <select id="kapi_yonu" name="konu" class="input-sm" required="">
                                    <option selected="selected">Sağ</option>
                                    <option>Sol</option>
                                </select> </p>
                        <p class="animate-me fadeInRight" style="color:#4b5672;font-family: Verdana;" >Genişlik :
                                <input id="contact-name" name="isim" type="text" placeholder="(Cm)" class="input-sm " required=""> </p>
                        <p class="animate-me fadeInRight" style="color:#4b5672;font-family: Verdana;" >Yükseklik:
                                <input id="contact-name" name="isim" type="text" placeholder="(Cm)" class="input-sm " required=""> </p>

                            <p class="animate-me fadeInRight" style="color:#4b5672;font-family: Verdana;" >Ad Soyad:
                                <input id="contact-name" name="isim" type="text" placeholder="(Cm)" class="input-sm " required=""> </p>
                            <p class="animate-me fadeInRight" style="color:#4b5672;font-family: Verdana;" >Telefon Numarası:
                                <input id="contact-name" name="isim" type="tel " placeholder="555 555 55 55" class="input-sm " required=""> </p>
                            <p class="animate-me fadeInRight" style="color:#4b5672;font-family: Verdana;" >Email:
                                <input id="contact-name" name="isim" type="email" placeholder="teklif@akapi.com.tr" class="input-sm" required=""> </p>


                        <div class="control-group text-center">
                            <input type="hidden" name="submitted" id="submitted" value="true" />
                            <button type="submit" class="btn btn-default center" name="submitted"><i class="fa fa-paper-plane-o"></i> Teklif İste</button>
                        </div>

                        </form>


			  			 <h3 class="animate-me fadeInRight" style="color: #4b5672;" >Ürün Açıklama</h3>
			  			<p class="text-justify"><?php echo $al['urunmetin']; ?></p>
			  			<div class="text-right animate-me bounceIn">	</div>

	  				</div>
	  			</div>
	  			
            	<h2 class="with-breaker animate-me fadeInUp">
		  			Ürünlerimiz<span>Kalite Güven Getirir!</span>
	  			</h2>
	  		</div>
	  		<div id="blog-container" class="with-separation-bottom with-separation-top animate-me fadeIn">
	  			<div class="flexslider">
		  			<ul class="slides">
			  			
			  			
			  		<?php include ('db.php'); $h = $bag->query("select * from urunler order by urun_id desc")->fetchAll(PDO::FETCH_ASSOC);
                    foreach($h as $m){
			  		 ?>
			  			<li class="blog-post">
			  				<!-- THUMBNAIL IMAGE -->
			  				<div class="blog-thumbnail">
				  				<a href="urun/<?php echo $m['urunsefurl']; ?>">
					  				<img src="images/urunler/<?php echo $m['urunresim']; ?>" style="height: 350px;" alt="Blog Header Image">
				  				</a>
				  			</div>
				  			<!-- POST CONTENT -->
	  						<div class="blog-content">
				  			<center>	<a href="urun/<?php echo $m['urunsefurl'] ;?>" class="blog-post-title"><h6><b><?php echo $m['urunbaslik'] ?></b></h6></a></center>
				  				
				  				
				  				<div class="blog-button">
					  				<a href="urun/<?php echo $m['urunsefurl'] ;?>" class="btn btn-default"><i class="fa fa-arrow-right"></i> Detaylar</a>
					  			</div>
				  			</div>
			  			</li>
			  		<?php } ?>
			  			
			  		
		  			</ul>
	  			</div>
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