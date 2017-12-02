<?php

$congress = '115';
$chamber = 'senate';
$search_type = 'members';

// $url = 'https://api.propublica.org/congress/v1/'. $congress .'/'. $chamber .'/'. $search_type . '.json';

$url = 'https://api.propublica.org/congress/v1/bills/search.json?query=health';

$key = 'W5trnjlbN0YYETRJ0NPfW0lhXVBksd3KHUltT1GE';

// Start CURL
$ch = curl_init();
$header = array('X-API-Key: '. $key .'');
curl_setopt($ch, CURLOPT_URL, $url );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 ); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $header ); 
$result = curl_exec( $ch );
curl_close($ch);

// Save results into .JSON file (for caching);
// If file does not exist create it type thing.


// using data from the saved arrays, create print array calls for specific objects

echo '<pre>' . $result . '</pre>';


?>
