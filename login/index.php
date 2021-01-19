<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vlaščovka | Přihlášení</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../resourses/css/style.css">
    <link rel="shortcut icon" href="resourses/img/logo.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <?php
    include('../resourses/php/header.php');
    ?>
    <section id="main" class="container">
        <div id="login">
            <h1 class="title">Přihlášení:</h1>
            <form action="login/php/login.php" class="form" method="POST">
                <label>Přihlašovací jméno</label>
                <input type="text" name="logName" id="logName" autocomplete="off">
                <label>Heslo</label>
                <input type="password" name="logPassword" id="logPassword" name="password">
                <input type="submit" value="Přihlásit">
                <a href="#register">Nemáte účet? Můžete se zaregistrovat!</a>
            </form>
        </div>
        <div id="info">
            <div class="icons-box">
                <div class="icon">
                    <div class="img-box">
                        <img src="login/img/chatting.png" alt="icon">
                    </div>
                    <p class="description">
                        Chatting
                    </p>
                </div>
                <div class="icon">
                    <div class="img-box">
                        <img src="login/img/friends.png" alt="icon">
                    </div>
                    <p class="description">
                        Friend list
                    </p>
                </div>
                <div class="icon">
                    <div class="img-box">
                        <img src="login/img/files.png" alt="icon">
                    </div>
                    <p class="description">
                        File sharing
                    </p>
                </div>
            </div>
            <h2 class="title">
                Co je Vlaščovka?
            </h2>
            <p class="description">
                Sociální síť Vlaščovka umožňuje po registraci vytvořit a upravit vlastní profil, kde si následně můžetě přidávat další uživatele do svého listu, následně s nimi chatovat. Bude zde i možnost sdílet soubory a obrázky. Bude zde i možnost založení skupin.
            </p>
        </div>
        <div id="register">
            <h1 class="title">Registrace:</h1>
            <form action="login/php/register.php" class="form" method="POST">
                <label>Přihlašovací jméno</label>
                <input type="text" name="regName" id="regName" autocomplete="off">
                <label>Heslo</label>
                <input type="password" name="regPassword" id="regPassword" name="password">
                <label>Heslo znovu</label>
                <input type="password" name="regPasswordAgain" id="regPasswordAgain" name="password">
                <input type="submit" value="Registrovat">
                <a href="#login">Už máte účet? Přihlaste se!</a>
            </form>
        </div>
    </section>
    <?php
    include('../resourses/php/footer.php');
    ?>
    <script src="resourses/js/app.js"></script>
    <script src="login/js/app.js"></script>
</body>

</html>