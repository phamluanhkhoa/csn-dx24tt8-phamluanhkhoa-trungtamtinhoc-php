<?php
require_once __DIR__ . '/../../config/database.php';
$pageTitle = 'Quản lý chứng chỉ';

if (isset($_GET['delete'])) {
    $stmt = $pdo->prepare("DELETE FROM certificates WHERE id = ?");
    $stmt->execute([(int)$_GET['delete']]);
    header('Location: index.php?msg=deleted');
    exit;
}

$q = trim($_GET['q'] ?? '');
$sql = "SELECT c.*, s.student_code, s.full_name
        FROM certificates c
        JOIN students s ON s.id = c.student_id";
$params = [];
if ($q !== '') {
    $sql .= " WHERE c.certificate_code LIKE ? OR s.student_code LIKE ? OR s.full_name LIKE ? OR c.certificate_type LIKE ?";
    $like = "%{$q}%";
    $params = [$like,$like,$like,$like];
}
$sql .= " ORDER BY c.id DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$certificates = $stmt->fetchAll();

require_once __DIR__ . '/../../includes/header.php';
?>
<h1>Quản lý chứng chỉ</h1>
<p class="subtitle">Quản lý, tra cứu và cập nhật chứng chỉ của học viên.</p>

<?php if (isset($_GET['msg'])): ?><div class="alert">Thao tác đã được thực hiện thành công.</div><?php endif; ?>

<div class="actions"><a class="btn" href="form.php">+ Thêm chứng chỉ</a></div>

<form class="card" method="get">
<div class="field">
<label>Tìm kiếm chứng chỉ</label>
<input name="q" value="<?= htmlspecialchars($q) ?>" placeholder="Mã chứng chỉ, mã học viên, họ tên, loại chứng chỉ...">
</div>
<div class="actions">
<button class="btn">Tìm kiếm</button>
<a class="btn secondary" href="index.php">Xóa bộ lọc</a>
</div>
</form>

<div class="card" style="margin-top:18px">
<div class="table-wrap">
<table>
<thead><tr><th>Mã chứng chỉ</th><th>Học viên</th><th>Loại</th><th>Ngày cấp</th><th>Hạn</th><th>Điểm</th><th>Trạng thái</th><th>Thao tác</th></tr></thead>
<tbody>
<?php foreach ($certificates as $c): ?>
<tr>
<td><?= htmlspecialchars($c['certificate_code']) ?></td>
<td><?= htmlspecialchars($c['student_code'].' - '.$c['full_name']) ?></td>
<td><?= htmlspecialchars($c['certificate_type']) ?></td>
<td><?= htmlspecialchars($c['issue_date']) ?></td>
<td><?= htmlspecialchars($c['expiry_date'] ?? '') ?></td>
<td><?= htmlspecialchars($c['score'] ?? '') ?></td>
<td>
<?php $class = $c['status']==='Đã cấp'?'success':($c['status']==='Hết hạn'?'danger':''); ?>
<span class="badge <?= $class ?>"><?= htmlspecialchars($c['status']) ?></span>
</td>
<td>
<a class="btn secondary" href="form.php?id=<?= (int)$c['id'] ?>">Sửa</a>
<a class="btn danger" data-confirm="Bạn có chắc muốn xóa chứng chỉ này?" href="index.php?delete=<?= (int)$c['id'] ?>">Xóa</a>
</td>
</tr>
<?php endforeach; ?>
<?php if (!$certificates): ?><tr><td colspan="8" class="empty">Không có dữ liệu.</td></tr><?php endif; ?>
</tbody>
</table>
</div>
</div>
<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
