<?php

class Users{
    private $users_table = "users_login_data";

    public function signIn($args = NULL)
    {
        $answer = [
            "login" => false,
        ];

        $login = $_POST["login"];
        $password = $_POST["password"];

        if (!$login or !$password){
            echo json_encode($answer);
            die;
        }
        
        $user = App::get("database")->getRowsWhere($this->users_table, ['login' => $_POST['login']]);
        $user_count = count($user);
        if (!$user_count){
            echo json_encode($answer);
            die;
        }
        
        if (password_verify($password, $user[0]->password)){
            if (password_needs_rehash($user['password'], PASSWORD_DEFAULT)){
                // ДОБАВИТЬ ПОВЕДЕНИЕ ПРИ ПЕРЕХЕШИРОВАННИИ ПАРОЛЯ
            }
            $answer['login'] = true;
            $_SESSION['user_id'] = $user[0]->id;
        }
        echo json_encode($answer);
        
    }

    public function signUp($args = NULL)
    {
        $answer = [
            "login" => false,
        ];

        $login = $_POST["login"];
        $password = $_POST["password"];
        $password_check = $_POST["password_check"];

        if ($login == ''){
            echo json_encode($answer);
            die;
        }

        if (!preg_match('/^[a-zA-Z0-9-._]{3,15}$/', $login)){
            echo json_encode($answer);
            die;
        }

        if (strlen($password) < 3 or strlen($password) > 256){
            echo json_encode($answer);
            die;
        }

        if ($password != $password_check){
            echo json_encode($answer);
            die;            
        }

        $user_data = [
            'login' => $_POST['login'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ];
        App::get('database')->insert("users_login_data", $user_data);

    }
}