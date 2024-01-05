<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="logo.svg" type="image/x-icon">
  <title> MeMedia</title>
    <link rel='stylesheet' href='main1.css'>    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<style type="text/css">
   BODY { font: 15pt Arial, Helvetica, sans-serif; }
   #catalog A { color: white; }
   #catalog A:hover { color: #1fa0e2; }
   #catalog DIV {
    width: 266px; /* Ширина */
    margin: 50px 10px 150px 150px; /* Отступы */
    text-align: center; /* Выравнивание по центру */
    display: inline-block; /* Строчно-блочный элемент */
    vertical-align: top; /* Выравнивание по верхнему краю */
   }
   #catalog P { margin: 10px 5px; }
   #catalog SPAN { color: #ccc; font-size: 0.8em; } 
  </style>
<body>

<label for="nav-toggle" class="nav-toggle" onclick></label>
       <div class='container'>
        <div class='header-l'>
            <div class='header-n'>
                <div class="tur"> <p><a href="1.php"><img src="logo.svg"  alt="Пример" ><br></a></p>
            </div>
            <div class='nav'>
                 <a class='nav-i1' href="kino.php">Кино</a> 
                 <a class='nav-i2'href="game.php">Видеоигры</a>
                <a class='nav-i2'href="ceria.php">Сериалы</a>
             </div>
            </div>
           </div>
    </div>
<a class='predlog2'>СЕРИАЛЫ</a> 
<div class='catalog'>
<?php
	$db_host='localhost';
	$db_name='memedia'; 
	$db_user='root'; 
	$db_pass='';
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); 
	$mysqli->set_charset("utf8mb4"); 

$result = $mysqli->query("select * from tovar where cat='ceria'"); 
	   while($row = $result->fetch_assoc())
            { echo"<div class='card'>		
			<img class='img' src='".$row['photo']."'>				
			<div class='title'>".$row['nazv']."</div>
			<div class='sub'>".$row['opis']."</div>
			<p><button class='card button'>Подробнее</button></p>
			
		      </div>	";
           
}

?>
<div class="podval">
            
    <div class="podval_block_icon">
        <img class="Logo_podval" src="logo.svg">

    </div> 
    
    <div class="osnovnie_ssilki_podval_block">
        <div class="podval_podpis">Основные ссылки</div>
        <a href="#" class="ssilki_podval">О компании</a><br>
        <a href="#" class="ssilki_podval">Помощь</a><br>
        <a href="#" class="ssilki_podval">Частые вопросы</a><br>
        <a href="#" class="ssilki_podval">Прочее</a><br> 
    </div>
    
    <div class="kateg_podval_block">
        <div class="podval_podpis">Тех. поддержка</div>
        <a href="#" class="ssilki_podval">8 (800) 555 28 52</a><br>
             <a class="proch"> 10.00 до 17.00 с понедельника по пятницу </a><br>
    </div>
    
    <div class="polesn_ssilki_podval_block">
        <div class="podval_podpis">Пишите нам</div>
        <a href="#" class="ssilki_podval">help@memedia.ru</a><br>
    </div>
    
    <div class="soc-seti_podval_block">
        <div class="podval_podpis">Соц-сети</div>
        <a href="#" class="ssilki_podval"><img class="image_ssilki" src="vk.png" width="25" >Вконтакте</a><br>
        <a href="#" class="ssilki_podval"><img class="image_ssilki" src="instagram.png" width="24">Instagram</a><br>
        <a href="#" class="ssilki_podval"><img class="image_ssilki" src="twitter.png" width="24">Twitter</a><br>
    </div>

</div>

<div class="podpodval">
    <div class="MeMedia">MeMedia © 2023. Все права защищены</div>
</div>
    </div>
     </body>