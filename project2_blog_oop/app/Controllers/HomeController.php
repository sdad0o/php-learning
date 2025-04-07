<?php
namespace App\Controllers;

use App\Models\Post;
use App\Models\User;
use Core\View;
use Exception;
class HomeController{
    public function index()
    {
        $posts = Post::getRecent(5);
        return View::render(template: 'home/index',data: ['posts'=>$posts],layout:'layouts/main');
    }
}