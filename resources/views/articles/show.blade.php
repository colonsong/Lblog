@extends('app')

@section('content')
    <h1>{{$article->title}}</h1>
    <article>
      {{$article->contents}}
    </article>
@stop
