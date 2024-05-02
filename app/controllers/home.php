<?php

Class Home extends Controller
{
    
    function index()
    { 
        $data['page_title'] = "Home";
        $this->view("template_minima/home",$data);
    }

    

}




?>