<?php

Class User    
{
    function login($POST)
    {
        $DB = new Database();
        $_SESSION['error'] ='';
        if(isset($POST['username']) && isset($POST['password']))
        {
            $arr['username'] = $POST['username'];
            $arr['password'] = $POST['password'];
    
            $query = "select * from users where username = :username && password = :password limit 1";
            $data = $DB->read($query,$arr);

            if(is_array($data))
            {
                //logged in
                $_SESSION['user_id'] = $data[0]->id;
                $_SESSION['username'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;

                header("Location:". ROOT ."home");
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
        unset($_SESSION['user_id']);
        unset($_SESSION['username']); 
        unset($_SESSION['user_url']);

        header("Location:". ROOT ."home");
        die;
    }

    function register($POST)
    {
        $DB = new Database();
        $_SESSION['error'] ='';
        if(isset($POST['username']) && isset($POST['password']))
        {
            $arr['username'] = $POST['username'];
            $arr['password'] = $POST['password'];
            $arr['email'] = $POST['email'];
            $arr['url_address'] = get_random_string_max(60);
            $arr['date'] = date("Y-m-d H:i:s");
    
            $query = "insert into users (username,password,email,date,url_address)  values (:username,:password,:email,:date,:url_address)";
            $data = $DB->write($query,$arr);

            if($data)
            {
                //After registration goes to login page
                header("Location:". ROOT ."login");     
            }

        }else{
            $_SESSION['error'] = "Username/Mailadress is used. Please use another username/mailadress";
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
                $_SESSION['username'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;

                return true;
            }
        }

        return false;

    }
}    
    
?>