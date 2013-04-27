Trollophone
=================================

This is me messing around with Twilio at a hackday - for fun, and partly to see if I can apply some 12factor concepts to a little app written in PHP.

My main aim is to learn how to make PHP example apps as portable as Ruby and Node apps are when working with PaaS services like heroku and so on.

This was just created for fun, please don't use it to be a dick.

I'm using this with PHP 5.4, and using Foreman and a Procfile to:

1. set the environment variables
2. run the embedded web server that's part of php 5.4

## Usage

Assuming you have foreman installed, either with the heroku toolbelt or something else.

#### Add your credentials to the `.env` file

```shell
mv env.example .env
```

#### Run Foreman

For local play, use foreman, like so

```shell
foreman start
```

## Once it's running

1) Visit the page.

2) Watch with wonderment as your phone rings, and the troll song is played.

