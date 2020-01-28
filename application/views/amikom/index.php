<!-- Awal Header -->
<img src="<?= base_url();?>assets/img/km-assets/Union 19.svg" id="atas2">
<img src="<?= base_url();?>assets/img/km-assets/Kiri2.svg" id="kiri">
<section class="header-amikom">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h3>Universitas Amikom Yogyakarta</h3>
                <p>Kampus terpadu yang berfokus di bidang teknologi dan entrepreneur. Di sini mahasiswa diajarkan berbagai bidang teknologi dan diajarkan menjadi entrepreneur muda</p>
            </div>
            <div class="col-lg" data-aos="fade-left" data-aos-easing="ease-in-sine">
                <img src="<?= base_url();?>assets/img/km-assets/Mask Group 1.png" alt="Universitas Amikom Yogyakarta" class="img-fluid gambar-header-amikom">
            </div>
        </div>
    </div>
</section>
<!-- Akhir Header -->

    <!-- Awal Akademik -->
        <section class="akademik" data-aos="fade-right" data-aos-easing="ease-out-in">
            <div class="container">
            <h3>Akademik</h3>
                <div class="row">
                    <div class="col">
                        <p>
                        <?php foreach ($data as $data): ?>
                            <?= $data['nama_prodi']; ?>, Jenjang <?= $data['jenjang']; ?>, Akreditas <?= $data['akreditas']; ?> - Biaya Rp. <?= $data['biaya']; ?> 
                        </p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    <!-- Akhir Akademik -->

    <!-- Fasilitas -->
    <section class="fasilitas" data-aos="fade-right" data-aos-easing="ease-out-in">
        <div class="container">
        <h3>Fasilitas</h3>
            <div class="row">
                <div class="col">
                    <p> > Seluruh ruangan ber-ac <br>
                        > Lab komputer <br>
                        > Foodcourt <br>
                        > Lapangan basket <br>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Fasilitas -->

    <!-- Info -->
    <section class="info" data-aos="fade-right" data-aos-easing="ease-out-in">
        <div class="container">
        <h3>Info</h3>
            <div class="row">
                <div class="col">
                    <p>Jika tertarik dengan kampus Universitas Amikom Yogyakarta, info lebih lanjut klik <a href="http://amikom.ac.id" target="_blank">di sini</a>.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Info -->

    <!-- Map Amikom -->
    <section class="map" data-aos="fade-up" data-aos-easing="ease-out-in">
        <div class="container">
            <div class="row">
                <div class="col">
                <center><div id='map'></div></center>
                    <script>
                        var amikom = [110.408572, -7.759797];
                        var map = tt.map({
                            container: 'map',
                            key: 'fjnVk5Nslv00qha3JYQ5JithR4VK8Bj0',
                            style: 'tomtom://vector/1/basic-main',
                            center: amikom,
                            zoom: 15
                        });
                        var marker = new tt.Marker().setLngLat(amikom).addTo(map);

                        var popupOffsets = {
                            top: [0, 0],
                            bottom: [0, -50],
                            'bottom-right': [0, -70],
                            'bottom-left': [0, -70],
                            left: [25, -35],
                            right: [-25, -35]
                            }
                        var popup = new tt.Popup({offset: popupOffsets}).setHTML("<b>Universitas Amikom Yogyakarta</b><br/>Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281");
                        marker.setPopup(popup).togglePopup();
                    </script>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Amikom -->