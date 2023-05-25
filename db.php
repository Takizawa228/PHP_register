<?php

$servername = 'localhost'; //сервер который выдали на демо
$username = 'root'; // логин от бд
$password = ''; // пароль от бд
$dbname = 'register'; // название созданой бд

$conn = mysqli_connect($servername, $username, $password, $dbname); // строка подключения к бд 

if(!$conn)  //проверка на работу бд
{
    die('ошибка: '. mysqli_connect_error());
}
else
{
    'успех';  //можно подписать echo
}
?>