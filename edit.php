<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTube</title>
    <link rel="stylesheet" href="edit-page.css">
    <script src="main.js"></script>
</head>
<body>
    <div id="baner">
    <a href="main.php"><div id="brand"></div></a>
        <span id="upload">Edycja</span>

    </div>
    <div id="left_list">
        <div id="menu">
            <a href="add.php"><div id="d1"></div></a>
            <a href="edit.php"><div id="d2"></div></a>
            <a href="request.php"><div id="d3"></div></a>
            <a href="contact.php"><div id="d4"></div></a>
        </div>
    </div>
    <div id="container">
    <div id="add_from">
        <form method="post">
            <input type="text" name="title" id="inp1" placeholder="Tytuł..."><br>
            <textarea name="desc" placeholder="Opis..."></textarea><br>
            <input type="submit" name="btn" value="Zmień">
        </form>
    </div>

    <?php
    if(isset($_GET['id']) && is_numeric($_GET['id']))
    {
    $id=$_GET['id'];
    require('update-values.php');
    }
    ?>
    </div>
</body>
</html>