<?php
// Zugangsdaten
$db_server = 'database-5017384133.webspace-host.com';
$db_benutzer = 'dbu2056711';
$db_passwort = 'BT_DB_UserAccounts!';
$db_name = 'dbs13939110';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL);
    $password = $_POST["password"];

    if (!$email || empty($password)) {
        die("Fehler: Bitte gültige E-Mail und Passwort eingeben.");
    }

    // Verbindungsaufbau
    try {
        $dbh = new PDO("mysql:host=$db_server;dbname=$db_name", $db_benutzer, $db_passwort, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        $sql = "SELECT `password` FROM `users` WHERE `mail` = :email";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row || !password_verify($password, $row['password'])) {
            header("Location: /admin/");
            die("Fehler: Ungültige E-Mail oder Passwort.");
        }

        // Erfolgreicher Login, Weiterleitung
        header("Location: /admin/dashboard/");
        exit();
    } catch (PDOException $e) {
        header("Location: /admin/");
        die('Fehler bei Anmeldung! Bitte versuch es erneut.');
    }
}

$dbh = null;
?>
