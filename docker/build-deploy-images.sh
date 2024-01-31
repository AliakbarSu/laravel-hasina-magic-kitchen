#!/bin/zsh

version=$1
# build backend image
docker build .  -f ./docker/fpm.DockerFile -t alisultani/hasina-magic-kitchen:backend-v${version} --platform="linux/amd64"

# build frontend image
docker build .  -f ./docker/nginx.DockerFile -t alisultani/hasina-magic-kitchen:frontend-v${version} --platform="linux/amd64"
