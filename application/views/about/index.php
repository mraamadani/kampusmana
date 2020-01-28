<!-- Awal Header -->
<img src="<?= base_url();?>assets/img/km-assets/Union 19.svg" id="atas2">
<img src="<?= base_url();?>assets/img/km-assets/Kiri2.svg" id="kiri">
<section class="header-amikom">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h3>Siapa kami?</h3>
                <p>Kampusmana.id adalah situs yang di mana memudahkan calon mahasiswa dalam mencari kampus yang diinginkan, berdasarkan minat, prodi, akreditas, dan biaya.</p>
            </div>
            <div class="col-lg" data-aos="fade-left" data-aos-easing="ease-in-sine">
                <img src="<?= base_url();?>assets/img/logo/kampusmana-logo.png" alt="Universitas Amikom Yogyakarta" class="img-fluid gambar-header-amikom my-5">
            </div>
        </div>
    </div>
</section>
<!-- Akhir Header -->

    <!-- Fitur -->
        <section class="fitur" data-aos="fade-right" data-aos-easing="ease-out-in">
            <div class="container">
            <h3>Fitur Kami</h3>
                <div class="row">
                    <div class="col">
                        <p> > Pencarian yang mudah digunakan <br>
                        > Dilengkapi dengan maps dari kampus yang dipilih <br>
                        > Mudah diakses dan cepat digunakan
                        </p>
                    </div>
                </div>
            </div>
        </section>
    <!-- Akhir Fitur -->

    <!-- Map -->
    <section id="temukan">
    <div class="map" data-aos="fade-up" data-aos-easing="ease-out-in">
        <div class="container">
            <h3>Temukan Kami</h3>
                <div class="row">
                    <div class="col">
                    <center><div id='map'></div></center>
                        <script>
                            var kampusmana = [110.413812, -7.761105];
                            var map = tt.map({
                                container: 'map',
                                key: 'fjnVk5Nslv00qha3JYQ5JithR4VK8Bj0',
                                style: 'tomtom://vector/1/basic-main',
                                center: kampusmana,
                                zoom: 15
                            });
                            var marker = new tt.Marker().setLngLat(kampusmana).addTo(map);

                            var popupOffsets = {
                                top: [0, 0],
                                bottom: [0, -50],
                                'bottom-right': [0, -70],
                                'bottom-left': [0, -70],
                                left: [25, -35],
                                right: [-25, -35]
                                }
                            var popup = new tt.Popup({offset: popupOffsets}).setHTML("<b>Kampusmana</b><br/>Jl. Arjuno No.136A, Rt.05/16, Sleman, Yogyakarta");
                            marker.setPopup(popup).togglePopup();
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Map -->
    