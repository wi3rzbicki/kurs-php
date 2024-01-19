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
   <?php
        if(isset($_POST['imie'])){
            @$_SESSION['imie'] = $_POST['imie'];
        }
        
        if(isset($_POST['nazwisko'])){
            @$_SESSION['nazwisko'] = $_POST['nazwisko'];
        }
   ?>
    <form method="post" >
        Imię: <input type="text" name="imie" value="<?php echo @$_SESSION['imie']; ?>"/><br/>
        Nazwisko: <input type="text" name="nazwisko" value="<?php echo @$_SESSION['nazwisko']; ?>"/><br/>
        <input type="submit" value="OK" /><br/>
   </form>
   <button onclick="location.href='page3.php'">poprzednia</button>
   <button onclick="location.href='page2.php'">nastepna</button>
</body>
</html>