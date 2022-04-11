<?php


$url = "https://api.publicapis.org/entries";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
$entries= $json_data['entries'];

foreach($entries as $entry){
    echo $entry['API']."\n";
}


// $ch = curl_init();
// // IMPORTANT: the below line is a security risk, read https://paragonie.com/blog/2017/10/certainty-automated-cacert-pem-management-for-php-software
// // in most cases, you should set it to true
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_URL, $url);
// $result = curl_exec($ch);
// curl_close($ch);

// $obj = json_decode($result);
// echo $obj->count;

?>


