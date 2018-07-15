# PHP templates for OpenFaaS

## Versions
There are templates for PHP 5.6 and latest stable version(s) of PHP 7

## Usage:

```shell
faas-cli template pull https://github.com/seymourlabs/openfaas-template-php
faas-cli new my-function-php56 --lang php5.6
faas-cli new my-function-php70 --lang php7.0
faas-cli new my-function-php71 --lang php7.1
faas-cli new my-function-php72 --lang php7.2
```

You will find in the newly created directories `my-function-in-php5` and `my-function-in-php7`:
- src/Handler.php : entrypoint
- php-extension.sh : is for installing PHP extensions if needed
- composer.json : is for dependency management

## Extra Extensions

If you need to install Phalcon for example, check out the following gist - you can use
that file in your function into your `php-extension.sh` file (7+ only);

https://gist.github.com/andrew-s/07e152b7f981e8453da8d2d991d9aab4

## Private Composer Auth

In some cases, you may need to use private composer repositories - using the faas-cli you can pass in 
a build argument during build - something like;

```
faas-cli build -f ./functions.yml --build-arg COMPOSER_AUTH='{"bitbucket-oauth": {"bitbucket.org": {"consumer-key": "xxxxxxxx","consumer-secret": "xxxxxxx"}}}' 
```

That way you can pass in tokens for composer, if necessary, GitHub tokens to get around rate-limit issues.

## TODO

- Write ARM templates to run on the Raspberry Pi's (try and still get this working with phalcon)
- De-dup Dockerfile code
- Maybe deprecate 5.6 dockerfile?
- Maybe remove the core php-extension and vendor stuff?
- Make composer optional - looks like the `index.php` would fail if a composer file wasn't initialised
- Don't run everything as root, create a user and run the watchdog from that

## Contributing

All contributions welcome!