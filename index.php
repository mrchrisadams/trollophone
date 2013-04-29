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


if (isset($_GET['troll'])) {

  if ($_GET['troll'] == TRUE) {
    $call = $client->account->calls->create( $calling_from, $calling_to, $twiml_url);
    };
};


?>
<link rel="stylesheet" type="text/css" href="http://twitter.github.io/bootstrap/assets/css/bootstrap.css">

</head>
<!-- And now let's display something on the actual page, too -->
<body>

<?php
if (isset($_GET['troll'])) {
  if ($_GET['troll'] == TRUE) {

?>

<h1>HUZZAH SING ALONG WITH THE TROLL SONG!</h1>

<iframe width="640" height="315" src="http://www.youtube.com/embed/2Z4m4lnjxkY" frameborder="0" allowfullscreen></iframe>

<h1>You might want to call them to make sure they saw the funny side, and apologise if they didn't.</h1>

<h1>Here's their number: <?php echo $calling_to; ?></h1>

<?php
  };
} else {

?>



<h1>You're about to make a call from: </h1>

  <h1><?php print($calling_from); ?></h1>

  <h1>to</h1>

  <h1><?php print($calling_to); ?></h1>

<hr />

<h1>Will they see the funny side?</h1>

<hr />

<a href="/?troll=1" class="btn btn-large btn-success">Yes of course</a>

<a href="http://google.com" class="btn btn-large btn-danger">No, and they can run faster than me.</a>

<?php }; ?>

</body>
</html>