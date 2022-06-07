<?= $this->extend("Layouts/User/Master_user") ?>
<?= $this->section("content") ?>
<?= $this->include("Layouts/User/Navbar_user") ?>

<div class="px-0 pc_version d-none d-lg-block" style="height: fit-content;">

     <!------------------
     Slider
    ---------------------->
     <div class="container-fluid">
          <div class="row pc_slider  owl-carousel">
               <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <img src="<?= base_url() ?>/img/slider/1.png" class=" d-block w-100" alt="...">
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <img src="<?= base_url() ?>/img/slider/2.png" class="d-block w-100" alt="...">
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <img src="<?= base_url() ?>/img/slider/3.png" class="d-block w-100" alt="...">
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <img src="<?= base_url() ?>/img/slider/3.png" class="d-block w-100" alt="...">
               </div>
          </div>
     </div>

     <!------------------
          Menu
     ---------------------->
     <div class="menu">
          <div class="row  mainmenu owl-carousel">
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <a class="btn" data-filter="*" class="filter-active">
                         <div class="card">
                              <img src="<?= base_url() ?>/img/icon/icon-allproductinactive.svg" class="card-img-top" alt="...">
                              <div class="card-body">
                                   <h5 class="card-title">All</h5>
                              </div>
                         </div>
                    </a>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <a class="btn" data-filter=".filter-koran">
                         <div class="card">
                              <img src="<?= base_url() ?>/img/icon/koran.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                   <h5 class="card-title">Koran</h5>
                              </div>
                         </div>
                    </a>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <a class="btn" data-filter=".filter-Plastik">
                         <div class="card">
                              <img src="<?= base_url() ?>/img/icon/plastik.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                   <h5 class="card-title">Plastik</h5>
                              </div>
                         </div>
                    </a>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <a class="btn" data-filter=".filter-ban">
                         <div class="card">
                              <img src="<?= base_url() ?>/img/icon/ban.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                   <h5 class="card-title">Ban Bekas</h5>
                              </div>
                         </div>
                    </a>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <a class="btn" data-filter=".filter-electronic">
                         <div class="card">
                              <img src="<?= base_url() ?>/img/icon/ac.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                   <h5 class="card-title">electronic</h5>
                              </div>
                         </div>
                    </a>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <a class="btn" data-filter=".filter-logam">
                         <div class="card">
                              <img src="<?= base_url() ?>/img/icon/besi.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                   <h5 class="card-title">logam</h5>
                              </div>
                         </div>
                    </a>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <a class="btn" data-filter=".filter-botol">
                         <div class="card">
                              <img src="<?= base_url() ?>/img/icon/botol.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                   <h5 class="card-title">Botol bekas</h5>
                              </div>
                         </div>
                    </a>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <a class="btn" data-filter=".filter-buku">
                         <div class="card">
                              <img src="<?= base_url() ?>/img/icon/buku.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                   <h5 class="card-title">Buku bekas</h5>
                              </div>
                         </div>
                    </a>
               </div>
          </div>
     </div>



     <!------------------
          Nama Sampah
     ---------------------->
     <div class="nama_sampah">
          <div class="container">
               <div class="row">
                    <?php foreach ($data_sampah as $data) : ?>
                         <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-12 portfolio-item filter-<?= $data['nama_jenis_sampah'] ?>" style="height: fit-content;">
                              <a href="<?= base_url() ?>/sampah/index/<?= $data['slug'] ?>" class="btn">
                                   <figure class="figure">
                                        <div class="figure-img m-0">
                                             <img src="<?= base_url() ?>/img/data_sampah/<?= $data['foto_Sampah'] ?>" class="figure-img img-fluid m-0">
                                        </div>
                                        <figcaption class="figure-caption">
                                             <h5><?= $data['nama_sampah'] ?></h5>
                                             <p>RP <?= number_format($data['harga_sampah']) ?></p>
                                        </figcaption>
                                   </figure>
                              </a>
                         </div>
                    <?php endforeach; ?>
               </div>
          </div>
     </div>

     <?= $this->include("Layouts/User/footer") ?>
