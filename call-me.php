<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<?php

// fetch our library with composer
require("vendor/autoload.php");


 // Your Account SID from www.twilio.com/user/account
$sid = getenv("TWILIO_ACCOUNT_SID");
 // Your Auth Token from www.twilio.com/user/account
$token = getenv("TWILIO_AUTH_TOKEN");

$twiml_domain = getenv('TWIML_URL');

$client = new Services_Twilio($sid, $token);
$call = $client->account->calls->create(
  getenv('TWILIO_ORIGIN_NUMBER'),
  getenv('TWILIO_DESTINATION_NUMBER'),

  // This is the TwiML file to read that points the call at the right MP3 file
  $twiml_domain
);
?>
</head>
<!-- And now let's display something on the actual page, too -->
<body>

<h1>It's Calling!</h1>
<h2><?php phpinfo(); ?></h2>
</body>
</html>