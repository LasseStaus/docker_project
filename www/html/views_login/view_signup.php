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


<main class="main_login_signup">


  <div>
    <h1>Sign up</h1>
    <div>Create a new account</div>
  </div>

  <form action="/signup" name="signup_form" method="POST" onsubmit="return validate()">
    <?php
    require_once('./components/component_errormsg.php');
    require_once('./components/component_succcessmsg.php');
    ?>
    <?= set_csrf() ?>

    <div class="form-group">
      <h5 id="email-txt">Email</h5>
      <input onclick="clear_validate_error()" type="text" name="user_email" data-validate="email" data-min="1" data-max="50" id="logemail" autocomplete="off">
      <span class="error-message">Please provide a valid email</span>
      <i class="input-icon uil uil-at"></i>
    </div>

    <div class="form-group">
      <h5 id="pword-txt">Password</h5>
      <input onclick="clear_validate_error()" type="password" name="user_password" data-validate="str" data-min="4" data-max="50" id="logpass" autocomplete="on">
      <span class="error-message">Please provide a valid password | 8-50 characters</span>
      <i class="input-icon uil uil-lock-alt"></i>
    </div>
    <div class="form-group">
      <h5 id="pword-txt">Password</h5>
      <input onclick="clear_validate_error()" type="password" name="user_confirm_password" data-validate="str" data-min="4" data-max="50" id="logpass" autocomplete="on">
      <span class="error-message">Please provide a valid password | 8-50 characters</span>
      <i class="input-icon uil uil-lock-alt"></i>
    </div>
    <button type="submit" class="button large margin">Signup</button>


  </form>

  <div class="btn-position">

    <a href=" /login" class="link">Go to Login</a>

  </div>

</main>
<script src="/js/validator.js"></script>

</body>

</html>
