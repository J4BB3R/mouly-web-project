FROM debian:latest

MAINTAINER Johan Maurel

RUN apt-get update
RUN apt-get install nginx php-fpm mariadb

COPY run.sh /

CMD["/run.sh"]
