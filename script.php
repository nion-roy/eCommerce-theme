    <a href="#" id="back-to-top" class="back-to-top"> <i class="bi bi-arrow-up-short text-white"></i> </a>


    <a href="https://wa.me/1234567890" target="_blank" id="whatsapp-button" class="whatsapp-button">
        <i class="bi bi-whatsapp fs-3"></i>
    </a>


    <!-- Libs JS -->
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Javascript-->
    <script src="assets/libs/nouislider/dist/nouislider.min.js"></script>
    <script src="assets/libs/wnumb/wNumb.min.js"></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>

    <script src="assets/js/vendors/jquery.min.js"></script>
    <script src="assets/js/vendors/countdown.js"></script>
    <script src="assets/libs/slick-carousel/slick/slick.min.js"></script>
    <script src="assets/js/vendors/slick-slider.js"></script>
    <script src="assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="assets/js/vendors/tns-slider.js"></script>
    <script src="assets/js/vendors/zoom.js"></script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var backToTopButton = document.getElementById("back-to-top");

            window.addEventListener("scroll", function() {
                if (window.scrollY > 300) {
                    backToTopButton.classList.add("show");
                } else {
                    backToTopButton.classList.remove("show");
                }
            });

            backToTopButton.addEventListener("click", function(event) {
                event.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        });
    </script>