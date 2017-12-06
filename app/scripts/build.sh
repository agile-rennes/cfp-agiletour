#!/usr/bin/env bash
SF="./bin/console"

composer install -o
#yarn run encore dev
yarn install
$SF assets:install web/
docker-compose up -d
docker ps
