#!/usr/bin/env bash
SF="./bin/console"

docker-compose start
$SF server:start 127.0.0.1:8000
