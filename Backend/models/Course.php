<?php
require_once "Database.php";

class Course {

    public static function all() {
        return Database::connect()
            ->query("SELECT * FROM courses")
            ->fetchAll();
    }

    public static function find($id) {
        $stmt = Database::connect()
            ->prepare("SELECT * FROM courses WHERE course_id=?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public static function create($name, $desc, $instructor_id) {
        $stmt = Database::connect()->prepare(
            "INSERT INTO courses(course_name,description,instructor_id,status)
             VALUES (?,?,?,'active')"
        );
        return $stmt->execute([$name,$desc,$instructor_id]);
    }
}
