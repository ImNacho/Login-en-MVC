<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "usuarios";

  try {
    $connection = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  } catch (PDOException $e) {
    die("Connected failed: ".$e->getMessage());
  }
?>