<?php

class CartController extends BaseController{

    public $table_name = "cart";
    private $conn;

    public $id;
    public $width;
    public $length;
    public $depth;
    public $bag;
    public $customer_id = 0;
    public $product_values;
    public $total_price;
    public $total_quantity = 1;

    public function __construct($db){
        $this->conn = $db;
    }

    public function indexAction(){
        include 'view/cart.php';
    }

    public function addToCartAction(){
        $CheckProduct = $this->getCheckProductCart($this->product_values, $this->customer_id);
        if ($CheckProduct > 0){
            $this->updateCart($CheckProduct);
        }else{
            $query = $this->conn->prepare("INSERT INTO " . $this->table_name . " SET
            total_quantity=:total_quantity,
            total_price=:total_price,
            product_values=:product_values,
            customer_id=:customer_id
            ");
            $insert = $query->execute(array(
                "total_quantity"    => $this->total_quantity,
                "total_price"       => $this->total_price,
                "product_values"    => $this->product_values,
                "customer_id"       => $this->customer_id
            ));
            if ($insert) {
                header("Location: /cart");
            } else {
                echo "Failed to add to cart";
            }
        }

    }

    public function getCheckProductCart($GetProduct, $customer_id){
        $query = $this->conn->prepare("SELECT * FROM " . $this->table_name . " WHERE customer_id='{$customer_id}'");
        $query->execute();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $product_values = json_decode($row['product_values']);
            foreach ($product_values as $key => $value) {
                foreach (json_decode($GetProduct) as $key2 => $value2) {
                    if ($key == $key2){
                        if ($value == $value2){
                            return $row['id'];
                        }else{
                            return 0;
                        }
                    }
                }
            }
        }

    }

    public function updateCart($id){
        $query = $this->conn->prepare("SELECT * FROM " . $this->table_name . " WHERE customer_id='{$this->customer_id}' AND id='{$id}'");
        $query->execute();
        while ($result = $query->fetchAll(PDO::FETCH_ASSOC)){
            $NewTotalQuantity = $this->total_quantity + $this->total_quantity;
            $NewTotalPrice = $this->total_price + $this->total_price;
        }

        $querye = $this->conn->prepare("UPDATE " . $this->table_name . " SET
                total_quantity=:total_quantity,
                total_price=:total_price,
                product_values=:product_values
                WHERE customer_id=:customer_id
        ");
        $insert = $querye->execute(array(
            "total_quantity"    => $NewTotalQuantity,
            "total_price"       => $NewTotalPrice,
            "product_values"    => $this->product_values,
            "customer_id"       => $this->customer_id
        ));
        if ($insert) {
            header("Location: /cart");
        } else {
            echo "Failed to add to cart";
        }
    }


    function cartAllItems($CustomerID){
        $query = "SELECT * FROM " .$this->table_name . " WHERE customer_id='{$CustomerID}'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function getCartPriceTotal($CustomerID){
        $query = "SELECT SUM(total_price) AS total_price FROM " .$this->table_name . " WHERE customer_id='{$CustomerID}'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $Get = $stmt->fetch(PDO::FETCH_ASSOC);
        return $Get['total_price'];
    }


    function getCartCountItem($CustomerID){
        $query = "SELECT sum(total_quantity) AS total_count FROM " .$this->table_name . " WHERE customer_id='{$CustomerID}'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $Get = $stmt->fetch(PDO::FETCH_ASSOC);
        return $Get['total_count'];
    }


    function deleteCartItem($id, $CustomerID){
        $query = "DELETE FROM " .$this->table_name . " WHERE id='{$id}' AND customer_id='{$CustomerID}'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

}