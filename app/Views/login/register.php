<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container bg-light p-3 mt-5">
    <div class="row">
        <div class="col">
            <form action="auth/register" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-group mt-3">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control <?= ($validate->hasError('name')) ? 'is-invalid' : ''; ?>" id="name" name="name" placeholder="Enter Name..." value="<?= old('name'); ?>">
                        <div class="invalid-feedback">
                            <?= $validate->getError('name'); ?>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control <?= ($validate->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" placeholder="Enter Username..." value="<?= old('username'); ?>">
                        <div class="invalid-feedback">
                            <?= $validate->getError('username'); ?>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control <?= ($validate->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Enter Password..." value="<?= old('password'); ?>">
                        <div class="invalid-feedback">
                            <?= $validate->getError('password'); ?>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="conf-password">Confirm Password</label>
                        <input type="password" class="form-control <?= ($validate->hasError('conf-password')) ? 'is-invalid' : ''; ?>" id="conf-password" name="conf-password" placeholder="Confirm Password..." value="<?= old('conf-password'); ?>">
                        <div class="invalid-feedback">
                            <?= $validate->getError('conf-password'); ?>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>

                    <div class="mt-3">
                        <a href="/">Already have an account?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>