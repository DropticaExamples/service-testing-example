#!/usr/bin/env bash
cd $WORKSPACE

NEW_JOB_NAME=${JOB_NAME//_/-}

echo "ENV=jenkins" > .env
HOST="$NEW_JOB_NAME.docker.stage-v4.droptica.org"
echo "HOST=$HOST" >> .env
echo "SITE_URI=$HOST" >> .env
echo "NO_INTERACTIVE=1" >> .env

docker-console update-images
docker-console config-prepare
docker-console up
docker-compose ps

echo "--------- host: -----------"
echo "http://drop:drop@${HOST}"
