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
      <!-- Header Section Start-->
      <?php include 'header-banner.php'  ?>
      <!-- Header Section End-->

      <!-- Category Section Start-->
      <?php include 'category.php'  ?>
      <!-- Category Section End-->

      <!-- Popular Products Section Start-->
      <?php include 'product.php'  ?>
      <!-- Popular Products Section End-->

      <!-- Promotion Banner Section Start-->
      <?php include 'promotion-banner.php'  ?>
      <!-- Promotion Banner Section End-->

      <!-- Best Sellers Section Start-->
      <?php include 'best-seller.php'  ?>
      <!-- Best Sellers Section End-->

      <!-- Blog Section Start-->
      <?php include 'home-blog.php'  ?>
      <!-- Blog Section End-->
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