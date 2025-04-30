FROM php:8.3-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    ca-certificates \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip unzip \
    curl \
    git \
    nano \
    gnupg \
    lsb-release \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Node.js (untuk Vite dan Tailwind)
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get update && apt-get install -y nodejs \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP Extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql zip gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www
