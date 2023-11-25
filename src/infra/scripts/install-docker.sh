#!/bin/bash


get_ssm_parameter() {
  aws_profile="allie"
  ssm_prefix="/hasina-magic-kitchen"
  local param_name=$1
  value=`aws ssm get-parameters --name "$ssm_prefix/$param_name" --query Parameters[0].Value | tr -d ""`
  echo "$param_name=$value" >> .env
}


# Application-related parameters
sudo get_ssm_parameter "APP_NAME"
sudo get_ssm_parameter "APP_ENV"
sudo get_ssm_parameter "APP_KEY"
sudo get_ssm_parameter "APP_DEBUG"
sudo get_ssm_parameter "APP_URL"

# Logging parameters
sudo get_ssm_parameter "LOG_CHANNEL"
sudo get_ssm_parameter "LOG_DEPRECATIONS_CHANNEL"
sudo get_ssm_parameter "LOG_LEVEL"

# Database parameters
sudo get_ssm_parameter "DB_CONNECTION"
sudo get_ssm_parameter "RDS_HOSTNAME"
sudo get_ssm_parameter "RDS_PORT"
sudo get_ssm_parameter "RDS_DB_NAME"
sudo get_ssm_parameter "RDS_USERNAME"
sudo get_ssm_parameter "RDS_PASSWORD"

# ... (continue for other parameters)

# AWS-related parameters
sudo get_ssm_parameter "AWS_ACCESS_KEY_ID"
sudo get_ssm_parameter "AWS_SECRET_ACCESS_KEY"
sudo get_ssm_parameter "AWS_DEFAULT_REGION"
sudo get_ssm_parameter "AWS_BUCKET"

# Pusher parameters
sudo get_ssm_parameter "PUSHER_APP_ID"
sudo get_ssm_parameter "PUSHER_APP_KEY"
sudo get_ssm_parameter "PUSHER_APP_SECRET"
# ... (continue for other Pusher parameters)

# VITE_PUSHER parameters
sudo get_ssm_parameter "VITE_PUSHER_APP_KEY"
sudo get_ssm_parameter "VITE_PUSHER_HOST"
sudo get_ssm_parameter "VITE_PUSHER_PORT"
sudo get_ssm_parameter "VITE_PUSHER_SCHEME"
sudo get_ssm_parameter "VITE_PUSHER_APP_CLUSTER"

# Install docker-compose
wget https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m)
sudo mv docker-compose-$(uname -s)-$(uname -m) /usr/local/bin/docker-compose
sudo chmod -v +x /usr/local/bin/docker-compose

echo export PATH=$PATH:/usr/local/bin >> ~/.bash_profile
source ~/.bash_profile;

sudo yum update -y
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
