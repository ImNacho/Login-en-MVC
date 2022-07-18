<?php
require 'db.php';

if(isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verificar datos
    $sql = "SELECT hash, activo FROM clientes WHERE hash = :hash AND activo = 0"; 
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':hash', $_GET['hash']);
    /*  $match->$connection->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $match->execute(array(':hash' => $hash, ':activo' => 0));
    $res = $match->fetchAll(); */
    
    if($stmt->execute() > 0){
        $sql = "UPDATE clientes SET activo='1' WHERE hash = :hash AND activo= 0 ";
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':hash', $_GET['hash']);
        $stmt->execute();
        // Hay una coincidencia, activar la cuenta
        //mysqli_query("UPDATE cliente SET activo='1' WHERE email_clie='".$email."' AND hash_='".$hash."' AND activo='0'") or die(mysqli_error());
        echo '<div class="statusmsg">SU CUENTA HA SIDO ACTIVADA...</div>';
    }else{
        // No hay coincidencias
        echo '<div class="statusmsg">La URL es inválida o ya has activado tu cuenta.</div>';
    } 
}else{
    // Intento nó válido (ya sea porque se ingresa sin tener el hash o porque la cuenta ya ha sido registrada)
    echo '<div class="statusmsg">Intento inválido, por favor revisa el mensaje que enviamos correo electrónico</div>';
}
?>