FROM debian:jessie

RUN apt-get update && apt-get install -y apache2 php5 php5-xdebug

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid
ENV APACHE_RUN_DIR /var/run/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2

ADD ./apache.conf /etc/apache2/sites-available/

RUN a2ensite apache.conf
RUN a2dissite 000-default.conf
RUN a2enmod rewrite
RUN a2enmod headers

EXPOSE 80
ENTRYPOINT ["/usr/sbin/apache2"]
CMD ["-D", "FOREGROUND"]
