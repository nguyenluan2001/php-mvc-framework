<?php
include_once __DIR__."/vendor/autoload.php";
use app\Core\Router;
use app\Controllers\Post;
$router=new Router();
$router->get('/post',[Post::class,'index']);
$router->get('/post/create',[Post::class,'create']);

