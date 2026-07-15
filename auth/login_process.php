<?php

require_once '../config/database.php';
require_once '../config/session.php';
require_once '../controllers/AuthController.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

$auth = new AuthController($pdo);

if ($auth->login($username, $password)) {
    header('Location: ../admin/dashboard.php');
    exit;
}

header('Location: login.php?error=1');
exit;