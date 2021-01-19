<!DOCTYPE html>
<html lang="en">

<head>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vlaščovka | Registrace</title>
    <link rel="stylesheet" href="../../resourses/css/style.css">
    <link rel="shortcut icon" href="resourses/img/logo.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <?php
    include('../../resourses/php/header.php');
    ?>
    <section id="registration" class="container">
        <?php
        if (isset($_POST['regName']) && isset($_POST['regPassword']) && isset($_POST['regPasswordAgain'])) {
            if ($_POST['regPassword'] != $_POST['regPasswordAgain'])
                echo "<p>Hesla se neshodují</p>";
            else {
                $name = $_POST['regName'];
                $password = $_POST['regPassword'];

                // Založení účtu ...
            }
            echo "<p>Registrace proběhla úspěšně</p>";
        } else {
            echo "<p>Registrace selhala</p>";
        }
        ?>
    </section>
    <?php
    include('../../resourses/php/footer.php');
    ?>
</body>

</html>
<?php