<?php

class WeightController
{

    public function index($args = NULL)
    {   
        if (isset($_SESSION['user_id'])){
            $user_name = App::get('database')->getRowsWhere(Users::$users_table, ['id' => $_SESSION['user_id']]);
            $user_name = $user_name[0]->login;

        }
        require "app/views/index.view.php";
    }
}