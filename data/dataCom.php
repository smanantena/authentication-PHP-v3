<?php
require_once 'UserGenerator.php';
use Data\UserGenerator;

if ($argc > 2) {
    switch ($argv[1]) {
        case 'hashPassword':
            echo UserGenerator::hashPassword($argv[2]);
            break;

        case 'verifyHashPassword':
            echo UserGenerator::verifyHashPassword($argv[2], $argv[3]);
            break;
        default:
            echo 'This command not exist';
            break;
    }
} else {
    echo "There are the list of command :\n hashPassword [password to hash]";
}