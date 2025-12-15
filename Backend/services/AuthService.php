<?php
require_once "../models/User.php";

class AuthService {

    public static function login($email, $password) {
        $user = User::findByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user'] = $user;
            return $user;
        }
        return false;
    }

    public static function check() {
        session_start();
        return $_SESSION['user'] ?? null;
    }
}
