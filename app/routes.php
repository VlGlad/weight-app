<?php

$router->get('', 'WeightController@index');
$router->get('about', 'PageController@about');
$router->post('signup', 'Users@signUp');
$router->post('signin', 'Users@signIn');