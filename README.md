Trollophone
=================================

This is me messing around with Twilio at a hackday - for fun, and partly to see if I can apply some 12factor concepts to a little app written in PHP.

My main aim is to learn how to make PHP example apps as portable as Ruby and Node apps are when working with PaaS services like heroku and so on.

This was just created for fun, please don't use it to be a dick.

I'm using this with PHP 5.4, and using Foreman and a Procfile to:

1. set the environment variables
2. run the embedded web server that's part of php 5.4

## Usage

#### If you have php 5.4 and like to use foreman

Assuming you have foreman installed, either with the heroku toolbelt or something else, you'd add the relevant credentials to your `.env` file, like so:

Add your credentials to the `.env` file

```shell
mv env.example .env
```

Then run foreman, making sure to point to the local Procfile.

For local testing, use foreman, like so, passing the link to the `Procfile`.

```shell
foreman start -f Procfile.local
```

#### If you are using MAMP, or something similarly Apache based

You CAN just run this using MAMP or something similar, but you'll need a way to set environment variables, like you do with foreman.

```htaccess
SetEnv TWILIO_ACCOUNT_SID SomeLongString
SetEnv TWILIO_AUTH_TOKEN AnotherLongString
SetEnv TWILIO_ORIGIN_NUMBER 447974000000
Setenv TWILIO_DESTINATION_NUMBER 440794333333
SetEnv TWIML_URL https://trollophone.com/call.xml
```

## Once it's running

1) Visit the page.

2) Watch with wonderment as your phone rings, and the your favourite song is played. To your friend.

