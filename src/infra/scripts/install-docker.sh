#!/bin/bash


# Install docker-compose
wget https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m) ;
sudo mv docker-compose-$(uname -s)-$(uname -m) /usr/local/bin/docker-compose;
sudo chmod -v +x /usr/local/bin/docker-compose;

echo export PATH=$PATH:/usr/local/bin >> ~/.bash_profile;
source ~/.bash_profile;

sudo yum update;
sudo yum install docker -y;
sudo usermod -a -G docker ec2-user;
id ec2-user;
newgrp docker;

# Install git
sudo yum install git -y;
git clone https://github.com/AliakbarSu/laravel-hasina-magic-kitchen.git;
cd laravel-hasina-magic-kitchen;

# Start docker
sudo systemctl start docker.service;

# starting the application
docker-compose up -d --build;