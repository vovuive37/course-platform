<?php
require_once "../models/User.php";

if ($_POST['action'] === 'login') {
    $user = User::login($_POST['email']);
    if ($user && password_verify($_POST['password'], $user['password'])) {
        session_start();
        $_SESSION['user'] = $user;
        echo "success";
    } else {
        echo "fail";
    }
}
