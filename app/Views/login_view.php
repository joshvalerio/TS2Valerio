<div class="d-flex align-items-center justify-content-center min-vh-100">
    <div class="card shadow-sm p-4" style="width: 400px;">
        <h2 class="text-center mb-4">Log In</h2>
        <form action="<?= base_url('login'); ?>" method="post">
            <div class="form-group mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username" required>
            </div>
            <div class="form-group mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Log In</button>
            </div>
            <p class="text-center mt-3">Don't have an account? <a href="<?= base_url('users/add'); ?>">Register here</a></p>
        </form>
    </div>
</div>
