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
        <section class="mb-lg-14 mb-8 mt-8">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card py-1 border-0 mb-8">
                            <div>
                                <h1 class="fw-bold">Shop Cart</h1>
                                <p class="mb-0">Shopping in 382480</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="py-3">
                            <div class="table-responsive">
                                <table class="table text-nowrap table-with-checkbox table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th></th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Subtotal</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle">
                                                <a href="#"><img src="assets/images/products/product-img-18.jpg" class="icon-shape icon-xxl" alt="" /></a>
                                            </td>
                                            <td class="align-middle">
                                                <div>
                                                    <h5 class="fs-6 mb-0"><a href="#" class="text-inherit">Organic Banana</a></h5>
                                                    <small>$.98 / lb</small>
                                                </div>
                                            </td>
                                            <td class="align-middle">$35.00</td>
                                            <td class="align-middle"><span class="badge bg-success">In Stock</span></td>
                                            <td class="align-middle">
                                                <div class="btn btn-primary btn-sm">Add to Cart</div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                    <i class="feather-icon icon-trash-2"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <a href="#"><img src="assets/images/products/product-img-17.jpg" class="icon-shape icon-xxl" alt="" /></a>
                                            </td>
                                            <td class="align-middle">
                                                <div>
                                                    <h5 class="fs-6 mb-0"><a href="#" class="text-inherit">Fresh Kiwi</a></h5>
                                                    <small>4 no</small>
                                                </div>
                                            </td>
                                            <td class="align-middle">$20.97</td>
                                            <td class="align-middle"><span class="badge bg-danger">Out of Stock</span></td>
                                            <td class="align-middle">
                                                <div class="btn btn-dark btn-sm">Contact us</div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                    <i class="feather-icon icon-trash-2"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <a href="#"><img src="assets/images/products/product-img-16.jpg" class="icon-shape icon-xxl" alt="" /></a>
                                            </td>
                                            <td class="align-middle">
                                                <div>
                                                    <h5 class="fs-6 mb-0"><a href="#" class="text-inherit">Golden Pineapple</a></h5>
                                                    <small>2 no</small>
                                                </div>
                                            </td>
                                            <td class="align-middle">$35.00</td>
                                            <td class="align-middle"><span class="badge bg-success">In Stock</span></td>
                                            <td class="align-middle">
                                                <div class="btn btn-primary btn-sm">Add to Cart</div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                    <i class="feather-icon icon-trash-2"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- sidebar -->
                    <div class="col-12 col-lg-4 col-md-5">
                        <div class="mb-5 card mt-3">
                            <div class="card-body p-6">
                                <h2 class="h5 mb-4">Summary</h2>
                                <div class="card mb-2">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-auto">
                                                <div>Subtotal</div>
                                            </div>
                                            <span>$70.00</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-auto">
                                                <div>Delivery Fee</div>
                                            </div>
                                            <span>$3.00</span>
                                            <p>Shipping options will be updated during checkout. </p>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-auto">
                                                <div class="fw-bold">Total</div>
                                            </div>
                                            <span class="fw-bold">$67.00</span>
                                        </li>
                                    </ul>
                                </div>

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

                                <div class="mt-8 coupon-wrap">
                                    <button class="coupon-btn">Do you have a coupon code?</button>
                                    <form id="coupon-form" class="d-none">
                                        <div class="mb-2 d-flex align-items-center">
                                            <input type="text" class="form-control" placeholder="Enter your coup code" />
                                            <button type="button" class="apply-btn">Apply</button>
                                        </div>
                                    </form>
                                </div>


                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                <script>
                                    $(document).ready(function() {
                                        $(".coupon-btn").click(function() {
                                            $("#coupon-form").removeClass('d-none');
                                            $(".coupon-btn").addClass('d-none');
                                        });
                                    });
                                </script>

                                <div class="d-grid mb-1 mt-4">
                                    <!-- btn -->
                                    <button class="btn btn-primary btn-lg d-flex justify-content-between align-items-center" type="submit">
                                        Go to Checkout
                                        <span class="fw-bold">$67.00</span>
                                    </button>
                                </div>
                                <!-- text -->
                                <p>
                                    <small>
                                        By placing your order, you agree to be bound by the Freshcart
                                        <a href="#!">Terms of Service</a>
                                        and
                                        <a href="#!">Privacy Policy.</a>
                                    </small>
                                </p>


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