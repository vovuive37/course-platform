# ĐỒ ÁN PHÁT TRIỂN ỨNG DỤNG WEB  
## XÂY DỰNG NỀN TẢNG HỌC TRỰC TUYẾN (E-LEARNING PLATFORM)

---

## 1. Thông tin sinh viên
- **Họ và tên**: Đặng Ngọc Võ  
- **Ngành**: Công nghệ Thông tin  
- **Trường**: Đại học Bình Dương  
- **Môn học**: Phát triển Ứng dụng Web  
- **Hình thức**: Đồ án cá nhân  

---

## 2. Giới thiệu đề tài
Đề tài xây dựng một **nền tảng học trực tuyến (E-Learning Platform)** nhằm áp dụng kiến thức lập trình web, mô hình MVC và kỹ năng phát triển hệ thống Frontend – Backend.  
Hệ thống phục vụ mục đích học tập, cho phép người dùng học và quản lý khóa học trực tuyến.

---

## 3. Mục tiêu đề tài
- Xây dựng hệ thống E-Learning cơ bản
- Áp dụng mô hình MVC trong Backend
- Kết nối Frontend với Backend thông qua API
- Quản lý dữ liệu bằng MySQL

---

## 4. Công nghệ sử dụng
- **Backend**: PHP (MVC), MySQL  
- **Frontend**: HTML, CSS, JavaScript  
- **Công cụ**: VS Code, XAMPP/Laragon, GitHub  

---

## 5. Tổng quan hệ thống

### 5.1. Frontend
Frontend là phần giao diện người dùng, giúp:
- Hiển thị trang chủ, khóa học
- Đăng nhập, đăng ký
- Học và quản lý khóa học theo vai trò

### 5.2. Backend
Backend xử lý nghiệp vụ và dữ liệu:
- Xác thực người dùng
- Quản lý khóa học và người dùng
- Cung cấp API cho Frontend

---

## 6. Các chức năng chính
- Đăng nhập, đăng ký người dùng
- Phân quyền (Student, Instructor, Admin)
- Xem danh sách và chi tiết khóa học
- Đăng ký học khóa học
- Quản lý khóa học và người dùng

---

## 7. Cấu trúc thư mục

e-learning-platform
│
├── Backend
│ ├── controllers
│ │ ├── AuthController.php
│ │ ├── CourseController.php
│ │ └── UserController.php
│ │
│ ├── models
│ │ ├── Database.php
│ │ ├── User.php
│ │ ├── Course.php
│ │ └── Enrollment.php
│ │
│ ├── routes
│ │ └── api.php
│ │
│ ├── services
│ │ └── AuthService.php
│ │
│ └── main.php
│
├── Frontend
│ ├── assets
│ │ ├── css
│ │ ├── js
│ │ └── images
│ │
│ └── pages
│ ├── home.html
│ ├── login.html
│ ├── courses.html
│ ├── course-detail.html
│ ├── learning.html
│ ├── student.html
│ ├── instructor.html
│ └── admin.html
│
├── database
│ └── elearning.sql
│
└── README.md

---

## Mô tả luồng hoạt động hệ thống

1. Người dùng thao tác trên **Frontend**
2. Frontend gửi yêu cầu (request) đến **Backend API**
3. Backend xử lý logic nghiệp vụ
4. Backend truy vấn hoặc cập nhật **Database**
5. Backend trả dữ liệu về Frontend
6. Frontend hiển thị kết quả cho người dùng

---

---

## 8. Cơ sở dữ liệu
Hệ thống sử dụng **MySQL**, gồm các bảng chính:
- `users`
- `courses`
- `enrollments`

---

## 9. Các bước thực hiện
1. Phân tích yêu cầu hệ thống  
2. Thiết kế kiến trúc và cơ sở dữ liệu  
3. Xây dựng Backend theo mô hình MVC  
4. Xây dựng Frontend  
5. Kết nối Frontend – Backend  
6. Kiểm thử và hoàn thiện  

---

## 10. Kết luận
Đề tài đã xây dựng thành công một nền tảng E-Learning cơ bản, đáp ứng các chức năng chính của hệ thống học trực tuyến và phù hợp với yêu cầu của môn học.

---
