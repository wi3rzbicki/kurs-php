<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <form action="zamowienia.php" method="post">
    Liczba zamawianych koszulek: <input type="text" name="koszulki" size=3 maxsize=3/>
    Liczba zamawianych spodni: <input type="text" name="spodnie" size=3 maxsize=3/>
    Liczba zamawianych czapek: <input type="text" name="czapki" size=3 maxsize=3/>
    Liczba zamawianych butów: <input type="text" name="buty" size=3 maxsize=3/>
    <input type="submit" value="złóż zamówienie"/>
    </form>
    <form action="test.php" method="post">
        <input type="text" name="raz"/>
        <input type="text" name="dwa"/>
        <input type="text" name="trzy"/>
        <input type="submit" value="wyświetl"/>
    </form>
</body>
</html>