## ĐỀ TÀI: XÂY DỰNG NỀN TẢNG HỌC TRỰC TUYẾN (E-LEARNING PLATFORM)

---

## 1. Thông tin sinh viên

- **Họ và tên**: Đặng Ngọc Võ  
- **Ngành học**: Công nghệ Thông tin  
- **Trường**: Đại học Bình Dương  
- **Môn học**: Phát triển Ứng dụng Web  
- **Hình thức**: Đồ án cá nhân  

---

## 2. Giới thiệu đề tài

Trong bối cảnh công nghệ thông tin phát triển mạnh mẽ, các hệ thống học trực tuyến (E-Learning) ngày càng đóng vai trò quan trọng trong giáo dục.  
Đề tài **“Xây dựng nền tảng học trực tuyến (E-Learning Platform)”** được thực hiện nhằm mục đích:

- Áp dụng kiến thức đã học về lập trình web
- Hiểu rõ mô hình hoạt động của một hệ thống E-Learning
- Rèn luyện kỹ năng xây dựng ứng dụng web theo mô hình MVC
- Phát triển khả năng làm việc với Frontend và Backend tách biệt

---

## 3. Mục tiêu đề tài

### 3.1. Mục tiêu chung
Xây dựng một hệ thống học trực tuyến cơ bản, cho phép người dùng đăng nhập, xem khóa học và đăng ký học.

### 3.2. Mục tiêu cụ thể
- Xây dựng backend bằng PHP theo mô hình MVC
- Xây dựng giao diện frontend bằng HTML, CSS, JavaScript
- Kết nối cơ sở dữ liệu MySQL
- Thực hiện các chức năng cơ bản của hệ thống E-Learning

---

## 4. Phạm vi và đối tượng sử dụng

### 4.1. Đối tượng sử dụng
- Sinh viên (Student)
- Giảng viên (Instructor)
- Quản trị viên (Admin)

### 4.2. Phạm vi
- Hệ thống ở mức cơ bản
- Phục vụ mục đích học tập và nghiên cứu
- Chưa triển khai các chức năng nâng cao như thanh toán, video streaming

---

## 5. Công nghệ sử dụng

### 5.1. Backend
- Ngôn ngữ: **PHP**
- Kiến trúc: **MVC (Model – View – Controller)**
- Cơ sở dữ liệu: **MySQL**

### 5.2. Frontend
- HTML5
- CSS3
- JavaScript (Fetch API)

### 5.3. Công cụ hỗ trợ
- Visual Studio Code
- XAMPP / Laragon
- GitHub

---

## 6. Phân tích hệ thống

### 6.1. Chức năng chính
- Đăng nhập / đăng ký người dùng
- Xem danh sách khóa học
- Xem chi tiết khóa học
- Đăng ký học khóa học
- Phân quyền người dùng theo vai trò

### 6.2. Phân quyền
- **Student**: xem và đăng ký khóa học
- **Instructor**: quản lý khóa học
- **Admin**: quản lý người dùng và hệ thống

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

## 8. Cơ sở dữ liệu

Hệ thống sử dụng cơ sở dữ liệu **MySQL**, gồm các bảng chính:
- `users`: lưu thông tin người dùng
- `courses`: lưu thông tin khóa học
- `enrollments`: lưu thông tin đăng ký khóa học

File SQL được cung cấp tại:
database/elearning.sql

less
Sao chép mã

---

## 9. Hướng dẫn cài đặt và chạy chương trình

### Bước 1: Cài đặt môi trường
- Cài đặt XAMPP hoặc Laragon
- Bật Apache và MySQL

### Bước 2: Import cơ sở dữ liệu
- Tạo database tên `elearning`
- Import file `elearning.sql`

### Bước 3: Chạy chương trình
- Đặt project vào thư mục `htdocs`
- Truy cập:
http://localhost/e-learning-platform/Frontend/pages/home.html

yaml
Sao chép mã

---

## 10. Kết quả đạt được

- Hoàn thành hệ thống E-Learning cơ bản
- Áp dụng thành công mô hình MVC
- Hiểu rõ cách kết nối Frontend – Backend – Database
- Giao diện rõ ràng, dễ sử dụng

---

## 11. Hướng phát triển

- Tích hợp video bài giảng
- Theo dõi tiến độ học tập
- Bổ sung thanh toán khóa học
- Cải thiện giao diện người dùng

---

## 12. Kết luận

Đề tài đã giúp sinh viên củng cố kiến thức về lập trình web, cơ sở dữ liệu và kiến trúc MVC.  
Mặc dù hệ thống còn đơn giản, nhưng đã đáp ứng được các chức năng cơ bản của một nền tảng học trực tuyến.

---

## 13. Tài liệu tham khảo

1. PHP Documentation – https://www.php.net  
2. MySQL Documentation – https://dev.mysql.com  
3. MDN Web Docs – https://developer.mozilla.org  
