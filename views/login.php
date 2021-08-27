<?php
include_once "../vendor/autoload.php";

use app\config\Database;

    Database::connect();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        User::create($_POST);
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<main>
    <form action="login.php" method="POST" class="p-6">
        <div>
            <label  for="first_name">first name</label>
            <input name="first_name"  type="text" id="first_name">
        </div>

        <div>
            <label for="last_name">last name</label>
            <input name="last_name" type="text" id="last_name">
        </div>

        <div>
            <label for="username">username</label>
            <input name="username" type="text" id="username">
        </div>

        <div>
            <label for="password">password</label>
            <input name="password" type="password" id="password">
        </div>
        <div>
            <button type="submit"> submit the user</button>
        </div>
    </form>
</main>
</body>
</html>