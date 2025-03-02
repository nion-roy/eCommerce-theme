<div class="modal slideUpIn" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header border-0">
                <h5 class="modal-title fs-3 fw-bold text-center w-100" id="checkoutModalLabel">ক্যাশ অন ডেলিভারিতে <br />
                    অর্ডার করতে আপনার তথ্য দিন</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <!-- <label for="name" class="form-label">আপনার নাম *<span class="text-danger fs-5 fw-bold ms-1">*</span></label> -->
                        <input type="text" class="form-control" id="name" name="name" placeholder="আপনার নাম লিখুন..." required />
                    </div>
                    <div class="form-group mb-3">
                        <!-- <label for="phone" class="form-label">মোবাইল নাম্বার *<span class="text-danger fs-5 fw-bold ms-1">*</span></label> -->
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="আপনার ফোন নাম্বার দিন..." required />
                    </div>
                    <div class="form-group mb-3">
                        <!-- <label for="address" class="form-label">আপনার ঠিকানা *<span class="text-danger fs-5 fw-bold ms-1">*</span></label> -->
                        <input type="text" class="form-control" id="address" name="address" placeholder="আপনার ঠিকানা লিখুন..." required />
                    </div>

                    <div class="form-group mb-3">
                        <!-- <label for="order_notes" class="form-label">Order notes (optional)</label> -->
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

                    <hr class="m-0 mt-5">
                    <div class="cart-products">
                        <div class="row">
                            <div class="table-responsive">
                                <style>
                                    .product-img-wrapper {
                                        position: relative;
                                        display: inline-block;
                                    }
                                    .product-badge {
                                        position: absolute;
                                        top: 5px;
                                        right: 5px;
                                        font-size: 10px;
                                        width: 22px;
                                        height: 22px;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        color: #fff;
                                        border-radius: 50px;
                                    }
                                </style>

                                <table class="table text-nowrap table-with-checkbox m-0">
                                    <tbody>
                                        <tr>
                                            <td class="align-middle">
                                                <a href="#">
                                                    <div class="product-img-wrapper">
                                                        <img src="assets/images/products/product-img-18.jpg" class="icon-shape icon-xxl" alt="Product Image" />
                                                        <span class="bg-success product-badge">12</span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <div>
                                                    <h5 class="fs-6 mb-0"><a href="#" class="text-inherit">Organic Banana</a></h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">$35.00</td>
                                            <td class="align-middle">
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                    <i class="feather-icon icon-trash-2"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <a href="#">
                                                    <div class="product-img-wrapper">
                                                        <img src="assets/images/products/product-img-18.jpg" class="icon-shape icon-xxl" alt="Product Image" />
                                                        <span class="bg-success product-badge">20</span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <div>
                                                    <h5 class="fs-6 mb-0"><a href="#" class="text-inherit">Organic Banana</a></h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">$35.00</td>
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
                    <hr class="m-0">


                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>

                </form>
            </div>
            <div class="modal-footer border-0">
                <p>By clicking the "Submit" button, you agree to our <a href="#!" class="text-decoration-none text-muted">Terms & Conditions</a></p>
            </div>
        </div>
    </div>
</div>