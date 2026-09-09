# Phần mềm quản lý chứng chỉ tại Trung tâm Tin học Ánh Dương

## 1. Giới thiệu

Đây là đồ án xây dựng phần mềm quản lý chứng chỉ tại Trung tâm Tin học Ánh Dương. Hệ thống được phát triển bằng PHP và MySQL, hỗ trợ quản lý học viên, quản lý chứng chỉ, tra cứu và thống kê.

## 2. Mục tiêu

- Quản lý thông tin học viên tập trung.
- Quản lý thông tin chứng chỉ của học viên.
- Tra cứu học viên và chứng chỉ nhanh chóng.
- Theo dõi trạng thái chứng chỉ.
- Thống kê số lượng học viên và chứng chỉ.
- Hỗ trợ giảm việc quản lý thủ công bằng sổ sách hoặc bảng tính rời rạc.

## 3. Chức năng chính

### Quản lý học viên
- Xem danh sách học viên.
- Thêm, sửa, xóa học viên.
- Tìm kiếm theo mã, họ tên, email hoặc số điện thoại.

### Quản lý chứng chỉ
- Xem danh sách chứng chỉ.
- Thêm, sửa, xóa chứng chỉ.
- Liên kết chứng chỉ với học viên.
- Tìm kiếm theo mã chứng chỉ, tên học viên và loại chứng chỉ.

### Thống kê
- Tổng số học viên.
- Tổng số chứng chỉ.
- Số chứng chỉ theo loại.
- Số chứng chỉ theo trạng thái.

## 4. Công nghệ sử dụng

- PHP 8.x
- MySQL 8.x / MariaDB
- PDO
- HTML5, CSS3, JavaScript
- XAMPP
- Git và GitHub

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
│   │   ├── css/style.css
│   │   └── js/app.js
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
```

> `scr` được giữ đúng theo tên thư mục trong yêu cầu của đồ án.

## 6. Cài đặt và chạy chương trình

### Bước 1: Cài XAMPP

Khởi động **Apache** và **MySQL** trong XAMPP Control Panel.

### Bước 2: Đặt source code

Copy repository vào:

```text
C:/xampp/htdocs/quan-ly-chung-chi-anh-duong/
```

### Bước 3: Tạo cơ sở dữ liệu

Mở:

```text
http://localhost/phpmyadmin
```

Import file:

```text
setup/database/database.sql
```

Database mặc định:

```text
quan_ly_chung_chi
```

### Bước 4: Kiểm tra cấu hình kết nối

Mở:

```text
scr/config/database.php
```

Thông số mặc định cho XAMPP:

```text
Host: localhost
Database: quan_ly_chung_chi
Username: root
Password: rỗng
```

### Bước 5: Chạy chương trình

Truy cập:

```text
http://localhost/quan-ly-chung-chi-anh-duong/scr/admin/
```

## 7. Dữ liệu mẫu và dữ liệu kiểm thử

- `setup/database/database.sql` chứa cấu trúc cơ sở dữ liệu và dữ liệu mẫu ban đầu.
- `scr/database_test_data.sql` chứa dữ liệu kiểm thử bổ sung.

Không chạy lặp lại file dữ liệu kiểm thử nếu các mã `HV001`–`HV004` và `CC001`–`CC004` đã tồn tại, vì các mã này là duy nhất.

## 8. Báo cáo tiến độ

Thư mục `progress-report/` là thư mục bắt buộc của repository. Mỗi tuần cập nhật báo cáo theo tiến độ thực tế và commit lên GitHub.

README cũng cần được cập nhật khi có thay đổi đáng kể để người đọc có thể hiểu hệ thống đã làm gì và cách chạy lại dự án.

## 9. Hồ sơ đồ án

Thư mục `thesis/` dùng để lưu các sản phẩm hồ sơ theo yêu cầu:

- `doc/`: báo cáo Word/DOC/DOCX.
- `pdf/`: báo cáo PDF.
- `html/`: tài liệu HTML nếu có.
- `abs/`: slide và tệp thuyết trình.
- `refs/`: tài liệu tham khảo.

## 10. Phần mềm sử dụng

Thư mục `soft/` dùng để ghi nhận các phần mềm/công cụ liên quan được sử dụng trong quá trình phát triển, ví dụ XAMPP, Visual Studio Code, Git và GitHub.

## 11. Lưu ý về Git/GitHub

Lịch sử commit phải phản ánh đúng quá trình phát triển thực tế. Không tạo commit giả cho các công việc chưa thực hiện.

Các thay đổi nên được commit theo từng giai đoạn, ví dụ:

```text
Organize repository structure
Update database setup
Build student management
Build certificate management
Build statistics dashboard
Improve interface
Fix bugs and validate data
Update documentation
```

## 12. Tác giả

- Sinh viên: **Phạm Lữ Anh Khoa**
- Đề tài: **Xây dựng phần mềm quản lý chứng chỉ tại Trung tâm Tin học Ánh Dương**
