<?php

Class Cartdelete extends Controller
{
    
    function index()
    { 
        $cart = $this->loadModel("product");
        $cart->deleteCart($_GET['product_id']);
        
    }

}




?>