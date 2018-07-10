# PHP templates for openfaas

## Versions
There are templates for PHP 5.6 and latest stable version of PHP 7

## Usage:

```shell
faas-cli template pull https://github.com/seymourlabs/openfaas-template-php
faas-cli new my-function-php56 --lang php5.6
faas-cli new my-function-php70 --lang php7.0
```



You will find in the newly created directories `my-function-in-php5` and `my-function-in-php7`:
- src/Handler.php : entrypoint
- php-extension.sh : is for installing PHP extensions if needed
- composer.json : is for dependency management
