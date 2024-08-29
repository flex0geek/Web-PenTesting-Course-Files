# you can change the name and port.
# docker build . -t labs_docker && docker run -p 80:80 -t labs_docker

FROM 1275178869/base_image_apache_php_mysql:sjx 

USER root


RUN apt-get -y update
RUN apt-get install -y python3-dev python3-pip && rm /var/www/html/index.html


COPY src /var/www/html

COPY db.sql /docker-entrypoint-initdb.d
COPY apache.conf /usr/local/apache2/conf/apache.conf
RUN echo "Include /usr/local/apache2/conf/apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf

RUN chmod 777 /var/www/html/userfiles/

EXPOSE 80

CMD ["apachectl", "-D", "FOREGROUND"]

COPY main.sh /
RUN chmod +x /main.sh
ENTRYPOINT ["/main.sh"]
