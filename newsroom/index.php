<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alle News</title>
    <link rel="icon" href="../img/icons/icon.ico" type="images/icon" />
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
</head>

<body>
    <div id="topbar">
        <h1><b>Newsroom</b></h1>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#202020" fill-opacity="1"
                d="M0,192L60,170.7C120,149,240,107,360,96C480,85,600,107,720,122.7C840,139,960,149,1080,154.7C1200,160,1320,160,1380,160L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
            </path>
        </svg>
    </div>

    <div id="main">
        <div id="news-container">
            <?php
            $db_server = 'database-5017384132.webspace-host.com';
            $db_benutzer = 'dbu440815';
            $db_passwort = 'BT_DB_News!';
            $db_name = 'dbs13939109';

            try {
                $pdo = new PDO("mysql:host=$db_server;dbname=$db_name", $db_benutzer, $db_passwort);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Fehler bei der Verbindung zur Datenbank: " . $e->getMessage();
            }

            $stmt = $pdo->query("SELECT id, author_id, img_url, title, text FROM news ORDER BY post_datetime DESC");
            $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            $db_server = 'database-5017384133.webspace-host.com';
            $db_benutzer = 'dbu2056711';
            $db_passwort = 'BT_DB_UserAccounts!';
            $db_name = 'dbs13939110';

            try {
                $pdo = new PDO("mysql:host=$db_server;dbname=$db_name", $db_benutzer, $db_passwort);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Fehler bei der Verbindung zur Datenbank: " . $e->getMessage();
            }

            $stmt = $pdo->query("SELECT id, first_name, name, role FROM users");
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>

            <script>
                const news = <?php echo json_encode($news); ?>;
                const users = <?php echo json_encode($users); ?>;
                const container = document.getElementById("news-container");

                if (news && news.length > 0) {
                    news.forEach(item => {
                        const user = users.find(u => Number(u.id) === Number(item.author_id));

                        const wrapper = document.createElement("div");
                        wrapper.id = "container";

                        // TOP
                        const top = document.createElement("div");
                        top.id = "top";

                        const profile = document.createElement("div");
                        profile.id = "profile";

                        const profileImg = document.createElement("img");
                        profileImg.src = "../img/icons/profile_pic.png";

                        const profileText = document.createElement("div");
                        const profileName = document.createElement("h1");
                        profileName.innerHTML = user ? `<b>${user.first_name} ${user.name}</b>` : "<b>Unbekannter Autor</b>";

                        const profileTeam = document.createElement("p");
                        profileTeam.textContent = user ? user.role : "Rolle unbekannt";

                        profileText.appendChild(profileName);
                        profileText.appendChild(profileTeam);
                        profile.appendChild(profileImg);
                        profile.appendChild(profileText);

                        const split = document.createElement("div");
                        split.id = "split";

                        const heading = document.createElement("div");
                        heading.id = "heading";
                        const headingText = document.createElement("h1");
                        headingText.textContent = item.title;
                        heading.appendChild(headingText);

                        top.appendChild(profile);
                        top.appendChild(split);
                        top.appendChild(heading);

                        // MAIN
                        const main = document.createElement("div");
                        main.id = "main";

                        const textDiv = document.createElement("div");
                        textDiv.id = "text";

                        const paragraph = document.createElement("p");
                        paragraph.textContent = item.text;

                        const link = document.createElement("a");
                        link.href = `/newsroom/news/index.php?post_id=${item.id}&ordered=true`;
                        link.textContent = "Mehr lesen";

                        textDiv.appendChild(paragraph);
                        textDiv.appendChild(link);

                        if (item.img_url && item.img_url.trim() !== "") {
                            const image = document.createElement("img");
                            image.src = `../data/img/${item.img_url}`;
                            main.appendChild(image);
                        }

                        main.appendChild(textDiv);

                        wrapper.appendChild(top);
                        wrapper.appendChild(main);

                        container.appendChild(wrapper);
                    });
                } else {
                    const noNews = document.createElement("p");
                    noNews.textContent = "Keine News verfügbar.";
                    container.appendChild(noNews);
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