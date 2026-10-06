<?php 
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $product = $_POST["product"];
    $qty = $_POST["qty"];
    if($qty>0){
        echo "Add product $product to cart,qty: $qty";
        
    }else{
        echo "Invalid Qty";
    }
}

?>