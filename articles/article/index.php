<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel 1</title>
    <link rel="icon" href="../img/icons/icon.ico" type="images/icon" />
    <link rel="stylesheet" href="styles.css">
    <script src="code.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
</head>

<body>
    <?php
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        // Hole post_id aus der URL, z. B. ?post_id=2
        $post_id = isset($_GET['post_id']) && is_numeric($_GET['post_id']) ? (int) $_GET['post_id'] : 1;
    ?>

    <div id="top">
        <?php
            $column = 'img_url';
            $img_src = require 'db_fetch_articles.php';
        ?>
        <img src="<?php echo '../../data/img/' . htmlspecialchars($img_src); ?>" id="background" class="background">

        <div>
            <?php
                $column = 'img_url';
                $img_src = require 'db_fetch_articles.php';
            ?>
            <img src="<?php echo '../../data/img/' . htmlspecialchars($img_src); ?>" id="image">
        </div>

        <div id="headline">
            <h1><b>
                <?php
                    $column = 'title';
                    $text = require 'db_fetch_articles.php';
                    echo htmlspecialchars($text);
                ?>
            </b></h1>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#202020" fill-opacity="1" d="M0,192L60,170.7C120,149,240,107,360,96C480,85,600,107,720,122.7C840,139,960,149,1080,154.7C1200,160,1320,160,1380,160L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
        </div>
    </div>

    <div id="main">
        <p id="date">
            <?php
                $column = 'post_date';
                $text = require 'db_fetch_articles.php';
                echo htmlspecialchars($text);
            ?>
        </p>
        <p>
            <?php
                $column = 'text';
                $text = require 'db_fetch_articles.php';
                echo nl2br(htmlspecialchars($text));
            ?>
        </p>
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
                <p><a href="./admin/">Admin Login</a></p>
                <p><a href="./impressum/index.html">Impressum (Imprint)</a></p>
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