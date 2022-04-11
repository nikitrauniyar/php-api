<?php


$url = "https://api.publicapis.org/entries"; // declaring url
$json = file_get_contents($url);             //getting json from api
$json_data = json_decode($json, true);       // decoding json
$entries= $json_data['entries'];               // Holding entries data which is an array

$category=$argv[1]; // tapping argument category
$limit=$argv[2]; // tapping argument limit

$api_array=[]; // declaring an empty array just to hold APIs from data recieved


// making a new array of APIs looping through each entry
foreach($entries as $entry){
    array_push($api_array, $entry['API']);
}

//sorting the new API array alphabetically
sort($api_array);

// Printing APIs
echo "The list of API values in alphabetical order is printed below.\n";
foreach($api_array as $api){
    echo $api."\n";
}

$res = []; // empty array to story found entry matched with category

// pushing entries which matches the argument category
foreach($entries as $entry){
    if ($entry['Category']==$category){
       array_push($res, $entry);
    }
}

// Printing results of entires, if not found "No result" is printed

if(count($res)>0){
    echo "\n The list of $limit $category was found \n\n";
    for ($i = 0; $i <$limit; $i++) {
        echo "{\n API - ".$res[$i]['API']."\n";
        echo " Description - ".$res[$i]['Description']."\n";
        echo " Auth - ".$res[$i]['Auth']."\n";
        echo " HTTPS - ".$res[$i]['HTTPS']."\n";
        echo " Cors - ".$res[$i]['Cors']."\n";
        echo " Link - ".$res[$i]['Link']."\n";
        echo " Category - ".$res[$i]['Category']."\n}\n";
    }
} else{
    echo "No results";
}





?>


