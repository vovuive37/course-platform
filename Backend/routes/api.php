<?php
if ($_GET['module'] === 'course') {
    require_once "../controllers/CourseController.php";
}
if ($_GET['module'] === 'auth') {
    require_once "../controllers/AuthController.php";
}
