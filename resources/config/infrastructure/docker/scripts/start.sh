#!/bin/bash

# Install app dependencies
composer -d=/var/www/reprint install --no-interaction
composer -d=/var/www/reprint update --no-interaction

usermod -u 1000 www-data
echo '* Starting nginx'
/usr/bin/supervisord -n -c /etc/supervisord.conf
