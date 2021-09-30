FROM codexten/php-fpm:7.1
RUN docker-php-ext-install pcntl

RUN apt-get --allow-releaseinfo-change update -yq \
    && apt-get install curl gnupg -yq

RUN apt-get -y install cron

# Add crontab file in the cron directory
ADD crontab /etc/cron.d/simple-cron

# Add shell script and grant execution rights
ADD script.sh /script.sh
RUN chmod +x /script.sh

# Create the log file to be able to run tail
RUN touch /var/log/cron.log

# Give execution rights on the cron job
RUN chmod 0644 /etc/cron.d/simple-cron

# Create the log file to be able to run tail
RUN touch /var/log/cron.log

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

#RUN chown -R ${MY_USER}:${MY_USER} /en /projects

#USER ${MY_USER}

#RUN composer global require hirak/prestissimo

CMD php-fpm & cron & tail -f /var/log/cron.log

#add ./startup.sh /
#
#RUN chmod +x /startup.sh

#CMD ["/startup.sh"]