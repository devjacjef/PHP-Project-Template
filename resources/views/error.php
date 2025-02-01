<?php

$error = 'Error ' . http_response_code() . '<br>';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$title = "Home page!";

require_once 'components/header.php';

?>

<section class="content">
<h1><?php echo $error ?></h1>
<h2>Uh-oh... looks like something went wrong.</h2>
</section>

<?php
require_once 'components/footer.php';
?>