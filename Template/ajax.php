<?php
require("../Database/Productclass.php");
require("../Database/DBController.php");
$db=new DBController();
$product = new ProductClass($db);
// print_r( $product->getProduct($_POST['itemid'])); 
if(isset($_POST["itemid"])){
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}
?>