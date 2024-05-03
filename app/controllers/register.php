<?php

Class Register extends Controller
{

    function index()
    {
        $data['page_title'] = "Registeration";
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']))
        {
            $user = $this->loadModel("user");
            $user->register($_POST);
        }
        $this->view("template_minima/register",$data);
    }
}


?>