<?php 

// RESTful routing example

$route->get('posts','Posts','index');
$route->get('posts/new','Posts','new');
$route->post('posts','Posts','create');
$route->get('posts/id','Posts','show');
$route->get('posts/id/edit','Posts','edit');
$route->patch('posts/id','Posts','update');
$route->delete('posts/id','Posts','destroy');