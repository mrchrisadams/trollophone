<html>
<head>
<!-- Let's make it look pretty -->
<style>
	<style>
		html {
			background: url("bg.png");
			width: 960px;
			margin: auto;
		}
		h1 {
			width: 960px;
			text-align: center;
			margin: auto;
			border: 5px solid white; 
		    -webkit-box-shadow: 
		      inset 0 0 8px  rgba(0,0,0,0.1),
		            0 0 16px rgba(0,0,0,0.1); 
		    -moz-box-shadow: 
		      inset 0 0 8px  rgba(0,0,0,0.1),
		            0 0 16px rgba(0,0,0,0.1); 
		    box-shadow: 
		      inset 0 0 8px  rgba(0,0,0,0.1),
		            0 0 16px rgba(0,0,0,0.1);
		    background: rgba(255,255,255,0.5);
		    padding: 15px;
		    margin-top: 20px;
		    box-sizing: border-box;
		}
		iframe {
			margin: auto;
			border: 5px solid white; 
		    -webkit-box-shadow: 
		      inset 0 0 8px  rgba(0,0,0,0.1),
		            0 0 16px rgba(0,0,0,0.1); 
		    -moz-box-shadow: 
		      inset 0 0 8px  rgba(0,0,0,0.1),
		            0 0 16px rgba(0,0,0,0.1); 
		    box-shadow: 
		      inset 0 0 8px  rgba(0,0,0,0.1),
		            0 0 16px rgba(0,0,0,0.1);
		    margin-top: 20px;
		}
	</style>
</style>

<?php

// Load the Lovely Library - Gangnam Style. Well, PHP style.
require('twilio/Services/Twilio.php');

$sid = "ACd762f0ab4d50969383086adf5da41e82"; // Your Account SID from www.twilio.com/user/account
$token = "802c9c8fcf92149a2c9da1c2614cd1bb"; // Your Auth Token from www.twilio.com/user/account

$client = new Services_Twilio($sid, $token);
$call = $client->account->calls->create(
  '442033224890', // From which number? Needs to be one that's connected to your account. This is my trial number.
  '<insert phone number here>', // With great power comes great responsibility. Don't piss people off by rickrolling them constantly.

  // This is the TwiML file to read that points the call at the right MP3 file
  'http://gkly.co/call.xml'
);
?>
</head>
<!-- And now let's display something on the actual page, too -->
<body>
	<h1>
		You have just <a href="http://en.wikipedia.org/wiki/Rickrolling">Rickrolled</a> Ben.
	</h1>
	<p align="center"><br />Via the magic of Twilio, his phone has been called and we're playing Never Going to Give You Up to him.<br />You evil person. </p>
	<p align="center"><iframe width="950" height="500" src="http://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe></p>
</body>
</html>