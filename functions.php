<?php 


function tryap($text) {
$text = trim($text);
$search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ','A','B','C','D','E','F','H','I','J','K','L','M','N','O','P','R','S','T','U','V','Y','Z');
$replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-','a','b','c','d','e','f','h','i','j','k','l','m','n','o','p','r','s','t','u','v','y','z');
$new_text = str_replace($search,$replace,$text);
return $new_text;
}  










?>