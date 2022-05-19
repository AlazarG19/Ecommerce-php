<?php
class CartClass{
    public $db = null;
    public function __construct(DBController $db)
    {
        if(!isset($db->conn)){
            return null;
        }
        $this->db = $db;
    }
    public function insertintoCart($params=null,$table = "cart"){
        if($this->db->conn != null){
            if($params != null){
                // get table colums 
                $columns = implode(",",array_keys($params));
                $values = implode (",",array_values($params));
                // create sql query 
                $sql = "INSERT INTO {$table} ({$columns}) VALUES ({$values})";
                // execute query
                $result = $this->db->conn->query($sql);
                return $result;
            
            }
        }
    }
    // to get use id and item id and insert into cart table 
    public function addToCart($userid,$itemid){
        if(isset($userid) && isset($itemid)){
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );
            $result = $this->insertintoCart($params);
            if($result){
                header("Location:".$_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }
    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf("%.2f",$sum);
        }
    }
    // delete cart item using cart item id 
    public function deleteCartItem($itemid = null,$table="cart"){
        if($itemid != null){

            $result = $this->db->conn->query("DELETE FROM {$table} WHERE item_id = {$itemid}");
            if($result){
                header("Location:".$_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }
    // get item id of shopping cart list 
    public function getCartId($cartArray = null,$key = "item_id"){
        if($cartArray != null){
            $cart_id = array_map(function($value) use($key){
                return $value[$key];
            }
        ,$cartArray);};
        return $cart_id;
    }
    // save for wishlist
    public function saveForLater ($item_id = null ,$saveTable = "wishlist",$fromTable = "cart"){
        if(isset($item_id)){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id = {$item_id};";
            $query .= " DELETE FROM {$fromTable} WHERE item_id = {$item_id};";
            // execute mult query 
            print_r($query);
            $result = $this->db->conn->multi_query($query);
            if($result){
                header("Location:".$_SERVER['PHP_SELF']);
                return $result;
            }
        }
    }
}