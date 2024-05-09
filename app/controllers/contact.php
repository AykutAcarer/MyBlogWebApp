<?php

Class Contact extends Controller
{
    
    function index()
    { 
        $data['page_title'] = "Contact";
        $this->view("template_freshshop/contact-us",$data);
    }

    

}




?>