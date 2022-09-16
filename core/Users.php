<?php

class Users{
    private $users_table = "users_login_data";

    public function signIn($args = NULL)
    {
        $login = $_POST["login"];
        $password = $_POST["password"];
        
        $user = App::get("database")->getRowsWhere($this->users_table, ['login' => $_POST['login']]);
        $user_count = count($user);
        if (!$user_count){
            dd('No such user, dude');
            // ДОПИСАТЬ ПОВЕДЕНИЕ ПРИ ОТСУТВИИ ПОЛЬЗОВАТЕЛЯ!
        }

        if (password_verify($password, $user['password'])){
            if (password_needs_rehash($user['password'], PASSWORD_DEFAULT)){
                // ДОБАВИТЬ ПОВЕДЕНИЕ ПРИ ПЕРЕХЕШИРОВАННИИ ПАРОЛЯ
            }
            $_SESSION['user_id'] = $user['id'];
            header('Location: /');
            die;
        }
        dd("Wrong pass, dude");
        
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