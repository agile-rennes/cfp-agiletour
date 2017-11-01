#!/usr/bin/env bash

SF="./bin/console"

$SF doctrine:migrations:migrate -n

