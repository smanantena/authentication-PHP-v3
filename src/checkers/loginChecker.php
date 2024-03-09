<?php

use App\Authentication\Authentication;
use App\Database\Querries\UsersQuerries;

$authenticator = new Authentication(new UsersQuerries());

if (isset($_POST['username'])) {
    if (!empty($_POST['username'])) {
        $username = trim(htmlentities($_POST['username']));
    }
}

if (isset($_POST['password'])) {
    if (!empty($_POST['password'])) {
        $password = trim(htmlentities($_POST['password']));
    }
}

if (isset($_POST['username']) && isset($_POST['password'])) {

    if (empty($_POST['username']) && empty($_POST['password'])) {
        $message['usernamePassword'] = 'The username and password must be provide.';
    } else if (empty($_POST['username'])) {
        $message['username'] = 'You must provide your username for authentication.';
    } else if (empty($_POST['password'])) {
        $message['password'] = 'You must provide your password.';
    } else {

        
        $user = $authenticator->authenticateUser($username, $password, $roleList);
        if (!is_null($user)) {
            unset($_POST, $username, $password);
            $_SESSION['user-id'] = $user->getUser_id();
            header($pageURL);
        } else {
            unset($_POST, $username, $password);
            $message['usernamePassword'] = 'You can\'t access to this page.';
        }
    }
}

if (isset($_SESSION['user-id'])) {
    $user = $authenticator->userAlreadyExist(intVal($_SESSION['user-id']));
    if (is_null($user)) {
        session_destroy();
        header('Location:/');
    } else {
        ob_start();
        require_once $profilePage;
        $pageContent = ob_get_clean();
    }
}

if (!isset($_SESSION['user-id'])) {

    ob_start();
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'header.php';
    echo '<main>';
    echo '<div class="container">';
    echo '<h1>You must be authenticate first.</h1>';
    require_once $loginFormLocation;
    echo '</div>';
    echo '</main>';
    $pageContent = ob_get_clean();
}

require_once $basicTemplateLocation;
