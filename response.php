<?php
require "vendor/autoload.php";


use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

$data = json_decode(file_get_contents("php://input"));

$text = $data->text;

$client = new Client("AIzaSyAjpytU6P2ynFjtYbNsQ0rweG2hiFUjJpI");

$response = $client->geminiPro()->generateContent(
    new TextPart($text),
);

echo $response->text();
