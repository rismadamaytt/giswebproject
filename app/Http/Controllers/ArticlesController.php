<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::orderBy('created_at', 'DESC')->get();
        return view('articles.index', compact('articles'));
    }

    public function show(string $id)
    {
        //$articles = Article::all();
        $articles = Article::findOrFail($id);
        $articles = Article::orderBy('created_at', 'DESC')->get();
        return view('articles.show', compact('articles'));
    }
}
