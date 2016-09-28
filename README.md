# Skeleton Symfony Help Scout Dynamic App

A basic Symfony application to build a Help Scout dynamic app.
Using the [tompedals/helpscout-dynamic-app](https://github.com/tompedals/helpscout-dynamic-app) library to handle the request and produce the response. Simply implement the provided `AppHandlerInterface` interface for your app.

![Example app](http://developer.helpscout.net/img/developers/app-ex.png)

An [example AppHandler](https://github.com/tompedals/helpscout-dynamic-app-symfony/blob/master/src/AppBundle/AppHandler.php) is within the skeleton project to show some additional customer information on support tickets.
Expose your own data as an app for an enhanced support experience!

## Create your project

    composer create-project --no-interaction --stability=dev tompedals/helpscout-dynamic-app-symfony my-app

## Getting started

Install the dependencies

    composer install

Start the web server

    ./bin/console server:run

Once running browse to [http://127.0.0.1:8000](http://127.0.0.1:8000).
