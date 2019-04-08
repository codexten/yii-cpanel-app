FROM php:7.1.16-fpm

# Install modules
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
        libicu-dev \
        wget \
        git \
            --no-install-recommends

RUN docker-php-ext-install mcrypt zip intl mbstring pdo pdo_mysql exif \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN docker-php-ext-install bcmath

# Install Postgre PDO
#RUN apt-get install -y libpq-dev \
#    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
#    && docker-php-ext-install pdo pdo_pgsql pgsql

RUN apt-get update && \
  apt-get install -y ssmtp && \
  apt-get clean && \
  echo "FromLineOverride=YES" >> /etc/ssmtp/ssmtp.conf && \
  echo 'sendmail_path = "/usr/sbin/ssmtp -t"' > /usr/local/etc/php/conf.d/mail.ini

RUN  apt-get -yq update && \
     apt-get -yqq install ssh

RUN apt-get -y install nano

RUN pecl install -o -f xdebug \
    && rm -rf /tmp/pear

RUN \
    apt-get autoremove && \
    apt-get autoclean && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY ./php.ini /usr/local/etc/php/

RUN apt-get purge -y g++ \
    && apt-get autoremove -y \
    && rm -r /var/lib/apt/lists/* \
    && rm -rf /tmp/*

RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

RUN usermod -u 1000 www-data
VOLUME /root/.composer

RUN composer global require hirak/prestissimo

#RUN apt-get update && apt-get install -y libxml2-dev \
#    && pear install -a SOAP-0.13.0 \
#    && docker-php-ext-install soap;

#RUN apt-get install curl gnupg -yq && curl -sL https://deb.nodesource.com/setup_8.x | bash \
#    && apt-get install nodejs -yq

RUN docker-php-ext-install pcntl

RUN apt-get update -yq \
    && apt-get install curl gnupg -yq \
    && curl -sL https://deb.nodesource.com/setup_8.x | bash \
    && apt-get install nodejs -yq \
    && npm install -g yarn

RUN apt-get -y install cron

# Add crontab file in the cron directory
ADD crontab /etc/cron.d/simple-cron

# Add shell script and grant execution rights
ADD script.sh /script.sh
RUN chmod +x /script.sh

# Give execution rights on the cron job
RUN chmod 0644 /etc/cron.d/simple-cron

# Create the log file to be able to run tail
RUN touch /var/log/cron.log

WORKDIR /projects
EXPOSE 9000

add ./startup.sh /

RUN chmod +x /startup.sh

CMD ["/startup.sh"]