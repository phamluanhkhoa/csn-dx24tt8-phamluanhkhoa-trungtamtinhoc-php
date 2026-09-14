# BÁO CÁO TIẾN ĐỘ TUẦN 3

## 1. Thông tin chung

- **Sinh viên:** Phạm Lữ Anh Khoa
- **Đề tài:** Xây dựng phần mềm quản lý chứng chỉ tại Trung tâm Tin học Ánh Dương
- **Tuần:** 03
- **Thời gian:** 14/09/2026 – 20/09/2026
- **Repository:** `csn-dx24tt8-phamluanhkhoa-trungtamtinhoc-php`

---

## 2. Mục tiêu tuần 3

Trong tuần thứ ba, tập trung hoàn thiện cấu trúc repository, rà soát lại mã nguồn sau khi tổ chức lại thư mục, kiểm tra cơ sở dữ liệu, kiểm tra khả năng chạy lại hệ thống trên môi trường XAMPP và hoàn thiện tài liệu hướng dẫn sử dụng dự án.

Các mục tiêu chính:

- Hoàn thiện cấu trúc repository theo yêu cầu của đồ án.
- Loại bỏ các thư mục mã nguồn cũ bị trùng lặp.
- Kiểm tra lại vị trí của mã nguồn trong thư mục `scr`.
- Kiểm tra đường dẫn chạy hệ thống trên localhost.
- Kiểm tra kết nối PHP với MySQL.
- Kiểm tra dữ liệu mẫu trong cơ sở dữ liệu.
- Hoàn thiện README và hướng dẫn cài đặt.
- Kiểm tra và đồng bộ repository với GitHub.
- Tiếp tục ghi nhận quá trình phát triển thông qua Git.

---

## 3. Nội dung công việc đã thực hiện

### 3.1. Rà soát cấu trúc repository

Đã rà soát lại toàn bộ cấu trúc repository theo yêu cầu của đồ án.

Cấu trúc repository được tổ chức gồm:

```text
csn-dx24tt8-phamluanhkhoa-trungtamtinhoc-php/
├── setup/
├── scr/
├── progress-report/
├── thesis/
├── soft/
├── PROJECT_NOTES.md
├── README.md
└── .gitignore
```

Các thư mục được sử dụng đúng mục đích:

- `setup/`: chứa tài liệu và file phục vụ cài đặt hệ thống.
- `scr/`: chứa mã nguồn chính.
- `progress-report/`: chứa báo cáo tiến độ theo tuần.
- `thesis/`: chứa hồ sơ đồ án.
- `soft/`: ghi nhận các phần mềm và công cụ sử dụng.

---

### 3.2. Hoàn thiện thư mục mã nguồn `scr`

Đã kiểm tra và thống nhất mã nguồn chính nằm trong thư mục `scr`.

Cấu trúc:

```text
scr/
├── admin/
├── config/
├── includes/
├── public/
├── database_test_data.sql
└── README.md
```

Trong đó:

- `admin/`: giao diện và chức năng quản trị hệ thống.
- `config/`: cấu hình kết nối cơ sở dữ liệu.
- `includes/`: các thành phần giao diện dùng chung.
- `public/`: CSS, JavaScript và hình ảnh giao diện.
- `database_test_data.sql`: dữ liệu kiểm thử.
- `README.md`: hướng dẫn và mô tả thư mục mã nguồn.

---

### 3.3. Loại bỏ cấu trúc mã nguồn cũ bị trùng lặp

Trong quá trình rà soát, phát hiện repository trước đó có các thư mục mã nguồn ở thư mục gốc như:

```text
admin/
config/
database/
includes/
public/
```

Các thư mục này bị trùng với mã nguồn đã được tổ chức trong `scr/`.

Đã tiến hành loại bỏ các thư mục cũ ở thư mục gốc để tránh nhầm lẫn khi sử dụng và chạy chương trình.

Mã nguồn chính được giữ lại tại:

```text
scr/
```

Việc này giúp repository có cấu trúc rõ ràng và phù hợp hơn với yêu cầu của đồ án.

---

### 3.4. Kiểm tra cơ sở dữ liệu

Đã kiểm tra cơ sở dữ liệu trên phpMyAdmin.

Database sử dụng:

```text
quan_ly_chung_chi
```

Các bảng chính:

```text
students
certificates
```

Kết quả kiểm tra:

- Cơ sở dữ liệu tồn tại.
- Bảng `students` hoạt động bình thường.
- Bảng `certificates` hoạt động bình thường.
- Dữ liệu mẫu được lưu trữ đúng.
- Mối quan hệ giữa chứng chỉ và học viên hoạt động.
- Có thể truy xuất dữ liệu từ hệ thống PHP.

Dữ liệu kiểm tra hiện tại gồm:

```text
4 học viên
4 chứng chỉ
3 chứng chỉ đã cấp
1 chứng chỉ hết hạn
```

---

### 3.5. Kiểm tra file cơ sở dữ liệu cài đặt

