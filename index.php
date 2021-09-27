<?php
header("Content-Type:text/html;charset=UTF8");
mysql_query("SET NAMES UTF8");
mysql_query("SET CHARACTER SET UTF8");
include 'configPHP.php';
include 'function.php';

if(filter_input(INPUT_POST, 'param')) {
	$id = json_decode(filter_input(INPUT_POST, 'param'));
	$row = get_event($id);
	echo json_encode($row);
	exit();
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Мероприятия ППОС</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style1.css" type="text/css" rel="stylesheet" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="script1.js"></script>
    </head>
    <body>
        <header>
            <div><img src="ppos.png" alt="logo" align="left" height="60"/></div>
            <div><a href="https://vk.com/studiogos"><img src="photo.png" alt="icon1" align="left" height="60"/> Фото- и видеоотчёты</a></div>
            <div><a href="http://yourplus.ru/irk/"><img src="plus.png" alt="icon2" align="left" height="60"/> Портал "Твой Плюс"</a></div>
            <div><a href="https://isu.ru/ru/index.html"><img src="logo.png" alt="icon3" align="left" height="60"/> Сайт ИГУ</a></div>
            <div><a href="URL"><img src="login.png" alt="icon4" align="left" height="60"/> Вход</a></div>
            <div id="hello"><a id="test">Нажми меня!</a></div><!--Блок для проверки запроса-->
        </header>
        <table id="calendar2">
            <thead>
                <tr><td>◄<td colspan="5"><td>►
                <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
            <tbody>
        </table>
    </body>
</html>
