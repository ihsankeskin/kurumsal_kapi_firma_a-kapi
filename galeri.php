<?php error_reporting(0); include('db.php'); $ayar=$bag->query("select * from ayarlar where ayar_id=1")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- PAGE TITLE -->
    <title><?php echo $ayar['firmaadi']; ?> | Foto Galeri</title>
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
   
   <script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" id="st_insights_js" src="http://w.sharethis.com/button/buttons.js?publisher=8234a0ff-5822-45f5-92a9-2460ac3c5ca8"></script>
<script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>
   
  </head>

  <body>

  	<div id="page">
        <?php include('header.php'); ?>

	  		<!-- SHADOW -->
	  		<div id="shade"></div>

	  		<!-- HEADER SLIDER -->
		  	<div class="flexslider" id="header-slider">
		  		<ul class="slides">
		  			<li><img src="images/backgrounds/bg1.jpg"  alt="SLider Image"></li>
		  		</ul>	
		  	</div>
	  		
	  	</header>
	  	<!-- END HEADER -->
	  	
	  	<!-- START MAIN CONTAINER -->
	  	<div class="main-container" style="margin-left:auto; " >
	  		<div class="container" >
	  			<!-- SKILLS -->
	  			<h2 class="flexslider image-slider" style="width: 100%; height: auto; ">
		  		<div class="container">
	  			<!-- CUSTOMER REVIEWS -->
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			Foto Galeri
	  			</h2>
	  		</div>
		  			<?php include('db.php'); $al = $bag->query("select * from galeri order by resim_id desc")->fetchAll(PDO::FETCH_ASSOC);
                    foreach($al as $t){
		  			 ?>
                  
	  			</h2>
	  			<div class="resimler" style="width: 190px; height: auto; float: left;">
	  			<a href="images/galeri/<?php echo $t['resim']; ?>" data-fancybox-group="project-slider" class="fancybox"><img src="images/galeri/<?php echo $t['resim']; ?>" style="width: 190px; height: 150px; border-radius: 20px; padding: 5px; margin: 1px;  " alt="Project Image"></a>
	  			</div>
                
					
						<?php } ?>
						
						
					<script>
					  $(function () {
					    	$('#SkillsTab a').click(function (e) {
						  		e.preventDefault()
						  		$(this).tab('show')
							});
					  });
					</script>
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
</script>-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>
  </body>
  <!-- END BODY -->
</html>