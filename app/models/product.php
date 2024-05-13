<?php

Class Product    
{
    function product_list() {
        $DB = new Database();
    
        $query = "SELECT * FROM dt_products p
    LEFT JOIN 
        dt_images i ON p.product_id = i.product_id_fk
    LEFT JOIN 
        dt_reviews r ON p.product_id = r.product_id_ifk
    ";
                                                   
        
        $data = $DB->read($query, $arr=[]);
        $product_items = array();

        foreach ($data as $product) {
            // Check if product exists in the result array
            if (!isset($product_items[$product->product_id])) {
                // Initialize product details
                $product_items[$product->product_id] = array(
                    'product_id' => $product->product_id,
                    'product_name' => $product->product_name,
                    'product_description' => $product->product_description,
                    'product_type' => $product->product_type,
                    'product_size' => $product->product_size,
                    'product_category' => $product->product_category,
                    'product_preis_from' => $product->product_preis_from,
                    'product_preis_now' => $product->product_preis_now,
                    'images' => array(),
                    'reviews' => array()
                );
            }
    
            // Add image to product's images array if it's not already added
        if (!empty($product->images_url) && !in_array($product->images_id, array_column($product_items[$product->product_id]['images'], 'images_id'))) {
            $product_items[$product->product_id]['images'][] = array(
                'images_id' => $product->images_id,
                'images_url' => $product->images_url,
                'product_id_fk' =>$product->product_id_fk,
                'images_created_at' => $product->images_created_at,
                'images_updated_at' => $product->images_updated_at
            );
        }
    
            // Add review to product's reviews array if it's not already added
            if (!empty($product->reviews_text) && !in_array($product->reviews_id, array_column($product_items[$product->product_id]['reviews'], 'reviews_id'))) {
                $product_items[$product->product_id]['reviews'][] = array(
                    'reviews_id' => $product->reviews_id,
                    'reviews_text' => $product->reviews_text,
                    'create_at' => $product->create_at,
                    'update_at' => $product->update_at
                );
            }
        }
    
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