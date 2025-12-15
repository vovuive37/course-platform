<?php
require_once "Database.php";

class Enrollment {

    public static function enroll($user_id, $course_id) {
        $stmt = Database::connect()->prepare(
            "INSERT INTO enrollments(user_id,course_id,enroll_date)
             VALUES (?,?,CURDATE())"
        );
        return $stmt->execute([$user_id,$course_id]);
    }

    public static function getByUser($user_id) {
        $stmt = Database::connect()->prepare(
            "SELECT c.course_name 
             FROM enrollments e 
             JOIN courses c ON e.course_id = c.course_id
             WHERE e.user_id=?"
        );
        $stmt->execute([$user_id]);
        return $stmt->fetchAll();
    }
}
                                                                                                                