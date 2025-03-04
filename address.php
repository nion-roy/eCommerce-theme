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
                            <div class="d-flex justify-content-between mb-6">
                                <h2 class="mb-0">Address</h2>
                                <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addAddressModal">Add a new address</a>
                            </div>

                            <style>
                                .card {
                                    transition: border 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
                                    cursor: pointer;
                                }

                                input.card-radio:checked+.card {
                                    border: 1px solid #0aad0a !important;
                                    background: #f0f3f2; 
                                }
                            </style>

                            <div class="row">
                                <div class="col-xl-5 col-lg-6 col-xxl-4 col-12 mb-4">
                                    <input type="radio" id="card1" name="card-selection" class="card-radio d-none" checked>
                                    <label for="card1" class="card border">
                                        <div class="card-body">
                                            <p class="m-0">Nion Roy</p>
                                            <p class="m-0">4450 North Avenue Oakland</p>
                                            <p class="m-0">01761115624</p>
                                            <div class="mt-2 pt-2 border-top">
                                                <a href="#" class="text-inherit"><i class="feather-icon icon-edit me-1"></i>Edit</a>
                                                <a href="#" class="text-danger ms-3" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-icon icon-trash-2 me-1"></i>Delete</a>
                                            </div>
                                        </div>
                                    </label>
                                </div>

                                <div class="col-xl-5 col-lg-6 col-xxl-4 col-12 mb-4">
                                    <input type="radio" id="card2" name="card-selection" class="card-radio d-none">
                                    <label for="card2" class="card border">
                                        <div class="card-body">
                                            <p class="m-0">Nion Roy 02</p>
                                            <p class="m-0">4450 North Avenue Dhaka</p>
                                            <p class="m-0">01761115624</p>
                                            <div class="mt-2 pt-2 border-top">
                                                <a href="#" class="text-inherit"><i class="feather-icon icon-edit me-1"></i>Edit</a>
                                                <a href="#" class="text-danger ms-3" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-icon icon-trash-2 me-1"></i>Delete</a>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Header Section End-->
    </main>


    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Are you sure you want to delete this address?</h6>
                    <p class="m-0">Nion Roy</p>
                    <p class="m-0"> 4450 North Avenue Oakland</p>
                    <p class="m-0">01761115624</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-gray-400" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-6">
                    <div class="d-flex justify-content-between mb-5">
                        <div>
                            <h5 class="mb-1" id="addAddressModalLabel">New Shipping Address</h5>
                            <p class="small mb-0">Add new shipping address for your order delivery.</p>
                        </div>
                        <div>
                            <!-- button -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Full name" aria-label="Full name" required="" />
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Contact number" aria-label="Contact number" required="" />
                        </div>
                        <div class="col-12">
                            <select class="form-select">
                                <option selected="">Select Division</option>
                                <option value="1">Barisal</option>
                                <option value="2">Chattogram</option>
                                <option value="3">Dhaka</option>
                                <option value="4">Khulna</option>
                                <option value="5">Mymensingh</option>
                                <option value="6">Rajshahi</option>
                                <option value="7">Rangpur</option>
                                <option value="8">Sylhet</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <select class="form-select">
                                <option selected="">Select District </option>
                                <option value="1">Dinajpur</option>
                                <option value="2">Gaibandha</option>
                                <option value="3">Kurigram </option>
                                <option value="3">Lalmonirhat </option>
                                <option value="3">Nilphamari </option>
                                <option value="3">Panchagarh </option>
                                <option value="3">Rangpur </option>
                                <option value="3">Thakurgaon </option>
                            </select>
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Zip Code" />
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Delivery address" />
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">Set as Default</label>
                            </div>
                        </div>
                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="button">Save Address</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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