<?php

// Datenbank Verbindungsdetails
$host = 'database-5017384113.webspace-host.com';
$db = 'dbs13939101';
$user = 'dbu867632';
$pass = 'BT_DB_Articles!';

// Verbindung zur Datenbank herstellen
$mysqli = new mysqli($host, $user, $pass, $db);

// Überprüfen ob Verbindung erfolgreich war
if ($mysqli->connect_error) {
    die('Verbindung zur Datenbank fehlgeschlagen: ' . $mysqli->connect_error);
}

// SQL-Abfrage zum Abrufen der Data
$sql = "SELECT title FROM articles WHERE id = 1";
$result = $mysqli->query($sql);

// Wenn Daten erfolgreich erhalten diese anzeigen, sonst Fehlernachricht anzeigen
if ($result->num_rows > 0) {
    // Abrufen der Daten
    $row = $result->fetch_assoc();
    $text = $row['title'];
} else {
    // Fehlernachricht 404d
    $text = 'Fehler beim Laden der Datenpakete... (404d)';
}

// Verbindung schließen
$mysqli->close();

?>