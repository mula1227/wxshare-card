FROM php:8.2-apache
RUN apt-get update && apt-get install -y --no-install-recommends libpng-dev && docker-php-ext-install mysqli gd && rm -rf /var/lib/apt/lists/*
RUN printf 'DirectoryIndex creat.html index.php\n' > /etc/apache2/conf-enabled/wxshare.conf
