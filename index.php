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

// Get first name and last name from user input. 
$name = explode(" ", $input_name);
$first_name = $name[0];
$last_name = $name[1];


// Get list of members, search and find the member by $first_name and $last_name;
$getmembers = praseAPI( $base_url . '115/senate/members.json');


// $last_name = '';





// echo '<pre>' . $getmembers . '</pre>';





?>
