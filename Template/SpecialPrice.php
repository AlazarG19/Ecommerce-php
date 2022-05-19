<?php
shuffle($product_shuffle);
$brand = array_map(function ($item) {
  return $item["item_brand"];
}, $product_shuffle);
$unique = array_unique($brand);
sort($unique);

if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(isset($_POST['special_price_submit'])){
      $cart->addToCart($_POST['user_id'],$_POST['item_id']);
  }
}
?>
<section id="special-price">
  <div class="container">
    <h4 class="font-rubik font-size-20">Special Prize</h4>
    <div id="filters" class="button-group text-right">
      <button class="btn is-checked" data-filter="*">All Brands</button>
      <?php array_map(function ($item) { ?>
        <button class="btn" <?php echo "data-filter='.{$item}'" ?>><?php echo "{$item}" ?> </button>
      <?php }, $unique); ?>
    </div>
    <div class="grid" style="display: flex;">
      <?php array_map(function ($item) use($cart,$product){ ?>
        <div class="grid-items <?php echo $item['item_brand'] ?> border" style="width: 200px;">
          <div class="item py-2" style="width: 200px;">
            <div class="product font-rale">
              <a href="<?php printf("%s?item_id=%s",'product.php',$item['item_id']) ?>">
                <img src=<?php echo $item['item_image'] ?? "./assets/products/13.png" ?> style="width: 200px;" alt="product1" />
              </a>
              <div class="text-center">
                <h6><?php echo $item['item_name'] ?></h6>
                <div class="rating text-warning font-size-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$<?php echo $item['item_price'] ?? "0" ?></span>
                </div>
                <form method="post">
                <input type="hidden" name = "item_id" value="<?php echo $item['item_id']??"1"; ?>">
                <input type="hidden" name = "user_id" value="1">
                <?php 
                if(in_array($item["item_id"],$cart->getCartId($product->getData("cart")))){
                  echo '<button type="submit" name = "top_sale_submit" class="btn btn-success font-size-12" disabled>Added To cart</button>';
                }else {
                  echo '<button type="submit" name = "top_sale_submit" class="btn btn-warning font-size-12"> Add To cart </button>';
                }
                ?>
              </form>
              </div>
            </div>
          </div>
        </div>
      <?php }, $product_shuffle) ?>
    </div>
  </div>
</section>