#!/bin/bash

aws_profile="allie"
ssm_prefix="/hasina-magic-kitchen"

# Function to create SSM parameter
create_ssm_parameter() {
  local param_name=$1
  local param_value=$2
  aws ssm put-parameter --name "$param_name" --value "$param_value" --type "String" --profile "$aws_profile"
}

# Application-related parameters
create_ssm_parameter "$ssm_prefix/APP_NAME" "Hasina's Magic Kitchen"
create_ssm_parameter "$ssm_prefix/APP_ENV" "local"
create_ssm_parameter "$ssm_prefix/APP_KEY" "base64:QP7IRWdq3oXEr8ZwKiAo9FYzKWODLUVWy+cBkfFoH0I="
create_ssm_parameter "$ssm_prefix/APP_DEBUG" "true"
create_ssm_parameter "$ssm_prefix/APP_URL" "http://localhost:8000"

# Logging parameters
create_ssm_parameter "$ssm_prefix/LOG_CHANNEL" "stack"
create_ssm_parameter "$ssm_prefix/LOG_DEPRECATIONS_CHANNEL" "null"
create_ssm_parameter "$ssm_prefix/LOG_LEVEL" "debug"

# Database parameters
create_ssm_parameter "$ssm_prefix/DB_CONNECTION" "mysql"
create_ssm_parameter "$ssm_prefix/RDS_HOSTNAME" "127.0.0.1"
create_ssm_parameter "$ssm_prefix/RDS_PORT" "3306"
create_ssm_parameter "$ssm_prefix/RDS_DB_NAME" "mydatabase"
create_ssm_parameter "$ssm_prefix/RDS_USERNAME" "root"
create_ssm_parameter "$ssm_prefix/RDS_PASSWORD" "root"

# ... (continue for other parameters)

# Pusher parameters
create_ssm_parameter "$ssm_prefix/PUSHER_APP_ID" ""
create_ssm_parameter "$ssm_prefix/PUSHER_APP_KEY" ""
create_ssm_parameter "$ssm_prefix/PUSHER_APP_SECRET" ""
# ... (continue for other Pusher parameters)

# VITE_PUSHER parameters
create_ssm_parameter "$ssm_prefix/VITE_PUSHER_APP_KEY" "${PUSHER_APP_KEY}"
create_ssm_parameter "$ssm_prefix/VITE_PUSHER_HOST" "${PUSHER_HOST}"
create_ssm_parameter "$ssm_prefix/VITE_PUSHER_PORT" "${PUSHER_PORT}"
create_ssm_parameter "$ssm_prefix/VITE_PUSHER_SCHEME" "${PUSHER_SCHEME}"
create_ssm_parameter "$ssm_prefix/VITE_PUSHER_APP_CLUSTER" "${PUSHER_APP_CLUSTER}"

# ... (continue for other parameters)

echo "SSM parameters creation complete."
