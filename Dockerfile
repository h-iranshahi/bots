FROM dunglas/frankenphp:1.10-php8.3

RUN install-php-extensions pdo_mysql mysqli

WORKDIR /app
