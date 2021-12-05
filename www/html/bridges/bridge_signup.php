<?php





require('./backendValidation/signup.php');
require_once('./db/globals.php');
$salt = bin2hex(openssl_random_pseudo_bytes(50));
$hashed = hash($algo, $_POST['user_password'] . $salt . $peberstring);
try {
  require_once($_SERVER['DOCUMENT_ROOT'] . '/db/db.php');
  $q = $db->prepare("INSERT INTO `users` VALUES ( :user_uuid, :user_firstname, :user_lastname, :user_email, :user_phone, :user_password, :user_image, :user_salt, :user_login_timestamp, :user_login_attempts, :user_status)");
  $q->bindValue(':user_uuid', bin2hex(random_bytes(16)));
  $q->bindValue(':user_firstname', 'deter');
  $q->bindValue(':user_lastname', 'henrikke');
  $q->bindValue(':user_email', $_POST['user_email']);
  $q->bindValue(':user_phone', '2');
  $q->bindValue(':user_password', $hashed);
  $q->bindValue(':user_image', 'default-img.png');
  $q->bindValue(':user_salt', $salt);
  $q->bindValue(':user_login_timestamp', 0);
  $q->bindValue(':user_login_attempts', 0);
  $q->bindValue(':user_status', 1);
  $q->execute();


  header("Location: /login");
  echo 'her';
  exit;
} catch (PDOException $ex) {

  /*   $ex_code =  $ex->getCode();
  if ($ex_code == "23000") {
    $error_message = 'The email you entered is already in use.';
    header("Location: /signup/error/$error_message");
    exit();
  } */
  echo $ex;
}
