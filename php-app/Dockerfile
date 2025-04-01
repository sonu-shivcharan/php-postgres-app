FROM php:8.2-apache


# Install PostgreSQL extension
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Copy application files
COPY src/ /var/www/html/    

# Expose Apache port
EXPOSE 80


# Start Apache in foreground mode
CMD ["apache2-foreground"]