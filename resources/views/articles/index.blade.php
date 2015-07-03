@extends('app')

@section('content')
  <h1>Articles</h1>


  @foreach ($articles as $article)
    <article>
      <h2>
        <!--<a href="./article/{{$article->id}}">{{$article->title}}</a>-->
        <!-- <a href="{{ action('ArticlesController@show',[$article->id])}}">{{$article->title}}</a>-->
        <!-- <a href="./article/{{$article->id}}">{{$article->title}}</a> -->
        <a href="{{url('./article',$article->id)}}">{{$article->title}}</a>

      </h2>
      <div calss="contents">{{$article->contents}}</div>
    </article>

  @endforeach
@stop
