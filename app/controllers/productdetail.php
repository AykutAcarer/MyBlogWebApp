<?php

Class ProductDetail extends Controller
{
    
    function index()
    { 
        $data['page_title'] = "Products Detail";
       
        // $product_id = $_GET['product_id'];
            
        $product_details=[];
        $product = $this->loadModel("product");
        $product_details = $product->product_list();
        $this->view("template_freshshop/productdetail",$data, $product_details);
    }

    

}




?>