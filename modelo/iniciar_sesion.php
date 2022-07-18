<?php 

  session_start();

  if(isset($_SESSION['id_user'])){
    header('Location: /clientes');
  }

  require 'db.php';
  if(!empty($_POST['email']) && !empty($_POST['password'])){
    $records = $connection->prepare('SELECT id, email, password, activo FROM clientes WHERE email=:email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if(
      is_countable($results) > 0 && 
      password_verify($_POST['password'], $results['password']) && 
      $results['activo'] == 1
    ){
      $_SESSION['id_user'] = $results['id'];
      header('Location: /clientes');
    } else {
      $message = 'Usuario o contraseña inválida';
    }
  }
?>