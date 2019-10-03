FROM codexten/php-fpm:7.1

VOLUME /en
VOLUME /projects
VOLUME /var/www

ENV user www-data
RUN chown -R ${user}:${user} /projects
#RUN chown -R ${user}:${user} /en
#RUN chown -R ${user}:${user} /var/www

USER ${user}

#RUN composer global require hirak/prestissimo

CMD php-fpm && tail -f /dev/null
