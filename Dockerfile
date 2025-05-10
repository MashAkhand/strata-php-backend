# Use the official PHP-Apache image
FROM php:8.2-apache

# Install PHP extensions if needed (optional)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite (optional for clean URLs)
RUN a2enmod rewrite

# Copy project files into the container
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 (Apache default)
EXPOSE 80
