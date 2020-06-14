
<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
$sid    = "ACeaf9fe1e42f7df14f3a80c313e248b4a";
$token  = "056d28eaa58be8c21ad05beffee3804e";
$twilio = new Client($sid, $token);

$message = $twilio->messages
                  ->create("whatsapp:+556596032777", // to
                           [
                               "mediaUrl" => ["http://www.lanalab.com/time422/lembrete.ogg"],
                               "from" => "whatsapp:+14155238886",
                               "body" => ""
                           ]
                  );

print($message->sid);