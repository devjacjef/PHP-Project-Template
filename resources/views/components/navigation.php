<?php

require_once __DIR__ . '/../../../routes/web.php';

?>

<nav>
    <ul class="nav-links">
        <li><a href="/">About</a></li>
        <li><a href="/blogs">Blog</a></li>
        <li><a href="/projects">Projects</a></li>
        <li><a href="/resume">Resumé</a></li>
    </ul>
    <ul class="social-links">
        <li><a href="#"><?php include 'icons/github-icon.php'; ?></a></li>
        <li><a href="#"><?php include 'icons/linkedin-icon.php'; ?></a></li>
    </ul>
</nav>