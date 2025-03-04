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
        $(document).ready(function() {
            $(".coupon-btn").click(function() {
                $("#coupon-form").removeClass('d-none');
                $(".coupon-btn").addClass('d-none');
            });
        });
    </script>


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


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let quantityInput = document.querySelector('input[name="quantity"]');
            let stockElement = document.querySelector('.stock');
            let initialStock = parseInt(stockElement.textContent); // মোট স্টক
            let stock = initialStock - parseInt(quantityInput.value); // ডিফল্ট 1 বাদ যাবে
            stockElement.textContent = stock;

            let incrementButton = document.querySelector('.quantity_increment');
            let decrementButton = document.querySelector('.quantity_decrement');

            function updateStock() {
                let currentValue = parseInt(quantityInput.value);
                let remainingStock = initialStock - currentValue;
                stockElement.textContent = remainingStock >= 0 ? remainingStock : 0;

                // Stock 0 হলে Increment বন্ধ হবে
                incrementButton.disabled = remainingStock <= 0;
            }

            // Increment quantity
            incrementButton.addEventListener("click", function() {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue < initialStock) {
                    quantityInput.value = currentValue + 1;
                    updateStock();
                }
            });

            // Decrement quantity
            decrementButton.addEventListener("click", function() {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                    updateStock();
                }
            });

            // Handle manual input
            quantityInput.addEventListener("input", function() {
                let currentValue = parseInt(quantityInput.value);
                if (isNaN(currentValue) || currentValue < 1) {
                    quantityInput.value = 1;
                } else if (currentValue > initialStock) {
                    quantityInput.value = initialStock;
                }
                updateStock();
            });
        });
    </script>


    <script>
        function selectRadio(id) {
            document.getElementById(id).checked = true;
        }
    </script>