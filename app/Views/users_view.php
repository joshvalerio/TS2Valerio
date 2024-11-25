
<div class="container">
    <h3>List of Users</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Fullname</th>
                <th>Date Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($users)): ?>
                <?php foreach($users as $user): ?>
                
                <tr>
                    <td><?= $user->id; ?></td>
                    <td><?= $user->username; ?></td>
                    <td><?= $user->password; ?></td>
                    <td><?= $user->email; ?></td>
                    <td><?= $user->fullname; ?></td>
                    <td><?= date('Y-m-d', strtotime($user->datecreated)); ?></td> <!-- Format date -->
                    <td>
                        <a href="<?= base_url('users/view/'.$user->id); ?>" class="btn btn-sm btn-warning">View</a>
                        <a href="<?= base_url('users/edit/'.$user->id); ?>" class="btn btn-sm btn-secondary">Edit</a>
                        <a href="<?= base_url('users/delete/'.$user->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" class="text-center">No users found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>