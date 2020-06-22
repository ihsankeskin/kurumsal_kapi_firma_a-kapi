<?php error_reporting(0); include('db.php'); $ayar=$bag->query("select * from ayarlar where ayar_id=1")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- PAGE TITLE -->
    <title><?php echo $ayar['firmaadi']; ?> - İletişim Detayları</title>
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
	  		<div id="shade"></div>

	  		<!-- HEADER SLIDER -->
		  	<div class="flexslider" id="header-slider">
		  		<ul class="slides">
		  			<li><img src="images/backgrounds/bg1.jpg" alt="SLider Image"></li>
		  		</ul>	
		  	</div>
	  		
	  	</header>
	  	<!-- END HEADER -->
	  	
	  	<!-- START MAIN CONTAINER -->
	  	<div class="main-container">
	  		<div id="contact-container" class="container">
	  			<!-- SKILLS -->
                <div class="container">
                    <!-- CUSTOMER REVIEWS -->
                    <h2 class="with-breaker animate-me fadeInUp">
                        İletişim Detayları.
                    </h2>
                </div>


	  			<div class="row">
                    <div class="iletisim text-center animate-me bounceIn ">
                            <ul class="text-primary h3"> <?php echo $ayar['telefon']; ?> </ul><br>
                            <ul class="h4"> <?php echo $ayar['eposta']; ?> </ul><br>
                            <ul class=" h4"> <?php echo $ayar['adres']; ?> </ul>
                        <hr class="fa-align-center">
                    </div>
	  				<div class="col-md-6">
	  					<!-- Google Map -->
	  					<div id="GoogleMap"></div>
	  				</div>
	  				<div class="col-md-6">
	  					<!-- FORMS -->
	  					<form id="contact-form" action="mesaj.php" method="post" class="form-horizontal">
							<!-- NAME -->
							<div class="control-group row">
								<label class="control-label col-md-3" for="contact-name">Adınız</label>
								<div class="controls col-md-9">
									<input id="contact-name" name="isim" type="text" placeholder="Adınız Ve Soyadınız" class="input-xlarge form-control" required="">
								</div>
							</div>
							<!-- EMAIL -->
							<div class="control-group row">
								<label class="control-label col-md-3" for="contact-email">E-Posta Adresiniz</label>
								<div class="controls col-md-9">
									<input id="contact-email" name="email" type="text" placeholder="mail@mail.com" class="input-xlarge form-control" required="">
								</div>
							</div>
							<!-- TOPIC -->
							<div class="control-group row">
								<label class="control-label col-md-3" for="contact-topic">Konu</label>
								<div class="controls col-md-9">
									<select id="contact-topic" name="konu" class="input-xlarge form-control">
										<option>Destek</option>
										<option selected="selected">Bilgi</option>
										<option>Sipariş</option>
										<option>Teklif</option>
                                        <option>Diğer</option>
									
									</select>
								</div>
							</div>
							<!-- MESSAGE -->
							<div class="control-group row">
								<label class="control-label col-md-3" for="contact-message">Mesajınız</label>
								<div class="controls col-md-9">                     
									<textarea id="contact-message" name="mesaj" class=" form-control" rows="5">Yazmaya Başlayın !</textarea>
								</div>
							</div>
							<!-- CAPTCHA -->
							
							<!-- BUTTON -->
							<div class="control-group text-right">
							 	<input type="hidden" name="submitted" id="submitted" value="true" />
							 	<button type="submit" class="btn btn-default" name="submitted"><i class="fa fa-paper-plane-o"></i> Gönder</button>
							</div>
						</form>
	  				</div>
	  			</div>
	  		</div>
            <div class="container">
                <!-- CUSTOMER REVIEWS -->
                <h2 class="with-breaker animate-me fadeInUp">
                    Bizi Sosyal Ağlardan Takip Edin.
                </h2>
            </div>
            <!-- CUSTOM CONTAINER -->
            <section class="contact-container with-separation-bottom with-separation-top">
                <div class="contact-boxes">
                    <div class="contact-box contact-box-email animate-me zoomIn">
                        <h2>Email</h2>
                        <p>Bize E-Posta Gönderin.</p>
                        <a href="iletisim" class="btn btn-default"><i class="fa fa-envelope"></i> Bize Yazın</a>
                    </div>
                    <div class="contact-box contact-box-linkedin animate-me zoomIn">
                        <h2>Linkedin</h2>
                        <p>Bizi Linkedin'den Takip Edin.</p>
                        <a href="<?php echo $ayar['twitter'];?>" class="btn btn-default"><i class="fa fa-linkedin"></i> Takip Edin</a>
                    </div>
                    <div class="contact-box contact-box-instagram animate-me zoomIn">
                        <h2>İnstagram</h2>
                        <p>Bizi İnstagram'dan Takip Edin.</p>
                        <!-- GET THE LINL -> http://www.skype.com/en/features/skype-buttons/create-skype-buttons/-->
                        <a href="<?php echo $ayar['skype'];?>" class="btn btn-default"><i class="fa fa-instagram"></i> Profili Görüntüle</a>
                    </div>
                    <div class="contact-box contact-box-facebook animate-me zoomIn">
                        <h2>Facebook</h2>
                        <p>Facebook Sayfamızı Beğenin</p>
                        <a href="<?php echo $ayar['facebook'];?>" class="btn btn-default"><i class="fa fa-facebook"></i> Sayfayı Beğen</a>
                    </div>
                </div>
            </section>
	  		<!-- CUSTOM CONTAINER
	  		<section class="custom-section-container with-separation-bottom with-separation-top">
		  		<div class="container">
			  		<div class="custom-section-text">
			  		<?php include('db.php'); $orta = $bag->query("select * from ortaslogan where os_id=1")->fetch(); ?>
				  		<h2 class="animate-me fadeInLeft"><?php echo $orta['os_baslik']; ?></h2>
				  		<p class="animate-me fadeInLeft"><b><?php echo $orta['os_metin']; ?></b></p>
				  		
			  		</div>
			  		<div class="custom-section-buttons">
				  		<a href="hakkimizda" class="btn btn-default animate-me fadeInRight"><i class="fa fa-book"></i><b> Daha Fazla</b></a>
				  		<a href="iletisim" class="btn btn-default animate-me fadeInRight"><i class="fa fa-paper-plane"></i><b> İletişim</b></a>
			  		</div>
		  		</div>
	  		</section> -->
	  	</div>
        <?php include('footer.php'); ?>

	  	<!-- SCROLL TOP -->
	  	<a href="#" id="scroll-top" class="fadeInRight animate-me"><i class="fa fa-angle-double-up"></i></a>
  	</div>

    <!-- SCRIPTS -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- ONLY FOR THE CONTACT PAGE : MAP SCRIPT -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMxqu4MWvcbIZ3_pKlVYWOmiAkZ6-MGAg&callback=initMap"></script>
    <script>
		function initialize() {
		  var myLatlng = new google.maps.LatLng(<?php echo $ayar['latitute']; ?>,<?php echo $ayar['longtitute']; ?>); //http://itouchmap.com/latlong.html
		  var mapOptions = {
		    zoom: 15,
		    center: myLatlng
		  }
		  var map = new google.maps.Map(document.getElementById('GoogleMap'), mapOptions);
		
		  var marker = new google.maps.Marker({
		      position: myLatlng,
		      map: map,
		      title: 'Hello World!'
		  });
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
		
	</script>
	<!-- END -->
	<script type="text/javascript">stLight.options({publisher: "8234a0ff-5822-45f5-92a9-2460ac3c5ca8", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<!--<script>
var options={ "publisher": "8234a0ff-5822-45f5-92a9-2460ac3c5ca8", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "linkedin", "pinterest", "googleplus", "delicious", "mail_ru"]}};
var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
</script> -->
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>
  </body>
  <!-- END BODY -->
</html>