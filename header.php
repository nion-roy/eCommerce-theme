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
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>

<style>
    .sticky-top.scrolled {
        top: 0;
        transition: 300ms linear;
        z-index: 1030;
        position: fixed;
        width: 100%;
        background-color: #fff;
        border-bottom: 1px solid #dfe2e1;
    }

    .sticky-top.hidden {
        transform: translateY(-10px);
        transition: 300ms linear;
        /* transition: transform 0.3s linear, background-color 0.3s linear; */
    }

    .sticky-top {
        transition: .3s linear;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navbar = document.querySelector(".sticky-top");
        let lastScrollTop = 0;
        let isScrolling = false;

        window.addEventListener("scroll", function() {
            const scrollTop = window.scrollY;

            // Determine scrolling direction
            if (scrollTop > lastScrollTop) {
                // Scrolling down
                navbar.classList.add("hidden");
            } else {
                // Scrolling up
                navbar.classList.remove("hidden");
                if (scrollTop > 120) {
                    navbar.classList.add("scrolled");
                } else {
                    navbar.classList.remove("scrolled");
                }
            }

            lastScrollTop = scrollTop <= 120 ? 120 : scrollTop; // Prevent negative scroll
            isScrolling = true;

            // Reset after scrolling stops
            clearTimeout(window.scrollTimeout);
            window.scrollTimeout = setTimeout(() => {
                isScrolling = false;
            }, 300);
        });
    });
</script>