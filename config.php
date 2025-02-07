
<?php


session_start();




require_once 'vendor/autoload.php';


$google_client = new Google_Client();


$google_client->setClientId('1023220941816-378v5ab39i3uhvt6dlvebb1u3k6ptprm.apps.googleusercontent.com');


$google_client->setClientSecret('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');


$google_client->setRedirectUri('http://localhost:3000/');


$google_client->addScope('email');

$google_client->addScope('profile');

?> 