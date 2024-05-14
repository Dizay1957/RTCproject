# Use the official PHP image as the base image
FROM php:8.1-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set the working directory
WORKDIR /var/www/html

# Expose the Apache port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]