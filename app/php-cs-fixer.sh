#!/usr/bin/env bash

FIXER=$1
TARGET=$3

RULES_FILE=$2 /usr/bin/php -r 'echo json_encode(json_decode(file_get_contents(getenv("RULES_FILE"))));' | /usr/bin/xargs -0 -I {} $FIXER fix --rules={} $TARGET
