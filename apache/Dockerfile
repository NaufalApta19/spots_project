# Use the official PHP-Apache image
FROM php:7.4-apache

# Copy all project files, including assets
COPY ./ /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Enable required PHP extensions and Apache modules
RUN docker-php-ext-install mysqli \
    && docker-php-ext-enable mysqli \
    && a2enmod rewrite

# Expose port 80 for HTTP
EXPOSE 80

# Start Apache when the container runs
CMD ["apache2-foreground"]
