<?php

Class Cart extends Controller
{
    
    function index()
    { 
            if(isset($_GET['product_id']))
            {
                if(($_GET['product_id']=='newCart'))
                {
                    if($_SESSION['user_id']){
                    $data['page_title'] = "My Cart";
                    $cart = $this->loadModel("product");
                    $addCart = $cart->cart_list($_SESSION['user_id']);
                    $this->view("template_freshshop/cart",$data,$addCart);
                    }else{
                        $data['page_title'] = "My Cart";
                        $cart = $this->loadModel("product");
                        $addCart = $cart->addCart($_GET['product_id']);
                        $this->view("template_freshshop/cart",$data,$addCart);
                    }
                }
                else if($_GET['product_id'] !== ''){
                    $data['page_title'] = "My Cart";
                    $cart = $this->loadModel("product");
                    $addCart = $cart->addCart($_GET['product_id']);
                    $this->view("template_freshshop/cart",$data,$addCart);
                }
            
            }
            
        
    }

   

    

}




?>