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
    <form method="post" >
        Plec: <input type="text" name="plec" /><br/>
        Wiek: <input type="text" name="wiek" /><br/>
        <input type="submit" value="OK" /><br/>
   </form>
   <button onclick="location.href='page1.php'">poprzednia</button>
   <button onclick="location.href=href='page3.php'">nastepna</button>
   <?php
        @$_SESSION['plec'] = $_POST['plec'];
        @$_SESSION['wiek'] = $_POST['wiek'];
   ?>
</body>
</html>