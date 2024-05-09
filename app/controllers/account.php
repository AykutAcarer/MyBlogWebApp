<?php

Class Account extends Controller
{
    
    function index()
    { 
        $data['page_title'] = "My Account";
        $this->view("template_freshshop/account",$data);
    }

    

}




?>