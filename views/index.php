<?php
 include_once '../vendor/autoload.php';
    use app\models\User;
    use app\config\Database;

    Database::connect();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <main>
        <div>
            <a href="./login.php">login</a>
            <a href="./sign-up.php">signup</a>
        </div>
        <div class="py-6 px-8 border border-black  w-62 mx-auto text-center">
        <?php
        ?>
        </div>
    </main>
</body>
</html>