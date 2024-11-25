<div class="d-flex align-items-center justify-content-center">
    <div class="col col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">User Information</h5>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group mb-2">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" value="<?= esc($user['username']); ?>" readonly>
                    </div>
                    <!--<div class="form-group mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="confpassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confpassword" id="confpassword" class="form-control">
                    </div> -->
                    <div class="form-group mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?= esc($user['email']); ?>" readonly>
                    </div>
                    <div class="form-group mb-2">
                        <label for="fullname" class="form-label">Fullname</label>
                        <input type="text" name="fullname" id="fullname" class="form-control" value="<?= esc($user['fullname']); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <a href="<?= base_url('users'); ?>" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
