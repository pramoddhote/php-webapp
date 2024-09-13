FROM php:8.1-apache

WORKDIR /var/www/html

COPY index.php /var/www/html/index.php

EXPOSE 80

CMD ["apache2-foreground"]

