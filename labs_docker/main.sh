#!/bin/bash

echo '[+] Starting apache'

service apache2 start

echo '[+] Starting mysql'
service mysql start
# for sanity check
mysql -uroot -proot < /docker-entrypoint-initdb.d

while true
do
    tail -f /var/log/apache2/*.log
    exit 0
done
