<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <button class="btn btn-primary" onclick="location.href=href='page2.php'">poprzednia</button>
   <button class="btn btn-success" onclick="location.href=href='page1.php'">nastepna</button>
   <?php
        echo '<br>'.$_SESSION['imie'].'<br>'.$_SESSION['nazwisko'].'<br>'.$_SESSION['plec'].'<br>'.$_SESSION['wiek'].'<br>';
   ?>
</body>
</html>