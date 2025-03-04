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
                            <div class="mb-6">
                                <!-- heading -->
                                <h2 class="mb-0">Account Setting</h2>
                            </div>
                            <div>
                                <!-- heading -->
                                <h5 class="mb-4">Account details</h5>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- form -->
                                        <form>
                                            <!-- input -->
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control" placeholder="jitu chauhan" />
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" placeholder="example@gmail.com" />
                                            </div>
                                            <!-- input -->
                                            <div class="mb-5">
                                                <label class="form-label">Phone</label>
                                                <input type="text" class="form-control" placeholder="Phone number" />
                                            </div>
                                            <!-- button -->
                                            <div class="mb-3">
                                                <button class="btn btn-primary">Save Details</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-10" />
                            <div class="pe-lg-14">
                                <!-- heading -->
                                <h5 class="mb-4">Password</h5>
                                <form class="row row-cols-1 row-cols-lg-2">
                                    <!-- input -->
                                    <div class="mb-3 col">
                                        <label class="form-label">New Password</label>
                                        <input type="password" class="form-control" placeholder="**********" />
                                    </div>
                                    <!-- input -->
                                    <div class="mb-3 col">
                                        <label class="form-label">Current Password</label>
                                        <input type="password" class="form-control" placeholder="**********" />
                                    </div>
                                    <!-- input -->
                                    <div class="col-12">
                                        <p class="mb-4">
                                            Can’t remember your current password?
                                            <a href="#">Reset your password.</a>
                                        </p>
                                        <a href="#" class="btn btn-primary">Save Password</a>
                                    </div>
                                </form>
                            </div>
                            <hr class="my-10" />
                            <div>
                                <!-- heading -->
                                <h5 class="mb-4">Delete Account</h5>
                                <p class="mb-2">Would you like to delete your account?</p>
                                <p class="mb-5">This account contain 12 orders, Deleting your account will remove all the order details associated with it.</p>
                                <!-- btn -->
                                <a href="#" class="btn btn-outline-danger">I want to delete my account</a>
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