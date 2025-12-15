<?php
require_once "Database.php";

class User {

    public static function create($name, $email, $password, $role) {
        $db = Database::connect();
        $stmt = $db->prepare(
            "INSERT INTO users(full_name,email,password,role) VALUES (?,?,?,?)"
        );
        return $stmt->execute([
            $name,
            $email,
            password_hash($password, PASSWORD_DEFAULT),
            $role
        ]);
    }

    public static function findByEmail($email) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM users WHERE email=?");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }

    public static function all() {
        return Database::connect()
            ->query("SELECT user_id,full_name,email,role FROM users")
            ->fetchAll();
    }
}
