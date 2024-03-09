<?php

$staticsRoutes = [
    '/' => '../views/visitors/homepage.php',
    '/superuser' => '../views/admin/homepage.php',
    '/user' => '../views/users/homepage.php',
    '/logout' => '../controllers/logout.php',
    '/a/d' => '../views/tests/homepage.php'
];

$dynamicsRoutes = [
    
];

$errorsRoutes = [
    '/errors' => '../views/errors/errorsGenerals.php'
];

return [
    'static' => $staticsRoutes,
    'dynamic' => $dynamicsRoutes,
    'error' => $errorsRoutes
];
