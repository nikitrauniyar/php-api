<?php


$url = "https://api.publicapis.org/entries";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
echo "My token: ". $json_data["count"];

?>


