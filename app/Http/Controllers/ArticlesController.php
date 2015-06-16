<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Carbon\Carbon;
use App\Http\Requests\CreateArticleRequest;



class ArticlesController extends Controller
{
    //
    public function index()
    {
      //$articles = Article::all();
      //$articles = Article::latest('published_at')->get();
      //$articles = Article::order_by('published_at','desc')->get();
      // $articles = Article::latest('published_at')->where('published_at','<=',Carbon::now())->get();
      $articles = Article::latest('published_at')->published()->get();
      return view('articles.index',compact('articles'));
      //or
      //return view('articles.index')->with('articles',$articles);
    }


    public function show($id)
    {
      $article = Article::findOrFail($id);
      //dd($article);
        //string
        //dd($article->published);
        //Carbon Object
        //dd($article->created_at);
        //Carbon可以做很多的轉換
        //$article->created_at->year; //month addDays(8) format('Y-m-d');
        //diffForHumans 這比較特別 5 days ago       //return $article;
      return view('articles.show',compact('article'));
    }
    //新增文章
    public function create()
    {
      return view('articles.create');
    }

    public function store(CreateArticleRequest $request)
    {
        //$input = Request::all();
        //沒有轉成Carbon::now格式的話這欄位不會寫入
        //$input['published_at'] = Carbon::now();
        //$input = Request::get('title');

        Article::create($request->all());//移除use Request;
        return redirect('articles');
    }
}
