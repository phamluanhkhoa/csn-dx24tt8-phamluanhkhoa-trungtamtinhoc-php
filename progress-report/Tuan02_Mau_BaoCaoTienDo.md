# BÁO CÁO TIẾN ĐỘ TUẦN 2

## 1. Thông tin chung

- **Sinh viên:** Phạm Lữ Anh Khoa
- **Đề tài:** Xây dựng phần mềm quản lý chứng chỉ tại Trung tâm Tin học Ánh Dương
- **Tuần:** 02
- **Thời gian:** 07/09/2026 – 13/09/2026
- **Repository:** `csn-dx24tt8-phamluanhkhoa-trungtamtinhoc-php`

---

## 2. Mục tiêu tuần 2

Trong tuần thứ hai, tập trung triển khai và hoàn thiện phiên bản ban đầu của hệ thống quản lý chứng chỉ. Các công việc chính gồm hoàn thiện cơ sở dữ liệu, xây dựng các chức năng quản lý học viên và chứng chỉ, xây dựng trang thống kê, hoàn thiện giao diện người dùng và kiểm tra khả năng chạy hệ thống trên môi trường XAMPP.

Các mục tiêu chính:

- Hoàn thiện cơ sở dữ liệu cho hệ thống.
- Kiểm tra dữ liệu mẫu và mối quan hệ giữa các bảng.
- Hoàn thiện chức năng quản lý học viên.
- Hoàn thiện chức năng quản lý chứng chỉ.
- Xây dựng trang thống kê tổng quan.
- Hoàn thiện giao diện trang quản trị.
- Kiểm tra hệ thống trên môi trường XAMPP.
- Kiểm tra cấu trúc repository và khả năng chạy lại dự án từ source code.
- Cập nhật tài liệu README và lịch sử commit trên GitHub.

---

## 3. Nội dung công việc đã thực hiện

### 3.1. Hoàn thiện và kiểm tra cơ sở dữ liệu

Đã kiểm tra và hoàn thiện cơ sở dữ liệu `quan_ly_chung_chi` trên MySQL/MariaDB.

Các bảng chính của hệ thống gồm:

- `students`: lưu thông tin học viên.
- `certificates`: lưu thông tin chứng chỉ.

Bảng `certificates` được liên kết với bảng `students` thông qua khóa ngoại `student_id`.

Đã thực hiện:

- Tạo cơ sở dữ liệu `quan_ly_chung_chi`.
- Import file `setup/database/database.sql`.
- Kiểm tra cấu trúc các bảng.
- Kiểm tra dữ liệu mẫu.
- Kiểm tra mối quan hệ giữa học viên và chứng chỉ.
- Kiểm tra dữ liệu bằng phpMyAdmin.

Kết quả kiểm tra ban đầu:

- Có 4 học viên mẫu.
- Có 4 chứng chỉ mẫu.
- Các chứng chỉ được liên kết với học viên tương ứng.
- Cơ sở dữ liệu hoạt động bình thường.

---

### 3.2. Hoàn thiện chức năng quản lý học viên

Đã triển khai chức năng quản lý thông tin học viên.

Các chức năng đã thực hiện:

- Xem danh sách học viên.
- Thêm học viên.
- Chỉnh sửa thông tin học viên.
- Xóa học viên.
- Tìm kiếm học viên.
- Hiển thị các thông tin cơ bản của học viên.

Các thông tin quản lý gồm:

- Mã học viên.
- Họ tên.
- Ngày sinh.
- Giới tính.
- Số điện thoại.
- Email.
- Địa chỉ.

Chức năng được kiểm tra trực tiếp trên môi trường XAMPP.

---

### 3.3. Hoàn thiện chức năng quản lý chứng chỉ

Đã triển khai chức năng quản lý chứng chỉ.

Các chức năng đã thực hiện:

- Xem danh sách chứng chỉ.
- Thêm chứng chỉ.
- Chỉnh sửa chứng chỉ.
- Xóa chứng chỉ.
- Tìm kiếm chứng chỉ.
- Liên kết chứng chỉ với học viên.
- Theo dõi trạng thái chứng chỉ.

Thông tin chứng chỉ gồm:

- Mã chứng chỉ.
- Học viên sở hữu chứng chỉ.
- Loại chứng chỉ.
- Ngày cấp.
- Ngày hết hạn.
- Điểm số.
- Trạng thái.
- Ghi chú.

Các trạng thái được sử dụng gồm:

- Đã cấp.
- Hết hạn.
- Đang xử lý.

---

### 3.4. Xây dựng trang thống kê

