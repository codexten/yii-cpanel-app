FROM codexten/php-fpm:7.1

VOLUME /en

ENV user www-data
RUN mkdir en
RUN chown -R ${user} /projects
RUN chown -R ${user} /en

USER ${user}

CMD tail -f /dev/null