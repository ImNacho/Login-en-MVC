<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recuperar contraseña</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="vista/app/css/style.css">
</head>
<body>
  <?php include 'partials/header.php' ?>
  <form action="" method="post">
    <input type="text" name="code" placeholder="Código">
    <input type="password" name="password" placeholder="Ingresa nueva contraseña">
    <input type="password" name="confirm_password" placeholder="Ingresa nuevamente la contraseña">
    <input type="submit" value="Ir">
  </form>
  <a href="/clientes">Volver a Inicio</a>
</body>
</html>