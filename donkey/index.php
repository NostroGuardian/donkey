<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/donkey.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <title>Обзови ишака</title>
</head>
<body>

    <div class="logo">
        <p class="logo1">Обзови</p>
        <img src="img/donkey.png" alt="donkey">
        <p class="logo2">Ишака</p>
    </div>

    <div class="main">
        <p><?php require('api/api.php'); ?></p>
    </div>

    <div class="btn">Обозвать</div>

    <div class="copy">© nostro-development.ru</div>

    <script src="js/script.js"></script>
</body>
</html>