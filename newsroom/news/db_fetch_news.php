<?php
// Zugangsdaten
$db_server = 'database-5017384132.webspace-host.com';
$db_benutzer = 'dbu440815';
$db_passwort = 'BT_DB_News!';
$db_name = 'dbs13939109';

// Erlaubte Spaltennamen
$valid_columns = ['title', 'author_id', 'text', 'post_datetime', 'img_url', 'id'];

// Parameter prüfen
$column = $column ?? null;
$post_id = isset($_GET['post_id']) ? (int)$_GET['post_id'] : 1;
$ordered = isset($_GET['ordered']) && $_GET['ordered'] === 'true'; 

// `column` prüfen
if (!in_array($column, $valid_columns)) {
    $column = 'title'; // Standardspalte
}

// `post_id` prüfen
if (!is_numeric($post_id) || $post_id < 1) {
    $post_id = 1; // Fallback
}

// `ordered` als bool behandeln
$ordered = $ordered === true;

try {
    $dbh = new PDO("mysql:host=$db_server;dbname=$db_name;charset=utf8", $db_benutzer, $db_passwort);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($ordered) {
        // Exakte post_id
        $sql = "SELECT $column FROM news WHERE id = :post_id LIMIT 1";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':post_id', $post_id, PDO::PARAM_INT);
    } else {
        // post_id als Offset in absteigendem Datum
        $sql = "SELECT $column FROM news ORDER BY post_datetime DESC LIMIT 1 OFFSET :offset";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':offset', $post_id - 1, PDO::PARAM_INT);
    }

    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($column === "img_url") {
            return $row ? "../../data/img/" . $row[$column] : '';
    }
    return $row ? $row[$column] : 'Eintrag nicht gefunden.';
} catch (PDOException $e) {
    return 'Datenbankfehler: ' . $e->getMessage();
}
?>
