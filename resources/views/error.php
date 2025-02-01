<?php

$error = 'Error ' . http_response_code() . '<br>';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$title = "Home page!";

require_once 'components/header.php';

// TODO Create a cleaner solution.
require_once __DIR__ . '/../../app/Core/Database/Database.php';

use App\Core\Database\Database;

$message = '';

$projects = Database::select("SELECT * FROM projects");

if (sizeof($projects) === 0) {
    $message = "Currently there are no projects...";
}
?>

<section class="content">
<h1><?php echo $error ?></h1>
<h2>Uh-oh... looks like something went wrong.</h2>
</section>

<?php
require_once 'components/footer.php';
?>