FROM ubuntu:16.04

MAINTAINER cxzhao@deepnorth.cn

RUN mkdir -p /var/www/swedavia-airport-api;mkdir /etc/nginx/ssl/;apt-get update && apt-get install -y \
      nginx \
      php7.0 \
      php7.0-fpm \
      php7.0-dev \
      php7.0-mysql \
      php-curl \
      net-tools \
      vim

ADD nginx_conf/nginx-site.conf /etc/nginx/sites-enabled/default
ADD nginx_conf/nginx-site-https.conf /etc/nginx/sites-enabled/ssl.conf
ADD nginx_conf/star_* /etc/nginx/ssl/
ADD ./ /var/www/swedavia-airport-api/

RUN chmod -R 777 /var/www/swedavia-airport-api;

ENTRYPOINT /var/www/swedavia-airport-api/start.sh && tail -f /var/log/nginx/swedavia-airport-api_error_log

EXPOSE 80