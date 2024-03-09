<?php

$pageTitle = 'Test';
$pageContent = <<<HTML
    <main>
        <div class="container">
            <section>
                <h1>It's a test</h1>
            </section>
        </div>
    </main>
HTML;
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'basicTemplate.php';
