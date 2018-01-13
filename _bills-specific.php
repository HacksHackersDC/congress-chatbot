<?php

// Core variables
$base_url = 'https://api.propublica.org/congress/v1/';


// function get the data from api.ai, get the base code and then parse the number from it. 



// Function to parse congress api.
function praseAPI($url) {
    global $key;
    $ch = curl_init();
    $header = array('X-API-Key: '. $pro_publica_key .'');
    curl_setopt($ch, CURLOPT_URL, $url );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 ); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header ); 
    $result = curl_exec( $ch );
    curl_close($ch);
    return $result;
}


?>