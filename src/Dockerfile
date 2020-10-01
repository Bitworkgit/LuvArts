FROM alpine
# set user

RUN mkdir -p /home/${user}/Luvarts
COPY ./ /home/${user}/Luvarts
#php
RUN apk --update add \
    curl \
    git \
    php7 \
    php7-dev \
    php7-openssl \
    php7-mbstring \
    php7-phar \
    php7-gd \
    php7-pdo\
    php7-mcrypt \
    php7-mysqli \
    php7-zlib \
    php7-ctype \
    php7-fileinfo \
    php7-ftp \
    php7-iconv \
    php7-json \
    php7-mysqlnd \
    php7-pdo_sqlite \
    php7-pdo_mysql \
    php7-pear \
    php7-posix \
    php7-session \
    php7-simplexml \
    php7-sqlite3 \
    php7-tokenizer \
    php7-xml \
    php7-xmlreader \
    php7-xmlwriter \
    php7-dom --repository http://nl.alpinelinux.org/alpine/edge/testing/ \
    nodejs npm \
    libmcrypt-dev \
    mysql-client \
    && rm /var/cache/apk/*

#composer
# da pra instalar via apk add composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /home/${user}/Luvarts

