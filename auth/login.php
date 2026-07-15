<?php require '../includes/header.php'; ?>

<div class="login-container">

    <div class="login-card">

        <div class="login-logo">
            🛒
        </div>
        <h2>SmartPOS</h2>
        <p>Sign in to continue</p>
        <form action="login_process.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input
                    type="text"
                    name="username"
                    class="form-control"
                    required>
            </div>
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    required>
            </div>
            <button
                type="submit"
                class="btn btn-primary w-100">
                Login
                </button>
        </form>
    </div>
</div>

<?php require '../includes/footer.php'; ?>