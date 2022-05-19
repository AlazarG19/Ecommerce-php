<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['cart-submit'])) {
        // print_r($_POST);
        $cart->saveForLater($_POST["item_id"],$saveTable = "cart",$fromTable = "wishlist");
    }
    if (isset($_POST["delete-btn-submit"])) {
        $deletedItemId = $cart->deleteCartItem($_POST["item_id"],$table = "wishlist");
        // print_r($deletedItemId);
    }
} ?>
<!-- Shopping cart section  -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Wishlist</h5>

        <!--  shopping cart items   -->
        <div class="row">
            <div class="col-sm-12">
            <div class="row">
                    <div class="com-sm-9 text-center py-2">
                    <img style = "width :400px" src="./assets/empty_cart.png" alt="Empty Cart" srcset="" class = "img-fluid">
                        <p class="font-baloo font-size-16 text-black-50">Empty Wishlist</p>
                    </div>
                </div>
                <!-- !cart item -->
            </div>
        </div>
        <!--  !shopping cart items   -->
    </div>
</section>
<!-- !Shopping cart section  -->