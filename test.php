<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="ress.php" method="post">
        <input type="text" name="login" placeholder="login">
        <input type="text" name="password" placeholder="password">
        <input type="text" name="email" placeholder="email">
        <button type="submit">регистрация</button>
    </form>
    <form action="authh.php" method="post">
        <input type="text" name="login" placeholder="login">
        <input type="text" name="password" placeholder="password">
        <button type="submit">вход</button>
    </form>

    <div class="wrapper">
  <button class="js-plus-btn" type="button">+</button>
  <input id="number-diet" class="js-number" type="number" name="number" value="1" min="1">
  <button class="js-minus-btn" type="button">-</button>
</div>
<div class="wrapper">
  <button class="js-plus-btn" type="button">+</button>
  <input id="number-diet" class="js-number" type="number" name="number" value="1" min="1">
  <button class="js-minus-btn" type="button">-</button>
</div>
</body>
<script>
    function countFunc(count) {
  var btnPlus = count.querySelector('.js-plus-btn');
  var btnMinus = count.querySelector('.js-minus-btn');
  var field = count.querySelector('.js-number');
  var fieldValue = parseFloat(field.value, 10);

  btnMinus.addEventListener('click', function() {
    if (fieldValue > 1) {
      fieldValue--;
      field.value = fieldValue;
    } else {
      return 1;
    }
  });
  btnPlus.addEventListener('click', function() {
    fieldValue++;
    field.value = fieldValue;
  });

}
var counts = document.querySelectorAll('.wrapper');
counts.forEach(countFunc);
</script>

<!-- <script>
    let user =prompt("Введите логин", '');
    let password =prompt("Введите пароль", '');
    if (user === "admin" && password === "admin1")
    {
        window.location.href = "au.php";
    } else {
        alert("Неверный пароль!");
    }

</script> -->
<!-- https://skillbox.ru/media/code/kak_sozdat_adminku_dlya_sayta_na_php_s_nulya/ -->
</html>