#!/usr/bin/env bash
SF="./bin/console"

docker-compose up -d
docker-compose logs
$SF server:start 127.0.0.1:8000
