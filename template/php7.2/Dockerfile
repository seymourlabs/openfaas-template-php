FROM php:7.2-alpine

# Composer requirements
ARG COMPOSER_AUTH='{}'
ENV COMPOSER_AUTH=${COMPOSER_AUTH}
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add watchdog
RUN echo "Pulling watchdog binary from Github."
ADD https://github.com/openfaas/faas/releases/download/0.8.0/fwatchdog /usr/bin
RUN chmod +x /usr/bin/fwatchdog

# Core
WORKDIR /root/

COPY index.php php-extension.sh composer.* ./

RUN chmod u+x ./php-extension.sh && ./php-extension.sh
RUN composer install --no-dev

# Function
COPY ./function/ ./function/

WORKDIR /root/function/

# Install Dependecies
RUN [[ -f php-extension.sh ]] && sh ./php-extension.sh || \
    echo "php-extension.sh does not exist, skip installing PHP extensions"
RUN [[ -f composer.lock || -f composer.json ]] && composer install --no-dev || \
    echo "composer.lock does not exist, skip installing composer dependencies"

WORKDIR /root/

ENV fprocess="php index.php"

HEALTHCHECK --interval=1s CMD [ -e /tmp/.lock ] || exit 1

CMD ["fwatchdog"]