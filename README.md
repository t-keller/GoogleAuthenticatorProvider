GoogleAuthenticatorProvider
===========================

Google Authenticator provider for Silex based on PHPGangsta/GoogleAuthenticator

### Install (with Composer)

In your composer.json file, just add :

    "require": {
      "t-keller/google-authenticator-provider": "dev-master"
    }


### Register the provider in Silex

    $app->register(new Tkeller\GoogleAuthenticatorProvider\GoogleAuthenticatorProvider());

### Use it

A GoogleAuthenticator object is available by calling: 

    $app['google_authenticator']

For more information about PHPGangsta/GoogleAuthenticator, see the documentation (https://github.com/PHPGangsta/GoogleAuthenticator)

Silex website: http://silex.sensiolabs.org
