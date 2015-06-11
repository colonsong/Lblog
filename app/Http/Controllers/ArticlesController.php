<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticlesController extends Controller
{
    //
    public function index()
    {
      $articles = Article::all();
      return view('articles.index',compact('articles'));
      //or
      //return view('articles.index')->with('articles',$articles);
    }
}
