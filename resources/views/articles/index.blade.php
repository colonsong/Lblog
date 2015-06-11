@extends('app')

@section('content')
  <h1>Articles</h1>


  @foreach ($articles as $article)
    <article>
      <h2>{{$article->title}}</h2>
      <div calss="contents">{{$article->contents}}</div>
    </article>

  @endforeach
@stop
