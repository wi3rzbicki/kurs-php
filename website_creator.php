<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        tytuł <input type="text" name="title" /><br/>
        treść <input type="text" name="content" /><br/>
        opis <input type="text" name="description" /><br/>
        <input type="submit" value="STWÓRZ"/><br/>
   </form>

    <?php
        function create(){
            @$title = $_POST['title'];
            @$content = $_POST['content'];
            @$description = $_POST['description'];
            $file = fopen('index.html','w');
            $site = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'.@$title.'</title>
            </head>
            <body>
                <h1>'.@$content.'</h1>
                <p>'.@$description.'</p>
            </body>
            </html>';
            fwrite($file, $site);
            fclose($file);
        }
        create();
    ?>
    <a href='index.html'>sprawdz</a>
</body>
</html>