<div class="container">
    <div class="row mt-3 mb-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form <?= $title; ?>
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="inputUsername">Username</label>
                            <input type="text" name="inputUsername" class="form-control" id="inputUsername" aria-describedby="usernamedHelpBlock" placeholder="Input username">
                            <small id="usernameHelpBlock" class="form-text text-muted">
                                Username must be 3-20 characters long.
                            </small>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" name="inputPassword" class="form-control" id="inputPassword" aria-describedby="passwordHelpBlock" placeholder="Input password">
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Password must be 8-20 characters long.
                                </small></div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Repeat Password</label>
                                <input type="password" name="repeatPassword" class="form-control" id="repeatPassword" placeholder="Repeat password">
                            </div>
                        </div>
                        <button type="submit" name="add" class="btn btn-primary">Save Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>