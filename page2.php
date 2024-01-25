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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
</head>
<body>
   <?php
        if(isset($_POST['plec']) && isset($_POST['wiek'])){
            @$_SESSION['plec']  = $_POST['plec'];
            @$_SESSION['wiek']  = $_POST['wiek'];
            }
   ?>
    <form method="post" id="Form">
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
        $(document).ready(function(){
            $("#myForm").validate({
                rules: {
                    plec: {
                        required: true
                    },
                    wiek: {
                        required: true
                    }
                },
                messages: {
                    plec: "Proszę podać płeć",
                    wiek: "Proszę podać wiek"
                }
            });
        });
    </script>

</body>
</html>