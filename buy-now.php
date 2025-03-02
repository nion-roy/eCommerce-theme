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
        <section class="my-lg-14 mb-8 border-top pt-8" style="margin-top: 0 !important;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-3">
                        <span>Already customer? <a href="#" data-bs-toggle="modal" data-bs-target="#userModal">Login Now</a></span>
                    </div>
                    <div class="col-lg-6 col-md-8 col-12 mx-auto">
                        <div class="mb-3">
                            <h4 class="mb-0">SHIPPING INFORMATION</h4>
                        </div>

                        <div>
                            <form action="" method="post">
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
                                    <label for="order_notes" class="form-label">Order notes (optional)</label>
                                    <textarea name="order_notes" id="order_notes" class="form-control" cols="10" rows="2" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>

                                <div class="form-group border rounded p-3 rounded-bottom-0 mt-5 d-flex align-items-center gap-2">
                                    <input type="radio" id="inside_dhaka" name="location" value="inside_dhaka" required />
                                    <label for="inside_dhaka" class="w-100 d-inline-flex justify-content-between align-items-center">
                                        <span>Inside Dhaka</span>
                                        <span class="text-success">70 ৳</span>
                                    </label>
                                </div>
                                <div class="form-group border rounded p-3 rounded-top-0 border-top-0 d-flex align-items-center gap-2">
                                    <input type="radio" id="outside_dhaka" name="location" value="outside_dhaka" required />
                                    <label for="outside_dhaka" class="w-100 d-inline-flex justify-content-between align-items-center">
                                        <span>Outside Dhaka</span>
                                        <span class="text-success text-end">120 ৳</span>
                                    </label>
                                </div>
                            </form>
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