<?php
  session_start();
  require 'db.php';

  if(isset($_SESSION['id_user'])){
    $records = $connection->prepare('SELECT id, username, password FROM clientes WHERE id = :id');
    $records->bindParam(':id', $_SESSION['id_user']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;
    if(count($results) > 0){
      $user = $results;
    }
  }
?>