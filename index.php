<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Galery</title>
        <link rel="shortcut icon" type="image/png" href="favicon.png"/>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="script/script.js" type="text/javascript"></script>
    </head>
    <body>
        <form action="addphoto.php" method="post" id="photo" enctype="multipart/form-data">
            <input type="file" name="photo"/>
            <input type="submit"/>
        </form>
        <div class="gallery">  </div>
    </body>
</html>
