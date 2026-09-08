CREATE DATABASE IF NOT EXISTS quan_ly_chung_chi
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE quan_ly_chung_chi;

DROP TABLE IF EXISTS certificates;
DROP TABLE IF EXISTS students;

CREATE TABLE students (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    student_code VARCHAR(30) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    date_of_birth DATE NULL,
    gender ENUM('Nam','Nữ','Khác') DEFAULT 'Khác',
    phone VARCHAR(20) NULL,
    email VARCHAR(120) NULL,
    address VARCHAR(255) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE certificates (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    certificate_code VARCHAR(50) NOT NULL UNIQUE,
    student_id INT UNSIGNED NOT NULL,
    certificate_type VARCHAR(100) NOT NULL,
    issue_date DATE NOT NULL,
    expiry_date DATE NULL,
    score DECIMAL(5,2) NULL,
    status ENUM('Đã cấp','Hết hạn','Đang xử lý') DEFAULT 'Đã cấp',
    note VARCHAR(255) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_certificate_student
        FOREIGN KEY (student_id) REFERENCES students(id)
        ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;

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
