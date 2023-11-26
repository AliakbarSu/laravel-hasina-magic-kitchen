#!/bin/bash


get_ssm_parameter() {
  aws_profile="allie"
  ssm_prefix="/hasina-magic-kitchen"
  local param_name=$1
  value=`aws ssm get-parameters --name "$ssm_prefix/$param_name" --query Parameters[0].Value | tr -d ""`
  echo "$param_name=$value" >> .env
}

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

# Application-related parameters
get_ssm_parameter "APP_NAME"
get_ssm_parameter "APP_ENV"
get_ssm_parameter "APP_KEY"
get_ssm_parameter "APP_DEBUG"
get_ssm_parameter "APP_URL"

# Logging parameters
get_ssm_parameter "LOG_CHANNEL"
get_ssm_parameter "LOG_DEPRECATIONS_CHANNEL"
get_ssm_parameter "LOG_LEVEL"

# Database parameters
get_ssm_parameter "DB_CONNECTION"
get_ssm_parameter "RDS_HOSTNAME"
get_ssm_parameter "RDS_PORT"
get_ssm_parameter "RDS_DB_NAME"
get_ssm_parameter "RDS_USERNAME"
get_ssm_parameter "RDS_PASSWORD"

# ... (continue for other parameters)

# AWS-related parameters
get_ssm_parameter "AWS_ACCESS_KEY_ID"
get_ssm_parameter "AWS_SECRET_ACCESS_KEY"
get_ssm_parameter "AWS_DEFAULT_REGION"
get_ssm_parameter "AWS_BUCKET"

# Pusher parameters
get_ssm_parameter "PUSHER_APP_ID"
get_ssm_parameter "PUSHER_APP_KEY"
get_ssm_parameter "PUSHER_APP_SECRET"
# ... (continue for other Pusher parameters)

# VITE_PUSHER parameters
get_ssm_parameter "VITE_PUSHER_APP_KEY"
get_ssm_parameter "VITE_PUSHER_HOST"
get_ssm_parameter "VITE_PUSHER_PORT"
get_ssm_parameter "VITE_PUSHER_SCHEME"
get_ssm_parameter "VITE_PUSHER_APP_CLUSTER"

sudo chown -R ec2-user:ec2-user .env && sudo systemctl start docker.service;


# Start docker


# starting the application
docker-compose up -d --build;
