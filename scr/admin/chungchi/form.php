<?php
require_once __DIR__ . '/../../config/database.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$cert = [
    'certificate_code'=>'', 'student_id'=>'', 'certificate_type'=>'',
    'issue_date'=>date('Y-m-d'), 'expiry_date'=>'', 'score'=>'',
    'status'=>'Đã cấp', 'note'=>''
];

if ($id) {
    $stmt = $pdo->prepare("SELECT * FROM certificates WHERE id = ?");
    $stmt->execute([$id]);
    $cert = $stmt->fetch();
    if (!$cert) exit('Không tìm thấy chứng chỉ.');
}

$students = $pdo->query("SELECT id, student_code, full_name FROM students ORDER BY full_name")->fetchAll();
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        trim($_POST['certificate_code'] ?? ''),
        (int)($_POST['student_id'] ?? 0),
        trim($_POST['certificate_type'] ?? ''),
        $_POST['issue_date'] ?? '',
        $_POST['expiry_date'] ?: null,
        $_POST['score'] !== '' ? (float)$_POST['score'] : null,
        $_POST['status'] ?? 'Đã cấp',
        trim($_POST['note'] ?? '')
    ];

    if ($data[0] === '' || !$data[1] || $data[2] === '' || $data[3] === '') {
        $error = 'Mã chứng chỉ, học viên, loại chứng chỉ và ngày cấp là bắt buộc.';
    } else {
        try {
            if ($id) {
                $stmt = $pdo->prepare("UPDATE certificates SET certificate_code=?, student_id=?, certificate_type=?, issue_date=?, expiry_date=?, score=?, status=?, note=? WHERE id=?");
                $stmt->execute([...$data, $id]);
            } else {
                $stmt = $pdo->prepare("INSERT INTO certificates (certificate_code,student_id,certificate_type,issue_date,expiry_date,score,status,note) VALUES (?,?,?,?,?,?,?,?)");
                $stmt->execute($data);
            }
            header('Location: index.php?msg=saved');
            exit;
        } catch (PDOException $e) {
            $error = 'Không thể lưu. Có thể mã chứng chỉ đã tồn tại hoặc học viên không hợp lệ.';
        }
    }
}

$pageTitle = $id ? 'Sửa chứng chỉ' : 'Thêm chứng chỉ';
require_once __DIR__ . '/../../includes/header.php';
?>
<h1><?= $id ? 'Sửa chứng chỉ' : 'Thêm chứng chỉ' ?></h1>
<p class="subtitle">Nhập thông tin chứng chỉ.</p>
<?php if ($error): ?><div class="alert" style="background:#fef3f2;color:#b42318"><?= htmlspecialchars($error) ?></div><?php endif; ?>

<form class="card" method="post">
<div class="form-grid">
<div class="field"><label>Mã chứng chỉ *</label><input name="certificate_code" required value="<?= htmlspecialchars($cert['certificate_code']) ?>"></div>
<div class="field"><label>Học viên *</label><select name="student_id" required>
<option value="">-- Chọn học viên --</option>
<?php foreach ($students as $s): ?>
<option value="<?= (int)$s['id'] ?>" <?= (int)$cert['student_id']===(int)$s['id']?'selected':'' ?>>
<?= htmlspecialchars($s['student_code'].' - '.$s['full_name']) ?>
</option>
<?php endforeach; ?>
</select></div>
<div class="field"><label>Loại chứng chỉ *</label><input name="certificate_type" required value="<?= htmlspecialchars($cert['certificate_type']) ?>"></div>
<div class="field"><label>Ngày cấp *</label><input type="date" name="issue_date" required value="<?= htmlspecialchars($cert['issue_date']) ?>"></div>
<div class="field"><label>Ngày hết hạn</label><input type="date" name="expiry_date" value="<?= htmlspecialchars($cert['expiry_date'] ?? '') ?>"></div>
<div class="field"><label>Điểm</label><input type="number" step="0.01" min="0" max="100" name="score" value="<?= htmlspecialchars((string)($cert['score'] ?? '')) ?>"></div>
<div class="field"><label>Trạng thái</label><select name="status">
<?php foreach (['Đã cấp','Hết hạn','Đang xử lý'] as $st): ?><option <?= $cert['status']===$st?'selected':'' ?>><?= $st ?></option><?php endforeach; ?>
</select></div>
<div class="field full"><label>Ghi chú</label><textarea name="note"><?= htmlspecialchars($cert['note'] ?? '') ?></textarea></div>
</div>
<div class="actions"><button class="btn" type="submit">Lưu</button><a class="btn secondary" href="index.php">Quay lại</a></div>
</form>
<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
