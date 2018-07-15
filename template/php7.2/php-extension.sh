#!/bin/sh

echo "Skip installing PHP extensions for Core"

apk add --no-cache \
    libmcrypt libmcrypt-dev && \
  NPROC=$(grep -c ^processor /proc/cpuinfo 2>/dev/null || 1) && \
  docker-php-ext-install -j${NPROC} mcrypt && \
  docker-php-ext-install mbstring && \
  apk del --no-cache \
    libmcrypt-dev
