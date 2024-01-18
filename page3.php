<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <button onclick="location.href=href='page2.php'">poprzednia</button>
   <button onclick="location.href=href='page1.php'">nastepna</button>
   <?php
        echo '<br>'.$_SESSION['imie'].'<br>'.$_SESSION['nazwisko'].'<br>'.$_SESSION['plec'].'<br>'.$_SESSION['wiek'].'<br>';
   ?>
</body>
</html>