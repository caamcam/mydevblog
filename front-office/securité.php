<!DOCTYPE html>
<html>
    <head>
        <title>Sécurité</title>
        <meta charset="UTF-8">
    </head>
    <body>

        <main>
            <?php
                if (!isset($_POST['password']) || $_POST['password'] == "" || $_POST['login'] == "" || $_POST['password'] != "2020")
                    echo ("<a href='index.php?page=3'>Mauvais couple identifiant/mot de passe</a>");
                else {
                    session_start();
                    $_SESSION['id'] = $_POST['login'];
                    setcookie('id', $_POST['login']);
                    header("Location: index.php?page=1");
                }
            ?>
        </main>

    </body>
</html>