<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/router.php');

get('/', function () {
  require_once($_SERVER['DOCUMENT_ROOT'] . '/views_app/view_index.php');
});


get('/index', function () {

  require_once($_SERVER['DOCUMENT_ROOT'] . '/views_app/view_index.php');
});


get('/login', function () {
  require_once($_SERVER['DOCUMENT_ROOT'] . '/views_login/view_login.php');
});

get('/login/error/:message', 'render_login_error');
function render_login_error($message)
{
  $error_message = $message;
  require_once(__DIR__ . '/views_login/view_login.php');
  exit();
}
get('/login/success/:message', 'render_login_success');
function render_login_success($success_message)
{
  $success_message = $success_message;
  require_once(__DIR__ . '/views_login/view_login.php');
  exit();
}
post('/login', function () {



  require_once($_SERVER['DOCUMENT_ROOT'] . '/bridges/bridge_login.php');
});



// #########################################################
// ################### SIGNUP ##############################
// #########################################################

get('/signup', function () {
  require_once($_SERVER['DOCUMENT_ROOT'] . '/views_login/view_signup.php');
});

get('/signup/error/:message', 'render_signup_error');
function render_signup_error($message)
{
  $error_message = $message;
  require_once(__DIR__ . '/views_login/view_signup.php');
  exit();
}
post('/signup', function () {
  require_once($_SERVER['DOCUMENT_ROOT'] . '/bridges/bridge_signup.php');
});



// #########################################################
// ################### LOGOUT ##############################
// #########################################################
get('/logout', function () {
  require_once($_SERVER['DOCUMENT_ROOT'] . '/bridges/bridge_logout.php');
});

// For GET or POST
any('/404', function () {
  require_once($_SERVER['DOCUMENT_ROOT'] . '/views_app/view_404.php');
});
