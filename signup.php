<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Codescandy" name="author" />
    <title>Sign Up</title>

    <?php include 'header.php'  ?>
</head>

<body>
    <!-- navbar -->
    <?php include 'navbar.php'  ?>
    <!-- navbar -->

    <main>
        <section class="my-lg-14 my-8">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-6 col-lg-3 order-lg-1 order-2">
                        <img src="assets/images/svg-graphics/signup-g.svg" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-6 offset-lg-1 col-lg-5 order-lg-2 order-1">
                        <div class="mb-lg-9 mb-5">
                            <h1 class="mb-1 h2 fw-bold">Get Start Shopping</h1>
                            <p>Welcome to FreshCart! Enter your email to get started.</p>
                        </div>
                        <form class="needs-validation" novalidate="">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="formSignupfname" class="form-label visually-hidden">First Name</label>
                                    <input type="text" class="form-control" id="formSignupfname" placeholder="First Name" required="">
                                </div>
                                <div class="col">
                                    <!-- input -->
                                    <label for="formSignuplname" class="form-label visually-hidden">Last Name</label>
                                    <input type="text" class="form-control" id="formSignuplname" placeholder="First Name" required="">
                                </div>
                                <div class="col-12">
                                    <!-- input -->
                                    <label for="formSignupEmail" class="form-label visually-hidden">Email address</label>
                                    <input type="email" class="form-control" id="formSignupEmail" placeholder="Email" required="">
                                </div>
                                <div class="col-12">
                                    <div class="password-field position-relative">
                                        <label for="formSignupPassword" class="form-label visually-hidden">Password</label>
                                        <div class="password-field position-relative">
                                            <input type="password" class="form-control fakePassword" id="formSignupPassword" placeholder="*****" required="">
                                            <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                            <div class="invalid-feedback">Please enter password.</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- btn -->
                                <div class="col-12 d-grid"><button type="submit" class="btn btn-primary">Register</button></div>

                                <!-- text -->
                                <p>
                                    <small>
                                        By continuing, you agree to our
                                        <a href="#!">Terms of Service</a>
                                        &amp;
                                        <a href="#!">Privacy Policy</a>
                                    </small>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>


    <!-- Login Modal -->
    <?php include 'modal/login.php'  ?>
    <!-- Login Modal -->


    <!-- Shop Cart Modal -->
    <?php include 'modal/cart.php'  ?>
    <!-- Shop Cart Modal -->

    <!-- Shop Checkout Modal -->
    <?php include 'modal/checkout.php'  ?>
    <!-- Shop Checkout Modal -->

    <!-- Product View Modal -->
    <?php include 'modal/product-view.php'  ?>
    <!-- Product View Modal -->

    <!-- Footer Section Start -->
    <?php include 'footer.php'  ?>
    <!-- Footer Section End -->

    <!-- Javascript-->
    <?php include 'script.php'  ?>
</body>

</html>