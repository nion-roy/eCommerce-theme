<link href="assets/libs/slick-carousel/slick/slick.css" rel="stylesheet" />
<link href="assets/libs/slick-carousel/slick/slick-theme.css" rel="stylesheet" />
<link href="assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet" />

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico" />

<!-- Libs CSS -->
<link href="assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
<link href="assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet" />
<link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

<!-- Theme CSS -->
<link rel="stylesheet" href="assets/css/theme.min.css" />


<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico" />

<link href="assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet" />
<link href="assets/libs/nouislider/dist/nouislider.min.css" rel="stylesheet" />

<!-- Libs CSS -->
<link href="assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
<link href="assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet" />
<link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

<!-- Theme CSS -->
<link rel="stylesheet" href="assets/css/theme.min.css" />

<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

    .sticky-top {
        border-bottom: 1px solid #dfe2e1;
    }

    @keyframes slideUpIn {
        from {
            transform: translateY(50px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .modal.slideUpIn .modal-dialog {
        animation: slideUpIn 0.4s ease-out;
    }

    .table-borderless tbody td {
        padding: 4px 0;
    }

    .modal.slideUpIn .modal-dialog {
        animation: slideUpIn 0.4s ease-out;
    }

    .table-borderless tbody td {
        padding: 4px 0;
    }

    .product_quantity .quantity {
        width: 50px;
        text-align: center;
        padding: 4px 0;
        border: 1px solid #f0f3f2;
        border-radius: 4px !important;
    }

    .product_quantity button {
        border: none;
        background-color: #f0f3f2;
        padding: 3px 8px;
        font-size: 16px;
        color: #000;
        border-radius: 4px !important;
    }

    .hover-border {
        box-shadow: inset 0 0px 0px transparent;
        transition: box-shadow 0.3s ease;
    }

    .hover-border:hover {
        box-shadow: inset 0 -2px 0px rgba(0, 0, 0, 0.5);
    }

    .back-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background-color: #0aad0a;
        color: #fff;
        text-align: center;
        line-height: 50px;
        font-size: 24px;
        border-radius: 50%;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        transition: opacity 0.3s, transform 0.3s;
        opacity: 0;
        transform: translateY(20px);
        text-decoration: none;
    }

    .back-to-top.show {
        opacity: 1;
        transform: translateY(0);
    }
    .whatsapp-button {
        color: #fff !important;
        position: fixed;
        bottom: 90px;
        right: 30px;
        width: 50px;
        height: 50px;
        background-color: rgb(0, 175, 64);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s, opacity 0.3s;
    }
</style>

<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const navbar = document.querySelector(".sticky-top");
        const main = document.querySelector("main");
        let lastScrollTop = 80;

        window.addEventListener("scroll", function() {
            const scrollTop = window.scrollY;

            if (scrollTop > lastScrollTop) {
                // Scrolling down
                navbar.classList.add("hidden");
            } else {
                // Scrolling up
                navbar.classList.remove("hidden");
                if (scrollTop > 120) {
                    navbar.classList.add("scrolled");
                    main.classList.add("scrolled-margin");
                } else {
                    navbar.classList.remove("scrolled");
                    main.classList.remove("scrolled-margin");
                }
            }

            lastScrollTop = scrollTop <= 120 ? 120 : scrollTop; // Prevent negative scroll
        });
    });
</script> -->