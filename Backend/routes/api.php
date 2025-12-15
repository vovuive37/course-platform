<?php
if ($_GET['module'] === 'course') {
    require_once "../controllers/CourseController.php";
}
if ($_GET['module'] === 'auth') {
    require_once "../controllers/AuthController.php";
}
<?php
$module = $_GET['module'] ?? '';

switch ($module) {
    case 'auth':
        require "../controllers/AuthController.php";
        break;
    case 'course':
        require "../controllers/CourseController.php";
        break;
    case 'user':
        require "../controllers/UserController.php";
        break;
    default:
        echo json_encode(["error" => "Invalid API"]);
}
