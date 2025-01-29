<?php

require_once __DIR__ . '/../../../routes/web.php';

echo '<br>';

foreach ($routes as $route => $path) {
    echo '<a href="' . $route . '">' . $route . '</a><br>';
}