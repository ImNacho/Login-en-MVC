<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador de usuarios</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vista/app/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body>

    <?php if(!empty($user)): ?>
      
      <br>Bienvenido <?= $user['username'] ?>
      <br>
      <br>
      <br>
      <a class="bg-red-700 px-12 py-3 text-white font-bold rounded-lg hover:bg-red-900" href="index.php?m=salir">Salir</a>
    <?php else: ?>
    <!--<h1>Por favor ingrese o registrese</h1>
    <div class="opciones">
      <a href="index.php?m=iniciar_sesion">Login</a>
    </div>
    <div class="opciones">
      <a href="index.php?m=registrar">Registrarse</a>
    </div>-->
    <div class="h-20"></div>
    <a class="rounded-full bg-blue-700 p-5 text-white" 
        href="index.php?m=registrar">
        Iniciar aplicacion
    </a>
    <?php endif; ?>
    
  </body>

</html>