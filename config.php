
<?php
// Stores the path to the SQLite database file:
$db = './database/MysticHinduBeings.db';
$dsn = "sqlite:$db";
$pdo = new PDO($dsn);
?>
