<?php

require_once __DIR__ . '/../../../routes/web.php';

echo '<br>';

// foreach ($routes as $route => $path) {
//     echo '<a href="' . $route . '">' . $route . '</a><br>';
// }

?>

<nav>
    <ul>
        <li><a href="/">About</a></li>
        <li><a href="/blogs">Blog</a></li>
        <li><a href="/projects">Projects</a></li>
        <li><a href="/resume">Resumé</a></li>
    </ul>
</nav>