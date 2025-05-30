<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bergentreffen 2025</title>
    <link rel="icon" href="../img/icons/icon.ico" type="images/icon" />
    <link rel="stylesheet" href="styles.css">
    <script src="code.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
</head>

<body>
    <header>

        <?php
            // Diese Seite darf 1 Stunde lang gecacht werden
            header("Cache-Control: max-age=3600, public");
            header("Expires: " . gmdate("D, d M Y H:i:s", time() + 3600) . " GMT");
        ?>

        <section id="header">
            <div id="top-bar">
                <ul>
                    <li><a href="#event" id="link">EVENT</a></li>
                    <li><a>|</a></li>
                    <li><a href="#info" id="link">INFOS</a></li>
                    <li><a>|</a></li>
                    <li><a href="#news" id="link">NEUIGKEITEN</a></li>
                    <li><a>|</a></li>
                    <li><a href="#contact" id="link">KONTAKT</a></li>
                    <li><a>|</a></li>
                    <li><a href="#footer" id="link">MEHR</a></li>
                </ul>
            </div>
            <div id="circle">
                <img src="img/ressources/circle-top.png">
            </div>
            <div id="main-heading">
                <h1>Nationales</h1>
                <h1>Bergentreffen</h1>
                <h1 class="color-accent">2025</h1>
            </div>
            <div class="img-fade">
                <img src="img/kadaster.png">
            </div>

        </section>
        <section id="fade-1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#202020" fill-opacity="1"
                    d="M0,192L80,208C160,224,320,256,480,240C640,224,800,160,960,138.7C1120,117,1280,139,1360,149.3L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
                </path>
            </svg>
        </section>
    </header>
    <main>
        <section id="event">
            <div class="slider-container">
                <div class="slider-track" id="slider-track">
                    <!-- Repeat items to create the infinite effect -->
                    <div class="slider-item"><img src="img/wappen/Bergen-An-Der-Dumme.png" alt="Bergen an der Dumme">
                    </div>
                    <div class="slider-item"><img src="img/wappen/Bergen-Auf-Rügen.png" alt="Bergen auf Rügen"></div>
                    <div class="slider-item"><img src="img/wappen/Bergen-Celle.png" alt="Bergen Celle"></div>
                    <div class="slider-item"><img src="img/wappen/Bergen-Chiemgau.png" alt="Bergen Chiemgau"></div>
                    <div class="slider-item"><img src="img/wappen/Bergen-Elsterheide.png" alt="Bergen Elsterheide">
                    </div>
                    <div class="slider-item"><img src="img/wappen/Bergen-Enkheim.png" alt="Bergen Enkheim"></div>
                    <div class="slider-item"><img src="img/wappen/Bergen-Losheim-Am-See.png"
                            alt="Bergen Saar (Losheim am See)"></div>
                    <div class="slider-item"><img src="img/wappen/Bergen-Nahe.png" alt="Bergen Nahe"></div>

                    <!-- Duplicate the items for seamless looping -->
                    <div class="slider-item"><img src="img/wappen/Bergen-An-Der-Dumme.png" alt="Bergen an der Dumme">
                    </div>
                    <div class="slider-item"><img src="img/wappen/Bergen-Auf-Rügen.png" alt="Bergen auf Rügen"></div>
                    <div class="slider-item"><img src="img/wappen/Bergen-Celle.png" alt="Bergen Celle"></div>
                    <div class="slider-item"><img src="img/wappen/Bergen-Chiemgau.png" alt="Bergen Chiemgau"></div>
                    <div class="slider-item"><img src="img/wappen/Bergen-Elsterheide.png" alt="Bergen Elsterheide">
                    </div>
                    <div class="slider-item"><img src="img/wappen/Bergen-Enkheim.png" alt="Bergen Enkheim"></div>
                    <div class="slider-item"><img src="img/wappen/Bergen-Losheim-Am-See.png"
                            alt="Bergen Saar (Losheim am See)"></div>
                    <div class="slider-item"><img src="img/wappen/Bergen-Nahe.png" alt="Bergen Nahe"></div>
                </div>
            </div>

            <div id="countdown">
                <h1>🕙 Noch <b>123d : 02h : 03m : 20s</b> ...</h1>
            </div>

            <h1>... bis zum <b>Nationalen Bergentreffen</b> 2025!</h1>
            <p>Herzlich willkommen auf der offiziellen Seite des Bergentreffens!<br> Seit 1995 kommen alle zwei Jahre
                acht deutsche Städte und Gemeinden mit dem Namen <b>Bergen</b> zusammen, um Freundschaften zu pflegen,
                regionale Traditionen zu feiern und den kulturellen Austausch zu fördern.
                <br><br>
                Das nächste Bergentreffen findet vom <b>29. Mai bis 1. Juni 2025</b> in Bergen im Saarland
                statt. Freuen Sie sich auf ein buntes Programm mit kulturellen Darbietungen, Markttagen voller
                regionaler Spezialitäten und spannenden gemeinsamen Ausflügen.
                <br><br>
                Erleben Sie mit uns unvergessliche Tage voller Tradition, Begegnung und Gemeinschaft! Wir freuen uns auf
                Ihren Besuch!
            </p>
        </section>

        <section id="fade-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#e9e9e9" fill-opacity="1"
                    d="M0,128L80,122.7C160,117,320,107,480,128C640,149,800,203,960,229.3C1120,256,1280,256,1360,256L1440,256L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
                </path>
            </svg>
        </section>

        <section id="info">
            <div id="title-line">
                <img src="img/wappen/Bergen-Losheim-Am-See.png">
                <div class="hline"></div>
                <div>
                    <h1>Bergentreffen 2025</h1>
                    <p>Bergen/Saar</p>
                </div>
            </div>

            <div id="information">
                <div>
                    <img src="img/icons/icon_time.png">
                    <p>29. Mai bis 1. Juni 2025</p>
                </div>
                <div class="hline"></div>
                <div>
                    <img src="img/icons/icon_loc.png">
                    <p>66679 Bergen <br>Losheim am See (Saarland, Germany)</p>
                </div>
                <div class="hline"></div>
                <div>
                    <img src="img/icons/icon_orga.png">
                    <p>Bergen-Treffen e.V.</p>
                </div>
            </div>

            <div id="articles">
                <div id="row">
                    <a href="/articles/article/index.php?post_id=1" id="article" style="background-image: url('data/img/<?php
                    ini_set('display_errors', 1);
                    error_reporting(E_ALL);
                    $post_id = 1;
                    $column = 'img_url';
                    $text = require 'db_fetch_articles.php';
                    echo htmlspecialchars($text);
                    ?>');">
                        <h1>
                            <?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);
                            $post_id = 1;
                            $column = 'title';
                            $text = require 'db_fetch_articles.php';
                            echo htmlspecialchars($text);
                            ?>
                        </h1>
                        <p>
                            <?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);
                            $post_id = 1;
                            $column = 'spoil_title';
                            $text = require 'db_fetch_articles.php';
                            echo htmlspecialchars($text);
                            ?>
                        </p>
                    </a>
                    <a href="/articles/article/index.php?post_id=2" id="article" style="background-image: url('data/img/<?php
                    ini_set('display_errors', 1);
                    error_reporting(E_ALL);
                    $post_id = 2;
                    $column = 'img_url';
                    $text = require 'db_fetch_articles.php';
                    echo htmlspecialchars($text);
                    ?>');">
                        <h1>
                            <?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);
                            $post_id = 2;
                            $column = 'title';
                            $text = require 'db_fetch_articles.php';
                            echo htmlspecialchars($text);
                            ?>
                        </h1>
                        <p>
                            <?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);
                            $post_id = 2;
                            $column = 'spoil_title';
                            $text = require 'db_fetch_articles.php';
                            echo htmlspecialchars($text);
                            ?>
                        </p>
                    </a>
                    <a href="/articles/article/index.php?post_id=3" id="article" style="background-image: url('data/img/<?php
                    ini_set('display_errors', 1);
                    error_reporting(E_ALL);
                    $post_id = 3;
                    $column = 'img_url';
                    $text = require 'db_fetch_articles.php';
                    echo htmlspecialchars($text);
                    ?>');">
                        <h1>
                            <?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);

                            $post_id = 3;
                            $column = 'title';
                            $text = require 'db_fetch_articles.php';
                            echo htmlspecialchars($text);
                            ?>
                        </h1>
                        <p>
                            <?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);
                            $post_id = 3;
                            $column = 'spoil_title';
                            $text = require 'db_fetch_articles.php';
                            echo htmlspecialchars($text);
                            ?>
                        </p>
                    </a>
                </div>
                <div id="row">
                    <a href="/articles/article/index.php?post_id=4" id="article" style="background-image: url('data/img/<?php
                    ini_set('display_errors', 1);
                    error_reporting(E_ALL);
                    $post_id = 4;
                    $column = 'img_url';
                    $text = require 'db_fetch_articles.php';
                    echo htmlspecialchars($text);
                    ?>');">
                        <h1>
                            <?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);

                            $post_id = 4;
                            $column = 'title';
                            $text = require 'db_fetch_articles.php';
                            echo htmlspecialchars($text);
                            ?>
                        </h1>
                        <p>
                            <?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);
                            $post_id = 4;
                            $column = 'spoil_title';
                            $text = require 'db_fetch_articles.php';
                            echo htmlspecialchars($text);
                            ?>
                        </p>
                    </a>
                    <a href="/articles/article/index.php?post_id=5" id="article" style="background-image: url('data/img/<?php
                    ini_set('display_errors', 1);
                    error_reporting(E_ALL);
                    $post_id = 5;
                    $column = 'img_url';
                    $text = require 'db_fetch_articles.php';
                    echo htmlspecialchars($text);
                    ?>');">
                        <h1>
                            <?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);

                            $post_id = 5;
                            $column = 'title';
                            $text = require 'db_fetch_articles.php';
                            echo htmlspecialchars($text);
                            ?>
                        </h1>
                        <p>
                            <?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);
                            $post_id = 5;
                            $column = 'spoil_title';
                            $text = require 'db_fetch_articles.php';
                            echo htmlspecialchars($text);
                            ?>
                        </p>
                    </a>
                    <a href="/articles/article/index.php?post_id=6" id="article" style="background-image: url('data/img/<?php
                    ini_set('display_errors', 1);
                    error_reporting(E_ALL);
                    $post_id = 6;
                    $column = 'img_url';
                    $text = require 'db_fetch_articles.php';
                    echo htmlspecialchars($text);
                    ?>');">
                        <h1>
                            <?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);

                            $post_id = 6;
                            $column = 'title';
                            $text = require 'db_fetch_articles.php';
                            echo htmlspecialchars($text);
                            ?>
                        </h1>
                        <p>
                            <?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);
                            $post_id = 6;
                            $column = 'spoil_title';
                            $text = require 'db_fetch_articles.php';
                            echo htmlspecialchars($text);
                            ?>
                        </p>
                    </a>
                </div>
                <a href="/articles/index.php" id="link">Alle Artikel anzeigen</a>
            </div>

            <div id="supporter">
                <h1>Vielen Dank an unsere Supporter!</h1>
                <div id="holder">
                    <a href="https://www.cmn.de/"><img src="/img/supporter/supp-cmn.png"></a>
                    <a href="https://www.meisterwerkstatt-hewer.de"><img src="/img/supporter/supp-hewer.jpg"></a>
                    <a href="https://www.ikk-suedwest.de/"><img src="/img/supporter/supp-ikk.png"></a>
                    <a href="https://www.kues-losheim.de/"><img src="/img/supporter/supp-kuss.jpg"></a>
                    <a href="https://www.spkmw.de"><img src="/img/supporter/supp-sparkasse.png"></a>
                    <a href=""><img src="/img/supporter/supp-taxi-martin.jpg"></a>
                    <a href="https://www.facebook.com/lackierereiwollmann"><img src="/img/supporter/supp-wollmann.jpg"></a>
                    <a href=""><img src="/img/supporter/supp-heizöl-röder.png"></a>
                </div>
            </div>
        </section>

        <section id="fade-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#e0e8f1" fill-opacity="1"
                    d="M0,128L80,122.7C160,117,320,107,480,128C640,149,800,203,960,229.3C1120,256,1280,256,1360,256L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                </path>
            </svg>
        </section>

        <section id="news">
            <div id="title-line">
                <img src="img/icons/icon_news.png">
                <div class="hline"></div>
                <div>
                    <h1>Neuigkeiten</h1>
                    <p>Newsroom</p>
                </div>
            </div>
            <div id="news-holder">
                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        // Load latest 3 News Articles
                        createNewsElement1();
                        createNewsElement2();
                        createNewsElement3();
                    });

                    function createNewsElement1() {
                        // Container erstellen
                        const container = document.createElement("div");
                        container.id = "container";

                        // Top-Bereich
                        const top = document.createElement("div");
                        top.id = "top";

                        // Profil-Bereich
                        const profile = document.createElement("div");
                        profile.id = "profile";
                        const profileImg = document.createElement("img");
                        profileImg.src = "img/icons/profile_pic.png";

                        const profileText = document.createElement("div");
                        const profileName = document.createElement("h1");
                        profileName.innerHTML = "<b><?php
                            $column = 'author_id';
                            $post_id = 1;
                            $author_id = require 'db_fetch_news.php';
                            $column = 'first_name';
                            $first = require 'db_fetch_users.php';
                            $column = 'name';
                            $second = require 'db_fetch_users.php';
                            echo htmlspecialchars($first . ' ' . $second);
                        ?></b>";
                        const profileTeam = document.createElement("p");
                        profileTeam.textContent = "<?php
                            $column = 'author_id';
                            $post_id = 1;
                            $author_id = require 'db_fetch_news.php';
                            $column = 'role';
                            $text = require 'db_fetch_users.php';
                            echo htmlspecialchars($text);
                        ?>";

                        profileText.appendChild(profileName);
                        profileText.appendChild(profileTeam);
                        profile.appendChild(profileImg);
                        profile.appendChild(profileText);

                        // Trennlinie
                        const split = document.createElement("div");
                        split.id = "split";

                        // Überschrift
                        const heading = document.createElement("div");
                        heading.id = "heading";
                        const headingText = document.createElement("h1");
                        headingText.textContent = "<?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);
                            $post_id = 1;
                            $column = 'title';
                            $text = require 'db_fetch_news.php';
                            echo htmlspecialchars($text);
                            ?>";
                        heading.appendChild(headingText);

                        top.appendChild(profile);
                        top.appendChild(split);
                        top.appendChild(heading);

                        // Main-Bereich
                        const main = document.createElement("div");
                        main.id = "main";                        

                        // Text-Bereich
                        const textDiv = document.createElement("div");
                        textDiv.id = "text";
                        const paragraph = document.createElement("p");
                        paragraph.textContent = "<?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);
                            $post_id = 1;
                            $column = 'text';
                            $text = require 'db_fetch_news.php';
                            echo htmlspecialchars($text);
                            ?>";
                        const link = document.createElement("a");
                        link.href = "/newsroom/news/index.php?post_id=1";
                        link.textContent = "Mehr lesen";

                        textDiv.appendChild(paragraph);
                        textDiv.appendChild(link);

                        if ("<?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);
                            $post_id = 1;
                            $column = 'img_url';
                            $text = require 'db_fetch_news.php';
                            echo htmlspecialchars($text);
                            ?>" != "") {
                            const image = document.createElement("img");
                            image.src = "data/img/<?php
                                ini_set('display_errors', 1);
                                error_reporting(E_ALL);
                                $post_id = 1;
                                $column = 'img_url';
                                $text = require 'db_fetch_news.php';
                                echo htmlspecialchars($text);
                                ?>";
                            main.appendChild(image);
                        }

                        main.appendChild(textDiv);

                        // Alles zusammenfügen
                        container.appendChild(top);
                        container.appendChild(main);

                        // In das Body einfügen
                        document.getElementById("news-holder").appendChild(container);
                    }

                    function createNewsElement2() {
                        // Container erstellen
                        const container = document.createElement("div");
                        container.id = "container";

                        // Top-Bereich
                        const top = document.createElement("div");
                        top.id = "top";

                        // Profil-Bereich
                        const profile = document.createElement("div");
                        profile.id = "profile";
                        const profileImg = document.createElement("img");
                        profileImg.src = "img/icons/profile_pic.png";

                        const profileText = document.createElement("div");
                        const profileName = document.createElement("h1");
                        profileName.innerHTML = "<b><?php
                            $column = 'author_id';
                            $post_id = 2;
                            $author_id = require 'db_fetch_news.php';
                            $column = 'first_name';
                            $first = require 'db_fetch_users.php';
                            $column = 'name';
                            $second = require 'db_fetch_users.php';
                            echo htmlspecialchars($first . ' ' . $second);
                        ?></b>";
                        const profileTeam = document.createElement("p");
                        profileTeam.textContent = "<?php
                            $column = 'author_id';
                            $post_id = 2;
                            $author_id = require 'db_fetch_news.php';
                            $column = 'role';
                            $text = require 'db_fetch_users.php';
                            echo htmlspecialchars($text);
                        ?>";

                        profileText.appendChild(profileName);
                        profileText.appendChild(profileTeam);
                        profile.appendChild(profileImg);
                        profile.appendChild(profileText);

                        // Trennlinie
                        const split = document.createElement("div");
                        split.id = "split";

                        // Überschrift
                        const heading = document.createElement("div");
                        heading.id = "heading";
                        const headingText = document.createElement("h1");
                        headingText.textContent = "<?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);
                            $post_id = 2;
                            $column = 'title';
                            $text = require 'db_fetch_news.php';
                            echo htmlspecialchars($text);
                            ?>";
                        heading.appendChild(headingText);

                        top.appendChild(profile);
                        top.appendChild(split);
                        top.appendChild(heading);

                        // Main-Bereich
                        const main = document.createElement("div");
                        main.id = "main";                        

                        // Text-Bereich
                        const textDiv = document.createElement("div");
                        textDiv.id = "text";
                        const paragraph = document.createElement("p");
                        paragraph.textContent = "<?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);
                            $post_id = 2;
                            $column = 'text';
                            $text = require 'db_fetch_news.php';
                            echo htmlspecialchars($text);
                            ?>";
                        const link = document.createElement("a");
                        link.href = "/newsroom/news/index.php?post_id=2";
                        link.textContent = "Mehr lesen";

                        textDiv.appendChild(paragraph);
                        textDiv.appendChild(link);

                        if ("<?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);
                            $post_id = 2;
                            $column = 'img_url';
                            $text = require 'db_fetch_news.php';
                            echo htmlspecialchars($text);
                            ?>" != "") {
                            const image = document.createElement("img");
                            image.src = "data/img/<?php
                                ini_set('display_errors', 1);
                                error_reporting(E_ALL);
                                $post_id = 2;
                                $column = 'img_url';
                                $text = require 'db_fetch_news.php';
                                echo htmlspecialchars($text);
                                ?>";
                            main.appendChild(image);
                        }

                        main.appendChild(textDiv);

                        // Alles zusammenfügen
                        container.appendChild(top);
                        container.appendChild(main);

                        // In das Body einfügen
                        document.getElementById("news-holder").appendChild(container);
                    }

                    function createNewsElement3() {
                        // Container erstellen
                        const container = document.createElement("div");
                        container.id = "container";

                        // Top-Bereich
                        const top = document.createElement("div");
                        top.id = "top";

                        // Profil-Bereich
                        const profile = document.createElement("div");
                        profile.id = "profile";
                        const profileImg = document.createElement("img");
                        profileImg.src = "img/icons/profile_pic.png";

                        const profileText = document.createElement("div");
                        const profileName = document.createElement("h1");
                        profileName.innerHTML = "<b><?php
                            $column = 'author_id';
                            $post_id = 3;
                            $author_id = require 'db_fetch_news.php';
                            $column = 'first_name';
                            $first = require 'db_fetch_users.php';
                            $column = 'name';
                            $second = require 'db_fetch_users.php';
                            echo htmlspecialchars($first . ' ' . $second);
                        ?></b>";
                        const profileTeam = document.createElement("p");
                        profileTeam.textContent = "<?php
                            $column = 'author_id';
                            $post_id = 3;
                            $author_id = require 'db_fetch_news.php';
                            $column = 'role';
                            $text = require 'db_fetch_users.php';
                            echo htmlspecialchars($text);
                        ?>";

                        profileText.appendChild(profileName);
                        profileText.appendChild(profileTeam);
                        profile.appendChild(profileImg);
                        profile.appendChild(profileText);

                        // Trennlinie
                        const split = document.createElement("div");
                        split.id = "split";

                        // Überschrift
                        const heading = document.createElement("div");
                        heading.id = "heading";
                        const headingText = document.createElement("h1");
                        headingText.textContent = "<?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);
                            $post_id = 3;
                            $column = 'title';
                            $text = require 'db_fetch_news.php';
                            echo htmlspecialchars($text);
                            ?>";
                        heading.appendChild(headingText);

                        top.appendChild(profile);
                        top.appendChild(split);
                        top.appendChild(heading);

                        // Main-Bereich
                        const main = document.createElement("div");
                        main.id = "main";                        

                        // Text-Bereich
                        const textDiv = document.createElement("div");
                        textDiv.id = "text";
                        const paragraph = document.createElement("p");
                        paragraph.textContent = "<?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);
                            $post_id = 3;
                            $column = 'text';
                            $text = require 'db_fetch_news.php';
                            echo htmlspecialchars($text);
                            ?>";
                        const link = document.createElement("a");
                        link.href = "/newsroom/news/index.php?post_id=3";
                        link.textContent = "Mehr lesen";

                        textDiv.appendChild(paragraph);
                        textDiv.appendChild(link);

                        if ("<?php
                            ini_set('display_errors', 1);
                            error_reporting(E_ALL);
                            $post_id = 3;
                            $column = 'img_url';
                            $text = require 'db_fetch_news.php';
                            echo htmlspecialchars($text);
                            ?>" != "") {
                            const image = document.createElement("img");
                            image.src = "data/img/<?php
                                ini_set('display_errors', 1);
                                error_reporting(E_ALL);
                                $post_id = 3;
                                $column = 'img_url';
                                $text = require 'db_fetch_news.php';
                                echo htmlspecialchars($text);
                                ?>";
                            main.appendChild(image);
                        }

                        main.appendChild(textDiv);

                        // Alles zusammenfügen
                        container.appendChild(top);
                        container.appendChild(main);

                        // In das Body einfügen
                        document.getElementById("news-holder").appendChild(container);
                    }
                </script>
            </div>

            <a href="/newsroom/">
                <div id="more">
                    <p>Alle Neuigkeiten lesen (Newsroom)</p>
                </div>
            </a>

        </section>

        <section id="fade-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#e0e8f1" fill-opacity="1"
                    d="M0,128L80,144C160,160,320,192,480,181.3C640,171,800,117,960,106.7C1120,96,1280,128,1360,144L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
                </path>
            </svg>
        </section>

        <section id="contact">
            <div id="title-line">
                <img src="img/icons/icon_contact.png">
                <div class="hline"></div>
                <div>
                    <h1>Kontakt</h1>
                    <p>& Social Media</p>
                </div>
            </div>
            <div id="box">
                <div>
                    <h1>Du hast eine Frage?</h1>
                    <p>info@bergen-treffen.de</p>
                    <p>support@bergen-treffen.de</p>
                </div>
                <div>
                    <h1>Du hast eine Idee, wie du uns weiterhelfen kannst?</h1>
                    <p>kontakt@bergen-treffen.de</p>
                </div>
            </div>
            <div id="problem">
                <h1>Bei Problemen kontaktiere uns bitte über unser <a href="./impressum/index.html">Impressum</a>
                    oder einer der folgenden E-Mail Adressen:</h1>
                <p>problem@bergen-treffen.de</p>
                <p>chefsache@bergen-treffen.de</p>
                <p>social-media@bergen-treffen.de (Bei Anfragen bezüglich Social Media)</p>
            </div>
            <div id="socials">
                <h1>Folge uns!</h1>
                <div></div>
                <a href="https://instagram.com/bergentreffen"><img src="img/icons/instagram.png"></a>
                <div></div>
                <a href="https://www.facebook.com/profile.php?id=61574681566933"><img src="img/icons/facebook.png"></a>
            </div>
        </section>

        <section id="fade-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#202020" fill-opacity="1"
                    d="M0,192L60,186.7C120,181,240,171,360,170.7C480,171,600,181,720,181.3C840,181,960,171,1080,170.7C1200,171,1320,181,1380,186.7L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
                </path>
            </svg>
        </section>
    </main>
    <footer id="footer">
        <section>
            <div>
                <h1><a href=""><b>Zurück zum Anfang</b></a></h1>
                <p><a href="./newsroom/">Newsroom</a></p>
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

        <div id="supporter">
            <h1>Vielen Dank an unsere Supporter!</h1>
            <div id="holder">
                <a href="https://www.cmn.de/"><img src="/img/supporter/supp-cmn.png"></a>
                <a href="https://www.meisterwerkstatt-hewer.de"><img src="/img/supporter/supp-hewer.jpg"></a>
                <a href="https://www.ikk-suedwest.de/"><img src="/img/supporter/supp-ikk.png"></a>
                <a href="https://www.kues-losheim.de/"><img src="/img/supporter/supp-kuss.jpg"></a>
                <a href="https://www.spkmw.de"><img src="/img/supporter/supp-sparkasse.png"></a>
                <a href=""><img src="/img/supporter/supp-taxi-martin.jpg"></a>
                <a href="https://www.facebook.com/lackierereiwollmann"><img src="/img/supporter/supp-wollmann.jpg"></a>
                <a href=""><img src="/img/supporter/supp-heizöl-röder.png"></a>
            </div>
        </div>

        <p id="copyright">© Bergen-Treffen e.V. 2025</p>

        <div id="circle">
            <img src="img/ressources/circle-footer.png">
        </div>
    </footer>
</body>

</html>