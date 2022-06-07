<?= $this->extend("Layouts/User/Master_user") ?>

<?= $this->section("content") ?>

<?= $this->include("Layouts/User/Navbar_user") ?>
<div class="login_area justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-11 col-md-6 text-center">
                <img src="<?= base_url() ?>/img/illustrasi/login.png" alt="">
            </div>
            <div class="col-11 col-md-6">
                <h4 class="fw-bold">Daftar</h4>
                <p>mari selamatkan bumi kita dari sampah</p>
                <form action="<?= base_url() ?>/proses_daftar" method="POST" autocomplete="off">
                    <?= csrf_field(); ?>
                    <label for="username" class="form-label label_input">username</label>
                    <input type="text" name="username" class="form-control border-0 py-2  <?= ($validation->hasError('username')) ? 'is-invalid' :  ''; ?>" id="username" value="<?= old('username'); ?>" placeholder="Masukkan username kamu" required>
                    <span class="invalid-feedback">
                        <?= $validation->getError('username'); ?>
                    </span>
                    <label for="email" class="form-label label_input">Email</label>
                    <input type="email" name="email" class="form-control border-0 py-2  <?= ($validation->hasError('email')) ? 'is-invalid' :  ''; ?>" id="email" placeholder="Masukkan email kamu" required value="<?= old('email'); ?>">
                    <span class="invalid-feedback">
                        <?= $validation->getError('email'); ?>
                    </span>

                    <label for="password" class="form-label mt-3 label_input">Kata Sandi</label>
                    <input type="password" name="password" class="form-control border-0 py-2  <?= ($validation->hasError('password')) ? 'is-invalid' :  ''; ?>" id="password" placeholder="Masukkan kata sandi kamu" required>
                    <span class="invalid-feedback">
                        <?= $validation->getError('password'); ?>
                    </span>
                    <div class="d-flex align-items-center justify-content-between mb-5 mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="showPass">
                            <label class="form-check-label" for="showPass">
                                Tampilkan kata sandi
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-success py-2 rounded-pill text-white w-100" type="submit">Daftar</button>
                    <p class="mt-3 mb-0 text-center not_account">Sudah memiliki akun? <a href="<?= base_url() ?>/login" class="text-success fw-bold text-decoration-none">login</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->include("Layouts/User/footer") ?>
<?= $this->endSection() ?>