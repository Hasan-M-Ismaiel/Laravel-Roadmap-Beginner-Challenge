<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request){
        
    }

    public function create(Request $request){
        $request->validate([
            'title' => 'required',
            'text' => 'required'
        ]);

        //here you should continue to create the article
        $data = [
            'title' => $request->title,
            'text' => $request->text
        ];
        Article::create($data);
    }
}
