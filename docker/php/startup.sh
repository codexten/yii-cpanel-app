#!/usr/bin/env bash
php-fpm &
cron &
tail -f /var/log/cron.log