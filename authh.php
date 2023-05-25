<?php
require_once('conne.php'); // эта строка подключает файл с БД
$login = $_POST['login']; // переменная в которой хранится информация
$password = $_POST['password']; // переменная в которой хранится информация
$md5 = md5($password);
if(empty($login) || empty($password))
{
    echo "Заполните пустые поля";
}
else
{
$sql = "SELECT * FROM `test4` WHERE login = '$login' AND password = '$md5'"; //сам запрос который добавляет пользователя в систему
$conn->query($sql); // отправка данных
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        echo "добро пожаловать" . $row['login'];
    }
    
}else{
    echo "нет такого аккаунта";
}
}
?>