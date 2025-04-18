<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alle Artikel</title>
    <link rel="icon" href="../img/icons/icon.ico" type="images/icon" />

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
</head>

<body>
    <div id="top">
        <h1><b>Alle Artikel</b></h1>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#202020" fill-opacity="1"
                d="M0,192L60,170.7C120,149,240,107,360,96C480,85,600,107,720,122.7C840,139,960,149,1080,154.7C1200,160,1320,160,1380,160L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
            </path>
        </svg>
    </div>

    <div id="main">
        <div id="article-container">
            <?php
                // Datenbankverbindung
                $db_server = 'database-5017384113.webspace-host.com';
                $db_benutzer = 'dbu867632';
                $db_passwort = 'BT_DB_Articles!';
                $db_name = 'dbs13939101';

                // Verbindung zur DB herstellen
                try {
                    $pdo = new PDO("mysql:host=$db_server;dbname=$db_name", $db_benutzer, $db_passwort);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e) {
                    echo "Fehler bei der Verbindung zur Datenbank: " . $e->getMessage();
                }

                // Artikel aus der DB holen
                $stmt = $pdo->query("SELECT post_id, img_url, title, spoil_title FROM articles ORDER BY post_date DESC");
                $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>

            <script>
                // PHP → JavaScript Übergabe der Artikel-Daten
                const articles = <?php echo json_encode($articles); ?>;

                const container = document.getElementById("article-container");

                // Prüfen, ob es Artikel gibt
                if (articles && articles.length > 0) {
                    articles.forEach(article => {
                        const a = document.createElement("a");
                        a.href = `../articles/article/index.php?post_id=${article.post_id}&ordered=true`;

                        const articleDiv = document.createElement("div");
                        articleDiv.id = `article`; // ID des Artikels

                        const img = document.createElement("img");
                        img.src = `../data/img/${article.img_url}`;  // Bildquelle aus der DB
                        img.id = `image`; // ID des Bildes (optional)

                        const h1 = document.createElement("h1");
                        h1.id = `title`; // ID des Titels
                        h1.textContent = article.title;

                        const p = document.createElement("p");
                        p.id = `spoil_title`; // ID des Spoiler-Titels
                        p.textContent = article.spoil_title;

                        // Anhängen der HTML-Elemente
                        articleDiv.appendChild(img);
                        articleDiv.appendChild(h1);
                        articleDiv.appendChild(p);
                        a.appendChild(articleDiv);
                        container.appendChild(a);
                    });
                } else {
                    const noArticles = document.createElement("p");
                    noArticles.textContent = "Keine Artikel verfügbar.";
                    container.appendChild(noArticles);
                }
            </script>

        </div>
    </div>

    <div id="bottom">
        <a href="../../index.php">Zurück</a>
    </div>

    <section id="fade-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#202020" fill-opacity="1"
                d="M0,192L60,186.7C120,181,240,171,360,170.7C480,171,600,181,720,181.3C840,181,960,171,1080,170.7C1200,171,1320,181,1380,186.7L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
    </section>

    <footer id="footer">
        <section>
            <div>
                <h1><a href=""><b>Zurück zum Anfang</b></a></h1>
                <p><a href="">Newsroom</a></p>
                <p><a href="../admin/">Admin Login</a></p>
                <p><a href="../impressum/index.html">Impressum (Imprint)</a></p>
            </div>
            <div>
                <h1><b>Social Media:</b></h1>
                <p><a href="https://instagram.com/bergentreffen">Instagram</a></p>
                <p><a href="https://www.facebook.com/profile.php?id=61574681566933">Facebook</a></p>
            </div>
            <div>
                <h1><b>Kontakt:</b></h1>
                <p><a>kontakt@bergentreffen.de</a></p>
                <p><a>oder mehr im Impressum</a></p>
            </div>
        </section>

        <p id="copyright">© Bergen-Treffen e.V. 2025</p>

        <div id="circle">
            <img src="../../img/ressources/circle-footer.png">
        </div>
    </footer>
</body>

</html>
