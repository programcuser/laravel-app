<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    function index()
    {
        $articles = Article::allPaginate(10);
        return view('app.article.index', compact('articles'));
    }

    function show($slug)
    {
        $article = Article::findBySlug($slug);
        return view('app.article.show', compact('article'));
    }
}
