<div class="container">
    <div class="row mt-3 mb-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <?= $title; ?>
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="inputUsername">New Username</label>
                            <input type="text" name="newUsername" class="form-control" id="newUsername" aria-describedby="usernamedHelpBlock" placeholder="Input new admin username">
                            <small id="usernameHelpBlock" class="form-text text-muted">
                                Username must be 3-20 characters long.
                            </small>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Current Password</label>
                                <input type="password" name="currentPassword" class="form-control" id="currentPassword" aria-describedby="passwordHelpBlock" placeholder="Input current password">
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Password must be 8-20 characters long.
                                </small></div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">New Password</label>
                                <input type="password" name="newPassword" class="form-control" id="newPassword" placeholder="input new password">
                            </div>
                        </div>
                        <button type="submit" name="add" class="button" onclick="return confirm('Are you sure want to update user admin?');">Update admin user</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>