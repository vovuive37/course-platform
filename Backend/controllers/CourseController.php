<?php
require_once "../models/Course.php";

if ($_GET['action'] === 'list') {
    echo json_encode(Course::all());
}

if ($_GET['action'] === 'detail') {
    echo json_encode(Course::find($_GET['id']));
}
