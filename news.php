<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "newsdb";

    // On crée la connexion au serveur de base de données
    $conn = new mysqli($servername, $username, $password, $dbname);

    // On vérifie que ça a marché
    if ($conn->connect_error) {
        die("La connexion a échouée: " . $conn->connect_error);
    }
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
                    $res = $conn->query('SELECT COUNT(*) FROM news;');
                    $nb_news = $res->fetch_assoc();
                    for($i = 1;$i<=$nb_news['COUNT(*)'];$i++){
                        $res = $conn->query("SELECT * FROM news WHERE id='".$i."'");
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