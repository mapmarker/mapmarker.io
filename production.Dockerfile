FROM laravelphp/vapor:php81

# install gd
RUN docker-php-ext-configure gd --with-freetype=/usr/lib/ --with-jpeg=/usr/lib/ && \
    docker-php-ext-install gd

COPY . /var/task