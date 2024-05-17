<?php

Class Contact extends Controller
{
    
    function index()
    { 
       
            $data['page_title'] = "Contact";
            $message = $this->loadModel('user');
            $mail = $message->getMail($_POST);
            $this->view("template_freshshop/contact-us",$data);
        
        
    }

    

}




?>