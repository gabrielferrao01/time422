
<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once 'vendor/autoload.php';
require_once 'variaveis.php';

use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
$sid    = "ACeaf9fe1e42f7df14f3a80c313e248b4a";
$token  = $tokenAtual;
$twilio = new Client($sid, $token);

$message = $twilio->messages
                  ->create("whatsapp:" . $telefone, // to
                           [
                               "mediaUrl" => [$lembrete_url],
                               "from" => "whatsapp:" . $telefoneorigem,
                               "body" => ""
                           ]
                  );

print($message->sid);