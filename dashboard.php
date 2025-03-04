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
                            <h2 class="mb-6">Dashboards</h2>

                            <div class="row">
                                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                    <div class="card bg-light border-success">
                                        <div class="card-body">
                                            <h6 class="card-title">Total Orders</h6>
                                            <h3 class="card-text">05</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                    <div class="card bg-light border-success">
                                        <div class="card-body">
                                            <h6 class="card-title">Success Orders</h6>
                                            <h3 class="card-text">03</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                    <div class="card bg-light border-danger">
                                        <div class="card-body">
                                            <h6 class="card-title">Canceled Orders</h6>
                                            <h3 class="card-text">02</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <h6 class="card-title">Total Sales</h6>
                                            <h3 class="card-text">$5,000</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
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