<?php

if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
    header('HTTP/1.0 403 Forbidden');
    die('You are not allowed to access this file.');     
}
header('Content-type: application/json');
$url=$_GET['url'];
$response=$_GET['response'];
$secret = "6LdugSgUAAAAAKzP2UhLpSJpabo7cwaD7-jMBTRi"; 
$params = array('secret'=>'&gt;'.$secret, 'response'=>'&gt;'.$response);
$json=file_get_contents( $url  . '?secret=' . $secret . '&amp;response=' . $response);
echo $json; 

?>