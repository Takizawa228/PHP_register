<?php
require_once('conne.php'); // эта строка подключает файл с БД
 $login = $_POST['login']; // переменная в которой хранится информация
 $password = $_POST['password']; // переменная в которой хранится информация
 $email = $_POST['email']; // переменная в которой хранится информация
$md5 = md5($password);
if(empty($login) || empty($password) || empty($email)){
    echo "Заполните пустые поля";
}
else
{
    
    
$sql = "INSERT INTO `test4` (login,password,email) VALUES('$login','$md5','$email')"; // запрос на поиск пользователя

if ($conn->query($sql) === TRUE) {
    echo"успешная регистрация";
// отправка запроса 
}
else {
    echo "Ошибка";
}
}
?>