FROM codexten/php-fpm:7.1

VOLUME /en
VOLUME /projects
#
#ENV user www-data

#
#USER ${user}
#
##RUN composer global require hirak/prestissimo

###
### Envs
###
ENV MY_USER="codexten" \
	MY_GROUP="codexten" \
	MY_UID="1000" \
	MY_GID="1000"
###
### User/Group
###

RUN set -x \
	&& groupadd -g ${MY_GID} -r ${MY_GROUP} \
&& useradd -u ${MY_UID} -m -s /bin/bash -g ${MY_GROUP} ${MY_USER}

RUN chown -R ${user}:${user} /en /projects

USER ${MY_USER}

#RUN composer global require hirak/prestissimo

CMD php-fpm && tail -f /dev/null
