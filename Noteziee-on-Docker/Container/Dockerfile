FROM ubuntu:20.04
RUN DEBIAN_FRONTEND=noninteractive TZ=Asia/Singapore apt-get -y update
RUN apt-get -y install tzdata
RUN apt-get install -y php7.4 php-mysql
RUN apt-get install -y apache2
RUN rm /var/www/html/index.html

COPY ./Noteziee /var/www/html

RUN chmod 1777 -R /var/www/html/ && chown root:root -R /var/www/html/

ADD ./Noteziee/php.ini /etc/php/7.4/apache2/php.ini
CMD ["apachectl", "-D", "FOREGROUND"]
