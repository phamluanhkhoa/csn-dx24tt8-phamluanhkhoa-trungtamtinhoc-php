# Phần mềm quản lý chứng chỉ tại Trung tâm Tin học Ánh Dương

## 1. Giới thiệu

Đây là đồ án xây dựng phần mềm quản lý chứng chỉ tại Trung tâm Tin học Ánh Dương.
Hệ thống được xây dựng bằng PHP và MySQL, hỗ trợ quản lý dữ liệu học viên,
quản lý chứng chỉ, tra cứu nhanh và thống kê.

## 2. Mục tiêu

- Quản lý thông tin học viên tập trung.
- Quản lý thông tin chứng chỉ của học viên.
- Tra cứu học viên/chứng chỉ nhanh chóng.
- Theo dõi tình trạng chứng chỉ.
- Thống kê số lượng học viên và chứng chỉ.
- Hạn chế việc quản lý thủ công bằng sổ sách hoặc bảng tính rời rạc.

## 3. Chức năng chính

### Quản lý học viên
- Xem danh sách học viên.
- Thêm học viên.
- Sửa thông tin học viên.
- Xóa học viên.
- Tìm kiếm theo mã, họ tên, email hoặc số điện thoại.

### Quản lý chứng chỉ
- Xem danh sách chứng chỉ.
- Thêm chứng chỉ.
- Sửa thông tin chứng chỉ.
- Xóa chứng chỉ.
- Liên kết chứng chỉ với học viên.
- Tìm kiếm theo mã chứng chỉ, tên học viên, loại chứng chỉ.

### Thống kê
- Tổng số học viên.
- Tổng số chứng chỉ.
- Số chứng chỉ theo loại.
- Số chứng chỉ theo trạng thái.

## 4. Công nghệ sử dụng

- PHP 8.x
- MySQL 8.x / MariaDB
- PDO
- HTML5
- CSS3
- JavaScript
- XAMPP
- Git/GitHub

## 5. Cấu trúc thư mục

```text
quan-ly-chung-chi-anh-duong/
├── README.md
├── config/
│   └── database.php
├── database/
│   └── database.sql
├── includes/
│   ├── header.php
│   └── footer.php
├── public/
│   ├── css/style.css
│   └── js/app.js
├── admin/
│   ├── index.php
│   ├── hocvien/
│   ├── chungchi/
│   └── thongke/
└── progress-report/
    ├── README.md
    ├── Tuan01_Mau_BaoCaoTienDo.md
    ├── Tuan02_Mau_BaoCaoTienDo.md
    ├── Tuan03_Mau_BaoCaoTienDo.md
    └── Tuan04_Mau_BaoCaoTienDo.md
```

## 6. Cài đặt

### Bước 1: Cài XAMPP

Cài XAMPP, sau đó khởi động Apache và MySQL.

### Bước 2: Copy project

Đặt thư mục project vào:

```text
C:/xampp/htdocs/quan-ly-chung-chi-anh-duong/
```

### Bước 3: Tạo cơ sở dữ liệu

Mở:

```text
http://localhost/phpmyadmin
```

Tạo/import cơ sở dữ liệu bằng file:

```text
database/database.sql
```

Tên database mặc định:

```text
quan_ly_chung_chi
```

### Bước 4: Kiểm tra kết nối

Mở:

```text
config/database.php
```

Thông số mặc định dành cho XAMPP:

```text
Host: localhost
Database: quan_ly_chung_chi
Username: root
Password: rỗng
```

Nếu máy bạn dùng thông số khác thì sửa lại file này.

### Bước 5: Chạy chương trình

Truy cập:

```text
http://localhost/quan-ly-chung-chi-anh-duong/admin/
```

## 7. Dữ liệu mẫu

File `database/database.sql` có sẵn một số dữ liệu mẫu để kiểm tra:
- Học viên.
- Loại chứng chỉ.
- Chứng chỉ.

Khi triển khai thực tế, thay dữ liệu mẫu bằng dữ liệu của trung tâm.

## 8. Tiến độ đồ án

Báo cáo tiến độ được lưu tại thư mục `progress-report/`.

Theo yêu cầu của đồ án, mỗi tuần cần:
1. Cập nhật báo cáo tiến độ.
2. Cập nhật README nếu có thay đổi đáng kể.
3. Commit các thay đổi lên GitHub.

> Các file báo cáo trong thư mục `progress-report` là mẫu/khung để sinh viên
> cập nhật bằng tiến độ thực tế trước khi nộp.

## 9. Lịch sử commit đề nghị

```text
Initial project structure
Create database schema and sample data
Build student management
Build certificate management
Build certificate search
Build statistics dashboard
Improve UI and validation
Testing and bug fixes
Update README and final documentation
```

Không nên tạo commit giả cho những công việc chưa thực hiện. Hãy commit theo đúng
các thay đổi thực tế trong quá trình làm đồ án.

## 10. Tác giả

- Sinh viên: Phạm lữ anh khoa
- Đề tài: Xây dựng phần mềm quản lý chứng chỉ tại Trung tâm Tin học Ánh Dương
