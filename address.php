<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Codescandy" name="author" />
    <title>User Dashboard</title>

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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Bakery Biscuits</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Napolitanke Ljesnjak</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section End -->

        <!-- Header Section Start-->
        <section>
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center d-md-none py-4">
                            <!-- heading -->
                            <h3 class="fs-5 mb-0">Account Setting</h3>
                            <!-- button -->
                            <button
                                class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3"
                                type="button"
                                data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasAccount"
                                aria-controls="offcanvasAccount">
                                <i class="bi bi-text-indent-left fs-3"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 border-end d-none d-md-block">
                        <div class="pt-10 pe-lg-10">
                            <ul class="nav flex-column nav-pills nav-pills-dark">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="dashboard.php">
                                        <i class="feather-icon icon-shopping-bag me-2"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="orders.php">
                                        <i class="feather-icon icon-shopping-bag me-2"></i>
                                        Your Orders
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="setting.php">
                                        <i class="feather-icon icon-settings me-2"></i>
                                        Settings
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="address.php">
                                        <i class="feather-icon icon-map-pin me-2"></i>
                                        Address
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <hr />
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">
                                        <i class="feather-icon icon-log-out me-2"></i>
                                        Log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="py-6 p-md-6 p-lg-10">
                            <!-- heading -->
                            <h2 class="mb-6">Your Orders</h2>

                            <div class="table-responsive-xxl border-0">
                                <!-- Table -->
                                <table class="table mb-0 text-nowrap table-centered">
                                    <!-- Table Head -->
                                    <thead class="bg-light">
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>Product</th>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Items</th>
                                            <th>Status</th>
                                            <th>Amount</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Table body -->
                                        <tr>
                                            <td class="align-middle border-top-0 w-0">
                                                <a href="#"><img src="assets/images/products/product-img-1.jpg" alt="Ecommerce" class="icon-shape icon-xl" /></a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#" class="fw-semibold text-inherit">
                                                    <h6 class="mb-0">Haldiram's Nagpur Aloo Bhujia</h6>
                                                </a>
                                                <span><small class="text-muted">400g</small></span>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#" class="text-inherit">#14899</a>
                                            </td>
                                            <td class="align-middle border-top-0">March 5, 2023</td>
                                            <td class="align-middle border-top-0">1</td>
                                            <td class="align-middle border-top-0">
                                                <span class="badge bg-warning">Processing</span>
                                            </td>
                                            <td class="align-middle border-top-0">$15.00</td>
                                            <td class="text-muted align-middle border-top-0">
                                                <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle border-top-0 w-0">
                                                <a href="#"><img src="assets/images/products/product-img-2.jpg" alt="Ecommerce" class="icon-shape icon-xl" /></a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#" class="fw-semibold text-inherit">
                                                    <h6 class="mb-0">Nutri Choise Biscuit</h6>
                                                </a>
                                                <span><small class="text-muted">2 Pkt</small></span>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#" class="text-inherit">#14658</a>
                                            </td>
                                            <td class="align-middle border-top-0">July 9, 2023</td>
                                            <td class="align-middle border-top-0">2</td>
                                            <td class="align-middle border-top-0">
                                                <span class="badge bg-success">Completed</span>
                                            </td>
                                            <td class="align-middle border-top-0">$45.00</td>
                                            <td class="text-muted align-middle border-top-0">
                                                <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle border-top-0 w-0">
                                                <a href="#"><img src="assets/images/products/product-img-3.jpg" alt="Ecommerce" class="icon-shape icon-xl" /></a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#" class="text-inherit">
                                                    <h6 class="mb-0">Cadbury Dairy Milk 5 Star Bites</h6>
                                                    <span><small class="text-muted">202 g</small></span>
                                                </a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#" class="text-inherit">#13778</a>
                                            </td>
                                            <td class="align-middle border-top-0">Oct 03, 2023</td>
                                            <td class="align-middle border-top-0">4</td>
                                            <td class="align-middle border-top-0">
                                                <span class="badge bg-success">Completed</span>
                                            </td>
                                            <td class="align-middle border-top-0">$99.00</td>
                                            <td class="text-muted align-middle border-top-0">
                                                <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle border-top-0 w-0">
                                                <a href="#"><img src="assets/images/products/product-img-4.jpg" alt="Ecommerce" class="icon-shape icon-xl" /></a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#" class="fw-semibold text-inherit">
                                                    <h6 class="mb-0">Onion Flavour Potato</h6>
                                                </a>
                                                <span><small class="text-muted">100 g</small></span>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#" class="text-inherit">#13746</a>
                                            </td>
                                            <td class="align-middle border-top-0">March 5, 2023</td>
                                            <td class="align-middle border-top-0">1</td>
                                            <td class="align-middle border-top-0">
                                                <span class="badge bg-success">Completed</span>
                                            </td>
                                            <td class="align-middle border-top-0">$12.00</td>
                                            <td class="text-muted align-middle border-top-0">
                                                <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle border-top-0 w-0">
                                                <a href="#"><img src="assets/images/products/product-img-5.jpg" alt="Ecommerce" class="icon-shape icon-xl" /></a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#" class="fw-semibold text-inherit">
                                                    <h6 class="mb-0">Salted Instant Popcorn</h6>
                                                </a>
                                                <span><small class="text-muted">500 g</small></span>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#" class="text-inherit">#13566</a>
                                            </td>
                                            <td class="align-middle border-top-0">July 9, 2023</td>
                                            <td class="align-middle border-top-0">2</td>
                                            <td class="align-middle border-top-0">
                                                <span class="badge bg-danger">Cancel</span>
                                            </td>
                                            <td class="align-middle border-top-0">$6.00</td>
                                            <td class="text-muted align-middle border-top-0">
                                                <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle border-top-0 w-0">
                                                <a href="#"><img src="assets/images/products/product-img-6.jpg" alt="Ecommerce" class="icon-shape icon-xl" /></a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#" class="fw-semibold text-inherit">
                                                    <h6 class="mb-0">Blueberry Greek Yogurt</h6>
                                                </a>
                                                <span><small class="text-muted">500 g</small></span>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#" class="text-inherit">#12094</a>
                                            </td>
                                            <td class="align-middle border-top-0">Oct 03, 2023</td>
                                            <td class="align-middle border-top-0">4</td>
                                            <td class="align-middle border-top-0">
                                                <span class="badge bg-success">Completed</span>
                                            </td>
                                            <td class="align-middle border-top-0">$18.00</td>
                                            <td class="text-muted align-middle border-top-0">
                                                <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Header Section End-->
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

    <!-- User Account Modal -->
    <?php include 'modal/account.php'  ?>
    <!-- User Account Modal -->

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