<div class="px-0 pc_version d-none d-lg-block" style="height: fit-content;">
     <div class="sidebar_user">
          <div class="container position-relative pb-200 pt-5">
               <div class="card p-3 card-sidebar border-0 h-100 radius-16">
                    <div class="d-flex align-items-center border-bottom pb-3 mb-2">
                         <img src="<?= ($data_user['foto'] == null) ? 'https://ui-avatars.com/api/?background=9AB2E2&color=185ADB&name=' . session()->get("username") : '/img/user/' . $data_user['foto'] ?>" id="email" placeholder="Masukkan email kamu" required value="<?= old('email'); ?>" class="rounded-circle img-profile" />
                         <h6 class="m-0 fw-bold ms-2"><?= session()->get('username') ?></h6>
                    </div>
                    <a href="<?= base_url() ?>/user/profile" class="item-menu text-decoration-none p-2 text-black mb-1 <?= (session()->get("url_aktif") == "user/profile") ? 'sidebar_user_aktif' : '' ?>">
                         Profile
                    </a>
                    <a href="<?= base_url() ?>/user/ubah_password" class="item-menu text-decoration-none p-2 text-black mb-1 <?= (session()->get("url_aktif") == "user/ubah_password") ? 'sidebar_user_aktif' : '' ?>">
                         Ubah Password
                    </a>
                    <a href="/logout" class="item-menu text-decoration-none p-2 text-danger">
                         Keluar
                    </a>
               </div>
          </div>
     </div>
</div>

<div class="mobile_version px-0 d-lg-none pc_version" style="height: max-content;">
     <div class="sidebar_user">
          <div class="position-relative pb-200 pt-5">
               <div class="card card-sidebar border-0 radius-16">
                    <a href="<?= base_url() ?>/user/mobile_profile" class="item-menu text-decoration-none p-2 text-black mb-1">
                         <i class="fas fa-pencil-ruler mr-2"></i> Profile
                    </a>
                    <a href="<?= base_url() ?>/user/ubah_password" class="item-menu text-decoration-none p-2 text-black mb-1">
                         <i class="fas fa-lock mr-2"></i> Ubah Password
                    </a>
                    <a href="<?= base_url() ?>/user/bantuan" class="item-menu text-decoration-none p-2 text-black mb-1">
                         <i class="fas fa-question mr-2"></i> bantuan
                    </a>
                    <a href="<?= base_url() ?>/auth/logout" class="item-menu text-decoration-none p-2 text-danger" id="keluar">
                         <i class="fas fa-sign-out-alt mr-2"></i> Keluar
                    </a>
               </div>
          </div>
     </div>
</div>