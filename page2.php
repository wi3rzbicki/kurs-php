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
        if(isset($_POST['plec']) && isset($_POST['wiek'])){
            @$_SESSION['plec']  = $_POST['plec'];
            @$_SESSION['wiek']  = $_POST['wiek'];
            }
   ?>
    <form method="post" onsubmit="return validateForm();">
        Plec: <input type="text" class="form-control-sm" name="plec" id="plec" value="<?php echo @$_SESSION['plec']; ?>"/><br/>
        Wiek: <input type="text" class="form-control-sm" name="wiek" id="wiek" value="<?php echo @$_SESSION['wiek']; ?>"/><br/>
        <input type="submit" class="form-control-sm" value="OK" /><br/>
   </form>

    <?php
        if(empty($_POST['imie']) || empty($_POST['nazwisko'])){
                echo 'wypełnij oba pola<br>';
            }
    ?> 

   <button class="btn btn-primary" onclick="location.href='page1.php'">poprzednia</button>
   <button class="btn btn-success" onclick="location.href=href='page3.php'">nastepna</button>

    <script>
        function validateForm() {
            var imie = document.getElementById('imie').value;
            var nazwisko = document.getElementById('nazwisko').value;

            if(imie.trim() === '' || nazwisko.trim() === '') {
                alert('wypełnij oba pola');
            }
        }
    </script>

</body>
</html>