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
   <?php
        if(isset($_POST['plec'])){
            @$_SESSION['plec'] = $_POST['plec'];
        }
        
        if(isset($_POST['wiek'])){
            @$_SESSION['wiek'] = $_POST['wiek'];
        }
   ?>
    <form method="post" >
        Plec: <input type="text" name="plec" value="<?php echo @$_SESSION['plec']; ?>"/><br/>
        Wiek: <input type="text" name="wiek" value="<?php echo @$_SESSION['wiek']; ?>"/><br/>
        <input type="submit" value="OK" /><br/>
   </form>
   <button class="btn btn-primary" onclick="location.href='page1.php'">poprzednia</button>
   <button class="btn btn-success" onclick="location.href=href='page3.php'">nastepna</button>
</body>
</html>