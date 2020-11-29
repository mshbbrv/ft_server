#!/bin/bash

rm -rf /etc/nginx/sites-available/*
rm -rf /etc/nginx/sites-enabled/nginx_ai_off.conf
cp /var/www/autoindex/nginx_ai_on.conf /etc/nginx/sites-available/
ln -s /etc/nginx/sites-available/nginx_ai_on.conf /etc/nginx/sites-enabled/
service nginx restart
echo "autoindex on"