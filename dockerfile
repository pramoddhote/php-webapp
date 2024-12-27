#FROM php:8.1-apache
#RUN docker-php-ext-install mysqli
#WORKDIR /var/www/html
#COPY index.php /var/www/html/index.php
#EXPOSE 80
#CMD ["apache2-foreground"]

FROM nginx:alpine

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]

