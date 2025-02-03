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
    .sticky-top {
        position: sticky;
        top: 0;
        transition: transform 0.4s ease, background-color 0.4s ease;
        z-index: 1030;
        width: 100%;
        background-color: #fff;
        border-bottom: 1px solid #dfe2e1;
    }

    .sticky-top.scrolled {
        position: fixed;
        top: 0;
    }

    .sticky-top.hidden {
        transform: translateY(-100%);
    }

    main.scrolled-margin {
        margin-top: 116px;
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
</style>

<script>
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
</script>