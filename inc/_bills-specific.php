<?php

// Core variables
$base_url = 'https://api.propublica.org/congress/v1/';

// Values from dialogflow
$bill_code = strtolower($update["result"]["parameters"]['bill_codes']);
$bill_num =  strtolower($update["result"]["parameters"]['number']);
$bill_action = strtolower($update["result"]["parameters"]['action']);

// Function to parse congress API.
function parseAPI($url) {
    global $pro_publica_key;
    $ch = curl_init();
    $header = array('X-API-Key: '. $pro_publica_key .'');
    curl_setopt($ch, CURLOPT_URL, $url );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 ); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header ); 
    $result = curl_exec( $ch );
    $result = json_encode($result);
    
    curl_close($ch);
    
    return $result;
}

// Get ProPublica Data:
// $pro_publica_bill_id = $bill_code . $bill_num;

$pro_publica_bill_id = 'hr21';
$bill_endpoint_url = $base_url . $session . '/bills/' . $pro_publica_bill_id . '.json';

$output = json_decode(parseAPI($bill_endpoint_url), true);
// $rep_data = array($rep_array);

print_r ($output);


// $output = json_decode(parseAPI($bill_endpoint_url), true);
// $result_array = array($output);


// // var_dump ($result_array);

// // print $result_array['status'];

// print_r ($result_array);

// echo '<br>';

// echo $result_array[0]['status'];

// echo $result_array[0]['results'];


// echo $output[0]['results'];

// print '<pre> ' . $output . '</pre>';


// if ($bill_action === 'status') {
//     echo 
// }


// echo  '<pre>' . parseAPI($bill_endpoint_url) . '</pre>';
 



?>