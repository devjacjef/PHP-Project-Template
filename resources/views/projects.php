<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$title = "Home page!";

require_once 'components/header.php';
?>

<?php 
    // TODO Create a cleaner solution.
    require_once __DIR__ . '/../../app/Core/Database.php';

    use App\Core\Database;

    $message = '';
    Database::connect();

    $projects = Database::select("SELECT * FROM projects");

    if (sizeof($projects) < 1) {
        $message = "Currently there are no projects...";
    }
?>

<h1><?php echo $message ?></h1>

<?php
require_once 'components/footer.php';
?>