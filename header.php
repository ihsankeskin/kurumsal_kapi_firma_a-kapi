<?php
/**
 * Created by PhpStorm.
 * User: ihsan
 * Date: 22.06.2020
 * Time: 04:28
 */
?>
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


