
    <!-- Footer -->
    <img src="<?= base_url();?>assets/img/km-assets/footer.svg" class="img-fluid" id="bawah">
    <section class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <img src="<?= base_url();?>assets/img/km-assets/Logo Kampusmana Putih.png" alt="Logo KM Putih" class="logo-km-footer">
            </div>
            <div class="col">
                <h3>Menu</h3>
                <a class="nav-item nav-link" href="<?= base_url();?>about">About</a>
                <h3 class="mt-4">Contact</h3>
                <p>(+62) 812 1000 1500</p>
            </div>
            <div class="col">
                <h3>Social Media</h3>
                <img src="<?= base_url();?>assets/img/logo/ic-instagram.png" alt="Instagram" class="img-fluid" width="30px" height="30px">
                <img src="<?= base_url();?>assets/img/logo/ic-facebook.png" alt="Facebook" class="img-fluid" width="30px" height="30px">
                <img src="<?= base_url();?>assets/img/logo/ic-twitter.png" alt="Twitter" class="img-fluid" width="30px" height="30px">
                <p class="mt-4">Copyright &copy; <?= date('Y'); ?> Kampusmana.id <br>All rights reserved.</p>
            </div>
        </div>
    </div>
    </section>
    <!-- Akhir Footer -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?= base_url('assets/');?>js/jquery.min.js"></script>
        <script src="<?= base_url('assets/');?>js/jquery.slim.min.js"></script>
        <script src="<?= base_url('assets/');?>js/popper.min.js"></script>
        <script src="<?= base_url('assets/');?>js/bootstrap.min.js"></script>
        
        <!-- AOS -->
        <script src="<?= base_url('assets/');?>aos-master/dist/aos.js"></script>
        <script>
            AOS.init();
                // You can also pass an optional settings object
                // below listed default settings
                AOS.init({
                // Global settings:
                disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
                startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
                initClassName: 'aos-init', // class applied after initialization
                animatedClassName: 'aos-animate', // class applied on animation
                useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
                disableMutationObserver: false, // disables automatic mutations' detections (advanced)
                debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
                throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

                // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
                offset: 200, // offset (in px) from the original trigger point
                delay: 50, // values from 0 to 3000, with step 50ms
                duration: 1000, // values from 0 to 3000, with step 50ms
                easing: 'ease', // default easing for AOS animations
                once: false, // whether animation should happen only once - while scrolling down
                mirror: false, // whether elements should animate out while scrolling past them
                anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
            });
        </script>
    </body>
</html>