Đã kiểm tra file:

```text
setup/database/database.sql
```

File này được sử dụng để tạo cơ sở dữ liệu và các bảng cần thiết cho hệ thống.

Đã kiểm tra các thành phần chính:

- Tạo database.
- Tạo bảng `students`.
- Tạo bảng `certificates`.
- Khóa chính.
- Khóa ngoại giữa chứng chỉ và học viên.
- Dữ liệu mẫu.

Sau khi import bằng phpMyAdmin, hệ thống có thể sử dụng dữ liệu để hiển thị trên giao diện.

---

### 3.6. Kiểm tra cấu hình kết nối

Đã kiểm tra file:

```text
scr/config/database.php
```

Thông tin kết nối mặc định trên XAMPP:

```text
Host: localhost
Database: quan_ly_chung_chi
Username: root
Password: rỗng
```

Đã kiểm tra khả năng kết nối giữa PHP và MySQL.

Kết quả:

- PHP kết nối được MySQL.
- Có thể truy xuất dữ liệu từ database.
- Không phát sinh lỗi kết nối trong quá trình chạy hệ thống.

---

### 3.7. Kiểm tra đường dẫn chạy chương trình

Sau khi tổ chức lại repository, đã kiểm tra lại đường dẫn chạy hệ thống.

Mã nguồn nằm trong:

```text
scr/
```

Trang chính nằm tại:

```text
scr/admin/index.php
```

Đường dẫn chạy trên trình duyệt:

```text
http://localhost/csn-dx24tt8-phamluanhkhoa-trungtamtinhoc-php/scr/admin/
```

Đã kiểm tra trực tiếp trên trình duyệt.

Kết quả:

- Trang Dashboard hiển thị.
- Thanh điều hướng hoạt động.
- Dữ liệu thống kê được hiển thị.
- Hình ảnh giao diện hiển thị.
- Hệ thống kết nối được với cơ sở dữ liệu.

---

### 3.8. Kiểm tra và hoàn thiện giao diện Dashboard

Đã tiếp tục rà soát giao diện trang Dashboard sau khi thay đổi cấu trúc repository.

Dashboard hiện có các khu vực:

- Thanh điều hướng.
- Tên hệ thống.
- Khu vực giới thiệu.
- Nút thêm học viên.
- Nút thêm chứng chỉ.
- Thẻ tổng số học viên.
- Thẻ tổng số chứng chỉ.
- Thẻ chứng chỉ đã cấp.
- Thẻ chứng chỉ hết hạn.
- Khu vực thao tác nhanh.
- Hình ảnh minh họa cho các chức năng.

Giao diện được thiết kế theo hướng trực quan, dễ theo dõi và phù hợp với hệ thống quản lý.

---

### 3.9. Hoàn thiện README

Đã rà soát và cập nhật file:

```text
README.md
```

README đã mô tả các nội dung:

- Giới thiệu đề tài.
- Mục tiêu.
- Chức năng chính.
- Công nghệ sử dụng.
- Cấu trúc repository.
- Cách cài đặt XAMPP.
- Cách đặt source code vào `htdocs`.
- Cách tạo database.
- Cách import file SQL.
- Cấu hình kết nối database.
- Đường dẫn chạy chương trình.
- Dữ liệu mẫu.
- Báo cáo tiến độ.
- Hồ sơ đồ án.
- Phần mềm sử dụng.
- Thông tin tác giả.

Đường dẫn chạy trong README được thống nhất với cấu trúc mã nguồn thực tế:

```text
http://localhost/csn-dx24tt8-phamluanhkhoa-trungtamtinhoc-php/scr/admin/
```

---

### 3.10. Đồng bộ mã nguồn với GitHub

Đã kiểm tra trạng thái Git của repository.

Các thay đổi về cấu trúc và tài liệu đã được commit.

Đã thực hiện push lên repository GitHub:

```text
csn-dx24tt8-phamluanhkhoa-trungtamtinhoc-php
```

Nhánh sử dụng:

```text
master
```

Sau khi push, repository trên GitHub đã được cập nhật.

Lịch sử commit tiếp tục được sử dụng để ghi nhận quá trình phát triển thực tế của dự án.

---

## 4. Kết quả đạt được

Sau quá trình thực hiện tuần 3, dự án đã đạt được các kết quả:

| STT | Nội dung | Trạng thái |
|---|---|---|
| 1 | Rà soát cấu trúc repository | Hoàn thành |
| 2 | Thống nhất mã nguồn trong `scr` | Hoàn thành |
| 3 | Loại bỏ thư mục mã nguồn cũ bị trùng | Hoàn thành |
| 4 | Kiểm tra database | Hoàn thành |
| 5 | Kiểm tra bảng `students` | Hoàn thành |
| 6 | Kiểm tra bảng `certificates` | Hoàn thành |
| 7 | Kiểm tra kết nối PHP/MySQL | Hoàn thành |
| 8 | Kiểm tra chạy chương trình trên XAMPP | Hoàn thành |
| 9 | Kiểm tra Dashboard | Hoàn thành |
| 10 | Cập nhật README | Hoàn thành |
| 11 | Đồng bộ repository với GitHub | Hoàn thành |

