<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$api_key = $_ENV['API_KEY'];
$BASE_URL = "https://apiv3.apifootball.com/";

$url = "$BASE_URL?action=get_countries&APIkey=$api_key";
$data = file_get_contents($url);
$response = json_decode($data, true);

var_dump($data)
?>