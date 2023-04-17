<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="">
        <label for="username">Login:</label>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Hasło:</label>
        <input type="password" id="password" name="password">
        <br>
        <input type="submit" value="Zaloguj">


        <?php
        $login = 'haslo';
        $haslo = 'maslo';

        if (isset($_POST['username']) && isset($_POST['password'])) {
            if ($_POST['username'] === $login && $_POST['password'] === $haslo) {
                echo 'Prawidłowy login lub hasło';
                exit;
            } else {
                echo 'Nieprawidłowy login lub hasło';
            }
        }
        ?>
    </form>
</body>

</html>
