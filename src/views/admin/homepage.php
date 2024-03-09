<?php

$pageTitle = 'Admin\'s views';
$roleList = ['admin'];
$profilePage = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR .'profilePage.php';
$pageURL = 'Location:/superuser';
$loginFormLocation = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'forms' . DIRECTORY_SEPARATOR . 'loginForm.php';
$basicTemplateLocation = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'basicTemplate.php';

require_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'checkers' . DIRECTORY_SEPARATOR . 'loginChecker.php';
