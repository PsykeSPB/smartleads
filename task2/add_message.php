<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

$responce = "";

  
  
  if(!isset($_POST['name']) {
  
    $responce = "Ошибка, имя не заполнено";
    echo $responce;
    die($responce);
    
  } elseif {
  
    $name = $_POST['name'];
  
    if (!preg_match("/^[а-яА-Яa-zA-Z ]*$/",$name)) {
      $responce = "Имя содержит недопустимые символы";
      echo $responce;
      die($responce);
    }
    
    if (!preg_match(".{3,}",$name)) {
      $responce = "Имя должно содеражать больше трех символов";
      echo $responce;
      die($responce);
    }
    
    if (!preg_match(".{,25}",$name)) {
      $responce = "Имя не должно превышать 25 символов";
      echo $responce;
      die($responce);
    }
  
  }
  
  
  
  if(!isset($_POST['email']) {
  
    $responce = "Ошибка, email не заполнен";
    echo $responce;
    die($responce);    
    
  } elseif {
    
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/@.+\./', $email) ) {
      $responce = "Email заполнен некорректно";
      echo $responce;
      die($responce);       
    }
    
  }
  
  
  
  if(!isset($_POST['message']) {
  
    $responce = "Ошибка, отстутствует текст сообщения";
    echo $responce;
    die($responce);  
    
  } elseif {
  
    $message = $_POST['message'];
  
  }
  
  
  // Post data ok, lets process it
  $host = '127.0.0.1';
  $db   = 'test';
  $user = 'root';
  $pass = 'password';
  $charset = 'utf8';

  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";  
  $opt = [
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ];
  
  
  
  try {
  
    $pdo = new PDO($dsn, $user, $pass, $opt); 
    
  } catch (PDOException $e) {
  
    $responce = "Подключение к базе данных не удалось";
    echo $responce;
    die($responce);
    
  }
  
  
  
  try {
  
    $pquery = $pdo -> prepare("INSERT INTO messages(name, email, message) VALUES(:name, :email, :message)");
    $pquery -> execute([
      'name' => $name,
      'email' => $email,
      'message' => $message,
    ]);
    
    $pdo->commit();
    
  } catch {
  
    $pdo->rollBack();
    $responce = "Не удалось внести запись";
    echo $responce;
    die($responce);
    
  }  
  
  $responce = "Сообщение успешно передано";
  echo $responce;
}

?>
