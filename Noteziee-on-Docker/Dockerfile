FROM php:apache

# Expose port 80
EXPOSE 80

# Set the working directory
WORKDIR /var/www/html/Noteziee

# Copy the contents of the local directory into the container
COPY ./Noteziee /var/www/html/Noteziee

RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql && apachectl restart