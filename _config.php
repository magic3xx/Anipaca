<?php 

$conn = new mysqli("HOSTNAME", "USERNAME", "PASSWORD", "DATABASE");

if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    
}

$websiteTitle = "AniPaca";
$websiteUrl = "//{$_SERVER['SERVER_NAME']}";
$websiteLogo = $websiteUrl . "/public/logo/logo.png";
$contactEmail = "@gmail.com";

$version = "2";

$discord = "https://dcd.gg/anipaca";
$github = "https://github.com/PacaHat";
$telegram = "https://t.me/anipaca";
$instagram = "https://www.instagram.com/pxr15_";

// all the api you need

$api = "https://api.kitsunee.me/v2/hianime/"; //https://github.com/ghoshRitesh12/aniwatch-api Also use this in src/component/qtip.php
$zpi = "https://api.kitsunee.me/"; //https://github.com/itzzzme/anime-api
$proxy = "https://cors-anywhere.herokuapp.com/cors?url="; //https://github.com/shashstormer/m3u8_proxy-cors


$banner = $websiteUrl . "/public/images/banner.png";

    
