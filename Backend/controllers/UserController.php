<?php
require_once "../models/User.php";

if ($_GET['action'] === 'list') {
    echo json_encode(User::all());
}
