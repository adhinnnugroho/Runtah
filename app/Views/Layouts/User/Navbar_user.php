<div class="mobile_version px-0 d-lg-none" style="height: max-content;">
    <?php if (!session()->get('logged_in')) : ?>
        <nav class="navbar  navbar-expand-lg navbar-light shadow  fixed-top">
            <div class="box navbar-brand">
                <img src="<?= base_url() ?>/img/logo/logo.png" width="55px" class="float-left">
            </div>
            <div class="cart float-right d-flex">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ms-4">
                        <a class="nav-link btn btn-success rounded-pill px-5 text-white fw-bold" href="<?= base_url() ?>/login">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    <?php else : ?>
        <nav class="navbar  navbar-expand-lg navbar-light shadow  fixed-top">
            <div class="box">
                <a class="navbar-brand" href="#">
                    <img class="img-profile rounded-circle" src="<?= ($data_user['foto'] == null) ? 'https://ui-avatars.com/api/?background=9AB2E2&color=185ADB&name=' . session()->get("username") : '/img/user/' . $data_user['foto'] ?>">
                    <span class="mr-2 username small">hai <?= session()->get('username') ?></span>
                </a>
            </div>
        </nav>
    <?php endif; ?>
</div>

<!-- pc version -->
<div class="px-0 pc_version d-none d-lg-block" style="height: fit-content;">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
        <div class="container">
            <a class="navbar-brand type-1" href="<?= base_url() ?>">
                <div class="container">
                    <img src="<?= base_url() ?>/img/logo/logo.png" width="55px" class="float-left">
                </div>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <?php if (!session()->get('logged_in')) : ?>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a class="nav-link text-success" aria-current="page" href="<?= base_url() ?>/Tampilan/tiket">Tabungan</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="<?= base_url() ?>/login" style="color: black !important;">Masuk</a>
                        </li>
                        <li class="nav-item ms-4">
                            <a class="nav-link btn btn-success rounded-pill px-5 text-white fw-bold" href="<?= base_url() ?>/daftar">Daftar</a>
                        </li>
                    </ul>
                <?php else : ?>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item  d-flex align-items-center">
                            <a class="nav-link text-success tabungan" aria-current="page" href="<?= base_url() ?>/Tampilan/tiket">Tabungan</a>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="<?= ($data_user['foto'] == null) ? 'https://ui-avatars.com/api/?background=9AB2E2&color=185ADB&name=' . session()->get("username") : '/img/user/' . $data_user['foto'] ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url() ?>/user/profile">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="<?= base_url() ?>/logout" id="Logout">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</div>