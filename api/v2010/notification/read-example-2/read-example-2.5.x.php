<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once '/path/to/vendor/autoload.php';

use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/console
$sid    = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$token  = "your_auth_token";
$twilio = new Client($sid, $token);

$notifications = $twilio->notifications
                        ->read(array(
                                   'log' => 1,
                                   'messageDate' => new \DateTime('2009-07-06')
                               )
                        );

foreach ($notifications as $record) {
    print($record->sid);
}