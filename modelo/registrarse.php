<?php
  require 'db.php';

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'PHPMailer-master/src/Exception.php';
  require 'PHPMailer-master/src/PHPMailer.php';
  require 'PHPMailer-master/src/SMTP.php';

  $message = '';

  if(
    !empty($_POST['id']) &&
    !empty($_POST['nombres']) &&
    !empty($_POST['apellidos']) &&
    !empty($_POST['username']) &&
    !empty($_POST['email']) && 
    !empty($_POST['password']) &&
    !empty($_POST['tipo']) &&
    !empty($_POST['programa'])
  ){
    $sql = "INSERT INTO clientes (
      id,
      nombres,
      apellidos,
      username,
      email,
      password,
      tipo,
      programa,
      hash,
      activo
    ) VALUES (
      :id,
      :nombres,
      :apellidos,
      :username,
      :email,
      :password,
      :tipo,
      :programa,
      :hash,
      0
    )";
    $stmt = $connection->prepare($sql);
    
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->bindParam(':nombres', $_POST['nombres']);
    $stmt->bindParam(':apellidos', $_POST['apellidos']);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':tipo', $_POST['tipo']);
    $stmt->bindParam(':programa', $_POST['programa']);
    $hash = hash_hmac('sha256', $_POST['id'], $_POST['password']);
    $stmt->bindParam(':hash', $hash);

    if($stmt->execute()){
      $message = "Revisa la bandeja de correo para activar tu cuenta";
      $mail = new PHPMailer(true);

      try {
          //Server settings
          $mail->SMTPDebug = 0;                    //Enable verbose debug output
          $mail->isSMTP();                                            //Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
          $mail->Username   = 'osoriopolo8@gmail.com';                     //SMTP username
          $mail->Password   = 'bftnjilnhcueiixb';                       //SMTP password
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
          $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

          //Recipients
          $mail->setFrom('osoriopolo8@gmail.com', 'CLIENTES');
          $mail->addAddress($_POST['email']);     //Add a recipient
          
          //Content
          $mail->isHTML(true);                                  //Set email format to HTML
          $mail->Subject = 'Clientes activacion';
          $mail->Body    = 'Link de ativacion <a href="http://localhost/clientes/index.php?m=activar&hash='.$hash.'&email='.$_POST['email'].'">Activar</a>';
          //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

          $mail->send();
          echo 'Revise su bandeja de correo para activar su cuenta';
      } catch (Exception $e) {
          echo "Ha ocurrido un error. Mailer Error: {$mail->ErrorInfo}";
      }
    } else {
      $message = "Ha ocurrido un error";
    }
  }
?>