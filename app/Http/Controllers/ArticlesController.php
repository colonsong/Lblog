<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Request;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    //
    public function index()
    {
      //$articles = Article::all();
      $articles = Article::latest('published_at')->get();
      //$articles = Article::order_by('published_at','desc')->get();
      return view('articles.index',compact('articles'));
      //or
      //return view('articles.index')->with('articles',$articles);
    }


    public function show($id)
    {
      $article = Article::findOrFail($id);
      //dd($article);
      //return $article;
      return view('articles.show',compact('article'));
    }
    //新增文章
    public function create()
    {
      return view('articles.create');
    }

    public function store()
    {
      $input = Request::all();
      //沒有轉成Carbon::now格式的話這欄位不會寫入
      $input['published_at'] = Carbon::now();
      //$input = Request::get('title');

      Article::create($input);
      return redirect('articles');
    }
}
