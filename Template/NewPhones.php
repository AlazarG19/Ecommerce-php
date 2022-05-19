<?php
shuffle($product_shuffle);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['new_phone_submit'])) {
    $cart->addToCart($_POST['user_id'], $_POST['item_id']);
  }
}
?>
<section id="new-phones" style="margin-top: 40px;">
  <div class="container">
    <h4 class="font-rubik font-size-20">New Phone</h4>
    <div class="owl-carousel owl-theme">
      <?php foreach ($product_shuffle as $item) { ?>
        <div class="item py-2 bg-light">
          <div class="product font-rale">
            <a href="<?php printf("%s?item_id=%s", 'product.php', $item['item_id']) ?>">
              <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" style="width :200px;" alt="product1" />
            </a>
            <div class="text-center">
              <h6> <?php echo $item['item_name'] ?? "Unknown"; ?> </h6>
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">
                <span>$<?php echo $item['item_price'] ?? "0"; ?></span>
              </div>
              <form method="post">
                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? "1"; ?>">
                <input type="hidden" name="user_id" value="1">
                <?php 
                if(in_array($item["item_id"],$cart->getCartId($product->getData("cart")))){
                  echo '<button type="submit" name = "new_phone_submit" class="btn btn-success font-size-12" disabled>Added To cart</button>';
                }else {
                  echo '<button type="submit" name = "new_phone_submit" class="btn btn-warning font-size-12"> Add To cart </button>';
                }
                ?>
              </form>
            </div>
          </div>

        </div>
      <?php }; ?>
    </div>
  </div>
</section>