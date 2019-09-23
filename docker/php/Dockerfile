FROM codexten/php-fpm:7.1

VOLUME /en
VOLUME /projects
VOLUME /var/www

ENV user www-data
RUN chown -R ${user} /projects
RUN chown -R ${user} /en
RUN chown -R ${user} /var/www

USER ${user}

CMD php-fpm && tail -f /dev/null
