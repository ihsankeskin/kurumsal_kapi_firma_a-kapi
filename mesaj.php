<?php 

include('db.php');

if (isset($_POST['submitted'])) {
    
    $isim  = $_POST['isim'];
    $konu  = $_POST['konu'];
    $email = $_POST['email'];
    $mesaj = $_POST['mesaj'];

    $al = $bag->prepare("insert into mesajlar set isim=?, email=?, konu=?, mesaj=?");
    $al ->execute(array($isim,$email,$konu,$mesaj));

    if ($al) {
        
     echo "<center/><h2>Mesajınızı Aldık.</h2><br> <h4>Size En Kısa Süre İçinde Cevap Vereceğiz!</h4><br/>";
     echo "<img src='panel/ok.png'/>";
     header('refresh:2; url=iletisim.php');


    }else{

     echo "<center/><h2>Bir Sorun OLuştu.</h2><br> <h4>Lütfen Daha Sonra Tekrar Deneyiniz!</h4><br/>";
     echo "<img src='panel/ok.png'/>";
     header('refresh:2; url=iletisim.php');




    }

    }

?>