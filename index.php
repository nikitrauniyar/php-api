<?php


$url = "https://api.publicapis.org/entries"; // declaring url
$json = file_get_contents($url);             //getting json from api
$json_data = json_decode($json, true);       // decoding json
$entries= $json_data['entries'];               // Holding entries data which is an array

$category=$argv[1]; // tapping argument category
$limit=$argv[2]; // tapping argument limit

$api_array=array(); // declaring an empty array just to hold APIs from data recieved


// making a new array of APIs looping through each entry
foreach($entries as $entry){
    array_push($api_array, $entry['API']);
}

//sorting the new API array alphabetically
sort($api_array);

foreach($api_array as $api){
    echo $api."\n";
}



?>


