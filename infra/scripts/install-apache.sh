#!/bin/bash
sudo dnf update -y
sudo yum install httpd -y
sudo chmod 777 /var/www/html
sudo systemctl start httpd
sudo echo "Hello World from" > /var/www/html/index.html