#!/bin/bash

rm -rf /etc/nginx/sites-available/*
cp /var/www/autoindex/nginx.conf /etc/nginx/sites-available/nginx.conf
service nginx restart
echo "autoindex on"