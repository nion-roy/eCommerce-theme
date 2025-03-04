<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Codescandy" name="author" />
    <title>Homepage</title>

    <?php include 'header.php'  ?>
</head>

<body>
    <!-- navbar -->
    <?php include 'navbar.php'  ?>
    <!-- navbar -->

    <main>
        <!-- Forget Password Section Start -->
        <section class="my-lg-14 my-8">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-6 col-lg-3 order-lg-1 order-2">
                        <img src="assets/images/svg-graphics/fp-g.svg" alt="" class="img-fluid" />
                    </div>
                    <div class="col-12 col-md-6 offset-lg-1 col-lg-5 order-lg-2 order-1 d-flex align-items-center">
                        <div>
                            <div class="mb-lg-9 mb-5">
                                <h1 class="mb-2 h2 fw-bold">Reset your password?</h1>
                                <p>Please enter the email address associated with your account and We will email you a link to reset your password.</p>
                            </div>
                            <form class="needs-validation" novalidate>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="formForgetEmail" class="form-label visually-hidden">New password</label>
                                        <input type="text" class="form-control rounded-1" id="formForgetEmail" placeholder="New password" required />
                                    </div>
                                    <div class="col-12">
                                        <label for="formForgetEmail" class="form-label visually-hidden">Confrim password</label>
                                        <input type="text" class="form-control rounded-1" id="formForgetEmail" placeholder="Confrim password" required />
                                    </div>
                                    <div class="col-12 d-grid gap-2">
                                        <button type="submit" class="btn btn-primary border-inset hover-border rounded-1">Reset Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Forget Password Section Start -->
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