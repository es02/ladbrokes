<?php

require_once './vendor/autoload.php';

$endpoint = "http://localhost:8000/";
$child = false;

$call_endpoint = $endpoint;

if(isset($_GET['id'])){
    $call_endpoint = $endpoint . "race/" . $_GET['id'];
    $child = true;
}

//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$call_endpoint);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

// Will dump a beauty json :3
$data = json_decode($result, true);

$loader = new Twig_Loader_Filesystem(__DIR__);
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/cache',
));

if($child){
    $data = $data[0];
}

echo $twig->render('template.html', array('child' => $child,
                                       'data'  => $data));
