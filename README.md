Trollophone
=================================

This is a fun little hack put together to learn how to use Twilio at a hackday - partly for fun, and partly to see if I can apply some [12factor][] concepts to a little app written in PHP.

My main aim is to learn how to make PHP example apps as portable as Ruby and Node apps are when working with PaaS services like heroku and so on.

This was just created for fun, please don't use it to be a dick.

## Setting up

#### Using composer to fetch the dependencies

Trollophone uses [composer][] to fetch external PHP libraries, so you'll need it to fetch the [Twilio SDK][] for php too.

Do this by fetching composer, if you don't already have it:

```shell
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin
```

Add the symlink to make for a nicer binary:

```shell
ln -s /usr/local/bin/composer.phar /usr/local/bin/composer
```

Then use it to install the libraries:

```shell
composer install
```

### Usage

#### If you have php 5.4, and use foreman to manage apps

Assuming you have [foreman][] installed, either with the [heroku toolbelt][] or something else, you'd add the relevant credentials to your `.env` file, like so:

Add your credentials to the `.env` file

```shell
mv env.example .env
```

Then run [foreman][], making sure to point to the local Procfile.

For local testing, use foreman, like so, passing the link to the `Procfile`.

```shell
foreman start -f Procfile.local
```

#### If you are using MAMP, or something similarly Apache based

You CAN just run this using MAMP or something similar, but you'll need a way to set environment variables, like you do with foreman.

The simplest way to do this is to use a `htaccess` file like so:

```shell
SetEnv TWILIO_ACCOUNT_SID SomeLongString
SetEnv TWILIO_AUTH_TOKEN AnotherLongString
SetEnv TWILIO_ORIGIN_NUMBER 447974000000
Setenv TWILIO_DESTINATION_NUMBER 440794333333
SetEnv TWIML_URL https://trollophone.com/call.xml
```

Now the apps' running, just visit the page, and voila!

## That's it! Phonecall japery a-go-go!

#### Running this on heroku

#### 3. Deploying to a PaaS like heroku

You can deploy this to heroku, by setting up a free version running on their infra with this command:

```shell
heroku create -s cedar \
  --buildpack https://github.com/bergie/heroku-buildpack-php.git \
  NAME_OF_YOUR_APP
```

You can can then push subsequent deploys with git, in the normal fashion as you develop:

```shell
git push heroku master
```


<!-- links -->

[12factor]: http://12factor.net
[composer]: http://getcomposer.org
[foreman]: http://blog.daviddollar.org/2011/05/06/introducing-foreman.html
[heroku toolbelt]: https://toolbelt.heroku.com
[Twilio SDK]: https://github.com/twilio/twilio-php