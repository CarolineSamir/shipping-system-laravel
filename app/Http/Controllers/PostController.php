<?php

namespace App\Http\Controllers;

use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){
        $allPosts = [
            ['id' => 1, 'title' => 'MVC pattern', 'posted by' => 'Ahmed', 'created at'=>'2020-10-4'],
            ['id' => 2, 'title' => 'Artisan commands', 'posted by' => 'Samir', 'created at'=>'2020-9-15'],
            ['id' => 3, 'title' => 'schedule jobs ', 'posted by' => 'Hany', 'created at'=>'2021-5-28'],
            ['id' => 4, 'title' => 'Architecture', 'posted by' => 'Selem', 'created at'=>'2020-7-23'],
        ];
        $PostsFromDB = Post::all();
        return view('index', ['posts'=>$PostsFromDB]);

    }

    public function show($post){
        $GetPost = Post::findorfail($post);
//        $GetPost = Post::where('id', $post)->first();

        return view('show', ['ShowPost'=>$GetPost]);
    }
}
