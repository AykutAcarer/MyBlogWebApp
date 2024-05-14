<?php

Class User    
{
    function login($POST)
    {
        $DB = new Database();
        $_SESSION['error'] ='';
        if(isset($POST['email']) && isset($POST['password']))
        {
            $arr['email'] = $POST['email'];
            $arr['password'] = $POST['password'];
    
            $query = "select * from users where email = :email && password = :password limit 1";
            $data = $DB->read($query,$arr);

            if(is_array($data))
            {
                //logged in
                $_SESSION['firstname'] = $data[0]->firstname;
                $_SESSION['lastname'] = $data[0]->lastname;
                $_SESSION['user_id'] = $data[0]->id;
                $_SESSION['email'] = $data[0]->email;
                $_SESSION['user_url'] = $data[0]->url_address;

                header("Location:". ROOT ."index");
                die;
            }else{
                $_SESSION['error'] = "Username/password is/are not valid";
            }
            

        }else{
            $_SESSION['error'] = "Please enter a valid username/password";
        }
        
    }

    function logout()
    {
        //logout
        unset($_SESSION['firstname']);
        unset($_SESSION['lastname']); 
        unset($_SESSION['user_id']); 
        unset($_SESSION['email']); 
        unset($_SESSION['user_url']); 
        unset($_SESSION['cart_list']);
        

       
        
        header("Location:". ROOT ."index");
        die;
    }

    function register($POST)
    {
        $DB = new Database();
        $_SESSION['error'] ='';
        if(isset($POST['email']) && isset($POST['password']))
        {
            $arr['firstname'] = $POST['firstname'];
            $arr['lastname'] = $POST['lastname'];
            $arr['password'] = $POST['password'];
            $arr['email'] = $POST['email'];
            $arr['url_address'] = get_random_string_max(60);
            $arr['create_at'] = date("Y-m-d H:i:s");
    
            $query = "insert into users (firstname,lastname,password,email,create_at,url_address)  values (:firstname,:lastname,:password,:email,:create_at,:url_address)";
            $data = $DB->write($query,$arr);

            if($data)
            {
                //After registration goes to login page
                header("Location:". ROOT ."login");     
            }

        }else{
            $_SESSION['error'] = "Mailadress is used. Please use another mailadress";
        }
    }

    function check_logged_in($POST)
    {
        $DB = new Database();

        if(isset($_SESSION['user_url']))
        {
            $arr['user_url'] = $_SESSION['user_url'];
    
            $query = "select * from users where url_address = :user_url limit 1";
            $data = $DB->read($query,$arr);

            if(is_array($data))
            {
                
                $_SESSION['user_id'] = $data[0]->userid;
                $_SESSION['email'] = $data[0]->email;
                $_SESSION['user_url'] = $data[0]->url_address;

                return true;
            }
        }

        return false;

    }
}    
    
?>