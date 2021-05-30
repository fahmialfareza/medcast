FROM webdevops/php-nginx:8.0-alpine

LABEL org.opencontainers.image.authors=fahmialfareza@icloud.com
LABEL org.opencontainers.image.title="Medcast.id (Medical Podcast)"
LABEL org.opencontainers.image.licenses=MIT
LABEL com.malanghub.nodeversion=$NODE_VERSION

EXPOSE 80

WORKDIR /app

COPY . .

RUN composer install
