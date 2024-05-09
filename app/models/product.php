<?php

Class Product    
{
    function product_list() {
        $DB = new Database();
    
        $query = "SELECT * FROM `dt_products` LEFT JOIN `dt_reviews` ON `dt_products`.`product_id` = `dt_reviews`.`product_id_ifk`";           
        
        $data = $DB->read($query, $arr=[]);
        $product_items = array();
    
        // Initialize an associative array to group reviews by product ID
        $grouped_reviews = array();
        foreach ($data as $review) {
            $grouped_reviews[$review->product_id][] = array(
                'reviews_id' => $review->reviews_id,
                'reviews_text' => $review->reviews_text,
                'create_at' => $review->create_at,
                'update_at' => $review->update_at
            );
        }
    
        // Iterate through each product
        foreach ($data as $product) {
            // Check if the product ID is already processed
            if (!isset($product_items[$product->product_id])) {
                // Initialize product details
                $product_items[$product->product_id] = array(
                    'product_id' => $product->product_id,
                    'product_name' => $product->product_name,
                    'product_description' => $product->product_description,
                    'product_type' => $product->product_type,
                    'product_size' => $product->product_size,
                    'product_category' => $product->product_category,
                    'product_images' => $product->product_images,
                    'product_preis_from' => $product->product_preis_from,
                    'product_preis_now' => $product->product_preis_now,
                    'reviews' => isset($grouped_reviews[$product->product_id]) ? $grouped_reviews[$product->product_id] : array()
                );
            }
        }
    
        // Reset keys to start from 0
        $product_items = array_values($product_items);
    
        return $product_items;
    }
    
   
    function addCart($product_id,$product_name,$product_preis,$product_image){

        // if((isset($_SESSION['user_id']) && isset($_SESSION['user_url'])))
        // {        
            if(!isset($_SESSION['cart'])){
                $_SESSION['cart'] = array();
            }

            $product_exist = false;
            foreach($_SESSION['cart'] as $product)
            {
                if($product['product_id'] == $product_id)
                {
                    $product_exist = true;
                    break;
                }
            }

            if(!$product_exist)
            {
                $_SESSION['cart'][] = array(
                    'product_id' => $product_id,
                    'product_name' => $product_name,
                    'product_preis' => $product_preis,
                    'product_image' => $product_image
                );
            }
        // }
       

        

       
    }

    
}    
    
?>