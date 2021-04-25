FROM apache-php

LABEL org.opencontainers.image.authors=fahmialfareza@icloud.com
LABEL org.opencontainers.image.title="Telomoyo via Dalangan"
LABEL org.opencontainers.image.licenses=MIT
LABEL com.malanghub.nodeversion=$NODE_VERSION

EXPOSE 80

WORKDIR /var/www/html

COPY . .

RUN composer install
