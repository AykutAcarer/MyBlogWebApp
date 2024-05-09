<?php

Class Landingpage extends Controller
{
    
    function index()
    { 
        $data['page_title'] = "Landing Page";
        $this->view("template_freshshop/index",$data);
    }

    

}




?>