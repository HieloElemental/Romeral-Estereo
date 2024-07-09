<?php
define("AUDIOLINK", "http://162.210.192.98:3830/;");

define("GDIR", dirname(__FILE__));
define("PUBLICDIR", "public/");
define("ASSETS", "public/assets/");
define("TEMPLATES", GDIR . "/public/templates/");


//Make URL path
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $link = "https";
else
    $link = "http";
$link .= "://";
$link .= $_SERVER['HTTP_HOST'];
$link .= "/Romeral Estereo/";
define("URL", $link);
?>