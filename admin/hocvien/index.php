<?php
require_once __DIR__ . '/../../config/database.php';
$pageTitle = 'Quản lý học viên';

if (isset($_GET['delete'])) {
    $stmt = $pdo->prepare("DELETE FROM students WHERE id = ?");
    $stmt->execute([(int)$_GET['delete']]);
    header('Location: index.php?msg=deleted');
    exit;
}

$q = trim($_GET['q'] ?? '');
if ($q !== '') {
    $stmt = $pdo->prepare("SELECT * FROM students
        WHERE student_code LIKE ? OR full_name LIKE ? OR phone LIKE ? OR email LIKE ?
        ORDER BY id DESC");
    $like = "%{$q}%";
    $stmt->execute([$like, $like, $like, $like]);
    $students = $stmt->fetchAll();
} else {
    $students = $pdo->query("SELECT * FROM students ORDER BY id DESC")->fetchAll();
}
require_once __DIR__ . '/../../includes/header.php';
?>
<h1>Quản lý học viên</h1>
<p class="subtitle">Thêm, sửa, xóa và tìm kiếm thông tin học viên.</p>

<?php if (isset($_GET['msg'])): ?>
<div class="alert">Thao tác đã được thực hiện thành công.</div>
<?php endif; ?>

<div class="actions">
    <a class="btn" href="form.php">+ Thêm học viên</a>
</div>

<form class="card" method="get">
    <div class="field">
        <label for="q">Tìm kiếm</label>
        <input id="q" name="q" value="<?= htmlspecialchars($q) ?>" placeholder="Mã học viên, họ tên, điện thoại, email...">
    </div>
    <div class="actions">
        <button class="btn" type="submit">Tìm kiếm</button>
        <a class="btn secondary" href="index.php">Xóa bộ lọc</a>
    </div>
</form>

<div class="card" style="margin-top:18px">
<div class="table-wrap">
<table>
<thead><tr><th>Mã</th><th>Họ tên</th><th>Ngày sinh</th><th>Giới tính</th><th>Điện thoại</th><th>Email</th><th>Thao tác</th></tr></thead>
<tbody>
<?php foreach ($students as $s): ?>
<tr>
<td><?= htmlspecialchars($s['student_code']) ?></td>
<td><?= htmlspecialchars($s['full_name']) ?></td>
<td><?= htmlspecialchars($s['date_of_birth'] ?? '') ?></td>
<td><?= htmlspecialchars($s['gender']) ?></td>
<td><?= htmlspecialchars($s['phone'] ?? '') ?></td>
<td><?= htmlspecialchars($s['email'] ?? '') ?></td>
<td>
<a class="btn secondary" href="form.php?id=<?= (int)$s['id'] ?>">Sửa</a>
<a class="btn danger" data-confirm="Bạn có chắc muốn xóa học viên này?" href="index.php?delete=<?= (int)$s['id'] ?>">Xóa</a>
</td>
</tr>
<?php endforeach; ?>
<?php if (!$students): ?><tr><td colspan="7" class="empty">Không có dữ liệu.</td></tr><?php endif; ?>
</tbody>
</table>
</div>
</div>
<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
