FROM php:5.6-apache

COPY ./html /var/www/html/
RUN chown -R www-data:www-data /var/www/html/

ADD https://pear.php.net/go-pear.phar /home/
RUN php /home/go-pear.phar
RUN pear channel-update pear.php.net
RUN pear install Cache_Lite
RUN pear install MDB2