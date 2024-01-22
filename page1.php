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
        if(isset($_POST['imie'])){
            @$_SESSION['imie'] = $_POST['imie'];
        }
        
        if(isset($_POST['nazwisko'])){
            @$_SESSION['nazwisko'] = $_POST['nazwisko'];
        }
   ?>
    <form method="post" >
        Imię: <input type="text" class="form-control-sm" name="imie" value="<?php echo @$_SESSION['imie']; ?>"/><br/>
        Nazwisko: <input type="text" class="form-control-sm" name="nazwisko" value="<?php echo @$_SESSION['nazwisko']; ?>"/><br/>
        <input type="submit" class="form-control-sm" value="OK" /><br/>
   </form>
   <button class="btn btn-primary" onclick="location.href='page3.php'">poprzednia</button>
   <button class="btn btn-success" onclick="location.href='page2.php'">nastepna</button>
</body>
</html>