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
            <div class="card-body p-9 px-0 text-center">
               <h2 class="mb-0 fs-1">Shop</h2>
            </div>
         </div>
      </div>
      <!-- Breadcrumb Section End -->

      <!-- Shop Section Start -->
      <div class="mt-8 mb-lg-14 mb-8">
         <div class="container">
            <div class="row">
               <aside class="col-lg-3 col-md-4 mb-6 mb-md-0">
                  <div class="offcanvas offcanvas-start offcanvas-collapse w-md-50" tabindex="-1" id="offcanvasCategory" aria-labelledby="offcanvasCategoryLabel">
                     <div class="offcanvas-header d-lg-none">
                        <h5 class="offcanvas-title" id="offcanvasCategoryLabel">Filter</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                     </div>
                     <div class="offcanvas-body ps-lg-2 pt-lg-0">
                        <div class="mb-8">
                           <h5 class="mb-3">Filter By Price</h5>
                           <div>
                              <div id="priceRange" class="mb-3"></div>
                              <small class="text-muted">Price:</small>
                              <span id="priceRange-value" class="small"></span>
                           </div>
                        </div>

                        <hr />

                        <div class="mb-8">
                           <h5 class="mb-3">All Categories</h5>

                           <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="eGrocery" checked />
                              <label class="form-check-label" for="eGrocery">E-Grocery</label>
                           </div>
                           <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="DealShare" />
                              <label class="form-check-label" for="DealShare">DealShare</label>
                           </div>
                           <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="Dmart" />
                              <label class="form-check-label" for="Dmart">DMart</label>
                           </div>
                           <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="Blinkit" />
                              <label class="form-check-label" for="Blinkit">Blinkit</label>
                           </div>
                           <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="BigBasket" />
                              <label class="form-check-label" for="BigBasket">BigBasket</label>
                           </div>
                           <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="StoreFront" />
                              <label class="form-check-label" for="StoreFront">StoreFront</label>
                           </div>
                           <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="Spencers" />
                              <label class="form-check-label" for="Spencers">Spencers</label>
                           </div>
                           <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="onlineGrocery" />
                              <label class="form-check-label" for="onlineGrocery">Online Grocery</label>
                           </div>
                        </div>

                        <hr />

                        <div class="mb-8 position-relative">
                           <h5 class="mb-3">Top Rated Products</h5>
                           <div class="row align-items-center">
                              <div class="col-4">
                                 <img src="assets/images/products/product-img-1.jpg" alt="Grocery Ecommerce Template" class="img-fluid" />
                              </div>
                              <div class="col-8 ps-0">
                                 <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Instant Food</small></a>
                                 </div>
                                 <h2 class="fs-6"><a href="shop-single.php" class="text-inherit text-decoration-none">Haldiram's Sev Bhujia</a></h2>
                                 <div>
                                    <span class="text-dark">$18</span>
                                    <span class="text-decoration-line-through text-muted">$24</span>
                                 </div>
                              </div>
                           </div>
                           <hr />
                           <div class="row align-items-center">
                              <div class="col-4">
                                 <img src="assets/images/products/product-img-1.jpg" alt="Grocery Ecommerce Template" class="img-fluid" />
                              </div>
                              <div class="col-8 ps-0">
                                 <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Instant Food</small></a>
                                 </div>
                                 <h2 class="fs-6"><a href="shop-single.php" class="text-inherit text-decoration-none">Haldiram's Sev Bhujia</a></h2>
                                 <div>
                                    <span class="text-dark">$18</span>
                                    <span class="text-decoration-line-through text-muted">$24</span>
                                 </div>
                              </div>
                           </div>
                           <hr />
                           <div class="row align-items-center">
                              <div class="col-4">
                                 <img src="assets/images/products/product-img-1.jpg" alt="Grocery Ecommerce Template" class="img-fluid" />
                              </div>
                              <div class="col-8 ps-0">
                                 <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Instant Food</small></a>
                                 </div>
                                 <h2 class="fs-6"><a href="shop-single.php" class="text-inherit text-decoration-none">Haldiram's Sev Bhujia</a></h2>
                                 <div>
                                    <span class="text-dark">$18</span>
                                    <span class="text-decoration-line-through text-muted">$24</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </aside>
               <section class="col-lg-9 col-md-12">
                  <div class="d-lg-flex justify-content-between align-items-center">
                     <!-- breadcrumb -->
                     <div class="mb-3 mb-lg-0">
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb mb-0">
                              <li class="breadcrumb-item"><a href="">Home</a></li>
                              <li class="breadcrumb-item active">Shop</li>
                           </ol>
                        </nav>
                     </div>
                     <!-- breadcrumb -->

                     <!-- icon -->
                     <div class="d-md-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center justify-content-between">
                           <div>
                              <a href="shop-list.php" class="text-muted me-3"><i class="bi bi-list-ul"></i></a>
                              <a href="shop.php" class="me-3 active"><i class="bi bi-grid"></i></a>
                              <a href="shop-grid-3-column.php" class="me-3 text-muted"><i class="bi bi-grid-3x3-gap"></i></a>
                           </div>
                           <div class="ms-2 d-lg-none">
                              <a class="btn btn-outline-gray-400 text-muted" data-bs-toggle="offcanvas" href="#offcanvasCategory" role="button" aria-controls="offcanvasCategory">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter me-2">
                                    <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                 </svg>
                                 Filters
                              </a>
                           </div>
                        </div>

                        <div class="d-flex mt-2 mt-lg-0">
                           <div class="me-2 flex-grow-1">
                              <!-- select option -->
                              <select class="form-select">
                                 <option selected>Show: 50</option>
                                 <option value="10">10</option>
                                 <option value="20">20</option>
                                 <option value="30">30</option>
                              </select>
                           </div>
                           <div>
                              <!-- select option -->
                              <select class="form-select">
                                 <option selected>Sort by: Featured</option>
                                 <option value="Low to High">Price: Low to High</option>
                                 <option value="High to Low">Price: High to Low</option>
                                 <option value="Release Date">Release Date</option>
                                 <option value="Avg. Rating">Avg. Rating</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- row -->
                  <div class="row g-4 row-cols-xl-4 row-cols-lg-3 row-cols-2 row-cols-md-2 mt-2">
                     <!-- col -->
                     <div class="col">
                        <!-- card -->
                        <div class="card card-product">
                           <div class="card-body">
                              <!-- badge -->
                              <div class="text-center position-relative">
                                 <div class="position-absolute top-0 start-0">
                                    <span class="badge bg-danger">Sale</span>
                                 </div>
                                 <a href="shop-single.php">
                                    <!-- img -->
                                    <img src="assets/images/products/product-img-1.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                 </a>
                                 <!-- action btn -->
                                 <div class="card-product-action">
                                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                       <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                    </a>
                                    <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                 </div>
                              </div>
                              <!-- heading -->
                              <div class="text-small mb-1">
                                 <a href="#!" class="text-decoration-none text-muted"><small>Snack & Munchies</small></a>
                              </div>
                              <h2 class="fs-6"><a href="shop-single.php" class="text-inherit text-decoration-none">Haldiram's Sev Bhujia</a></h2>

                              <div>
                                 <span class="text-dark">$34</span>
                                 <span class="text-muted text-decoration-line-through ms-1">$38</span>
                              </div>
                              <div class="mt-3 d-flex align-items-center gap-2">
                                 <button data-bs-toggle="modal" data-bs-target="#checkoutModal" class="btn btn-primary hover-border w-75 rounded-0 px-0"> <i class="feather-icon icon-shopping-bag me-1"></i>Buy Now </button>
                                 <a href="#!" class="btn btn-primary hover-border w-25 rounded-0 px-0"><i class="feather-icon icon-shopping-cart"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- col -->
                     <div class="col">
                        <!-- card -->
                        <div class="card card-product">
                           <div class="card-body">
                              <!-- badge -->
                              <div class="text-center position-relative">
                                 <div class="position-absolute top-0 start-0">
                                    <span class="badge bg-success">14%</span>
                                 </div>

                                 <a href="shop-single.php">
                                    <!-- img -->
                                    <img src="assets/images/products/product-img-2.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                 </a>
                                 <!-- action btn -->
                                 <div class="card-product-action">
                                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                       <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                    </a>
                                    <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                 </div>
                              </div>
                              <!-- heading -->
                              <div class="text-small mb-1">
                                 <a href="#!" class="text-decoration-none text-muted"><small>Bakery & Biscuits</small></a>
                              </div>
                              <h2 class="fs-6"><a href="shop-single.php" class="text-inherit text-decoration-none">NutriChoice Digestive</a></h2>
                              <div>
                                 <span class="text-dark">$34</span>
                                 <span class="text-muted text-decoration-line-through ms-1">$38</span>
                              </div>
                              <div class="mt-3 d-flex align-items-center gap-2">
                                 <button data-bs-toggle="modal" data-bs-target="#checkoutModal" class="btn btn-primary hover-border w-75 rounded-0 px-0"> <i class="feather-icon icon-shopping-bag me-1"></i>Buy Now </button>
                                 <a href="#!" class="btn btn-primary hover-border w-25 rounded-0 px-0"><i class="feather-icon icon-shopping-cart"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- col -->
                     <div class="col">
                        <!-- card -->
                        <div class="card card-product">
                           <div class="card-body">
                              <!-- badge -->
                              <div class="text-center position-relative">
                                 <a href="shop-single.php"><img src="assets/images/products/product-img-3.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                 <!-- action btn -->
                                 <div class="card-product-action">
                                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                       <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                    </a>
                                    <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                 </div>
                              </div>
                              <!-- heading -->
                              <div class="text-small mb-1">
                                 <a href="#!" class="text-decoration-none text-muted"><small>Bakery & Biscuits</small></a>
                              </div>
                              <h2 class="fs-6"><a href="shop-single.php" class="text-inherit text-decoration-none">Cadbury 5 Star Chocolate</a></h2>
                              <div>
                                 <span class="text-dark">$34</span>
                                 <span class="text-muted text-decoration-line-through ms-1">$38</span>
                              </div>
                              <div class="mt-3 d-flex align-items-center gap-2">
                                 <button data-bs-toggle="modal" data-bs-target="#checkoutModal" class="btn btn-primary hover-border w-75 rounded-0 px-0"> <i class="feather-icon icon-shopping-bag me-1"></i>Buy Now </button>
                                 <a href="#!" class="btn btn-primary hover-border w-25 rounded-0 px-0"><i class="feather-icon icon-shopping-cart"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- col -->
                     <div class="col">
                        <!-- card -->
                        <div class="card card-product">
                           <div class="card-body">
                              <!-- badge -->
                              <div class="text-center position-relative">
                                 <div class="position-absolute top-0">
                                    <span class="badge bg-danger">Hot</span>
                                 </div>

                                 <a href="shop-single.php">
                                    <!-- img -->
                                    <img src="assets/images/products/product-img-4.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                 </a>
                                 <!-- action btn -->
                                 <div class="card-product-action">
                                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                       <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                    </a>
                                    <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                 </div>
                              </div>
                              <!-- heading -->
                              <div class="text-small mb-1">
                                 <a href="#!" class="text-decoration-none text-muted"><small>Snack & Munchies</small></a>
                              </div>
                              <h2 class="fs-6"><a href="shop-single.php" class="text-inherit text-decoration-none">Onion Flavour Potato</a></h2>
                              <div>
                                 <span class="text-dark">$34</span>
                                 <span class="text-muted text-decoration-line-through ms-1">$38</span>
                              </div>
                              <div class="mt-3 d-flex align-items-center gap-2">
                                 <button data-bs-toggle="modal" data-bs-target="#checkoutModal" class="btn btn-primary hover-border w-75 rounded-0 px-0"> <i class="feather-icon icon-shopping-bag me-1"></i>Buy Now </button>
                                 <a href="#!" class="btn btn-primary hover-border w-25 rounded-0 px-0"><i class="feather-icon icon-shopping-cart"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- col -->
                     <div class="col">
                        <!-- card -->
                        <div class="card card-product">
                           <div class="card-body">
                              <!-- badge -->
                              <div class="text-center position-relative">
                                 <a href="shop-single.php"><img src="assets/images/products/product-img-5.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                 <!-- action btn -->
                                 <div class="card-product-action">
                                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                       <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                    </a>
                                    <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                 </div>
                              </div>
                              <!-- heading -->
                              <div class="text-small mb-1">
                                 <a href="#!" class="text-decoration-none text-muted"><small>Instant Food</small></a>
                              </div>
                              <h2 class="fs-6"><a href="shop-single.php" class="text-inherit text-decoration-none">Salted Instant Popcorn</a></h2>
                              <div>
                                 <span class="text-dark">$34</span>
                                 <span class="text-muted text-decoration-line-through ms-1">$38</span>
                              </div>
                              <div class="mt-3 d-flex align-items-center gap-2">
                                 <button data-bs-toggle="modal" data-bs-target="#checkoutModal" class="btn btn-primary hover-border w-75 rounded-0 px-0"> <i class="feather-icon icon-shopping-bag me-1"></i>Buy Now </button>
                                 <a href="#!" class="btn btn-primary hover-border w-25 rounded-0 px-0"><i class="feather-icon icon-shopping-cart"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- col -->
                     <div class="col">
                        <!-- card -->
                        <div class="card card-product">
                           <div class="card-body">
                              <!-- badge -->
                              <div class="text-center position-relative">
                                 <div class="position-absolute top-0">
                                    <span class="badge bg-danger">Sale</span>
                                 </div>
                                 <a href="shop-single.php">
                                    <!-- img -->
                                    <img src="assets/images/products/product-img-6.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                 </a>
                                 <!-- action btn -->
                                 <div class="card-product-action">
                                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                       <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                    </a>
                                    <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                 </div>
                              </div>
                              <!-- heading -->
                              <div class="text-small mb-1">
                                 <a href="#!" class="text-decoration-none text-muted"><small>Dairy, Bread & Eggs</small></a>
                              </div>
                              <h2 class="fs-6"><a href="shop-single.php" class="text-inherit text-decoration-none">Blueberry Greek Yogurt</a></h2>
                              <div>
                                 <span class="text-dark">$34</span>
                                 <span class="text-muted text-decoration-line-through ms-1">$38</span>
                              </div>
                              <div class="mt-3 d-flex align-items-center gap-2">
                                 <button data-bs-toggle="modal" data-bs-target="#checkoutModal" class="btn btn-primary hover-border w-75 rounded-0 px-0"> <i class="feather-icon icon-shopping-bag me-1"></i>Buy Now </button>
                                 <a href="#!" class="btn btn-primary hover-border w-25 rounded-0 px-0"><i class="feather-icon icon-shopping-cart"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- col -->
                     <div class="col">
                        <!-- card -->
                        <div class="card card-product">
                           <div class="card-body">
                              <!-- badge -->
                              <div class="text-center position-relative">
                                 <a href="shop-single.php"><img src="assets/images/products/product-img-7.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                 <!-- action btn -->
                                 <div class="card-product-action">
                                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                       <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                    </a>
                                    <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                 </div>
                              </div>
                              <!-- heading -->
                              <div class="text-small mb-1">
                                 <a href="#!" class="text-decoration-none text-muted"><small>Dairy, Bread & Eggs</small></a>
                              </div>
                              <h2 class="fs-6"><a href="shop-single.php" class="text-inherit text-decoration-none">Britannia Cheese Slices</a></h2>
                              <div>
                                 <span class="text-dark">$34</span>
                                 <span class="text-muted text-decoration-line-through ms-1">$38</span>
                              </div>
                              <div class="mt-3 d-flex align-items-center gap-2">
                                 <button data-bs-toggle="modal" data-bs-target="#checkoutModal" class="btn btn-primary hover-border w-75 rounded-0 px-0"> <i class="feather-icon icon-shopping-bag me-1"></i>Buy Now </button>
                                 <a href="#!" class="btn btn-primary hover-border w-25 rounded-0 px-0"><i class="feather-icon icon-shopping-cart"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- col -->
                     <div class="col">
                        <!-- card -->
                        <div class="card card-product">
                           <div class="card-body">
                              <!-- badge -->
                              <div class="text-center position-relative">
                                 <a href="shop-single.php"><img src="assets/images/products/product-img-8.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                 <!-- action btn -->
                                 <div class="card-product-action">
                                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                       <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                    </a>
                                    <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                 </div>
                              </div>
                              <!-- heading -->
                              <div class="text-small mb-1">
                                 <a href="#!" class="text-decoration-none text-muted"><small>Instant Food</small></a>
                              </div>
                              <h2 class="fs-6"><a href="shop-single.php" class="text-inherit text-decoration-none">Kellogg's Original Cereals</a></h2>
                              <div>
                                 <span class="text-dark">$34</span>
                                 <span class="text-muted text-decoration-line-through ms-1">$38</span>
                              </div>
                              <div class="mt-3 d-flex align-items-center gap-2">
                                 <button data-bs-toggle="modal" data-bs-target="#checkoutModal" class="btn btn-primary hover-border w-75 rounded-0 px-0"> <i class="feather-icon icon-shopping-bag me-1"></i>Buy Now </button>
                                 <a href="#!" class="btn btn-primary hover-border w-25 rounded-0 px-0"><i class="feather-icon icon-shopping-cart"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row mt-8">
                     <div class="col">
                        <!-- nav -->
                        <nav>
                           <ul class="pagination">
                              <li class="page-item disabled">
                                 <a class="page-link mx-1" href="#" aria-label="Previous">
                                    <i class="feather-icon icon-chevron-left"></i>
                                 </a>
                              </li>
                              <li class="page-item"><a class="page-link mx-1 active" href="#">1</a></li>
                              <li class="page-item"><a class="page-link mx-1" href="#">2</a></li>

                              <li class="page-item"><a class="page-link mx-1" href="#">...</a></li>
                              <li class="page-item"><a class="page-link mx-1" href="#">12</a></li>
                              <li class="page-item">
                                 <a class="page-link mx-1" href="#" aria-label="Next">
                                    <i class="feather-icon icon-chevron-right"></i>
                                 </a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </div>
      <!-- Shop Section End -->
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