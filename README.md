# PHP templates for OpenFaaS

## Versions
There are templates for PHP 5.6 and latest stable version(s) of PHP 7

## Usage:

```shell
faas-cli template pull https://github.com/seymourlabs/openfaas-template-php
faas-cli new my-function-php56 --lang php5.6
faas-cli new my-function-php70 --lang php7.0
faas-cli new my-function-php71 --lang php7.1
```

You will find in the newly created directories `my-function-in-php5` and `my-function-in-php7`:
- src/Handler.php : entrypoint
- php-extension.sh : is for installing PHP extensions if needed
- composer.json : is for dependency management

## Extra Extensions

If you need to install Phalcon for example, check out the following gist - you can use
that file in your function into your `php-extension.sh` file (7+ only);

https://gist.github.com/andrew-s/07e152b7f981e8453da8d2d991d9aab4