#!/bin/bash

php-fpm --daemonize
printf "Starting Nginx...\n\n"

set -e

if [[ "$1" == -* ]]; then
    set -- nginx -g daemon off; "$@"
fi

set -e
exec "$@"
