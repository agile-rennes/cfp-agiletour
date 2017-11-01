#!/usr/bin/env bash

SF="./bin/console"

$SF doctrine:database:drop --force
$SF doctrine:database:create
$SF doctrine:migrations:migrate -n
