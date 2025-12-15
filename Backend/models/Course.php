<?php
require_once "Database.php";

class Course {
    public static function all() {
        $db = Database::connect();
        return $db->query("SELECT * FROM courses")->fetchAll();
    }

    public static function find($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM courses WHERE course_id=?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
