<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

// 3. The external API URL you want to reach
$url = 'https://api.meteo.lt/v1/places';

// 4. Use file_get_contents to fetch the data
// (Note: Some corporate servers require 'curl' instead if this is disabled)
$response = file_get_contents($url);

if ($response === FALSE) {
    http_response_code(500);
    echo json_encode(["error" => "Could not fetch data from Meteo API"]);
} else {
    echo $response;
}
?>