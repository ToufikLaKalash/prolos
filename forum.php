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
                <form action="#" method="post" id="connexion">
                    <table>
                        <tr>
                            <td><label for="username">Pseudo</label></td>
                            <td><input type="text" name="username" placeholder="Votre pseudo" required /></td>
                        </tr>
                        <tr>
                            <td><label for="username">Mot de passe</label></td>
                            <td><input type="password" name="password" placeholder="Votre mot de passe" required /></td>
                        </tr>
                        <tr>
                            <td><button type="submit" id="connect">Se connecter</button></td>
                        </tr>
                    </table>
                </form>
                <form action="#" method="post" id="inscription">
                    <table>
                        <tr>
                            <td><label for="username">Pseudo</label></td>
                            <td><input type="text" name="username_ins" placeholder="Votre pseudo" required /></td>
                        </tr>
                        <tr>
                            <td><label for="username">Email</label></td>
                            <td><input type="email" name="email_ins" placeholder="Votre email" required /></td>
                        </tr>
                        <tr>
                            <td><label for="username">Mot de passe</label></td>
                            <td><input type="password" name="password_ins" placeholder="Votre mot de passe" required /></td>
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