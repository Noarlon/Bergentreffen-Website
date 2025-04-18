<?php
// Zugangsdaten
$db_server = 'database-5017384133.webspace-host.com';
$db_benutzer = 'dbu2056711';
$db_passwort = 'BT_DB_UserAccounts!';
$db_name = 'dbs13939110';

$valid_columns = ['first_name', 'name', 'role', 'mail', 'id'];
$column = $column ?? 'first_name';

if (!in_array($column, $valid_columns)) {
    return 'Ungültige Spalte.';
}

if (!isset($author_id) || !is_numeric($author_id)) {
    return 'Ungültige Author-ID.';
}

try {
    $dbh = new PDO("mysql:host=$db_server;dbname=$db_name;charset=utf8", $db_benutzer, $db_passwort);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT $column FROM users WHERE id = :id LIMIT 1";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':id', $author_id, PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row ? $row[$column] : 'Unbekannt';
} catch (PDOException $e) {
    return 'Datenbankfehler: ' . $e->getMessage();
}