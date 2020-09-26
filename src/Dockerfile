FROM php:7.4-apache

# set user
ARG user
ARG uid
#! ./ é oq esta mandando para o apache
COPY ./ /usr/local/apache2/htdocs/

RUN apt-get update && \
    a2enmod rewrite && \
    apt-get install -y --no-install-recommends gnupg unzip && \
    curl -sL https://deb.nodesource.com/setup_12.x | bash - && \
    apt-get install -y --no-install-recommends nodejs && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer; \
    echo "America/Sao_Paulo" > /etc/timezone; \
    apt-get purge -y --auto-remove -o APT::AutoRemove::RecommendsImportant=false gnupg; \
    # Uma versão mínima será gerada na criação do container
    rm -f /etc/apache2/sites-enabled/000-default.conf
RUN docker-php-ext-install mysqli
RUN apt-get update \
    && apt-get install -y libzip-dev \
    && apt-get install -y zlib1g-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install zip \
    && apt upgrade -y

RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

WORKDIR /usr/local/apache2/htdocs/
RUN ln -s /usr/local/apache2/htdocs/public/* /var/www/html
RUN php install
EXPOSE 80
