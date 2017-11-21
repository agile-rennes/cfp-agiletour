<?php

use Symfony\Component\Dotenv\Dotenv;

$dotenvFilePath = __DIR__.'/../.env';

if (file_exists($dotenvFilePath)) {
    $dotenv = new Dotenv();
    $dotenv->load($dotenvFilePath);
}