Đã xây dựng trang thống kê tổng quan nhằm hỗ trợ người quản lý theo dõi tình hình dữ liệu.

Các thông tin thống kê gồm:

- Tổng số học viên.
- Tổng số chứng chỉ.
- Số chứng chỉ đã cấp.
- Số chứng chỉ hết hạn.
- Thống kê chứng chỉ theo loại.
- Thống kê chứng chỉ theo trạng thái.

Các số liệu được lấy trực tiếp từ cơ sở dữ liệu.

---

### 3.5. Hoàn thiện giao diện người dùng

Đã cải thiện giao diện hệ thống theo hướng hiện đại, trực quan và dễ sử dụng hơn.

Các nội dung đã thực hiện:

- Thiết kế lại trang Dashboard.
- Tạo khu vực giới thiệu hệ thống.
- Bổ sung các thẻ thống kê tổng quan.
- Bổ sung hình ảnh minh họa cho các chức năng.
- Thiết kế các nút thao tác nhanh.
- Cải thiện bố cục bảng dữ liệu.
- Cải thiện màu sắc và khoảng cách giữa các thành phần.
- Bổ sung giao diện responsive cơ bản.
- Tạo thanh điều hướng giữa các chức năng.

Giao diện hiện tại gồm các khu vực chính:

- Trang chủ.
- Học viên.
- Chứng chỉ.
- Thống kê.

---

### 3.6. Tổ chức lại cấu trúc repository

Đã tổ chức lại repository theo cấu trúc yêu cầu của đồ án.

Cấu trúc chính hiện tại:

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

Trong đó:

- `setup/`: chứa các file phục vụ cài đặt và cơ sở dữ liệu.
- `scr/`: chứa mã nguồn chính của hệ thống.
- `progress-report/`: chứa báo cáo tiến độ theo tuần.
- `thesis/`: chứa hồ sơ đồ án.
- `soft/`: ghi nhận các phần mềm và công cụ sử dụng.

Đã kiểm tra các thư mục `setup`, `scr`, `progress-report`, `thesis` và `soft`.

---

### 3.7. Kiểm tra khả năng chạy hệ thống trên XAMPP

Đã kiểm tra hệ thống trên môi trường XAMPP.

Môi trường sử dụng:

- Apache.
- MySQL.
- PHP.
- phpMyAdmin.

Sau khi khởi động Apache và MySQL, hệ thống được chạy từ thư mục `htdocs`.

Đường dẫn chạy hệ thống:

```text
http://localhost/csn-dx24tt8-phamluanhkhoa-trungtamtinhoc-php/scr/admin/
```

Kết quả:

- Apache hoạt động.
- MySQL hoạt động.
- Kết nối cơ sở dữ liệu thành công.
- Dashboard hiển thị bình thường.
- Dữ liệu học viên và chứng chỉ được lấy từ cơ sở dữ liệu.
- Các khu vực chính của hệ thống có thể truy cập được.

---

### 3.8. Cập nhật README và GitHub

Đã cập nhật README của repository để mô tả:

- Giới thiệu đề tài.
- Mục tiêu hệ thống.
- Các chức năng chính.
- Công nghệ sử dụng.
- Cấu trúc repository.
- Hướng dẫn cài đặt.
- Hướng dẫn tạo cơ sở dữ liệu.
- Hướng dẫn chạy hệ thống.
- Dữ liệu mẫu và dữ liệu kiểm thử.
- Báo cáo tiến độ.
- Hồ sơ đồ án.
- Phần mềm sử dụng.
- Thông tin tác giả.

Đã thực hiện commit và push các thay đổi lên GitHub.

---

## 4. Kết quả đạt được

Sau tuần 2, hệ thống đã có phiên bản chạy được trên môi trường XAMPP với các chức năng cơ bản.

Kết quả đạt được:

| STT | Nội dung | Trạng thái |
|---|---|---|
| 1 | Cơ sở dữ liệu | Hoàn thành |
| 2 | Dữ liệu mẫu | Hoàn thành |
| 3 | Quản lý học viên | Hoàn thành |
| 4 | Quản lý chứng chỉ | Hoàn thành |
| 5 | Thống kê tổng quan | Hoàn thành |
| 6 | Giao diện Dashboard | Hoàn thành |
| 7 | Kết nối PHP với MySQL | Hoàn thành |
| 8 | Kiểm tra trên XAMPP | Hoàn thành |
| 9 | Tổ chức repository | Hoàn thành |
| 10 | Cập nhật README | Hoàn thành |

---

## 5. Khó khăn gặp phải

