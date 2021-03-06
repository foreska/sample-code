<?php

// This line loads the library
require('Services/Twilio.php');

// Find your Account Sid and Token at twilio.com/user/account
$sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$token = "your_auth_token";

// Initialize the client
$client = new IPMessaging_Services_Twilio($sid, $token);

// Retrieve the service
$service = $client->services->get("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX");

// Retrieve the channel
$channel = $service->channels->get("CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX");

// Delete the member
$response = $channel->members->delete("MBXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX");
print $response;