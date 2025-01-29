# Connecting to a Database

To connect to a database, you can use the `Database` class defiend in `app/Core/Database`. 

The Database class requires you to provide your own PHP configuration file named `config-db.php`. Here you will define some environment variables like so:

```php
// This example is for using mysql.
<?php
define('PREFIX', 'mysql');
define('DB_HOST', 'host=localhost');
define('DB_PORT', 'port=3307');
define('DB_NAME', 'dbname=example');
```