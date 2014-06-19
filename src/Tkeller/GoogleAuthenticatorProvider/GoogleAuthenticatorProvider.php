<?php
namespace Tkeller\GoogleAuthenticatorProvider;

use Silex\Application;
use Silex\ServiceProviderInterface;

class GoogleAuthenticatorProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['google_authenticator'] = $app->share(function () {
            return new GoogleAuthenticator();
        });
    }

    public function boot(Application $app)
    {
    }
}