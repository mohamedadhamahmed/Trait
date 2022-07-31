<?php

namespace App\Http\Controllers;
use  App\Traits\TestTrait;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
class TestController extends Controller
{
    //
    use TestTrait;
    public function index(){
        $users=$this->getAllUser(new User());
        $posts=$this->getAllUser(new Post());
        return $posts;
    }
}
