<?php

require_once '../config/auth.php';
require_once '../includes/header.php';
?>

<div class="container mt-5">
    <h2>Dashboard</h2>
    <hr>
    <h4>
        Selamat Datang,
        <?= htmlspecialchars($_SESSION['fullname']); ?> 👋
    </h4>
    <p>Role : <?= htmlspecialchars($_SESSION['role']); ?></p>
    <a href="../auth/logout.php" class="btn btn-danger mt-3">
        Logout
    </a>
</div>

<?php require_once '../includes/footer.php'; ?>