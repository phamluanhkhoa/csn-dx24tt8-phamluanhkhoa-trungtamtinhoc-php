-- Dữ liệu kiểm thử cho phần mềm quản lý chứng chỉ Ánh Dương.
-- Có thể chạy sau khi đã tạo database và bảng bằng setup/database/database.sql.
USE quan_ly_chung_chi;

INSERT INTO students
(student_code, full_name, date_of_birth, gender, phone, email, address)
VALUES
('HV001', 'Nguyễn Văn An', '2002-03-15', 'Nam', '0901000001', 'an@example.com', 'Bạc Liêu'),
('HV002', 'Trần Thị Bình', '2003-07-20', 'Nữ', '0901000002', 'binh@example.com', 'Bạc Liêu'),
('HV003', 'Lê Minh Châu', '2001-11-02', 'Nữ', '0901000003', 'chau@example.com', 'Sóc Trăng'),
('HV004', 'Phạm Quốc Dũng', '2000-09-10', 'Nam', '0901000004', 'dung@example.com', 'Cà Mau');

INSERT INTO certificates
(certificate_code, student_id, certificate_type, issue_date, expiry_date, score, status, note)
VALUES
('CC001', 1, 'Tin học văn phòng', '2026-01-15', NULL, 8.50, 'Đã cấp', 'Đạt yêu cầu'),
('CC002', 2, 'Ứng dụng CNTT cơ bản', '2026-02-10', NULL, 9.00, 'Đã cấp', 'Đạt yêu cầu'),
('CC003', 3, 'Tin học văn phòng', '2025-03-05', '2026-03-05', 7.50, 'Hết hạn', 'Cần cập nhật'),
('CC004', 4, 'Ứng dụng CNTT nâng cao', '2026-04-20', NULL, 8.75, 'Đã cấp', 'Đạt yêu cầu');
