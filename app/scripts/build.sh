#!/usr/bin/env bash
SF="./bin/console"

composer install -o
yarn run encore dev
$SF assets:install web/
docker-compose build
