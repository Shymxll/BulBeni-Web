<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Nette\Utils\ArrayList;
use PhpParser\Node\Expr\Cast\Array_;

class PostController extends Controller
{
    public function index(){
        $posts = Post::query() -> get();
        return view("Post.posts",compact("posts"));
    }

    public function insert(){
        $post = new Post;
        $post ->title = "basic title";
        $post ->description = "basic desc";
        $post ->worf = 0;
        $post ->save();
        return view("Post.newPost");
    }
}
