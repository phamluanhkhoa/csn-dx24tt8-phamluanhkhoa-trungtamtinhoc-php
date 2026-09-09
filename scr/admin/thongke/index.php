<?php
require_once __DIR__ . '/../../config/database.php';
$pageTitle = 'Thống kê';

$totalStudents = (int)$pdo->query("SELECT COUNT(*) FROM students")->fetchColumn();
$totalCerts = (int)$pdo->query("SELECT COUNT(*) FROM certificates")->fetchColumn();
$issued = (int)$pdo->query("SELECT COUNT(*) FROM certificates WHERE status='Đã cấp'")->fetchColumn();
$expired = (int)$pdo->query("SELECT COUNT(*) FROM certificates WHERE status='Hết hạn'")->fetchColumn();
$processing = (int)$pdo->query("SELECT COUNT(*) FROM certificates WHERE status='Đang xử lý'")->fetchColumn();

$types = $pdo->query("SELECT certificate_type, COUNT(*) total FROM certificates GROUP BY certificate_type ORDER BY total DESC")->fetchAll();

require_once __DIR__ . '/../../includes/header.php';
?>
<h1>Thống kê</h1>
<p class="subtitle">Tổng hợp nhanh dữ liệu trong hệ thống.</p>

<div class="grid grid-4">
<div class="card"><div class="stat-label">Học viên</div><div class="stat-value"><?= $totalStudents ?></div></div>
<div class="card"><div class="stat-label">Chứng chỉ</div><div class="stat-value"><?= $totalCerts ?></div></div>
<div class="card"><div class="stat-label">Đã cấp</div><div class="stat-value"><?= $issued ?></div></div>
<div class="card"><div class="stat-label">Hết hạn</div><div class="stat-value"><?= $expired ?></div></div>
</div>

<div class="grid grid-2" style="margin-top:18px">
<div class="card">
<h2>Trạng thái chứng chỉ</h2>
<table>
<tr><th>Trạng thái</th><th>Số lượng</th></tr>
<tr><td>Đã cấp</td><td><?= $issued ?></td></tr>
<tr><td>Hết hạn</td><td><?= $expired ?></td></tr>
<tr><td>Đang xử lý</td><td><?= $processing ?></td></tr>
</table>
</div>
<div class="card">
<h2>Chứng chỉ theo loại</h2>
<table>
<tr><th>Loại chứng chỉ</th><th>Số lượng</th></tr>
<?php foreach ($types as $row): ?>
<tr><td><?= htmlspecialchars($row['certificate_type']) ?></td><td><?= (int)$row['total'] ?></td></tr>
<?php endforeach; ?>
<?php if (!$types): ?><tr><td colspan="2" class="empty">Chưa có dữ liệu.</td></tr><?php endif; ?>
</table>
</div>
</div>
<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
