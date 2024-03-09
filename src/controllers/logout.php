<?php

if (isset($_SESSION['user-id'])) {
    session_destroy();
    header('Location:/');
} else {
    header('Location:/errors');
}
