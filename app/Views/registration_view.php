<div class="d-flex align-items-center justify-content-center min-vh-100">
    <div class="card shadow-sm p-4" style="width: 500px;">
        <h2 class="text-center mb-4">Register</h2>
        <form action="<?= base_url('users/add'); ?>" method="post">
            <div class="form-group mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username" required>
            </div>
            <div class="form-group mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <div class="form-group mb-3">
                <label for="confpassword" class="form-label">Confirm Password</label>
                <input type="password" name="confpassword" id="confpassword" class="form-control" placeholder="Re-enter your password" required>
            </div>
            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="form-group mb-3">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter your full name" required>
            </div>
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary btn-lg">Register</button>
            </div>
            <p class="text-center">Already have an account? <a href="<?= base_url('login'); ?>">Log in here</a></p>
        </form>
    </div>
</div>
