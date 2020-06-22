<?php
/**
 * Created by PhpStorm.
 * User: ihsan
 * Date: 22.06.2020
 * Time: 04:28
 */
?>
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
        <!--<li><a href="hizmetler">Hizmetlerimiz</a></li>-->
        <li><a href="iletisim">İletişim</a></li>
    </ul>
</div>
<!-- WIDGET -->
<div class="col-md-4 widget animate-me fadeInRight">
    <h4>İletişim Bilgileri</h4>
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
    </div>
</div>
</footer>
<!-- END FOOTER -->
