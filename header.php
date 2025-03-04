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

    .border-inset {
        box-shadow: inset 0 -2px 0px rgba(0, 0, 0, 0.2);
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


    .cart-products table tbody tr td {
        border-top: 1px solid #dfe2e1;
        border-bottom: 1px solid #dfe2e1;
    }
</style>


<style>
    .order table thead th {
        border-bottom: 2px dashed !important;
    }

    .order table th {
        padding: 0.75rem 0;
    }

    .order table tr:last-child td,
    .order table tr:last-child th {
        border: 0;
    }

    .order table tr td {
        padding: 0.75rem 0;
        text-align: right;
    }

    /* Payment Section */
    .payment-section {
        background: #f8f9fa;
        padding: 30px 20px;
        border-radius: 6px;
        margin-top: 15px;
        position: relative;
    }

    .payment-section h5 {
        margin: 0;
        font-size: 14px;
        font-weight: bold;
    }

    .payment-section p {
        margin: 0;
        font-size: 14px;
        padding: 12px 10px;
        position: relative;
        background: #eaeaea;
        margin-top: 12px;
    }

    .payment-section p::before {
        content: '';
        position: absolute;
        top: -8px;
        left: 36px;
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-bottom: 8px solid #eaeaea;
    }
</style>


<style>
    .modal {
        --fc-modal-width: 540px;
    }

    .offcanvas {
        --fc-offcanvas-width: 440px;
    }

    .product-img-wrapper {
        position: relative;
        display: inline-block;
    }

    .product-badge {
        position: absolute;
        top: 5px;
        right: 5px;
        font-size: 10px;
        width: 22px;
        height: 22px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        border-radius: 50px;
    }
</style>


<style>
    .offcanvas {
        transition: transform 0.3s ease-in-out;
    }

    .offcanvas.show {
        height: 100vh;
    }

    .offcanvas-body {
        display: flex;
        flex-direction: column;
        max-height: calc(100vh - 56px);
    }

    .list-group {
        flex-grow: 1;
        overflow-y: auto;
        padding-bottom: 10px;
    }

    .icon-shape {
        width: 60px;
        height: 60px;
        object-fit: cover;
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


<style>
    .coupon-wrap .coupon-btn {
        background: none !important;
        color: #0aad0a;
        border: none;
        cursor: pointer;
        font-size: 14px;
    }

    .coupon-wrap .coupon-btn:hover {
        color: #099309;
    }


    .coupon-wrap .form-control {
        border-radius: 10px 0 0 10px;
    }

    .coupon-wrap .apply-btn {
        background: #0aad0a;
        color: #fff;
        border: none;
        cursor: pointer;
        font-size: 0.955rem;
        padding: 0.55rem 1rem;
        border-radius: 0 10px 10px 0;
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