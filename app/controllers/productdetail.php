<?php

Class ProductDetail extends Controller
{
    
    function index()
    { 
        show($_POST);
        if(isset($_POST['fullname']) && isset($_POST['review']))
        {
                $data['page_title'] = "Products Detail";
                $product_id = $_POST['product_id'];
                $review = $this->loadModel("product");
                $product_reviews = $review->addReview($product_id, $_POST);
                
            
        }
        else{
            $data['page_title'] = "Products Detail";
       
            // $product_id = $_GET['product_id'];
                
            $product_details=[];
            $product = $this->loadModel("product");
            $product_details = $product->product_list();
            $this->view("template_freshshop/productdetail",$data, $product_details);
        }
    }

    

}




?>