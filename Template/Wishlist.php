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
                <?php
                foreach ($product->getData("wishlist") as $item) {
                    $result = $product->getProduct($item["item_id"]);
                    $subTotal[] = array_map(function ($item) {
                ?>
                        <!-- cart item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item["item_image"]; ?>" alt="cart1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item["item_name"]; ?></h5>
                                <small>by <?php echo $item["item_brand"]; ?></small>
                                <!-- product rating -->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                                </div>
                                <!--  !product rating-->

                                <!-- product qty -->
                                <div class="qty d-flex pt-2">
                                    
                                    <form method="post">
                                        <input type="hidden" name="item_id" value="<?php echo $item["item_id"] ?? 0; ?>">
                                        <button type="submit" name="delete-btn-submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                    </form>
                                    <form method="post">
                                        <input type="hidden" name="item_id" value="<?php echo $item["item_id"] ?? 0; ?>">
                                        <button name = "cart-submit" type="submit" class="btn font-baloo text-danger">Add to Cart</button>
                                    </form>
                                </div>
                                <!-- !product qty -->

                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    $<span data-id=<?php echo $item["item_id"] ?? 0; ?> class="product_price"><?php echo $item["item_price"]; ?></span>
                                </div>
                            </div>
                        </div>
                <?php
                        return $item["item_price"];
                    }, $result);
                }
                ?>
                <!-- !cart item -->
            </div>
        </div>
        <!--  !shopping cart items   -->
    </div>
</section>
<!-- !Shopping cart section  -->