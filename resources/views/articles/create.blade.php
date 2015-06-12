@extends('app')

@section('content')
  <h1>新增文章</h1>

  <hr>

  {!! Form::open(['url'=>'articles']) !!}
    <div class="form-group">
      {!! Form::label('name','標題：') !!}
      <!-- element,default value,params -->
      {!! Form::text('title',null,['class'=>'form-control','data-example'=>'example data']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('contents','內容：') !!}
      <!-- element,default value,params -->
      {!! Form::textarea('contents',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('新增文章',['class'=>'btn btn-primary form-control']) !!}
    </div>

  {!! Form::close() !!}
@stop
