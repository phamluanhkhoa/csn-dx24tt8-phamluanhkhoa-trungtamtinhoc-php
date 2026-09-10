<?php
require_once __DIR__ . '/../config/database.php';
$pageTitle = 'Trang chủ';
require_once __DIR__ . '/../includes/header.php';

$students = (int)$pdo->query("SELECT COUNT(*) FROM students")->fetchColumn();
$certificates = (int)$pdo->query("SELECT COUNT(*) FROM certificates")->fetchColumn();
$issued = (int)$pdo->query("SELECT COUNT(*) FROM certificates WHERE status = 'Đã cấp'")->fetchColumn();
$expired = (int)$pdo->query("SELECT COUNT(*) FROM certificates WHERE status = 'Hết hạn'")->fetchColumn();
$recent = $pdo->query("SELECT c.certificate_code, c.certificate_type, c.issue_date, c.status, s.full_name FROM certificates c JOIN students s ON s.id = c.student_id ORDER BY c.id DESC LIMIT 5")->fetchAll();
?>
<section class="hero">
    <div class="hero-content">
        <div class="hero-kicker">✦ HỆ THỐNG QUẢN LÝ</div>
        <h1>Quản lý chứng chỉ<br>thông minh & gọn gàng</h1>
        <p class="subtitle">Trung tâm Tin học Ánh Dương · Theo dõi học viên, chứng chỉ và tra cứu dữ liệu trên một giao diện duy nhất.</p>
        <div class="actions" style="margin-bottom:0">
            <a class="btn" href="hocvien/form.php">＋ Thêm học viên</a>
            <a class="btn secondary" href="chungchi/form.php">＋ Thêm chứng chỉ</a>
        </div>
    </div>
    <div class="hero-art">
        <img src="/quan-ly-chung-chi-anh-duong/scr/public/images/hero-dashboard.svg" alt="Minh họa hệ thống quản lý chứng chỉ">
    </div>
</section>

<div class="grid grid-4">
    <div class="stat-card">
        <div class="stat-top"><span class="stat-label">Tổng học viên</span><span class="stat-icon">👥</span></div>
        <div class="stat-value"><?= $students ?></div>
        <div class="stat-note">Hồ sơ đang quản lý</div>
    </div>
    <div class="stat-card">
        <div class="stat-top"><span class="stat-label">Tổng chứng chỉ</span><span class="stat-icon">▣</span></div>
        <div class="stat-value"><?= $certificates ?></div>
        <div class="stat-note">Tất cả chứng chỉ</div>
    </div>
    <div class="stat-card">
        <div class="stat-top"><span class="stat-label">Đã cấp</span><span class="stat-icon">✓</span></div>
        <div class="stat-value"><?= $issued ?></div>
        <div class="stat-note">Chứng chỉ hợp lệ</div>
    </div>
    <div class="stat-card">
        <div class="stat-top"><span class="stat-label">Hết hạn</span><span class="stat-icon">!</span></div>
        <div class="stat-value"><?= $expired ?></div>
        <div class="stat-note">Cần theo dõi</div>
    </div>
</div>

<section class="visual-section">
    <div class="section-head visual-head"><div><span class="eyebrow">KHÔNG GIAN LÀM VIỆC</span><h2>Quản lý trực quan, thao tác nhanh</h2></div><span class="live-pill"><span></span> Hệ thống đang hoạt động</span></div>
    <div class="visual-grid">
        <a class="visual-card" href="hocvien/">
            <img src="/quan-ly-chung-chi-anh-duong/scr/public/images/students.svg" alt="Quản lý học viên">
            <div class="visual-overlay"><strong>Học viên</strong><span>Hồ sơ tập trung & dễ tra cứu →</span></div>
        </a>
        <a class="visual-card" href="chungchi/">
            <img src="/quan-ly-chung-chi-anh-duong/scr/public/images/certificate.svg" alt="Quản lý chứng chỉ">
            <div class="visual-overlay"><strong>Chứng chỉ</strong><span>Cấp, cập nhật và theo dõi →</span></div>
        </a>
        <a class="visual-card" href="thongke/">
            <img src="/quan-ly-chung-chi-anh-duong/scr/public/images/statistics.svg" alt="Thống kê">
            <div class="visual-overlay"><strong>Thống kê</strong><span>Nắm bắt số liệu nhanh chóng →</span></div>
        </a>
    </div>
</section>

<div class="grid grid-2" style="margin-top:18px">
    <section class="card">
        <div class="section-head"><h2>Truy cập nhanh</h2></div>
        <div class="quick-grid">
            <a class="quick-action" href="hocvien/">
                <span class="quick-icon">👥</span>
                <span><div class="quick-title">Quản lý học viên</div><div class="quick-desc">Thêm, sửa, xóa, tìm kiếm</div></span>
            </a>
            <a class="quick-action" href="chungchi/">
                <span class="quick-icon">▣</span>
                <span><div class="quick-title">Quản lý chứng chỉ</div><div class="quick-desc">Cấp và cập nhật chứng chỉ</div></span>
            </a>
            <a class="quick-action" href="thongke/">
                <span class="quick-icon">↗</span>
                <span><div class="quick-title">Xem thống kê</div><div class="quick-desc">Theo dõi số liệu hệ thống</div></span>
            </a>
        </div>
    </section>

    <section class="card">
        <div class="section-head">
            <h2>Chứng chỉ gần đây</h2>
            <a class="btn secondary" href="chungchi/">Xem tất cả</a>
        </div>
        <div class="table-wrap">
            <table>
                <thead><tr><th>Mã</th><th>Học viên</th><th>Trạng thái</th></tr></thead>
                <tbody>
                <?php foreach ($recent as $c): ?>
                    <tr>
                        <td><strong><?= htmlspecialchars($c['certificate_code']) ?></strong><br><span class="muted"><?= htmlspecialchars($c['certificate_type']) ?></span></td>
                        <td><?= htmlspecialchars($c['full_name']) ?><br><span class="muted"><?= htmlspecialchars($c['issue_date']) ?></span></td>
                        <td><?php $class = $c['status']==='Đã cấp'?'success':($c['status']==='Hết hạn'?'danger':'warning'); ?><span class="badge <?= $class ?>"><?= htmlspecialchars($c['status']) ?></span></td>
                    </tr>
                <?php endforeach; ?>
                <?php if (!$recent): ?><tr><td colspan="3" class="empty">Chưa có dữ liệu chứng chỉ.</td></tr><?php endif; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
