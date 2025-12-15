<?php
require_once "../models/Course.php";

if ($_GET['action'] === 'list') {
    echo json_encode(Course::all());
}

if ($_GET['action'] === 'detail') {
    echo json_encode(Course::find($_GET['id']));
}

if ($_POST['action'] === 'create') {
    Course::create($_POST['name'], $_POST['desc'], $_POST['instructor_id']);
    echo json_encode(["success" => true]);
}
