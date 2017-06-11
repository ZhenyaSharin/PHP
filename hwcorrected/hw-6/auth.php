<?php


session_start();

require_once __DIR__. '/app/models/auth_model.php';

$paswd = $_POST['pwd'];

$pass = password_hash($paswd, PASSWORD_DEFAULT);

$is_authuser = auth_user($_POST['login'], $pass);

var_dump($is_authuser);

 include __DIR__. '/app/views/auth_form.php';