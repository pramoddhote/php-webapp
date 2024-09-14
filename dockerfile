FROM php:8-apache-mysql

WORKDIR /var/www/html

COPY index.php /var/www/html/index.php

EXPOSE 80

CMD ["apache2-foreground"]

