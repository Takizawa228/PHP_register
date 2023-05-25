<?php
    require_once('db.php'); //подключение бд к файлу
    $login = $_POST['login'];  // создаем переменную и заносим значение
    $password = $_POST['password']; // создаем переменную и заносим значение
    $pass = $_POST['pass']; // создаем переменную и заносим значение
    $email = $_POST['email']; // создаем переменную и заносим значение
    
    $sql = "INSERT INTO `user`(login,password,email) VALUES ('$login','$password','$email')"; //sql запрос для добавление записи в БД ковычки ставить как из phpadmin возле user нужно писать значени из бд

    $conn -> query($sql);
?>