Trong quá trình thực hiện tuần 2, một số khó khăn đã gặp:

- Cần điều chỉnh đường dẫn khi thay đổi cấu trúc thư mục của repository.
- Cần kiểm tra lại đường dẫn đến file CSS, JavaScript và các file PHP sau khi đưa mã nguồn vào thư mục `scr`.
- Cần kiểm tra lại kết nối cơ sở dữ liệu sau khi thay đổi vị trí mã nguồn.
- Việc tổ chức repository theo đúng yêu cầu của đồ án cần kiểm tra kỹ để tránh trùng lặp thư mục.
- Cần kiểm tra lại dữ liệu mẫu để đảm bảo các mã học viên và mã chứng chỉ không bị trùng.
- Cần kiểm tra hệ thống trên môi trường XAMPP sau mỗi lần thay đổi cấu trúc.

---

## 6. Cách khắc phục

Các vấn đề được xử lý bằng cách:

- Kiểm tra lại cấu trúc thư mục thực tế trong repository.
- Điều chỉnh các đường dẫn tương đối và đường dẫn đến tài nguyên giao diện.
- Kiểm tra file cấu hình kết nối MySQL.
- Sử dụng phpMyAdmin để kiểm tra trực tiếp dữ liệu.
- Chạy thử hệ thống trên localhost sau mỗi thay đổi quan trọng.
- Kiểm tra Git status trước khi commit.
- Kiểm tra lịch sử commit và push lên GitHub sau khi hoàn thành công việc.

---

## 7. Kiểm thử

Đã tiến hành kiểm thử các chức năng cơ bản:

### Kiểm thử cơ sở dữ liệu

- Kiểm tra database `quan_ly_chung_chi`.
- Kiểm tra bảng `students`.
- Kiểm tra bảng `certificates`.
- Kiểm tra dữ liệu mẫu.
- Kiểm tra liên kết giữa học viên và chứng chỉ.

### Kiểm thử chức năng

- Truy cập trang Dashboard.
- Xem danh sách học viên.
- Thêm học viên.
- Sửa học viên.
- Xóa học viên.
- Tìm kiếm học viên.
- Xem danh sách chứng chỉ.
- Thêm chứng chỉ.
- Sửa chứng chỉ.
- Xóa chứng chỉ.
- Tìm kiếm chứng chỉ.
- Xem trang thống kê.

### Kiểm thử giao diện

- Kiểm tra thanh điều hướng.
- Kiểm tra các nút thao tác.
- Kiểm tra các thẻ thống kê.
- Kiểm tra hình ảnh minh họa.
- Kiểm tra khả năng hiển thị trên trình duyệt.

---

## 8. Minh chứng

Các minh chứng trong tuần gồm:

- Repository GitHub của dự án.
- Lịch sử commit trên GitHub.
- Cấu trúc thư mục repository.
- Cơ sở dữ liệu `quan_ly_chung_chi` trên phpMyAdmin.
- Bảng `students`.
- Bảng `certificates`.
- Giao diện Dashboard.
- Trang quản lý học viên.
- Trang quản lý chứng chỉ.
- Trang thống kê.
- Kết quả chạy hệ thống trên localhost.

---

## 9. Kế hoạch tuần 3

Trong tuần tiếp theo, dự kiến tiếp tục:

- Hoàn thiện và kiểm tra các chức năng hiện có.
- Bổ sung kiểm tra dữ liệu đầu vào.
- Xử lý các trường hợp dữ liệu không hợp lệ.
- Cải thiện chức năng tìm kiếm và lọc dữ liệu.
- Kiểm tra kỹ các thao tác thêm, sửa, xóa.
- Tiếp tục hoàn thiện giao diện.
- Bổ sung và hoàn thiện dữ liệu kiểm thử.
- Cập nhật tài liệu dự án.
- Tiếp tục ghi nhận quá trình phát triển bằng Git/GitHub.

---

## 10. Đánh giá tiến độ

**Mức độ hoàn thành: Đạt yêu cầu kế hoạch tuần 2.**

Đến cuối tuần 2, hệ thống đã có cơ sở dữ liệu hoạt động, các chức năng quản lý học viên và chứng chỉ, trang thống kê và giao diện quản trị cơ bản. Hệ thống có thể chạy trên môi trường XAMPP và repository đã được tổ chức theo cấu trúc phục vụ quá trình phát triển và nộp đồ án.

---

## 11. Tác giả

- **Sinh viên:** Phạm Lữ Anh Khoa
- **Đề tài:** Xây dựng phần mềm quản lý chứng chỉ tại Trung tâm Tin học Ánh Dương