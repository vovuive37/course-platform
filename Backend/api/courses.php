<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$coursesFile = "../data/courses.json";
$courses = json_decode(file_get_contents($coursesFile), true);

// Lấy ID nếu có
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    foreach ($courses as $course) {
        if ($course['id'] == $id) {
            echo json_encode($course);
            exit;
        }
    }
    http_response_code(404);
    echo json_encode(["message" => "Course not found"]);
    exit;
}

// Lấy toàn bộ khóa học
echo json_encode($courses);
