<?php

Class Register extends Controller
{

    function index()
    {
        $data['page_title'] = "Registeration";
        if(isset($_POST['email']) && isset($_POST['password']))
        {
            $user = $this->loadModel("user");
            $user->register($_POST);
        }
        $this->view("template_freshshop/register",$data);
    }
}


?>