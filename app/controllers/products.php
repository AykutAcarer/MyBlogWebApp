<?php

Class Products extends Controller
{
    
    function index()
    { 
        $data['page_title'] = "Products";
        
        $product_list=[];
        $product = $this->loadModel("product");
        $product_list = $product->product_list();

        $this->view("template_freshshop/products",$data,$product_list);
        
    }

    

}




?>