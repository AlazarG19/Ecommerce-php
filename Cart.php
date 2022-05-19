<!-- start of header  -->
<?php 
ob_start();
include ("Header.php"); ?>
<!-- end of header  -->
<!-- start of shopping cart  -->
<?php 
    count($product->getData($table = "cart")) == 0 ? 
     include("./Template/NotFound/CartNotFound.php") :
     include("./Template/ShoppingCart.php"); 

?>
<!-- start of wishilist  -->
<?php 
    count($product->getData($table = "wishlist")) == 0 ? 
     include("./Template/NotFound/WishListNotFound.php") : 
     include("./Template/Wishlist.php");
?>
<!-- end of whishlist cart  -->
<!-- start of phones  -->
<?php include("./Template/NewPhones.php") ?>
<!-- end of phones  -->
<!-- start of footer  -->
<?php include ("./Footer.php"); ?>
<!-- end of foooter  -->