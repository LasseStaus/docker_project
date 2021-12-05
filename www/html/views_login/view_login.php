<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/app.css">

  <title>APP</title>
</head>

<body>

<?php


?>

  <main class="main_login_signup">
    <div>
      <h1>Log in to your account</h1>
    </div>
    <form action="/login" method="POST" onsubmit="return validate()">
      <?php
      require_once('./components/component_errormsg.php');
require_once('./components/component_succcessmsg.php');
      ?>

      <?= set_csrf() ?>

      <div class="form-group">
        <h5>Email</h5>
        <input onclick="clear_validate_error()" data-validate="email" type="email" name="user_email" autocomplete="on">
        <span class="error-message">Please provide a valid email</span>

      </div>
      <div class="form-group ">
        <h5></h5>
        <input onclick="clear_validate_error()" maxlength="50" data-validate="str" data-min="4" data-max="50" type="password" name="user_password" autocomplete="on">
        <span class="error-message">Please provide a valid password | 8-50 characters</span>

      </div>
      <button type="submit" class="button large margin">Login</button>
    </form>

    <div class="btn-position">
      <a href=" /signup" class="link">Go to signup</a>
    </div>

    </div>

  </main>

  <script src="/js/validator.js"></script>

</body>

</html>