</div>


<div class="mobile_version px-0 d-lg-none" style="height: max-content;">
     <!------------------
     Slider
    ---------------------->
     <div class="mobile_version_slider">
          <div class="col-12">
               <div class="mobile_slider  owl-carousel">
                    <img src="<?= base_url() ?>/img/slider/1.png" class=" d-block w-100" alt="...">
                    <img src="<?= base_url() ?>/img/slider/2.png" class="d-block w-100" alt="...">
                    <img src="<?= base_url() ?>/img/slider/3.png" class="d-block w-100" alt="...">
                    <img src="<?= base_url() ?>/img/slider/3.png" class="d-block w-100" alt="...">
               </div>
          </div>
     </div>
     <!------------------
        Menu
    ---------------------->
     <div class="menu">
          <div class="row  mobile_menu owl-carousel">
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <a class="btn filter-active" data-filter="*">
                         <div class="card">
                              <img src="<?= base_url() ?>/img/icon/icon-allproductinactive.svg" class="card-img-top" alt="...">
                              <div class="card-body">
                                   <h5 class="card-title">All</h5>
                              </div>
                         </div>
                    </a>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <a class="btn" data-filter=".filter-koran">
                         <div class="card">
                              <img src="<?= base_url() ?>/img/icon/koran.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                   <h5 class="card-title">Koran</h5>
                              </div>
                         </div>
                    </a>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <a class="btn" data-filter=".filter-Plastik">
                         <div class="card">
                              <img src="<?= base_url() ?>/img/icon/plastik.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                   <h5 class="card-title">Plastik</h5>
                              </div>
                         </div>
                    </a>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <a class="btn" data-filter=".filter-ban">
                         <div class="card">
                              <img src="<?= base_url() ?>/img/icon/ban.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                   <h5 class="card-title">Ban Bekas</h5>
                              </div>
                         </div>
                    </a>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <a class="btn" data-filter=".filter-electronic">
                         <div class="card">
                              <img src="<?= base_url() ?>/img/icon/ac.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                   <h5 class="card-title">electronic</h5>
                              </div>
                         </div>
                    </a>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <a class="btn" data-filter=".filter-logam">
                         <div class="card">
                              <img src="<?= base_url() ?>/img/icon/besi.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                   <h5 class="card-title">logam</h5>
                              </div>
                         </div>
                    </a>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <a class="btn" data-filter=".filter-botol">
                         <div class="card">
                              <img src="<?= base_url() ?>/img/icon/botol.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                   <h5 class="card-title">Botol bekas</h5>
                              </div>
                         </div>
                    </a>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <a class="btn" data-filter=".filter-buku">
                         <div class="card">
                              <img src="<?= base_url() ?>/img/icon/buku.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                   <h5 class="card-title">Buku bekas</h5>
                              </div>
                         </div>
                    </a>
               </div>
          </div>
     </div>

     <!------------------
          Nama Sampah
     ---------------------->
     <div class="nama_sampah">
          <div class="container">
               <div class="row">
                    <?php foreach ($data_sampah as $data) : ?>
                         <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-6 portfolio-item filter-<?= $data['nama_jenis_sampah'] ?>" style="height: fit-content;float: left;">
                              <a href="<?= base_url() ?>/sampah/index/<?= $data['slug'] ?>" class="btn">
                                   <figure class="figure">
                                        <div class="figure-img m-0">
                                             <img src="<?= base_url() ?>/img/data_sampah/<?= $data['foto_Sampah'] ?>" class="figure-img img-fluid m-0">
                                        </div>
                                        <figcaption class="figure-caption text-center">
                                             <h5><?= $data['nama_sampah'] ?></h5>
                                             <p>RP <?= number_format($data['harga_sampah']) ?></p>
                                        </figcaption>
                                   </figure>
                              </a>
                         </div>
                    <?php endforeach; ?>
               </div>
          </div>
     </div>
</div>
<?= $this->include("Layouts/User/navbar_bawah_user") ?>
<?= $this->endSection() ?>