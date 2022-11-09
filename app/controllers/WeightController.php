<?php

class WeightController
{
    public function index($args = NULL)
    {   
        if (isset($_SESSION['user_id'])){
            $user_name = App::get('database')->getRowsWhere(Users::$users_table, ['id' => $_SESSION['user_id']]);
            $user_name = $user_name[0]->login;
            $weight_points = App::get('database')->getRowsWhere('weight_points', ['user_id' => $_SESSION['user_id']], 'order by date');
            $user_weight = array_map(function($item){return $item->weight;}, $weight_points);
            $user_date = array_map(function($item){return $item->date;}, $weight_points);
        }
        require "app/views/index.view.php";
    }

    public function addPoint($args = NULL)
    {
        
    }
}