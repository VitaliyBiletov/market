<?php
$name = "не определено";
$age = "не определен";
if(isset($_POST["name"])){

    $name = $_POST["name"];
}
if(isset($_POST["password"])){

    $age = $_POST["password"];
}
echo "Имя: $name <br> Возраст: $age";
?>