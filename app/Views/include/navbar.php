<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">FreshMart</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= base_url(); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('products'); ?>">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('users'); ?>">List of Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('index/about'); ?>">About Me</a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="<?= site_url('login'); ?>" class="btn btn-outline-light me-2">Logout</a>
                <a href="<?= site_url('signup'); ?>" class="btn btn-light">Sign Up</a>
            </div>
        </div>
    </div>
</nav>
