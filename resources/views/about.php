<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);

$title = "Home page!";

require_once 'components/header.php';
?>

<section class="about-banner">
    <div>
        <h1 class="about-banner-header">Jack Jefferson</h1>
        <a href="https://www.instagram.com/miniimew.xx/" class="about-credits">@miniimew.xx</a>
    </div>
</section>

<section class="about-content">
    <div class="about-text">
        <p>Hello there! My name is Jack Jefferson. This is my site where you can learn more about who I am, what I do and check out my blogs or recent and past projects I have been working on.</p>
        <p>I currently study Bsc (Hons) Computing at Abertay University and I was also elected as the Department Representative for 2024 to 2025. I enjoy the role as it allows me to engage with the community 
            in Abertay and gives me the ability to represent the students. I hope that the experiences from this role can be relevant to my future career and empower my role within a company.
        </p>
        <p>
            I will continue to develop this website whilst I develop my career and introduce lots of different little projects that may intergrate with the site or be distributed through my GitHub.
        </p>
    </div>
    

</section>

<?php
require_once 'components/footer.php';
?>