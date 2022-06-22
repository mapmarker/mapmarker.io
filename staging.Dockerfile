FROM laravelphp/vapor:php81

# install gd
RUN apk add --no-cache freetype libpng libjpeg-turbo freetype-dev libpng-dev libjpeg-turbo-dev && \
    docker-php-ext-configure gd \
    --enable-gd \
    --with-freetype \
    --with-jpeg && \
    docker-php-ext-install gd

# cleanup
RUN apk del --no-cache freetype-dev libpng-dev libjpeg-turbo-dev

COPY . /var/task