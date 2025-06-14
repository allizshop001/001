
FROM php:8.1-apache

# Copy project files to the Apache web root
COPY . /var/www/html/

# Expose port 80 for HTTP traffic
EXPOSE 80