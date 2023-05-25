<?php
session_start();
require('connect.php');
$login = $_POST['login'];
$password = $_POST['password'];
$md5 = md5($password);



?>
<form class="form-sign" method="POST">
        <label>Username</label>
        
        <input type="text" name="login" class="form-control" placeholder="User4" pattern="[A-Za-z]" Required>
        <input type="password" name="password" minlength="6" class="form-control" placeholder="User6" Required>
        
        <button type="submit">Рег</button>
      </div>
    </form>