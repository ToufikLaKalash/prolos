<?php
    $mysqli = new mysqli("localhost", "root", "", "news");
    if ($mysqli->connect_errno) {
        echo "Echec lors de la connexion à MySQL : " . $mysqli->connect_error;
    }
    $res = $mysqli->query("set names utf8");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Prolos</title>
        <link rel="stylesheet" type="text/css" href="css/main.css" />
    </head>
    <body>
        <header>
            <div>
                <img src="img/dorure1.png" alt="Décoration gauche" />
                <img src="img/prolo.png" alt="Logo" />
                <img src="img/dorure1.png" alt="Décoration droite" />
            </div>
            <div>
                <img src="img/slogan.png" alt="Slogan" />
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="forum.php">Forum</a></li>
                </ul>
            </div>
        </header>
        <main>
            <section>
                <?php
                    $res = $mysqli->query("SELECT COUNT(*) FROM news_table");
                    $nb_news = $res->fetch_assoc();
                    for($i = 1;$i<=$nb_news['COUNT(*)'];$i++){
                        $res = $mysqli->query("SELECT * FROM news_table WHERE id='".$i."'");
                        $valeurs = $res->fetch_assoc();
                        echo "<div class='news' style=\"background: url('".$valeurs['image']."') no-repeat; background-size: 100% 100%; background-color: #FFF;\">";
                        echo "";
                        echo "<h1>News n°".$valeurs['id']."</h1>";
                        echo "<p>".$valeurs['texte']."</p>";
                        echo "</div>";
                    }
                ?>
            </section>
        </main>
    </body>
</html>