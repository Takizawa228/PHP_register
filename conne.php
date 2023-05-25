<?php
// этот код отвечает за подключение к бд 
$servername = 'localhost'; // переменная сервера
$nameuser = 'root'; // переменная пользователя 
$passworduser = ''; // переменная пароля
$dbname = 'test2'; // переменная бд которой создали

$conn = mysqli_connect($servername,$nameuser,$passworduser,$dbname); // это строка подключение к БД
// проверка на работу бд
if (!$conn)
{
    die("нет соединения");
}
else
{
    "соединие есть";
}
?>