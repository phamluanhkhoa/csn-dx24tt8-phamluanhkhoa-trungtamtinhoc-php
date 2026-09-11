# Phần mềm quản lý chứng chỉ tại Trung tâm Tin học Ánh Dương

## 1. Giới thiệu

Đây là đồ án xây dựng phần mềm quản lý chứng chỉ tại Trung tâm Tin học Ánh Dương.

Hệ thống được phát triển bằng PHP và MySQL, hỗ trợ quản lý học viên, quản lý chứng chỉ, tra cứu và thống kê tình trạng chứng chỉ.

## 2. Mục tiêu

- Quản lý thông tin học viên tập trung.
- Quản lý thông tin chứng chỉ của học viên.
- Tra cứu học viên và chứng chỉ nhanh chóng.
- Theo dõi trạng thái chứng chỉ.
- Thống kê số lượng học viên và chứng chỉ.
- Hỗ trợ giảm việc quản lý thủ công bằng sổ sách hoặc bảng tính rời rạc.

## 3. Chức năng chính

### 3.1. Quản lý học viên

- Xem danh sách học viên.
- Thêm học viên.
- Sửa thông tin học viên.
- Xóa học viên.
- Tìm kiếm theo mã học viên.
- Tìm kiếm theo họ tên.
- Tìm kiếm theo email hoặc số điện thoại.

### 3.2. Quản lý chứng chỉ

- Xem danh sách chứng chỉ.
- Thêm chứng chỉ.
- Sửa thông tin chứng chỉ.
- Xóa chứng chỉ.
- Liên kết chứng chỉ với học viên.
- Tìm kiếm theo mã chứng chỉ.
- Tìm kiếm theo tên học viên.
- Tìm kiếm theo loại chứng chỉ.
- Theo dõi trạng thái chứng chỉ.

### 3.3. Thống kê

- Tổng số học viên.
- Tổng số chứng chỉ.
- Số chứng chỉ đã cấp.
- Số chứng chỉ hết hạn.
- Thống kê chứng chỉ theo loại.
- Thống kê chứng chỉ theo trạng thái.

## 4. Công nghệ sử dụng

- PHP 8.x
- MySQL 8.x / MariaDB
- PDO
- HTML5
- CSS3
- JavaScript
- XAMPP
- Visual Studio Code
- Git
- GitHub

## 5. Cấu trúc repository

```text
csn-dx24tt8-phamluanhkhoa-trungtamtinhoc-php/
├── setup/
│   ├── database/
│   │   └── database.sql
│   └── README.md
├── scr/
│   ├── admin/
│   │   ├── index.php
│   │   ├── hocvien/
│   │   ├── chungchi/
│   │   └── thongke/
│   ├── config/
│   │   └── database.php
│   ├── includes/
│   │   ├── header.php
│   │   └── footer.php
│   ├── public/
│   │   ├── css/
│   │   │   └── style.css
│   │   ├── js/
│   │   │   └── app.js
│   │   └── images/
│   │       ├── hero-dashboard.svg
│   │       ├── students.svg
│   │       ├── certificate.svg
│   │       └── statistics.svg
│   ├── database_test_data.sql
│   └── README.md
├── progress-report/
│   ├── README.md
│   ├── Tuan01_Mau_BaoCaoTienDo.md
│   ├── Tuan02_Mau_BaoCaoTienDo.md
│   ├── Tuan03_Mau_BaoCaoTienDo.md
│   └── Tuan04_Mau_BaoCaoTienDo.md
├── thesis/
│   ├── doc/
│   ├── pdf/
│   ├── html/
│   ├── abs/
│   └── refs/
├── soft/
│   └── README.md
├── PROJECT_NOTES.md
├── README.md
└── .gitignore