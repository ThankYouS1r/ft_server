FROM debian:buster

RUN apt-get -y update
RUN apt-get -y upgrade
RUN apt-get install -y nginx
RUN apt-get install -y wordpress
RUN apt-get install -y openssl
RUN apt-get install -y mariadb-server mariadb-client 
RUN apt-get install -y php7.3-mysql php7.3-curl php7.3-mbstring php7.3-json php7.3-cgi php7.3 libapache2-mod-php7.3 php7.3-xml php-fpm php-mysql
RUN apt-get install -y php-fpm php-mysql
RUN apt-get install -y vim
RUN apt-get install -y mc

RUN  rm -rf /etc/nginx/sites-enabled/default
RUN  rm -rf /etc/nginx/sites-available/default

RUN chown -R www-data /var/www/*
RUN chmod -R 755 /var/www/*

RUN mkdir /etc/nginx/ssl

ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz phpmyadmin.tar.gz
RUN tar xzvf phpmyadmin.tar.gz
RUN mv phpMyAdmin-5.0.2-all-languages /var/www/html/phpmyadmin

RUN mv /usr/share/wordpress /var/www/html

COPY /srcs/ssl_sertificate.key /etc/nginx/ssl/ssl_sertificate.key
COPY /srcs/ssl_sertificate.pem /etc/nginx/ssl/ssl_sertificate.pem

RUN rm /var/www/html/wordpress/wp-config.php
RUN chown -R www-data:www-data /var/www/html

COPY /srcs/nginx.conf /etc/nginx/sites-available/
COPY /srcs/nginx.conf /etc/nginx/sites-enabled/

COPY /srcs/fill_db.sh /var/
RUN chmod -R 755 /var/fill_db.sh
RUN bash /var/fill_db.sh

COPY /srcs/database.sql /var/

COPY /srcs/wp-config.php /var/www/html/wordpress
COPY /srcs/config.inc.php /var/www/html/phpmyadmin
RUN rm -rf /var/www/html/phpmyadmin/config.sample.inc.php

RUN rm -rf /var/www/html/index.html

EXPOSE 80 443

COPY /srcs/wordpress.sql /var/

COPY /srcs/create.sh /var/
RUN chmod -R 755 /var/create.sh
CMD bash /var/create.sh