---

## 5. Kiểm thử

### 5.1. Kiểm thử môi trường

Đã kiểm tra:

- Apache.
- MySQL.
- PHP.
- phpMyAdmin.
- Trình duyệt web.

Kết quả: hệ thống có thể chạy trên môi trường XAMPP.

### 5.2. Kiểm thử cơ sở dữ liệu

Đã kiểm tra:

- Database `quan_ly_chung_chi`.
- Bảng `students`.
- Bảng `certificates`.
- Dữ liệu mẫu.
- Quan hệ giữa học viên và chứng chỉ.

Kết quả: dữ liệu có thể được truy xuất từ hệ thống.

### 5.3. Kiểm thử đường dẫn

Đã kiểm tra:

```text
http://localhost/csn-dx24tt8-phamluanhkhoa-trungtamtinhoc-php/scr/admin/
```

Kết quả: trang Dashboard hiển thị bình thường.

### 5.4. Kiểm thử repository

Đã kiểm tra:

- Cấu trúc thư mục.
- Vị trí mã nguồn.
- File README.
- Thư mục báo cáo tiến độ.
- Lịch sử commit.
- Đồng bộ giữa repository local và GitHub.

---

## 6. Khó khăn gặp phải

Trong tuần 3, một số vấn đề phát sinh trong quá trình hoàn thiện dự án:

- Repository có các thư mục mã nguồn cũ bị trùng với thư mục `scr`.
- Sau khi thay đổi cấu trúc, cần kiểm tra lại đường dẫn đến các file PHP, CSS và JavaScript.
- Đường dẫn chạy chương trình cần được thống nhất giữa README và cấu trúc thực tế.
- Cần kiểm tra lại kết nối database sau khi thay đổi vị trí mã nguồn.
- Cần đảm bảo việc xóa thư mục cũ không làm mất mã nguồn đang được sử dụng.

---

## 7. Cách khắc phục

Các vấn đề trên được xử lý bằng cách:

- Rà soát toàn bộ cấu trúc repository.
- Xác định `scr` là thư mục chứa mã nguồn chính.
- Loại bỏ các thư mục mã nguồn cũ bị trùng ở thư mục gốc.
- Kiểm tra lại đường dẫn trong các file cấu hình.
- Chạy thử hệ thống trên XAMPP.
- Kiểm tra database bằng phpMyAdmin.
- Kiểm tra repository sau khi commit và push lên GitHub.
- Cập nhật README để người khác có thể hiểu và chạy lại hệ thống.

---

## 8. Minh chứng

Các minh chứng của tuần 3 gồm:

- Repository GitHub của dự án.
- Cấu trúc thư mục repository.
- Thư mục `scr` chứa mã nguồn.
- File `setup/database/database.sql`.
- Database `quan_ly_chung_chi` trên phpMyAdmin.
- Hai bảng `students` và `certificates`.
- Dashboard của hệ thống.
- Kết quả chạy chương trình trên localhost.
- README hướng dẫn cài đặt và chạy chương trình.
- Lịch sử commit trên GitHub.

---

## 9. Kế hoạch tuần 4

Trong tuần tiếp theo, dự kiến:

- Tiếp tục kiểm thử toàn bộ hệ thống.
- Kiểm tra các trường hợp dữ liệu hợp lệ và không hợp lệ.
- Kiểm tra chức năng thêm, sửa, xóa.
- Kiểm tra chức năng tìm kiếm.
- Kiểm tra chức năng thống kê.
- Sửa các lỗi phát hiện trong quá trình kiểm thử.
- Hoàn thiện giao diện và trải nghiệm sử dụng.
- Hoàn thiện tài liệu đồ án.
- Cập nhật báo cáo tiến độ và README.
- Tiếp tục commit các thay đổi thực tế lên GitHub.

---

## 10. Đánh giá tiến độ

**Mức độ hoàn thành: Đạt yêu cầu kế hoạch tuần 3.**

Trong tuần 3, dự án tập trung vào việc hoàn thiện cấu trúc và ổn định phiên bản hiện tại của hệ thống. Repository đã được tổ chức lại rõ ràng, mã nguồn chính được thống nhất trong thư mục `scr`, cơ sở dữ liệu và kết nối PHP/MySQL được kiểm tra, hệ thống chạy thành công trên XAMPP.

README và lịch sử Git cũng được cập nhật nhằm giúp quá trình phát triển và triển khai dự án được rõ ràng, dễ kiểm tra và dễ tái sử dụng.

---

## 11. Tác giả

- **Sinh viên:** Phạm Lữ Anh Khoa
- **Đề tài:** Xây dựng phần mềm quản lý chứng chỉ tại Trung tâm Tin học Ánh Dương