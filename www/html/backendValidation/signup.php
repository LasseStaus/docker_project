<?php

// ################### csrf valid ###############################

if (is_csrf_valid() != true) {
    echo 'csrf...';

    exit();
}


// #########################################################
// ################### ISSET ###############################
// #########################################################

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_POST['user_email'])) {
    $error_message = "1";
    header("Location: /signup/error/$error_message");
    exit();
}


if (!isset($_POST['user_password'])) {
    $error_message = "2";
    header("Location: /signup/error/$error_message");
    exit();
}


// #########################################################
// ################ INPUT VALUE VALIDATION #################
// #########################################################





if (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
    $error_message = "Invalid email format";
    header("Location: /signup/error/$error_message");
    exit();
}

if (
    strlen($_POST['user_password']) < 4 ||
    strlen($_POST['user_password']) > 50
) {
    $error_message = "Password must be between 4 and 50 characters";
    header("Location: /signup/error/$error_message");
    exit();
}

if ($_POST['user_password'] != $_POST['user_confirm_password']) {
    $error_message = 'Password and Password confirm dont match';
    header("Location: /signup/error/$error_message");
    exit();
}
