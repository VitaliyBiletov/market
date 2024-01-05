<?php
$mysqli = new mysqli('127.0.0.1:3306', 'root', '', 'site_db');
$message = "";

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $req = "DELETE FROM `users` WHERE `users`.`id` = '$id'";
    echo $req;
    $result = $mysqli ->query($req);
    header('Location: http://localhost:63342/site/registration.php');
    echo 'Пользователь с id ' . $_GET['id'] . ' удален';
}

if (!empty($_POST['password']) and !empty($_POST['login'])) {
//    $user_id = uniqid('user_market');
    $login = $_POST['login'];
    $password = $_POST['password'];
    $result = $mysqli ->query("SELECT username FROM users WHERE username='$login'");
    $res2 = mysqli_fetch_assoc($result);
    if (!empty($res2)){
        $message = 'Пользователь с таким именем уже существует';
    } else {
        $query = "INSERT INTO users (username, password) VALUES ('$login','$password')";
        $res = $mysqli ->query($query);
        $message = 'Пользователь с именем ' . $login . ' успешно зарегистрирован';
    }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>

<body>
<h1>Регистрация нового пользователя</h1>
<form method="POST">
    <div>
        <input type="text" name="login" placeholder='Логин'>
    </div>
    <div>
        <input type="text" name="password" placeholder='Пароль'>
    </div>
    <div>
        <input type="submit" name="go" value="Создать">
    </div>
</form>
<div>
    <?
    echo $message;
    ?>
</div>
<div>
    <h2>Список пользаков</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Логин</th>
            <th>Пароль</th>
        </tr>
        <?
        $query = "SELECT * FROM users";
        $res = $mysqli ->query($query);
        while ($row = $res -> fetch_assoc()){
            echo "
            <tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['username'] . "</td>
                <td>" . $row['password'] . "</td>
                <td>
                    <a href='registration.php?id=". $row['id'] ."'>Удалить</a>
                </td>
            </tr>";
        }
        ?>
    </table>

</div>
</body>
</html>
