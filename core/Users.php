<?php

class Users{
    public function signIn($args = NULL)
    {
    
    }
    public function signUp($args = NULL)
    {
        $user_data = [
            'login' => $_POST['login'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ];
        App::get('database')->insert("users_login_data", $user_data);
        dd($_POST);
    }
}