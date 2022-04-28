FROM alpine

RUN apk update
RUN apk add php7 php7-fpm php7-session php7-json php7-mysqli php7-xml php7-curl php7-iconv php7-phar php7-redis php7-ctype wget
RUN cd /srv && wget https://wordpress.org/latest.tar.gz && tar -xf /srv/latest.tar.gz && rm -rf /srv/latest.tar.gz
RUN cd /



COPY ./srcs/start.sh /
CMD sh ./start.sh
EXPOSE 9000
