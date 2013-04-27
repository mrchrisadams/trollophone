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
$calling_from = getenv('TWILIO_ORIGIN_NUMBER');
$calling_to   = getenv('TWILIO_DESTINATION_NUMBER');

$client = new Services_Twilio($sid, $token);
$call = $client->account->calls->create(
  $calling_from,
  $calling_to,

  // This is the TwiML file to read that points the call at the right MP3 file
  $twiml_domain
);
?>
</head>
<!-- And now let's display something on the actual page, too -->
<body>

<h1>You can't see jack, but this number is being called!</h1>
<h1>Calling from <?php print($calling_from); ?> to <?php print($calling_to); ?></h1>
</body>
</html>