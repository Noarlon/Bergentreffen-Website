<?php
// Zugangsdaten
$db_server = 'database-5017384113.webspace-host.com';
$db_benutzer = 'dbu867632';
$db_passwort = 'BT_DB_Articles!';
$db_name = 'dbs13939101';

// Verbindungsaufbau
try {
    $dbh = new PDO("mysql:host=$db_server;dbname=$db_name", $db_benutzer, $db_passwort);
    echo 'Verbindung zur Datenbank hergestellt.';
} catch (PDOException $e) {
    die('Fehler bei der Verbindung zur Datenbank: ' . $e->getMessage());
}
?>