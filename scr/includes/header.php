<?php
$pageTitle = $pageTitle ?? 'Quản lý chứng chỉ';
$baseUrl = '/quan-ly-chung-chi-anh-duong/scr/admin/';
$currentPath = $_SERVER['PHP_SELF'] ?? '';
function navActive(string $needle, string $currentPath): string {
    return str_contains($currentPath, $needle) ? 'active' : '';
}
?>
<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle) ?> - Ánh Dương</title>
    <link rel="stylesheet" href="/quan-ly-chung-chi-anh-duong/scr/public/css/style.css">
</head>
<body>
<header class="topbar">
    <div class="container topbar-inner">
        <a class="brand" href="<?= $baseUrl ?>">
            <span class="brand-mark">✦</span>
            <span>ÁNH DƯƠNG</span>
        </a>
        <nav aria-label="Điều hướng chính">
            <a class="<?= navActive('/admin/index.php', $currentPath) ?>" href="<?= $baseUrl ?>">Trang chủ</a>
            <a class="<?= navActive('/admin/hocvien/', $currentPath) ?>" href="<?= $baseUrl ?>hocvien/">Học viên</a>
            <a class="<?= navActive('/admin/chungchi/', $currentPath) ?>" href="<?= $baseUrl ?>chungchi/">Chứng chỉ</a>
            <a class="<?= navActive('/admin/thongke/', $currentPath) ?>" href="<?= $baseUrl ?>thongke/">Thống kê</a>
        </nav>
    </div>
</header>
<main class="container">
