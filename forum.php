<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "usersdb";

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
        <meta charset="utf-8" />
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
                <form action="#" method="POST" id="connexion">
                    <table>
                        <tr>
                            <td><label for="username">Pseudo</label></td>
                            <td><input id="username" type="text" name="username" placeholder="Votre pseudo" required /></td>
                        </tr>
                        <tr>
                            <td><label for="password">Mot de passe</label></td>
                            <td><input id="password" type="password" name="password" placeholder="Votre mot de passe" required /></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email</label></td>
                            <td><input id="email" type="email" name="email" placeholder="Votre email" required /></td>
                        </tr>
                        <tr>
                            <td><button type="submit" id="connect">Se connecter</button></td>
                        </tr>
                    </table>
                </form>
                <form action="#" method="POST" id="inscription">
                    <table>
                        <tr>
                            <td><label for="username_ins">Pseudo</label></td>
                            <td><input id="username_ins" type="text" name="username_ins" placeholder="Votre pseudo" required /></td>
                        </tr>
                        <tr>
                            <td><label for="email_ins">Email</label></td>
                            <td><input id="email_ins" type="email" name="email_ins" placeholder="Votre email" required /></td>
                        </tr>
                        <tr>
                            <td><label for="password_ins">Mot de passe</label></td>
                            <td><input id="password_ins" type="password" name="password_ins" placeholder="Votre mot de passe" required /></td>
                        </tr>
                        <tr>
                            <td><button type="submit" id="inscript">S'inscrire</button></td>
                        </tr>
                    </table>
                </form>
            </section>
        </main>
    </body>
</html>

<?php
if(isset($_POST['username'])){
   $username = $_POST['username']; 
}

if(isset($_POST['password'])){
   $password = $_POST['password']; 
}

if(isset($_POST['email'])){
   $email = $_POST['email']; 
}

if(isset($_POST['username_ins'])){
   $username_ins = $_POST['username_ins']; 
}

if(isset($_POST['password_ins'])){
   $password_ins = $_POST['password_ins']; 
}

if(isset($_POST['email_ins'])){
   $email_ins = $_POST['email_ins']; 
}

$res = $conn->query("SELECT * from users WHERE username='".$username."';");
$valeur = $res->fetch_assoc();
if($valeur['password'] === $password && $valeur['email'] === $email){
    echo "Co réussie";
}else{
    echo "Co ratée";
}

?>