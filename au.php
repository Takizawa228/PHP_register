<?php
require_once('db.php');

$login = $_POST['login'];
$password = $_POST['password'];

if(empty($login) || empty($password))
{
    echo "Заполните поля";
}
else
{
    $sql = "SELECT * FROM `user` WHERE login = '$login' AND password = '$password'"; //sql запрос поиска записи в БД ковычки ставить как из phpadmin
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            echo "добро пожаловать" . $row['login'];
        }
    }
    else
    {
        echo "Такого нет";
    }
}

?>