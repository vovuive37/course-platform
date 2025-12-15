<?php
require_once "../services/AuthService.php";

if ($_POST['action'] === 'login') {
    $user = AuthService::login($_POST['email'], $_POST['password']);
    echo json_encode($user ? $user : ["error" => "Login failed"]);
}
