<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<?php

// fetch our library with composer
require("vendor/autoload.php");

// authenticate with twillio
$sid = getenv("TWILIO_ACCOUNT_SID");
$token = getenv("TWILIO_AUTH_TOKEN");

// set numbers to call from and to
$calling_from = getenv('TWILIO_ORIGIN_NUMBER');
$calling_to   = getenv('TWILIO_DESTINATION_NUMBER');

// point to the twiml xml file
$twiml_url = getenv('TWIML_URL');

// create our client
$client = new Services_Twilio($sid, $token);

// and make our call...
$call = $client->account->calls->create( $call_from, $call_to, $twiml_url);

?>
</head>
<!-- And now let's display something on the actual page, too -->
<body>

<h1>You can't see jack, but this number is being called!</h1>
<h1>Calling from <?php print($calling_from); ?> to <?php print($calling_to); ?></h1>
</body>
</html>