FROM joomla:3.10.11

RUN dpkg -l | grep xdebug || (pecl install xdebug && docker-php-ext-enable xdebug)
