<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        return view("Post.posts");
    }

    public function insert(){

        return view("Post.newPost");
    }
}
