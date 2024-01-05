<?php
$link = mysqli_connect('127.0.0.1:3306', 'root', '', 'site_db');
$query = "INSERT INTO `users` (`id`, `username`, `password`) VALUES ('1', 'admin', 'admin');";
$res = mysqli_query($link, $query);
$users = mysqli_fetch_assoc($res);
echo 'Пользователь: ' . htmlspecialchars($users['username']) . "<br>";
echo 'Пароль: ' . htmlspecialchars($users['password']);