<?php
// Zugangsdaten
$db_server = 'database-5017384113.webspace-host.com';
$db_benutzer = 'dbu867632';
$db_passwort = 'BT_DB_Articles!';
$db_name = 'dbs13939101';

// `column` prüfen
$valid_columns = ['title', 'spoil_title', 'text', 'post_date', 'img_url']; // Erlaubte Spaltennamen
if (!isset($column) || !in_array($column, $valid_columns)) {
    $column = 'title'; // Standardwert
}

// `post_id` prüfen
if (!isset($post_id) || !is_numeric($post_id) || $post_id < 1) {
    $post_id = 1; // Standardwert: letzter Eintrag
}

try {
    $dbh = new PDO("mysql:host=$db_server;dbname=$db_name;charset=utf8", $db_benutzer, $db_passwort);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT $column FROM articles ORDER BY post_date DESC LIMIT 1 OFFSET :offset";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':offset', $post_id - 1, PDO::PARAM_INT);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row ? $row[$column] : 'Fehler beim Laden...';
} catch (PDOException $e) {
    return 'Datenbankfehler: ' . $e->getMessage();
}
?>
