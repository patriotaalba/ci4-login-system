<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= session()->getFlashdata('message'); ?>
<div class="container bg-light p-3 mt-5">
    <div class="row">
        <div class="col">
            <form action="auth/login" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username...">
                    <div class="form-group mt-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password...">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <div class="mt-3">
                        <a href="register">Don't have account yet?</a>
                    </div>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>