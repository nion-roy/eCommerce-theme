<style>
    .offcanvas {
        transition: transform 0.3s ease-in-out;
    }

    .offcanvas.show {
        height: 100vh;
        /* Apply height only when the offcanvas is open */
    }

    .offcanvas-body {
        display: flex;
        flex-direction: column;
        max-height: calc(100vh - 56px);
        /* Adjust to ensure it fits within the viewport */
    }

    .list-group {
        flex-grow: 1;
        overflow-y: auto;
        padding-bottom: 10px;
    }

    .list-group-item {
        border: none;
    }

    .icon-shape {
        width: 60px;
        height: 60px;
        object-fit: cover;
    }

    .input-group {
        max-width: 120px;
    }

    .footer-btn {
        position: sticky;
        bottom: 0;
        left: 0;
        width: 100%;
        background: white;
        border-top: 1px solid #ddd;
        padding: 15px;
    }
</style>

<div class="offcanvas offcanvas-end show" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-bottom">
        <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Shop Cart</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <div class="list-group list-group-flush">
            <li class="list-group-item py-3 ps-0">
                <div class="row align-items-center">
                    <div class="col-10">
                        <div class="d-flex">
                            <img src="assets/images/products/product-img-1.jpg" alt="Ecommerce" class="icon-shape border" />
                            <div class="ms-3">
                                <a href="#" class="text-inherit">
                                    <h6 class="mb-1">Haldiram's Sev Bhujia</h6>
                                    <span class="fw-bold">$5.00</span>
                                </a>
                                <div class="input-group input-spinner">
                                    <input type="button" value="-" class="btn btn-sm" data-field="quantity" />
                                    <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                                    <input type="button" value="+" class="btn btn-sm" data-field="quantity" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 text-end">
                        <a href="#!" class="text-decoration-none text-inherit">
                            <i class="bi bi-trash fs-5 text-danger"></i>
                        </a>
                    </div>
                </div>
            </li>
        </div>
    </div>

    <div class="footer-btn text-center">
        <button data-bs-toggle="modal" data-bs-target="#checkoutModal"
            class="btn btn-primary w-100 rounded-0 mb-3 spring-animation">
            ক্যাশ অন ডেলিভারিতে অর্ডার করুন
        </button>


        <a href="shop-cart.php">View Cart</a>
    </div>
</div>



<script>
    function animateSpring() {
        gsap.fromTo("#springButton", {
            scale: 1
        }, {
            scale: 1.1,
            yoyo: true,
            repeat: 1,
            duration: 0.3,
            ease: "elastic.out(1, 0.5)"
        });
    }

    setInterval(animateSpring, 2000);
</script>


<style>
    @keyframes spring-bounce {
        0% {
            transform: scale(1);
        }

        20% {
            transform: scale(1.1);
        }

        40% {
            transform: scale(0.9);
        }

        60% {
            transform: scale(1.05);
        }

        80% {
            transform: scale(0.95);
        }

        100% {
            transform: scale(1);
        }
    }

    .spring-animation {
        animation: spring-bounce 0.6s cubic-bezier(0.25, 1, 0.5, 1) infinite;
        animation-delay: 2s;
    }
</style>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var offcanvas = document.getElementById("offcanvasRight");

        offcanvas.addEventListener("shown.bs.offcanvas", function() {
            offcanvas.style.height = "100vh";
        });

        offcanvas.addEventListener("hidden.bs.offcanvas", function() {
            offcanvas.style.height = "";
        });

        document.querySelectorAll(".input-spinner").forEach(function(spinner) {
            let input = spinner.querySelector(".quantity-field");
            let minusBtn = spinner.querySelector("[value='-']");
            let plusBtn = spinner.querySelector("[value='+']");

            minusBtn.addEventListener("click", function() {
                let currentValue = parseInt(input.value, 10);
                if (currentValue > 1) {
                    input.value = currentValue - 1;
                }
            });

            plusBtn.addEventListener("click", function() {
                let currentValue = parseInt(input.value, 10);
                let max = parseInt(input.getAttribute("max"), 10);
                if (currentValue < max) {
                    input.value = currentValue + 1;
                }
            });
        });
    });
</script>