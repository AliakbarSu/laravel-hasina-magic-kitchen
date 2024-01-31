#!/bin/zsh

version=$1
# build backend image
docker push alisultani/hasina-magic-kitchen:backend-v${version}

# build frontend image
docker push alisultani/hasina-magic-kitchen:frontend-v${version}
