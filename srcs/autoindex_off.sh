#!/bin/bash

rm -rf /etc/nginx/sites-available/*
cp /var/www/autoindex/nginx_autoindex_off.conf /etc/nginx/sites-available/nginx_autoindex_off.conf
service nginx restart
echo "autoindex off"