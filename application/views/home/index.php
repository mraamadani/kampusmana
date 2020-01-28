<!-- Awal Header -->
<img src="assets/img/km-assets/top.svg" id="atas">
<img src="assets/img/km-assets/Kiri1.svg" id="kiri">
<section class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h3>Bingung <b>Nyari Kampus?</b></h3>
                <p>Masih bingung menentukan kampus mana yang cocok dengan minatmu? Cocok dengan program studi yang kamu inginkan? Cocok dengan biaya selama kuliah?</p>
                <center><a href="#trends" class="btn btn-primary btn-header mb-4">Click Me!</a></center>
            </div>
            <div class="col-lg" data-aos="fade-left" data-aos-easing="ease-in-sine">
                <img src="assets/img/km-assets/search.png" alt="Gambar Search" class="img-fluid gambar-header">
            </div>
        </div>
    </div>
</section>
<!-- Akhir Header -->

<!-- Awal Trends -->
<img src="assets/img/km-assets/kanan1.svg" id="kanan1">
<img src="assets/img/km-assets/Kiri2.svg" id="kiri2">
<section class="trends text-center" id="trends" data-aos="fade-up" data-aos-easing="ease-out-in">
    <div class="container container-fluid">
    <h3 class="text-center">Search Trends Top 6</h3>
    <div class="row">
        <div class="col-4">
            <a href="<?= base_url(); ?>amikom">
            <img src="assets/img/logo/amikom.png" class="img-fluid" width="200" height="200" title="Universitas Amikom Yogyakarta" alt="Universitas Amikom Yogyakarta"></a>
        </div>
        <div class="col-4">
            <a href="<?= base_url(); ?>uajy">
            <img src="assets/img/logo/uajy.png" class="img-fluid" width="200" height="200" title="Universitas Atma Jaya Yogyakarta" alt="Universitas Atma Jaya Yogyakarta"></a>
        </div>
        <div class="col-4">
            <a href="<?= base_url(); ?>ugm">
            <img src="assets/img/logo/ugm.png" class="img-fluid" width="200" height="200" title="Universitas Gadjah Mada" alt="Universitas Gadjah Mada"></a>
        </div>
    </div>
</div>
</section>
<section class="trends2 text-center" data-aos="fade-up" data-aos-easing="ease-out-in">
<div class="container container-fluid">
    <div class="row">
        <div class="col-4">
            <a href="<?= base_url(); ?>uii">
            <img src="assets/img/logo/uii.png" class="img-fluid" width="200" height="200" title="Universitas Islam Indonesia" alt="Universitas Islam Indonesia"></a>
        </div>
        <div class="col-4">
            <a href="<?= base_url(); ?>upnyk">
            <img src="assets/img/logo/upnyk.png" class="img-fluid" width="200" height="200" title="UPN Veteran Yogyakarta" alt="UPN Veteran Yogyakarta"></a>
        </div>
        <div class="col-4">
            <a href="<?= base_url(); ?>usd">
            <img src="assets/img/logo/usd.png" class="img-fluid" width="200" height="200" title="Universitas Sanata Dharma" alt="Universitas Sanata Dharma"></a>
        </div>
    </div>
</div>
</section>
<!-- Akhir Trends -->

    <!-- Search -->
    <section id="search">
    <div class="search" data-aos="fade-up" data-aos-easing="ease-out-in">
        <div class="container">
        <h3>Cari Kampus yang <b>kamu inginkan!</b></h3>
            <div class="row">
                <div class="col-lg">
                    <form class="navbar-search" action="#search" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg bg-light border-1" placeholder="Ketik minat atau nama universitas..." name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">
                                    <i class="fas fa-search fa-xl"></i>
                                </button>&nbsp;
                            </div>
                            <a class="btn btn-lg btn-outline-secondary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-sliders-h"></i> Filters</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body border-0 bg-transparent">
                            <div class="form-group">
                                <label for="wilayah">Wilayah :</label>
                                <select class="form-control">
                                    <option value="Yogyakarta">Yogyakarta</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body border-0 bg-transparent">
                            <div class="form-group">
                                <label for="minat">Minat :</label>
                                    <select class="form-control" name="keyword">
                                        <option value="Semua" selected>Semua</option>
                                        <?php foreach ($kampus as $ka) :?>
                                            <option value="<?=$ka['nama_minat'];?>"><?=$ka['nama_minat'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body border-0 bg-transparent">
                            <div class="form-group">
                                <label for="prodi">Prodi :</label>
                                    <select class="form-control" name="keyword">
                                        <option value="Semua" selected>Semua</option>
                                        <?php foreach ($kampus as $ka) :?>
                                            <option value="<?=$ka['nama_prodi'];?>"><?=$ka['nama_prodi'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body border-0 bg-transparent">
                            <div class="form-group">
                                <label for="akreditas">Akreditas :</label>
                                    <select class="form-control" name="keyword">
                                        <option value="Semua" selected>Semua</option>
                                        <?php foreach ($kampus as $ka) :?>
                                            <option value="<?=$ka['akreditas'];?>"><?=$ka['akreditas'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body border-0 bg-transparent">
                            <div class="form-group">
                                <label for="biaya">Biaya :</label>
                                <select class="form-control" name="keyword">
                                    <option value="Semua" selected>Semua</option>
                                    <?php foreach ($kampus as $ka) :?>
                                        <option value="<?=$ka['biaya'];?>"><?=$ka['biaya'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Tampil Data -->
    <br>
    <?php if (empty($kampus)) : ?>
    <div class="container">
        <div class="alert alert-danger" role="alert">
            Data kampus tidak ditemukan.
        </div>
    </div>
    <?php endif;?>

    <div class="container" data-aos="fade-up" data-aos-easing="ease-out-in">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Perguruan Tinggi</th>
                            <th>Prodi</th>
                            <th><center>Info</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kampus as $ka): ?>
                        <tr>
                            <td><?= $ka['nama_perting']; ?></td>
                            <td><?= $ka['nama_prodi']; ?></td>
                            <td width="100"><center><a href="<?= base_url(); ?><?= $ka['link'];?>" class="badge badge-success">Lihat Kampus</a></center></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Akhir Tampil Data -->
    
    </div>
    </section>
    <!-- Akhir Search -->