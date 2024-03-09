<?php

$pageTitle = 'Globals errors';
ob_start();
?>
<main>
    <div class="container">
        <article>
            <h1 class="text-danger">Errors occurred</h1>
            <p><a href="/">There are some errors. Return to the homepage.</a></p>
        </article>
    </div>
</main>
<?php
$pageContent = ob_get_clean();
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components'. DIRECTORY_SEPARATOR .'basicTemplate.php';
