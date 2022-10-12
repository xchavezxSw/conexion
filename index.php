
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
$conn = mysqli_connect("localhost", "root", "Oracle50", "conexion");
if (isset($_POST["user"]))
{
$usuario=$_POST["user"];
$contrasena=$_POST["password"];
$sql = "select count(*) ,role from users where trim(email)=trim('$usuario') and trim(password)=trim('$contrasena') group by role;";

        $result = mysqli_query($conn, $sql);
        echo mysqli_result($resul);
        if (mysqli_num_rows($result) === 1) {
        setcookie('userID', $usuario);
        setcookie('rol', $row[1]);

 }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="https://conexion-hr.com/wp-content/uploads/2022/04/conexion-hr-favicon.png" sizes="32x32">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-signin-client_id" content="1092175970858-c28h8pkfhfulrniq8s9pqiv61g320svg.apps.googleusercontent.com">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <link rel="stylesheet" href="./css/style.css">
  <title>Conexion Capp 3.0</title>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body class="body">
  <header>
    <nav class="">
      <div>
        <div>
          <a href="index.html"><img class="classlogo" src="https://conexion-hr.com/wp-content/uploads/2022/01/conexion-hr-w-bb-300x47.png" alt="logo"></a>
        </div>
      </div>
    </nav>
  </header>
  <main>

    <div class="formInicioSesion" id="form" method="" >
      <h2 class="titleForm">Iniciar sesión</h2>
       <form method="post" action="index.php">
      <label class="labelForm" for="user">Usuario</label><br>
      <input name="user" class="inputForm" type="text" id="user"><br>
      <label class="labelForm" for="password">Contraseña</label><br>
      <input name="password" class="inputForm" type="password" id="password"><br>
      <button type="submit" class="sendForm" id="send"> Ingresar </button>
       </form>
    </div>
  </main>
  <footer class="footer">
    <p style="color: white; text-align:center ">2022 ConexionHR sistema </p>
  </footer>

  <script src="./js/login.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>

</body>
</html>
