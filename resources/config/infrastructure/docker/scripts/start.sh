#!/bin/bash

echo '* Installing dependencies via composer'
/usr/bin/composer install -d /var/www/reprint
usermod -u 1000 www-data
echo '* Starting nginx'
/usr/bin/supervisord -n -c /etc/supervisord.conf
