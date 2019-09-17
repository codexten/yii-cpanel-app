FROM codexten/php-fpm:7.1


ENV user www-data

RUN chown -R ${user} /projects

USER ${user}

CMD tail -f /dev/null