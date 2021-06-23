service nginx start
service php7.3-fpm start
service mysql start && mysql < /var/database.sql && mysql -u admin -padmin wordpress < /var/wordpress.sql

bash