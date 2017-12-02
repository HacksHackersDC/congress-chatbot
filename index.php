<?php

// API.
include ('key.php'); 

// Variables
$congress = '115';
$chamber = 'senate';
$search_type = 'members';
$base_url = 'https://api.propublica.org/congress/v1/';

function praseAPI($url) {

    global $key;

    $ch = curl_init();
    $header = array('X-API-Key: '. $key .'');
    curl_setopt($ch, CURLOPT_URL, $url );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 ); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header ); 
    $result = curl_exec( $ch );
    curl_close($ch);


    return $result;

}

// User Input values
$input_name = 'Tim Kaine';

// Output
$getmembers = praseAPI( $base_url . '115/senate/members.json');

$name = explode(" ", $input_name);
$first_name = $name[0];
$last_name = $name[1];

echo $first_name . $last_name;

// $last_name = '';





// echo '<pre>' . $getmembers . '</pre>';





?>
