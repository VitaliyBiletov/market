<!DOCTYPE html>
<?
$link = mysqli_connect('127.0.0.1:3306', 'root', '', 'site_db');


?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


    <link rel="stylesheet" href="css/style.css">


</head>

<body>

<form class='login-form' method="POST">
    <div class="flex-row logo">
        <h1>MeMedia</h1>
    </div>
    <div class="flex-row">
        <input type="text" name="name" id="name" class='lf--input' placeholder='Логин'>
    </div>
    <div class="flex-row">
        <input type="text" name="password" id="password" class='lf--input' placeholder='Пароль'>
    </div>
    <div class="flex-row">
        <input type="submit" name="go" value="Войти" class='lf--submit'>
    </div>
</form>
</body>
</html>

