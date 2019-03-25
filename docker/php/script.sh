#!/usr/bin/env bash
echo "$(date): executed script" >> /var/log/cron.log 2>&1
cd /cpanel && ./vendor/bin/hidev cron/check >> /var/log/cron.log 2>&1