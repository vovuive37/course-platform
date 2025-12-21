E-Learning Platform (PHP + HTML/CSS/JS)
📌 Giới thiệu

Dự án E-Learning Platform là một website học trực tuyến cơ bản, cho phép:

Người dùng đăng nhập

Học viên xem và học khóa học

Giảng viên quản lý khóa học

Admin quản trị hệ thống

Dự án sử dụng:

Frontend: HTML, CSS, JavaScript (Vanilla)

Backend: PHP (MVC đơn giản)

Database: JSON (không dùng MySQL)

Môi trường chạy: XAMPP

🧩 Công nghệ sử dụng
Frontend

HTML5

CSS3

JavaScript (ES6)

Animation + icon cơ bản

Backend

PHP 8+

REST API đơn giản

JSON làm nơi lưu trữ dữ liệu

Mô hình Controller

📁 Cấu trúc thư mục
e-learning-platform/
│
├── Frontend/
│   ├── assets/
│   │   ├── css/
│   │   │   └── style.css
│   │   ├── js/
│   │   │   └── main.js
│   │   └── images/
│   │
│   └── pages/
│       ├── home.html
│       ├── login.html
│       ├── courses.html
│       ├── course-detail.html
│       ├── learning.html
│       ├── student.html
│       ├── instructor.html
│       └── admin.html
│
├── Backend/
│   ├── api/
│   │   ├── login.php
│   │   └── courses.php
│   │
│   ├── controllers/
│   │   ├── AuthController.php
│   │   ├── UserController.php
│   │   └── CourseController.php
│   │
│   ├── data/
│   │   ├── users.json
│   │   └── courses.json
│   │
│   ├── index.php
│   └── main.php
│
├── .vscode/
│   └── settings.json
│
└── README.md

⚙️ Cài đặt & Chạy dự án
1️⃣ Cài đặt XAMPP

Tải XAMPP tại: https://www.apachefriends.org

Cài đặt và bật:

Apache

2️⃣ Đưa project vào XAMPP

Giải nén project vào thư mục:

xampp/htdocs/


Đường dẫn đầy đủ:

xampp/htdocs/e-learning-platform

3️⃣ Chạy dự án

Mở trình duyệt và truy cập:

http://localhost/e-learning-platform/Frontend/pages/home.html

🔐 Tài khoản mẫu

Dữ liệu nằm trong file:

Backend/data/users.json


Ví dụ:

{
  "username": "admin",
  "password": "123456",
  "role": "admin"
}

Vai trò	Quyền
Admin	Quản lý hệ thống
Instructor	Quản lý khóa học
Student	Học khóa học
🔄 Luồng hoạt động

Người dùng đăng nhập (login.html)

Frontend gửi request đến:

Backend/api/login.php


Backend kiểm tra users.json

Trả kết quả đăng nhập

Chuyển giao diện theo role:

Admin → admin.html

Instructor → instructor.html

Student → student.html

📡 API Backend
🔹 Đăng nhập
POST /Backend/api/login.php


Request

{
  "username": "admin",
  "password": "123456"
}

🔹 Lấy danh sách khóa học
GET /Backend/api/courses.php

🎨 Giao diện

Responsive cơ bản

Có icon + animation

Màu sắc thống nhất trong style.css

🚀 Hướng phát triển thêm

Kết nối MySQL

Phân quyền bằng session

Upload video khóa học

Thêm chứng chỉ hoàn thành

Thêm bảo mật JWT

👨‍💻 Tác giả

Ngọc Võ Đặng

Sinh viên / Lập trình Web

Dự án phục vụ học tập & demo