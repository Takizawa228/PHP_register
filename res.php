<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    
    <!-- place navbar here -->
  </header>
  <main>
  <?php
  session_start();
  require('connect.php');
  if(isset($_POST ['name']))
  {
    $name = $_POST['name'];
  $surname = $_POST['surname'];
  $sur = $_POST['patronymic'];
  $login = $_POST['login'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $md5 = md5('$password');
  
  $query = "INSERT INTO USER (name, surname, patronymic, login, email, password) VALUES ('$name','$surname','$sur','$login','$md5')";
  $result = mysqli_query($db, $query);

  if(!$result){
    echo "<div class='alert alert-danger'>Error</div>";
  }
  else{
    echo "<div class='alert alert-success'>Success</div>";
  }
  }
  
 ?>
  <form class="form-sign"method="POST">
        <label>Username</label>
        
        <input type="text" name="name" class="form-control" placeholder="User" pattern="^[А-Яа-яЁё\s]+$" Required>
        <input type="text" name="surname" class="form-control" placeholder="User2" pattern="^[А-Яа-яЁё\s]+$" Required>
        <input type="text" name="patronymic" class="form-control" placeholder="User3" pattern="^[А-Яа-яЁё\s]+$" Required>
        <input type="text" name="login" class="form-control" placeholder="User4"  Required>
        <input type="email" name="email" class="form-control" placeholder="User5"  Required>
        <input type="password" name="password" minlength="6" class="form-control" placeholder="User6" Required>
       
        <button type="submit">Рег</button>
      </div>
    </form>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <script>

  </script>
</body>

</html>