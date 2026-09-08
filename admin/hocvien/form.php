<?php
require_once __DIR__ . '/../../config/database.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$student = [
    'student_code'=>'', 'full_name'=>'', 'date_of_birth'=>'', 'gender'=>'Khác',
    'phone'=>'', 'email'=>'', 'address'=>''
];

if ($id) {
    $stmt = $pdo->prepare("SELECT * FROM students WHERE id = ?");
    $stmt->execute([$id]);
    $student = $stmt->fetch();
    if (!$student) exit('Không tìm thấy học viên.');
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $studentCode = trim($_POST['student_code'] ?? '');
    $fullName = trim($_POST['full_name'] ?? '');
    $dateOfBirth = $_POST['date_of_birth'] ?: null;
    $gender = $_POST['gender'] ?? 'Khác';
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $address = trim($_POST['address'] ?? '');

    if ($studentCode === '' || $fullName === '') {
        $error = 'Mã học viên và họ tên là bắt buộc.';
    } else {
        try {
            if ($id) {
                $stmt = $pdo->prepare("UPDATE students SET student_code=?, full_name=?, date_of_birth=?, gender=?, phone=?, email=?, address=? WHERE id=?");
                $stmt->execute([$studentCode,$fullName,$dateOfBirth,$gender,$phone,$email,$address,$id]);
            } else {
                $stmt = $pdo->prepare("INSERT INTO students (student_code,full_name,date_of_birth,gender,phone,email,address) VALUES (?,?,?,?,?,?,?)");
                $stmt->execute([$studentCode,$fullName,$dateOfBirth,$gender,$phone,$email,$address]);
            }
            header('Location: index.php?msg=saved');
            exit;
        } catch (PDOException $e) {
            $error = 'Không thể lưu. Có thể mã học viên đã tồn tại.';
        }
    }
}

$pageTitle = $id ? 'Sửa học viên' : 'Thêm học viên';
require_once __DIR__ . '/../../includes/header.php';
?>
<h1><?= $id ? 'Sửa học viên' : 'Thêm học viên' ?></h1>
<p class="subtitle">Nhập đầy đủ thông tin cần thiết.</p>
<?php if ($error): ?><div class="alert" style="background:#fef3f2;color:#b42318"><?= htmlspecialchars($error) ?></div><?php endif; ?>

<form class="card" method="post">
<div class="form-grid">
<div class="field"><label>Mã học viên *</label><input name="student_code" required value="<?= htmlspecialchars($student['student_code']) ?>"></div>
<div class="field"><label>Họ tên *</label><input name="full_name" required value="<?= htmlspecialchars($student['full_name']) ?>"></div>
<div class="field"><label>Ngày sinh</label><input type="date" name="date_of_birth" value="<?= htmlspecialchars($student['date_of_birth'] ?? '') ?>"></div>
<div class="field"><label>Giới tính</label><select name="gender">
<?php foreach (['Nam','Nữ','Khác'] as $g): ?><option <?= $student['gender']===$g?'selected':'' ?>><?= $g ?></option><?php endforeach; ?>
</select></div>
<div class="field"><label>Điện thoại</label><input name="phone" value="<?= htmlspecialchars($student['phone'] ?? '') ?>"></div>
<div class="field"><label>Email</label><input type="email" name="email" value="<?= htmlspecialchars($student['email'] ?? '') ?>"></div>
<div class="field full"><label>Địa chỉ</label><input name="address" value="<?= htmlspecialchars($student['address'] ?? '') ?>"></div>
</div>
<div class="actions"><button class="btn" type="submit">Lưu</button><a class="btn secondary" href="index.php">Quay lại</a></div>
</form>
<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
