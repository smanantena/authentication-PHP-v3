<?php

$pageContent = <<<HTML
    <header>
        <nav>
            <div class="container">
                <ul class="nav-bar">
                    <li class="nav-item"><a class="nav-link" href="/superuser">Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="/user">User</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1>Authentification v3 home</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum, neque iure? Quis ipsum nostrum soluta reprehenderit impedit voluptas alias exercitationem aliquid consectetur, dolores magnam quia hic qui deserunt aspernatur cumque nam, in autem labore. Sequi quas rerum consequatur cumque eaque eos, error natus iure nisi sapiente placeat numquam voluptas magnam praesentium veritatis dolores porro harum sunt molestias tempore earum in debitis, quod at! Est illum repellat voluptatum aut assumenda minima molestiae! Recusandae temporibus excepturi, tenetur eligendi optio porro qui, magnam aperiam nesciunt blanditiis ducimus. Illum eaque delectus perferendis voluptate blanditiis eligendi, dolorum optio eveniet dolorem necessitatibus sed, alias deserunt sit? Non odio ipsam quasi eius illum harum necessitatibus praesentium illo mollitia voluptatem voluptate eos libero accusamus porro, maxime et rem!</p>
        </div>
    </main>
HTML;
$pageTitle = 'Page to search navigation.';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'basicTemplate.php';
