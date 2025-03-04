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

        <!-- Breadcrumb Section Start -->
        <div class="card bg-light border-0">
            <div class="container">
                <div class="card-body p-2 px-0 text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section End -->


        <section class="my-lg-14 mb-8 pt-8" style="margin-top: 0 !important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-8 col-12 mx-auto">
                        <div class="mb-3 d-lg-flex align-items-center justify-content-between">
                            <h4 class="mb-lg-0 text-uppercase">Shipping Information</h4>
                            <span>Already customer? <a href="#" data-bs-toggle="modal" data-bs-target="#userModal">Login Now</a></span>
                        </div>

                        <div>
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">আপনার নাম *<span class="text-danger fs-5 fw-bold ms-1">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="আপনার নাম লিখুন..." required />
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone" class="form-label">মোবাইল নাম্বার *<span class="text-danger fs-5 fw-bold ms-1">*</span></label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="আপনার ফোন নাম্বার দিন..." required />
                            </div>
                            <div class="form-group mb-3">
                                <label for="address" class="form-label">আপনার ঠিকানা *<span class="text-danger fs-5 fw-bold ms-1">*</span></label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="আপনার ঠিকানা লিখুন..." required />
                            </div>

                            <div class="form-group mb-3">
                                <label for="order_notes" class="form-label">Order Notes (Optional)</label>
                                <textarea name="order_notes" id="order_notes" class="form-control" cols="10" rows="2" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            </div>

                            <div class="form-group border rounded p-3 rounded-bottom-0 mt-5 d-flex align-items-center gap-2">
                                <input type="radio" id="inside_dhaka" name="location" value="inside_dhaka" checked />
                                <label for="inside_dhaka" class="w-100 d-inline-flex justify-content-between align-items-center">
                                    <span>Inside Dhaka</span>
                                    <span class="text-success">70 ৳</span>
                                </label>
                            </div>
                            <div class="form-group border rounded p-3 rounded-top-0 border-top-0 d-flex align-items-center gap-2">
                                <input type="radio" id="outside_dhaka" name="location" value="outside_dhaka" />
                                <label for="outside_dhaka" class="w-100 d-inline-flex justify-content-between align-items-center">
                                    <span>Outside Dhaka</span>
                                    <span class="text-success text-end">120 ৳</span>
                                </label>
                            </div>
                        </div>

                    </div>


                    <div class="col-lg-7 col-md-8 col-12 mx-auto mt-12">

                        <div class="mb-3">
                            <h4 class="pb-3 text-uppercase text-center">Your order</h4>

                            <div class="row align-items-center order">
                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-2 text-start">
                                            <img src="assets/images/products/product-img-1.jpg" alt="Ecommerce" class="icon-shape icon-xxl img-fluid">
                                        </div>
                                        <div class="col-8 text-center">
                                            <a href="pages/shop-single.html" class="text-inherit d-inline-block">
                                                <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                                            </a>
                                        </div>
                                        <div class="col-2 text-end">
                                            <span class="fw-bold">$5.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <table class="table p-0">
                                        <thead>
                                            <tr>
                                                <th class="product-name fw-bold">Product</th>
                                                <th class="product-total fw-bold text-end">Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td>
                                                    <span class="product-price-amount amount">3000 ৳ </span>
                                                </td>
                                            </tr>
                                            <tr class="cart-shipping">
                                                <th>Shipping</th>
                                                <td>
                                                    Inside Dhaka: <span class="product-price-amount amount">50<span class="product-price-currencySymbol">৳</span></span>
                                                </td>
                                            </tr>

                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td>
                                                    <strong><span class="product-price-amount amount">400 ৳</span></strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- Payment Method -->
                                    <div class="payment-section">
                                        <h5>Cash on Delivery</h5>
                                        <p>Pay with cash upon delivery.</p>
                                    </div>

                                    <hr>

                                    <!-- Privacy Notice -->
                                    <p class="privacy-text">
                                        Your personal data will be used to process your order, support your experience, and for other purposes described in our <a href="#" class="privacy-link">Privacy policy</a>.
                                    </p>

                                    <!-- Order Button -->
                                    <button class="place-order-btn btn bg-primary border-inset hover-border text-white w-100 rounded-0 py-3">
                                        <i class="feather-icon icon-shopping-cart fs-5 me-2"></i> PLACE ORDER &nbsp; 1,350 ৳
                                    </button>
                                </div>
                            </div>
                        </div>

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