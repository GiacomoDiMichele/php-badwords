<?php
    $badword = $_GET['badword'];

    $censored_word = 'test censura parola php!';

    $asterisk_word = str_replace($badword, '***', $censored_word);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>
            la parola da censurare è
            <?php
                echo $badword
            ?>
        </h1>
        <h1>
            <?php
                echo $asterisk_word
            ?>
        </h1>
    </body>
</html>
