<?php
  require 'db.php';
  if(!empty($_POST['code']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])){
    if($_POST['code'] == $_GET['code']){
      $SQL = "UPDATE clientes SET password = :password WHERE email= :email";
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $records = $connection->prepare($SQL);
      $records->bindParam(':password', $password);
      $records->bindParam(':email', $_GET['email']);
      $records->execute();
      echo "<h2>Clave ingresada exitosamente, ya puede acceder a su cuenta</h2>";
    } else {
      echo "<h2>El codigo ingresado es invalido</h2>";
    }
  }
?>