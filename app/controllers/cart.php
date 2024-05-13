<?php

Class Cart extends Controller
{
    
    function index()
    { 
            if(isset($_GET['product_id']))
            {
                if(($_GET['product_id']=='newCart'))
                {
                    $data['page_title'] = "My Cart";
                    $this->view("template_freshshop/cart",$data,$addCart=[]);
                }
                else{
                    $data['page_title'] = "My Cart";
                    $cart = $this->loadModel("product");
                    $addCart = $cart->addCart($_GET['product_id'],$_GET['product_name'], $_GET['product_preis'],$_GET['product_images']);
                    $this->view("template_freshshop/cart",$data,$addCart);
                }
            
            }
            
        
    }

    

}




?>