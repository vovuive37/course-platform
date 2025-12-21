<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

$data = json_decode(file_get_contents("php://input"), true);

$username = $data['username'] ?? '';
$password = $data['password'] ?? '';

$usersFile = "../data/users.json";
$users = json_decode(file_get_contents($usersFile), true);

foreach ($users as $user) {
    if ($user['username'] === $username && $user['password'] === $password) {
        echo json_encode([
            "id" => $user['id'],
            "username" => $user['username'],
            "role" => $user['role']
        ]);
        exit;
    }
}

http_response_code(401);
echo json_encode(["message" => "Sai tài khoản hoặc mật khẩu"]);
